<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_eb770c8a6c9ddb07ac26fd26de9741d117ea17f76fb55328883eb0b7319d3ec7 extends Twig_Template
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acc8e81cfc7e49f0c93f06647ffd70f62f076d1d07e5ccfef4e367e60c705156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc8e81cfc7e49f0c93f06647ffd70f62f076d1d07e5ccfef4e367e60c705156->enter($__internal_acc8e81cfc7e49f0c93f06647ffd70f62f076d1d07e5ccfef4e367e60c705156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);

        $__internal_acc8e81cfc7e49f0c93f06647ffd70f62f076d1d07e5ccfef4e367e60c705156->leave($__internal_acc8e81cfc7e49f0c93f06647ffd70f62f076d1d07e5ccfef4e367e60c705156_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }
}
