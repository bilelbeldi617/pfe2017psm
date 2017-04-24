<?php

/* @projet/Default/Admin/index.html.twig */
class __TwigTemplate_f54a0d837b71fb690452eaf828a11e982d4fc926503b86587c57e6921db5de9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_072705789ce00b6f74f611d177ebf18ccec982fdb33660b8f6de7e113d138f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072705789ce00b6f74f611d177ebf18ccec982fdb33660b8f6de7e113d138f24->enter($__internal_072705789ce00b6f74f611d177ebf18ccec982fdb33660b8f6de7e113d138f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_072705789ce00b6f74f611d177ebf18ccec982fdb33660b8f6de7e113d138f24->leave($__internal_072705789ce00b6f74f611d177ebf18ccec982fdb33660b8f6de7e113d138f24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf601392b5b79f7658416eb87a6597b18e159011e212dffe5879c2c3b4f14086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf601392b5b79f7658416eb87a6597b18e159011e212dffe5879c2c3b4f14086->enter($__internal_bf601392b5b79f7658416eb87a6597b18e159011e212dffe5879c2c3b4f14086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
   Accueil

";
        
        $__internal_bf601392b5b79f7658416eb87a6597b18e159011e212dffe5879c2c3b4f14086->leave($__internal_bf601392b5b79f7658416eb87a6597b18e159011e212dffe5879c2c3b4f14086_prof);

    }

    // line 13
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_4b15448977c3fb798f002d4c871243c8b73302a8fc86bac474d7519129aca5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b15448977c3fb798f002d4c871243c8b73302a8fc86bac474d7519129aca5f3->enter($__internal_4b15448977c3fb798f002d4c871243c8b73302a8fc86bac474d7519129aca5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 14
        echo "
Des statistiques ...

    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "nomPa", array()), "html", null, true);
        echo "<br>
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "anneeScolaireCourante"), "method"), "periode", array()), "html", null, true);
        echo "

";
        
        $__internal_4b15448977c3fb798f002d4c871243c8b73302a8fc86bac474d7519129aca5f3->leave($__internal_4b15448977c3fb798f002d4c871243c8b73302a8fc86bac474d7519129aca5f3_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  62 => 17,  57 => 14,  51 => 13,  41 => 4,  35 => 3,  11 => 1,);
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

   Accueil

{% endblock %}





{% block mainContent %}

Des statistiques ...

    {{ app.session.get(\"user\").nomPa }}<br>
    {{ app.session.get(\"anneeScolaireCourante\").periode }}

{% endblock %}", "@projet/Default/Admin/index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\index.html.twig");
    }
}
