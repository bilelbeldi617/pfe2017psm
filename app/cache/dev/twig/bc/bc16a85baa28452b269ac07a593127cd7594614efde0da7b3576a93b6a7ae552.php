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

    public function block_title($context, array $blocks = array())
    {
        $__internal_f6751439a936824423cb39988a17a04a3190e995f63bea9724ced682bd9d5fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6751439a936824423cb39988a17a04a3190e995f63bea9724ced682bd9d5fd1->enter($__internal_f6751439a936824423cb39988a17a04a3190e995f63bea9724ced682bd9d5fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les examens
    ";

        $__internal_f6751439a936824423cb39988a17a04a3190e995f63bea9724ced682bd9d5fd1->leave($__internal_f6751439a936824423cb39988a17a04a3190e995f63bea9724ced682bd9d5fd1_prof);

    }

    public function isTraitable()
    {
        return false;
    }

    // line 2

    public function getDebugInfo()
    {
        return array(40 => 3, 34 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForEnseignant.html.twig\" %}
    {% block title %}
        Lister les examens
    {% endblock %}", "@projet/Default/Enseignant/listerExamens.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\listerExamens.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c96cb50c937043b3c3a2ea1cf280992f779ffec0f29db81163e17526ca0f7d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96cb50c937043b3c3a2ea1cf280992f779ffec0f29db81163e17526ca0f7d42->enter($__internal_c96cb50c937043b3c3a2ea1cf280992f779ffec0f29db81163e17526ca0f7d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/listerExamens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_c96cb50c937043b3c3a2ea1cf280992f779ffec0f29db81163e17526ca0f7d42->leave($__internal_c96cb50c937043b3c3a2ea1cf280992f779ffec0f29db81163e17526ca0f7d42_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/listerExamens.html.twig";
    }
}
