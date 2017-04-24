<?php

/* projetBundle:Default/Admin:ajouterMatiere.html.twig */
class __TwigTemplate_fead47001a399701ed944e30e065e3375fc2eac94e62440b9195b3fb1030a384 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:ajouterMatiere.html.twig", 1);
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
        $__internal_6e090ca3a5b7307ed66a32932153dda5bc9db5afb1154a7450c66c9342478fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e090ca3a5b7307ed66a32932153dda5bc9db5afb1154a7450c66c9342478fa1->enter($__internal_6e090ca3a5b7307ed66a32932153dda5bc9db5afb1154a7450c66c9342478fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:ajouterMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e090ca3a5b7307ed66a32932153dda5bc9db5afb1154a7450c66c9342478fa1->leave($__internal_6e090ca3a5b7307ed66a32932153dda5bc9db5afb1154a7450c66c9342478fa1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_128b75089ff1ca6ff890b07bf4ff4b061e68ced7a69b6106c44862b062c18a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128b75089ff1ca6ff890b07bf4ff4b061e68ced7a69b6106c44862b062c18a16->enter($__internal_128b75089ff1ca6ff890b07bf4ff4b061e68ced7a69b6106c44862b062c18a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter une matiere
";
        
        $__internal_128b75089ff1ca6ff890b07bf4ff4b061e68ced7a69b6106c44862b062c18a16->leave($__internal_128b75089ff1ca6ff890b07bf4ff4b061e68ced7a69b6106c44862b062c18a16_prof);

    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
        $__internal_4432eba37ef994cbc4d3f9ee90d0b205990182afcd7b09655d46bfd9432da3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4432eba37ef994cbc4d3f9ee90d0b205990182afcd7b09655d46bfd9432da3cd->enter($__internal_4432eba37ef994cbc4d3f9ee90d0b205990182afcd7b09655d46bfd9432da3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 8
        echo "    <script language=\"JavaScript\">
        function afficherMatiere() {
            \$(\"#matieresExistantes\").slideToggle();
        }

        \$(\"document\").ready(function () {
            \$(\"#message\").slideUp();
            \$(\"#matieresExistantes\").hide();

            \$(\"#btnAjouter\").click(function () {

                var libMat = \$(\"#libelleMatiere\");
                if (libMat.val() == \"\") {
                    \$(\"#message\").html(\"Veuillez remplier le champs !\");
                    \$(\"#message\").slideDown();
                    setTimeout(function () {
                        \$(\"#message\").slideUp();
                    }, 2500);
                } else {

                    \$.ajax({

                        url: \"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterMatiereAjax");
        echo "\",
                        method: \"GET\",
                        data: \$(\"#form\").serialize(),
                        success: function (response) {
                            response = JSON.parse(response);

                            if (response.status == \"existed\") {
                                \$(\"#message\").addClass(\"alert-danger\");
                                \$(\"#message\").removeClass(\"alert-success\");
                                \$(\"#message\").html(\"La matiere saisiée est déjà existée\");
                                \$(\"#message\").slideDown();
                                setTimeout(function () {
                                    \$(\"#message\").slideUp();
                                }, 2500);
                            } else {
                                \$(\"#message\").removeClass(\"alert-danger\");
                                \$(\"#message\").addClass(\"alert-success\");
                                \$(\"#message\").html(\"Ajout avec succès !\");
                                \$(\"#message\").slideDown();
                                setTimeout(function () {
                                    \$(\"#message\").slideUp();
                                }, 2500);
                            }
                        }


                    });


                }


            });


        });


    </script>


";
        
        $__internal_4432eba37ef994cbc4d3f9ee90d0b205990182afcd7b09655d46bfd9432da3cd->leave($__internal_4432eba37ef994cbc4d3f9ee90d0b205990182afcd7b09655d46bfd9432da3cd_prof);

    }

    // line 74
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_1bfa1ed47315e4bc836ebbb7a8de0751966a19eefd00b6e6d39a34b5ec3f2abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfa1ed47315e4bc836ebbb7a8de0751966a19eefd00b6e6d39a34b5ec3f2abb->enter($__internal_1bfa1ed47315e4bc836ebbb7a8de0751966a19eefd00b6e6d39a34b5ec3f2abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 75
        echo "
    <h1 align=\"center\"></h1>

    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" align=\"center\">
            <div class=\"alert alert-danger\" id=\"message\" style=\"display: none\"></div>
            <form name=\"form\" id=\"form\">
                <table border=\"0\" align=\"center\">

                    <tr align=\"center\">
                        <td><h4>Libellé matiere : </h4></td>
                        <td><input name=\"libelleMatiere\" id=\"libelleMatiere\" type=\"text\"></td>
                    </tr>
                    <tr align=\"center\">
                        <td colspan=\"2\"><input type=\"button\" class=\"btn btn-primary\" id=\"btnAjouter\"
                                               value=\"Ajouter matiere\" style=\"margin-top: 25px\"></td>
                    </tr>

                </table>


            </form>

            <hr class=\"hr-4\">

            <input type=\"button\" class=\"btn btn-primary\" value=\"Afficher les matieres existantes\"
                   onclick=afficherMatiere()>

        </div>

        <hr class=\"hr-4\">
        <div id=\"matieresExistantes\" align=\"center\">

            <h4>Les matières existantes pour l'année
                scolaire ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "anneeScolaireCourante"), "method"), "periode", array()), "html", null, true);
        echo "</h4>
            <div>

                <table class=\"table table-responsive\" align=\"center\" width=\"50%\">
                    <tr class=\"table-header\" align=\"center\">
                        <td><h4>Matiere</h4></td>
                    </tr>
                    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMatiere"]) ? $context["listMatiere"] : $this->getContext($context, "listMatiere")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 118
            echo "
                        <tr align=\"center\">
                            <td><h5>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "libelleMatiere", array()), "html", null, true);
            echo "</h5></td>
                        </tr>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                </table>

            </div>

        </div>

    </div>



";
        
        $__internal_1bfa1ed47315e4bc836ebbb7a8de0751966a19eefd00b6e6d39a34b5ec3f2abb->leave($__internal_1bfa1ed47315e4bc836ebbb7a8de0751966a19eefd00b6e6d39a34b5ec3f2abb_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:ajouterMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 124,  190 => 120,  186 => 118,  182 => 117,  172 => 110,  135 => 75,  129 => 74,  80 => 30,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    Ajouter une matiere
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        function afficherMatiere() {
            \$(\"#matieresExistantes\").slideToggle();
        }

        \$(\"document\").ready(function () {
            \$(\"#message\").slideUp();
            \$(\"#matieresExistantes\").hide();

            \$(\"#btnAjouter\").click(function () {

                var libMat = \$(\"#libelleMatiere\");
                if (libMat.val() == \"\") {
                    \$(\"#message\").html(\"Veuillez remplier le champs !\");
                    \$(\"#message\").slideDown();
                    setTimeout(function () {
                        \$(\"#message\").slideUp();
                    }, 2500);
                } else {

                    \$.ajax({

                        url: \"{{ path('ajouterMatiereAjax') }}\",
                        method: \"GET\",
                        data: \$(\"#form\").serialize(),
                        success: function (response) {
                            response = JSON.parse(response);

                            if (response.status == \"existed\") {
                                \$(\"#message\").addClass(\"alert-danger\");
                                \$(\"#message\").removeClass(\"alert-success\");
                                \$(\"#message\").html(\"La matiere saisiée est déjà existée\");
                                \$(\"#message\").slideDown();
                                setTimeout(function () {
                                    \$(\"#message\").slideUp();
                                }, 2500);
                            } else {
                                \$(\"#message\").removeClass(\"alert-danger\");
                                \$(\"#message\").addClass(\"alert-success\");
                                \$(\"#message\").html(\"Ajout avec succès !\");
                                \$(\"#message\").slideDown();
                                setTimeout(function () {
                                    \$(\"#message\").slideUp();
                                }, 2500);
                            }
                        }


                    });


                }


            });


        });


    </script>


{% endblock %}


{% block mainContent %}

    <h1 align=\"center\"></h1>

    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" align=\"center\">
            <div class=\"alert alert-danger\" id=\"message\" style=\"display: none\"></div>
            <form name=\"form\" id=\"form\">
                <table border=\"0\" align=\"center\">

                    <tr align=\"center\">
                        <td><h4>Libellé matiere : </h4></td>
                        <td><input name=\"libelleMatiere\" id=\"libelleMatiere\" type=\"text\"></td>
                    </tr>
                    <tr align=\"center\">
                        <td colspan=\"2\"><input type=\"button\" class=\"btn btn-primary\" id=\"btnAjouter\"
                                               value=\"Ajouter matiere\" style=\"margin-top: 25px\"></td>
                    </tr>

                </table>


            </form>

            <hr class=\"hr-4\">

            <input type=\"button\" class=\"btn btn-primary\" value=\"Afficher les matieres existantes\"
                   onclick=afficherMatiere()>

        </div>

        <hr class=\"hr-4\">
        <div id=\"matieresExistantes\" align=\"center\">

            <h4>Les matières existantes pour l'année
                scolaire {{ app.session.get(\"anneeScolaireCourante\").periode }}</h4>
            <div>

                <table class=\"table table-responsive\" align=\"center\" width=\"50%\">
                    <tr class=\"table-header\" align=\"center\">
                        <td><h4>Matiere</h4></td>
                    </tr>
                    {% for matiere in listMatiere %}

                        <tr align=\"center\">
                            <td><h5>{{ matiere.libelleMatiere }}</h5></td>
                        </tr>

                    {% endfor %}
                </table>

            </div>

        </div>

    </div>



{% endblock %}", "projetBundle:Default/Admin:ajouterMatiere.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/ajouterMatiere.html.twig");
    }
}
