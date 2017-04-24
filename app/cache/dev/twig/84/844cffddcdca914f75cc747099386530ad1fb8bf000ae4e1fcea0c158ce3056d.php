<?php

/* projetBundle:Default/Admin:annoncerJours.html.twig */
class __TwigTemplate_0ed84ca0f2edff42a8695825db299ec0226c6ddc735426591b029c6a92146912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:annoncerJours.html.twig", 1);
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
        $__internal_f73eaa7c7fe5f8acfebadcbb0ced5a5ab3ce9eb6a85e29444024ba8183cc929d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73eaa7c7fe5f8acfebadcbb0ced5a5ab3ce9eb6a85e29444024ba8183cc929d->enter($__internal_f73eaa7c7fe5f8acfebadcbb0ced5a5ab3ce9eb6a85e29444024ba8183cc929d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:annoncerJours.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73eaa7c7fe5f8acfebadcbb0ced5a5ab3ce9eb6a85e29444024ba8183cc929d->leave($__internal_f73eaa7c7fe5f8acfebadcbb0ced5a5ab3ce9eb6a85e29444024ba8183cc929d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_41e53e5f73a8f35872a06bd8977303315453720a28d8e64fe5bc8ef6e78b10c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e53e5f73a8f35872a06bd8977303315453720a28d8e64fe5bc8ef6e78b10c5->enter($__internal_41e53e5f73a8f35872a06bd8977303315453720a28d8e64fe5bc8ef6e78b10c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Annoncer Jours Fériés
    ";
        
        $__internal_41e53e5f73a8f35872a06bd8977303315453720a28d8e64fe5bc8ef6e78b10c5->leave($__internal_41e53e5f73a8f35872a06bd8977303315453720a28d8e64fe5bc8ef6e78b10c5_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:annoncerJours.html.twig";
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
        Annoncer Jours Fériés
    {% endblock %}", "projetBundle:Default/Admin:annoncerJours.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/annoncerJours.html.twig");
    }
}
