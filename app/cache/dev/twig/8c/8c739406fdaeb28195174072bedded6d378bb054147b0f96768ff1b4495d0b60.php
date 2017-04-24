<?php

/* @projet/Default/Admin/listerEmploi.html.twig */
class __TwigTemplate_cbe651ae41d3155ecdc3cfec76e949cc079a4c7e7b4f96580189dd637d023103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/listerEmploi.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16f59f78e42ba71d09f5935b328ab0548ac0556a4b89f36127ad5fcc21d88741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16f59f78e42ba71d09f5935b328ab0548ac0556a4b89f36127ad5fcc21d88741->enter($__internal_16f59f78e42ba71d09f5935b328ab0548ac0556a4b89f36127ad5fcc21d88741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerEmploi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16f59f78e42ba71d09f5935b328ab0548ac0556a4b89f36127ad5fcc21d88741->leave($__internal_16f59f78e42ba71d09f5935b328ab0548ac0556a4b89f36127ad5fcc21d88741_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_71f245e443b4edc74d1d17585104143583edab3fb40af14a33704e6f7f4bf8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f245e443b4edc74d1d17585104143583edab3fb40af14a33704e6f7f4bf8f0->enter($__internal_71f245e443b4edc74d1d17585104143583edab3fb40af14a33704e6f7f4bf8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les emplois
    ";
        
        $__internal_71f245e443b4edc74d1d17585104143583edab3fb40af14a33704e6f7f4bf8f0->leave($__internal_71f245e443b4edc74d1d17585104143583edab3fb40af14a33704e6f7f4bf8f0_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerEmploi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
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
        Lister les emplois
    {% endblock %}", "@projet/Default/Admin/listerEmploi.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerEmploi.html.twig");
    }
}
