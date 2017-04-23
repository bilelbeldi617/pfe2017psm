<?php

/* @projet/Default/Admin/listerPersonnels.html.twig */
class __TwigTemplate_0e73969ebebb8cc4c97fa5c10fc027ee7ef1db2651c4987ccb69d59e87d9b827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/listerPersonnels.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Lister les personnels
    ";
    }

    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
               \$(\"#btnLister\").click(function(){
                    console.log(\"click\");
                   var idPoste = \$(\"#postesList\").val();
                   var tableau = \"<table border='1' class='table table-bordered' id='personnelTable'><tr><th>Matricule</th><th>Nom</th><th>Prenom</th><th>CIN</th><th>Adresse</th><th>E-mail</th><th>NumTel</th></tr></table>\";
                   \$(\"#mySpinner\").fadeIn(\"slow\");
                   \$(\"#tableContainer\").slideUp(\"fast\");
                   \$(\"#alertVide\").slideUp(\"fast\");

                   \$.ajax({
                        url: \"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListerPersonnelAJAX");
        echo "\",
                       method: \"GET\",
                       data: {\"idPoste\" : idPoste},
                       success: function(response){
                           var lines = \"\";
                           console.log(response);
                           response = JSON.parse(response);
                           if(response.listPersonnels.length == 0){
                               \$(\"#alertVide\").slideDown(\"fast\");
                               \$(\"#tableContainer\").slideUp(\"fast\");
                           }else{
                               \$.each(response.listPersonnels, function(i, item){
                                   lines+=\"<tr><td>\"+item.matricule_personnel+\"</td><td>\"+item.nom_personnel+\"</td><td>\"+item.prenom_personnel+\"</td><td>\"+item.cin_personnel+\"</td><td>\"+item.adresse_personnel+\"</td><td>\"+item.email_personnel+\"</td><td>\"+item.num_tel_personnel+\"</td></tr>\";
                               });
                               \$(\"#tableBody\").html(lines);
                               \$(\"#tablePersonnel\").dataTable();
                               \$(\"#alertVide\").slideUp(\"fast\");
                               \$(\"#tableContainer\").slideDown(\"fast\");
                           }
                       }
                   });
                   \$(\"#mySpinner\").fadeOut(\"slow\");
               }) ;
            });
        </script>
    ";
    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        // line 46
        echo "        <hr class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" align=\"center\">
                <select name=\"postesList\" id=\"postesList\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postes"]) ? $context["postes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 51
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "titrePoste", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </select>
                <input type=\"button\" value=\"Lister\" class=\"btn btn-primary\" id=\"btnLister\">
            </div>
            <hr class=\"hr-2\">
            <div class=\"row\">
                <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\" style=\"display: none\"></i></center>
                <div class=\"alert alert-warning\" id=\"alertVide\" style=\"display: none\">Aucun personnel n'appartient a cette poste!</div>
                <div id=\"tableContainer\" style=\"display: none\">
                    <table id=\"tablePersonnel\" class=\"display\" cellspacing=\"0\" width=\"80%\">
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

    // line 6

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerPersonnels.html.twig";
    }

    // line 45

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(108 => 53, 97 => 51, 93 => 50, 87 => 46, 84 => 45, 54 => 18, 41 => 7, 38 => 6, 33 => 3, 30 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@projet/Default/Admin/listerPersonnels.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerPersonnels.html.twig");
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
