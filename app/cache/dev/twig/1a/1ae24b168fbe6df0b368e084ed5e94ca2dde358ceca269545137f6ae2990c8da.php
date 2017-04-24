<?php

/* @projet/Default/Admin/listerMatieres.html.twig */
class __TwigTemplate_c5874c41831ec6e1a339e566cccbcbbd3729dc1d07801f63300689a638345f93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/listerMatieres.html.twig", 1);
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
        $__internal_fca55254bc44421effb5495cf5f4576cf79c7c225950d8935f173b0ef8543fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca55254bc44421effb5495cf5f4576cf79c7c225950d8935f173b0ef8543fc2->enter($__internal_fca55254bc44421effb5495cf5f4576cf79c7c225950d8935f173b0ef8543fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerMatieres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fca55254bc44421effb5495cf5f4576cf79c7c225950d8935f173b0ef8543fc2->leave($__internal_fca55254bc44421effb5495cf5f4576cf79c7c225950d8935f173b0ef8543fc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3b0a79d1044e3247d3483cf05ce0bc1dc1de051aee7a9d50b6163f75e5d8fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b0a79d1044e3247d3483cf05ce0bc1dc1de051aee7a9d50b6163f75e5d8fa7->enter($__internal_d3b0a79d1044e3247d3483cf05ce0bc1dc1de051aee7a9d50b6163f75e5d8fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des matieres
";
        
        $__internal_d3b0a79d1044e3247d3483cf05ce0bc1dc1de051aee7a9d50b6163f75e5d8fa7->leave($__internal_d3b0a79d1044e3247d3483cf05ce0bc1dc1de051aee7a9d50b6163f75e5d8fa7_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_e33fe058c049da373b7c518094da7435b70f8107726646968f0152405c1f113c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33fe058c049da373b7c518094da7435b70f8107726646968f0152405c1f113c->enter($__internal_e33fe058c049da373b7c518094da7435b70f8107726646968f0152405c1f113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_e33fe058c049da373b7c518094da7435b70f8107726646968f0152405c1f113c->leave($__internal_e33fe058c049da373b7c518094da7435b70f8107726646968f0152405c1f113c_prof);

    }

    // line 42
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_97a98fd620d2d6e378132432ca0edc024f5ae4c568c110164a41d4728aab4185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a98fd620d2d6e378132432ca0edc024f5ae4c568c110164a41d4728aab4185->enter($__internal_97a98fd620d2d6e378132432ca0edc024f5ae4c568c110164a41d4728aab4185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_97a98fd620d2d6e378132432ca0edc024f5ae4c568c110164a41d4728aab4185->leave($__internal_97a98fd620d2d6e378132432ca0edc024f5ae4c568c110164a41d4728aab4185_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerMatieres.html.twig";
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


{% endblock %}", "@projet/Default/Admin/listerMatieres.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerMatieres.html.twig");
    }
}
