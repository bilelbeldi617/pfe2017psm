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

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99c853e9ffd63c231201ac4f0734272421039bd4935ac319a0d7ef415c979aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c853e9ffd63c231201ac4f0734272421039bd4935ac319a0d7ef415c979aec->enter($__internal_99c853e9ffd63c231201ac4f0734272421039bd4935ac319a0d7ef415c979aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_99c853e9ffd63c231201ac4f0734272421039bd4935ac319a0d7ef415c979aec->leave($__internal_99c853e9ffd63c231201ac4f0734272421039bd4935ac319a0d7ef415c979aec_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_40817ffde38ff894b657b9ade51b7bf1dd445da017146087d1c0f401bfe7258e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40817ffde38ff894b657b9ade51b7bf1dd445da017146087d1c0f401bfe7258e->enter($__internal_40817ffde38ff894b657b9ade51b7bf1dd445da017146087d1c0f401bfe7258e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_40817ffde38ff894b657b9ade51b7bf1dd445da017146087d1c0f401bfe7258e->leave($__internal_40817ffde38ff894b657b9ade51b7bf1dd445da017146087d1c0f401bfe7258e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
