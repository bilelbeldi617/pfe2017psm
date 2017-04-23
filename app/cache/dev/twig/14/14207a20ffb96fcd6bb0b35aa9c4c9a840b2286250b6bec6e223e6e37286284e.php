<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */

class __TwigTemplate_3d5785a1ccf3218e91f8c326aecfd724adb86e42611d0e89d0d2872134feb900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_dafdb933e55db7501d5914b830aa8c23e2570a6a419b41a1a94016254b484bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafdb933e55db7501d5914b830aa8c23e2570a6a419b41a1a94016254b484bf6->enter($__internal_dafdb933e55db7501d5914b830aa8c23e2570a6a419b41a1a94016254b484bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";

        $__internal_dafdb933e55db7501d5914b830aa8c23e2570a6a419b41a1a94016254b484bf6->leave($__internal_dafdb933e55db7501d5914b830aa8c23e2570a6a419b41a1a94016254b484bf6_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_29db9e77ae06078a15844eef4934452710b092214d88aa60e0887c397616c059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29db9e77ae06078a15844eef4934452710b092214d88aa60e0887c397616c059->enter($__internal_29db9e77ae06078a15844eef4934452710b092214d88aa60e0887c397616c059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";

        $__internal_29db9e77ae06078a15844eef4934452710b092214d88aa60e0887c397616c059->leave($__internal_29db9e77ae06078a15844eef4934452710b092214d88aa60e0887c397616c059_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 5

    public function getDebugInfo()
    {
        return array(57 => 8, 53 => 6, 47 => 5, 35 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0849d34ea09243179c20af18e3d6f6e0689098003b5b6f808b99c44f09fc7c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0849d34ea09243179c20af18e3d6f6e0689098003b5b6f808b99c44f09fc7c94->enter($__internal_0849d34ea09243179c20af18e3d6f6e0689098003b5b6f808b99c44f09fc7c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_0849d34ea09243179c20af18e3d6f6e0689098003b5b6f808b99c44f09fc7c94->leave($__internal_0849d34ea09243179c20af18e3d6f6e0689098003b5b6f808b99c44f09fc7c94_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }
}
