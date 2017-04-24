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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5abab7609d7e5d953da5b8b5c418be3f73c2df5a40ed6ccf391c90d1904cbc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abab7609d7e5d953da5b8b5c418be3f73c2df5a40ed6ccf391c90d1904cbc5c->enter($__internal_5abab7609d7e5d953da5b8b5c418be3f73c2df5a40ed6ccf391c90d1904cbc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:creerGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5abab7609d7e5d953da5b8b5c418be3f73c2df5a40ed6ccf391c90d1904cbc5c->leave($__internal_5abab7609d7e5d953da5b8b5c418be3f73c2df5a40ed6ccf391c90d1904cbc5c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c0260b5e02d96e60617407ec3bd7541060d9b76d7cf2ce9f1bbcb5d4f30c734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0260b5e02d96e60617407ec3bd7541060d9b76d7cf2ce9f1bbcb5d4f30c734->enter($__internal_2c0260b5e02d96e60617407ec3bd7541060d9b76d7cf2ce9f1bbcb5d4f30c734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Créer un groupe d'élèves
";
        
        $__internal_2c0260b5e02d96e60617407ec3bd7541060d9b76d7cf2ce9f1bbcb5d4f30c734->leave($__internal_2c0260b5e02d96e60617407ec3bd7541060d9b76d7cf2ce9f1bbcb5d4f30c734_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_8df60a6409599657f2b0de2bc2bc846c51be9e9771d8220a4be2cb512df9c81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df60a6409599657f2b0de2bc2bc846c51be9e9771d8220a4be2cb512df9c81a->enter($__internal_8df60a6409599657f2b0de2bc2bc846c51be9e9771d8220a4be2cb512df9c81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_8df60a6409599657f2b0de2bc2bc846c51be9e9771d8220a4be2cb512df9c81a->leave($__internal_8df60a6409599657f2b0de2bc2bc846c51be9e9771d8220a4be2cb512df9c81a_prof);

    }

    // line 66
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_fd2bb1175ce23a190ac550e5ebb9d509e8eb2404e35f5e3d44d91c85ee358056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2bb1175ce23a190ac550e5ebb9d509e8eb2404e35f5e3d44d91c85ee358056->enter($__internal_fd2bb1175ce23a190ac550e5ebb9d509e8eb2404e35f5e3d44d91c85ee358056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_fd2bb1175ce23a190ac550e5ebb9d509e8eb2404e35f5e3d44d91c85ee358056->leave($__internal_fd2bb1175ce23a190ac550e5ebb9d509e8eb2404e35f5e3d44d91c85ee358056_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:creerGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 67,  126 => 66,  93 => 39,  66 => 15,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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
}
