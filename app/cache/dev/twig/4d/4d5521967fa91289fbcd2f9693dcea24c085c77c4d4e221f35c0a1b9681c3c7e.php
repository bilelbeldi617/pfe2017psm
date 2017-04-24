<?php

/* projetBundle:Default/Admin:creerEmploi.html.twig */
class __TwigTemplate_66eb87027b60a79b6497c4e933a786ec0451741bc6cc38a37f0b699a6a96820a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:creerEmploi.html.twig", 1);
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
        $__internal_e14577cdb154c2f56a8214ae1a8475aa6755265582e2173e86fa73ca10381258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e14577cdb154c2f56a8214ae1a8475aa6755265582e2173e86fa73ca10381258->enter($__internal_e14577cdb154c2f56a8214ae1a8475aa6755265582e2173e86fa73ca10381258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:creerEmploi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14577cdb154c2f56a8214ae1a8475aa6755265582e2173e86fa73ca10381258->leave($__internal_e14577cdb154c2f56a8214ae1a8475aa6755265582e2173e86fa73ca10381258_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3731b5ad5dcd335f6c13b41fdaca4d6df7875bda76767767265351b78449deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3731b5ad5dcd335f6c13b41fdaca4d6df7875bda76767767265351b78449deb->enter($__internal_b3731b5ad5dcd335f6c13b41fdaca4d6df7875bda76767767265351b78449deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Créer un emploi
    ";
        
        $__internal_b3731b5ad5dcd335f6c13b41fdaca4d6df7875bda76767767265351b78449deb->leave($__internal_b3731b5ad5dcd335f6c13b41fdaca4d6df7875bda76767767265351b78449deb_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:creerEmploi.html.twig";
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
    {% endblock %}", "projetBundle:Default/Admin:creerEmploi.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/creerEmploi.html.twig");
    }
}
