<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_591646ca8c93129ad7daa02d5a8c7f9dcea797a67d3808fd4aadb1a9e0ef38b1 extends Twig_Template
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
        $__internal_d2c741dd0164171868bf14a5fb90ba993f24cd056db27d76b3ca955b84efa47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c741dd0164171868bf14a5fb90ba993f24cd056db27d76b3ca955b84efa47a->enter($__internal_d2c741dd0164171868bf14a5fb90ba993f24cd056db27d76b3ca955b84efa47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d2c741dd0164171868bf14a5fb90ba993f24cd056db27d76b3ca955b84efa47a->leave($__internal_d2c741dd0164171868bf14a5fb90ba993f24cd056db27d76b3ca955b84efa47a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
