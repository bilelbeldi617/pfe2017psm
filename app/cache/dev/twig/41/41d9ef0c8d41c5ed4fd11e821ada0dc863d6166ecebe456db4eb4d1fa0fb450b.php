<?php

/* projetBundle:Default/Enseignant:contacterParent.html.twig */

class __TwigTemplate_6947941b6af21e1b16789630404a7136b3a97bc5b077d09b6aa63633a82810a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "projetBundle:Default/Enseignant:contacterParent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_9cba188a2f8e8ccf09d660bcb74458b693b7e973df95e515f6a30485b651efa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cba188a2f8e8ccf09d660bcb74458b693b7e973df95e515f6a30485b651efa7->enter($__internal_9cba188a2f8e8ccf09d660bcb74458b693b7e973df95e515f6a30485b651efa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Contacter les parents
";

        $__internal_9cba188a2f8e8ccf09d660bcb74458b693b7e973df95e515f6a30485b651efa7->leave($__internal_9cba188a2f8e8ccf09d660bcb74458b693b7e973df95e515f6a30485b651efa7_prof);

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
    Contacter les parents
{% endblock %}
", "projetBundle:Default/Enseignant:contacterParent.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/contacterParent.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b1ba95a5e5f200b670c637a62b97560329a42a7c021785d0961c1d02cfe3fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1ba95a5e5f200b670c637a62b97560329a42a7c021785d0961c1d02cfe3fb4->enter($__internal_5b1ba95a5e5f200b670c637a62b97560329a42a7c021785d0961c1d02cfe3fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:contacterParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_5b1ba95a5e5f200b670c637a62b97560329a42a7c021785d0961c1d02cfe3fb4->leave($__internal_5b1ba95a5e5f200b670c637a62b97560329a42a7c021785d0961c1d02cfe3fb4_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:contacterParent.html.twig";
    }
}
