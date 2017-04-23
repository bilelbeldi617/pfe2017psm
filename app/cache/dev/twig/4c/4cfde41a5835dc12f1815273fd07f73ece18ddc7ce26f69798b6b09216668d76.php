<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b25e852b7aa72fe0e76fd86ada39c22b5ddece55f2288309022a27c2aa8e0f9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_a7685b2c61b8f0d4717878bcadcce3c96e496375880b4402a98940cdbad4c4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7685b2c61b8f0d4717878bcadcce3c96e496375880b4402a98940cdbad4c4df->enter($__internal_a7685b2c61b8f0d4717878bcadcce3c96e496375880b4402a98940cdbad4c4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";

        $__internal_a7685b2c61b8f0d4717878bcadcce3c96e496375880b4402a98940cdbad4c4df->leave($__internal_a7685b2c61b8f0d4717878bcadcce3c96e496375880b4402a98940cdbad4c4df_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_39e92c0dc3413b3f629f8e55f05effcf3e7640665d2c42590694912fc655034e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e92c0dc3413b3f629f8e55f05effcf3e7640665d2c42590694912fc655034e->enter($__internal_39e92c0dc3413b3f629f8e55f05effcf3e7640665d2c42590694912fc655034e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";

        $__internal_39e92c0dc3413b3f629f8e55f05effcf3e7640665d2c42590694912fc655034e->leave($__internal_39e92c0dc3413b3f629f8e55f05effcf3e7640665d2c42590694912fc655034e_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 5

    public function getDebugInfo()
    {
        return array(57 => 8, 53 => 6, 47 => 5, 35 => 3, 11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f714bef211fb33c851ccecad56b6e66f8304e1a63105d2414f71ff06c7dbdbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f714bef211fb33c851ccecad56b6e66f8304e1a63105d2414f71ff06c7dbdbea->enter($__internal_f714bef211fb33c851ccecad56b6e66f8304e1a63105d2414f71ff06c7dbdbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_f714bef211fb33c851ccecad56b6e66f8304e1a63105d2414f71ff06c7dbdbea->leave($__internal_f714bef211fb33c851ccecad56b6e66f8304e1a63105d2414f71ff06c7dbdbea_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }
}
