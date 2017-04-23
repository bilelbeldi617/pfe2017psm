<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d1a7740b1aadc9794ecd9abc79559bb27b5feb0d0da0ded9e58b63010f6df014 extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40713e6883730308e390bfa903bd7bc70ec161cb29da23374d39b1f61e19948c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40713e6883730308e390bfa903bd7bc70ec161cb29da23374d39b1f61e19948c->enter($__internal_40713e6883730308e390bfa903bd7bc70ec161cb29da23374d39b1f61e19948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";

        $__internal_40713e6883730308e390bfa903bd7bc70ec161cb29da23374d39b1f61e19948c->leave($__internal_40713e6883730308e390bfa903bd7bc70ec161cb29da23374d39b1f61e19948c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }
}
