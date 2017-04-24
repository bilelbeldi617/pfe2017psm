<?php

/* @projet/Default/Enseignant/index.html.twig */
class __TwigTemplate_827ecc591758509f124c55c728ef1002ad610cf6879614579a664bd59c648959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "@projet/Default/Enseignant/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95cfcc0c8b4b87b8d19392650c75eb616f348a05e6191e5e0007203119484f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cfcc0c8b4b87b8d19392650c75eb616f348a05e6191e5e0007203119484f74->enter($__internal_95cfcc0c8b4b87b8d19392650c75eb616f348a05e6191e5e0007203119484f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95cfcc0c8b4b87b8d19392650c75eb616f348a05e6191e5e0007203119484f74->leave($__internal_95cfcc0c8b4b87b8d19392650c75eb616f348a05e6191e5e0007203119484f74_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c546073cbf4b72bfe84841ed882a6518146fb8b6bf8865c82813b5342330307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c546073cbf4b72bfe84841ed882a6518146fb8b6bf8865c82813b5342330307->enter($__internal_8c546073cbf4b72bfe84841ed882a6518146fb8b6bf8865c82813b5342330307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";
        
        $__internal_8c546073cbf4b72bfe84841ed882a6518146fb8b6bf8865c82813b5342330307->leave($__internal_8c546073cbf4b72bfe84841ed882a6518146fb8b6bf8865c82813b5342330307_prof);

    }

    // line 6
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_a5c132f97f29476f5d32cf8f7b4ddd2d6b094a3aef09730a55a49a2a9b5774ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c132f97f29476f5d32cf8f7b4ddd2d6b094a3aef09730a55a49a2a9b5774ae->enter($__internal_a5c132f97f29476f5d32cf8f7b4ddd2d6b094a3aef09730a55a49a2a9b5774ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    Hello enseignant!
";
        
        $__internal_a5c132f97f29476f5d32cf8f7b4ddd2d6b094a3aef09730a55a49a2a9b5774ae->leave($__internal_a5c132f97f29476f5d32cf8f7b4ddd2d6b094a3aef09730a55a49a2a9b5774ae_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/index.html.twig";
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
        return new Twig_Source("{% extends \"::baseForEnseignant.html.twig\" %}
{% block title %}
    Accueil
{% endblock %}

{% block mainContent %}
    Hello enseignant!
{% endblock %}", "@projet/Default/Enseignant/index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\index.html.twig");
    }
}
