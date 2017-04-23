<?php

/* projetBundle:Default/Admin:listerPersonnels.html.twig */

class __TwigTemplate_11781984c6c833a87696daea105f3a3e9dd1ef98724d73769235d47dec71899c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:listerPersonnels.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_19d799ebb1b29150f8776cfbff58d7e786e0043ca6f78354778651d430b49e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d799ebb1b29150f8776cfbff58d7e786e0043ca6f78354778651d430b49e1a->enter($__internal_19d799ebb1b29150f8776cfbff58d7e786e0043ca6f78354778651d430b49e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les personnels
    ";

        $__internal_19d799ebb1b29150f8776cfbff58d7e786e0043ca6f78354778651d430b49e1a->leave($__internal_19d799ebb1b29150f8776cfbff58d7e786e0043ca6f78354778651d430b49e1a_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_e96e0a6b71bb81256fdb564d8f9649f4b740f07bc50c4661e97f62a24ffcfc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96e0a6b71bb81256fdb564d8f9649f4b740f07bc50c4661e97f62a24ffcfc7b->enter($__internal_e96e0a6b71bb81256fdb564d8f9649f4b740f07bc50c4661e97f62a24ffcfc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_e96e0a6b71bb81256fdb564d8f9649f4b740f07bc50c4661e97f62a24ffcfc7b->leave($__internal_e96e0a6b71bb81256fdb564d8f9649f4b740f07bc50c4661e97f62a24ffcfc7b_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_93af80a471ae0fdcc26d37d0ce774cf6f91b47eb7e525eee51b19e89f879e7bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93af80a471ae0fdcc26d37d0ce774cf6f91b47eb7e525eee51b19e89f879e7bd->enter($__internal_93af80a471ae0fdcc26d37d0ce774cf6f91b47eb7e525eee51b19e89f879e7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 46
        echo "        <hr class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" align=\"center\">
                <select name=\"postesList\" id=\"postesList\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postes"]) ? $context["postes"] : $this->getContext($context, "postes")));
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

        $__internal_93af80a471ae0fdcc26d37d0ce774cf6f91b47eb7e525eee51b19e89f879e7bd->leave($__internal_93af80a471ae0fdcc26d37d0ce774cf6f91b47eb7e525eee51b19e89f879e7bd_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 45

    public function getDebugInfo()
    {
        return array(129 => 53, 118 => 51, 114 => 50, 108 => 46, 102 => 45, 69 => 18, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
        Lister les personnels
    {% endblock %}

    {% block script %}
        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
               \$(\"#btnLister\").click(function(){
                    console.log(\"click\");
                   var idPoste = \$(\"#postesList\").val();
                   var tableau = \"<table border='1' class='table table-bordered' id='personnelTable'><tr><th>Matricule</th><th>Nom</th><th>Prenom</th><th>CIN</th><th>Adresse</th><th>E-mail</th><th>NumTel</th></tr></table>\";
                   \$(\"#mySpinner\").fadeIn(\"slow\");
                   \$(\"#tableContainer\").slideUp(\"fast\");
                   \$(\"#alertVide\").slideUp(\"fast\");

                   \$.ajax({
                        url: \"{{ path('ListerPersonnelAJAX') }}\",
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
    {% endblock %}

    {% block mainContent %}
        <hr class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" align=\"center\">
                <select name=\"postesList\" id=\"postesList\">
                    {% for p in postes %}
                        <option value=\"{{ p.id }}\">{{ p.titrePoste }}</option>
                    {% endfor %}
                </select>
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
    {% endblock %}", "projetBundle:Default/Admin:listerPersonnels.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerPersonnels.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cdbcc5f6fca1308396bb6a3d95a8b9d73ed46c8079285624fd8e8549aebd64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdbcc5f6fca1308396bb6a3d95a8b9d73ed46c8079285624fd8e8549aebd64c->enter($__internal_7cdbcc5f6fca1308396bb6a3d95a8b9d73ed46c8079285624fd8e8549aebd64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerPersonnels.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_7cdbcc5f6fca1308396bb6a3d95a8b9d73ed46c8079285624fd8e8549aebd64c->leave($__internal_7cdbcc5f6fca1308396bb6a3d95a8b9d73ed46c8079285624fd8e8549aebd64c_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerPersonnels.html.twig";
    }
}
