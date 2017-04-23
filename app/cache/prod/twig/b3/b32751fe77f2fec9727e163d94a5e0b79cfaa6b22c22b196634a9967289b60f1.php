<?php

/* @projet/Default/Admin/listerEleve.html.twig */
class __TwigTemplate_4850dfb045f032b3bc4c61c834bc0a63c4197ecdd9a1ef0385c66240f37690e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/listerEleve.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Lister les éléves
";
    }

    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "<script language=\"JavaScript\">
    \$(\"document\").ready(function () {
       \$(\"#buttonLister\").click(function () {

           var idGroupe = \$(\"#groupeList\").val() ;

           var tableau = \"<table border='1' class='table table-bordered' id='eleveTable'><tr><th>Nom</th><th>Prenom</th><th>Matricule</th><th>Observation</th><th>Bulletin</th></tr>\";
           \$(\"#mySpinner\").fadeIn(\"slow\");
           \$(\"#tableContainer\").slideUp(\"fast\");
           \$(\"#alertVide\").slideUp(\"fast\");

           \$.ajax({
               url:\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListerElevesAJAX");
        echo "\",
               method:\"GET\",
               data:{\"idGroupe\" : idGroupe},
               success:function (response) {
                   var lines =\"\" ;

                   response = JSON.parse(response) ;

                   if (response.listEleve.length == 0){
                       \$(\"#alertVide\").slideDown(\"fast\");
                       \$(\"#tableContainer\").slideUp(\"fast\");



                   }else{
                   \$.each(response.listEleve, function (i, item) {
                       lines+=\"<tr><td>\"+item.matricule_eleve+\"</td><td>\"+item.nom_eleve+\"</td><td>\"+item.prenom_eleve+\"</td><td>\"+item.date_naissance_eleve+\"</td><td>\"+item.parent.cin_parent+\"</td><td>\"+item.parent.nom_parent+\"</td><td>\"+item.parent.prenom_parent+\"</td>\";
                       var champs= \"<td>\" ;
                       if (item.paiement.length!=0){
                          for(j=0; j<item.paiement.length; j++){
                              champs += \"  \" + item.paiement[j].frais.type_frais+\" : <b>\"+ item.paiement[j].etat_paiement+\" </b><br>\" ;
                          }

                       }else {champs+=\" --- \" ;}

                       var lienBulletin = \"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genererBulletins");
        echo "?matEleve=\"+item.matricule_eleve;
                       champs+=\"</td><td><a href=\"+lienBulletin+\"><input type='button' value='Generer' class='btn btn-primary'></a></td></tr>\";
                       lines+=champs ;


                   });
                       \$(\"#tableBody\").html(lines);
                       \$(\"#tableEleve\").dataTable() ;
                       \$(\"#alertVide\").slideUp(\"fast\");
                       \$(\"#tableContainer\").slideDown(\"fast\");
                       \$(\"#mySpinner\").fadeOut(\"fast\") ;
               }

               }


           }) ;



       });
        \$(\"#anneesList\").change(function(){
            \$(\"#alertGroupeVide\").fadeOut();
            var selectedYear = \$(\"#anneesList\").val() ;
            \$.ajax({
                url:\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListerGroupesParAnneesAJAX");
        echo "\",
                method:\"GET\",
                data:{\"idAnnee\": selectedYear},
                success:function(response){
                 response = JSON.parse(response);

                    var options = \"\" ;
                   if(response.length>0){
                       \$.each(response, function(i, item){
                           options +=\"<option value='\"+item.id+\"'>\"+item.nom_groupe+\" \"+item.num_groupe+\"</option>\" ;



                       }) ;
                       \$(\"#alertGroupeVide\").fadeOut();
                       \$(\"#buttonLister\").removeAttr(\"disabled\") ;
                       \$(\"#groupeList\").removeAttr(\"disabled\");
                   }else{
                       \$(\"#alertGroupeVide\").fadeIn();
                       \$(\"#buttonLister\").attr(\"disabled\",\"disabled\") ;
                       \$(\"#groupeList\").attr(\"disabled\",\"disabled\") ;
                        options=\"<option value='null'>Groupes</option>\" ;
                   }
                    \$(\"#groupeList\").html(options) ;
                }

            });


        });


    });

</script>

";
    }

    // line 3

    public function block_mainContent($context, array $blocks = array())
    {
        // line 109
        echo "
<hr class=\"hr-4\">
<div class=\"col-xs-12\">
    <div class=\"row\" align=\"center\">
        <select name=\"anneesList\" id=\"anneesList\">
            <option value=\"0\">Année Scolaire</option>
            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 116
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "periode", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "        </select>
        <select name=\"groupeList\" id=\"groupeList\" disabled>
          <option value=\"null\">Groupes</option>
        </select>
        <input type=\"button\" value=\"Lister\" id=\"buttonLister\" class=\"btn btn-primary\" disabled>
    </div>
    <hr class=\"hr-2\">
    <div class=\"row\">
       <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\" style=\"display: none\"></i></center>
        <div class='alert alert-warning' id=\"alertGroupeVide\" style=\"display: none\">Aucun groupe trouvé dans l'année scolaire selectionné !</div>
        <div class='alert alert-warning' id=\"alertVide\" style=\"display: none\">Groupe vide !</div>

        <div id=\"tableContainer\" style=\"display: none;\">
             <table id=\"tableEleve\" class=\"display\" cellspacing=\"0\" width=\"80%\">
                 <thead>
                 <tr>
                     <th>Matricule</th>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Date Naissance</th>
                     <th>Cin Parent</th>
                     <th>Prénom Parent</th>
                     <th>Nom Parent</th>
                     <th>Frais</th>
                     <th>Bulletin</th>
                 </tr>
                 </thead>
                 <tfoot>
                 <tr>
                     <th>Matricule</th>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Date Naissance</th>
                     <th>Cin Parent</th>
                     <th>Prénom Parent</th>
                     <th>Nom Parent</th>
                     <th>Frais</th>
                     <th>Bulletin</th>
                 </tr>
                 </tfoot>
                 <tbody id=\"tableBody\">

                 </tbody>
             </table>

         </div>


    </div>

</div>

  ";
        // line 179
        echo "

";
    }

    // line 6

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerEleve.html.twig";
    }

    // line 108

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(232 => 179, 178 => 118, 167 => 116, 163 => 115, 155 => 109, 152 => 108, 111 => 69, 83 => 44, 55 => 19, 41 => 7, 38 => 6, 33 => 4, 30 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@projet/Default/Admin/listerEleve.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerEleve.html.twig");
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
