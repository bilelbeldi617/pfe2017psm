<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cf8f90910b54b8553f71d0094ba3bf99838da5eade74b94ba8a932c13aa234d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8590e09d102541f2e02f81fd94a57c6e4e9f7a72623d65920732ab5eba28cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8590e09d102541f2e02f81fd94a57c6e4e9f7a72623d65920732ab5eba28cac->enter($__internal_c8590e09d102541f2e02f81fd94a57c6e4e9f7a72623d65920732ab5eba28cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8590e09d102541f2e02f81fd94a57c6e4e9f7a72623d65920732ab5eba28cac->leave($__internal_c8590e09d102541f2e02f81fd94a57c6e4e9f7a72623d65920732ab5eba28cac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a709b6eb5a7d11d9124d8fbd688d4e7522cc03dcec77d76bd1d442d65cafc315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a709b6eb5a7d11d9124d8fbd688d4e7522cc03dcec77d76bd1d442d65cafc315->enter($__internal_a709b6eb5a7d11d9124d8fbd688d4e7522cc03dcec77d76bd1d442d65cafc315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a709b6eb5a7d11d9124d8fbd688d4e7522cc03dcec77d76bd1d442d65cafc315->leave($__internal_a709b6eb5a7d11d9124d8fbd688d4e7522cc03dcec77d76bd1d442d65cafc315_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af371f1765d60a2504ed6c29fa137fb0b1ff93f996069b4ac118102564e55f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af371f1765d60a2504ed6c29fa137fb0b1ff93f996069b4ac118102564e55f5c->enter($__internal_af371f1765d60a2504ed6c29fa137fb0b1ff93f996069b4ac118102564e55f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_af371f1765d60a2504ed6c29fa137fb0b1ff93f996069b4ac118102564e55f5c->leave($__internal_af371f1765d60a2504ed6c29fa137fb0b1ff93f996069b4ac118102564e55f5c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27caa141479793059bb9e80a233ec220acf136851af7dc8c4fd0faba8af2efb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27caa141479793059bb9e80a233ec220acf136851af7dc8c4fd0faba8af2efb7->enter($__internal_27caa141479793059bb9e80a233ec220acf136851af7dc8c4fd0faba8af2efb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_27caa141479793059bb9e80a233ec220acf136851af7dc8c4fd0faba8af2efb7->leave($__internal_27caa141479793059bb9e80a233ec220acf136851af7dc8c4fd0faba8af2efb7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
