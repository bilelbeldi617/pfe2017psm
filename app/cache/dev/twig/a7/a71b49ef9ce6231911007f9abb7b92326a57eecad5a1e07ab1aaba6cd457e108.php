<?php

/* projetBundle:Default/Admin:listerEleve.html.twig */
class __TwigTemplate_9ac314c7c2835fc9347d08fa3617c5bf9b41fbc69220681143cfd9faa8a99383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:listerEleve.html.twig", 1);
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
        $__internal_5440881d3ab54db2295a5130c7d611cfc5cca69e5bca63ea9871f03d99a40759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5440881d3ab54db2295a5130c7d611cfc5cca69e5bca63ea9871f03d99a40759->enter($__internal_5440881d3ab54db2295a5130c7d611cfc5cca69e5bca63ea9871f03d99a40759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5440881d3ab54db2295a5130c7d611cfc5cca69e5bca63ea9871f03d99a40759->leave($__internal_5440881d3ab54db2295a5130c7d611cfc5cca69e5bca63ea9871f03d99a40759_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62f41c4a97a176e05acdc7289a549cfaf4e963a28bfd1428e9b8db244519fa1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f41c4a97a176e05acdc7289a549cfaf4e963a28bfd1428e9b8db244519fa1c->enter($__internal_62f41c4a97a176e05acdc7289a549cfaf4e963a28bfd1428e9b8db244519fa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lister les éléves
";
        
        $__internal_62f41c4a97a176e05acdc7289a549cfaf4e963a28bfd1428e9b8db244519fa1c->leave($__internal_62f41c4a97a176e05acdc7289a549cfaf4e963a28bfd1428e9b8db244519fa1c_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_e16ec9e80764339526f005ba530f91a1d2a48488c1ec18a88d006ff5b3e3956f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e16ec9e80764339526f005ba530f91a1d2a48488c1ec18a88d006ff5b3e3956f->enter($__internal_e16ec9e80764339526f005ba530f91a1d2a48488c1ec18a88d006ff5b3e3956f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "<script language=\"JavaScript\">

    function voirInfo(mat){
        \$(\"#modalSpinner\").fadeIn() ;
        \$(\"#nomEleve\").html(\"Veuillez patienter...\") ;
        \$(\"#spanModalContainer\").hide() ;
        \$.ajax({
           url: \"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirInfoAJAX");
        echo "\",
            method: \"GET\",
            data: {\"mat\" : mat},
            success: function(response){
                response = JSON.parse(response);
                console.log(response);
                var nomEleve = \"Elève :  \"+ response.eleve.nom_eleve+ \" \" + response.eleve.prenom_eleve ;


                   if(response.groupe != null){
                       var groupeEleve = response.groupe.nom_groupe+ \" \" + response.groupe.num_groupe ;
                   }else{
                       var groupeEleve = \"Non affecté\";
                   }

                if(response.listMatiere.length==0){
                    var tableauMatiere = \"<h3>Aucun enseignant, 0 matiere</h3>\";
                }else {
                    var tableauMatiere = \"<table border='1' class='table' align='center' width='70%'>\";
                    tableauMatiere += \"<tr class='table-header'><td>Matiere</td><td>Enseignant</td></tr>\";
                    \$.each(response.listMatiere, function (i, item) {


                        tableauMatiere += \"<tr><td>\" + item.libelle_matiere + \"</td><td>\" + item.enseignant.nom_enseignant + \" \" + item.enseignant.prenom_enseignant + \"</td></tr>\";

                    });
                    tableauMatiere += \"</table>\";
                }


                if(response.listPaiement.length==0){
                    \$(\"#fraisTable\").html(\"<h3>Il n'existe pas des frais associés !</h3>\") ;
                }else {
                    var tableauFrais = \"<table border='1' class='table' align='center' width='70%'>\";
                    tableauFrais += \"<tr class='table-header'><td>Types Frais</td><td>Total Paiement</td><td>Etat Paiement</td></tr>\";
                    \$.each(response.listPaiement, function (i, item) {
                        tableauFrais += \"<tr><td>\" + item.frais_paiement + \"</td><td>\" + item.totale_paiement + \"</td>\";
                        if (item.etat_paiement == \"NP\") {
                            tableauFrais += \"<td>Non payé</td>\";
                        } else {
                            tableauFrais += \"<td>Payé</td>\";
                        }
                        tableauFrais += \"</tr>\";


                    });
                    tableauFrais += \"</table>\";
                }



                \$(\"#modalSpinner\").fadeOut() ;
                \$(\"#modalContent\").fadeIn();
                \$(\"#nomEleve\").html(nomEleve);
                \$(\"#groupeEleve\").html(groupeEleve);
                \$(\"#matiereTable\").html(tableauMatiere);
                \$(\"#fraisTable\").html(tableauFrais) ;
                \$(\"#spanModalContainer\").slideDown() ;

            }
        });
    }

    \$(\"document\").ready(function () {



           \$(\"#mySpinner\").fadeIn(\"slow\");
           \$(\"#tableContainer\").slideUp(\"fast\");
           \$(\"#alertVide\").slideUp(\"fast\");

           \$.ajax({
               url:\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListerElevesAJAX");
        echo "\",
               method:\"GET\",
               success:function (response) {
                   var lines =\"\" ;

                   response = JSON.parse(response) ;

                   if (response.listEleve.length == 0){
                       \$(\"#alertVide\").slideDown(\"fast\");
                       \$(\"#tableContainer\").slideUp(\"fast\");



                   }else{
                   \$.each(response.listEleve, function (i, item) {
                       if(item.groupe != null){
                           var groupe = item.groupe.nom_groupe+\" \"+item.groupe.num_groupe;
                       }else{
                           var groupe = \"<a href='";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affecter");
        echo "?matEleve=\"+item.matricule_eleve+\"'><input type='button' value='affecter a un groupe' class='btn btn-primary'><i style='display: none'>affecter a un groupe</i></a>\";
                       }
                       if(item.niveau_eleve == 1){
                           var niveau = \"ere annee\";
                       }else{
                           var niveau = \"eme annee\";
                       }
                       lines+=\"<tr><td>\"+groupe+\"</td><td>\"+item.niveau_eleve+niveau+\"</td><td>\"+item.matricule_eleve+\"</td><td>\"+item.nom_eleve+\"</td><td>\"+item.prenom_eleve+\"</td><td>\"+item.date_naissance_eleve+\"</td><td>\"+item.parent.prenom_parent+\" \"+item.parent.nom_parent+\"</td><td><input type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal' value='Voir Infos' onclick='voirInfo(\"+item.matricule_eleve+\")'></td></tr>\";





                   });
                       \$(\"#tableBody\").html(lines);
                       \$(\"#tableEleve\").dataTable() ;
                       \$(\"#alertVide\").slideUp(\"fast\");
                       \$(\"#tableContainer\").slideDown(\"fast\");
                       \$(\"#mySpinner\").fadeOut(\"fast\") ;
               }

               }
           });
        \$(\"#anneesList\").change(function(){
            \$(\"#alertGroupeVide\").fadeOut();
            var selectedYear = \$(\"#anneesList\").val() ;
            \$.ajax({
                url:\"";
        // line 131
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
        
        $__internal_e16ec9e80764339526f005ba530f91a1d2a48488c1ec18a88d006ff5b3e3956f->leave($__internal_e16ec9e80764339526f005ba530f91a1d2a48488c1ec18a88d006ff5b3e3956f_prof);

    }

    // line 170
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_953ec536729c4b5069b79fd77e2cd550f5de8a8bd16d6838efb8a36fa63b5d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953ec536729c4b5069b79fd77e2cd550f5de8a8bd16d6838efb8a36fa63b5d2c->enter($__internal_953ec536729c4b5069b79fd77e2cd550f5de8a8bd16d6838efb8a36fa63b5d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 171
        echo "
<hr class=\"hr-4\">
<div class=\"col-xs-12\">
    <hr class=\"hr-2\">
    <div class=\"row\">
       <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\" style=\"display: none\"></i></center>
        <div class='alert alert-warning' id=\"alertGroupeVide\" style=\"display: none\">Aucun groupe trouvé dans l'année scolaire selectionné !</div>
        <div class='alert alert-warning' id=\"alertVide\" style=\"display: none\">Groupe vide !</div>

        <div id=\"tableContainer\" style=\"display: none;\">
             <table id=\"tableEleve\" class=\"display\" cellspacing=\"0\" width=\"95%\" border=\"1\">
                 <thead>
                 <tr>
                     <th>Groupe</th>
                     <th>Niveau</th>
                     <th>Matricule</th>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Date Naissance</th>
                     <th>Parent</th>
                     <th>Plus d'informations</th>

                 </tr>
                 </thead>
                 <tfoot>
                 <tr>
                     <th>Groupe</th>
                     <th>Niveau</th>
                     <th>Matricule</th>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Date Naissance</th>
                     <th>Parent</th>
                     <th>Plus d'informations</th>

                 </tr>
                 </tfoot>
                 <tbody id=\"tableBody\">

                 </tbody>
             </table>

         </div>


    </div>

</div>

    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">


                <div class=\"modal-header\" >
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\"><span id=\"nomEleve\">Veuillez patienter...</span></h4>
                </div>
                <div class=\"modal-body\" align=\"center\">
                    <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"modalSpinner\"></i></center>
                    <div id=\"spanModalContainer\">
                        <p align=\"center\"><h3>Groupe : <span id=\"groupeEleve\"></span></h3></p>
                        <hr class=\"hr-4\">
                        <p>
                        <span id=\"matiereTable\" style=\"margin-top: 15px\"></span>
                        </p>
                        <hr class=\"hr-4\">
                        <p>
                            <span id=\"fraisTable\" style=\"margin-top: 15px\"></span>
                        </p>





                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>

                </div>

            </div>

        </div>
    </div>




    ";
        // line 272
        echo "

";
        
        $__internal_953ec536729c4b5069b79fd77e2cd550f5de8a8bd16d6838efb8a36fa63b5d2c->leave($__internal_953ec536729c4b5069b79fd77e2cd550f5de8a8bd16d6838efb8a36fa63b5d2c_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 272,  241 => 171,  235 => 170,  191 => 131,  161 => 104,  140 => 86,  65 => 14,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    Lister les éléves
{% endblock %}
{% block script %}
<script language=\"JavaScript\">

    function voirInfo(mat){
        \$(\"#modalSpinner\").fadeIn() ;
        \$(\"#nomEleve\").html(\"Veuillez patienter...\") ;
        \$(\"#spanModalContainer\").hide() ;
        \$.ajax({
           url: \"{{ path('voirInfoAJAX') }}\",
            method: \"GET\",
            data: {\"mat\" : mat},
            success: function(response){
                response = JSON.parse(response);
                console.log(response);
                var nomEleve = \"Elève :  \"+ response.eleve.nom_eleve+ \" \" + response.eleve.prenom_eleve ;


                   if(response.groupe != null){
                       var groupeEleve = response.groupe.nom_groupe+ \" \" + response.groupe.num_groupe ;
                   }else{
                       var groupeEleve = \"Non affecté\";
                   }

                if(response.listMatiere.length==0){
                    var tableauMatiere = \"<h3>Aucun enseignant, 0 matiere</h3>\";
                }else {
                    var tableauMatiere = \"<table border='1' class='table' align='center' width='70%'>\";
                    tableauMatiere += \"<tr class='table-header'><td>Matiere</td><td>Enseignant</td></tr>\";
                    \$.each(response.listMatiere, function (i, item) {


                        tableauMatiere += \"<tr><td>\" + item.libelle_matiere + \"</td><td>\" + item.enseignant.nom_enseignant + \" \" + item.enseignant.prenom_enseignant + \"</td></tr>\";

                    });
                    tableauMatiere += \"</table>\";
                }


                if(response.listPaiement.length==0){
                    \$(\"#fraisTable\").html(\"<h3>Il n'existe pas des frais associés !</h3>\") ;
                }else {
                    var tableauFrais = \"<table border='1' class='table' align='center' width='70%'>\";
                    tableauFrais += \"<tr class='table-header'><td>Types Frais</td><td>Total Paiement</td><td>Etat Paiement</td></tr>\";
                    \$.each(response.listPaiement, function (i, item) {
                        tableauFrais += \"<tr><td>\" + item.frais_paiement + \"</td><td>\" + item.totale_paiement + \"</td>\";
                        if (item.etat_paiement == \"NP\") {
                            tableauFrais += \"<td>Non payé</td>\";
                        } else {
                            tableauFrais += \"<td>Payé</td>\";
                        }
                        tableauFrais += \"</tr>\";


                    });
                    tableauFrais += \"</table>\";
                }



                \$(\"#modalSpinner\").fadeOut() ;
                \$(\"#modalContent\").fadeIn();
                \$(\"#nomEleve\").html(nomEleve);
                \$(\"#groupeEleve\").html(groupeEleve);
                \$(\"#matiereTable\").html(tableauMatiere);
                \$(\"#fraisTable\").html(tableauFrais) ;
                \$(\"#spanModalContainer\").slideDown() ;

            }
        });
    }

    \$(\"document\").ready(function () {



           \$(\"#mySpinner\").fadeIn(\"slow\");
           \$(\"#tableContainer\").slideUp(\"fast\");
           \$(\"#alertVide\").slideUp(\"fast\");

           \$.ajax({
               url:\"{{ path('ListerElevesAJAX') }}\",
               method:\"GET\",
               success:function (response) {
                   var lines =\"\" ;

                   response = JSON.parse(response) ;

                   if (response.listEleve.length == 0){
                       \$(\"#alertVide\").slideDown(\"fast\");
                       \$(\"#tableContainer\").slideUp(\"fast\");



                   }else{
                   \$.each(response.listEleve, function (i, item) {
                       if(item.groupe != null){
                           var groupe = item.groupe.nom_groupe+\" \"+item.groupe.num_groupe;
                       }else{
                           var groupe = \"<a href='{{ path('affecter') }}?matEleve=\"+item.matricule_eleve+\"'><input type='button' value='affecter a un groupe' class='btn btn-primary'><i style='display: none'>affecter a un groupe</i></a>\";
                       }
                       if(item.niveau_eleve == 1){
                           var niveau = \"ere annee\";
                       }else{
                           var niveau = \"eme annee\";
                       }
                       lines+=\"<tr><td>\"+groupe+\"</td><td>\"+item.niveau_eleve+niveau+\"</td><td>\"+item.matricule_eleve+\"</td><td>\"+item.nom_eleve+\"</td><td>\"+item.prenom_eleve+\"</td><td>\"+item.date_naissance_eleve+\"</td><td>\"+item.parent.prenom_parent+\" \"+item.parent.nom_parent+\"</td><td><input type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal' value='Voir Infos' onclick='voirInfo(\"+item.matricule_eleve+\")'></td></tr>\";





                   });
                       \$(\"#tableBody\").html(lines);
                       \$(\"#tableEleve\").dataTable() ;
                       \$(\"#alertVide\").slideUp(\"fast\");
                       \$(\"#tableContainer\").slideDown(\"fast\");
                       \$(\"#mySpinner\").fadeOut(\"fast\") ;
               }

               }
           });
        \$(\"#anneesList\").change(function(){
            \$(\"#alertGroupeVide\").fadeOut();
            var selectedYear = \$(\"#anneesList\").val() ;
            \$.ajax({
                url:\"{{ path('ListerGroupesParAnneesAJAX') }}\",
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

{% endblock %}


{% block mainContent %}

<hr class=\"hr-4\">
<div class=\"col-xs-12\">
    <hr class=\"hr-2\">
    <div class=\"row\">
       <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\" style=\"display: none\"></i></center>
        <div class='alert alert-warning' id=\"alertGroupeVide\" style=\"display: none\">Aucun groupe trouvé dans l'année scolaire selectionné !</div>
        <div class='alert alert-warning' id=\"alertVide\" style=\"display: none\">Groupe vide !</div>

        <div id=\"tableContainer\" style=\"display: none;\">
             <table id=\"tableEleve\" class=\"display\" cellspacing=\"0\" width=\"95%\" border=\"1\">
                 <thead>
                 <tr>
                     <th>Groupe</th>
                     <th>Niveau</th>
                     <th>Matricule</th>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Date Naissance</th>
                     <th>Parent</th>
                     <th>Plus d'informations</th>

                 </tr>
                 </thead>
                 <tfoot>
                 <tr>
                     <th>Groupe</th>
                     <th>Niveau</th>
                     <th>Matricule</th>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Date Naissance</th>
                     <th>Parent</th>
                     <th>Plus d'informations</th>

                 </tr>
                 </tfoot>
                 <tbody id=\"tableBody\">

                 </tbody>
             </table>

         </div>


    </div>

</div>

    <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
        <div class=\"modal-dialog\">

            <!-- Modal content-->
            <div class=\"modal-content\">


                <div class=\"modal-header\" >
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\"><span id=\"nomEleve\">Veuillez patienter...</span></h4>
                </div>
                <div class=\"modal-body\" align=\"center\">
                    <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"modalSpinner\"></i></center>
                    <div id=\"spanModalContainer\">
                        <p align=\"center\"><h3>Groupe : <span id=\"groupeEleve\"></span></h3></p>
                        <hr class=\"hr-4\">
                        <p>
                        <span id=\"matiereTable\" style=\"margin-top: 15px\"></span>
                        </p>
                        <hr class=\"hr-4\">
                        <p>
                            <span id=\"fraisTable\" style=\"margin-top: 15px\"></span>
                        </p>





                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>

                </div>

            </div>

        </div>
    </div>




    {#  <table class=\"table-bordered\">
          <tr class=\"pricing-table-header\">
              <th></th>
          </tr>

          <tr><td>fuc</td></tr>


      </table>#}


{% endblock %}", "projetBundle:Default/Admin:listerEleve.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerEleve.html.twig");
    }
}
