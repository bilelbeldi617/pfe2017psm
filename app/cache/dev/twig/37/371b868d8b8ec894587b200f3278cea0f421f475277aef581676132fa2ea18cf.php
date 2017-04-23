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

    public function block_title($context, array $blocks = array())
    {
        $__internal_a86346b87b3b7f4839685bbabaefdc5d44df5928255cd11ec3c9a2a37ce4118c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86346b87b3b7f4839685bbabaefdc5d44df5928255cd11ec3c9a2a37ce4118c->enter($__internal_a86346b87b3b7f4839685bbabaefdc5d44df5928255cd11ec3c9a2a37ce4118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";

        $__internal_a86346b87b3b7f4839685bbabaefdc5d44df5928255cd11ec3c9a2a37ce4118c->leave($__internal_a86346b87b3b7f4839685bbabaefdc5d44df5928255cd11ec3c9a2a37ce4118c_prof);

    }

    // line 5

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_045af253f2ab14f4b87f7464b089ac1c0228da637d10652bd35730a56fdfdf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045af253f2ab14f4b87f7464b089ac1c0228da637d10652bd35730a56fdfdf66->enter($__internal_045af253f2ab14f4b87f7464b089ac1c0228da637d10652bd35730a56fdfdf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));


        $__internal_045af253f2ab14f4b87f7464b089ac1c0228da637d10652bd35730a56fdfdf66->leave($__internal_045af253f2ab14f4b87f7464b089ac1c0228da637d10652bd35730a56fdfdf66_prof);

    }

    // line 6

    public function block_body($context, array $blocks = array())
    {
        $__internal_a9916ee668f9d7469a0a9939e8d896702e19694cbd0aefcfbe7f8fd327190b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9916ee668f9d7469a0a9939e8d896702e19694cbd0aefcfbe7f8fd327190b2d->enter($__internal_a9916ee668f9d7469a0a9939e8d896702e19694cbd0aefcfbe7f8fd327190b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));


        $__internal_a9916ee668f9d7469a0a9939e8d896702e19694cbd0aefcfbe7f8fd327190b2d->leave($__internal_a9916ee668f9d7469a0a9939e8d896702e19694cbd0aefcfbe7f8fd327190b2d_prof);

    }

    // line 10

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3785bd431bc74187ad279f40a389428f0cc67ca9ba131b8dfd251f6833ca31dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3785bd431bc74187ad279f40a389428f0cc67ca9ba131b8dfd251f6833ca31dc->enter($__internal_3785bd431bc74187ad279f40a389428f0cc67ca9ba131b8dfd251f6833ca31dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));


        $__internal_3785bd431bc74187ad279f40a389428f0cc67ca9ba131b8dfd251f6833ca31dc->leave($__internal_3785bd431bc74187ad279f40a389428f0cc67ca9ba131b8dfd251f6833ca31dc_prof);

    }

    // line 11

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(93 => 11, 82 => 10, 71 => 6, 59 => 5, 50 => 12, 47 => 11, 45 => 10, 38 => 7, 36 => 6, 32 => 5, 26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db9b150160e7b697d35e764100037b266fbb77fc19ce871f16a939f1658963d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db9b150160e7b697d35e764100037b266fbb77fc19ce871f16a939f1658963d6->enter($__internal_db9b150160e7b697d35e764100037b266fbb77fc19ce871f16a939f1658963d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

        $__internal_db9b150160e7b697d35e764100037b266fbb77fc19ce871f16a939f1658963d6->leave($__internal_db9b150160e7b697d35e764100037b266fbb77fc19ce871f16a939f1658963d6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }
}
