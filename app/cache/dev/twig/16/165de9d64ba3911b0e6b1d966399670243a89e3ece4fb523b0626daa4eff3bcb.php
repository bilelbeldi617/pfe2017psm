<?php

/* projetBundle:Default/Parent:consulterHistorique.html.twig */

class __TwigTemplate_a2836d281b1d0766df23c79da1b806f98b8dc25d96b490c42265f571db13f450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForParent.html.twig", "projetBundle:Default/Parent:consulterHistorique.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_f31e0df783000072ff78f44941e752c30bd737b4ec7f311aefc9e50788b10bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31e0df783000072ff78f44941e752c30bd737b4ec7f311aefc9e50788b10bb4->enter($__internal_f31e0df783000072ff78f44941e752c30bd737b4ec7f311aefc9e50788b10bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Historique
";

        $__internal_f31e0df783000072ff78f44941e752c30bd737b4ec7f311aefc9e50788b10bb4->leave($__internal_f31e0df783000072ff78f44941e752c30bd737b4ec7f311aefc9e50788b10bb4_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_b692fde5888ed3ebad6ee9a89d45dc5fa16c7e82317b79e8692776e098af6ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b692fde5888ed3ebad6ee9a89d45dc5fa16c7e82317b79e8692776e098af6ed5->enter($__internal_b692fde5888ed3ebad6ee9a89d45dc5fa16c7e82317b79e8692776e098af6ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["historique"]) ? $context["historique"] : $this->getContext($context, "historique")));
        foreach ($context['_seq'] as $context["_key"] => $context["resultatEleve"]) {
            // line 10
            echo "
        <hr>
        <hr>
        <br>
        <hr>
        <hr>

        ";
            // line 17
            if ((null === $context["resultatEleve"])) {
                // line 18
                echo "
                <hr>
            ";
            } else {
                // line 21
                echo "                <center><h4><b>* Annee Scolaire : </b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatEleve"], "anneescolaire", array()), "periode", array()), "html", null, true);
                echo "</h4></center>
                <div>


                    <div class=\"row col-xs-8\">
                        <h4><b>* Bulletin élève : </b>";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["nomPrenomEleve"]) ? $context["nomPrenomEleve"] : $this->getContext($context, "nomPrenomEleve")), "html", null, true);
                echo "</h4>
                    </div>
                    <div class=\"row col-xs-4\">
                        <h4><b>* Matricule : </b>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatEleve"], "eleve", array()), "matriculeEleve", array()), "html", null, true);
                echo "</h4>
                    </div>
                    <center> <h4><b>* Trimestre : </b>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["resultatEleve"], "trimestres", array()), "html", null, true);
                echo "</h4></center>
                </div>


            <div class=\"row\" align=\"center\">

                <table border=\"1\" class=\"table table-responsive\" style=\"margin-top: 40px\">
                    <tr class=\"table-header\"><td>Matiere</td><td>Note 1</td> <td>Note 2</td><td>Note 3</td><td>Enseignant</td><td>Moyenne</td><td>Remarque de l'enseignant</td></tr>
                    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["resultatEleve"], "resultat", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 40
                    echo "                    <tr align=\"center\"><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "matiere", array()), "html", null, true);
                    echo "</td>

                        ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 2));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 43
                        echo "                            ";
                        if (!$this->getAttribute($this->getAttribute($context["r"], "note", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                            // line 44
                            echo "                                <td> --- </td>
                            ";
                        } else {
                            // line 46
                            echo "                                <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "note", array()), $context["i"], array(), "array"), "2", ".", ","), "html", null, true);
                            echo " </td>
                            ";
                        }
                        // line 48
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "

                        <td>
                            ";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "nomenseignant", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "prenomenseignant", array()), "html", null, true);
                    echo "
                        </td>
                        <td>
                            ";
                    // line 56
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["r"], "moyenne", array()), "2", ".", ","), "html", null, true);
                    echo "
                        </td>
                        <td>
                            <br><br>
                        </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "
                    <tr align=\"center\"><td colspan=\"6\"><h4>Moyenne Générale</h4></td><td><h4>";
                // line 63
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["resultatEleve"], "moyennegenerale", array()), "2", ".", ","), "html", null, true);
                echo "</h4></td></tr>
                </table>
            </div>
            ";
            }
            // line 67
            echo "
        <hr class=\"hr-4\">
        <br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultatEleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
    </div>
