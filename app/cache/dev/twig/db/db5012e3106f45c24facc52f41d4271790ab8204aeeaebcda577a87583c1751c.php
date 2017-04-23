<?php

/* projetBundle:Default/Parent:envoyerMail.html.twig */

class __TwigTemplate_451e88cb6f01470625d5fb614f5e949b4e7d6f5443b6e4c33f4ff8c9b19e4392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "projetBundle:Default/Parent:envoyerMail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_787296fa690754a6e9c43324ebd13bd49d6bd0495acd4f0148abab59a2b48944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787296fa690754a6e9c43324ebd13bd49d6bd0495acd4f0148abab59a2b48944->enter($__internal_787296fa690754a6e9c43324ebd13bd49d6bd0495acd4f0148abab59a2b48944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Mail To
";

        $__internal_787296fa690754a6e9c43324ebd13bd49d6bd0495acd4f0148abab59a2b48944->leave($__internal_787296fa690754a6e9c43324ebd13bd49d6bd0495acd4f0148abab59a2b48944_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_cc983d876700ab2fd1d29e067f8faf7e0b6ddfa62435f30dfb7cfc285bad4946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc983d876700ab2fd1d29e067f8faf7e0b6ddfa62435f30dfb7cfc285bad4946->enter($__internal_cc983d876700ab2fd1d29e067f8faf7e0b6ddfa62435f30dfb7cfc285bad4946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#formEnvoyerEmail\").submit(function(){
                \$.ajax({
                    url: \"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sendmail");
        echo "\",
                    method: \"POST\",
                    data: \$(\"#formEnvoyerEmail\").serialize(),
                    success : function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Message Envoyé!!</div>\";
                        \$(\"#messageContainer\").html(message);
                        \$(\"#message\").val(\" \");
                    }

                });

            });
        });
    </script>
";

        $__internal_cc983d876700ab2fd1d29e067f8faf7e0b6ddfa62435f30dfb7cfc285bad4946->leave($__internal_cc983d876700ab2fd1d29e067f8faf7e0b6ddfa62435f30dfb7cfc285bad4946_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_9fa46c486b504dc7488f4ea70556b1f30978bb2ae8ec4700e71fda09e858cf76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa46c486b504dc7488f4ea70556b1f30978bb2ae8ec4700e71fda09e858cf76->enter($__internal_9fa46c486b504dc7488f4ea70556b1f30978bb2ae8ec4700e71fda09e858cf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 30
        echo "    <center><h4><b>Envoyer un e-mail</b></h4></center>
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div id=\"messageContainer\">

        </div>
        <form name=\"formEmail\" id=\"formEnvoyerEmail\" action=\"#\" onsubmit=\"return false\">
        <table class=\"table table-bordered\" align=\"center\" width=\"30%\">
            <tr>
                <td width=\"50%\">Email Enseignant</td>
                <td><input type=\"email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" name=\"emailEnseignant\" readonly></td>
            </tr>
            <tr>
                <td>Votre message</td>
                <td><textarea cols=\"50\" rows=\"5\" name=\"message\" id=\"message\"></textarea></td>
            </tr>
            <tr>
                <td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"></td>
            </tr>
        </table>
        </form>
    </div>
";

        $__internal_9fa46c486b504dc7488f4ea70556b1f30978bb2ae8ec4700e71fda09e858cf76->leave($__internal_9fa46c486b504dc7488f4ea70556b1f30978bb2ae8ec4700e71fda09e858cf76_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 29

    public function getDebugInfo()
    {
        return array(104 => 40, 92 => 30, 86 => 29, 62 => 11, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
    Mail To
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#formEnvoyerEmail\").submit(function(){
                \$.ajax({
                    url: \"{{ path('sendmail') }}\",
                    method: \"POST\",
                    data: \$(\"#formEnvoyerEmail\").serialize(),
                    success : function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Message Envoyé!!</div>\";
                        \$(\"#messageContainer\").html(message);
                        \$(\"#message\").val(\" \");
                    }

                });

            });
        });
    </script>
{% endblock %}

{% block mainContent %}
    <center><h4><b>Envoyer un e-mail</b></h4></center>
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div id=\"messageContainer\">

        </div>
        <form name=\"formEmail\" id=\"formEnvoyerEmail\" action=\"#\" onsubmit=\"return false\">
        <table class=\"table table-bordered\" align=\"center\" width=\"30%\">
            <tr>
                <td width=\"50%\">Email Enseignant</td>
                <td><input type=\"email\" value=\"{{ email }}\" name=\"emailEnseignant\" readonly></td>
            </tr>
            <tr>
                <td>Votre message</td>
                <td><textarea cols=\"50\" rows=\"5\" name=\"message\" id=\"message\"></textarea></td>
            </tr>
            <tr>
                <td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"></td>
            </tr>
        </table>
        </form>
    </div>
{% endblock %}", "projetBundle:Default/Parent:envoyerMail.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/envoyerMail.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8699738622fc6012cb58644faebf67ec8f279fa985a7c568255719755f3865a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8699738622fc6012cb58644faebf67ec8f279fa985a7c568255719755f3865a->enter($__internal_b8699738622fc6012cb58644faebf67ec8f279fa985a7c568255719755f3865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:envoyerMail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_b8699738622fc6012cb58644faebf67ec8f279fa985a7c568255719755f3865a->leave($__internal_b8699738622fc6012cb58644faebf67ec8f279fa985a7c568255719755f3865a_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:envoyerMail.html.twig";
    }
}
