<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3d5785a1ccf3218e91f8c326aecfd724adb86e42611d0e89d0d2872134feb900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_5f4629f721ee955ddee15a9515b91781e477f92978d821e6ec1a90b0054f6e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f4629f721ee955ddee15a9515b91781e477f92978d821e6ec1a90b0054f6e55->enter($__internal_5f4629f721ee955ddee15a9515b91781e477f92978d821e6ec1a90b0054f6e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f4629f721ee955ddee15a9515b91781e477f92978d821e6ec1a90b0054f6e55->leave($__internal_5f4629f721ee955ddee15a9515b91781e477f92978d821e6ec1a90b0054f6e55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da7bf845e76222c9ab0f1f33653ccec6fcf0fa41404f749993897b344d45da4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7bf845e76222c9ab0f1f33653ccec6fcf0fa41404f749993897b344d45da4e->enter($__internal_da7bf845e76222c9ab0f1f33653ccec6fcf0fa41404f749993897b344d45da4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_da7bf845e76222c9ab0f1f33653ccec6fcf0fa41404f749993897b344d45da4e->leave($__internal_da7bf845e76222c9ab0f1f33653ccec6fcf0fa41404f749993897b344d45da4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_448eb0390393c952503c2b0fc924341cf0a456a9c4fb53560f98c0d8af5de470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448eb0390393c952503c2b0fc924341cf0a456a9c4fb53560f98c0d8af5de470->enter($__internal_448eb0390393c952503c2b0fc924341cf0a456a9c4fb53560f98c0d8af5de470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_448eb0390393c952503c2b0fc924341cf0a456a9c4fb53560f98c0d8af5de470->leave($__internal_448eb0390393c952503c2b0fc924341cf0a456a9c4fb53560f98c0d8af5de470_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
