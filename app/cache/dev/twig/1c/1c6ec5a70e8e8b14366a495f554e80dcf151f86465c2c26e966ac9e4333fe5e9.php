<?php

/* WebProfilerBundle:Collector:exception.html.twig */

class __TwigTemplate_112b47556cf575f747831ef4844e3ee746062cc86917cb9e67b4d4947cb99a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_6259e0a9916c41ea99be6fe43d1bf72d19400e7ec726475b50fa4a9492c5acf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6259e0a9916c41ea99be6fe43d1bf72d19400e7ec726475b50fa4a9492c5acf9->enter($__internal_6259e0a9916c41ea99be6fe43d1bf72d19400e7ec726475b50fa4a9492c5acf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";

        $__internal_6259e0a9916c41ea99be6fe43d1bf72d19400e7ec726475b50fa4a9492c5acf9->leave($__internal_6259e0a9916c41ea99be6fe43d1bf72d19400e7ec726475b50fa4a9492c5acf9_prof);

    }

    public function block_menu($context, array $blocks = array())
    {
        $__internal_555fcf038f392a0ca946a66d762f46a275b9a15959f1ee72033b204ed8ce88f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555fcf038f392a0ca946a66d762f46a275b9a15959f1ee72033b204ed8ce88f6->enter($__internal_555fcf038f392a0ca946a66d762f46a275b9a15959f1ee72033b204ed8ce88f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo(($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";

        $__internal_555fcf038f392a0ca946a66d762f46a275b9a15959f1ee72033b204ed8ce88f6->leave($__internal_555fcf038f392a0ca946a66d762f46a275b9a15959f1ee72033b204ed8ce88f6_prof);

    }

    // line 3

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e2bf41eedb982ffe2835fe6f885e1838d13d8ea724ce0f198b7c73ddcc24e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2bf41eedb982ffe2835fe6f885e1838d13d8ea724ce0f198b7c73ddcc24e09->enter($__internal_8e2bf41eedb982ffe2835fe6f885e1838d13d8ea724ce0f198b7c73ddcc24e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if (!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }

        $__internal_8e2bf41eedb982ffe2835fe6f885e1838d13d8ea724ce0f198b7c73ddcc24e09->leave($__internal_8e2bf41eedb982ffe2835fe6f885e1838d13d8ea724ce0f198b7c73ddcc24e09_prof);

    }

    // line 12

    public function isTraitable()
    {
        return false;
    }

    // line 24

    public function getDebugInfo()
    {
        return array(117 => 33, 114 => 32, 108 => 28, 106 => 27, 102 => 25, 96 => 24, 88 => 21, 82 => 17, 80 => 16, 75 => 14, 70 => 13, 64 => 12, 54 => 9, 48 => 6, 45 => 5, 42 => 4, 36 => 3, 11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69047eab0b419634e2927fe99979496d4a2b513205ca82280a2ea8a53c77b697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69047eab0b419634e2927fe99979496d4a2b513205ca82280a2ea8a53c77b697->enter($__internal_69047eab0b419634e2927fe99979496d4a2b513205ca82280a2ea8a53c77b697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_69047eab0b419634e2927fe99979496d4a2b513205ca82280a2ea8a53c77b697->leave($__internal_69047eab0b419634e2927fe99979496d4a2b513205ca82280a2ea8a53c77b697_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }
}
