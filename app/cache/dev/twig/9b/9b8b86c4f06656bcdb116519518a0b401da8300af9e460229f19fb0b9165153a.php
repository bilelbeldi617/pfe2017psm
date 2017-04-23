<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */

class __TwigTemplate_d19faa4b8970f3c1dcc9ed9e6b888e535c3266d29cf91ef4397be9c9e3316cce extends Twig_Template
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
        $__internal_77f1f4c347e30fb5d9f68fcda21aa6bf8cb668ca950202744d51c5a53473158b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f1f4c347e30fb5d9f68fcda21aa6bf8cb668ca950202744d51c5a53473158b->enter($__internal_77f1f4c347e30fb5d9f68fcda21aa6bf8cb668ca950202744d51c5a53473158b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";

        $__internal_77f1f4c347e30fb5d9f68fcda21aa6bf8cb668ca950202744d51c5a53473158b->leave($__internal_77f1f4c347e30fb5d9f68fcda21aa6bf8cb668ca950202744d51c5a53473158b_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fdcb4d5abdffe6c210f1a894cc42d9d028e2ebe154e90aa0b61fe828ea71a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdcb4d5abdffe6c210f1a894cc42d9d028e2ebe154e90aa0b61fe828ea71a2d->enter($__internal_4fdcb4d5abdffe6c210f1a894cc42d9d028e2ebe154e90aa0b61fe828ea71a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);

        $__internal_4fdcb4d5abdffe6c210f1a894cc42d9d028e2ebe154e90aa0b61fe828ea71a2d->leave($__internal_4fdcb4d5abdffe6c210f1a894cc42d9d028e2ebe154e90aa0b61fe828ea71a2d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }
}