";

        $__internal_b692fde5888ed3ebad6ee9a89d45dc5fa16c7e82317b79e8692776e098af6ed5->leave($__internal_b692fde5888ed3ebad6ee9a89d45dc5fa16c7e82317b79e8692776e098af6ed5_prof);

    }

    // line 2

    public function isTraitable()
    {
        return false;
    }

    // line 6

    public function getDebugInfo()
    {
        return array(188 => 71, 179 => 67, 172 => 63, 169 => 62, 157 => 56, 149 => 53, 144 => 50, 137 => 48, 131 => 46, 127 => 44, 124 => 43, 120 => 42, 114 => 40, 110 => 39, 99 => 31, 94 => 29, 88 => 26, 79 => 21, 74 => 18, 72 => 17, 63 => 10, 59 => 9, 55 => 7, 49 => 6, 41 => 3, 35 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForParent.html.twig\" %}
{% block title %}
    Historique
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
    {% for resultatEleve in historique %}

        <hr>
        <hr>
        <br>
        <hr>
        <hr>

        {% if resultatEleve is null %}

                <hr>
            {% else %}
                <center><h4><b>* Annee Scolaire : </b>{{ resultatEleve.anneescolaire.periode }}</h4></center>
                <div>


                    <div class=\"row col-xs-8\">
                        <h4><b>* Bulletin élève : </b>{{ nomPrenomEleve }}</h4>
                    </div>
                    <div class=\"row col-xs-4\">
                        <h4><b>* Matricule : </b>{{ resultatEleve.eleve.matriculeEleve }}</h4>
                    </div>
                    <center> <h4><b>* Trimestre : </b>{{ resultatEleve.trimestres }}</h4></center>
                </div>


            <div class=\"row\" align=\"center\">

                <table border=\"1\" class=\"table table-responsive\" style=\"margin-top: 40px\">
                    <tr class=\"table-header\"><td>Matiere</td><td>Note 1</td> <td>Note 2</td><td>Note 3</td><td>Enseignant</td><td>Moyenne</td><td>Remarque de l'enseignant</td></tr>
                    {% for r in resultatEleve.resultat %}
                    <tr align=\"center\"><td>{{ r.matiere }}</td>

                        {% for i in 0..2 %}
                            {% if r.note[i] is not defined  %}
                                <td> --- </td>
                            {% else %}
                                <td> {{ r.note[i] | number_format(\"2\", \".\", \",\") }} </td>
                            {% endif %}

                        {% endfor %}


                        <td>
                            {{ r.nomenseignant.nomenseignant}} {{ r.nomenseignant.prenomenseignant }}
                        </td>
                        <td>
                            {{ r.moyenne | number_format(\"2\", \".\", \",\") }}
                        </td>
                        <td>
                            <br><br>
                        </td>
                        {% endfor %}

                    <tr align=\"center\"><td colspan=\"6\"><h4>Moyenne Générale</h4></td><td><h4>{{ resultatEleve.moyennegenerale | number_format(\"2\", \".\", \",\") }}</h4></td></tr>
                </table>
            </div>
            {% endif %}

        <hr class=\"hr-4\">
        <br>
    {% endfor %}

    </div>
{% endblock %}", "projetBundle:Default/Parent:consulterHistorique.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/consulterHistorique.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9884c11ed31b2a056c65854def4e0ac624eab3dffe59cbf6996abced00940a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9884c11ed31b2a056c65854def4e0ac624eab3dffe59cbf6996abced00940a7f->enter($__internal_9884c11ed31b2a056c65854def4e0ac624eab3dffe59cbf6996abced00940a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:consulterHistorique.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_9884c11ed31b2a056c65854def4e0ac624eab3dffe59cbf6996abced00940a7f->leave($__internal_9884c11ed31b2a056c65854def4e0ac624eab3dffe59cbf6996abced00940a7f_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:consulterHistorique.html.twig";
    }
}
