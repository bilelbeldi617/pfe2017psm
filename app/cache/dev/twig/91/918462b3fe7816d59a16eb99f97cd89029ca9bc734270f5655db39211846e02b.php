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

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99560068bb27e3323facbd6709bfe6a1b6ac5a8b31ba41c180dfb0376fa51783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99560068bb27e3323facbd6709bfe6a1b6ac5a8b31ba41c180dfb0376fa51783->enter($__internal_99560068bb27e3323facbd6709bfe6a1b6ac5a8b31ba41c180dfb0376fa51783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:creerExamen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99560068bb27e3323facbd6709bfe6a1b6ac5a8b31ba41c180dfb0376fa51783->leave($__internal_99560068bb27e3323facbd6709bfe6a1b6ac5a8b31ba41c180dfb0376fa51783_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d19dbc10b209c372ea86953a9034cf18184f6ad6837b12a4691131f5afb087d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19dbc10b209c372ea86953a9034cf18184f6ad6837b12a4691131f5afb087d7->enter($__internal_d19dbc10b209c372ea86953a9034cf18184f6ad6837b12a4691131f5afb087d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Créer un examen
    ";
        
        $__internal_d19dbc10b209c372ea86953a9034cf18184f6ad6837b12a4691131f5afb087d7->leave($__internal_d19dbc10b209c372ea86953a9034cf18184f6ad6837b12a4691131f5afb087d7_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:creerExamen.html.twig";
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
    {% endblock %}", "projetBundle:Default/Enseignant:creerExamen.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/creerExamen.html.twig");
    }
}
