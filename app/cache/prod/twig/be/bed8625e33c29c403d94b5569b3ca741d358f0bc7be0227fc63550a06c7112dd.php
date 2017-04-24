<?php

/* projetBundle:Default/Admin:listerEnseignant.html.twig */
class __TwigTemplate_d9d42d4c8fc3168fcdce47d0fdef26f343acb7198800d63e2aea7e51e70963fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:listerEnseignant.html.twig", 1);
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
        echo "        Lister les enseignants
    ";
    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
                \$(\"#btnLister\").click(function(){
                    var idGrade = \$(\"#gradeList\").val();
                    var tableau = \"<table border='1' class='table table-bordered' id='enseignantTable'><tr><th>Matricule</th><th>Nom</th><th>Prenom</th><th>CIN</th><th>Adresse</th><th>E-mail</th><th>NumTel</th></tr></table>\";
                    \$(\"#mySpinner\").fadeIn(\"slow\");
                    \$(\"#tableContainer\").slideUp(\"fast\");
                    \$(\"#alertVide\").slideUp(\"fast\");

                    \$.ajax({
                        url :\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListerEnseignantAJAX");
        echo "\",
                        method : \"GET\",
                        data :{\"idGrade\" : idGrade},
                        success : function(response){
                            var lines =\"\";
                            console.log(response);
                            response = JSON.parse(response);
                            console.log(response.listEnseignant);
                            if(response.listEnseignant.length == 0){
                                \$(\"#alertVide\").slideDown(\"fast\");
                                \$(\"#tableContainer\").slideUp(\"fast\");
                            }else{
                                \$.each(response.listEnseignant, function(i , item){
                                    lines+=\"<tr><td>\"+item.matricule_enseignant+\"</td><td>\"+item.nom_enseignant+\"</td><td>\"+item.prenom_enseignant+\"</td><td>\"+item.cin_enseignant+\"</td><td>\"+item.adresse_enseignant+\"</td><td>\"+item.email_enseignant+\"</td><td>\"+item.num_tel_enseignant+\"</td></tr>\";
                                });
                                \$(\"#tableBody\").html(lines);
                                \$(\"#tableEnseignant\").dataTable();
                                \$(\"#alertVide\").slideUp(\"fast\");
                                \$(\"#tableContainer\").slideDown(\"fast\");
                            }
                        }
                    });
                    \$(\"#mySpinner\").fadeOut(\"slow\");
                });
            });
        </script>
    ";
    }

    // line 45
    public function block_mainContent($context, array $blocks = array())
    {
        // line 46
        echo "        <hr class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" align=\"center\">
                <select name=\"gradeList\" id=\"gradeList\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 51
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "nomGrade", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </select>
                <input type=\"button\" value=\"Lister\" id=\"btnLister\" class=\"btn btn-primary\">
            </div>
            <hr class=\"hr-2\">
            <div class=\"row\">
                <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\" style=\"display: none\"></i></center>
                <div class=\"alert alert-warning\" id=\"alertVide\" style=\"display: none\">Aucun enseignant n'appartient a cet grade!</div>
                <div id=\"tableContainer\" style=\"display: none\">
                    <table id=\"tableEnseignant\" class=\"display\" cellspacing=\"0\" width=\"80%\">
                        <thead>
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Cin</th>
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Numéro de téléphone</th>
                        </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Matricule</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Cin</th>
                                <th>Adresse</th>
                                <th>Email</th>
                                <th>Numéro de téléphone</th>
                            </tr>
                        </tfoot>
                        <tbody id=\"tableBody\">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 53,  97 => 51,  93 => 50,  87 => 46,  84 => 45,  53 => 17,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projetBundle:Default/Admin:listerEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerEnseignant.html.twig");
    }
}
