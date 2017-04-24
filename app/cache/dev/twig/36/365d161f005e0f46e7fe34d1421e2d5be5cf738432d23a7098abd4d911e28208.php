<?php

/* @projet/Default/login.html.twig */
class __TwigTemplate_c5d78b8075c4c4d3d3e76cdf543dea7547c65e2fc4b1cb4d3b7b13da933b30ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForLogin.html.twig", "@projet/Default/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9e72a57ead477148ddfbfeadbd3a397d4ab10dbf025b843a17a0edb667c48fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e72a57ead477148ddfbfeadbd3a397d4ab10dbf025b843a17a0edb667c48fd->enter($__internal_e9e72a57ead477148ddfbfeadbd3a397d4ab10dbf025b843a17a0edb667c48fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9e72a57ead477148ddfbfeadbd3a397d4ab10dbf025b843a17a0edb667c48fd->leave($__internal_e9e72a57ead477148ddfbfeadbd3a397d4ab10dbf025b843a17a0edb667c48fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6311b5d89c9277b85a2f55ab1c32cf3034890082e8ea1ce095ef082285b8902f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6311b5d89c9277b85a2f55ab1c32cf3034890082e8ea1ce095ef082285b8902f->enter($__internal_6311b5d89c9277b85a2f55ab1c32cf3034890082e8ea1ce095ef082285b8902f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    S'authentifier

";
        
        $__internal_6311b5d89c9277b85a2f55ab1c32cf3034890082e8ea1ce095ef082285b8902f->leave($__internal_6311b5d89c9277b85a2f55ab1c32cf3034890082e8ea1ce095ef082285b8902f_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForLogin.html.twig\"%}

{% block title %}

    S'authentifier

{% endblock %}


", "@projet/Default/login.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\login.html.twig");
    }
}
