<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_05e19a51a4cb66d7c305bcd1ae0df55f622cb6bfce5affa8201fad632d185d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01778ea325f73c00916aeaf262b315f2cc511cf696ae3a9f52115bf633e90fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01778ea325f73c00916aeaf262b315f2cc511cf696ae3a9f52115bf633e90fb6->enter($__internal_01778ea325f73c00916aeaf262b315f2cc511cf696ae3a9f52115bf633e90fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01778ea325f73c00916aeaf262b315f2cc511cf696ae3a9f52115bf633e90fb6->leave($__internal_01778ea325f73c00916aeaf262b315f2cc511cf696ae3a9f52115bf633e90fb6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c2bc572a3f38fa9ffb8e1089c384c45ab0d662a657f7555647d647b509dadd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2bc572a3f38fa9ffb8e1089c384c45ab0d662a657f7555647d647b509dadd9->enter($__internal_5c2bc572a3f38fa9ffb8e1089c384c45ab0d662a657f7555647d647b509dadd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5c2bc572a3f38fa9ffb8e1089c384c45ab0d662a657f7555647d647b509dadd9->leave($__internal_5c2bc572a3f38fa9ffb8e1089c384c45ab0d662a657f7555647d647b509dadd9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b54db49a7ed2ac0fea08965c1d9013e1558fc336806a6f137fd808cb834f6d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54db49a7ed2ac0fea08965c1d9013e1558fc336806a6f137fd808cb834f6d5d->enter($__internal_b54db49a7ed2ac0fea08965c1d9013e1558fc336806a6f137fd808cb834f6d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_b54db49a7ed2ac0fea08965c1d9013e1558fc336806a6f137fd808cb834f6d5d->leave($__internal_b54db49a7ed2ac0fea08965c1d9013e1558fc336806a6f137fd808cb834f6d5d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cee8f6cc48eef5fbf233e491696ad2926621c334a2fcf9325b919578b7b076b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee8f6cc48eef5fbf233e491696ad2926621c334a2fcf9325b919578b7b076b5->enter($__internal_cee8f6cc48eef5fbf233e491696ad2926621c334a2fcf9325b919578b7b076b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_cee8f6cc48eef5fbf233e491696ad2926621c334a2fcf9325b919578b7b076b5->leave($__internal_cee8f6cc48eef5fbf233e491696ad2926621c334a2fcf9325b919578b7b076b5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_333ded0151c675a1651b8df09116f7dbebc35cbef86f748b48ff5c188ae41ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333ded0151c675a1651b8df09116f7dbebc35cbef86f748b48ff5c188ae41ffd->enter($__internal_333ded0151c675a1651b8df09116f7dbebc35cbef86f748b48ff5c188ae41ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_333ded0151c675a1651b8df09116f7dbebc35cbef86f748b48ff5c188ae41ffd->leave($__internal_333ded0151c675a1651b8df09116f7dbebc35cbef86f748b48ff5c188ae41ffd_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
