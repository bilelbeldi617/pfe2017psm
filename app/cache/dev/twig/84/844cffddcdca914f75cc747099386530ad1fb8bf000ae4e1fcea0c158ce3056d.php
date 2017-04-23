<?php

/* projetBundle:Default/Admin:annoncerJours.html.twig */

class __TwigTemplate_0ed84ca0f2edff42a8695825db299ec0226c6ddc735426591b029c6a92146912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:annoncerJours.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_c28beeb77a7bca988877094c2d5dae5e92a1ef2c3a4fb81413fb4450cfb6f9ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28beeb77a7bca988877094c2d5dae5e92a1ef2c3a4fb81413fb4450cfb6f9ff->enter($__internal_c28beeb77a7bca988877094c2d5dae5e92a1ef2c3a4fb81413fb4450cfb6f9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Annoncer Jours Fériés
    ";

        $__internal_c28beeb77a7bca988877094c2d5dae5e92a1ef2c3a4fb81413fb4450cfb6f9ff->leave($__internal_c28beeb77a7bca988877094c2d5dae5e92a1ef2c3a4fb81413fb4450cfb6f9ff_prof);

    }

    public function isTraitable()
    {
        return false;
    }

    // line 2

    public function getDebugInfo()
    {
        return array(40 => 3, 34 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForAdmin.html.twig\" %}
    {% block title %}
        Annoncer Jours Fériés
    {% endblock %}", "projetBundle:Default/Admin:annoncerJours.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/annoncerJours.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90d3b4a65407da0a3f14195281503301f6ecd5e99162ee6f15654f64bd5023fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d3b4a65407da0a3f14195281503301f6ecd5e99162ee6f15654f64bd5023fd->enter($__internal_90d3b4a65407da0a3f14195281503301f6ecd5e99162ee6f15654f64bd5023fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:annoncerJours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_90d3b4a65407da0a3f14195281503301f6ecd5e99162ee6f15654f64bd5023fd->leave($__internal_90d3b4a65407da0a3f14195281503301f6ecd5e99162ee6f15654f64bd5023fd_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:annoncerJours.html.twig";
    }
}
