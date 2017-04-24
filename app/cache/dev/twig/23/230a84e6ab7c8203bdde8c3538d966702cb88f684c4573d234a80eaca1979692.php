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

    protected function doGetParent(array $context)
    {
        return "baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e844ebf935343a80eb2ba70939f386a734ee30e04df97f379e21545434466ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e844ebf935343a80eb2ba70939f386a734ee30e04df97f379e21545434466ec0->enter($__internal_e844ebf935343a80eb2ba70939f386a734ee30e04df97f379e21545434466ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Enseignant/saisirCahierTexte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e844ebf935343a80eb2ba70939f386a734ee30e04df97f379e21545434466ec0->leave($__internal_e844ebf935343a80eb2ba70939f386a734ee30e04df97f379e21545434466ec0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3902e73c50a3a5653e2c227137338191d486c9aaf5ba339091af30524ddcb765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3902e73c50a3a5653e2c227137338191d486c9aaf5ba339091af30524ddcb765->enter($__internal_3902e73c50a3a5653e2c227137338191d486c9aaf5ba339091af30524ddcb765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Saisir le cahier de texte
";
        
        $__internal_3902e73c50a3a5653e2c227137338191d486c9aaf5ba339091af30524ddcb765->leave($__internal_3902e73c50a3a5653e2c227137338191d486c9aaf5ba339091af30524ddcb765_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_87711fc9a1659685eed6cf7df83f7dc7c890de2e032d9a69cb626a6c5096dd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87711fc9a1659685eed6cf7df83f7dc7c890de2e032d9a69cb626a6c5096dd81->enter($__internal_87711fc9a1659685eed6cf7df83f7dc7c890de2e032d9a69cb626a6c5096dd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_87711fc9a1659685eed6cf7df83f7dc7c890de2e032d9a69cb626a6c5096dd81->leave($__internal_87711fc9a1659685eed6cf7df83f7dc7c890de2e032d9a69cb626a6c5096dd81_prof);

    }

    // line 28
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_9bdcd675e5e32b28af6a96d9e64ebfc57b3c7ccef6650a07946654e51616097a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdcd675e5e32b28af6a96d9e64ebfc57b3c7ccef6650a07946654e51616097a->enter($__internal_9bdcd675e5e32b28af6a96d9e64ebfc57b3c7ccef6650a07946654e51616097a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_9bdcd675e5e32b28af6a96d9e64ebfc57b3c7ccef6650a07946654e51616097a->leave($__internal_9bdcd675e5e32b28af6a96d9e64ebfc57b3c7ccef6650a07946654e51616097a_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/saisirCahierTexte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 48,  119 => 44,  111 => 43,  108 => 42,  104 => 41,  90 => 29,  84 => 28,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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
}
