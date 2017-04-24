<?php

/* projetBundle:Default:login.html.twig */
class __TwigTemplate_412a4707b8168ff4ea41beadd5ac9887db745e2ec53722e215542fd9d5368e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForLogin.html.twig", "projetBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89ae23c1c650ddb8717d9d49063ebf486477927ade21b69fee6ea84351cc7c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ae23c1c650ddb8717d9d49063ebf486477927ade21b69fee6ea84351cc7c37->enter($__internal_89ae23c1c650ddb8717d9d49063ebf486477927ade21b69fee6ea84351cc7c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ae23c1c650ddb8717d9d49063ebf486477927ade21b69fee6ea84351cc7c37->leave($__internal_89ae23c1c650ddb8717d9d49063ebf486477927ade21b69fee6ea84351cc7c37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3ab3356a5cc11e3157144b9ca9a19d41a40084f0f42bbdca4b9d5d180ad067f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ab3356a5cc11e3157144b9ca9a19d41a40084f0f42bbdca4b9d5d180ad067f->enter($__internal_d3ab3356a5cc11e3157144b9ca9a19d41a40084f0f42bbdca4b9d5d180ad067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    S'authentifier

";
        
        $__internal_d3ab3356a5cc11e3157144b9ca9a19d41a40084f0f42bbdca4b9d5d180ad067f->leave($__internal_d3ab3356a5cc11e3157144b9ca9a19d41a40084f0f42bbdca4b9d5d180ad067f_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForLogin.html.twig\"%}

{% block title %}

    S'authentifier

{% endblock %}


", "projetBundle:Default:login.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/login.html.twig");
    }
}
