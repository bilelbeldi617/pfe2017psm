<?php

/* projetBundle:Default/Admin:creerGroupe.html.twig */

class __TwigTemplate_c6e59fc41da596d9a556125fff5929e6bfdacee5e8a993e7512cd5ce5cdd1a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:creerGroupe.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb2db87904586124087a0c1e9eaa29482435369675633f3d5ffa5d4bb68a22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb2db87904586124087a0c1e9eaa29482435369675633f3d5ffa5d4bb68a22a->enter($__internal_2cb2db87904586124087a0c1e9eaa29482435369675633f3d5ffa5d4bb68a22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Créer un groupe d'élèves
";

        $__internal_2cb2db87904586124087a0c1e9eaa29482435369675633f3d5ffa5d4bb68a22a->leave($__internal_2cb2db87904586124087a0c1e9eaa29482435369675633f3d5ffa5d4bb68a22a_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_6652d4da704a8e4ba836f9cd9e78c40847bda365cc4195d229cc1ba1cd00cad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6652d4da704a8e4ba836f9cd9e78c40847bda365cc4195d229cc1ba1cd00cad2->enter($__internal_6652d4da704a8e4ba836f9cd9e78c40847bda365cc4195d229cc1ba1cd00cad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#listNiveau\").change(function(){
                \$(\"#messageContainer\").html(\"\");
                \$(\"#mySpinner\").fadeIn();
               console.log(\"bilel\");
                var niveau = \$(\"#listNiveau\").val();
                \$.ajax({
                   url: \"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getNumeroGroupe");
        echo "\",
                    method: \"GET\",
                    data: {\"niveauGroupe\" : niveau},
                    success : function(response){
                        response = JSON.parse(response);

                        console.log(response);
                        \$(\"#numGroupe\").val(response.numGroupeSuivant);
                        \$(\"#mySpinner\").fadeOut();
                    }
                });
            });
            \$(\"#formCreerGroupe\").submit(function(){


                if(\$(\"#listNiveau\").val() == \"null\"){
                    var message = \"<div class='alert alert-danger'>Il faut choisir un niveau</div>\";
                    \$(\"#messageContainer\").html(message);
                }else {
                    \$(\"#tableSpinner\").fadeIn();


                    console.log(\$(\"#formCreerGroupe\").serialize());
                    \$.ajax({
                        url: \"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creerGroupeAJAX");
        echo "\",
                        method: \"GET\",
                        data: \$(\"#formCreerGroupe\").serialize(),
                        success: function (response) {
                            \$(\"#tableSpinner\").fadeOut();
                            console.log(response);
                            response = JSON.parse(response);
                            if (response.status == \"inserted\") {
                                var message = \"<div class='alert alert-success'>Groupe crée avec succes !</div>\";
                            } else {
                                var message = \"<div class='alert alert-danger'>Echec de création du groupe !</div>\";
                            }
                            \$(\"#messageContainer\").html(message);
                            \$(\"#listNiveau\").val(\"null\");
                            \$(\"#numGroupe\").val(\"\");
                        },
                        error: function (erreur) {
                            console.log(erreur);
                        }
                    });
                }
            });

        });
    </script>
";

        $__internal_6652d4da704a8e4ba836f9cd9e78c40847bda365cc4195d229cc1ba1cd00cad2->leave($__internal_6652d4da704a8e4ba836f9cd9e78c40847bda365cc4195d229cc1ba1cd00cad2_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_63426462ad605ee138c19ec701c0779a3606c5d08e31419ce8ca209348481f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63426462ad605ee138c19ec701c0779a3606c5d08e31419ce8ca209348481f51->enter($__internal_63426462ad605ee138c19ec701c0779a3606c5d08e31419ce8ca209348481f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 67
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" id=\"messageContainer\">

        </div>
        <div class=\"row\">
            <form name=\"creerGroupe\" id=\"formCreerGroupe\" onsubmit=\"return false\" action=\"#\">
                <table border=\"1\" class=\"table table-bordered\">
                    <tr>
                        <td>Niveau groupe</td>
                        <td><select name=\"listGroupe\" id=\"listNiveau\">
                                <option value=\"null\">Choisir un niveau</option>
                                <option value=\"1\">Premiere Annee</option>
                                <option value=\"2\">Deuxieme Annee</option>
                                <option value=\"3\">Troisieme Annee</option>
                                <option value=\"4\">Quatrieme Annee</option>
                                <option value=\"5\">Cinquieme Annee</option>
                                <option value=\"6\">Sixieme Annee</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Numéro groupe</td>
                        <td></i><input type=\"number\" name=\"numGroupe\" id=\"numGroupe\" readonly><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-170\" id=\"mySpinner\" style=\"display: none;margin-left: 15px\"></td>
                    </tr>
                    <tr align=\"center\">
                        <td><input type=\"submit\" value=\"Créer\" class=\"btn btn-primary\"></td>
                        <td><input type=\"reset\" value=\"Vider\" class=\"btn btn-danger\"> </td>
                    </tr>
                </table>

            </form>
            <center><span><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"tableSpinner\" style=\"display: none;margin-left: 15px\"></i></span></center>
        </div>
    </div>
";

        $__internal_63426462ad605ee138c19ec701c0779a3606c5d08e31419ce8ca209348481f51->leave($__internal_63426462ad605ee138c19ec701c0779a3606c5d08e31419ce8ca209348481f51_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 66

    public function getDebugInfo()
    {
        return array(132 => 67, 126 => 66, 93 => 39, 66 => 15, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
    Créer un groupe d'élèves
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#listNiveau\").change(function(){
                \$(\"#messageContainer\").html(\"\");
                \$(\"#mySpinner\").fadeIn();
               console.log(\"bilel\");
                var niveau = \$(\"#listNiveau\").val();
                \$.ajax({
                   url: \"{{ path('getNumeroGroupe') }}\",
                    method: \"GET\",
                    data: {\"niveauGroupe\" : niveau},
                    success : function(response){
                        response = JSON.parse(response);

                        console.log(response);
                        \$(\"#numGroupe\").val(response.numGroupeSuivant);
                        \$(\"#mySpinner\").fadeOut();
                    }
                });
            });
            \$(\"#formCreerGroupe\").submit(function(){


                if(\$(\"#listNiveau\").val() == \"null\"){
                    var message = \"<div class='alert alert-danger'>Il faut choisir un niveau</div>\";
                    \$(\"#messageContainer\").html(message);
                }else {
                    \$(\"#tableSpinner\").fadeIn();


                    console.log(\$(\"#formCreerGroupe\").serialize());
                    \$.ajax({
                        url: \"{{ path('creerGroupeAJAX') }}\",
                        method: \"GET\",
                        data: \$(\"#formCreerGroupe\").serialize(),
                        success: function (response) {
                            \$(\"#tableSpinner\").fadeOut();
                            console.log(response);
                            response = JSON.parse(response);
                            if (response.status == \"inserted\") {
                                var message = \"<div class='alert alert-success'>Groupe crée avec succes !</div>\";
                            } else {
                                var message = \"<div class='alert alert-danger'>Echec de création du groupe !</div>\";
                            }
                            \$(\"#messageContainer\").html(message);
                            \$(\"#listNiveau\").val(\"null\");
                            \$(\"#numGroupe\").val(\"\");
                        },
                        error: function (erreur) {
                            console.log(erreur);
                        }
                    });
                }
            });

        });
    </script>
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" id=\"messageContainer\">

        </div>
        <div class=\"row\">
            <form name=\"creerGroupe\" id=\"formCreerGroupe\" onsubmit=\"return false\" action=\"#\">
                <table border=\"1\" class=\"table table-bordered\">
                    <tr>
                        <td>Niveau groupe</td>
                        <td><select name=\"listGroupe\" id=\"listNiveau\">
                                <option value=\"null\">Choisir un niveau</option>
                                <option value=\"1\">Premiere Annee</option>
                                <option value=\"2\">Deuxieme Annee</option>
                                <option value=\"3\">Troisieme Annee</option>
                                <option value=\"4\">Quatrieme Annee</option>
                                <option value=\"5\">Cinquieme Annee</option>
                                <option value=\"6\">Sixieme Annee</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Numéro groupe</td>
                        <td></i><input type=\"number\" name=\"numGroupe\" id=\"numGroupe\" readonly><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-170\" id=\"mySpinner\" style=\"display: none;margin-left: 15px\"></td>
                    </tr>
                    <tr align=\"center\">
                        <td><input type=\"submit\" value=\"Créer\" class=\"btn btn-primary\"></td>
                        <td><input type=\"reset\" value=\"Vider\" class=\"btn btn-danger\"> </td>
                    </tr>
                </table>

            </form>
            <center><span><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"tableSpinner\" style=\"display: none;margin-left: 15px\"></i></span></center>
        </div>
    </div>
{% endblock %}", "projetBundle:Default/Admin:creerGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/creerGroupe.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c42f15bc92d2cb095afd76b1062ca1f71c56aa06073763da36e9ecb3346fd40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c42f15bc92d2cb095afd76b1062ca1f71c56aa06073763da36e9ecb3346fd40->enter($__internal_9c42f15bc92d2cb095afd76b1062ca1f71c56aa06073763da36e9ecb3346fd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:creerGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_9c42f15bc92d2cb095afd76b1062ca1f71c56aa06073763da36e9ecb3346fd40->leave($__internal_9c42f15bc92d2cb095afd76b1062ca1f71c56aa06073763da36e9ecb3346fd40_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:creerGroupe.html.twig";
    }
}
