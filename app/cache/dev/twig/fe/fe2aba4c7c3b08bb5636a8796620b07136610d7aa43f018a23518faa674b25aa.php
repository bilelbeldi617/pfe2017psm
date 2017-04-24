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

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26939c2699051f2c9e67f3c0be01f6f2dcd6e7e6d58fab17db02aedeeb4dcb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26939c2699051f2c9e67f3c0be01f6f2dcd6e7e6d58fab17db02aedeeb4dcb74->enter($__internal_26939c2699051f2c9e67f3c0be01f6f2dcd6e7e6d58fab17db02aedeeb4dcb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/envoyerMail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26939c2699051f2c9e67f3c0be01f6f2dcd6e7e6d58fab17db02aedeeb4dcb74->leave($__internal_26939c2699051f2c9e67f3c0be01f6f2dcd6e7e6d58fab17db02aedeeb4dcb74_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_10a7bd7851bd28c09ed09b601d9633126c264098083fe75cd5322fe04f9a4431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a7bd7851bd28c09ed09b601d9633126c264098083fe75cd5322fe04f9a4431->enter($__internal_10a7bd7851bd28c09ed09b601d9633126c264098083fe75cd5322fe04f9a4431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Mail To
";
        
        $__internal_10a7bd7851bd28c09ed09b601d9633126c264098083fe75cd5322fe04f9a4431->leave($__internal_10a7bd7851bd28c09ed09b601d9633126c264098083fe75cd5322fe04f9a4431_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_a7a7d6ebd5482f3b41d4a6b0fa0667e0076433a5fb89bd4d59cd49900da6eb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a7d6ebd5482f3b41d4a6b0fa0667e0076433a5fb89bd4d59cd49900da6eb88->enter($__internal_a7a7d6ebd5482f3b41d4a6b0fa0667e0076433a5fb89bd4d59cd49900da6eb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_a7a7d6ebd5482f3b41d4a6b0fa0667e0076433a5fb89bd4d59cd49900da6eb88->leave($__internal_a7a7d6ebd5482f3b41d4a6b0fa0667e0076433a5fb89bd4d59cd49900da6eb88_prof);

    }

    // line 29
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_2c4f9589af9ad9cd7ca38954b053c14355b243a0197b10b789abc71178870c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c4f9589af9ad9cd7ca38954b053c14355b243a0197b10b789abc71178870c02->enter($__internal_2c4f9589af9ad9cd7ca38954b053c14355b243a0197b10b789abc71178870c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_2c4f9589af9ad9cd7ca38954b053c14355b243a0197b10b789abc71178870c02->leave($__internal_2c4f9589af9ad9cd7ca38954b053c14355b243a0197b10b789abc71178870c02_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/envoyerMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  92 => 30,  86 => 29,  62 => 11,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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
}
