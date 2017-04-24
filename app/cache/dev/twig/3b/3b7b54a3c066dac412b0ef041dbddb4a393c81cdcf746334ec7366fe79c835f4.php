<?php

/* @projet/Default/Admin/creerEmploi.html.twig */
class __TwigTemplate_d7db863c16f6ce6b40f01b5e5c5e07d06f80a66123a0092a6cbbe77766a08c36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/creerEmploi.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4efcf02686a7764037655ff3d31d86894870566e90a788157cc9bfc953d36519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4efcf02686a7764037655ff3d31d86894870566e90a788157cc9bfc953d36519->enter($__internal_4efcf02686a7764037655ff3d31d86894870566e90a788157cc9bfc953d36519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/creerEmploi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4efcf02686a7764037655ff3d31d86894870566e90a788157cc9bfc953d36519->leave($__internal_4efcf02686a7764037655ff3d31d86894870566e90a788157cc9bfc953d36519_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3afe02fa0c672d08af4c9f6a567c9f19753de3ef9c7532b1ccc1a4b34d6d79cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afe02fa0c672d08af4c9f6a567c9f19753de3ef9c7532b1ccc1a4b34d6d79cf->enter($__internal_3afe02fa0c672d08af4c9f6a567c9f19753de3ef9c7532b1ccc1a4b34d6d79cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Créer un emploi
    ";
        
        $__internal_3afe02fa0c672d08af4c9f6a567c9f19753de3ef9c7532b1ccc1a4b34d6d79cf->leave($__internal_3afe02fa0c672d08af4c9f6a567c9f19753de3ef9c7532b1ccc1a4b34d6d79cf_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/creerEmploi.html.twig";
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
        return new Twig_Source("{% extends \"::baseForAdmin.html.twig\" %}
    {% block title %}
        Créer un emploi
    {% endblock %}", "@projet/Default/Admin/creerEmploi.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\creerEmploi.html.twig");
    }
}
