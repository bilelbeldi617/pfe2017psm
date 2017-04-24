<?php

/* @projet/Default/Admin/listerGroupe.html.twig */
class __TwigTemplate_46fccc5860398b0c44e90f27659f3bc84d64b890199fbcee33a9ca153cd7969c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/listerGroupe.html.twig", 1);
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
        $__internal_dbf437fb9cb05f7e83724ab070368eee4edc5ec7d40fe1176750a7f3b18c67b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf437fb9cb05f7e83724ab070368eee4edc5ec7d40fe1176750a7f3b18c67b3->enter($__internal_dbf437fb9cb05f7e83724ab070368eee4edc5ec7d40fe1176750a7f3b18c67b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf437fb9cb05f7e83724ab070368eee4edc5ec7d40fe1176750a7f3b18c67b3->leave($__internal_dbf437fb9cb05f7e83724ab070368eee4edc5ec7d40fe1176750a7f3b18c67b3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_316b0b85f3864fd6717a23abed33207bfdce71d14a7188657e4cd4114536de7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_316b0b85f3864fd6717a23abed33207bfdce71d14a7188657e4cd4114536de7e->enter($__internal_316b0b85f3864fd6717a23abed33207bfdce71d14a7188657e4cd4114536de7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Lister les groupes
";
        
        $__internal_316b0b85f3864fd6717a23abed33207bfdce71d14a7188657e4cd4114536de7e->leave($__internal_316b0b85f3864fd6717a23abed33207bfdce71d14a7188657e4cd4114536de7e_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_24665f6710eb58a3fd136c7fa36fbc6f5dd0bbfe9f8f330037b95f6e61cb9f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24665f6710eb58a3fd136c7fa36fbc6f5dd0bbfe9f8f330037b95f6e61cb9f12->enter($__internal_24665f6710eb58a3fd136c7fa36fbc6f5dd0bbfe9f8f330037b95f6e61cb9f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_24665f6710eb58a3fd136c7fa36fbc6f5dd0bbfe9f8f330037b95f6e61cb9f12->leave($__internal_24665f6710eb58a3fd136c7fa36fbc6f5dd0bbfe9f8f330037b95f6e61cb9f12_prof);

    }

    // line 47
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_5f505e045156ed6f79a2022a3a512523fa34c407dcfab12358369541aa940aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f505e045156ed6f79a2022a3a512523fa34c407dcfab12358369541aa940aa2->enter($__internal_5f505e045156ed6f79a2022a3a512523fa34c407dcfab12358369541aa940aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_5f505e045156ed6f79a2022a3a512523fa34c407dcfab12358369541aa940aa2->leave($__internal_5f505e045156ed6f79a2022a3a512523fa34c407dcfab12358369541aa940aa2_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 63,  131 => 61,  127 => 60,  113 => 48,  107 => 47,  85 => 31,  69 => 18,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
{% endblock %}", "@projet/Default/Admin/listerGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerGroupe.html.twig");
    }
}
