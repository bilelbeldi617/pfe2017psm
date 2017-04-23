<?php

/* TwigBundle:Exception:exception.rdf.twig */

class __TwigTemplate_0d2d4e9f78f0da99317efcd0fc3abc83a355a6ecf5da3488f0443aedb390f0d9 extends Twig_Template
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc6214608e296c299327db7f9b82443873fb4be04a3e9dbc08cc056ae85c1a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc6214608e296c299327db7f9b82443873fb4be04a3e9dbc08cc056ae85c1a4c->enter($__internal_dc6214608e296c299327db7f9b82443873fb4be04a3e9dbc08cc056ae85c1a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));

        $__internal_dc6214608e296c299327db7f9b82443873fb4be04a3e9dbc08cc056ae85c1a4c->leave($__internal_dc6214608e296c299327db7f9b82443873fb4be04a3e9dbc08cc056ae85c1a4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }
}
