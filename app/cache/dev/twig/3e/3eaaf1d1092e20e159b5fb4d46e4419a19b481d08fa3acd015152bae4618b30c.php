<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_19aca92ea0dac9742ced4c8ea8b0f81019e9727cf490dad42ddde6bd0cc12995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array();
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49da26367224ecc7da48e7919f87038afc621bff28705b65ac29287f65960e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49da26367224ecc7da48e7919f87038afc621bff28705b65ac29287f65960e4d->enter($__internal_49da26367224ecc7da48e7919f87038afc621bff28705b65ac29287f65960e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));

        $__internal_49da26367224ecc7da48e7919f87038afc621bff28705b65ac29287f65960e4d->leave($__internal_49da26367224ecc7da48e7919f87038afc621bff28705b65ac29287f65960e4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }
}
