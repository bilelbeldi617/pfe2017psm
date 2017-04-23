<?php

/* @projet/Default/login.html.twig */
class __TwigTemplate_c5d78b8075c4c4d3d3e76cdf543dea7547c65e2fc4b1cb4d3b7b13da933b30ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForLogin.html.twig", "@projet/Default/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_5d84264c822b44fe67c83ecab3d2b284a97fbdbb3cd6f3190ce81f3cfb9719ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d84264c822b44fe67c83ecab3d2b284a97fbdbb3cd6f3190ce81f3cfb9719ec->enter($__internal_5d84264c822b44fe67c83ecab3d2b284a97fbdbb3cd6f3190ce81f3cfb9719ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    S'authentifier

";

        $__internal_5d84264c822b44fe67c83ecab3d2b284a97fbdbb3cd6f3190ce81f3cfb9719ec->leave($__internal_5d84264c822b44fe67c83ecab3d2b284a97fbdbb3cd6f3190ce81f3cfb9719ec_prof);

    }

    public function isTraitable()
    {
        return false;
    }

    // line 3

    public function getDebugInfo()
    {
        return array(40 => 4, 34 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForLogin.html.twig\"%}

{% block title %}

    S'authentifier

{% endblock %}


", "@projet/Default/login.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\login.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9c68d6c61027884fd1f65778257acecf10a622a8039597a7b92b5540769ebc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c68d6c61027884fd1f65778257acecf10a622a8039597a7b92b5540769ebc7->enter($__internal_f9c68d6c61027884fd1f65778257acecf10a622a8039597a7b92b5540769ebc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_f9c68d6c61027884fd1f65778257acecf10a622a8039597a7b92b5540769ebc7->leave($__internal_f9c68d6c61027884fd1f65778257acecf10a622a8039597a7b92b5540769ebc7_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/login.html.twig";
    }
}
