<?php

/* @projet/Default/Admin/afficherBulletinGroupe.html.twig */
class __TwigTemplate_de3987cb02ab3167394b11740ebf6b5e4884887529046a0b5dca7904f13bb821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/afficherBulletinGroupe.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e195eee300f79cf2e5e17b4b243fa87199b9f8552e5a270172a9f6ce511fe4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e195eee300f79cf2e5e17b4b243fa87199b9f8552e5a270172a9f6ce511fe4f->enter($__internal_8e195eee300f79cf2e5e17b4b243fa87199b9f8552e5a270172a9f6ce511fe4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/afficherBulletinGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e195eee300f79cf2e5e17b4b243fa87199b9f8552e5a270172a9f6ce511fe4f->leave($__internal_8e195eee300f79cf2e5e17b4b243fa87199b9f8552e5a270172a9f6ce511fe4f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_de4882fa98e741f877668d076254be4d8362391099655e2312b5c474e45a1236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4882fa98e741f877668d076254be4d8362391099655e2312b5c474e45a1236->enter($__internal_de4882fa98e741f877668d076254be4d8362391099655e2312b5c474e45a1236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Affichage Bulletin par groupe
";
        
        $__internal_de4882fa98e741f877668d076254be4d8362391099655e2312b5c474e45a1236->leave($__internal_de4882fa98e741f877668d076254be4d8362391099655e2312b5c474e45a1236_prof);

    }

    // line 6
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_331db44407e6340987a9f6635ed5199caa9f14bb0b0af16b1952b682fef1df33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_331db44407e6340987a9f6635ed5199caa9f14bb0b0af16b1952b682fef1df33->enter($__internal_331db44407e6340987a9f6635ed5199caa9f14bb0b0af16b1952b682fef1df33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    <hr class=\"hr-4\">



        <div class=\"col-xs-12\" id=\"printable\">


           ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listResultat"]) ? $context["listResultat"] : $this->getContext($context, "listResultat")));
        foreach ($context['_seq'] as $context["_key"] => $context["resultatEleve"]) {
            // line 15
            echo "               ";
            if ((null === $context["resultatEleve"])) {
                // line 16
                echo "                   <hr>
                   ";
            } else {
                // line 18
                echo "
            <div>
                <div class=\"row col-xs-8\">
                    <h4><b>* Bulletin élève : </b>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatEleve"], "eleve", array()), "nomeleve", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatEleve"], "eleve", array()), "prenomeleve", array()), "html", null, true);
                echo "</h4>
                </div>
                <div class=\"row col-xs-4\">
                    <h4><b>* Matricule : </b>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatEleve"], "eleve", array()), "matriculeeleve", array()), "html", null, true);
                echo "</h4>
                </div>
            </div>

            <div class=\"row\" align=\"center\">

                <table border=\"1\" class=\"table table-responsive\" style=\"margin-top: 40px\">
                    <tr class=\"table-header\"><td>Matiere</td><td>Note 1</td> <td>Note 2</td><td>Note 3</td><td>Enseignant</td><td>Moyenne</td><td>Remarque de l'enseignant</td></tr>
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["resultatEleve"], "listResultat", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 33
                    echo "                    <tr align=\"center\"><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "matiere", array()), "html", null, true);
                    echo "</td>

                        ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 2));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 36
                        echo "                            ";
                        if ( !$this->getAttribute($this->getAttribute($context["r"], "note", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                            // line 37
                            echo "                                <td> --- </td>
                            ";
                        } else {
                            // line 39
                            echo "                                <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "note", array()), $context["i"], array(), "array"), "2", ".", ","), "html", null, true);
                            echo " </td>
                            ";
                        }
                        // line 41
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "

                        <td>
                            ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "nomenseignant", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "prenomenseignant", array()), "html", null, true);
                    echo "
                        </td>
                        <td>
                            ";
                    // line 49
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
                // line 55
                echo "
                    <tr align=\"center\"><td colspan=\"6\"><h4>Moyenne Générale</h4></td><td><h4>";
                // line 56
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["resultatEleve"], "moyenneGeneral", array()), "2", ".", ","), "html", null, true);
                echo "</h4></td></tr>
                </table>
                <button class=\"btn btn-primary\" onclick=\"printIt()\"><i class=\"fa fa-print\"></i> Imprimer</button>
            </div>
                   ";
            }
            // line 61
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultatEleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>


";
        
        $__internal_331db44407e6340987a9f6635ed5199caa9f14bb0b0af16b1952b682fef1df33->leave($__internal_331db44407e6340987a9f6635ed5199caa9f14bb0b0af16b1952b682fef1df33_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/afficherBulletinGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  169 => 61,  161 => 56,  158 => 55,  146 => 49,  138 => 46,  133 => 43,  126 => 41,  120 => 39,  116 => 37,  113 => 36,  109 => 35,  103 => 33,  99 => 32,  88 => 24,  80 => 21,  75 => 18,  71 => 16,  68 => 15,  64 => 14,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
    Affichage Bulletin par groupe
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">



        <div class=\"col-xs-12\" id=\"printable\">


           {% for resultatEleve in listResultat %}
               {% if resultatEleve is null %}
                   <hr>
                   {% else %}

            <div>
                <div class=\"row col-xs-8\">
                    <h4><b>* Bulletin élève : </b>{{ resultatEleve.eleve.nomeleve }} {{ resultatEleve.eleve.prenomeleve }}</h4>
                </div>
                <div class=\"row col-xs-4\">
                    <h4><b>* Matricule : </b>{{ resultatEleve.eleve.matriculeeleve }}</h4>
                </div>
            </div>

            <div class=\"row\" align=\"center\">

                <table border=\"1\" class=\"table table-responsive\" style=\"margin-top: 40px\">
                    <tr class=\"table-header\"><td>Matiere</td><td>Note 1</td> <td>Note 2</td><td>Note 3</td><td>Enseignant</td><td>Moyenne</td><td>Remarque de l'enseignant</td></tr>
                    {% for r in resultatEleve.listResultat %}
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

                    <tr align=\"center\"><td colspan=\"6\"><h4>Moyenne Générale</h4></td><td><h4>{{ resultatEleve.moyenneGeneral | number_format(\"2\", \".\", \",\") }}</h4></td></tr>
                </table>
                <button class=\"btn btn-primary\" onclick=\"printIt()\"><i class=\"fa fa-print\"></i> Imprimer</button>
            </div>
                   {% endif %}
               {% endfor %}
        </div>


{% endblock %}", "@projet/Default/Admin/afficherBulletinGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\afficherBulletinGroupe.html.twig");
    }
}
