<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_90d9647e0d53b5184bf9057d47b733bb31c7febcda0e18fc0a5595dec2fa4a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b500269024fd1da82b321723eac9badaddda0b5f62ce4ad42cb4029f711b2a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b500269024fd1da82b321723eac9badaddda0b5f62ce4ad42cb4029f711b2a97->enter($__internal_b500269024fd1da82b321723eac9badaddda0b5f62ce4ad42cb4029f711b2a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b500269024fd1da82b321723eac9badaddda0b5f62ce4ad42cb4029f711b2a97->leave($__internal_b500269024fd1da82b321723eac9badaddda0b5f62ce4ad42cb4029f711b2a97_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_577b8cb5f942fdd92299a7eb284e2408589ef1fc52ee2458f9fe6515832cbdd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577b8cb5f942fdd92299a7eb284e2408589ef1fc52ee2458f9fe6515832cbdd6->enter($__internal_577b8cb5f942fdd92299a7eb284e2408589ef1fc52ee2458f9fe6515832cbdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_577b8cb5f942fdd92299a7eb284e2408589ef1fc52ee2458f9fe6515832cbdd6->leave($__internal_577b8cb5f942fdd92299a7eb284e2408589ef1fc52ee2458f9fe6515832cbdd6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f3369a9e14872e355b8f92f2476e92cb1c63305371572f8b2c90c8957f15703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3369a9e14872e355b8f92f2476e92cb1c63305371572f8b2c90c8957f15703->enter($__internal_8f3369a9e14872e355b8f92f2476e92cb1c63305371572f8b2c90c8957f15703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8f3369a9e14872e355b8f92f2476e92cb1c63305371572f8b2c90c8957f15703->leave($__internal_8f3369a9e14872e355b8f92f2476e92cb1c63305371572f8b2c90c8957f15703_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b3260e0dde9276b8c3133ac0c612857f998a3d25d478bfb40797cd120d3347f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3260e0dde9276b8c3133ac0c612857f998a3d25d478bfb40797cd120d3347f->enter($__internal_2b3260e0dde9276b8c3133ac0c612857f998a3d25d478bfb40797cd120d3347f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2b3260e0dde9276b8c3133ac0c612857f998a3d25d478bfb40797cd120d3347f->leave($__internal_2b3260e0dde9276b8c3133ac0c612857f998a3d25d478bfb40797cd120d3347f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
