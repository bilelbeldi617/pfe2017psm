<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_da192e565c0801d20f1abe2b18ffeb6be6a6cc8034c53374c0fa7b10c4ae2188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f36ad4fbdce5e4024891ba349dc7b167d30c7622be8b77a80491f1b6b65f4f7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36ad4fbdce5e4024891ba349dc7b167d30c7622be8b77a80491f1b6b65f4f7b->enter($__internal_f36ad4fbdce5e4024891ba349dc7b167d30c7622be8b77a80491f1b6b65f4f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f36ad4fbdce5e4024891ba349dc7b167d30c7622be8b77a80491f1b6b65f4f7b->leave($__internal_f36ad4fbdce5e4024891ba349dc7b167d30c7622be8b77a80491f1b6b65f4f7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3948d282bd31c3a7642803a26f19c21d736659694fbf5567be63de738be3dc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3948d282bd31c3a7642803a26f19c21d736659694fbf5567be63de738be3dc3c->enter($__internal_3948d282bd31c3a7642803a26f19c21d736659694fbf5567be63de738be3dc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3948d282bd31c3a7642803a26f19c21d736659694fbf5567be63de738be3dc3c->leave($__internal_3948d282bd31c3a7642803a26f19c21d736659694fbf5567be63de738be3dc3c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a9dbeb65c39d0982ee7fb7d9459d2656345c258a160e24f94aa51c0db5bdde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9dbeb65c39d0982ee7fb7d9459d2656345c258a160e24f94aa51c0db5bdde6->enter($__internal_6a9dbeb65c39d0982ee7fb7d9459d2656345c258a160e24f94aa51c0db5bdde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a9dbeb65c39d0982ee7fb7d9459d2656345c258a160e24f94aa51c0db5bdde6->leave($__internal_6a9dbeb65c39d0982ee7fb7d9459d2656345c258a160e24f94aa51c0db5bdde6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50d36b4d598e9f3d6421f963f95ea960b1c7233fdb0c75a78b88136e31786466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d36b4d598e9f3d6421f963f95ea960b1c7233fdb0c75a78b88136e31786466->enter($__internal_50d36b4d598e9f3d6421f963f95ea960b1c7233fdb0c75a78b88136e31786466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_50d36b4d598e9f3d6421f963f95ea960b1c7233fdb0c75a78b88136e31786466->leave($__internal_50d36b4d598e9f3d6421f963f95ea960b1c7233fdb0c75a78b88136e31786466_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
