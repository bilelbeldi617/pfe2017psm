<?php

/* projetBundle:Default/Enseignant:index.html.twig */
class __TwigTemplate_b1d9ed0fb6d3a236533eb38cb4aeb214cb6e6f4f569d58259ddabf88b724f90e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "projetBundle:Default/Enseignant:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8a7397003732678bb9aa11ea09624a3a7e2c859cf1b21b3b19836e3142b0f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a7397003732678bb9aa11ea09624a3a7e2c859cf1b21b3b19836e3142b0f31->enter($__internal_b8a7397003732678bb9aa11ea09624a3a7e2c859cf1b21b3b19836e3142b0f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8a7397003732678bb9aa11ea09624a3a7e2c859cf1b21b3b19836e3142b0f31->leave($__internal_b8a7397003732678bb9aa11ea09624a3a7e2c859cf1b21b3b19836e3142b0f31_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0cf7c99b7a6dd1f30a4aa908781d6695c7f614e88cc39e1de379d7bf16ec88c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0cf7c99b7a6dd1f30a4aa908781d6695c7f614e88cc39e1de379d7bf16ec88c->enter($__internal_d0cf7c99b7a6dd1f30a4aa908781d6695c7f614e88cc39e1de379d7bf16ec88c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";
        
        $__internal_d0cf7c99b7a6dd1f30a4aa908781d6695c7f614e88cc39e1de379d7bf16ec88c->leave($__internal_d0cf7c99b7a6dd1f30a4aa908781d6695c7f614e88cc39e1de379d7bf16ec88c_prof);

    }

    // line 6
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_614a02334e0572c0fbf11ced7924e7a053d4f513248be7497054b4e222ab476d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614a02334e0572c0fbf11ced7924e7a053d4f513248be7497054b4e222ab476d->enter($__internal_614a02334e0572c0fbf11ced7924e7a053d4f513248be7497054b4e222ab476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    Hello enseignant!
";
        
        $__internal_614a02334e0572c0fbf11ced7924e7a053d4f513248be7497054b4e222ab476d->leave($__internal_614a02334e0572c0fbf11ced7924e7a053d4f513248be7497054b4e222ab476d_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
    Accueil
{% endblock %}

{% block mainContent %}
    Hello enseignant!
{% endblock %}", "projetBundle:Default/Enseignant:index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/index.html.twig");
    }
}
