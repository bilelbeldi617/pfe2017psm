<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_2d0be8f31fe4e2794d3bb06afe6a176075286dd53287e81ed77a47dc96ef973a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_0f11d6904bdfb22fd8659f6e7b8d4c016ec4ae534a0e8de0a203f4ac7fa9c64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f11d6904bdfb22fd8659f6e7b8d4c016ec4ae534a0e8de0a203f4ac7fa9c64f->enter($__internal_0f11d6904bdfb22fd8659f6e7b8d4c016ec4ae534a0e8de0a203f4ac7fa9c64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";

        $__internal_0f11d6904bdfb22fd8659f6e7b8d4c016ec4ae534a0e8de0a203f4ac7fa9c64f->leave($__internal_0f11d6904bdfb22fd8659f6e7b8d4c016ec4ae534a0e8de0a203f4ac7fa9c64f_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_4091fedffb83e118e699520dccf4aef9f9c0a44345f5e7fc7bf5eef8e0fe35e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4091fedffb83e118e699520dccf4aef9f9c0a44345f5e7fc7bf5eef8e0fe35e7->enter($__internal_4091fedffb83e118e699520dccf4aef9f9c0a44345f5e7fc7bf5eef8e0fe35e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";

        $__internal_4091fedffb83e118e699520dccf4aef9f9c0a44345f5e7fc7bf5eef8e0fe35e7->leave($__internal_4091fedffb83e118e699520dccf4aef9f9c0a44345f5e7fc7bf5eef8e0fe35e7_prof);

    }

    // line 3

    public function block_body($context, array $blocks = array())
    {
        $__internal_8d8dc8350c95ea94b063b114e07d0e0f7bcfa90de3f7eb5f245045fb7498e052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d8dc8350c95ea94b063b114e07d0e0f7bcfa90de3f7eb5f245045fb7498e052->enter($__internal_8d8dc8350c95ea94b063b114e07d0e0f7bcfa90de3f7eb5f245045fb7498e052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";

        $__internal_8d8dc8350c95ea94b063b114e07d0e0f7bcfa90de3f7eb5f245045fb7498e052->leave($__internal_8d8dc8350c95ea94b063b114e07d0e0f7bcfa90de3f7eb5f245045fb7498e052_prof);

    }

    // line 7

    public function block_content($context, array $blocks = array())
    {
        $__internal_d8f6e2c0d3585dec7b3a24cfd22267acdc4498b4ee2111ffcaebf236710630c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f6e2c0d3585dec7b3a24cfd22267acdc4498b4ee2111ffcaebf236710630c2->enter($__internal_d8f6e2c0d3585dec7b3a24cfd22267acdc4498b4ee2111ffcaebf236710630c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));


        $__internal_d8f6e2c0d3585dec7b3a24cfd22267acdc4498b4ee2111ffcaebf236710630c2->leave($__internal_d8f6e2c0d3585dec7b3a24cfd22267acdc4498b4ee2111ffcaebf236710630c2_prof);

    }

    // line 9

    public function isTraitable()
    {
        return false;
    }

    // line 11

    public function getDebugInfo()
    {
        return array(88 => 11, 79 => 13, 76 => 12, 74 => 11, 71 => 10, 65 => 9, 53 => 7, 43 => 4, 37 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "@SensioDistribution/Configurator/layout.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\layout.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64f7e4fff665c89010df0bc7790d4229153f1e90ce7742648df6a9739a876ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f7e4fff665c89010df0bc7790d4229153f1e90ce7742648df6a9739a876ed9->enter($__internal_64f7e4fff665c89010df0bc7790d4229153f1e90ce7742648df6a9739a876ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_64f7e4fff665c89010df0bc7790d4229153f1e90ce7742648df6a9739a876ed9->leave($__internal_64f7e4fff665c89010df0bc7790d4229153f1e90ce7742648df6a9739a876ed9_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
    }
}
