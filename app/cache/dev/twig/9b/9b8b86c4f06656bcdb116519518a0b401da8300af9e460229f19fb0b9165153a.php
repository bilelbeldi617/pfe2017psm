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

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44760751bb552ea3ce7e8bb1dc635f7f5ff2c7ab3910cca84bb98b2b05817d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44760751bb552ea3ce7e8bb1dc635f7f5ff2c7ab3910cca84bb98b2b05817d21->enter($__internal_44760751bb552ea3ce7e8bb1dc635f7f5ff2c7ab3910cca84bb98b2b05817d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_44760751bb552ea3ce7e8bb1dc635f7f5ff2c7ab3910cca84bb98b2b05817d21->leave($__internal_44760751bb552ea3ce7e8bb1dc635f7f5ff2c7ab3910cca84bb98b2b05817d21_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_43bff9ec785e038999334b909036763e5fe3877718bd10eee764a018ca53c9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bff9ec785e038999334b909036763e5fe3877718bd10eee764a018ca53c9c6->enter($__internal_43bff9ec785e038999334b909036763e5fe3877718bd10eee764a018ca53c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_43bff9ec785e038999334b909036763e5fe3877718bd10eee764a018ca53c9c6->leave($__internal_43bff9ec785e038999334b909036763e5fe3877718bd10eee764a018ca53c9c6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
