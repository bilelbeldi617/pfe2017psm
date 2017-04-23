<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b6aaa1886cf467f70b69bc8cb246aeb4ad9bf5cf931c3bcd0ce09de16e919136 extends Twig_Template
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
        return array(25 => 2, 22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36ff339d529d2148ccbb38d2a8b01900c8a48ddef1643a7bf2a5566423ac4602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ff339d529d2148ccbb38d2a8b01900c8a48ddef1643a7bf2a5566423ac4602->enter($__internal_36ff339d529d2148ccbb38d2a8b01900c8a48ddef1643a7bf2a5566423ac4602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";

        $__internal_36ff339d529d2148ccbb38d2a8b01900c8a48ddef1643a7bf2a5566423ac4602->leave($__internal_36ff339d529d2148ccbb38d2a8b01900c8a48ddef1643a7bf2a5566423ac4602_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }
}
