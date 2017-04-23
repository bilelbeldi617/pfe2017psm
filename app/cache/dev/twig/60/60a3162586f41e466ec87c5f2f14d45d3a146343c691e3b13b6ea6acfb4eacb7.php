<?php

/* @projet/Default/Parent/contacterAdmin.html.twig */
class __TwigTemplate_eab8779058fa982f698bb25428929d517425c620948efa1d88f761153d622638 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForParent.html.twig", "@projet/Default/Parent/contacterAdmin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_9766c5cd74c7725dd95ad58a9b67c2d7686a37ee269887fe044e4730e6c0f10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9766c5cd74c7725dd95ad58a9b67c2d7686a37ee269887fe044e4730e6c0f10f->enter($__internal_9766c5cd74c7725dd95ad58a9b67c2d7686a37ee269887fe044e4730e6c0f10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Contacter Admin
";

        $__internal_9766c5cd74c7725dd95ad58a9b67c2d7686a37ee269887fe044e4730e6c0f10f->leave($__internal_9766c5cd74c7725dd95ad58a9b67c2d7686a37ee269887fe044e4730e6c0f10f_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_d7b340b9f29ec0e91b0770837f8a466ca500d547082eebf2e94725aae96c6024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b340b9f29ec0e91b0770837f8a466ca500d547082eebf2e94725aae96c6024->enter($__internal_d7b340b9f29ec0e91b0770837f8a466ca500d547082eebf2e94725aae96c6024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "
";

        $__internal_d7b340b9f29ec0e91b0770837f8a466ca500d547082eebf2e94725aae96c6024->leave($__internal_d7b340b9f29ec0e91b0770837f8a466ca500d547082eebf2e94725aae96c6024_prof);

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
        return new Twig_Source("{% extends \"baseForParent.html.twig\" %}
{% block title %}
    Contacter Admin
{% endblock %}

{% block mainContent %}

{% endblock %}", "@projet/Default/Parent/contacterAdmin.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\contacterAdmin.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e757df4502b9f860861579b7987b3c0dc576b9a9ddbdbdc700c3d5f6de1fdf97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e757df4502b9f860861579b7987b3c0dc576b9a9ddbdbdc700c3d5f6de1fdf97->enter($__internal_e757df4502b9f860861579b7987b3c0dc576b9a9ddbdbdc700c3d5f6de1fdf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/contacterAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_e757df4502b9f860861579b7987b3c0dc576b9a9ddbdbdc700c3d5f6de1fdf97->leave($__internal_e757df4502b9f860861579b7987b3c0dc576b9a9ddbdbdc700c3d5f6de1fdf97_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/contacterAdmin.html.twig";
    }
}
