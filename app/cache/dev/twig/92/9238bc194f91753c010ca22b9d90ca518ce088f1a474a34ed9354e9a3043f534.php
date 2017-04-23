<?php

/* projetBundle:Default/Admin:AffecterAutomatiquement.html.twig */

class __TwigTemplate_6681eb21a54c6d3167558780390197e07a25d5a5b04947e1b7a2e053acd685b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "projetBundle:Default/Admin:AffecterAutomatiquement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_b91367349a37e803dadeffc9066ffdf16bb91b9424ef085a4856316c355dfd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91367349a37e803dadeffc9066ffdf16bb91b9424ef085a4856316c355dfd94->enter($__internal_b91367349a37e803dadeffc9066ffdf16bb91b9424ef085a4856316c355dfd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Affecter Automatiquement
";

        $__internal_b91367349a37e803dadeffc9066ffdf16bb91b9424ef085a4856316c355dfd94->leave($__internal_b91367349a37e803dadeffc9066ffdf16bb91b9424ef085a4856316c355dfd94_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_3178c4aedd2780acc12539bb962a1abb86b1c144d0f9b18fbbf3db13c7a97403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3178c4aedd2780acc12539bb962a1abb86b1c144d0f9b18fbbf3db13c7a97403->enter($__internal_3178c4aedd2780acc12539bb962a1abb86b1c144d0f9b18fbbf3db13c7a97403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));


        $__internal_3178c4aedd2780acc12539bb962a1abb86b1c144d0f9b18fbbf3db13c7a97403->leave($__internal_3178c4aedd2780acc12539bb962a1abb86b1c144d0f9b18fbbf3db13c7a97403_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 7

    public function getDebugInfo()
    {
        return array(49 => 7, 41 => 4, 35 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForAdmin.html.twig\" %}

{% block title %}
    Affecter Automatiquement
{% endblock %}

{% block mainContent %}
{% endblock %}", "projetBundle:Default/Admin:AffecterAutomatiquement.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/AffecterAutomatiquement.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c5007a2524978860c1553b25fe0715c2e6c263b3d8559f06803a7e242d93128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5007a2524978860c1553b25fe0715c2e6c263b3d8559f06803a7e242d93128->enter($__internal_7c5007a2524978860c1553b25fe0715c2e6c263b3d8559f06803a7e242d93128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:AffecterAutomatiquement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_7c5007a2524978860c1553b25fe0715c2e6c263b3d8559f06803a7e242d93128->leave($__internal_7c5007a2524978860c1553b25fe0715c2e6c263b3d8559f06803a7e242d93128_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:AffecterAutomatiquement.html.twig";
    }
}
