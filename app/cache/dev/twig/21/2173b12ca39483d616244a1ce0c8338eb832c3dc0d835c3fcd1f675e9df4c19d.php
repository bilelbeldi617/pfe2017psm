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

    public function block_title($context, array $blocks = array())
    {
        $__internal_28aaeac7f88aa98e41e6a20b8049a4701d71536a996d820bac81e9c167659593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28aaeac7f88aa98e41e6a20b8049a4701d71536a996d820bac81e9c167659593->enter($__internal_28aaeac7f88aa98e41e6a20b8049a4701d71536a996d820bac81e9c167659593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les examens
    ";

        $__internal_28aaeac7f88aa98e41e6a20b8049a4701d71536a996d820bac81e9c167659593->leave($__internal_28aaeac7f88aa98e41e6a20b8049a4701d71536a996d820bac81e9c167659593_prof);

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
    {% endblock %}", "projetBundle:Default/Enseignant:listerExamens.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/listerExamens.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8275636fa5e1d0ab139bbf09d50cf43b3ecf2b7156e4825534dec9e11e4c0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8275636fa5e1d0ab139bbf09d50cf43b3ecf2b7156e4825534dec9e11e4c0a9->enter($__internal_a8275636fa5e1d0ab139bbf09d50cf43b3ecf2b7156e4825534dec9e11e4c0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:listerExamens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_a8275636fa5e1d0ab139bbf09d50cf43b3ecf2b7156e4825534dec9e11e4c0a9->leave($__internal_a8275636fa5e1d0ab139bbf09d50cf43b3ecf2b7156e4825534dec9e11e4c0a9_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:listerExamens.html.twig";
    }
}
