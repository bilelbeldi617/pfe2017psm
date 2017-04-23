<?php

/* projetBundle:Default/Parent:contacterAdmin.html.twig */

class __TwigTemplate_6fe1153fd757321835ef459549b166e618c969773fcc17b293b6b4a2915d3734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForParent.html.twig", "projetBundle:Default/Parent:contacterAdmin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_273ad5d96f471607356e1b09c7a05fa99659997aac7baba8ffc31df974763eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273ad5d96f471607356e1b09c7a05fa99659997aac7baba8ffc31df974763eac->enter($__internal_273ad5d96f471607356e1b09c7a05fa99659997aac7baba8ffc31df974763eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Contacter Admin
";

        $__internal_273ad5d96f471607356e1b09c7a05fa99659997aac7baba8ffc31df974763eac->leave($__internal_273ad5d96f471607356e1b09c7a05fa99659997aac7baba8ffc31df974763eac_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_d4bdd8e0b8ca9ea8a6fe70da7eb95fd5bd07c5cd225fbc17b50ce1efa25b60ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bdd8e0b8ca9ea8a6fe70da7eb95fd5bd07c5cd225fbc17b50ce1efa25b60ec->enter($__internal_d4bdd8e0b8ca9ea8a6fe70da7eb95fd5bd07c5cd225fbc17b50ce1efa25b60ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "
";

        $__internal_d4bdd8e0b8ca9ea8a6fe70da7eb95fd5bd07c5cd225fbc17b50ce1efa25b60ec->leave($__internal_d4bdd8e0b8ca9ea8a6fe70da7eb95fd5bd07c5cd225fbc17b50ce1efa25b60ec_prof);

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

{% endblock %}", "projetBundle:Default/Parent:contacterAdmin.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/contacterAdmin.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13c8baa287506156a22e139200c8454356c11f656327b2dbb895c9114685269a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c8baa287506156a22e139200c8454356c11f656327b2dbb895c9114685269a->enter($__internal_13c8baa287506156a22e139200c8454356c11f656327b2dbb895c9114685269a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:contacterAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_13c8baa287506156a22e139200c8454356c11f656327b2dbb895c9114685269a->leave($__internal_13c8baa287506156a22e139200c8454356c11f656327b2dbb895c9114685269a_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:contacterAdmin.html.twig";
    }
}
