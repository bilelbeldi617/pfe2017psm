<?php

/* @projet/Default/Admin/annoncerJours.html.twig */
class __TwigTemplate_98fd56bee8c99ea91102ec04215c80cc356ffd19ece0c0bce2368d33b44c71ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/annoncerJours.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fc79358bf26eb3c1659a6cd089e22719b8be60b9403260ecad518a604113772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc79358bf26eb3c1659a6cd089e22719b8be60b9403260ecad518a604113772->enter($__internal_9fc79358bf26eb3c1659a6cd089e22719b8be60b9403260ecad518a604113772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/annoncerJours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc79358bf26eb3c1659a6cd089e22719b8be60b9403260ecad518a604113772->leave($__internal_9fc79358bf26eb3c1659a6cd089e22719b8be60b9403260ecad518a604113772_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2743902b242628272af70377fc31c575e5d7b3d7bd33224b8c2339ab9ac67d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2743902b242628272af70377fc31c575e5d7b3d7bd33224b8c2339ab9ac67d7c->enter($__internal_2743902b242628272af70377fc31c575e5d7b3d7bd33224b8c2339ab9ac67d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Annoncer Jours Fériés
    ";
        
        $__internal_2743902b242628272af70377fc31c575e5d7b3d7bd33224b8c2339ab9ac67d7c->leave($__internal_2743902b242628272af70377fc31c575e5d7b3d7bd33224b8c2339ab9ac67d7c_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/annoncerJours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForAdmin.html.twig\" %}
    {% block title %}
        Annoncer Jours Fériés
    {% endblock %}", "@projet/Default/Admin/annoncerJours.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\annoncerJours.html.twig");
    }
}
