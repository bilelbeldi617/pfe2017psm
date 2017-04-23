<?php

/* @projet/Default/Enseignant/saisirCahierTexte.html.twig */
class __TwigTemplate_6e1cc35cfb5464dac6ea8c406e917cf56784ebd24d361da84531cdef2361d662 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForEnseignant.html.twig", "@projet/Default/Enseignant/saisirCahierTexte.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_d14a28ac40516a9df26aa8628805349fc588d8be87211a5d5e12102cdc60b5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d14a28ac40516a9df26aa8628805349fc588d8be87211a5d5e12102cdc60b5a2->enter($__internal_d14a28ac40516a9df26aa8628805349fc588d8be87211a5d5e12102cdc60b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Saisir le cahier de texte
";

        $__internal_d14a28ac40516a9df26aa8628805349fc588d8be87211a5d5e12102cdc60b5a2->leave($__internal_d14a28ac40516a9df26aa8628805349fc588d8be87211a5d5e12102cdc60b5a2_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_0e6224580bc4b90180188bf30a29ea694ca123e97cc51e915e586fb1268a8743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6224580bc4b90180188bf30a29ea694ca123e97cc51e915e586fb1268a8743->enter($__internal_0e6224580bc4b90180188bf30a29ea694ca123e97cc51e915e586fb1268a8743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function () {
            \$(\"#btnCharger\").click(function () {
                var matiereGroupe = \$(\"#matiereGroupe\").val();
                if (matiereGroupe == \"null\") {
                    \$(\".alert-danger\").html(\"Veuillez sélectionner une matiere et groupe !\");
                    \$(\".alert-danger\").slideToggle();
                    setTimeout(function () {
                        \$(\".alert-danger\").slideToggle();
                    }, 2500);

                } else {
                    \$(\"#container\").slideDown();
                }
            });


        });


    </script>
";

        $__internal_0e6224580bc4b90180188bf30a29ea694ca123e97cc51e915e586fb1268a8743->leave($__internal_0e6224580bc4b90180188bf30a29ea694ca123e97cc51e915e586fb1268a8743_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_45fc4715ae355fa21c070808de569b63a804a38cc279cdf5b3ebef6275485ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fc4715ae355fa21c070808de569b63a804a38cc279cdf5b3ebef6275485ece->enter($__internal_45fc4715ae355fa21c070808de569b63a804a38cc279cdf5b3ebef6275485ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 29
        echo "
    <hr class=\"hr-4\">

    <div class=\"alert alert-danger\" style=\"display: none\"></div>

    <div class=\"col-xs-12\" align=\"center\">

        <div class=\"row\">

            <select id=\"matiereGroupe\">
                <option value=\"null\">Sélectionner une matiere</option>

                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMatiere"]) ? $context["listMatiere"] : $this->getContext($context, "listMatiere")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 42
            echo "
                    <option value=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matiere"], "matiere", array()), "id", array()), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matiere"], "groupe", array()), "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matiere"], "matiere", array()), "libelleMatiere", array()), "html", null, true);
            echo "
                        - ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matiere"], "groupe", array()), "nomGroupe", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["matiere"], "groupe", array()), "numGroupe", array()), "html", null, true);
            echo "</option>


                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
            </select>
            <input type=\"button\" value=\"Charger une page vide\" class=\"btn btn-primary\" id=\"btnCharger\">

            <div class=\"row\" align=\"center\" id=\"container\" style=\"display: none\">

                <form id=\"formulaire\">
                    <table border=\"0\">
                        <tr>
                            <td>

                            <textarea id=\"contenuJour\" placeholder=\"Ecrivez elli t7eb...\" rows=\"40\" cols=\"80\"
                                      class=\"responsive search-area\">

                    </textarea>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <input class=\"btn btn-primary\" value=\"Enregistrer\" id=\"btnEnregistrer\">
                            </td>
                        </tr>
                    </table>
                </form>


            </div>

        </div>


    </div>



";

        $__internal_45fc4715ae355fa21c070808de569b63a804a38cc279cdf5b3ebef6275485ece->leave($__internal_45fc4715ae355fa21c070808de569b63a804a38cc279cdf5b3ebef6275485ece_prof);

    }

    // line 5

    public function isTraitable()
    {
        return false;
    }

    // line 28

    public function getDebugInfo()
    {
        return array(131 => 48, 119 => 44, 111 => 43, 108 => 42, 104 => 41, 90 => 29, 84 => 28, 56 => 6, 50 => 5, 42 => 3, 36 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForEnseignant.html.twig\" %}
{% block title %}
    Saisir le cahier de texte
{% endblock %}
{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function () {
            \$(\"#btnCharger\").click(function () {
                var matiereGroupe = \$(\"#matiereGroupe\").val();
                if (matiereGroupe == \"null\") {
                    \$(\".alert-danger\").html(\"Veuillez sélectionner une matiere et groupe !\");
                    \$(\".alert-danger\").slideToggle();
                    setTimeout(function () {
                        \$(\".alert-danger\").slideToggle();
                    }, 2500);

                } else {
                    \$(\"#container\").slideDown();
                }
            });


        });


    </script>
{% endblock %}
{% block mainContent %}

    <hr class=\"hr-4\">

    <div class=\"alert alert-danger\" style=\"display: none\"></div>

    <div class=\"col-xs-12\" align=\"center\">

        <div class=\"row\">

            <select id=\"matiereGroupe\">
                <option value=\"null\">Sélectionner une matiere</option>

                {% for matiere in listMatiere %}

                    <option value=\"{{ matiere.matiere.id }}|{{ matiere.groupe.id }}\">{{ matiere.matiere.libelleMatiere }}
                        - {{ matiere.groupe.nomGroupe }} {{ matiere.groupe.numGroupe }}</option>


                {% endfor %}

            </select>
            <input type=\"button\" value=\"Charger une page vide\" class=\"btn btn-primary\" id=\"btnCharger\">

            <div class=\"row\" align=\"center\" id=\"container\" style=\"display: none\">

                <form id=\"formulaire\">
                    <table border=\"0\">
                        <tr>
                            <td>

                            <textarea id=\"contenuJour\" placeholder=\"Ecrivez elli t7eb...\" rows=\"40\" cols=\"80\"
                                      class=\"responsive search-area\">

                    </textarea>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <input class=\"btn btn-primary\" value=\"Enregistrer\" id=\"btnEnregistrer\">
                            </td>
                        </tr>
                    </table>
                </form>


            </div>

        </div>


    </div>



{% endblock %}



", "@projet/Default/Enseignant/saisirCahierTexte.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\saisirCahierTexte.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a10b9b7f8deff3f4dfae72302b8524b52198a48b039b80aeeea08f023eb3585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a10b9b7f8deff3f4dfae72302b8524b52198a48b039b80aeeea08f023eb3585->enter($__internal_1a10b9b7f8deff3f4dfae72302b8524b52198a48b039b80aeeea08f023eb3585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/saisirCahierTexte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_1a10b9b7f8deff3f4dfae72302b8524b52198a48b039b80aeeea08f023eb3585->leave($__internal_1a10b9b7f8deff3f4dfae72302b8524b52198a48b039b80aeeea08f023eb3585_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/saisirCahierTexte.html.twig";
    }
}
