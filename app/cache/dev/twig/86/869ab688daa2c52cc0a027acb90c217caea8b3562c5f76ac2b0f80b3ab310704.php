<?php

/* base.html.twig */
class __TwigTemplate_60f207c9c8127680514c148efe56136ac3980d63041e9d45590456d67004c984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36c6ecca79997f0899519fd7d3ce512615d549a4a4cba14b99a7009cbcabfb7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c6ecca79997f0899519fd7d3ce512615d549a4a4cba14b99a7009cbcabfb7f->enter($__internal_36c6ecca79997f0899519fd7d3ce512615d549a4a4cba14b99a7009cbcabfb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_36c6ecca79997f0899519fd7d3ce512615d549a4a4cba14b99a7009cbcabfb7f->leave($__internal_36c6ecca79997f0899519fd7d3ce512615d549a4a4cba14b99a7009cbcabfb7f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_651ffe9a974a144f9fd3263bfae80ab1f53ddf3f46b1e964497b8467261c9eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651ffe9a974a144f9fd3263bfae80ab1f53ddf3f46b1e964497b8467261c9eb0->enter($__internal_651ffe9a974a144f9fd3263bfae80ab1f53ddf3f46b1e964497b8467261c9eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_651ffe9a974a144f9fd3263bfae80ab1f53ddf3f46b1e964497b8467261c9eb0->leave($__internal_651ffe9a974a144f9fd3263bfae80ab1f53ddf3f46b1e964497b8467261c9eb0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4e6284b80f01bf92af20772b24cfb9f867ee1ac5d646099c5df4857ea9f1899a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6284b80f01bf92af20772b24cfb9f867ee1ac5d646099c5df4857ea9f1899a->enter($__internal_4e6284b80f01bf92af20772b24cfb9f867ee1ac5d646099c5df4857ea9f1899a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4e6284b80f01bf92af20772b24cfb9f867ee1ac5d646099c5df4857ea9f1899a->leave($__internal_4e6284b80f01bf92af20772b24cfb9f867ee1ac5d646099c5df4857ea9f1899a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1b364a6aece67b53fb44748b82ef58bd3471312b7b323641f0a02b788072320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b364a6aece67b53fb44748b82ef58bd3471312b7b323641f0a02b788072320->enter($__internal_c1b364a6aece67b53fb44748b82ef58bd3471312b7b323641f0a02b788072320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1b364a6aece67b53fb44748b82ef58bd3471312b7b323641f0a02b788072320->leave($__internal_c1b364a6aece67b53fb44748b82ef58bd3471312b7b323641f0a02b788072320_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dbee5e504b114d2c25e37475e6050c2ea319fa5ea4f61343b836bc6c6d9b4d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbee5e504b114d2c25e37475e6050c2ea319fa5ea4f61343b836bc6c6d9b4d11->enter($__internal_dbee5e504b114d2c25e37475e6050c2ea319fa5ea4f61343b836bc6c6d9b4d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_dbee5e504b114d2c25e37475e6050c2ea319fa5ea4f61343b836bc6c6d9b4d11->leave($__internal_dbee5e504b114d2c25e37475e6050c2ea319fa5ea4f61343b836bc6c6d9b4d11_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\app\\Resources\\views\\base.html.twig");
    }
}
