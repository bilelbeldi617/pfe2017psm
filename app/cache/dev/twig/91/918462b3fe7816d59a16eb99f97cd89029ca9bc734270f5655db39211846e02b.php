<?php

/* projetBundle:Default/Enseignant:creerExamen.html.twig */

class __TwigTemplate_b34be3436eab5d95c3e84f07061ea1df9f083ec0cb70c881f76da9b66ec3c1a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "projetBundle:Default/Enseignant:creerExamen.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_51d41502346fed963a9598b4b41ff973f65afc7c1e9f164a8c87601181a962c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d41502346fed963a9598b4b41ff973f65afc7c1e9f164a8c87601181a962c7->enter($__internal_51d41502346fed963a9598b4b41ff973f65afc7c1e9f164a8c87601181a962c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Créer un examen
    ";

        $__internal_51d41502346fed963a9598b4b41ff973f65afc7c1e9f164a8c87601181a962c7->leave($__internal_51d41502346fed963a9598b4b41ff973f65afc7c1e9f164a8c87601181a962c7_prof);

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
        Créer un examen
    {% endblock %}", "projetBundle:Default/Enseignant:creerExamen.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/creerExamen.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f71d956ad6cbefa7fb090a758697f212fb33128c246e5cafd95e394d9d01bedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71d956ad6cbefa7fb090a758697f212fb33128c246e5cafd95e394d9d01bedc->enter($__internal_f71d956ad6cbefa7fb090a758697f212fb33128c246e5cafd95e394d9d01bedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:creerExamen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_f71d956ad6cbefa7fb090a758697f212fb33128c246e5cafd95e394d9d01bedc->leave($__internal_f71d956ad6cbefa7fb090a758697f212fb33128c246e5cafd95e394d9d01bedc_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:creerExamen.html.twig";
    }
}
