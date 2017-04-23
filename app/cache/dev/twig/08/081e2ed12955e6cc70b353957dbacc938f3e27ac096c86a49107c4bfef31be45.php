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

    public function block_title($context, array $blocks = array())
    {
        $__internal_0da08398511a29d632c3ce70fe4250c20090a472e6e9ff16955c39e8cda51e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da08398511a29d632c3ce70fe4250c20090a472e6e9ff16955c39e8cda51e79->enter($__internal_0da08398511a29d632c3ce70fe4250c20090a472e6e9ff16955c39e8cda51e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
   Accueil

";

        $__internal_0da08398511a29d632c3ce70fe4250c20090a472e6e9ff16955c39e8cda51e79->leave($__internal_0da08398511a29d632c3ce70fe4250c20090a472e6e9ff16955c39e8cda51e79_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_60b868f90ec59e56e634323f1284cf1ba3fe11b4fe77e02ad9b461542efb89fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b868f90ec59e56e634323f1284cf1ba3fe11b4fe77e02ad9b461542efb89fe->enter($__internal_60b868f90ec59e56e634323f1284cf1ba3fe11b4fe77e02ad9b461542efb89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_60b868f90ec59e56e634323f1284cf1ba3fe11b4fe77e02ad9b461542efb89fe->leave($__internal_60b868f90ec59e56e634323f1284cf1ba3fe11b4fe77e02ad9b461542efb89fe_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 13

    public function getDebugInfo()
    {
        return array(66 => 18, 62 => 17, 57 => 14, 51 => 13, 41 => 4, 35 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84dee1b0a06af0fd611ecb17cedd528bfb277cb6c3b0dbf6e7c734c6ee3ceedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84dee1b0a06af0fd611ecb17cedd528bfb277cb6c3b0dbf6e7c734c6ee3ceedd->enter($__internal_84dee1b0a06af0fd611ecb17cedd528bfb277cb6c3b0dbf6e7c734c6ee3ceedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_84dee1b0a06af0fd611ecb17cedd528bfb277cb6c3b0dbf6e7c734c6ee3ceedd->leave($__internal_84dee1b0a06af0fd611ecb17cedd528bfb277cb6c3b0dbf6e7c734c6ee3ceedd_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/index.html.twig";
    }
}
