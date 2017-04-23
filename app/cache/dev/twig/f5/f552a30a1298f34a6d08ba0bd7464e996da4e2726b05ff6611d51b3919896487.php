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

    public function block_title($context, array $blocks = array())
    {
        $__internal_58bc4f5768e286e6c1b11382f2fd8199b721ed8511c90b2b3f0cacb53fd870a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bc4f5768e286e6c1b11382f2fd8199b721ed8511c90b2b3f0cacb53fd870a6->enter($__internal_58bc4f5768e286e6c1b11382f2fd8199b721ed8511c90b2b3f0cacb53fd870a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Accueil
";

        $__internal_58bc4f5768e286e6c1b11382f2fd8199b721ed8511c90b2b3f0cacb53fd870a6->leave($__internal_58bc4f5768e286e6c1b11382f2fd8199b721ed8511c90b2b3f0cacb53fd870a6_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_d7db566a34e646ed64637e8c013a013d90dd3242c5e26e5dfdde690643cee99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7db566a34e646ed64637e8c013a013d90dd3242c5e26e5dfdde690643cee99e->enter($__internal_d7db566a34e646ed64637e8c013a013d90dd3242c5e26e5dfdde690643cee99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    Hello mister Foulen!

";

        $__internal_d7db566a34e646ed64637e8c013a013d90dd3242c5e26e5dfdde690643cee99e->leave($__internal_d7db566a34e646ed64637e8c013a013d90dd3242c5e26e5dfdde690643cee99e_prof);

    }

    // line 2

    public function isTraitable()
    {
        return false;
    }

    // line 6

    public function getDebugInfo()
    {
        return array(55 => 7, 49 => 6, 41 => 3, 35 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e690ebe485a724c25c7f0977994b551d4119502f249167a87b36cf60fa108550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e690ebe485a724c25c7f0977994b551d4119502f249167a87b36cf60fa108550->enter($__internal_e690ebe485a724c25c7f0977994b551d4119502f249167a87b36cf60fa108550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_e690ebe485a724c25c7f0977994b551d4119502f249167a87b36cf60fa108550->leave($__internal_e690ebe485a724c25c7f0977994b551d4119502f249167a87b36cf60fa108550_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/index.html.twig";
    }
}
