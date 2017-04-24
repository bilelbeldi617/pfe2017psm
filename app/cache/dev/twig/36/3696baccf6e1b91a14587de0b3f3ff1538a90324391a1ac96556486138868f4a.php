<?php

/* @projet/Default/Admin/listerPersonnels.html.twig */
class __TwigTemplate_6a612bc02e098292b96aefe34d276a7ad730265aaffc775a1e513809814badcc extends Twig_Template
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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81eb8755891e06aed6a49e2bd6fe409e9baee7bd5954bb7ea0193eb60fb777b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81eb8755891e06aed6a49e2bd6fe409e9baee7bd5954bb7ea0193eb60fb777b6->enter($__internal_81eb8755891e06aed6a49e2bd6fe409e9baee7bd5954bb7ea0193eb60fb777b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerPersonnels.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81eb8755891e06aed6a49e2bd6fe409e9baee7bd5954bb7ea0193eb60fb777b6->leave($__internal_81eb8755891e06aed6a49e2bd6fe409e9baee7bd5954bb7ea0193eb60fb777b6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_402c5c5df355c604e57aca5bb2241c9e7f9ad2fb28b6058b3faf280f836a13de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402c5c5df355c604e57aca5bb2241c9e7f9ad2fb28b6058b3faf280f836a13de->enter($__internal_402c5c5df355c604e57aca5bb2241c9e7f9ad2fb28b6058b3faf280f836a13de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les personnels
    ";
        
        $__internal_402c5c5df355c604e57aca5bb2241c9e7f9ad2fb28b6058b3faf280f836a13de->leave($__internal_402c5c5df355c604e57aca5bb2241c9e7f9ad2fb28b6058b3faf280f836a13de_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_823c5118d19d7cbef3f9c638afc4e652a9b98e3a0c4612063baeb4fae5fa5c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823c5118d19d7cbef3f9c638afc4e652a9b98e3a0c4612063baeb4fae5fa5c5f->enter($__internal_823c5118d19d7cbef3f9c638afc4e652a9b98e3a0c4612063baeb4fae5fa5c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_823c5118d19d7cbef3f9c638afc4e652a9b98e3a0c4612063baeb4fae5fa5c5f->leave($__internal_823c5118d19d7cbef3f9c638afc4e652a9b98e3a0c4612063baeb4fae5fa5c5f_prof);

    }

    // line 45
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_3806103c19cb918a4bbf26ce603e14f20a3d5136295f1be57ff0e644beb81a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3806103c19cb918a4bbf26ce603e14f20a3d5136295f1be57ff0e644beb81a3a->enter($__internal_3806103c19cb918a4bbf26ce603e14f20a3d5136295f1be57ff0e644beb81a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_3806103c19cb918a4bbf26ce603e14f20a3d5136295f1be57ff0e644beb81a3a->leave($__internal_3806103c19cb918a4bbf26ce603e14f20a3d5136295f1be57ff0e644beb81a3a_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerPersonnels.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  118 => 51,  114 => 50,  108 => 46,  102 => 45,  69 => 18,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
    {% endblock %}", "@projet/Default/Admin/listerPersonnels.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerPersonnels.html.twig");
    }
}
