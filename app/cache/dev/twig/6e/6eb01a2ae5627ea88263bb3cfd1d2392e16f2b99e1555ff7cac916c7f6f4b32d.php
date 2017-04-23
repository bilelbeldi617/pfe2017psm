<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bd339a052b83fcedf0b9203f391b62e1bf252caa927a9f1435c20e6f83754c79 extends Twig_Template
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae963a4cad8d08dea7ad4427d6bb5e0693a4d19fb521df7d0b4a912fde04aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae963a4cad8d08dea7ad4427d6bb5e0693a4d19fb521df7d0b4a912fde04aa7->enter($__internal_eae963a4cad8d08dea7ad4427d6bb5e0693a4d19fb521df7d0b4a912fde04aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));

        $__internal_eae963a4cad8d08dea7ad4427d6bb5e0693a4d19fb521df7d0b4a912fde04aa7->leave($__internal_eae963a4cad8d08dea7ad4427d6bb5e0693a4d19fb521df7d0b4a912fde04aa7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }
}
