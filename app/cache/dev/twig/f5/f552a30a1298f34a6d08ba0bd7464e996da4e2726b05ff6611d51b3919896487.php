<?php

/* @projet/Default/Parent/index.html.twig */
class __TwigTemplate_6e35875e4f1070f785fead22795866ee1b6a4582a7d1064c996b31a149c9ef72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "@projet/Default/Parent/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8134c97da6652d7e086948e23c6d18f3e60429aca49df59e6aae3ff18407ffd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8134c97da6652d7e086948e23c6d18f3e60429aca49df59e6aae3ff18407ffd6->enter($__internal_8134c97da6652d7e086948e23c6d18f3e60429aca49df59e6aae3ff18407ffd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8134c97da6652d7e086948e23c6d18f3e60429aca49df59e6aae3ff18407ffd6->leave($__internal_8134c97da6652d7e086948e23c6d18f3e60429aca49df59e6aae3ff18407ffd6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3a785d209684d4e3c77640581f585adced63bbcfdae214f7e3d689c73ebc059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a785d209684d4e3c77640581f585adced63bbcfdae214f7e3d689c73ebc059->enter($__internal_f3a785d209684d4e3c77640581f585adced63bbcfdae214f7e3d689c73ebc059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";
        
        $__internal_f3a785d209684d4e3c77640581f585adced63bbcfdae214f7e3d689c73ebc059->leave($__internal_f3a785d209684d4e3c77640581f585adced63bbcfdae214f7e3d689c73ebc059_prof);

    }

    // line 6
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_df3377caea89e0a2179ab3a888f98034a7b17e9e0c61c9370c48c39a18ee1168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3377caea89e0a2179ab3a888f98034a7b17e9e0c61c9370c48c39a18ee1168->enter($__internal_df3377caea89e0a2179ab3a888f98034a7b17e9e0c61c9370c48c39a18ee1168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    Hello mister Foulen!

";
        
        $__internal_df3377caea89e0a2179ab3a888f98034a7b17e9e0c61c9370c48c39a18ee1168->leave($__internal_df3377caea89e0a2179ab3a888f98034a7b17e9e0c61c9370c48c39a18ee1168_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/index.html.twig";
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
        return new Twig_Source("{% extends \"::baseForParent.html.twig\" %}
{% block title %}
    Accueil
{% endblock %}

{% block mainContent %}
    Hello mister Foulen!

{% endblock %}", "@projet/Default/Parent/index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\index.html.twig");
    }
}
