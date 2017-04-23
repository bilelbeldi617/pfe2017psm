<?php

/* @projet/Default/Admin/creerGroupe.html.twig */
class __TwigTemplate_4cbb4e2713d44caad96be9e2cc215a21d02010912086f0186da99246a561162e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/creerGroupe.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_2968cbb9f1d5101b11d216570b8edde6b61e3e2a68c5127a91082326eec0eced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2968cbb9f1d5101b11d216570b8edde6b61e3e2a68c5127a91082326eec0eced->enter($__internal_2968cbb9f1d5101b11d216570b8edde6b61e3e2a68c5127a91082326eec0eced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Créer un groupe d'élèves
";

        $__internal_2968cbb9f1d5101b11d216570b8edde6b61e3e2a68c5127a91082326eec0eced->leave($__internal_2968cbb9f1d5101b11d216570b8edde6b61e3e2a68c5127a91082326eec0eced_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_de5ca01529b60f5ccc370b764468bb2c022e7ebb1ad29dd6c86c2890a9dff172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5ca01529b60f5ccc370b764468bb2c022e7ebb1ad29dd6c86c2890a9dff172->enter($__internal_de5ca01529b60f5ccc370b764468bb2c022e7ebb1ad29dd6c86c2890a9dff172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_de5ca01529b60f5ccc370b764468bb2c022e7ebb1ad29dd6c86c2890a9dff172->leave($__internal_de5ca01529b60f5ccc370b764468bb2c022e7ebb1ad29dd6c86c2890a9dff172_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_38a2a335af5d7c71a018ce0405f8f9f5cebe96e2203f81881075f97429e195b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a2a335af5d7c71a018ce0405f8f9f5cebe96e2203f81881075f97429e195b4->enter($__internal_38a2a335af5d7c71a018ce0405f8f9f5cebe96e2203f81881075f97429e195b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_38a2a335af5d7c71a018ce0405f8f9f5cebe96e2203f81881075f97429e195b4->leave($__internal_38a2a335af5d7c71a018ce0405f8f9f5cebe96e2203f81881075f97429e195b4_prof);

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
{% endblock %}", "@projet/Default/Admin/creerGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\creerGroupe.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99f6dbda6fed363467e6c178647845b3940ff16d9b357fbc0a19d736c16fe9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f6dbda6fed363467e6c178647845b3940ff16d9b357fbc0a19d736c16fe9d4->enter($__internal_99f6dbda6fed363467e6c178647845b3940ff16d9b357fbc0a19d736c16fe9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/creerGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_99f6dbda6fed363467e6c178647845b3940ff16d9b357fbc0a19d736c16fe9d4->leave($__internal_99f6dbda6fed363467e6c178647845b3940ff16d9b357fbc0a19d736c16fe9d4_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/creerGroupe.html.twig";
    }
}
