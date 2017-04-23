<?php

/* projetBundle:Default/Enseignant:index.html.twig */

class __TwigTemplate_b1d9ed0fb6d3a236533eb38cb4aeb214cb6e6f4f569d58259ddabf88b724f90e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "projetBundle:Default/Enseignant:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_8921607cbc39280066a7c3d39a75461f36772324c29ecb840702fa92e1a71362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8921607cbc39280066a7c3d39a75461f36772324c29ecb840702fa92e1a71362->enter($__internal_8921607cbc39280066a7c3d39a75461f36772324c29ecb840702fa92e1a71362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";

        $__internal_8921607cbc39280066a7c3d39a75461f36772324c29ecb840702fa92e1a71362->leave($__internal_8921607cbc39280066a7c3d39a75461f36772324c29ecb840702fa92e1a71362_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_4f6eccd0a2a884020746f98c2358df955f9a7a4b191932985c3772cdffe4153e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6eccd0a2a884020746f98c2358df955f9a7a4b191932985c3772cdffe4153e->enter($__internal_4f6eccd0a2a884020746f98c2358df955f9a7a4b191932985c3772cdffe4153e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    Hello enseignant!
";

        $__internal_4f6eccd0a2a884020746f98c2358df955f9a7a4b191932985c3772cdffe4153e->leave($__internal_4f6eccd0a2a884020746f98c2358df955f9a7a4b191932985c3772cdffe4153e_prof);

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
{% endblock %}", "projetBundle:Default/Enseignant:index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/index.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a34a095c2b583e640ebb54548265b0b1f2099d5ceed1b6f53a130aa2137620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a34a095c2b583e640ebb54548265b0b1f2099d5ceed1b6f53a130aa2137620->enter($__internal_96a34a095c2b583e640ebb54548265b0b1f2099d5ceed1b6f53a130aa2137620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_96a34a095c2b583e640ebb54548265b0b1f2099d5ceed1b6f53a130aa2137620->leave($__internal_96a34a095c2b583e640ebb54548265b0b1f2099d5ceed1b6f53a130aa2137620_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:index.html.twig";
    }
}
