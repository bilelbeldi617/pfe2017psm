<?php

/* @projet/Default/Enseignant/listerExamens.html.twig */
class __TwigTemplate_37633e9fc194a8dbc47ddeecc50fc90cdd9e1e875ccfa7d6bd580b05272f679c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "@projet/Default/Enseignant/listerExamens.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11c056532dbc1d9b5b6b9e90d5f5ad587f3efb1221c57e63acef0c48b290f6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11c056532dbc1d9b5b6b9e90d5f5ad587f3efb1221c57e63acef0c48b290f6f0->enter($__internal_11c056532dbc1d9b5b6b9e90d5f5ad587f3efb1221c57e63acef0c48b290f6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/listerExamens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c056532dbc1d9b5b6b9e90d5f5ad587f3efb1221c57e63acef0c48b290f6f0->leave($__internal_11c056532dbc1d9b5b6b9e90d5f5ad587f3efb1221c57e63acef0c48b290f6f0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_54c3b556f18b99a7c354485cc012e0d7f30337188d702512a6ebd2b10fc1355f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c3b556f18b99a7c354485cc012e0d7f30337188d702512a6ebd2b10fc1355f->enter($__internal_54c3b556f18b99a7c354485cc012e0d7f30337188d702512a6ebd2b10fc1355f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les examens
    ";
        
        $__internal_54c3b556f18b99a7c354485cc012e0d7f30337188d702512a6ebd2b10fc1355f->leave($__internal_54c3b556f18b99a7c354485cc012e0d7f30337188d702512a6ebd2b10fc1355f_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/listerExamens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
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
        Lister les examens
    {% endblock %}", "@projet/Default/Enseignant/listerExamens.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\listerExamens.html.twig");
    }
}
