<?php

/* @projet/Default/Parent/envoyerMail.html.twig */
class __TwigTemplate_58a5f5eea988f4496ec570010e62a35dcbcea99947d7391ae5fc422fc138689c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "@projet/Default/Parent/envoyerMail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_1f993264d7e732d648f2c6bae32d95a6982a7c9a81ae5cab5c42e53d5ee84c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f993264d7e732d648f2c6bae32d95a6982a7c9a81ae5cab5c42e53d5ee84c53->enter($__internal_1f993264d7e732d648f2c6bae32d95a6982a7c9a81ae5cab5c42e53d5ee84c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Mail To
";

        $__internal_1f993264d7e732d648f2c6bae32d95a6982a7c9a81ae5cab5c42e53d5ee84c53->leave($__internal_1f993264d7e732d648f2c6bae32d95a6982a7c9a81ae5cab5c42e53d5ee84c53_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_b2593ad2cb833fe88abaf2e851a3959ae9673cd68c19e1b495e042d473a47035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2593ad2cb833fe88abaf2e851a3959ae9673cd68c19e1b495e042d473a47035->enter($__internal_b2593ad2cb833fe88abaf2e851a3959ae9673cd68c19e1b495e042d473a47035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_b2593ad2cb833fe88abaf2e851a3959ae9673cd68c19e1b495e042d473a47035->leave($__internal_b2593ad2cb833fe88abaf2e851a3959ae9673cd68c19e1b495e042d473a47035_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_121ad53f1536a7b49b9fde490eaf3b8ed781247e83384e1af4c77596f4da558f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121ad53f1536a7b49b9fde490eaf3b8ed781247e83384e1af4c77596f4da558f->enter($__internal_121ad53f1536a7b49b9fde490eaf3b8ed781247e83384e1af4c77596f4da558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_121ad53f1536a7b49b9fde490eaf3b8ed781247e83384e1af4c77596f4da558f->leave($__internal_121ad53f1536a7b49b9fde490eaf3b8ed781247e83384e1af4c77596f4da558f_prof);

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
{% endblock %}", "@projet/Default/Parent/envoyerMail.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\envoyerMail.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78b2d925a6a052cf86be9ff2eed2cea15e519ce45e62d29411cd925d0bdf0e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b2d925a6a052cf86be9ff2eed2cea15e519ce45e62d29411cd925d0bdf0e13->enter($__internal_78b2d925a6a052cf86be9ff2eed2cea15e519ce45e62d29411cd925d0bdf0e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/envoyerMail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_78b2d925a6a052cf86be9ff2eed2cea15e519ce45e62d29411cd925d0bdf0e13->leave($__internal_78b2d925a6a052cf86be9ff2eed2cea15e519ce45e62d29411cd925d0bdf0e13_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/envoyerMail.html.twig";
    }
}
