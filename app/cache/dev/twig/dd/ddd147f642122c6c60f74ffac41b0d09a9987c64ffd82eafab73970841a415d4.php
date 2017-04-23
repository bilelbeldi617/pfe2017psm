<?php

/* @projet/Default/Enseignant/index.html.twig */
class __TwigTemplate_827ecc591758509f124c55c728ef1002ad610cf6879614579a664bd59c648959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "@projet/Default/Enseignant/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_91dd6f642b06a2434318fd819495a37350cf7e638735d3e82d9d61f8f14b15d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91dd6f642b06a2434318fd819495a37350cf7e638735d3e82d9d61f8f14b15d8->enter($__internal_91dd6f642b06a2434318fd819495a37350cf7e638735d3e82d9d61f8f14b15d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";

        $__internal_91dd6f642b06a2434318fd819495a37350cf7e638735d3e82d9d61f8f14b15d8->leave($__internal_91dd6f642b06a2434318fd819495a37350cf7e638735d3e82d9d61f8f14b15d8_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_fb93304f74521f464136d2831c3054fded4613538440a45245a0d7ad4f9ed5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb93304f74521f464136d2831c3054fded4613538440a45245a0d7ad4f9ed5e0->enter($__internal_fb93304f74521f464136d2831c3054fded4613538440a45245a0d7ad4f9ed5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    Hello enseignant!
";

        $__internal_fb93304f74521f464136d2831c3054fded4613538440a45245a0d7ad4f9ed5e0->leave($__internal_fb93304f74521f464136d2831c3054fded4613538440a45245a0d7ad4f9ed5e0_prof);

    }

    // line 2

    public function isTraitable()
    {
        return false;
    }

    // line 6

    public function getDebugInfo()
    {
        return array(55 => 7, 49 => 6, 41 => 3, 35 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForEnseignant.html.twig\" %}
{% block title %}
    Accueil
{% endblock %}

{% block mainContent %}
    Hello enseignant!
{% endblock %}", "@projet/Default/Enseignant/index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\index.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cb14cfc9919f6ec1277436c215e4fb5d8b020166f959b642cf631319ab5f1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb14cfc9919f6ec1277436c215e4fb5d8b020166f959b642cf631319ab5f1ca->enter($__internal_5cb14cfc9919f6ec1277436c215e4fb5d8b020166f959b642cf631319ab5f1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_5cb14cfc9919f6ec1277436c215e4fb5d8b020166f959b642cf631319ab5f1ca->leave($__internal_5cb14cfc9919f6ec1277436c215e4fb5d8b020166f959b642cf631319ab5f1ca_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/index.html.twig";
    }
}
