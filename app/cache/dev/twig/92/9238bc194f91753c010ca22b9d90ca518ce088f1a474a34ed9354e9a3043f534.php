<?php

/* projetBundle:Default/Admin:AffecterAutomatiquement.html.twig */
class __TwigTemplate_6681eb21a54c6d3167558780390197e07a25d5a5b04947e1b7a2e053acd685b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "projetBundle:Default/Admin:AffecterAutomatiquement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a0170e8d49894d3329d2420d998cb8ceaaf6932b4ad4ee4077ba38c3c27f095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0170e8d49894d3329d2420d998cb8ceaaf6932b4ad4ee4077ba38c3c27f095->enter($__internal_8a0170e8d49894d3329d2420d998cb8ceaaf6932b4ad4ee4077ba38c3c27f095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:AffecterAutomatiquement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0170e8d49894d3329d2420d998cb8ceaaf6932b4ad4ee4077ba38c3c27f095->leave($__internal_8a0170e8d49894d3329d2420d998cb8ceaaf6932b4ad4ee4077ba38c3c27f095_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4c8c47af8ae05d9a3c8b71834116195319e6843995ab1235ed779c161680343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c8c47af8ae05d9a3c8b71834116195319e6843995ab1235ed779c161680343->enter($__internal_d4c8c47af8ae05d9a3c8b71834116195319e6843995ab1235ed779c161680343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Affecter Automatiquement
";
        
        $__internal_d4c8c47af8ae05d9a3c8b71834116195319e6843995ab1235ed779c161680343->leave($__internal_d4c8c47af8ae05d9a3c8b71834116195319e6843995ab1235ed779c161680343_prof);

    }

    // line 7
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_d3c348faac66fa09461d84b43ee4fcbf5635925293176f347564ea10a9b187fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c348faac66fa09461d84b43ee4fcbf5635925293176f347564ea10a9b187fc->enter($__internal_d3c348faac66fa09461d84b43ee4fcbf5635925293176f347564ea10a9b187fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        
        $__internal_d3c348faac66fa09461d84b43ee4fcbf5635925293176f347564ea10a9b187fc->leave($__internal_d3c348faac66fa09461d84b43ee4fcbf5635925293176f347564ea10a9b187fc_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:AffecterAutomatiquement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForAdmin.html.twig\" %}

{% block title %}
    Affecter Automatiquement
{% endblock %}

{% block mainContent %}
{% endblock %}", "projetBundle:Default/Admin:AffecterAutomatiquement.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/AffecterAutomatiquement.html.twig");
    }
}
