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

    public function block_title($context, array $blocks = array())
    {
        $__internal_0b8bdbbd5b96cc13f28d8857f11c4e9d36f8451f5b88b02f34c9b8c86b03099d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8bdbbd5b96cc13f28d8857f11c4e9d36f8451f5b88b02f34c9b8c86b03099d->enter($__internal_0b8bdbbd5b96cc13f28d8857f11c4e9d36f8451f5b88b02f34c9b8c86b03099d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";

        $__internal_0b8bdbbd5b96cc13f28d8857f11c4e9d36f8451f5b88b02f34c9b8c86b03099d->leave($__internal_0b8bdbbd5b96cc13f28d8857f11c4e9d36f8451f5b88b02f34c9b8c86b03099d_prof);

    }

    // line 5

    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d122a937ac4cdbfe7ede4d803f7867e7f909215784160068441c0d39d24af46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d122a937ac4cdbfe7ede4d803f7867e7f909215784160068441c0d39d24af46->enter($__internal_8d122a937ac4cdbfe7ede4d803f7867e7f909215784160068441c0d39d24af46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));


        $__internal_8d122a937ac4cdbfe7ede4d803f7867e7f909215784160068441c0d39d24af46->leave($__internal_8d122a937ac4cdbfe7ede4d803f7867e7f909215784160068441c0d39d24af46_prof);

    }

    // line 6

    public function block_body($context, array $blocks = array())
    {
        $__internal_5323c77f272a21e5429c81ea336aed17d6aff14bd112abb71598c4fd4fb3637f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5323c77f272a21e5429c81ea336aed17d6aff14bd112abb71598c4fd4fb3637f->enter($__internal_5323c77f272a21e5429c81ea336aed17d6aff14bd112abb71598c4fd4fb3637f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));


        $__internal_5323c77f272a21e5429c81ea336aed17d6aff14bd112abb71598c4fd4fb3637f->leave($__internal_5323c77f272a21e5429c81ea336aed17d6aff14bd112abb71598c4fd4fb3637f_prof);

    }

    // line 10

    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc817cb053a2c05fded98f25befca93847d5e78badadde65ab563de76719864a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc817cb053a2c05fded98f25befca93847d5e78badadde65ab563de76719864a->enter($__internal_cc817cb053a2c05fded98f25befca93847d5e78badadde65ab563de76719864a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));


        $__internal_cc817cb053a2c05fded98f25befca93847d5e78badadde65ab563de76719864a->leave($__internal_cc817cb053a2c05fded98f25befca93847d5e78badadde65ab563de76719864a_prof);

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
", "base.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\app\\Resources\\views\\base.html.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21355b9c86e47a609d8a71a025e8cd808e2ac0b998fc8e1c50f0063567868e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21355b9c86e47a609d8a71a025e8cd808e2ac0b998fc8e1c50f0063567868e8d->enter($__internal_21355b9c86e47a609d8a71a025e8cd808e2ac0b998fc8e1c50f0063567868e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

        $__internal_21355b9c86e47a609d8a71a025e8cd808e2ac0b998fc8e1c50f0063567868e8d->leave($__internal_21355b9c86e47a609d8a71a025e8cd808e2ac0b998fc8e1c50f0063567868e8d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }
}
