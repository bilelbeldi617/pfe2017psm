<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c054ddb0b82b31d3888a76d144973a6470225f4a9370fe0bd156b845bb6a8911 extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d096f062d4c23e35218798e2edc15dbca8598f3dc1da1796f3d3ba7348ba6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d096f062d4c23e35218798e2edc15dbca8598f3dc1da1796f3d3ba7348ba6b->enter($__internal_f9d096f062d4c23e35218798e2edc15dbca8598f3dc1da1796f3d3ba7348ba6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";

        $__internal_f9d096f062d4c23e35218798e2edc15dbca8598f3dc1da1796f3d3ba7348ba6b->leave($__internal_f9d096f062d4c23e35218798e2edc15dbca8598f3dc1da1796f3d3ba7348ba6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }
}
