<?php

/* @SensioDistribution/Configurator/final.html.twig */
class __TwigTemplate_2e8c10e13849c7e27ded6059ce028b768043377d8d836c404a53820dcee2fa26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "@SensioDistribution/Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    public function block_content_class($context, array $blocks = array())
    {
        $__internal_fd05a88310b3723059514b37b2f08a9751fe846fa7cd2e93607024201e474fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd05a88310b3723059514b37b2f08a9751fe846fa7cd2e93607024201e474fe0->enter($__internal_fd05a88310b3723059514b37b2f08a9751fe846fa7cd2e93607024201e474fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";

        $__internal_fd05a88310b3723059514b37b2f08a9751fe846fa7cd2e93607024201e474fe0->leave($__internal_fd05a88310b3723059514b37b2f08a9751fe846fa7cd2e93607024201e474fe0_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_ee21b281b8ae02ae767ffe18d52fba4d011d2327f7912bb0dc6bdc0301b7bd56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee21b281b8ae02ae767ffe18d52fba4d011d2327f7912bb0dc6bdc0301b7bd56->enter($__internal_ee21b281b8ae02ae767ffe18d52fba4d011d2327f7912bb0dc6bdc0301b7bd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";

        $__internal_ee21b281b8ae02ae767ffe18d52fba4d011d2327f7912bb0dc6bdc0301b7bd56->leave($__internal_ee21b281b8ae02ae767ffe18d52fba4d011d2327f7912bb0dc6bdc0301b7bd56_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 4

    public function getDebugInfo()
    {
        return array(106 => 29, 100 => 26, 97 => 25, 95 => 24, 90 => 22, 85 => 19, 79 => 17, 73 => 15, 71 => 14, 67 => 12, 63 => 10, 59 => 8, 57 => 7, 53 => 5, 47 => 4, 35 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SensioDistributionBundle::Configurator/layout.html.twig\" %}

{% block content_class %}config_done{% endblock %}
{% block content %}
    <div class=\"step\">
        <h1>Well done!</h1>
        {% if is_writable %}
        <h2>Your distribution is configured!</h2>
        {% else %}
        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        {% endif %}
        <h3>
            <span>
                {% if is_writable %}
                    Your parameters.yml file has been overwritten with these parameters (in <em>{{ yml_path }}</em>):
                {% else %}
                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>{{ yml_path }}</em>:
                {% endif %}
            </span>
        </h3>

        <textarea class=\"symfony-configuration\">{{ parameters }}</textarea>

        {% if welcome_url %}
            <ul>
                <li><a href=\"{{ welcome_url }}\">Go to the Welcome page</a></li>
            </ul>
        {% endif %}
    </div>
{% endblock %}
", "@SensioDistribution/Configurator/final.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\final.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b41e5abc5a0d6f66603cc2240973b9a5bce33d983960217b4a573b98fd209a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41e5abc5a0d6f66603cc2240973b9a5bce33d983960217b4a573b98fd209a2f->enter($__internal_b41e5abc5a0d6f66603cc2240973b9a5bce33d983960217b4a573b98fd209a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_b41e5abc5a0d6f66603cc2240973b9a5bce33d983960217b4a573b98fd209a2f->leave($__internal_b41e5abc5a0d6f66603cc2240973b9a5bce33d983960217b4a573b98fd209a2f_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/final.html.twig";
    }
}
