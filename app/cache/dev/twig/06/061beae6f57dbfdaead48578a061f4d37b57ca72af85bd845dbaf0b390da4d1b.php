<?php

/* @projet/Default/Admin/AffecterAutomatiquement.html.twig */
class __TwigTemplate_3737a5060850ffdd28f54481fa320a28f66fdf636b0cb2846e34bd6d3545839c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "@projet/Default/Admin/AffecterAutomatiquement.html.twig", 1);
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
        $__internal_027fdd277910ba1d71b1b962908305b1a118ecc4eeecf11f3c87af575eb2d5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027fdd277910ba1d71b1b962908305b1a118ecc4eeecf11f3c87af575eb2d5a2->enter($__internal_027fdd277910ba1d71b1b962908305b1a118ecc4eeecf11f3c87af575eb2d5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/AffecterAutomatiquement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_027fdd277910ba1d71b1b962908305b1a118ecc4eeecf11f3c87af575eb2d5a2->leave($__internal_027fdd277910ba1d71b1b962908305b1a118ecc4eeecf11f3c87af575eb2d5a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_88cdc8663e0d36a419a7609d514bfb63de443262861a019867358bff62fcf2b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88cdc8663e0d36a419a7609d514bfb63de443262861a019867358bff62fcf2b6->enter($__internal_88cdc8663e0d36a419a7609d514bfb63de443262861a019867358bff62fcf2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Affecter Automatiquement
";
        
        $__internal_88cdc8663e0d36a419a7609d514bfb63de443262861a019867358bff62fcf2b6->leave($__internal_88cdc8663e0d36a419a7609d514bfb63de443262861a019867358bff62fcf2b6_prof);

    }

    // line 7
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_a86635b3beb7fdb2e8df2cd93e7c0ae6a6662d9c8fd0c724a2d4bcbe0554cba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86635b3beb7fdb2e8df2cd93e7c0ae6a6662d9c8fd0c724a2d4bcbe0554cba9->enter($__internal_a86635b3beb7fdb2e8df2cd93e7c0ae6a6662d9c8fd0c724a2d4bcbe0554cba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        
        $__internal_a86635b3beb7fdb2e8df2cd93e7c0ae6a6662d9c8fd0c724a2d4bcbe0554cba9->leave($__internal_a86635b3beb7fdb2e8df2cd93e7c0ae6a6662d9c8fd0c724a2d4bcbe0554cba9_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/AffecterAutomatiquement.html.twig";
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
{% endblock %}", "@projet/Default/Admin/AffecterAutomatiquement.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\AffecterAutomatiquement.html.twig");
    }
}
