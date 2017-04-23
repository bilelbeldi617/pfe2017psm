<?php

/* projetBundle:Default/Admin:listerGroupe.html.twig */

class __TwigTemplate_a30a579f6a9e251a169e9ce743765fcf6df1b063b39f086b1a396459eef10bd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:listerGroupe.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_e8197f113e0ab16a19dd2c9f30ee725c1c47ae9df0f859809b4e8f0eb1504ad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8197f113e0ab16a19dd2c9f30ee725c1c47ae9df0f859809b4e8f0eb1504ad4->enter($__internal_e8197f113e0ab16a19dd2c9f30ee725c1c47ae9df0f859809b4e8f0eb1504ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Lister les groupes
";

        $__internal_e8197f113e0ab16a19dd2c9f30ee725c1c47ae9df0f859809b4e8f0eb1504ad4->leave($__internal_e8197f113e0ab16a19dd2c9f30ee725c1c47ae9df0f859809b4e8f0eb1504ad4_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_d51c524df0ec9955fd9563b18904f4658b492ecc033533485266d37d18a09cba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51c524df0ec9955fd9563b18904f4658b492ecc033533485266d37d18a09cba->enter($__internal_d51c524df0ec9955fd9563b18904f4658b492ecc033533485266d37d18a09cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#btnLister\").click(function(){
                //console.log(\"click\");
                var nomGroupe = \$(\"#listGroupe\").val();
                var anneeScolaire = \$(\"#annee\").val();
                \$(\"#mySpinner\").fadeIn(\"slow\");
                \$(\"#tableContainer\").slideUp(\"fast\");
                \$(\"#alertVide\").slideUp(\"fast\");

                \$.ajax({
                    url: \"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ListerGroupeAJAX");
        echo "\",
                    method: \"GET\",
                    data : {\"listGroupe\" : nomGroupe, \"annees\" : anneeScolaire},
                    success : function(response){
                        var lines = \"\";
                        console.log(response);
                        response = JSON.parse(response);
                        console.log(response.listGroupe);
                        if(response.listGroupe.length == 0){
                            \$(\"#alertVide\").slideDown(\"fast\");
                            \$(\"#tableContainer\").slideUp(\"fast\");
                        }else{
                            \$.each(response.listGroupe, function(i, item){
                                lines+=\"<tr><td>\"+item.id+\"</td><td>\"+item.nom_groupe+\"</td><td>\"+item.num_groupe+\"</td><td>\"+item.nbr_eleves+\"</td><td><a href='";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("genererBulletinGroupe");
        echo "?idGroupe=\"+item.id+\"'><input type='button' value='Génerer' class='btn btn-primary'></a> </td></tr>\";
                            });
                            \$(\"#tableBody\").html(lines);
                            \$(\"#tableGroupe\").dataTable();
                            \$(\"#alertVide\").slideUp(\"fast\");
                            \$(\"#tableContainer\").slideDown(\"fast\");
                            \$(\"#mySpinner\").fadeOut(\"slow\");
                        }
                    }
                });

            });
        });
    </script>
";

        $__internal_d51c524df0ec9955fd9563b18904f4658b492ecc033533485266d37d18a09cba->leave($__internal_d51c524df0ec9955fd9563b18904f4658b492ecc033533485266d37d18a09cba_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_ac14e158947783969e29b0b8f33efff4f3c4228f8cc1c4142de01503aaf30ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac14e158947783969e29b0b8f33efff4f3c4228f8cc1c4142de01503aaf30ee6->enter($__internal_ac14e158947783969e29b0b8f33efff4f3c4228f8cc1c4142de01503aaf30ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 48
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" align=\"center\">
            <select name=\"listGroupe\" id=\"listGroupe\">
                <option value=\"Premiere Annee\">Premiere Annee</option>
                <option value=\"Deuxieme Annee\">Deuxieme Annee</option>
                <option value=\"Troisieme Annee\">Troisieme Annee</option>
                <option value=\"Quatrieme Annee\">Quatrieme Annee</option>
                <option value=\"Cinquieme Annee\">Cinquieme Annee</option>
                <option value=\"Sixieme Annee\">Sixieme Annee</option>
            </select>
            <select name=\"annee\" id=\"annee\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : $this->getContext($context, "annees")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 61
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "periode", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            </select>
            <input type=\"button\" value=\"Lister\" class=\"btn btn-primary\" id=\"btnLister\">
        </div>
        <hr class=\"hr-2\">
        <div class=\"row\">
            <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\" style=\"display: none\"></i></center>
            <div class=\"alert alert-warning\" id=\"alertVide\" style=\"display: none\">Aucun groupe dans ce niveau!</div>
            <div id=\"tableContainer\" style=\"display: none\">
                <table id=\"tableGroupe\" class=\"display\" cellspacing=\"0\" width=\"80%\">
                    <thead>
                        <tr>
                            <th>ID Groupe</th>
                            <th>Nom Groupe</th>
                            <th>Numéro Groupe</th>
                            <th>Nombre Eleves</th>
                            <th>Bulletins</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Groupe</th>
                            <th>Nom Groupe</th>
                            <th>Numéro Groupe</th>
                            <th>Nombre Eleves</th>
                            <th>Bulletins</th>
                        </tr>
                    </tfoot>
                    <tbody id=\"tableBody\">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
";

        $__internal_ac14e158947783969e29b0b8f33efff4f3c4228f8cc1c4142de01503aaf30ee6->leave($__internal_ac14e158947783969e29b0b8f33efff4f3c4228f8cc1c4142de01503aaf30ee6_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 47

    public function getDebugInfo()
    {
        return array(142 => 63, 131 => 61, 127 => 60, 113 => 48, 107 => 47, 85 => 31, 69 => 18, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
    Lister les groupes
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#btnLister\").click(function(){
                //console.log(\"click\");
                var nomGroupe = \$(\"#listGroupe\").val();
                var anneeScolaire = \$(\"#annee\").val();
                \$(\"#mySpinner\").fadeIn(\"slow\");
                \$(\"#tableContainer\").slideUp(\"fast\");
                \$(\"#alertVide\").slideUp(\"fast\");

                \$.ajax({
                    url: \"{{ path('ListerGroupeAJAX') }}\",
                    method: \"GET\",
                    data : {\"listGroupe\" : nomGroupe, \"annees\" : anneeScolaire},
                    success : function(response){
                        var lines = \"\";
                        console.log(response);
                        response = JSON.parse(response);
                        console.log(response.listGroupe);
                        if(response.listGroupe.length == 0){
                            \$(\"#alertVide\").slideDown(\"fast\");
                            \$(\"#tableContainer\").slideUp(\"fast\");
                        }else{
                            \$.each(response.listGroupe, function(i, item){
                                lines+=\"<tr><td>\"+item.id+\"</td><td>\"+item.nom_groupe+\"</td><td>\"+item.num_groupe+\"</td><td>\"+item.nbr_eleves+\"</td><td><a href='{{ path('genererBulletinGroupe') }}?idGroupe=\"+item.id+\"'><input type='button' value='Génerer' class='btn btn-primary'></a> </td></tr>\";
                            });
                            \$(\"#tableBody\").html(lines);
                            \$(\"#tableGroupe\").dataTable();
                            \$(\"#alertVide\").slideUp(\"fast\");
                            \$(\"#tableContainer\").slideDown(\"fast\");
                            \$(\"#mySpinner\").fadeOut(\"slow\");
                        }
                    }
                });

            });
        });
    </script>
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" align=\"center\">
            <select name=\"listGroupe\" id=\"listGroupe\">
                <option value=\"Premiere Annee\">Premiere Annee</option>
                <option value=\"Deuxieme Annee\">Deuxieme Annee</option>
                <option value=\"Troisieme Annee\">Troisieme Annee</option>
                <option value=\"Quatrieme Annee\">Quatrieme Annee</option>
                <option value=\"Cinquieme Annee\">Cinquieme Annee</option>
                <option value=\"Sixieme Annee\">Sixieme Annee</option>
            </select>
            <select name=\"annee\" id=\"annee\">
                {% for a in annees %}
                    <option value=\"{{ a.id }}\">{{ a.periode }}</option>
                {% endfor %}
            </select>
            <input type=\"button\" value=\"Lister\" class=\"btn btn-primary\" id=\"btnLister\">
        </div>
        <hr class=\"hr-2\">
        <div class=\"row\">
            <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\" style=\"display: none\"></i></center>
            <div class=\"alert alert-warning\" id=\"alertVide\" style=\"display: none\">Aucun groupe dans ce niveau!</div>
            <div id=\"tableContainer\" style=\"display: none\">
                <table id=\"tableGroupe\" class=\"display\" cellspacing=\"0\" width=\"80%\">
                    <thead>
                        <tr>
                            <th>ID Groupe</th>
                            <th>Nom Groupe</th>
                            <th>Numéro Groupe</th>
                            <th>Nombre Eleves</th>
                            <th>Bulletins</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID Groupe</th>
                            <th>Nom Groupe</th>
                            <th>Numéro Groupe</th>
                            <th>Nombre Eleves</th>
                            <th>Bulletins</th>
                        </tr>
                    </tfoot>
                    <tbody id=\"tableBody\">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "projetBundle:Default/Admin:listerGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerGroupe.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dca727bac1e8e203344d5f2bf96b4402e9682a44d092c6352f923f5bd9b2e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dca727bac1e8e203344d5f2bf96b4402e9682a44d092c6352f923f5bd9b2e0f->enter($__internal_8dca727bac1e8e203344d5f2bf96b4402e9682a44d092c6352f923f5bd9b2e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_8dca727bac1e8e203344d5f2bf96b4402e9682a44d092c6352f923f5bd9b2e0f->leave($__internal_8dca727bac1e8e203344d5f2bf96b4402e9682a44d092c6352f923f5bd9b2e0f_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerGroupe.html.twig";
    }
}
