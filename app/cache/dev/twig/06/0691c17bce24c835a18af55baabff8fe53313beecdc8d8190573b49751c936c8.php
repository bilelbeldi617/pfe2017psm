<?php

/* projetBundle:Default/Enseignant:insererNotesExamen.html.twig */

class __TwigTemplate_d08713fd5f4ca7b9f7d4456fa29dc4eceaba753bb065b3ce955df3e00ac1799c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "projetBundle:Default/Enseignant:insererNotesExamen.html.twig", 1);
        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_e47fb8cfb00369905a675c080caa261d1dd21764c9389f2cfa4fb8c1ceed54fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47fb8cfb00369905a675c080caa261d1dd21764c9389f2cfa4fb8c1ceed54fb->enter($__internal_e47fb8cfb00369905a675c080caa261d1dd21764c9389f2cfa4fb8c1ceed54fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 3
        echo "    <script language=\"JavaScript\">
       \$(\"document\").ready(function () {
           

           \$(\"#buttonChargerGroupes\").click(function () {
               console.log(\"hey\") ;
               console.log(\$(\"#firstForm\").serialize());
               \$.ajax({
                   url:\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chargerGroupesAJAX");
        echo "\" ,
                   method:\"GET\",
                   data:\$(\"#firstForm\").serialize(), 
                   success:function (response) {

                       response = JSON.parse(response);
                       if(response.length==0){
                           \$(\"#annee\").css(\"border-color\", \"red\");
                       }else {
                           console.log(response);
                           var myList = \"<select name='selectGroupe' id='selectGroupe' >\";

                           \$.each(response, function (i, item) {

                               myList += \"<option value='\"+item.groupe.id+\"|\"+item.matiere.id+\"'>\" + item.groupe.nom_groupe + \" \" + item.groupe.num_groupe + \" \" + item.matiere.libelle_matiere + \"</option>\";

                           });
                           myList += \"</select>\";
                           myList+=\"<select id='trimestre' name='trimestre' style='margin-left: 15px'><option value='1'>Trimèstre 1 </option><option value='2'>Trimèstre 2 </option><option value='3'>Trimèstre 3 </option></select>\" ;
                           \$(\"#secondForm\").html(myList);
                           \$(\"#chargerClasseBtn\").fadeIn();
                           \$(\"#buttonChargerGroupes\").attr(\"disabled\", \"disabled\");
                       }
                   }
               });


           });
           \$(\"#chargerClasseBtn\").click(function () {
               \$.ajax({
                   url:\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerEleveParIDGroupeAJAX");
        echo "\",
                   data:\$(\"#secondForm\").serialize(),
                   method:\"GET\",
                   success:function(response){
                       response = JSON.parse(response);
                     if(response.length==0){
                         var alert = \"<div class='alert alert-warning'>Le groupe sélectionné est vide !</div>\";

                         \$(\"#noteSheetContainer\").html(alert);
                         \$(\"#noteSheetContainer\").slideDown();

                     }else {

                         console.log(response);

                         var tableau = \"<table border='1' style='margin-top: 25px' class='table table-responsive table-bordered' id='eleves'>\" +
                             \"<tr class='table-header'><td>Elève</td><td>Note 1</td><td>Note 2</td><td>Note 3</td></tr>\";
                         \$.each(response, function (i, item) {
                             var ligne = \"<tr class='line-height-0'><td>\" + item.nom_eleve + \" \" + item.prenom_eleve + \"</td>\" +
                                 \"<td><input type='text' name='note\" + item.id + \"1'></td><td><input type='text' name='note\" + item.id + \"2'></td><td><input type='text' name='note\" + item.id + \"3'></td></tr>\";
                             tableau += ligne;
                         });
                         tableau += \"</table>\";
                         \$(\"#noteSheetContainer\").html(tableau);
                         \$(\"#saveData\").fadeIn(\"fast\");
                         \$(\"#noteSheetContainer\").slideDown();
                     }
                   }
               });

           });
           \$(\"#saveData\").click(function () {
               \$.ajax({
                   method:\"GET\",
                   url:\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("insererNotesAJAX");
        echo "?\"+\$('#thirdForm').serialize()+\"&anneeScolaire=\"+\$(\"#annee\").val()+\"&idEnseignant=\"+\$(\"#idEnseignant\").val()+\"&idMatiere=\"+\$(\"#selectGroupe\").val()+\"&trimestre=\"+\$(\"#trimestre\").val(),
                   success:function (response) {
                   if(response.status==\"inserted\") {
                       var alert = \"<div class='alert alert-success'>Insertion effectuer avec succees !</div>\";
                       \$(\"#saveData\").fadeOut();
                       \$(\"#noteSheetContainer\").html(alert);
                   }else{
                       var alert = \"<div class='alert alert-danger'>Problème d'insertion !</div>\";
                       \$(\"#saveData\").fadeOut();
                       \$(\"#noteSheetContainer\").html(alert);
                   }

               }
               });

           });
       });

    </script>
    ";

        $__internal_e47fb8cfb00369905a675c080caa261d1dd21764c9389f2cfa4fb8c1ceed54fb->leave($__internal_e47fb8cfb00369905a675c080caa261d1dd21764c9389f2cfa4fb8c1ceed54fb_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_f55cb37a06a73085d9cd267f44efcf80adff1bf2384488fd0ca50f86146ef172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f55cb37a06a73085d9cd267f44efcf80adff1bf2384488fd0ca50f86146ef172->enter($__internal_f55cb37a06a73085d9cd267f44efcf80adff1bf2384488fd0ca50f86146ef172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 96
        echo "    Insérer notes
";

        $__internal_f55cb37a06a73085d9cd267f44efcf80adff1bf2384488fd0ca50f86146ef172->leave($__internal_f55cb37a06a73085d9cd267f44efcf80adff1bf2384488fd0ca50f86146ef172_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_a9c2a470e563c9f355109268659af3cbed41254d8de849fe2769e9bd9d452a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c2a470e563c9f355109268659af3cbed41254d8de849fe2769e9bd9d452a24->enter($__internal_a9c2a470e563c9f355109268659af3cbed41254d8de849fe2769e9bd9d452a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 99
        echo "
    <div class=\"hr-4\">
        <hr class=\"hr-6\">
        <form id=\"firstForm\">
            <input type=\"hidden\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "id", array()), "html", null, true);
        echo "\" name=\"idEnseignant\" id=\"idEnseignant\">
        <div class=\"col-xs-12\" align=\"center\">
          <div class=\"col-xs-12\" align=\"center\">

              <select name=\"annee\" id=\"annee\">
                  <option>Année Scolaire</option>
           ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAnnees"]) ? $context["listAnnees"] : $this->getContext($context, "listAnnees")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 110
            echo "             <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "periode", array()), "html", null, true);
            echo "</option>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "              </select>

          </div>
        </div>
        <div align=\"center\" class=\"col-xs-12\" style=\"margin-top:25px\">
            <input type=\"button\" value=\"Charger les groupes\" class=\"btn btn-primary\" id=\"buttonChargerGroupes\">
        </div>
        </form>
        <div class=\"col-xs-12\" align=\"center\" style=\"margin-top:25px\">
            <form id=\"secondForm\">

            </form>
            <input type='button' style='margin-left:10px;margin-top:25px; display: none' value='Charger la classe' class='btn btn-primary' id='chargerClasseBtn'>
        </div>
        <hr class=\"hr-6\">

        <form id=\"thirdForm\">


        <div align=\"center\" class=\"col-xs-12\" style=\"margin-top:25px; display: none\" id=\"noteSheetContainer\" >

        </div>
        </form>
        <div class=\"col-xs-12\" align=\"center\">
        <input value=\"Enregistrer\" id=\"saveData\" type=\"button\" class=\"btn btn-primary\" style=\"display: none\">
        </div>
        </div>
    </div>


";

        $__internal_a9c2a470e563c9f355109268659af3cbed41254d8de849fe2769e9bd9d452a24->leave($__internal_a9c2a470e563c9f355109268659af3cbed41254d8de849fe2769e9bd9d452a24_prof);

    }

    // line 95

    public function isTraitable()
    {
        return false;
    }

    // line 98

    public function getDebugInfo()
    {
        return array(199 => 112, 188 => 110, 184 => 109, 175 => 103, 169 => 99, 163 => 98, 155 => 96, 149 => 95, 122 => 75, 85 => 41, 52 => 11, 42 => 3, 36 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForEnseignant.html.twig\" %}
{% block script %}
    <script language=\"JavaScript\">
       \$(\"document\").ready(function () {
           

           \$(\"#buttonChargerGroupes\").click(function () {
               console.log(\"hey\") ;
               console.log(\$(\"#firstForm\").serialize());
               \$.ajax({
                   url:\"{{ path('chargerGroupesAJAX') }}\" ,
                   method:\"GET\",
                   data:\$(\"#firstForm\").serialize(), 
                   success:function (response) {

                       response = JSON.parse(response);
                       if(response.length==0){
                           \$(\"#annee\").css(\"border-color\", \"red\");
                       }else {
                           console.log(response);
                           var myList = \"<select name='selectGroupe' id='selectGroupe' >\";

                           \$.each(response, function (i, item) {

                               myList += \"<option value='\"+item.groupe.id+\"|\"+item.matiere.id+\"'>\" + item.groupe.nom_groupe + \" \" + item.groupe.num_groupe + \" \" + item.matiere.libelle_matiere + \"</option>\";

                           });
                           myList += \"</select>\";
                           myList+=\"<select id='trimestre' name='trimestre' style='margin-left: 15px'><option value='1'>Trimèstre 1 </option><option value='2'>Trimèstre 2 </option><option value='3'>Trimèstre 3 </option></select>\" ;
                           \$(\"#secondForm\").html(myList);
                           \$(\"#chargerClasseBtn\").fadeIn();
                           \$(\"#buttonChargerGroupes\").attr(\"disabled\", \"disabled\");
                       }
                   }
               });


           });
           \$(\"#chargerClasseBtn\").click(function () {
               \$.ajax({
                   url:\"{{ path('listerEleveParIDGroupeAJAX') }}\",
                   data:\$(\"#secondForm\").serialize(),
                   method:\"GET\",
                   success:function(response){
                       response = JSON.parse(response);
                     if(response.length==0){
                         var alert = \"<div class='alert alert-warning'>Le groupe sélectionné est vide !</div>\";

                         \$(\"#noteSheetContainer\").html(alert);
                         \$(\"#noteSheetContainer\").slideDown();

                     }else {

                         console.log(response);

                         var tableau = \"<table border='1' style='margin-top: 25px' class='table table-responsive table-bordered' id='eleves'>\" +
                             \"<tr class='table-header'><td>Elève</td><td>Note 1</td><td>Note 2</td><td>Note 3</td></tr>\";
                         \$.each(response, function (i, item) {
                             var ligne = \"<tr class='line-height-0'><td>\" + item.nom_eleve + \" \" + item.prenom_eleve + \"</td>\" +
                                 \"<td><input type='text' name='note\" + item.id + \"1'></td><td><input type='text' name='note\" + item.id + \"2'></td><td><input type='text' name='note\" + item.id + \"3'></td></tr>\";
                             tableau += ligne;
                         });
                         tableau += \"</table>\";
                         \$(\"#noteSheetContainer\").html(tableau);
                         \$(\"#saveData\").fadeIn(\"fast\");
                         \$(\"#noteSheetContainer\").slideDown();
                     }
                   }
               });

           });
           \$(\"#saveData\").click(function () {
               \$.ajax({
                   method:\"GET\",
                   url:\"{{ path('insererNotesAJAX') }}?\"+\$('#thirdForm').serialize()+\"&anneeScolaire=\"+\$(\"#annee\").val()+\"&idEnseignant=\"+\$(\"#idEnseignant\").val()+\"&idMatiere=\"+\$(\"#selectGroupe\").val()+\"&trimestre=\"+\$(\"#trimestre\").val(),
                   success:function (response) {
                   if(response.status==\"inserted\") {
                       var alert = \"<div class='alert alert-success'>Insertion effectuer avec succees !</div>\";
                       \$(\"#saveData\").fadeOut();
                       \$(\"#noteSheetContainer\").html(alert);
                   }else{
                       var alert = \"<div class='alert alert-danger'>Problème d'insertion !</div>\";
                       \$(\"#saveData\").fadeOut();
                       \$(\"#noteSheetContainer\").html(alert);
                   }

               }
               });

           });
       });

    </script>
    {% endblock %}
{% block title %}
    Insérer notes
{% endblock %}
{% block mainContent %}

    <div class=\"hr-4\">
        <hr class=\"hr-6\">
        <form id=\"firstForm\">
            <input type=\"hidden\" value=\"{{ app.session.get(\"user\").id }}\" name=\"idEnseignant\" id=\"idEnseignant\">
        <div class=\"col-xs-12\" align=\"center\">
          <div class=\"col-xs-12\" align=\"center\">

              <select name=\"annee\" id=\"annee\">
                  <option>Année Scolaire</option>
           {% for a in listAnnees %}
             <option value=\"{{ a.id }}\">{{ a.periode }}</option>
               {% endfor %}
              </select>

          </div>
        </div>
        <div align=\"center\" class=\"col-xs-12\" style=\"margin-top:25px\">
            <input type=\"button\" value=\"Charger les groupes\" class=\"btn btn-primary\" id=\"buttonChargerGroupes\">
        </div>
        </form>
        <div class=\"col-xs-12\" align=\"center\" style=\"margin-top:25px\">
            <form id=\"secondForm\">

            </form>
            <input type='button' style='margin-left:10px;margin-top:25px; display: none' value='Charger la classe' class='btn btn-primary' id='chargerClasseBtn'>
        </div>
        <hr class=\"hr-6\">

        <form id=\"thirdForm\">


        <div align=\"center\" class=\"col-xs-12\" style=\"margin-top:25px; display: none\" id=\"noteSheetContainer\" >

        </div>
        </form>
        <div class=\"col-xs-12\" align=\"center\">
        <input value=\"Enregistrer\" id=\"saveData\" type=\"button\" class=\"btn btn-primary\" style=\"display: none\">
        </div>
        </div>
    </div>


{% endblock %}", "projetBundle:Default/Enseignant:insererNotesExamen.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/insererNotesExamen.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cf0830504dc13e990dbcd3dbc28ec80036c2dcce8c1f8a9201b249b242a3331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf0830504dc13e990dbcd3dbc28ec80036c2dcce8c1f8a9201b249b242a3331->enter($__internal_7cf0830504dc13e990dbcd3dbc28ec80036c2dcce8c1f8a9201b249b242a3331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:insererNotesExamen.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_7cf0830504dc13e990dbcd3dbc28ec80036c2dcce8c1f8a9201b249b242a3331->leave($__internal_7cf0830504dc13e990dbcd3dbc28ec80036c2dcce8c1f8a9201b249b242a3331_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:insererNotesExamen.html.twig";
    }
}
