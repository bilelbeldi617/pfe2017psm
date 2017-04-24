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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb57f838f74b145ba2e08809493c487ce89d687671d4e32683966e46df717ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb57f838f74b145ba2e08809493c487ce89d687671d4e32683966e46df717ead->enter($__internal_cb57f838f74b145ba2e08809493c487ce89d687671d4e32683966e46df717ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerPersonnels.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb57f838f74b145ba2e08809493c487ce89d687671d4e32683966e46df717ead->leave($__internal_cb57f838f74b145ba2e08809493c487ce89d687671d4e32683966e46df717ead_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_302663575cb83c0d4b5a52481b37392226dfde66adcc83308cc08c156e333a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_302663575cb83c0d4b5a52481b37392226dfde66adcc83308cc08c156e333a8f->enter($__internal_302663575cb83c0d4b5a52481b37392226dfde66adcc83308cc08c156e333a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les personnels
    ";
        
        $__internal_302663575cb83c0d4b5a52481b37392226dfde66adcc83308cc08c156e333a8f->leave($__internal_302663575cb83c0d4b5a52481b37392226dfde66adcc83308cc08c156e333a8f_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_f6c0ce1d21146eb5747c156a141948a8464d6d0ee20d7ae84e4377308d3fd723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c0ce1d21146eb5747c156a141948a8464d6d0ee20d7ae84e4377308d3fd723->enter($__internal_f6c0ce1d21146eb5747c156a141948a8464d6d0ee20d7ae84e4377308d3fd723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_f6c0ce1d21146eb5747c156a141948a8464d6d0ee20d7ae84e4377308d3fd723->leave($__internal_f6c0ce1d21146eb5747c156a141948a8464d6d0ee20d7ae84e4377308d3fd723_prof);

    }

    // line 45
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_fea25f89282da7b5dbf4625d246504e4d9d0b57c6ab9c766b42a25e52f7e48fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fea25f89282da7b5dbf4625d246504e4d9d0b57c6ab9c766b42a25e52f7e48fb->enter($__internal_fea25f89282da7b5dbf4625d246504e4d9d0b57c6ab9c766b42a25e52f7e48fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_fea25f89282da7b5dbf4625d246504e4d9d0b57c6ab9c766b42a25e52f7e48fb->leave($__internal_fea25f89282da7b5dbf4625d246504e4d9d0b57c6ab9c766b42a25e52f7e48fb_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerPersonnels.html.twig";
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
    {% endblock %}", "projetBundle:Default/Admin:listerPersonnels.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerPersonnels.html.twig");
    }
}
