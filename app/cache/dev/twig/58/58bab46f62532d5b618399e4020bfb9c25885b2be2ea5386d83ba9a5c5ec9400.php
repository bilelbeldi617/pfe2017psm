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

    public function block_title($context, array $blocks = array())
    {
        $__internal_54cfe1dc51447dce435711c0c97730a52b8bb8fee3cbaeb6b65c5aa760499c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54cfe1dc51447dce435711c0c97730a52b8bb8fee3cbaeb6b65c5aa760499c10->enter($__internal_54cfe1dc51447dce435711c0c97730a52b8bb8fee3cbaeb6b65c5aa760499c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Créer un examen
    ";

        $__internal_54cfe1dc51447dce435711c0c97730a52b8bb8fee3cbaeb6b65c5aa760499c10->leave($__internal_54cfe1dc51447dce435711c0c97730a52b8bb8fee3cbaeb6b65c5aa760499c10_prof);

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
    {% endblock %}", "@projet/Default/Enseignant/creerExamen.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\creerExamen.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec9f823c83f4b11971a5038dfbad892de3a7e09e8f94e8e1bfd594e269f8d19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9f823c83f4b11971a5038dfbad892de3a7e09e8f94e8e1bfd594e269f8d19c->enter($__internal_ec9f823c83f4b11971a5038dfbad892de3a7e09e8f94e8e1bfd594e269f8d19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/creerExamen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_ec9f823c83f4b11971a5038dfbad892de3a7e09e8f94e8e1bfd594e269f8d19c->leave($__internal_ec9f823c83f4b11971a5038dfbad892de3a7e09e8f94e8e1bfd594e269f8d19c_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/creerExamen.html.twig";
    }
}
