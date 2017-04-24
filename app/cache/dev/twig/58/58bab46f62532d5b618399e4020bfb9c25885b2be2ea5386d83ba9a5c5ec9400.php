<?php

/* @projet/Default/Enseignant/creerExamen.html.twig */
class __TwigTemplate_c1fe21f9276983fead1be39c380269cec34dd80b8ea818a8ca206b26b1e5ae0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "@projet/Default/Enseignant/creerExamen.html.twig", 1);
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
        $__internal_2fd7a0fa1a636d1c31cd8b097a90366c83ec0915cbc397528e37880a7eadab4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd7a0fa1a636d1c31cd8b097a90366c83ec0915cbc397528e37880a7eadab4f->enter($__internal_2fd7a0fa1a636d1c31cd8b097a90366c83ec0915cbc397528e37880a7eadab4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/creerExamen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd7a0fa1a636d1c31cd8b097a90366c83ec0915cbc397528e37880a7eadab4f->leave($__internal_2fd7a0fa1a636d1c31cd8b097a90366c83ec0915cbc397528e37880a7eadab4f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e046b6ff7ebb3908c97c65e6af4ee51056f636b7f5166052f9cfb020b59edf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e046b6ff7ebb3908c97c65e6af4ee51056f636b7f5166052f9cfb020b59edf48->enter($__internal_e046b6ff7ebb3908c97c65e6af4ee51056f636b7f5166052f9cfb020b59edf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Créer un examen
    ";
        
        $__internal_e046b6ff7ebb3908c97c65e6af4ee51056f636b7f5166052f9cfb020b59edf48->leave($__internal_e046b6ff7ebb3908c97c65e6af4ee51056f636b7f5166052f9cfb020b59edf48_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/creerExamen.html.twig";
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
        Créer un examen
    {% endblock %}", "@projet/Default/Enseignant/creerExamen.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\creerExamen.html.twig");
    }
}
