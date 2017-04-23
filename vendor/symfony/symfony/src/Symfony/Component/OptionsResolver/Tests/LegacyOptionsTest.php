<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\OptionsResolver\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @group legacy
 */
class LegacyOptionsTest extends TestCase
{
    /**
     * @var OptionsResolver
     */
    private $options;

    public function testSetLazyOption()
    {
        $test = $this;

        $this->options->set('foo', function (Options $options) use ($test) {
            return 'dynamic';
        });

        $this->assertEquals(array('foo' => 'dynamic'), $this->options->resolve());
    }

    public function testOverloadKeepsPreviousValue()
    {
        $test = $this;

        // defined by superclass
        $this->options->set('foo', 'bar');

        // defined by subclass
        $this->options->overload('foo', function (Options $options, $previousValue) use ($test) {
            /* @var TestCase $test */
            $test->assertEquals('bar', $previousValue);

            return 'dynamic';
        });

        $this->assertEquals(array('foo' => 'dynamic'), $this->options->resolve());
    }

    public function testPreviousValueIsEvaluatedIfLazy()
    {
        $test = $this;

        // defined by superclass
        $this->options->set('foo', function (Options $options) {
            return 'bar';
        });

        // defined by subclass
        $this->options->overload('foo', function (Options $options, $previousValue) use ($test) {
            /* @var TestCase $test */
            $test->assertEquals('bar', $previousValue);

            return 'dynamic';
        });

        $this->assertEquals(array('foo' => 'dynamic'), $this->options->resolve());
    }

    public function testPreviousValueIsNotEvaluatedIfNoSecondArgument()
    {
        $test = $this;

        // defined by superclass
        $this->options->set('foo', function (Options $options) use ($test) {
            $test->fail('Should not be called');
        });

        // defined by subclass, no $previousValue argument defined!
        $this->options->overload('foo', function (Options $options) use ($test) {
            return 'dynamic';
        });

        $this->assertEquals(array('foo' => 'dynamic'), $this->options->resolve());
    }

    public function testLazyOptionCanAccessOtherOptions()
    {
        $test = $this;

        $this->options->set('foo', 'bar');

        $this->options->set('bam', function (Options $options) use ($test) {
            /* @var TestCase $test */
            $test->assertEquals('bar', $options->get('foo'));

            return 'dynamic';
        });

        $this->assertEquals(array('foo' => 'bar', 'bam' => 'dynamic'), $this->options->resolve());
    }

    public function testLazyOptionCanAccessOtherLazyOptions()
    {
        $test = $this;

        $this->options->set('foo', function (Options $options) {
            return 'bar';
        });

        $this->options->set('bam', function (Options $options) use ($test) {
            /* @var TestCase $test */
            $test->assertEquals('bar', $options->get('foo'));

            return 'dynamic';
        });

        $this->assertEquals(array('foo' => 'bar', 'bam' => 'dynamic'), $this->options->resolve());
    }

    public function testNormalizer()
    {
        $this->options->set('foo', 'bar');

        $this->options->setNormalizer('foo', function () {
            return 'normalized';
        });

        $this->assertEquals(array('foo' => 'normalized'), $this->options->resolve());
    }

    public function testNormalizerReceivesUnnormalizedValue()
    {
        $this->options->set('foo', 'bar');

        $this->options->setNormalizer('foo', function (Options $options, $value) {
            return 'normalized[' . $value . ']';
        });

        $this->assertEquals(array('foo' => 'normalized[bar]'), $this->options->resolve());
    }

    public function testNormalizerCanAccessOtherOptions()
    {
        $test = $this;

        $this->options->set('foo', 'bar');
        $this->options->set('bam', 'baz');

        $this->options->setNormalizer('bam', function (Options $options) use ($test) {
            /* @var TestCase $test */
            $test->assertEquals('bar', $options->get('foo'));

            return 'normalized';
        });

        $this->assertEquals(array('foo' => 'bar', 'bam' => 'normalized'), $this->options->resolve());
    }

