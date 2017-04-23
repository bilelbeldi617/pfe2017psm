<?php

/* @projet/Default/Admin/listerEnseignant.html.twig */
class __TwigTemplate_76afc0e47ea7d9391bee532de3defb0c9dab631a99acaa7260d4924cca5c9570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/listerEnseignant.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_b8935a115c4de1a99f6cb8a810873f07b083a100b1cd826bdfaa9031af86932c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8935a115c4de1a99f6cb8a810873f07b083a100b1cd826bdfaa9031af86932c->enter($__internal_b8935a115c4de1a99f6cb8a810873f07b083a100b1cd826bdfaa9031af86932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Lister les enseignants
    ";

        $__internal_b8935a115c4de1a99f6cb8a810873f07b083a100b1cd826bdfaa9031af86932c->leave($__internal_b8935a115c4de1a99f6cb8a810873f07b083a100b1cd826bdfaa9031af86932c_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_ab18e6841dceeffde178b329596c0f2d53e032ec399e3bbb7a8b6f773e18d64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab18e6841dceeffde178b329596c0f2d53e032ec399e3bbb7a8b6f773e18d64a->enter($__internal_ab18e6841dceeffde178b329596c0f2d53e032ec399e3bbb7a8b6f773e18d64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_ab18e6841dceeffde178b329596c0f2d53e032ec399e3bbb7a8b6f773e18d64a->leave($__internal_ab18e6841dceeffde178b329596c0f2d53e032ec399e3bbb7a8b6f773e18d64a_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_f52fc733b2aa77816539e6a5d6bf7d21d94cb896724b9e7f946a52b32aed7080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52fc733b2aa77816539e6a5d6bf7d21d94cb896724b9e7f946a52b32aed7080->enter($__internal_f52fc733b2aa77816539e6a5d6bf7d21d94cb896724b9e7f946a52b32aed7080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_f52fc733b2aa77816539e6a5d6bf7d21d94cb896724b9e7f946a52b32aed7080->leave($__internal_f52fc733b2aa77816539e6a5d6bf7d21d94cb896724b9e7f946a52b32aed7080_prof);

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
    {% endblock %}", "@projet/Default/Admin/listerEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerEnseignant.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc7aac0baba57627c1e98ca0870cb6816b55b5aaad0c448bbddb0ea3409f571e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7aac0baba57627c1e98ca0870cb6816b55b5aaad0c448bbddb0ea3409f571e->enter($__internal_bc7aac0baba57627c1e98ca0870cb6816b55b5aaad0c448bbddb0ea3409f571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_bc7aac0baba57627c1e98ca0870cb6816b55b5aaad0c448bbddb0ea3409f571e->leave($__internal_bc7aac0baba57627c1e98ca0870cb6816b55b5aaad0c448bbddb0ea3409f571e_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerEnseignant.html.twig";
    }
}
