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

    public function block_title($context, array $blocks = array())
    {
        $__internal_3fcf819847eeca34778f74c6382997ced6da2dce615a010c1a1367ecba7322e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcf819847eeca34778f74c6382997ced6da2dce615a010c1a1367ecba7322e1->enter($__internal_3fcf819847eeca34778f74c6382997ced6da2dce615a010c1a1367ecba7322e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Affecter Automatiquement
";

        $__internal_3fcf819847eeca34778f74c6382997ced6da2dce615a010c1a1367ecba7322e1->leave($__internal_3fcf819847eeca34778f74c6382997ced6da2dce615a010c1a1367ecba7322e1_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_921ddebeb24b9b2a897698a2416972fef115871637a47e902e76b0aadb46c529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921ddebeb24b9b2a897698a2416972fef115871637a47e902e76b0aadb46c529->enter($__internal_921ddebeb24b9b2a897698a2416972fef115871637a47e902e76b0aadb46c529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));


        $__internal_921ddebeb24b9b2a897698a2416972fef115871637a47e902e76b0aadb46c529->leave($__internal_921ddebeb24b9b2a897698a2416972fef115871637a47e902e76b0aadb46c529_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 7

    public function getDebugInfo()
    {
        return array(49 => 7, 41 => 4, 35 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_799c8364b21652a6b112434e9d9520fa35025543989a66054df2424ccb24c8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799c8364b21652a6b112434e9d9520fa35025543989a66054df2424ccb24c8ab->enter($__internal_799c8364b21652a6b112434e9d9520fa35025543989a66054df2424ccb24c8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/AffecterAutomatiquement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_799c8364b21652a6b112434e9d9520fa35025543989a66054df2424ccb24c8ab->leave($__internal_799c8364b21652a6b112434e9d9520fa35025543989a66054df2424ccb24c8ab_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/AffecterAutomatiquement.html.twig";
    }
}
