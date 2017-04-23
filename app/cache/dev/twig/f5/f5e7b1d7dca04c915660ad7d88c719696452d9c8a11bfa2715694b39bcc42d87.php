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

    public function block_title($context, array $blocks = array())
    {
        $__internal_824e852e6e6cf7a5f0128648f2087bb623d8cdaf933a3d569c6ffa0c5bfdb821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824e852e6e6cf7a5f0128648f2087bb623d8cdaf933a3d569c6ffa0c5bfdb821->enter($__internal_824e852e6e6cf7a5f0128648f2087bb623d8cdaf933a3d569c6ffa0c5bfdb821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Lister les groupes
";

        $__internal_824e852e6e6cf7a5f0128648f2087bb623d8cdaf933a3d569c6ffa0c5bfdb821->leave($__internal_824e852e6e6cf7a5f0128648f2087bb623d8cdaf933a3d569c6ffa0c5bfdb821_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_3d2e755deab291f49587604b65fd5c6599581fd28ac3f385ca7913bd52c0f930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2e755deab291f49587604b65fd5c6599581fd28ac3f385ca7913bd52c0f930->enter($__internal_3d2e755deab291f49587604b65fd5c6599581fd28ac3f385ca7913bd52c0f930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_3d2e755deab291f49587604b65fd5c6599581fd28ac3f385ca7913bd52c0f930->leave($__internal_3d2e755deab291f49587604b65fd5c6599581fd28ac3f385ca7913bd52c0f930_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_ad2f41619df8f6c49fae5705a1b4aeb1fbe178d3b8cc9008a2d54ca8c2b81e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2f41619df8f6c49fae5705a1b4aeb1fbe178d3b8cc9008a2d54ca8c2b81e0b->enter($__internal_ad2f41619df8f6c49fae5705a1b4aeb1fbe178d3b8cc9008a2d54ca8c2b81e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_ad2f41619df8f6c49fae5705a1b4aeb1fbe178d3b8cc9008a2d54ca8c2b81e0b->leave($__internal_ad2f41619df8f6c49fae5705a1b4aeb1fbe178d3b8cc9008a2d54ca8c2b81e0b_prof);

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
{% endblock %}", "@projet/Default/Admin/listerGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerGroupe.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b69beaf8a7e0fef7060e38509574efc8f7139e5c0cd66e7437ec9a7dc8f2cd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69beaf8a7e0fef7060e38509574efc8f7139e5c0cd66e7437ec9a7dc8f2cd6a->enter($__internal_b69beaf8a7e0fef7060e38509574efc8f7139e5c0cd66e7437ec9a7dc8f2cd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_b69beaf8a7e0fef7060e38509574efc8f7139e5c0cd66e7437ec9a7dc8f2cd6a->leave($__internal_b69beaf8a7e0fef7060e38509574efc8f7139e5c0cd66e7437ec9a7dc8f2cd6a_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerGroupe.html.twig";
    }
}
