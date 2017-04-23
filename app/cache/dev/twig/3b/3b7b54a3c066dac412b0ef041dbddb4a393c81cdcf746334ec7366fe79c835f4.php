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

    public function block_title($context, array $blocks = array())
    {
        $__internal_b4c6bf8499f44aec74076319987ad047dc97ac34194e7458c8b23f24746e0f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c6bf8499f44aec74076319987ad047dc97ac34194e7458c8b23f24746e0f21->enter($__internal_b4c6bf8499f44aec74076319987ad047dc97ac34194e7458c8b23f24746e0f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Créer un emploi
    ";

        $__internal_b4c6bf8499f44aec74076319987ad047dc97ac34194e7458c8b23f24746e0f21->leave($__internal_b4c6bf8499f44aec74076319987ad047dc97ac34194e7458c8b23f24746e0f21_prof);

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
        return new Twig_Source("{% extends \"::baseForAdmin.html.twig\" %}
    {% block title %}
        Créer un emploi
    {% endblock %}", "@projet/Default/Admin/creerEmploi.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\creerEmploi.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_459d61ac40558320b244329205a18e499c4cc42b950686e7e96559887a68afa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459d61ac40558320b244329205a18e499c4cc42b950686e7e96559887a68afa7->enter($__internal_459d61ac40558320b244329205a18e499c4cc42b950686e7e96559887a68afa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/creerEmploi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_459d61ac40558320b244329205a18e499c4cc42b950686e7e96559887a68afa7->leave($__internal_459d61ac40558320b244329205a18e499c4cc42b950686e7e96559887a68afa7_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/creerEmploi.html.twig";
    }
}
