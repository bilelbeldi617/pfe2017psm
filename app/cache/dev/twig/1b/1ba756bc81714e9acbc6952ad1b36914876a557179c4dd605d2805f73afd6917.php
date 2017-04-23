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

    public function block_head($context, array $blocks = array())
    {
        $__internal_ecab8996a016a57488b80308125ebb44334bf186aa97b039258b2f2971eb2acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecab8996a016a57488b80308125ebb44334bf186aa97b039258b2f2971eb2acd->enter($__internal_ecab8996a016a57488b80308125ebb44334bf186aa97b039258b2f2971eb2acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";

        $__internal_ecab8996a016a57488b80308125ebb44334bf186aa97b039258b2f2971eb2acd->leave($__internal_ecab8996a016a57488b80308125ebb44334bf186aa97b039258b2f2971eb2acd_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_fb1e5dcc33af96b25efa7f2612b179973635535c1872341b5f5d5e89e8340b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1e5dcc33af96b25efa7f2612b179973635535c1872341b5f5d5e89e8340b28->enter($__internal_fb1e5dcc33af96b25efa7f2612b179973635535c1872341b5f5d5e89e8340b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";

        $__internal_fb1e5dcc33af96b25efa7f2612b179973635535c1872341b5f5d5e89e8340b28->leave($__internal_fb1e5dcc33af96b25efa7f2612b179973635535c1872341b5f5d5e89e8340b28_prof);

    }

    // line 3

    public function block_body($context, array $blocks = array())
    {
        $__internal_4c71102a42e6eb8f239a69e51b11e4929781b0a2d6f3fbdd5f202308450b4f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c71102a42e6eb8f239a69e51b11e4929781b0a2d6f3fbdd5f202308450b4f9e->enter($__internal_4c71102a42e6eb8f239a69e51b11e4929781b0a2d6f3fbdd5f202308450b4f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);

        $__internal_4c71102a42e6eb8f239a69e51b11e4929781b0a2d6f3fbdd5f202308450b4f9e->leave($__internal_4c71102a42e6eb8f239a69e51b11e4929781b0a2d6f3fbdd5f202308450b4f9e_prof);

    }

    // line 7

    public function isTraitable()
    {
        return false;
    }

    // line 11

    public function getDebugInfo()
    {
        return array(78 => 12, 72 => 11, 58 => 8, 52 => 7, 42 => 4, 36 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a56039dfc552cb7c42c63de50dfe85398b407f0400ee2d26d04187196c4067b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a56039dfc552cb7c42c63de50dfe85398b407f0400ee2d26d04187196c4067b->enter($__internal_5a56039dfc552cb7c42c63de50dfe85398b407f0400ee2d26d04187196c4067b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_5a56039dfc552cb7c42c63de50dfe85398b407f0400ee2d26d04187196c4067b->leave($__internal_5a56039dfc552cb7c42c63de50dfe85398b407f0400ee2d26d04187196c4067b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }
}
