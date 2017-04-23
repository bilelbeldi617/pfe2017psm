<?php

/* projetBundle:Default/Admin:index.html.twig */

class __TwigTemplate_2f35ff7a9bb869fba352a34d9df5ae5e16b25e12d5b4d6460079709b39cf4610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_c0a0f5f8951a65b627f6d54df86b5e4718ed14fe163911f4de3a1a8a7062b18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a0f5f8951a65b627f6d54df86b5e4718ed14fe163911f4de3a1a8a7062b18a->enter($__internal_c0a0f5f8951a65b627f6d54df86b5e4718ed14fe163911f4de3a1a8a7062b18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
   Accueil

";

        $__internal_c0a0f5f8951a65b627f6d54df86b5e4718ed14fe163911f4de3a1a8a7062b18a->leave($__internal_c0a0f5f8951a65b627f6d54df86b5e4718ed14fe163911f4de3a1a8a7062b18a_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_f66ea17ed7d9ba84a93f9316a12024a07e1223a2fad7d93e3889d5bb7acd9923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66ea17ed7d9ba84a93f9316a12024a07e1223a2fad7d93e3889d5bb7acd9923->enter($__internal_f66ea17ed7d9ba84a93f9316a12024a07e1223a2fad7d93e3889d5bb7acd9923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_f66ea17ed7d9ba84a93f9316a12024a07e1223a2fad7d93e3889d5bb7acd9923->leave($__internal_f66ea17ed7d9ba84a93f9316a12024a07e1223a2fad7d93e3889d5bb7acd9923_prof);

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

{% endblock %}", "projetBundle:Default/Admin:index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/index.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca1737ee18a1c46dc624d742348972e64965dc7e7926308914e2510d9c1a379d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1737ee18a1c46dc624d742348972e64965dc7e7926308914e2510d9c1a379d->enter($__internal_ca1737ee18a1c46dc624d742348972e64965dc7e7926308914e2510d9c1a379d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_ca1737ee18a1c46dc624d742348972e64965dc7e7926308914e2510d9c1a379d->leave($__internal_ca1737ee18a1c46dc624d742348972e64965dc7e7926308914e2510d9c1a379d_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:index.html.twig";
    }
}
