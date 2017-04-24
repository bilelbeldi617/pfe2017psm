<?php

/* ::base.html.twig */
class __TwigTemplate_c80670160f5ed4bb80b29ab16c5cfd71bab79bbaaeabe30af65645ead0fe4f85 extends Twig_Template
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
        $__internal_d07958e636fcfe01fe5675982da6e331a39ead956e0c4de0635a0b7ce71debc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d07958e636fcfe01fe5675982da6e331a39ead956e0c4de0635a0b7ce71debc9->enter($__internal_d07958e636fcfe01fe5675982da6e331a39ead956e0c4de0635a0b7ce71debc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d07958e636fcfe01fe5675982da6e331a39ead956e0c4de0635a0b7ce71debc9->leave($__internal_d07958e636fcfe01fe5675982da6e331a39ead956e0c4de0635a0b7ce71debc9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c08b0a2be1aa3e87301498fb7f705b20b96f922599e22d74e4842afef46189a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c08b0a2be1aa3e87301498fb7f705b20b96f922599e22d74e4842afef46189a->enter($__internal_3c08b0a2be1aa3e87301498fb7f705b20b96f922599e22d74e4842afef46189a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3c08b0a2be1aa3e87301498fb7f705b20b96f922599e22d74e4842afef46189a->leave($__internal_3c08b0a2be1aa3e87301498fb7f705b20b96f922599e22d74e4842afef46189a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4664440ea35349b84a32b8e7ed8474f9a7c1ec1c7fa8d087b351efbe0baf1d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4664440ea35349b84a32b8e7ed8474f9a7c1ec1c7fa8d087b351efbe0baf1d40->enter($__internal_4664440ea35349b84a32b8e7ed8474f9a7c1ec1c7fa8d087b351efbe0baf1d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4664440ea35349b84a32b8e7ed8474f9a7c1ec1c7fa8d087b351efbe0baf1d40->leave($__internal_4664440ea35349b84a32b8e7ed8474f9a7c1ec1c7fa8d087b351efbe0baf1d40_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddbda4ae7134811359eb3c6953d750800352383c94300a97f307381721f5d4b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbda4ae7134811359eb3c6953d750800352383c94300a97f307381721f5d4b4->enter($__internal_ddbda4ae7134811359eb3c6953d750800352383c94300a97f307381721f5d4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ddbda4ae7134811359eb3c6953d750800352383c94300a97f307381721f5d4b4->leave($__internal_ddbda4ae7134811359eb3c6953d750800352383c94300a97f307381721f5d4b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6140adb773014e7d7f05daf6e837822f2ca093ff88afe9639f635c50f1fc60c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6140adb773014e7d7f05daf6e837822f2ca093ff88afe9639f635c50f1fc60c5->enter($__internal_6140adb773014e7d7f05daf6e837822f2ca093ff88afe9639f635c50f1fc60c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6140adb773014e7d7f05daf6e837822f2ca093ff88afe9639f635c50f1fc60c5->leave($__internal_6140adb773014e7d7f05daf6e837822f2ca093ff88afe9639f635c50f1fc60c5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\app/Resources\\views/base.html.twig");
    }
}
