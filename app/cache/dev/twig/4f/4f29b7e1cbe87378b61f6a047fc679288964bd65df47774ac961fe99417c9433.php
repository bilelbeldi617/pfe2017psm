<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_eb770c8a6c9ddb07ac26fd26de9741d117ea17f76fb55328883eb0b7319d3ec7 extends Twig_Template
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
        $__internal_5e9d191e7f8c267c96c837f93874eb57441117544dc1faabc8eb2d881727c5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9d191e7f8c267c96c837f93874eb57441117544dc1faabc8eb2d881727c5ef->enter($__internal_5e9d191e7f8c267c96c837f93874eb57441117544dc1faabc8eb2d881727c5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_5e9d191e7f8c267c96c837f93874eb57441117544dc1faabc8eb2d881727c5ef->leave($__internal_5e9d191e7f8c267c96c837f93874eb57441117544dc1faabc8eb2d881727c5ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
