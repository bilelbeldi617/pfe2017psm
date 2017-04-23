<?php

/* @projet/Default/Enseignant/contacterParent.html.twig */
class __TwigTemplate_a105e713e909b4816041ef6006a6b18456dbfea549ad51d1871bd02099c1c4c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "@projet/Default/Enseignant/contacterParent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_115c57fcba63adf7fe37ab252a3215199be110882d729c15be89ae8923513d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115c57fcba63adf7fe37ab252a3215199be110882d729c15be89ae8923513d39->enter($__internal_115c57fcba63adf7fe37ab252a3215199be110882d729c15be89ae8923513d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Contacter les parents
";

        $__internal_115c57fcba63adf7fe37ab252a3215199be110882d729c15be89ae8923513d39->leave($__internal_115c57fcba63adf7fe37ab252a3215199be110882d729c15be89ae8923513d39_prof);

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
", "@projet/Default/Enseignant/contacterParent.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\contacterParent.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fc9704ab9c6cae26cc3ab6477771d1b5d63b891659000a4bd32ff6432f500d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc9704ab9c6cae26cc3ab6477771d1b5d63b891659000a4bd32ff6432f500d9->enter($__internal_1fc9704ab9c6cae26cc3ab6477771d1b5d63b891659000a4bd32ff6432f500d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/contacterParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_1fc9704ab9c6cae26cc3ab6477771d1b5d63b891659000a4bd32ff6432f500d9->leave($__internal_1fc9704ab9c6cae26cc3ab6477771d1b5d63b891659000a4bd32ff6432f500d9_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/contacterParent.html.twig";
    }
}
