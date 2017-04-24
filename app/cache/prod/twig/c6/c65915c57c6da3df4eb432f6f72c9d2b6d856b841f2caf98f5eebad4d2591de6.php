<?php

/* @projet/Default/Admin/ajouterPersonnel.html.twig */
class __TwigTemplate_87631fd3ebf5d7c246ca4608c85aec9e851b32ae59fa6dd9179f5c08570bc365 extends Twig_Template
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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Ajouter un personnel
    ";
    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
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
    }

    // line 36
    public function block_mainContent($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["postes"]) ? $context["postes"] : null));
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
    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/ajouterPersonnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 51,  95 => 49,  91 => 48,  78 => 37,  75 => 36,  50 => 14,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@projet/Default/Admin/ajouterPersonnel.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\ajouterPersonnel.html.twig");
    }
}
