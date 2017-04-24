<?php

/* projetBundle:Default/Admin:listerEmploi.html.twig */
class __TwigTemplate_c921a0ea48a2eba4435703f7e68ec8903070a698f76f5608ad3fc42d5cb00f6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:listerEmploi.html.twig", 1);
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
        $__internal_0ce13e86f6d367fa4a28e37ddef160dc72e423c2556804b790f02720dba91082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce13e86f6d367fa4a28e37ddef160dc72e423c2556804b790f02720dba91082->enter($__internal_0ce13e86f6d367fa4a28e37ddef160dc72e423c2556804b790f02720dba91082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerEmploi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ce13e86f6d367fa4a28e37ddef160dc72e423c2556804b790f02720dba91082->leave($__internal_0ce13e86f6d367fa4a28e37ddef160dc72e423c2556804b790f02720dba91082_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_308fc7c15c26c523ac6e9c97ca41e14aba8a7c73aaf057791e100fe5d491c39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308fc7c15c26c523ac6e9c97ca41e14aba8a7c73aaf057791e100fe5d491c39e->enter($__internal_308fc7c15c26c523ac6e9c97ca41e14aba8a7c73aaf057791e100fe5d491c39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les emplois
    ";
        
        $__internal_308fc7c15c26c523ac6e9c97ca41e14aba8a7c73aaf057791e100fe5d491c39e->leave($__internal_308fc7c15c26c523ac6e9c97ca41e14aba8a7c73aaf057791e100fe5d491c39e_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerEmploi.html.twig";
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
        Lister les emplois
    {% endblock %}", "projetBundle:Default/Admin:listerEmploi.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerEmploi.html.twig");
    }
}
