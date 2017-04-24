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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64d27875451c4e9227111d314af0837f7ebc589351b25028c1e0fb891d12ebed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d27875451c4e9227111d314af0837f7ebc589351b25028c1e0fb891d12ebed->enter($__internal_64d27875451c4e9227111d314af0837f7ebc589351b25028c1e0fb891d12ebed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64d27875451c4e9227111d314af0837f7ebc589351b25028c1e0fb891d12ebed->leave($__internal_64d27875451c4e9227111d314af0837f7ebc589351b25028c1e0fb891d12ebed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc8e0351bd7bfff8891274b8f22482111e5028eecfcb072e2b7ff4b604be7c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8e0351bd7bfff8891274b8f22482111e5028eecfcb072e2b7ff4b604be7c1d->enter($__internal_fc8e0351bd7bfff8891274b8f22482111e5028eecfcb072e2b7ff4b604be7c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
   Accueil

";
        
        $__internal_fc8e0351bd7bfff8891274b8f22482111e5028eecfcb072e2b7ff4b604be7c1d->leave($__internal_fc8e0351bd7bfff8891274b8f22482111e5028eecfcb072e2b7ff4b604be7c1d_prof);

    }

    // line 13
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_d30b5992449534c8a7212f97912d682c1bc90fb1c7bf7e898d4b7041f90e1e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30b5992449534c8a7212f97912d682c1bc90fb1c7bf7e898d4b7041f90e1e6c->enter($__internal_d30b5992449534c8a7212f97912d682c1bc90fb1c7bf7e898d4b7041f90e1e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_d30b5992449534c8a7212f97912d682c1bc90fb1c7bf7e898d4b7041f90e1e6c->leave($__internal_d30b5992449534c8a7212f97912d682c1bc90fb1c7bf7e898d4b7041f90e1e6c_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:index.html.twig";
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

{% endblock %}", "projetBundle:Default/Admin:index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/index.html.twig");
    }
}
