<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5f4781dc16e6c666aff2b021135ec634adc0269bd09d2adf49615f46bedd01ce extends Twig_Template
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
        return array(27 => 3, 25 => 2, 22 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b50276e622372fc7fffd3a4d487e38192e05b36983e93fe49486d268361597d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b50276e622372fc7fffd3a4d487e38192e05b36983e93fe49486d268361597d->enter($__internal_0b50276e622372fc7fffd3a4d487e38192e05b36983e93fe49486d268361597d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";

        $__internal_0b50276e622372fc7fffd3a4d487e38192e05b36983e93fe49486d268361597d->leave($__internal_0b50276e622372fc7fffd3a4d487e38192e05b36983e93fe49486d268361597d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }
}
