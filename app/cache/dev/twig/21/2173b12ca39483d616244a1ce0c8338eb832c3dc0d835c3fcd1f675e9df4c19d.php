<?php

/* projetBundle:Default/Enseignant:listerExamens.html.twig */
class __TwigTemplate_e8701365b430f6fe27bf569344440ffecbd4d82accc43d67be2814a12ff85600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "projetBundle:Default/Enseignant:listerExamens.html.twig", 1);
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
        $__internal_c995cd11872aa65fcf1bf9cf11d6696840544000a196d3388039c26fb75d1217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c995cd11872aa65fcf1bf9cf11d6696840544000a196d3388039c26fb75d1217->enter($__internal_c995cd11872aa65fcf1bf9cf11d6696840544000a196d3388039c26fb75d1217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:listerExamens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c995cd11872aa65fcf1bf9cf11d6696840544000a196d3388039c26fb75d1217->leave($__internal_c995cd11872aa65fcf1bf9cf11d6696840544000a196d3388039c26fb75d1217_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_37746a3c920d8f05be551dfba7fed87cb2b0529cd4ed11022b6c366dc3b63bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37746a3c920d8f05be551dfba7fed87cb2b0529cd4ed11022b6c366dc3b63bac->enter($__internal_37746a3c920d8f05be551dfba7fed87cb2b0529cd4ed11022b6c366dc3b63bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les examens
    ";
        
        $__internal_37746a3c920d8f05be551dfba7fed87cb2b0529cd4ed11022b6c366dc3b63bac->leave($__internal_37746a3c920d8f05be551dfba7fed87cb2b0529cd4ed11022b6c366dc3b63bac_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:listerExamens.html.twig";
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
    {% endblock %}", "projetBundle:Default/Enseignant:listerExamens.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/listerExamens.html.twig");
    }
}
