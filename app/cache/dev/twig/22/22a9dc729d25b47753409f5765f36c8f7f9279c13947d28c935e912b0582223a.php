<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_878a2471e564b537a307e84e0d3aed125b5bb5c097ff915b9765ea9258f5f2f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array();
    }

    public function getDebugInfo()
    {
        return array(22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60fc35ad5a492ef10cee436d7275f2d3735281333f1bccc0b365372db607aa90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fc35ad5a492ef10cee436d7275f2d3735281333f1bccc0b365372db607aa90->enter($__internal_60fc35ad5a492ef10cee436d7275f2d3735281333f1bccc0b365372db607aa90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";

        $__internal_60fc35ad5a492ef10cee436d7275f2d3735281333f1bccc0b365372db607aa90->leave($__internal_60fc35ad5a492ef10cee436d7275f2d3735281333f1bccc0b365372db607aa90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }
}
