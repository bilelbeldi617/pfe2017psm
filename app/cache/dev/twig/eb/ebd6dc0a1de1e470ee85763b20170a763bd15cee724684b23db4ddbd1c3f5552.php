<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c054ddb0b82b31d3888a76d144973a6470225f4a9370fe0bd156b845bb6a8911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcc99a0f02d3a5b66308cd22275b0e838dde564b4cc59fc756057a602093aa8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc99a0f02d3a5b66308cd22275b0e838dde564b4cc59fc756057a602093aa8c->enter($__internal_fcc99a0f02d3a5b66308cd22275b0e838dde564b4cc59fc756057a602093aa8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fcc99a0f02d3a5b66308cd22275b0e838dde564b4cc59fc756057a602093aa8c->leave($__internal_fcc99a0f02d3a5b66308cd22275b0e838dde564b4cc59fc756057a602093aa8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
