<?php

/* projetBundle:Default/Admin:listerMatieres.html.twig */
class __TwigTemplate_78674476176cf62d9a0f40d6f150abb3032c34b3910d57303b3c1a08f5287cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:listerMatieres.html.twig", 1);
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
        $__internal_d1f7d414ad4095055a20fef3d22c5c3c350c85da163c184921d3263df7c9006c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f7d414ad4095055a20fef3d22c5c3c350c85da163c184921d3263df7c9006c->enter($__internal_d1f7d414ad4095055a20fef3d22c5c3c350c85da163c184921d3263df7c9006c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f7d414ad4095055a20fef3d22c5c3c350c85da163c184921d3263df7c9006c->leave($__internal_d1f7d414ad4095055a20fef3d22c5c3c350c85da163c184921d3263df7c9006c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_11abe59137ebc62c43e9cff4201dd41b95cfa00aa19920928c41a51ef1e93bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11abe59137ebc62c43e9cff4201dd41b95cfa00aa19920928c41a51ef1e93bf9->enter($__internal_11abe59137ebc62c43e9cff4201dd41b95cfa00aa19920928c41a51ef1e93bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des matieres
";
        
        $__internal_11abe59137ebc62c43e9cff4201dd41b95cfa00aa19920928c41a51ef1e93bf9->leave($__internal_11abe59137ebc62c43e9cff4201dd41b95cfa00aa19920928c41a51ef1e93bf9_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_154de2c49f8c8546807d51fe3c2b6f8abdd13ad437f3d5f9cf952f36d69ca333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154de2c49f8c8546807d51fe3c2b6f8abdd13ad437f3d5f9cf952f36d69ca333->enter($__internal_154de2c49f8c8546807d51fe3c2b6f8abdd13ad437f3d5f9cf952f36d69ca333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"javascript\">
        function voirInfoMatiere(libMatiere) {
            \$(\"#matiere\").html(libMatiere);
            \$(\"#spanModalContainer\").html(\"\");
            \$(\"#modalSpinner\").show();
            console.log(libMatiere);
            var tableau = \"<table class='table table-responsive' border='1' >\";
            tableau += \"<tr align='center' class='table-header'><td>Enseignant</td><td>Groupe</td></tr>\";
            \$.ajax({
                url: \"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("voirInfoMatiereAJAX");
        echo "\",
                data: {\"libMatiere\": libMatiere},
                method: \"GET\",
                success: function (response) {
                    response = JSON.parse(response);
                    console.log(response);
                    \$.each(response.listMat, function (i, item) {
                        var line = \"<tr align='center'><td>\" + item.enseignant + \"</td><td>\" + item.groupe + \"</td></tr>\";
                        tableau += line;
                    });

                    tableau += \"</table>\";
                    console.log(tableau);
                    \$(\"#modalSpinner\").hide();
                    \$(\"#spanModalContainer\").fadeIn();
                    \$(\"#spanModalContainer\").html(tableau);
                }
            });


        }
    </script>


";
        
        $__internal_154de2c49f8c8546807d51fe3c2b6f8abdd13ad437f3d5f9cf952f36d69ca333->leave($__internal_154de2c49f8c8546807d51fe3c2b6f8abdd13ad437f3d5f9cf952f36d69ca333_prof);

    }

    // line 42
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_66927caa20ba81dbe0ffce19d67e4d1afc3b8b065f18d00ccdc872d66b17323a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66927caa20ba81dbe0ffce19d67e4d1afc3b8b065f18d00ccdc872d66b17323a->enter($__internal_66927caa20ba81dbe0ffce19d67e4d1afc3b8b065f18d00ccdc872d66b17323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 43
        echo "
    <hr class=\"hr-4\">


    <div class=\"col-xs-12\">

        <div class=\"row\">

            <table class=\"table table-responsive\" align=\"center\">
                <tr class=\"table-header\" align=\"center\">
                    <td>Libellé Matiere</td>
                    <td>Plus d'information</td>
                </tr>
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeMatieres"]) ? $context["listeMatieres"] : $this->getContext($context, "listeMatieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["mat"]) {
            // line 57
            echo "                    <tr align=\"center\">
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "libelleMatiere", array()), "html", null, true);
            echo "</td>
                        <td><input type=\"button\" value=\"Voir information\" data-toggle='modal' data-target='#myModal'
                                   class=\"btn btn-primary\" onclick=\"voirInfoMatiere('";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["mat"], "libelleMatiere", array()), "html", null, true);
            echo "')\"></td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "

            </table>


        </div>

        <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">


                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\" align=\"center\"><span id=\"matiere\"></span></h4>
                    </div>
                    <div class=\"modal-body\" align=\"center\">
                        <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"modalSpinner\"></i>
                        </center>
                        <div id=\"spanModalContainer\">

                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>

                    </div>

                </div>

            </div>
        </div>

    </div>


";
        
        $__internal_66927caa20ba81dbe0ffce19d67e4d1afc3b8b065f18d00ccdc872d66b17323a->leave($__internal_66927caa20ba81dbe0ffce19d67e4d1afc3b8b065f18d00ccdc872d66b17323a_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerMatieres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 64,  132 => 60,  127 => 58,  124 => 57,  120 => 56,  105 => 43,  99 => 42,  67 => 16,  56 => 7,  50 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
    Liste des matieres
{% endblock %}
{% block script %}
    <script language=\"javascript\">
        function voirInfoMatiere(libMatiere) {
            \$(\"#matiere\").html(libMatiere);
            \$(\"#spanModalContainer\").html(\"\");
            \$(\"#modalSpinner\").show();
            console.log(libMatiere);
            var tableau = \"<table class='table table-responsive' border='1' >\";
            tableau += \"<tr align='center' class='table-header'><td>Enseignant</td><td>Groupe</td></tr>\";
            \$.ajax({
                url: \"{{ path('voirInfoMatiereAJAX') }}\",
                data: {\"libMatiere\": libMatiere},
                method: \"GET\",
                success: function (response) {
                    response = JSON.parse(response);
                    console.log(response);
                    \$.each(response.listMat, function (i, item) {
                        var line = \"<tr align='center'><td>\" + item.enseignant + \"</td><td>\" + item.groupe + \"</td></tr>\";
                        tableau += line;
                    });

                    tableau += \"</table>\";
                    console.log(tableau);
                    \$(\"#modalSpinner\").hide();
                    \$(\"#spanModalContainer\").fadeIn();
                    \$(\"#spanModalContainer\").html(tableau);
                }
            });


        }
    </script>


{% endblock %}

{% block mainContent %}

    <hr class=\"hr-4\">


    <div class=\"col-xs-12\">

        <div class=\"row\">

            <table class=\"table table-responsive\" align=\"center\">
                <tr class=\"table-header\" align=\"center\">
                    <td>Libellé Matiere</td>
                    <td>Plus d'information</td>
                </tr>
                {% for mat in listeMatieres %}
                    <tr align=\"center\">
                        <td>{{ mat.libelleMatiere }}</td>
                        <td><input type=\"button\" value=\"Voir information\" data-toggle='modal' data-target='#myModal'
                                   class=\"btn btn-primary\" onclick=\"voirInfoMatiere('{{ mat.libelleMatiere }}')\"></td>
                    </tr>

                {% endfor %}


            </table>


        </div>

        <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
            <div class=\"modal-dialog\">

                <!-- Modal content-->
                <div class=\"modal-content\">


                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\" align=\"center\"><span id=\"matiere\"></span></h4>
                    </div>
                    <div class=\"modal-body\" align=\"center\">
                        <center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"modalSpinner\"></i>
                        </center>
                        <div id=\"spanModalContainer\">

                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>

                    </div>

                </div>

            </div>
        </div>

    </div>


{% endblock %}", "projetBundle:Default/Admin:listerMatieres.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerMatieres.html.twig");
    }
}
