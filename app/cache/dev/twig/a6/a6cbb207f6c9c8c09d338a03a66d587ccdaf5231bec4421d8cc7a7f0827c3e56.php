<?php

/* projetBundle:Default/Parent:index.html.twig */

class __TwigTemplate_bcc0d71d29254c3397e55cc406bba1b0080ab7ea9be0d343ac1512149afba95b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "projetBundle:Default/Parent:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_00b1d42369524f401e1a8eb282d01715dc5c978d529ab17cfc9e3b81362e9586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b1d42369524f401e1a8eb282d01715dc5c978d529ab17cfc9e3b81362e9586->enter($__internal_00b1d42369524f401e1a8eb282d01715dc5c978d529ab17cfc9e3b81362e9586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";

        $__internal_00b1d42369524f401e1a8eb282d01715dc5c978d529ab17cfc9e3b81362e9586->leave($__internal_00b1d42369524f401e1a8eb282d01715dc5c978d529ab17cfc9e3b81362e9586_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_e2ebfe0746265709ed75bd47a6d506c4280d22d18ea63e1663e60f4d55d501de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ebfe0746265709ed75bd47a6d506c4280d22d18ea63e1663e60f4d55d501de->enter($__internal_e2ebfe0746265709ed75bd47a6d506c4280d22d18ea63e1663e60f4d55d501de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    Hello mister Foulen!

";

        $__internal_e2ebfe0746265709ed75bd47a6d506c4280d22d18ea63e1663e60f4d55d501de->leave($__internal_e2ebfe0746265709ed75bd47a6d506c4280d22d18ea63e1663e60f4d55d501de_prof);

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
        return new Twig_Source("{% extends \"::baseForParent.html.twig\" %}
{% block title %}
    Accueil
{% endblock %}

{% block mainContent %}
    Hello mister Foulen!

{% endblock %}", "projetBundle:Default/Parent:index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/index.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5f543f3a96a04d3de858910d29fd19b637c1f80f1b451429ee782f675972e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f543f3a96a04d3de858910d29fd19b637c1f80f1b451429ee782f675972e02->enter($__internal_b5f543f3a96a04d3de858910d29fd19b637c1f80f1b451429ee782f675972e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_b5f543f3a96a04d3de858910d29fd19b637c1f80f1b451429ee782f675972e02->leave($__internal_b5f543f3a96a04d3de858910d29fd19b637c1f80f1b451429ee782f675972e02_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:index.html.twig";
    }
}
