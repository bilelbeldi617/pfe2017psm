<?php

/* projetBundle:Default/Enseignant:saisirCahierTexte.html.twig */

class __TwigTemplate_d2dd2b02156109f2d863cd40d8b0891e920ac50bd982b1e0161cc03ed9d23ac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForEnseignant.html.twig", "projetBundle:Default/Enseignant:saisirCahierTexte.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_91abbb7b5b613b217f883985d0e70fb3e22b35977450380bdf3eafbe8263c73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91abbb7b5b613b217f883985d0e70fb3e22b35977450380bdf3eafbe8263c73b->enter($__internal_91abbb7b5b613b217f883985d0e70fb3e22b35977450380bdf3eafbe8263c73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Saisir le cahier de texte
";

        $__internal_91abbb7b5b613b217f883985d0e70fb3e22b35977450380bdf3eafbe8263c73b->leave($__internal_91abbb7b5b613b217f883985d0e70fb3e22b35977450380bdf3eafbe8263c73b_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_d2011abc2f368a545b6bb1847657932bbfa2978ad599fbf02eb86f25c2472124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2011abc2f368a545b6bb1847657932bbfa2978ad599fbf02eb86f25c2472124->enter($__internal_d2011abc2f368a545b6bb1847657932bbfa2978ad599fbf02eb86f25c2472124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_d2011abc2f368a545b6bb1847657932bbfa2978ad599fbf02eb86f25c2472124->leave($__internal_d2011abc2f368a545b6bb1847657932bbfa2978ad599fbf02eb86f25c2472124_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_fe1c4a4bff0a401eebf3de54520cea754860873830375f16fea53e0fad4029f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1c4a4bff0a401eebf3de54520cea754860873830375f16fea53e0fad4029f1->enter($__internal_fe1c4a4bff0a401eebf3de54520cea754860873830375f16fea53e0fad4029f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_fe1c4a4bff0a401eebf3de54520cea754860873830375f16fea53e0fad4029f1->leave($__internal_fe1c4a4bff0a401eebf3de54520cea754860873830375f16fea53e0fad4029f1_prof);

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



", "projetBundle:Default/Enseignant:saisirCahierTexte.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/saisirCahierTexte.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e23136f5bfa31bef386ef045094bb0687bdc9a7a825739d8ecb8f7572c69316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e23136f5bfa31bef386ef045094bb0687bdc9a7a825739d8ecb8f7572c69316->enter($__internal_7e23136f5bfa31bef386ef045094bb0687bdc9a7a825739d8ecb8f7572c69316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:saisirCahierTexte.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_7e23136f5bfa31bef386ef045094bb0687bdc9a7a825739d8ecb8f7572c69316->leave($__internal_7e23136f5bfa31bef386ef045094bb0687bdc9a7a825739d8ecb8f7572c69316_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:saisirCahierTexte.html.twig";
    }
}
