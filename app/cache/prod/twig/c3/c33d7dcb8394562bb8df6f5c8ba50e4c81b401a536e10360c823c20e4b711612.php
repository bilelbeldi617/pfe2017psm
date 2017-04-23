<?php

/* @projet/Default/Admin/ajouterEnseignant.html.twig */
class __TwigTemplate_70e0b38c02a2bf64e8dae8916991f76eef4d4ccd81d3a098831aece5efadeb1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/ajouterEnseignant.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Ajouter un enseignant
    ";
    }

    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
                var matriculeRandom = Math.floor(Math.random()*99999999);
                \$(\"#matriculeEnseignant\").val(matriculeRandom);
                \$(\"#formAjouterEnseignant\").submit(function (){
                    console.log(\$(\"#formAjouterEnseignant\").serialize());
                    \$.ajax({
                        url : \"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterEnseignantAJAX");
        echo "\",
                        method : \"POST\",
                        data : \$(\"#formAjouterEnseignant\").serialize(),
                        success : function(response){
                            console.log(response);
                            response = JSON.parse(response);
                            if(response.status == \"inserted\"){
                                var message = \"<div class='alert alert-success'>Ajout avec success</div>\";
                            }else{
                                var message = \"<div class='alert alert-danger'>Failed !</div>\";
                            }
                            \$(\"#messageContainer\").html(message);
                        },
                        error : function(erreur){
                            //console.log(erreur);
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
        // line 37
        echo "        <div class=\"hr-4\">
            <div class=\"col-xs-12\">
                <div id=\"messageContainer\" class=\"row\">

                </div>
                <div class=\"row\">
                    <form name=\"ajouterEnseignant\" id=\"formAjouterEnseignant\" onsubmit=\"return false\" action=\"#\">
                        <table border=\"1\" align=\"center\" class=\"table table-bordered\">
                            <tr>
                                <td>Grade</td>
                                <td><select name=\"idGrade\">
                                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 49
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "nomGrade", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                </select></td>
                            </tr>
                            <tr>
                                <td>Matricule</td>
                                <td><input type=\"text\" name=\"matriculeEnseignant\" id=\"matriculeEnseignant\" readonly></td>
                            </tr>
                            <tr>
                                <td>Nom</td>
                                <td><input type=\"text\" name=\"nomEnseignant\" id=\"nomEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Prenom</td>
                                <td><input type=\"text\" name=\"prenomEnseignant\" id=\"prenomEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Adresse</td>
                                <td><input type=\"text\" name=\"adresseEnseignant\" id=\"adresseEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Numéro de téléphone</td>
                                <td><input type=\"tel\" name=\"numTelEnseignant\" id=\"numTelEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>CIN</td>
                                <td><input type=\"text\" name=\"cinEnseignant\" id=\"cinEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td><input type=\"email\" name=\"emailEnseignant\" id=\"emailEnseignant\"></td>
                            </tr>
                            <tr align=\"center\">
                                <td><input type=\"submit\" name=\"submitBtn\" id=\"submitBtn\" value=\"Ajouter\" class=\"btn btn-primary\"></td>
                                <td><input type=\"reset\" value=\"Vider\" class=\"btn btn-danger\"></td>
                            </tr>
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
        return "@projet/Default/Admin/ajouterEnseignant.html.twig";
    }

    // line 36

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(106 => 51, 95 => 49, 91 => 48, 78 => 37, 75 => 36, 50 => 14, 41 => 7, 38 => 6, 33 => 3, 30 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@projet/Default/Admin/ajouterEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\ajouterEnseignant.html.twig");
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
