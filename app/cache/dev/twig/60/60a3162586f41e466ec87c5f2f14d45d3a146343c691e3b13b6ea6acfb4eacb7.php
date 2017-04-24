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

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ebbd93e172fbe875fc991a4ee0b46e3eda0f1d841e98c39ac8658c45215c1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebbd93e172fbe875fc991a4ee0b46e3eda0f1d841e98c39ac8658c45215c1da->enter($__internal_6ebbd93e172fbe875fc991a4ee0b46e3eda0f1d841e98c39ac8658c45215c1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/contacterAdmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ebbd93e172fbe875fc991a4ee0b46e3eda0f1d841e98c39ac8658c45215c1da->leave($__internal_6ebbd93e172fbe875fc991a4ee0b46e3eda0f1d841e98c39ac8658c45215c1da_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c48066609968554904922f0028fc770db49e98580ac53e5bfb5f506de110152f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48066609968554904922f0028fc770db49e98580ac53e5bfb5f506de110152f->enter($__internal_c48066609968554904922f0028fc770db49e98580ac53e5bfb5f506de110152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Contacter Admin
";
        
        $__internal_c48066609968554904922f0028fc770db49e98580ac53e5bfb5f506de110152f->leave($__internal_c48066609968554904922f0028fc770db49e98580ac53e5bfb5f506de110152f_prof);

    }

    // line 6
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_c168d08cd4cabee96425e8a11dc1dcd7f21c1bfb436d615744baf0f2bd48b1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c168d08cd4cabee96425e8a11dc1dcd7f21c1bfb436d615744baf0f2bd48b1f1->enter($__internal_c168d08cd4cabee96425e8a11dc1dcd7f21c1bfb436d615744baf0f2bd48b1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "
";
        
        $__internal_c168d08cd4cabee96425e8a11dc1dcd7f21c1bfb436d615744baf0f2bd48b1f1->leave($__internal_c168d08cd4cabee96425e8a11dc1dcd7f21c1bfb436d615744baf0f2bd48b1f1_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/contacterAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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
}
