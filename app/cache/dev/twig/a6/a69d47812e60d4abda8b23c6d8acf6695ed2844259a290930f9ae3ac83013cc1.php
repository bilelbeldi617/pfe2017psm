<?php

/* @projet/Default/Admin/payer.html.twig */
class __TwigTemplate_7d2264a97707684a7c8e417c3bab82b11521f677fed5333cd8ab21ffdf3a131f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "@projet/Default/Admin/payer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42893a59a68da91beba7ece3b921db0f24d3291f79730993b4efbd572f1e699f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42893a59a68da91beba7ece3b921db0f24d3291f79730993b4efbd572f1e699f->enter($__internal_42893a59a68da91beba7ece3b921db0f24d3291f79730993b4efbd572f1e699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/payer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42893a59a68da91beba7ece3b921db0f24d3291f79730993b4efbd572f1e699f->leave($__internal_42893a59a68da91beba7ece3b921db0f24d3291f79730993b4efbd572f1e699f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e38df255f2f23ae9e9f9b2190e4c5c070cc13f56c0242b6f27e306fe4e9404c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e38df255f2f23ae9e9f9b2190e4c5c070cc13f56c0242b6f27e306fe4e9404c->enter($__internal_9e38df255f2f23ae9e9f9b2190e4c5c070cc13f56c0242b6f27e306fe4e9404c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Payer frais
";
        
        $__internal_9e38df255f2f23ae9e9f9b2190e4c5c070cc13f56c0242b6f27e306fe4e9404c->leave($__internal_9e38df255f2f23ae9e9f9b2190e4c5c070cc13f56c0242b6f27e306fe4e9404c_prof);

    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
        $__internal_cd0103a8278a9c4965aa4e4eb7ce121fd7b9e121be8ecb631f4aa740fc910c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0103a8278a9c4965aa4e4eb7ce121fd7b9e121be8ecb631f4aa740fc910c03->enter($__internal_cd0103a8278a9c4965aa4e4eb7ce121fd7b9e121be8ecb631f4aa740fc910c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 8
        echo "    <script language=\"JavaScript\">
        function show(){
            \$(\"#paiement\").slideDown();
            \$(\"#submitContainer\").slideDown();
        }

        function show2(){
            \$(\"#paiement2\").slideDown();

        }
        \$(\"document\").ready(function(){

            \$(\"#numChequeTot\").blur(function(){
                \$(\"#submitTotContainer\").slideDown();
            });

            \$(\"#payerTotForm\").submit(function(){
                console.log( \$(\"#payerTotForm\").serialize());
                \$.ajax({
                    url: \"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPaiementTot");
        echo "\"+\"?idTranche=\"+\$(\"#idTranche\").val(),
                    method: \"GET\",
                    data : \$(\"#payerTotForm\").serialize(),
                    success: function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Payé avec success!!</div>\";
                        \$(\"#messageContainer\").html(message);
                        setTimeout(function () {

                            window.location.assign(\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulterPaiements");
        echo "\"+\"?idParent=\"+";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paiement"]) ? $context["paiement"] : $this->getContext($context, "paiement")), "eleve", array()), "parent", array()), "id", array()), "html", null, true);
        echo ");
                        }, 1500);
                    }
                });
            });



            \$(\"#formPayer\").submit(function(){
                console.log( \$(\"#formPayer\").serialize());
                \$.ajax({
                   url: \"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterPaiement");
        echo "\"+\"?idTranche=\"+\$(\"#idTranche\").val(),
                    method: \"GET\",
                    data : \$(\"#formPayer\").serialize(),
                    success: function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Payé avec success!!</div>\";
                        \$(\"#messageContainer\").html(message);
                        setTimeout(function () {

                            window.location.assign(\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulterPaiements");
        echo "\"+\"?idParent=\"+";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["paiement"]) ? $context["paiement"] : $this->getContext($context, "paiement")), "eleve", array()), "parent", array()), "id", array()), "html", null, true);
        echo ");
                        }, 1500);
                    }
                });
            });

            \$(\"#typePaiementTot\").change(function(){
                if(\$(\"#typePaiementTot\").val() == \"null\"){
                    var message = \"<div class='alert alert-danger'>SVP choisir!</div>\";
                    \$(\"#payerVirementContainer\").fadeOut();
                    \$(\"#payerEspeceContainer\").fadeOut();
                    \$(\"#payerChequeContainer\").fadeOut();
                    \$(\"#formPayer\")[0].reset();
                    \$(\"#messageContainer\").html(message);
                }else{
                    if(\$(\"#typePaiementTot\").val() == \"virement\"){
                        console.log(\"virement\");
                        \$(\"#payerEspeceTotContainer\").fadeOut();
                        \$(\"#payerChequeTotContainer\").fadeOut();
                        \$(\"#payerVirementTotContainer\").slideDown();

                    }else{
                        if(\$(\"#typePaiementTot\").val() == \"espece\"){
                            \$(\"#payerEspeceTotContainer\").slideDown();
                            \$(\"#payerChequeTotContainer\").fadeOut();
                            \$(\"#payerVirementTotContainer\").fadeOut();

                        }else{
                            \$(\"#payerEspeceTotContainer\").fadeOut();
                            \$(\"#payerChequeTotContainer\").slideDown();
                            \$(\"#payerVirementTotContainer\").fadeOut();

                        }

                    }
                }
            });

            \$(\"#typePaiement2\").change(function(){
                if(\$(\"#typePaiement2\").val() == \"null\"){
                    var message = \"<div class='alert alert-danger'>SVP choisir!</div>\";
                    \$(\"#payerVirementContainer\").fadeOut();
                    \$(\"#payerEspeceContainer\").fadeOut();
                    \$(\"#payerChequeContainer\").fadeOut();
                    \$(\"#formPayer\")[0].reset();
                    \$(\"#messageContainer\").html(message);
                }else{
                    if(\$(\"#typePaiement2\").val() == \"virement\"){
                        \$(\"#payerEspeceContainer\").fadeOut();
                        \$(\"#payerChequeContainer\").fadeOut();
                        \$(\"#payerVirementContainer\").slideDown();

                    }else{
                        if(\$(\"#typePaiement2\").val() == \"espece\"){
                            \$(\"#payerEspeceContainer\").slideDown();
                            \$(\"#payerChequeContainer\").fadeOut();
                            \$(\"#payerVirementContainer\").fadeOut();

                        }else{
                            \$(\"#payerEspeceContainer\").fadeOut();
                            \$(\"#payerChequeContainer\").slideDown();
                            \$(\"#payerVirementContainer\").fadeOut();

                        }

                    }
                }
            });





           \$(\"#typePaiement\").change(function(){
               \$(\"#messageContainer\").html(\"\");
                if(\$(\"#typePaiement\").val() == \"null\"){
                    var message = \"<div class='alert alert-danger'>SVP choisir!</div>\";
                    \$(\"#payerTranchesContainer\").fadeOut();
                    \$(\"#payerTotaliteContainer\").fadeOut();
                    \$(\"#messageContainer\").html(message);
                }else{
                    if(\$(\"#typePaiement\").val() == \"totalite\"){
                        \$(\"#payerTranchesContainer\").fadeOut();

                        \$.ajax({
                           url: \"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterTranches");
        echo "\",
                            method: \"GET\",
                            data: {\"idPaiement\" : \$(\"#idPaiementHidden\").val(), \"typePaiement\" : \$(\"#typePaiement\").val()},
                            success : function(response){
                                response = JSON.parse(response);
                                console.log(response);
                                if(response.status == \"mawjoud\") {
                                    var tranche = \"<input type='text' value='\" + response.tranche[0].id + \"' id='idTranche'>\";
                                    \$(\"#trancheContainer\").html(tranche);
                                    var tableau = \"<table class='table table-bordered'><tr class='table-header'><td>N° Tranche</td><td>Montant Tranche</td><td>Etat</td><td>Payer</td></tr>\";
                                    tableau += \"<tr><td>\" + response.tranche[0].numero_tranche + \"</td><td>\" + response.tranche[0].montant_tranche + \"</td><td>\" + response.tranche[0].etat_tranche + \"</td>\";
                                    if (response.tranche[0].etat_tranche == \"non payé\") {
                                        tableau += \"<td><input type='button' value='payer' onclick='show2()' class='btn btn-primary'></td></tr>\";
                                    } else {
                                        tableau += \"<td>Payé</td>\";
                                    }
                                }else{
                                    var tranche = \"<input type='text' value='\" + response.tranches.id + \"' id='idTranche'>\";
                                    \$(\"#trancheContainer\").html(tranche);
                                    var tableau = \"<table class='table table-bordered'><tr class='table-header'><td>N° Tranche</td><td>Montant Tranche</td><td>Etat</td><td>Payer</td></tr>\";
                                    tableau += \"<tr><td>\" + response.tranches.numero_tranche + \"</td><td>\" + response.tranches.montant_tranche + \"</td><td>\" + response.tranches.etat_tranche + \"</td>\";
                                    if (response.tranches.etat_tranche == \"non payé\") {
                                        tableau += \"<td><input type='button' value='payer' onclick='show2()' class='btn btn-primary'></td></tr>\";
                                    } else {
                                        tableau += \"<td>Payé</td>\";
                                    }
                                }
                                tableau +=\"</table>\";
                                \$(\"#tableauTrancheContainer\").html(tableau);

                            }
                        });

                        \$(\"#payerTotaliteContainer\").slideDown();
                    }else{
                        \$(\"#payerTotaliteContainer\").fadeOut();
                        \$.ajax({
                           url: \"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterTranches");
        echo "\",
                            method: \"GET\",
                            data :{\"idPaiement\" : \$(\"#idPaiementHidden\").val(), \"typePaiement\" : \$(\"#typePaiement\").val()} ,
                            success : function(response){
                                response = JSON.parse(response);
                                console.log(response);
                                var tableau = \"<table class='table table-bordered'><tr class='table-header'><td>N° Tranche</td><td>Montant Tranche</td><td>Etat</td><td>Payer</td></tr>\";
                                var tranche = \"\";
                                \$.each(response.listTranches, function(i, item){
                                    tranche = \"<input type='text' value='\"+item.id+\"' id='idTranche'>\";
                                   tableau +=\"<tr><td>\"+item.numero_tranche+\"</td><td>\"+item.montant_tranche+\"</td><td>\"+item.etat_tranche+\"</td>\";
                                    if(item.etat_tranche == \"non payé\"){
                                        tableau +=\"<td><input type='button' value='payer' onclick='show()' class='btn btn-primary'></td></tr>\";
                                    }else{
                                        tableau += \"<td>Payé</td>\";
                                    }
                                });

                                tableau += \"</table>\";

                                \$(\"#tableauTranchesContainer\").html(tableau);
                                \$(\"#trancheContainer\").html(tranche);
                            }

                        });
                        \$(\"#payerTranchesContainer\").slideDown();

                    }
                }
           }) ;


        });
    </script>
";
        
        $__internal_cd0103a8278a9c4965aa4e4eb7ce121fd7b9e121be8ecb631f4aa740fc910c03->leave($__internal_cd0103a8278a9c4965aa4e4eb7ce121fd7b9e121be8ecb631f4aa740fc910c03_prof);

    }

    // line 216
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_525e885031bd0852358bc4ed3343fe8cfb850c9d594e86a9d61115037d124be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525e885031bd0852358bc4ed3343fe8cfb850c9d594e86a9d61115037d124be4->enter($__internal_525e885031bd0852358bc4ed3343fe8cfb850c9d594e86a9d61115037d124be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 217
        echo "
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div id=\"messageContainer\">

        </div>
        <center><h4>Frais : ";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paiement"]) ? $context["paiement"] : $this->getContext($context, "paiement")), "fraisPaiement", array()), "html", null, true);
        echo ", Montant : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paiement"]) ? $context["paiement"] : $this->getContext($context, "paiement")), "totalePaiement", array()), "html", null, true);
        echo ", pour l'eleve : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paiement"]) ? $context["paiement"] : $this->getContext($context, "paiement")), "eleve", array()), "prenomEleve", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["paiement"]) ? $context["paiement"] : $this->getContext($context, "paiement")), "eleve", array()), "nomEleve", array()), "html", null, true);
        echo "</h4></center>
        <div class=\"row\" align=\"center\">

                <div id=\"trancheContainer\" style=\"display: none\">

                </div>
                <input type=\"text\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paiement"]) ? $context["paiement"] : $this->getContext($context, "paiement")), "id", array()), "html", null, true);
        echo "\" style=\"display: none\" id=\"idPaiementHidden\">
            Payer : <select id=\"typePaiement\" name=\"idPaiement\">
                <option value=\"null\">Choisir</option>
                ";
        // line 232
        if (array_key_exists("typePaiement", $context)) {
            // line 233
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["typePaiement"]) ? $context["typePaiement"] : $this->getContext($context, "typePaiement")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["typePaiement"]) ? $context["typePaiement"] : $this->getContext($context, "typePaiement")), "html", null, true);
            echo "</option>
                    ";
        } else {
            // line 235
            echo "                <option value=\"totalite\">La totalité</option>
                <option value=\"tranches\">Par tranches</option>
                        ";
        }
        // line 238
        echo "            </select>
                <div id=\"payerTranchesContainer\" style=\"display: none\">
                    <center><h4>Paiement par tranches</h4></center>
                    <form name=\"formPayer\" id=\"formPayer\" onsubmit=\"return false\" action=\"#\">
                    <div id=\"tableauTranchesContainer\">

                    </div>
                    <div id=\"paiement\" style=\"display: none\" align=\"center\">
                        <center><h4>Type Paiement</h4></center>
                        <select name=\"typePaiement2\" id=\"typePaiement2\">
                            <option value=\"null\"> Choisir</option>
                            <option value=\"virement\">Virement bancaire</option>
                            <option value=\"espece\">Espèce</option>
                            <option value=\"cheque\">Par chèque</option>
                        </select>
                    </div>

                    <div id=\"payerVirementContainer\" style=\"display: none\" align=\"center\">
                        <center><h4>Payer par virement bancaire</h4></center>
                        <table class=\"table table-bordered\" border=\"1\" width=\"50%\">
                            <tr>
                                <td width=\"50%\">Upload</td>
                                <td width=\"50%\"><input type=\"file\" name=\"fichierVirement\"> </td>
                            </tr>
                        </table>
                    </div>

                    <div id=\"payerEspeceContainer\" style=\"display: none\">
                        <center><h4>Payer en espèce</h4></center>
                    </div>

                    <div id=\"payerChequeContainer\" style=\"display: none\">
                        <center><h4>Payer par cheque</h4></center>
                        <table class=\"table table-bordered\" border=\"1\">
                            <tr>
                                <td>Nom banque</td>
                                <td><input type=\"text\" name=\"nomBanque\"></td>
                            </tr>
                            <tr>
                                <td>N° chèque</td>
                                <td><input type=\"text\" name=\"numCheque\"></td>
                            </tr>
                        </table>
                    </div>
                        <div id=\"submitContainer\" style=\"display: none\">
                            <input type=\"submit\">
                        </div>
                    </form>

                </div>

                <div id=\"payerTotaliteContainer\" style=\"display: none\">
                    <form name=\"payerTotForm\" id=\"payerTotForm\" action=\"#\" onsubmit=\"return false\">
                    <div id=\"tableauTrancheContainer\">

                    </div>
                    <div id=\"paiement2\" style=\"display: none\" align=\"center\">
                        <center><h4>Type Paiement</h4></center>
                        <select name=\"typePaiementTot\" id=\"typePaiementTot\">
                            <option value=\"null\"> Choisir</option>


                            <option value=\"virement\">Virement bancaire</option>
                            <option value=\"espece\">Espèce</option>
                            <option value=\"cheque\">Par chèque</option>

                        </select>
                    </div>

                    <div id=\"payerVirementTotContainer\" style=\"display: none\" align=\"center\">
                        <center><h4>Payer par virement bancaire</h4></center>
                        <table class=\"table table-bordered\" border=\"1\" width=\"50%\">
                            <tr>
                                <td width=\"50%\">Upload</td>
                                <td width=\"50%\"><input type=\"file\" name=\"fichierVirementTot\"> </td>
                            </tr>
                        </table>
                    </div>

                    <div id=\"payerEspeceTotContainer\" style=\"display: none\">
                        <center><h4>Payer en espèce</h4></center>
                        <input type=\"submit\">
                    </div>

                    <div id=\"payerChequeTotContainer\" style=\"display: none\">
                        <center><h4>Payer par cheque</h4></center>
                        <table class=\"table table-bordered\" border=\"1\">
                            <tr>
                                <td>Nom banque</td>
                                <td><input type=\"text\" name=\"nomBanqueTot\"></td>
                            </tr>
                            <tr>
                                <td>N° chèque</td>
                                <td><input type=\"text\" name=\"numChequeTot\" id=\"numChequeTot\"></td>
                            </tr>
                        </table>
                    </div>
                        <div id=\"submitTotContainer\" style=\"display: none\">
                            <input type=\"submit\">
                        </div>
                    </form>
                </div>


        </div>
    </div>
";
        
        $__internal_525e885031bd0852358bc4ed3343fe8cfb850c9d594e86a9d61115037d124be4->leave($__internal_525e885031bd0852358bc4ed3343fe8cfb850c9d594e86a9d61115037d124be4_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/payer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 238,  336 => 235,  328 => 233,  326 => 232,  320 => 229,  305 => 223,  297 => 217,  291 => 216,  249 => 180,  209 => 143,  119 => 58,  106 => 48,  90 => 37,  77 => 27,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForAdmin.html.twig\" %}

{% block title %}
    Payer frais
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        function show(){
            \$(\"#paiement\").slideDown();
            \$(\"#submitContainer\").slideDown();
        }

        function show2(){
            \$(\"#paiement2\").slideDown();

        }
        \$(\"document\").ready(function(){

            \$(\"#numChequeTot\").blur(function(){
                \$(\"#submitTotContainer\").slideDown();
            });

            \$(\"#payerTotForm\").submit(function(){
                console.log( \$(\"#payerTotForm\").serialize());
                \$.ajax({
                    url: \"{{ path('ajouterPaiementTot') }}\"+\"?idTranche=\"+\$(\"#idTranche\").val(),
                    method: \"GET\",
                    data : \$(\"#payerTotForm\").serialize(),
                    success: function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Payé avec success!!</div>\";
                        \$(\"#messageContainer\").html(message);
                        setTimeout(function () {

                            window.location.assign(\"{{ path('consulterPaiements') }}\"+\"?idParent=\"+{{ paiement.eleve.parent.id }});
                        }, 1500);
                    }
                });
            });



            \$(\"#formPayer\").submit(function(){
                console.log( \$(\"#formPayer\").serialize());
                \$.ajax({
                   url: \"{{ path('ajouterPaiement') }}\"+\"?idTranche=\"+\$(\"#idTranche\").val(),
                    method: \"GET\",
                    data : \$(\"#formPayer\").serialize(),
                    success: function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Payé avec success!!</div>\";
                        \$(\"#messageContainer\").html(message);
                        setTimeout(function () {

                            window.location.assign(\"{{ path('consulterPaiements') }}\"+\"?idParent=\"+{{ paiement.eleve.parent.id }});
                        }, 1500);
                    }
                });
            });

            \$(\"#typePaiementTot\").change(function(){
                if(\$(\"#typePaiementTot\").val() == \"null\"){
                    var message = \"<div class='alert alert-danger'>SVP choisir!</div>\";
                    \$(\"#payerVirementContainer\").fadeOut();
                    \$(\"#payerEspeceContainer\").fadeOut();
                    \$(\"#payerChequeContainer\").fadeOut();
                    \$(\"#formPayer\")[0].reset();
                    \$(\"#messageContainer\").html(message);
                }else{
                    if(\$(\"#typePaiementTot\").val() == \"virement\"){
                        console.log(\"virement\");
                        \$(\"#payerEspeceTotContainer\").fadeOut();
                        \$(\"#payerChequeTotContainer\").fadeOut();
                        \$(\"#payerVirementTotContainer\").slideDown();

                    }else{
                        if(\$(\"#typePaiementTot\").val() == \"espece\"){
                            \$(\"#payerEspeceTotContainer\").slideDown();
                            \$(\"#payerChequeTotContainer\").fadeOut();
                            \$(\"#payerVirementTotContainer\").fadeOut();

                        }else{
                            \$(\"#payerEspeceTotContainer\").fadeOut();
                            \$(\"#payerChequeTotContainer\").slideDown();
                            \$(\"#payerVirementTotContainer\").fadeOut();

                        }

                    }
                }
            });

            \$(\"#typePaiement2\").change(function(){
                if(\$(\"#typePaiement2\").val() == \"null\"){
                    var message = \"<div class='alert alert-danger'>SVP choisir!</div>\";
                    \$(\"#payerVirementContainer\").fadeOut();
                    \$(\"#payerEspeceContainer\").fadeOut();
                    \$(\"#payerChequeContainer\").fadeOut();
                    \$(\"#formPayer\")[0].reset();
                    \$(\"#messageContainer\").html(message);
                }else{
                    if(\$(\"#typePaiement2\").val() == \"virement\"){
                        \$(\"#payerEspeceContainer\").fadeOut();
                        \$(\"#payerChequeContainer\").fadeOut();
                        \$(\"#payerVirementContainer\").slideDown();

                    }else{
                        if(\$(\"#typePaiement2\").val() == \"espece\"){
                            \$(\"#payerEspeceContainer\").slideDown();
                            \$(\"#payerChequeContainer\").fadeOut();
                            \$(\"#payerVirementContainer\").fadeOut();

                        }else{
                            \$(\"#payerEspeceContainer\").fadeOut();
                            \$(\"#payerChequeContainer\").slideDown();
                            \$(\"#payerVirementContainer\").fadeOut();

                        }

                    }
                }
            });





           \$(\"#typePaiement\").change(function(){
               \$(\"#messageContainer\").html(\"\");
                if(\$(\"#typePaiement\").val() == \"null\"){
                    var message = \"<div class='alert alert-danger'>SVP choisir!</div>\";
                    \$(\"#payerTranchesContainer\").fadeOut();
                    \$(\"#payerTotaliteContainer\").fadeOut();
                    \$(\"#messageContainer\").html(message);
                }else{
                    if(\$(\"#typePaiement\").val() == \"totalite\"){
                        \$(\"#payerTranchesContainer\").fadeOut();

                        \$.ajax({
                           url: \"{{ path('ajouterTranches') }}\",
                            method: \"GET\",
                            data: {\"idPaiement\" : \$(\"#idPaiementHidden\").val(), \"typePaiement\" : \$(\"#typePaiement\").val()},
                            success : function(response){
                                response = JSON.parse(response);
                                console.log(response);
                                if(response.status == \"mawjoud\") {
                                    var tranche = \"<input type='text' value='\" + response.tranche[0].id + \"' id='idTranche'>\";
                                    \$(\"#trancheContainer\").html(tranche);
                                    var tableau = \"<table class='table table-bordered'><tr class='table-header'><td>N° Tranche</td><td>Montant Tranche</td><td>Etat</td><td>Payer</td></tr>\";
                                    tableau += \"<tr><td>\" + response.tranche[0].numero_tranche + \"</td><td>\" + response.tranche[0].montant_tranche + \"</td><td>\" + response.tranche[0].etat_tranche + \"</td>\";
                                    if (response.tranche[0].etat_tranche == \"non payé\") {
                                        tableau += \"<td><input type='button' value='payer' onclick='show2()' class='btn btn-primary'></td></tr>\";
                                    } else {
                                        tableau += \"<td>Payé</td>\";
                                    }
                                }else{
                                    var tranche = \"<input type='text' value='\" + response.tranches.id + \"' id='idTranche'>\";
                                    \$(\"#trancheContainer\").html(tranche);
                                    var tableau = \"<table class='table table-bordered'><tr class='table-header'><td>N° Tranche</td><td>Montant Tranche</td><td>Etat</td><td>Payer</td></tr>\";
                                    tableau += \"<tr><td>\" + response.tranches.numero_tranche + \"</td><td>\" + response.tranches.montant_tranche + \"</td><td>\" + response.tranches.etat_tranche + \"</td>\";
                                    if (response.tranches.etat_tranche == \"non payé\") {
                                        tableau += \"<td><input type='button' value='payer' onclick='show2()' class='btn btn-primary'></td></tr>\";
                                    } else {
                                        tableau += \"<td>Payé</td>\";
                                    }
                                }
                                tableau +=\"</table>\";
                                \$(\"#tableauTrancheContainer\").html(tableau);

                            }
                        });

                        \$(\"#payerTotaliteContainer\").slideDown();
                    }else{
                        \$(\"#payerTotaliteContainer\").fadeOut();
                        \$.ajax({
                           url: \"{{ path('ajouterTranches') }}\",
                            method: \"GET\",
                            data :{\"idPaiement\" : \$(\"#idPaiementHidden\").val(), \"typePaiement\" : \$(\"#typePaiement\").val()} ,
                            success : function(response){
                                response = JSON.parse(response);
                                console.log(response);
                                var tableau = \"<table class='table table-bordered'><tr class='table-header'><td>N° Tranche</td><td>Montant Tranche</td><td>Etat</td><td>Payer</td></tr>\";
                                var tranche = \"\";
                                \$.each(response.listTranches, function(i, item){
                                    tranche = \"<input type='text' value='\"+item.id+\"' id='idTranche'>\";
                                   tableau +=\"<tr><td>\"+item.numero_tranche+\"</td><td>\"+item.montant_tranche+\"</td><td>\"+item.etat_tranche+\"</td>\";
                                    if(item.etat_tranche == \"non payé\"){
                                        tableau +=\"<td><input type='button' value='payer' onclick='show()' class='btn btn-primary'></td></tr>\";
                                    }else{
                                        tableau += \"<td>Payé</td>\";
                                    }
                                });

                                tableau += \"</table>\";

                                \$(\"#tableauTranchesContainer\").html(tableau);
                                \$(\"#trancheContainer\").html(tranche);
                            }

                        });
                        \$(\"#payerTranchesContainer\").slideDown();

                    }
                }
           }) ;


        });
    </script>
{% endblock %}

{% block mainContent %}

    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div id=\"messageContainer\">

        </div>
        <center><h4>Frais : {{ paiement.fraisPaiement}}, Montant : {{ paiement.totalePaiement }}, pour l'eleve : {{ paiement.eleve.prenomEleve }} {{ paiement.eleve.nomEleve }}</h4></center>
        <div class=\"row\" align=\"center\">

                <div id=\"trancheContainer\" style=\"display: none\">

                </div>
                <input type=\"text\" value=\"{{ paiement.id }}\" style=\"display: none\" id=\"idPaiementHidden\">
            Payer : <select id=\"typePaiement\" name=\"idPaiement\">
                <option value=\"null\">Choisir</option>
                {% if typePaiement is defined %}
                    <option value=\"{{ typePaiement }}\">{{ typePaiement }}</option>
                    {% else %}
                <option value=\"totalite\">La totalité</option>
                <option value=\"tranches\">Par tranches</option>
                        {% endif %}
            </select>
                <div id=\"payerTranchesContainer\" style=\"display: none\">
                    <center><h4>Paiement par tranches</h4></center>
                    <form name=\"formPayer\" id=\"formPayer\" onsubmit=\"return false\" action=\"#\">
                    <div id=\"tableauTranchesContainer\">

                    </div>
                    <div id=\"paiement\" style=\"display: none\" align=\"center\">
                        <center><h4>Type Paiement</h4></center>
                        <select name=\"typePaiement2\" id=\"typePaiement2\">
                            <option value=\"null\"> Choisir</option>
                            <option value=\"virement\">Virement bancaire</option>
                            <option value=\"espece\">Espèce</option>
                            <option value=\"cheque\">Par chèque</option>
                        </select>
                    </div>

                    <div id=\"payerVirementContainer\" style=\"display: none\" align=\"center\">
                        <center><h4>Payer par virement bancaire</h4></center>
                        <table class=\"table table-bordered\" border=\"1\" width=\"50%\">
                            <tr>
                                <td width=\"50%\">Upload</td>
                                <td width=\"50%\"><input type=\"file\" name=\"fichierVirement\"> </td>
                            </tr>
                        </table>
                    </div>

                    <div id=\"payerEspeceContainer\" style=\"display: none\">
                        <center><h4>Payer en espèce</h4></center>
                    </div>

                    <div id=\"payerChequeContainer\" style=\"display: none\">
                        <center><h4>Payer par cheque</h4></center>
                        <table class=\"table table-bordered\" border=\"1\">
                            <tr>
                                <td>Nom banque</td>
                                <td><input type=\"text\" name=\"nomBanque\"></td>
                            </tr>
                            <tr>
                                <td>N° chèque</td>
                                <td><input type=\"text\" name=\"numCheque\"></td>
                            </tr>
                        </table>
                    </div>
                        <div id=\"submitContainer\" style=\"display: none\">
                            <input type=\"submit\">
                        </div>
                    </form>

                </div>

                <div id=\"payerTotaliteContainer\" style=\"display: none\">
                    <form name=\"payerTotForm\" id=\"payerTotForm\" action=\"#\" onsubmit=\"return false\">
                    <div id=\"tableauTrancheContainer\">

                    </div>
                    <div id=\"paiement2\" style=\"display: none\" align=\"center\">
                        <center><h4>Type Paiement</h4></center>
                        <select name=\"typePaiementTot\" id=\"typePaiementTot\">
                            <option value=\"null\"> Choisir</option>


                            <option value=\"virement\">Virement bancaire</option>
                            <option value=\"espece\">Espèce</option>
                            <option value=\"cheque\">Par chèque</option>

                        </select>
                    </div>

                    <div id=\"payerVirementTotContainer\" style=\"display: none\" align=\"center\">
                        <center><h4>Payer par virement bancaire</h4></center>
                        <table class=\"table table-bordered\" border=\"1\" width=\"50%\">
                            <tr>
                                <td width=\"50%\">Upload</td>
                                <td width=\"50%\"><input type=\"file\" name=\"fichierVirementTot\"> </td>
                            </tr>
                        </table>
                    </div>

                    <div id=\"payerEspeceTotContainer\" style=\"display: none\">
                        <center><h4>Payer en espèce</h4></center>
                        <input type=\"submit\">
                    </div>

                    <div id=\"payerChequeTotContainer\" style=\"display: none\">
                        <center><h4>Payer par cheque</h4></center>
                        <table class=\"table table-bordered\" border=\"1\">
                            <tr>
                                <td>Nom banque</td>
                                <td><input type=\"text\" name=\"nomBanqueTot\"></td>
                            </tr>
                            <tr>
                                <td>N° chèque</td>
                                <td><input type=\"text\" name=\"numChequeTot\" id=\"numChequeTot\"></td>
                            </tr>
                        </table>
                    </div>
                        <div id=\"submitTotContainer\" style=\"display: none\">
                            <input type=\"submit\">
                        </div>
                    </form>
                </div>


        </div>
    </div>
{% endblock %}", "@projet/Default/Admin/payer.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\payer.html.twig");
    }
}
