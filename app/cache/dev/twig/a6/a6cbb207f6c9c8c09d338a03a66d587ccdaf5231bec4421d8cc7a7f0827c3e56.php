<?php

/* projetBundle:Default/Parent:index.html.twig */
class __TwigTemplate_bcc0d71d29254c3397e55cc406bba1b0080ab7ea9be0d343ac1512149afba95b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "projetBundle:Default/Parent:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11ab4b83883277676b4c83bc3cb77a1f3d33e78f9d387a33f4d039bbb96df614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ab4b83883277676b4c83bc3cb77a1f3d33e78f9d387a33f4d039bbb96df614->enter($__internal_11ab4b83883277676b4c83bc3cb77a1f3d33e78f9d387a33f4d039bbb96df614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11ab4b83883277676b4c83bc3cb77a1f3d33e78f9d387a33f4d039bbb96df614->leave($__internal_11ab4b83883277676b4c83bc3cb77a1f3d33e78f9d387a33f4d039bbb96df614_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f41c96cf190d8d19ae8aa0ef9676ab64e2da1e13883430417c73d194353f3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f41c96cf190d8d19ae8aa0ef9676ab64e2da1e13883430417c73d194353f3d1->enter($__internal_2f41c96cf190d8d19ae8aa0ef9676ab64e2da1e13883430417c73d194353f3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";
        
        $__internal_2f41c96cf190d8d19ae8aa0ef9676ab64e2da1e13883430417c73d194353f3d1->leave($__internal_2f41c96cf190d8d19ae8aa0ef9676ab64e2da1e13883430417c73d194353f3d1_prof);

    }

    // line 6
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_61f90d4fbd06e500868683541c68034e4e5d2602d6dad05db069b14ae2d93516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f90d4fbd06e500868683541c68034e4e5d2602d6dad05db069b14ae2d93516->enter($__internal_61f90d4fbd06e500868683541c68034e4e5d2602d6dad05db069b14ae2d93516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    Hello mister Foulen!

";
        
        $__internal_61f90d4fbd06e500868683541c68034e4e5d2602d6dad05db069b14ae2d93516->leave($__internal_61f90d4fbd06e500868683541c68034e4e5d2602d6dad05db069b14ae2d93516_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForParent.html.twig\" %}
{% block title %}
    Accueil
{% endblock %}

{% block mainContent %}
    Hello mister Foulen!

{% endblock %}", "projetBundle:Default/Parent:index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/index.html.twig");
    }
}
