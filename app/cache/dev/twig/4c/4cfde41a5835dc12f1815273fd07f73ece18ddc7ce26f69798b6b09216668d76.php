<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b25e852b7aa72fe0e76fd86ada39c22b5ddece55f2288309022a27c2aa8e0f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4ad4a5a04de8174b828c7f73d719d8da0a0004db0fefc22aba1d217239fbfe7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ad4a5a04de8174b828c7f73d719d8da0a0004db0fefc22aba1d217239fbfe7->enter($__internal_b4ad4a5a04de8174b828c7f73d719d8da0a0004db0fefc22aba1d217239fbfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4ad4a5a04de8174b828c7f73d719d8da0a0004db0fefc22aba1d217239fbfe7->leave($__internal_b4ad4a5a04de8174b828c7f73d719d8da0a0004db0fefc22aba1d217239fbfe7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c1bf49115bc6eef92e19e874d5c2681d71064998c6884b97917d80b4c31b9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1bf49115bc6eef92e19e874d5c2681d71064998c6884b97917d80b4c31b9f1->enter($__internal_2c1bf49115bc6eef92e19e874d5c2681d71064998c6884b97917d80b4c31b9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2c1bf49115bc6eef92e19e874d5c2681d71064998c6884b97917d80b4c31b9f1->leave($__internal_2c1bf49115bc6eef92e19e874d5c2681d71064998c6884b97917d80b4c31b9f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_323694903d31899a6660e90d06548721c1425b4ad933cd647427cce350a2fe37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323694903d31899a6660e90d06548721c1425b4ad933cd647427cce350a2fe37->enter($__internal_323694903d31899a6660e90d06548721c1425b4ad933cd647427cce350a2fe37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_323694903d31899a6660e90d06548721c1425b4ad933cd647427cce350a2fe37->leave($__internal_323694903d31899a6660e90d06548721c1425b4ad933cd647427cce350a2fe37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
