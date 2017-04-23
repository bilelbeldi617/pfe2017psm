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

    public function block_title($context, array $blocks = array())
    {
        $__internal_73d94811a95c0326747f6224c7e5b5701453c9b2da7c0480df0836a3fc09dfa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d94811a95c0326747f6224c7e5b5701453c9b2da7c0480df0836a3fc09dfa9->enter($__internal_73d94811a95c0326747f6224c7e5b5701453c9b2da7c0480df0836a3fc09dfa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les emplois
    ";

        $__internal_73d94811a95c0326747f6224c7e5b5701453c9b2da7c0480df0836a3fc09dfa9->leave($__internal_73d94811a95c0326747f6224c7e5b5701453c9b2da7c0480df0836a3fc09dfa9_prof);

    }

    public function isTraitable()
    {
        return false;
    }

    // line 2

    public function getDebugInfo()
    {
        return array(40 => 3, 34 => 2, 11 => 1,);
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
        Lister les emplois
    {% endblock %}", "@projet/Default/Admin/listerEmploi.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerEmploi.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0faab5fdcf209b7ea70994205297d3406293e6e8adb534b072c2c548b0b00ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0faab5fdcf209b7ea70994205297d3406293e6e8adb534b072c2c548b0b00ba3->enter($__internal_0faab5fdcf209b7ea70994205297d3406293e6e8adb534b072c2c548b0b00ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerEmploi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_0faab5fdcf209b7ea70994205297d3406293e6e8adb534b072c2c548b0b00ba3->leave($__internal_0faab5fdcf209b7ea70994205297d3406293e6e8adb534b072c2c548b0b00ba3_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerEmploi.html.twig";
    }
}
