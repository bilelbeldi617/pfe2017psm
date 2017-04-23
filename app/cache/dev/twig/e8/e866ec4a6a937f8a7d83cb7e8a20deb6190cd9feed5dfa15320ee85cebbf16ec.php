<?php

/* @projet/Default/Admin/ajouterMatiere.html.twig */
class __TwigTemplate_633b1bc6b4f5092c4cbf93b1ee354bfee7b435bdeb967a140d1b3bb274665892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/ajouterMatiere.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_67e6430febe883ae9f688ec9ac42c23f6e21ea3d4a9893decf3cf5a47e85e53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e6430febe883ae9f688ec9ac42c23f6e21ea3d4a9893decf3cf5a47e85e53c->enter($__internal_67e6430febe883ae9f688ec9ac42c23f6e21ea3d4a9893decf3cf5a47e85e53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Ajouter une matiere
";

        $__internal_67e6430febe883ae9f688ec9ac42c23f6e21ea3d4a9893decf3cf5a47e85e53c->leave($__internal_67e6430febe883ae9f688ec9ac42c23f6e21ea3d4a9893decf3cf5a47e85e53c_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_07c0c393f2c195f6c4cd10c4d691d6b16c20d631240ecdc5f5ccab60a7c71111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c0c393f2c195f6c4cd10c4d691d6b16c20d631240ecdc5f5ccab60a7c71111->enter($__internal_07c0c393f2c195f6c4cd10c4d691d6b16c20d631240ecdc5f5ccab60a7c71111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_07c0c393f2c195f6c4cd10c4d691d6b16c20d631240ecdc5f5ccab60a7c71111->leave($__internal_07c0c393f2c195f6c4cd10c4d691d6b16c20d631240ecdc5f5ccab60a7c71111_prof);

    }

    // line 3

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_2830ea199f257fb2d872033a05facde55cd7c19970c5b836d359fd9c9e6dda84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2830ea199f257fb2d872033a05facde55cd7c19970c5b836d359fd9c9e6dda84->enter($__internal_2830ea199f257fb2d872033a05facde55cd7c19970c5b836d359fd9c9e6dda84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_2830ea199f257fb2d872033a05facde55cd7c19970c5b836d359fd9c9e6dda84->leave($__internal_2830ea199f257fb2d872033a05facde55cd7c19970c5b836d359fd9c9e6dda84_prof);

    }

    // line 7

    public function isTraitable()
    {
        return false;
    }

    // line 74

    public function getDebugInfo()
    {
        return array(200 => 124, 190 => 120, 186 => 118, 182 => 117, 172 => 110, 135 => 75, 129 => 74, 80 => 30, 56 => 8, 50 => 7, 42 => 4, 36 => 3, 11 => 1,);
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



{% endblock %}", "@projet/Default/Admin/ajouterMatiere.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\ajouterMatiere.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0bae1e0d41d2f536d9dd4787710e68604e456b972c1380ea352de80d9601801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0bae1e0d41d2f536d9dd4787710e68604e456b972c1380ea352de80d9601801->enter($__internal_c0bae1e0d41d2f536d9dd4787710e68604e456b972c1380ea352de80d9601801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/ajouterMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_c0bae1e0d41d2f536d9dd4787710e68604e456b972c1380ea352de80d9601801->leave($__internal_c0bae1e0d41d2f536d9dd4787710e68604e456b972c1380ea352de80d9601801_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/ajouterMatiere.html.twig";
    }
}
