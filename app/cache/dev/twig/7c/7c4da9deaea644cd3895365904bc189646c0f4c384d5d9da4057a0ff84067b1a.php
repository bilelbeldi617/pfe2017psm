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

    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_083cc58909604bd27dbe25bb9e33e19ef46ae1b8f5f3d44f9f9f6054f6efc14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083cc58909604bd27dbe25bb9e33e19ef46ae1b8f5f3d44f9f9f6054f6efc14a->enter($__internal_083cc58909604bd27dbe25bb9e33e19ef46ae1b8f5f3d44f9f9f6054f6efc14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));


        $__internal_083cc58909604bd27dbe25bb9e33e19ef46ae1b8f5f3d44f9f9f6054f6efc14a->leave($__internal_083cc58909604bd27dbe25bb9e33e19ef46ae1b8f5f3d44f9f9f6054f6efc14a_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_f66bc44c94617dfa2ba5344644a556bbf6bb24aa968e8a94c81dd8aca29a6be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66bc44c94617dfa2ba5344644a556bbf6bb24aa968e8a94c81dd8aca29a6be9->enter($__internal_f66bc44c94617dfa2ba5344644a556bbf6bb24aa968e8a94c81dd8aca29a6be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";

        $__internal_f66bc44c94617dfa2ba5344644a556bbf6bb24aa968e8a94c81dd8aca29a6be9->leave($__internal_f66bc44c94617dfa2ba5344644a556bbf6bb24aa968e8a94c81dd8aca29a6be9_prof);

    }

    // line 3

    public function block_panel($context, array $blocks = array())
    {
        $__internal_af5e179ee95276b0faa522e0f55c25a26fd69e2c4186c6eb3f8419a95dfd64f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5e179ee95276b0faa522e0f55c25a26fd69e2c4186c6eb3f8419a95dfd64f6->enter($__internal_af5e179ee95276b0faa522e0f55c25a26fd69e2c4186c6eb3f8419a95dfd64f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";

        $__internal_af5e179ee95276b0faa522e0f55c25a26fd69e2c4186c6eb3f8419a95dfd64f6->leave($__internal_af5e179ee95276b0faa522e0f55c25a26fd69e2c4186c6eb3f8419a95dfd64f6_prof);

    }

    // line 5

    public function isTraitable()
    {
        return false;
    }

    // line 12

    public function getDebugInfo()
    {
        return array(73 => 13, 67 => 12, 56 => 7, 53 => 6, 47 => 5, 36 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4617a2e90d9427b708d6fb6f9cab4dc3cdd20d258e73d3da406ec694a6fb511f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4617a2e90d9427b708d6fb6f9cab4dc3cdd20d258e73d3da406ec694a6fb511f->enter($__internal_4617a2e90d9427b708d6fb6f9cab4dc3cdd20d258e73d3da406ec694a6fb511f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_4617a2e90d9427b708d6fb6f9cab4dc3cdd20d258e73d3da406ec694a6fb511f->leave($__internal_4617a2e90d9427b708d6fb6f9cab4dc3cdd20d258e73d3da406ec694a6fb511f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }
}
