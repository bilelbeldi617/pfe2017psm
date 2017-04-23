<?php

/* @projet/Default/Admin/ajouterEleve.html.twig */
class __TwigTemplate_46b7bb40cda1f2af41d71afe089ed31e8097289fd4a3b158771f2b378e1667bc extends Twig_Template
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
        // line 3
        echo "    Ajouter un éléve
";
    }

    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "    <script language=\"javascript\">
        \$(\"document\").ready(function () {
            var matriculeRandom = Math.floor(Math.random()*99999999) ;
            \$(\"#matriculeEleve\").val(matriculeRandom) ;

            \$(\"#formAjouterEleve\").submit(function () {
                console.log(\$(\"#formAjouterEleve\").serialize());
                \$.ajax({
                    url:\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterEleveAJAX");
        echo "\",
                    method:\"POST\",
                    data:\$(\"#formAjouterEleve\").serialize(),
                    success:function (response) {
                        console.log(response);
                        response = JSON.parse(response);
                        if (response.status==\"inserted\"){
                        var message = \"<div class='alert alert-success' >Ajout avec succès !</div>\" ;
                        }else{
                            var message = \"<div class='alert alert-danger' >Problème d'ajout</div>\";
                        }

                        \$(\"#messageContainer\").html(message) ;
                        \$(\"#formAjouterEleve\")[0].reset();
                        var matriculeRandom = Math.floor(Math.random()*99999999) ;
                        \$(\"#matriculeEleve\").val(matriculeRandom) ;


                    },
                    error:function (erreur) {
                        console.log(erreur) ;
                    }


                });



            });






        }); 
        
        
    </script>
    
    
    
";
    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        // line 61
        echo "
    <div class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" id=\"messageContainer\">


            </div>
            <div class=\"row\" id=\"formContainer\">
                <form name=\"ajouterEleve\" id=\"formAjouterEleve\" onsubmit=\"return false\" action=\"#\">
                <table border=\"1\" align=\"center\" class=\"table table-bordered\">

                    <tr><td>Matricule</td><td><input type=\"text\" name=\"matriculeEleve\" id=\"matriculeEleve\" readonly></td></tr>
                    <tr><td>Sexe</td><td><input type=\"radio\" name=\"sexeEleve\" value=\"Garçon\">Garçon<br><input type=\"radio\" name=\"sexeEleve\" value=\"Fille\">Fille</td></tr>
                    <tr><td>Nom : </td><td><input type=\"text\" name=\"nomEleve\"></td></tr>
                    <tr><td>Prénom : </td><td><input type=\"text\" name=\"prenomEleve\"></td></tr>
                    <tr><td>Date de naissance</td><td><input type=\"date\" name=\"dateNaissanceEleve\"></td></tr>
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
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["frais"]) ? $context["frais"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 87
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
        // line 89
        echo "                    </td></tr>
                    <tr><td>Parent :</td><td>
                            <div id=\"selectParent\">
                                <select name=\"selectedParentID\">
                              ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["parents"]) ? $context["parents"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 94
            echo "                                  <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nomParent", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prenomParent", array()), "html", null, true);
            echo "</option>

                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                </select>
                              </div>
                        </td>
                    </tr>

                    <tr align=\"center\"><td><input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\"></td><td><input type=\"reset\" value=\"Réinitialiser\" class=\"btn btn-danger\"> </td></tr>

                </table>
                </form>


            </div>

        </div>

    </div>


";
    }

    // line 6

    public function getTemplateName()
    {
        return "@projet/Default/Admin/ajouterEleve.html.twig";
    }

    // line 60

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(167 => 97, 153 => 94, 149 => 93, 143 => 89, 132 => 87, 128 => 86, 101 => 61, 98 => 60, 51 => 15, 41 => 7, 38 => 6, 33 => 3, 30 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@projet/Default/Admin/ajouterEleve.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\ajouterEleve.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