    public function testNormalizerCanAccessOtherLazyOptions()
    {
        $test = $this;

        $this->options->set('foo', function (Options $options) {
            return 'bar';
        });
        $this->options->set('bam', 'baz');

        $this->options->setNormalizer('bam', function (Options $options) use ($test) {
            /* @var TestCase $test */
            $test->assertEquals('bar', $options->get('foo'));

            return 'normalized';
        });

        $this->assertEquals(array('foo' => 'bar', 'bam' => 'normalized'), $this->options->resolve());
    }

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\OptionDefinitionException
     */
    public function testFailForCyclicDependencies()
    {
        $this->options->set('foo', function (Options $options) {
            $options->get('bam');
        });

        $this->options->set('bam', function (Options $options) {
            $options->get('foo');
        });

        $this->options->resolve();
    }

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\OptionDefinitionException
     */
    public function testFailForCyclicDependenciesBetweenNormalizers()
    {
        $this->options->set('foo', 'bar');
        $this->options->set('bam', 'baz');

        $this->options->setNormalizer('foo', function (Options $options) {
            $options->get('bam');
        });

        $this->options->setNormalizer('bam', function (Options $options) {
            $options->get('foo');
        });

        $this->options->resolve();
    }

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\OptionDefinitionException
     */
    public function testFailForCyclicDependenciesBetweenNormalizerAndLazyOption()
    {
        $this->options->set('foo', function (Options $options) {
            $options->get('bam');
        });
        $this->options->set('bam', 'baz');

        $this->options->setNormalizer('bam', function (Options $options) {
            $options->get('foo');
        });

        $this->options->resolve();
    }

    public function testReplaceClearsAndSets()
    {
        $this->options->set('one', '1');

        $this->options->replace(array(
            'two' => '2',
            'three' => function (Options $options) {
                return '2' === $options['two'] ? '3' : 'foo';
            },
        ));

        $this->assertEquals(array(
            'two' => '2',
            'three' => '3',
        ), $this->options->resolve());
    }

    public function testClearRemovesAllOptions()
    {
        $this->options->set('one', 1);
        $this->options->set('two', 2);

        $this->options->clear();

        $this->assertEmpty($this->options->resolve());
    }

    public function testOverloadCannotBeEvaluatedLazilyWithoutExpectedClosureParams()
    {
        $this->options->set('foo', 'bar');

        $this->options->overload('foo', function () {
            return 'test';
        });

        $resolved = $this->options->resolve();
        $this->assertInternalType('callable', $resolved['foo']);
    }

    public function testOverloadCannotBeEvaluatedLazilyWithoutFirstParamTypeHint()
    {
        $this->options->set('foo', 'bar');

        $this->options->overload('foo', function ($object) {
            return 'test';
        });

        $resolved = $this->options->resolve();
        $this->assertInternalType('callable', $resolved['foo']);
    }

    public function testRemoveOptionAndNormalizer()
    {
        $this->options->set('foo1', 'bar');
        $this->options->setNormalizer('foo1', function (Options $options) {
            return '';
        });
        $this->options->set('foo2', 'bar');
        $this->options->setNormalizer('foo2', function (Options $options) {
            return '';
        });

        $this->options->remove('foo2');
        $this->assertEquals(array('foo1' => ''), $this->options->resolve());
    }

    public function testReplaceOptionAndNormalizer()
    {
        $this->options->set('foo1', 'bar');
        $this->options->setNormalizer('foo1', function (Options $options) {
            return '';
        });
        $this->options->set('foo2', 'bar');
        $this->options->setNormalizer('foo2', function (Options $options) {
            return '';
        });

        $this->options->replace(array('foo1' => 'new'));
        $this->assertEquals(array('foo1' => 'new'), $this->options->resolve());
    }

    public function testClearOptionAndNormalizer()
    {
        $this->options->set('foo1', 'bar');
        $this->options->setNormalizer('foo1', function (Options $options) {
            return '';
        });
        $this->options->set('foo2', 'bar');
        $this->options->setNormalizer('foo2', function (Options $options) {
            return '';
        });

        $this->options->clear();
        $this->assertEmpty($this->options->resolve());
    }

    protected function setUp()
    {
        $this->options = new OptionsResolver();
    }
}
