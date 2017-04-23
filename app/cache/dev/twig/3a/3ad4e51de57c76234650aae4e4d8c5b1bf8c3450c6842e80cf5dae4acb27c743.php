<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_041dc013efa00c8b5f4c45b36fda7364a0b53d8fcabaa4e18c2fed632bc8c024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_900a82fa76ddc9b952d3f59dd9f493a6714bb818ca85d451e9dbda4f9a227c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900a82fa76ddc9b952d3f59dd9f493a6714bb818ca85d451e9dbda4f9a227c17->enter($__internal_900a82fa76ddc9b952d3f59dd9f493a6714bb818ca85d451e9dbda4f9a227c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";

        $__internal_900a82fa76ddc9b952d3f59dd9f493a6714bb818ca85d451e9dbda4f9a227c17->leave($__internal_900a82fa76ddc9b952d3f59dd9f493a6714bb818ca85d451e9dbda4f9a227c17_prof);

    }

    public function getDebugInfo()
    {
        return array(23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46b71b58c7c4cd2307cf9318bc7e6eae737330dbe4edf954392d6cc9bf586b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b71b58c7c4cd2307cf9318bc7e6eae737330dbe4edf954392d6cc9bf586b29->enter($__internal_46b71b58c7c4cd2307cf9318bc7e6eae737330dbe4edf954392d6cc9bf586b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);

        $__internal_46b71b58c7c4cd2307cf9318bc7e6eae737330dbe4edf954392d6cc9bf586b29->leave($__internal_46b71b58c7c4cd2307cf9318bc7e6eae737330dbe4edf954392d6cc9bf586b29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }
}
