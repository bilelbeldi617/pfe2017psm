<?php

/* @projet/Default/Admin/ajouterPersonnel.html.twig */
class __TwigTemplate_28c643e892b68a4e6ab91c30ea32e24aaac514385ec75283be03dff562f520ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/ajouterPersonnel.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_585f7a5a9d43a89e95fda342c7346d92d8147edd1dd25359b0b29b679163809f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585f7a5a9d43a89e95fda342c7346d92d8147edd1dd25359b0b29b679163809f->enter($__internal_585f7a5a9d43a89e95fda342c7346d92d8147edd1dd25359b0b29b679163809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Ajouter un personnel
    ";

        $__internal_585f7a5a9d43a89e95fda342c7346d92d8147edd1dd25359b0b29b679163809f->leave($__internal_585f7a5a9d43a89e95fda342c7346d92d8147edd1dd25359b0b29b679163809f_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_0d3e81d65a85f095b57fa43c99fdf6202af63900c8e040000194e793c59b311c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3e81d65a85f095b57fa43c99fdf6202af63900c8e040000194e793c59b311c->enter($__internal_0d3e81d65a85f095b57fa43c99fdf6202af63900c8e040000194e793c59b311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
               var matriculeRandom = Math.floor(Math.random()*99999999);
                \$(\"#matriculePersonnel\").val(matriculeRandom);
                \$(\"#formAjouterPersonnel\").submit(function(){
                    console.log(\$(\"#formAjouterPersonnel\").serialize());
                    \$.ajax({
                       url: \"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPersonnelAJAX");
        echo "\",
                        method: \"POST\",
                        data: \$(\"#formAjouterPersonnel\").serialize(),
                        success: function(response){
                            console.log(response);
                            response = JSON.parse(response);
                            if(response.status == \"inserted\"){
                                var message = \"<div class='alert alert-success'>Ajout avec success</div>\";
                            }else{
                                var message = \"<div class='alert alert-danger'>Echec de l'ajout</div>\";
                            }
                            \$(\"#messageContainer\").html(message);
                        },
                        error : function(erreur){
                            console.log(erreur);
                        }
                    });
                });
            });
        </script>
    ";

        $__internal_0d3e81d65a85f095b57fa43c99fdf6202af63900c8e040000194e793c59b311c->leave($__internal_0d3e81d65a85f095b57fa43c99fdf6202af63900c8e040000194e793c59b311c_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_db5339d30a83d0b95a2a881835412f5933f6b5fe348e7124a24ea95cde502aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5339d30a83d0b95a2a881835412f5933f6b5fe348e7124a24ea95cde502aa7->enter($__internal_db5339d30a83d0b95a2a881835412f5933f6b5fe348e7124a24ea95cde502aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 37
        echo "        <hr class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div id=\"messageContainer\">

            </div>
            <div class=\"row\">
                <form name=\"ajouterPersonnel\" id=\"formAjouterPersonnel\" onsubmit=\"return false\" action=\"#\">
                    <table border=\"1\" align=\"center\" class=\"table table-bordered\">
                        <tr>
                            <td>Poste</td>
                            <td><select name=\"idPoste\">
                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postes"]) ? $context["postes"] : $this->getContext($context, "postes")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 49
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titrePoste", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                            </select></td>
                        </tr>
                        <tr>
                            <td>Matricule</td>
                            <td><input type=\"text\" name=\"matriculePersonnel\" id=\"matriculePersonnel\" readonly></td>
                        </tr>
                        <tr>
                            <td>Nom</td>
                            <td><input type=\"text\" name=\"nomPersonnel\" id=\"nomPersonnel\"></td>
                        </tr>
                        <tr>
                            <td>Prenom</td>
                            <td><input type=\"text\" name=\"prenomPersonnel\" id=\"prenomPersonnel\"></td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td><input type=\"text\" name=\"adressePersonnel\" id=\"adressePersonnel\"></td>
                        </tr>
                        <tr>
                            <td>Numéro de téléphone</td>
                            <td><input type=\"tel\" name=\"numTelPersonnel\" id=\"numTelPersonnel\"></td>
                        </tr>
                        <tr>
                            <td>CIN</td>
                            <td><input type=\"text\" name=\"cinPersonnel\" id=\"cinPersonnel\"></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><input type=\"email\" name=\"emailPersonnel\" id=\"emailPersonnel\"></td>
                        </tr>
                        <tr>
                            <td><input type=\"submit\" value=\"Ajouter\" id=\"btnSubmit\" class=\"btn btn-primary\"> </td>
                            <td><input type=\"reset\" value=\"Vider\" class=\"btn btn-danger\"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    ";

        $__internal_db5339d30a83d0b95a2a881835412f5933f6b5fe348e7124a24ea95cde502aa7->leave($__internal_db5339d30a83d0b95a2a881835412f5933f6b5fe348e7124a24ea95cde502aa7_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 36

    public function getDebugInfo()
    {
        return array(127 => 51, 116 => 49, 112 => 48, 99 => 37, 93 => 36, 65 => 14, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
        Ajouter un personnel
    {% endblock %}

    {% block script %}
        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
               var matriculeRandom = Math.floor(Math.random()*99999999);
                \$(\"#matriculePersonnel\").val(matriculeRandom);
                \$(\"#formAjouterPersonnel\").submit(function(){
                    console.log(\$(\"#formAjouterPersonnel\").serialize());
                    \$.ajax({
                       url: \"{{ path('ajouterPersonnelAJAX') }}\",
                        method: \"POST\",
                        data: \$(\"#formAjouterPersonnel\").serialize(),
                        success: function(response){
                            console.log(response);
                            response = JSON.parse(response);
                            if(response.status == \"inserted\"){
                                var message = \"<div class='alert alert-success'>Ajout avec success</div>\";
                            }else{
                                var message = \"<div class='alert alert-danger'>Echec de l'ajout</div>\";
                            }
                            \$(\"#messageContainer\").html(message);
                        },
                        error : function(erreur){
                            console.log(erreur);
                        }
                    });
                });
            });
        </script>
    {% endblock %}

    {% block mainContent %}
        <hr class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div id=\"messageContainer\">

            </div>
            <div class=\"row\">
                <form name=\"ajouterPersonnel\" id=\"formAjouterPersonnel\" onsubmit=\"return false\" action=\"#\">
                    <table border=\"1\" align=\"center\" class=\"table table-bordered\">
                        <tr>
                            <td>Poste</td>
                            <td><select name=\"idPoste\">
                                    {% for p in postes %}
                                        <option value=\"{{ p.id }}\">{{ p.titrePoste }}</option>
                                    {% endfor %}
                            </select></td>
                        </tr>
                        <tr>
                            <td>Matricule</td>
                            <td><input type=\"text\" name=\"matriculePersonnel\" id=\"matriculePersonnel\" readonly></td>
                        </tr>
                        <tr>
                            <td>Nom</td>
                            <td><input type=\"text\" name=\"nomPersonnel\" id=\"nomPersonnel\"></td>
                        </tr>
                        <tr>
                            <td>Prenom</td>
                            <td><input type=\"text\" name=\"prenomPersonnel\" id=\"prenomPersonnel\"></td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td><input type=\"text\" name=\"adressePersonnel\" id=\"adressePersonnel\"></td>
                        </tr>
                        <tr>
                            <td>Numéro de téléphone</td>
                            <td><input type=\"tel\" name=\"numTelPersonnel\" id=\"numTelPersonnel\"></td>
                        </tr>
                        <tr>
                            <td>CIN</td>
                            <td><input type=\"text\" name=\"cinPersonnel\" id=\"cinPersonnel\"></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><input type=\"email\" name=\"emailPersonnel\" id=\"emailPersonnel\"></td>
                        </tr>
                        <tr>
                            <td><input type=\"submit\" value=\"Ajouter\" id=\"btnSubmit\" class=\"btn btn-primary\"> </td>
                            <td><input type=\"reset\" value=\"Vider\" class=\"btn btn-danger\"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    {% endblock %}", "@projet/Default/Admin/ajouterPersonnel.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\ajouterPersonnel.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f175649c13c297126460fade8d50d612c0bbf3a7f3ceec6af4bac165d9b90e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f175649c13c297126460fade8d50d612c0bbf3a7f3ceec6af4bac165d9b90e81->enter($__internal_f175649c13c297126460fade8d50d612c0bbf3a7f3ceec6af4bac165d9b90e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/ajouterPersonnel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_f175649c13c297126460fade8d50d612c0bbf3a7f3ceec6af4bac165d9b90e81->leave($__internal_f175649c13c297126460fade8d50d612c0bbf3a7f3ceec6af4bac165d9b90e81_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/ajouterPersonnel.html.twig";
    }
}
