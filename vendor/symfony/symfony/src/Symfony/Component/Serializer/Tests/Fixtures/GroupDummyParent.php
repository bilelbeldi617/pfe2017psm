<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Tests\Fixtures;

use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class GroupDummyParent
{
    /**
     * @Groups({"a"})
     */
    private $kevin;
    private $coopTilleuls;

    public function getKevin()
    {
        return $this->kevin;
    }

    public function setKevin($kevin)
    {
        $this->kevin = $kevin;
    }

    /**
     * @Groups({"a", "b"})
     */
    public function getCoopTilleuls()
    {
        return $this->coopTilleuls;
    }

    public function setCoopTilleuls($coopTilleuls)
    {
        $this->coopTilleuls = $coopTilleuls;
    }
}
