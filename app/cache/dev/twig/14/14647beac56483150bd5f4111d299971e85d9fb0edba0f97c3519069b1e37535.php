<?php

/* projetBundle:Default/Admin:listerEnseignant.html.twig */

class __TwigTemplate_117e176f30c969e09733c5eff67a854ec9541bd11874766fd10cdaefdab9bd35 extends Twig_Template
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

    public function block_title($context, array $blocks = array())
    {
        $__internal_5580a670975e182ca96897378352f15131b99b18a2a83d78deb997ee798b5dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5580a670975e182ca96897378352f15131b99b18a2a83d78deb997ee798b5dc6->enter($__internal_5580a670975e182ca96897378352f15131b99b18a2a83d78deb997ee798b5dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les enseignants
    ";

        $__internal_5580a670975e182ca96897378352f15131b99b18a2a83d78deb997ee798b5dc6->leave($__internal_5580a670975e182ca96897378352f15131b99b18a2a83d78deb997ee798b5dc6_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_8b580de96cb1166f4f0041d4b8d1318d064669d2ccff07805da6bcbb5e53dc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b580de96cb1166f4f0041d4b8d1318d064669d2ccff07805da6bcbb5e53dc0e->enter($__internal_8b580de96cb1166f4f0041d4b8d1318d064669d2ccff07805da6bcbb5e53dc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_8b580de96cb1166f4f0041d4b8d1318d064669d2ccff07805da6bcbb5e53dc0e->leave($__internal_8b580de96cb1166f4f0041d4b8d1318d064669d2ccff07805da6bcbb5e53dc0e_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_89a11ce47901cd448d4a363697c8b4a5f738d121e60d27f0b59462010f7dc286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a11ce47901cd448d4a363697c8b4a5f738d121e60d27f0b59462010f7dc286->enter($__internal_89a11ce47901cd448d4a363697c8b4a5f738d121e60d27f0b59462010f7dc286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 46
        echo "        <hr class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" align=\"center\">
                <select name=\"gradeList\" id=\"gradeList\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : $this->getContext($context, "grades")));
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

        $__internal_89a11ce47901cd448d4a363697c8b4a5f738d121e60d27f0b59462010f7dc286->leave($__internal_89a11ce47901cd448d4a363697c8b4a5f738d121e60d27f0b59462010f7dc286_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 45

    public function getDebugInfo()
    {
        return array(129 => 53, 118 => 51, 114 => 50, 108 => 46, 102 => 45, 68 => 17, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
        Lister les enseignants
    {% endblock %}

    {% block script %}
        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
                \$(\"#btnLister\").click(function(){
                    var idGrade = \$(\"#gradeList\").val();
                    var tableau = \"<table border='1' class='table table-bordered' id='enseignantTable'><tr><th>Matricule</th><th>Nom</th><th>Prenom</th><th>CIN</th><th>Adresse</th><th>E-mail</th><th>NumTel</th></tr></table>\";
                    \$(\"#mySpinner\").fadeIn(\"slow\");
                    \$(\"#tableContainer\").slideUp(\"fast\");
                    \$(\"#alertVide\").slideUp(\"fast\");

                    \$.ajax({
                        url :\"{{ path('ListerEnseignantAJAX') }}\",
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
    {% endblock %}

    {% block mainContent %}
        <hr class=\"hr-4\">
        <div class=\"col-xs-12\">
            <div class=\"row\" align=\"center\">
                <select name=\"gradeList\" id=\"gradeList\">
                    {% for g in grades %}
                        <option value=\"{{ g.id }}\">{{ g.nomGrade }}</option>
                    {% endfor %}
                </select>
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
    {% endblock %}", "projetBundle:Default/Admin:listerEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerEnseignant.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb3a57be16f7c5cfb12497c349bb7aa2d4b88202d26b1560a79084160d9e3835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3a57be16f7c5cfb12497c349bb7aa2d4b88202d26b1560a79084160d9e3835->enter($__internal_eb3a57be16f7c5cfb12497c349bb7aa2d4b88202d26b1560a79084160d9e3835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_eb3a57be16f7c5cfb12497c349bb7aa2d4b88202d26b1560a79084160d9e3835->leave($__internal_eb3a57be16f7c5cfb12497c349bb7aa2d4b88202d26b1560a79084160d9e3835_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerEnseignant.html.twig";
    }
}
