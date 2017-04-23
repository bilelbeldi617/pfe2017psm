<?php

/* @projet/Default/Admin/ajouterEleve.html.twig */
class __TwigTemplate_71f1bbd62b06de4fc67b0f11b4c87bf1fc9fdfdcf97a4c6835b0ad8924733290 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/ajouterEleve.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_70fa3a15642ff9decc2e77947dea7d28c83169eca0d45a3495b695008287d184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fa3a15642ff9decc2e77947dea7d28c83169eca0d45a3495b695008287d184->enter($__internal_70fa3a15642ff9decc2e77947dea7d28c83169eca0d45a3495b695008287d184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Ajouter un éléve
";

        $__internal_70fa3a15642ff9decc2e77947dea7d28c83169eca0d45a3495b695008287d184->leave($__internal_70fa3a15642ff9decc2e77947dea7d28c83169eca0d45a3495b695008287d184_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_55d5a7f0715ef977ef0ef24e5aa8c080c87ee8238b1010e72797a359df956e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55d5a7f0715ef977ef0ef24e5aa8c080c87ee8238b1010e72797a359df956e21->enter($__internal_55d5a7f0715ef977ef0ef24e5aa8c080c87ee8238b1010e72797a359df956e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"javascript\">
        \$(\"document\").ready(function () {


            \$(\"#listParent\").change(function(){
                \$(\"#messageContainer\").html(\"\");
                \$(\"#formContainer\").fadeOut();
                \$(\"#formParentContainer\").fadeOut();
               if(\$(\"#listParent\").val() == \"null\"){
                   var message = \"<div class='alert alert-danger'>Svp choisir</div>\";
                   \$(\"#messageContainer\").html(message);
               }else{
                   if(\$(\"#listParent\").val() != \"nouveauParent\"){
                       \$(\"#formContainer\").slideDown();
                       \$(\"#idParent\").val(\$(\"#listParent\").val());

                   }else{
                        \$(\"#formParentContainer\").slideDown();
                   }
               }
            });

            \$(\"#formAjouterParent\").submit(function(){
                \$.ajax({
                   url: \"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterParent");
        echo "\",
                    method: \"GET\",
                    data: \$(\"#formAjouterParent\").serialize(),
                    success: function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Parent ajouté avec succés! vous pouvez ajouter un eleve!</div>\";
                        \$(\"#messageContainer\").html(message);
                        \$(\"#formParentContainer\").fadeOut(\"fast\");
                        \$(\"#formContainer\").slideDown();
                        \$(\"#idParent\").val(response.idParent);
                        setTimeout(function () {

                            \$(\"#messageContainer\").html(\"\");
                        }, 3000);
                    }
                });
            });

            var matriculeRandom = Math.floor(Math.random()*99999999) ;
            \$(\"#matriculeEleve\").val(matriculeRandom) ;

            \$(\"#formAjouterEleve\").submit(function () {
                console.log(\$(\"#formAjouterEleve\").serialize());
                \$.ajax({
                    url:\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterEleveAJAX");
        echo "\",
                    method:\"GET\",
                    data:\$(\"#formAjouterEleve\").serialize(),
                    success:function (response) {
                        console.log(response);
                        response = JSON.parse(response);
                        if (response.status==\"inserted\"){
                        var message = \"<div class='alert alert-success' >Ajout avec succès !</div>\" ;
                        }else{
                            var message = \"<div class='alert alert-danger' >Problème d'ajout</div>\";
                        }
                        \$(\"#formContainer\").fadeOut(\"fast\");
                        \$(\"#messageContainer\").html(message) ;

                        setTimeout(function () {

                            window.location.assign(\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterEleve");
        echo "\");
                        }, 3000);



                    },
                    error:function (erreur) {
                        console.log(erreur) ;
                    }


                });



            });






        }); 
        
        
    </script>
    
    
    
";

        $__internal_55d5a7f0715ef977ef0ef24e5aa8c080c87ee8238b1010e72797a359df956e21->leave($__internal_55d5a7f0715ef977ef0ef24e5aa8c080c87ee8238b1010e72797a359df956e21_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_188f8904a26115f91131840aed47ef5dc5effa77148d7259b4ede6ba7fdd5e2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188f8904a26115f91131840aed47ef5dc5effa77148d7259b4ede6ba7fdd5e2c->enter($__internal_188f8904a26115f91131840aed47ef5dc5effa77148d7259b4ede6ba7fdd5e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 105
        echo "
    <div class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" id=\"messageContainer\">


            </div>
            <div class=\"row\" align=\"center\">
                <h4>Parent :</h4>
                <select id=\"listParent\">
                    <option value=\"null\">Choisir</option>
                    <option value=\"nouveauParent\">Ajouter un parent</option>
                    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parents"]) ? $context["parents"] : $this->getContext($context, "parents")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 118
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prenomParent", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomParent", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                </select>
            </div>

            <div class=\"row\" id=\"formParentContainer\" style=\"display: none\">
                <hr class=\"hr-4\">
                <center><h4>Ajouter un parent</h4></center>
                <hr class=\"hr-4\">
                <form name=\"ajouterParent\" id=\"formAjouterParent\" onsubmit=\"return false\" action=\"#\">
                    <table border=\"1\" align=\"center\" class=\"table table-bordered\">
                        <tr>
                            <td>Nom parent : </td>
                            <td><input type=\"text\" name=\"nomParent\"></td>
                        </tr>
                        <tr>
                            <td>Prenom parent :</td>
                            <td><input type=\"text\" name=\"prenomParent\"></td>
                        </tr>
                        <tr>
                            <td>CIN parent :</td>
                            <td><input type=\"text\" name=\"cinParent\"></td>
                        </tr>
                        <tr>
                            <td>Num Tel parent :</td>
                            <td><input type=\"text\" name=\"numTelParent\"></td>
                        </tr>
                        <tr>
                            <td>Adresse parent :</td>
                            <td><textarea cols=\"30\" rows=\"5\" name=\"adresseParent\"></textarea></td>
                        </tr>
                        <tr>
                            <td>Fonction parent :</td>
                            <td><input type=\"text\" name=\"fonctionParent\"></td>
                        </tr>
                        <tr>
                            <td>E-mail parent :</td>
                            <td><input type=\"email\" name=\"emailParent\"></td>
                        </tr>
                        <tr>
                            <td><input type=\"submit\" value=\"Envoyer\"></td>
                            <td><input type=\"reset\" value=\"Vider\"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class=\"row\" id=\"formContainer\" style=\"display: none\">
                <hr class=\"hr-4\">
                <center><h4>Ajouter un élève</h4></center>
                <hr class=\"hr-4\">
                <form name=\"ajouterEleve\" id=\"formAjouterEleve\" onsubmit=\"return false\" action=\"#\">
                    <input type=\"text\" id=\"idParent\" name=\"idParent\" style=\"display: none\">
                <table border=\"1\" align=\"center\" class=\"table table-bordered\">

                    <tr><td>Matricule</td><td><input type=\"text\" name=\"matriculeEleve\" id=\"matriculeEleve\" readonly></td></tr>
                    <tr><td>Sexe</td><td><input type=\"radio\" name=\"sexeEleve\" value=\"Garçon\">Garçon<br><input type=\"radio\" name=\"sexeEleve\" value=\"Fille\">Fille</td></tr>
                    <tr><td>Nom : </td><td><input type=\"text\" name=\"nomEleve\"></td></tr>
                    <tr><td>Prénom : </td><td><input type=\"text\" name=\"prenomEleve\"></td></tr>
                    <tr><td>Date de naissance</td><td><input type=\"date\" name=\"dateNaissanceEleve\" ></td></tr>
                    <tr><td>Niveau</td><td><select name=\"niveauEleve\">
                            <option value=\"1\">Premiere Annee</option>
                            <option value=\"2\">Deuxieme Annee</option>
                            <option value=\"3\">Troisieme Annee</option>
                            <option value=\"4\">Quatrieme Annee</option>
                            <option value=\"5\">Cinquieme Annee</option>
                            <option value=\"6\">Sixieme Annee</option>
                    </select></td></tr>
                    <tr><td>Frais</td><td>
                            ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) ? $context["frais"] : $this->getContext($context, "frais")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 188
            echo "                                <input type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "id", array()), "html", null, true);
            echo "\" name=\"fraisEleve[]\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "typeFrais", array()), "html", null, true);
            echo "<br>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                    </td></tr>

                    <tr align=\"center\"><td><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\"></td><td><input type=\"reset\" value=\"Réinitialiser\" class=\"btn btn-danger\"> </td></tr>

                </table>
                </form>


            </div>

        </div>

    </div>


";

        $__internal_188f8904a26115f91131840aed47ef5dc5effa77148d7259b4ede6ba7fdd5e2c->leave($__internal_188f8904a26115f91131840aed47ef5dc5effa77148d7259b4ede6ba7fdd5e2c_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 104

    public function getDebugInfo()
    {
        return array(287 => 190, 276 => 188, 272 => 187, 203 => 120, 190 => 118, 186 => 117, 172 => 105, 166 => 104, 129 => 72, 110 => 56, 82 => 31, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
    Ajouter un éléve
{% endblock %}

{% block script %}
    <script language=\"javascript\">
        \$(\"document\").ready(function () {


            \$(\"#listParent\").change(function(){
                \$(\"#messageContainer\").html(\"\");
                \$(\"#formContainer\").fadeOut();
                \$(\"#formParentContainer\").fadeOut();
               if(\$(\"#listParent\").val() == \"null\"){
                   var message = \"<div class='alert alert-danger'>Svp choisir</div>\";
                   \$(\"#messageContainer\").html(message);
               }else{
                   if(\$(\"#listParent\").val() != \"nouveauParent\"){
                       \$(\"#formContainer\").slideDown();
                       \$(\"#idParent\").val(\$(\"#listParent\").val());

                   }else{
                        \$(\"#formParentContainer\").slideDown();
                   }
               }
            });

            \$(\"#formAjouterParent\").submit(function(){
                \$.ajax({
                   url: \"{{ path('ajouterParent') }}\",
                    method: \"GET\",
                    data: \$(\"#formAjouterParent\").serialize(),
                    success: function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Parent ajouté avec succés! vous pouvez ajouter un eleve!</div>\";
                        \$(\"#messageContainer\").html(message);
                        \$(\"#formParentContainer\").fadeOut(\"fast\");
                        \$(\"#formContainer\").slideDown();
                        \$(\"#idParent\").val(response.idParent);
                        setTimeout(function () {

                            \$(\"#messageContainer\").html(\"\");
                        }, 3000);
                    }
                });
            });

            var matriculeRandom = Math.floor(Math.random()*99999999) ;
            \$(\"#matriculeEleve\").val(matriculeRandom) ;

            \$(\"#formAjouterEleve\").submit(function () {
                console.log(\$(\"#formAjouterEleve\").serialize());
                \$.ajax({
                    url:\"{{ path('ajouterEleveAJAX') }}\",
                    method:\"GET\",
                    data:\$(\"#formAjouterEleve\").serialize(),
                    success:function (response) {
                        console.log(response);
                        response = JSON.parse(response);
                        if (response.status==\"inserted\"){
                        var message = \"<div class='alert alert-success' >Ajout avec succès !</div>\" ;
                        }else{
                            var message = \"<div class='alert alert-danger' >Problème d'ajout</div>\";
                        }
                        \$(\"#formContainer\").fadeOut(\"fast\");
                        \$(\"#messageContainer\").html(message) ;

                        setTimeout(function () {

                            window.location.assign(\"{{ path('ajouterEleve') }}\");
                        }, 3000);



                    },
                    error:function (erreur) {
                        console.log(erreur) ;
                    }


                });



            });






        }); 
        
        
    </script>
    
    
    
{% endblock %}


{% block mainContent %}

    <div class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" id=\"messageContainer\">


            </div>
            <div class=\"row\" align=\"center\">
                <h4>Parent :</h4>
                <select id=\"listParent\">
                    <option value=\"null\">Choisir</option>
                    <option value=\"nouveauParent\">Ajouter un parent</option>
                    {% for p in parents %}
                        <option value=\"{{ p.id }}\">{{ p.prenomParent }} {{ p.nomParent }}</option>
                    {% endfor %}
                </select>
            </div>

            <div class=\"row\" id=\"formParentContainer\" style=\"display: none\">
                <hr class=\"hr-4\">
                <center><h4>Ajouter un parent</h4></center>
                <hr class=\"hr-4\">
                <form name=\"ajouterParent\" id=\"formAjouterParent\" onsubmit=\"return false\" action=\"#\">
                    <table border=\"1\" align=\"center\" class=\"table table-bordered\">
                        <tr>
                            <td>Nom parent : </td>
                            <td><input type=\"text\" name=\"nomParent\"></td>
                        </tr>
                        <tr>
                            <td>Prenom parent :</td>
                            <td><input type=\"text\" name=\"prenomParent\"></td>
                        </tr>
                        <tr>
                            <td>CIN parent :</td>
                            <td><input type=\"text\" name=\"cinParent\"></td>
                        </tr>
                        <tr>
                            <td>Num Tel parent :</td>
                            <td><input type=\"text\" name=\"numTelParent\"></td>
                        </tr>
                        <tr>
                            <td>Adresse parent :</td>
                            <td><textarea cols=\"30\" rows=\"5\" name=\"adresseParent\"></textarea></td>
                        </tr>
                        <tr>
                            <td>Fonction parent :</td>
                            <td><input type=\"text\" name=\"fonctionParent\"></td>
                        </tr>
                        <tr>
                            <td>E-mail parent :</td>
                            <td><input type=\"email\" name=\"emailParent\"></td>
                        </tr>
                        <tr>
                            <td><input type=\"submit\" value=\"Envoyer\"></td>
                            <td><input type=\"reset\" value=\"Vider\"></td>
                        </tr>
                    </table>
                </form>
            </div>

            <div class=\"row\" id=\"formContainer\" style=\"display: none\">
                <hr class=\"hr-4\">
                <center><h4>Ajouter un élève</h4></center>
                <hr class=\"hr-4\">
                <form name=\"ajouterEleve\" id=\"formAjouterEleve\" onsubmit=\"return false\" action=\"#\">
                    <input type=\"text\" id=\"idParent\" name=\"idParent\" style=\"display: none\">
                <table border=\"1\" align=\"center\" class=\"table table-bordered\">

                    <tr><td>Matricule</td><td><input type=\"text\" name=\"matriculeEleve\" id=\"matriculeEleve\" readonly></td></tr>
                    <tr><td>Sexe</td><td><input type=\"radio\" name=\"sexeEleve\" value=\"Garçon\">Garçon<br><input type=\"radio\" name=\"sexeEleve\" value=\"Fille\">Fille</td></tr>
                    <tr><td>Nom : </td><td><input type=\"text\" name=\"nomEleve\"></td></tr>
                    <tr><td>Prénom : </td><td><input type=\"text\" name=\"prenomEleve\"></td></tr>
                    <tr><td>Date de naissance</td><td><input type=\"date\" name=\"dateNaissanceEleve\" ></td></tr>
                    <tr><td>Niveau</td><td><select name=\"niveauEleve\">
                            <option value=\"1\">Premiere Annee</option>
                            <option value=\"2\">Deuxieme Annee</option>
                            <option value=\"3\">Troisieme Annee</option>
                            <option value=\"4\">Quatrieme Annee</option>
                            <option value=\"5\">Cinquieme Annee</option>
                            <option value=\"6\">Sixieme Annee</option>
                    </select></td></tr>
                    <tr><td>Frais</td><td>
                            {% for f in frais %}
                                <input type=\"checkbox\" value=\"{{ f.id }}\" name=\"fraisEleve[]\">{{ f.typeFrais }}<br>
                            {% endfor %}
                    </td></tr>

                    <tr align=\"center\"><td><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\"></td><td><input type=\"reset\" value=\"Réinitialiser\" class=\"btn btn-danger\"> </td></tr>

                </table>
                </form>


            </div>

        </div>

    </div>


{% endblock %}", "@projet/Default/Admin/ajouterEleve.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\ajouterEleve.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a52980d49e244df3c6ae26b60f157a10061e7fa064a1b50debaac1106acf77bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52980d49e244df3c6ae26b60f157a10061e7fa064a1b50debaac1106acf77bd->enter($__internal_a52980d49e244df3c6ae26b60f157a10061e7fa064a1b50debaac1106acf77bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/ajouterEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_a52980d49e244df3c6ae26b60f157a10061e7fa064a1b50debaac1106acf77bd->leave($__internal_a52980d49e244df3c6ae26b60f157a10061e7fa064a1b50debaac1106acf77bd_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/ajouterEleve.html.twig";
    }
}
