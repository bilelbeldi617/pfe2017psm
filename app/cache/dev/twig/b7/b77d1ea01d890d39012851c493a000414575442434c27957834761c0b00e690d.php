<?php

/* @projet/Default/Admin/listerEleveParGroupe.html.twig */
class __TwigTemplate_7378be0c181d0e9f3ae32a3f4d437b0b5982fc84824f6ae3390476ab2be440b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/listerEleveParGroupe.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_6d1264f4c9b86d308e658d30bee3652eb8ce3c43519a2d4095f87018b2d8b977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1264f4c9b86d308e658d30bee3652eb8ce3c43519a2d4095f87018b2d8b977->enter($__internal_6d1264f4c9b86d308e658d30bee3652eb8ce3c43519a2d4095f87018b2d8b977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lister eleves par groupe
";

        $__internal_6d1264f4c9b86d308e658d30bee3652eb8ce3c43519a2d4095f87018b2d8b977->leave($__internal_6d1264f4c9b86d308e658d30bee3652eb8ce3c43519a2d4095f87018b2d8b977_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_1d5076bc34eb877d0d7fa10a41b943691a934e95575c6446de86a64fa8f8c190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5076bc34eb877d0d7fa10a41b943691a934e95575c6446de86a64fa8f8c190->enter($__internal_1d5076bc34eb877d0d7fa10a41b943691a934e95575c6446de86a64fa8f8c190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 9
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function () {
            \$(\"#tableEleve\").dataTable();
        });
    </script>
";

        $__internal_1d5076bc34eb877d0d7fa10a41b943691a934e95575c6446de86a64fa8f8c190->leave($__internal_1d5076bc34eb877d0d7fa10a41b943691a934e95575c6446de86a64fa8f8c190_prof);

    }

    // line 3

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_f3c25b8949baa8cf043f88e97c4d0f8695017c40f7f981a8a135a4db95ea4227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c25b8949baa8cf043f88e97c4d0f8695017c40f7f981a8a135a4db95ea4227->enter($__internal_f3c25b8949baa8cf043f88e97c4d0f8695017c40f7f981a8a135a4db95ea4227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 16
        echo "
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <hr class=\"hr-2\">
            <div class=\"row\">

                ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["listEleve"]) ? $context["listEleve"] : $this->getContext($context, "listEleve"))) == 0)) {
            // line 24
            echo "

                    <div class=\"alert alert-warning\" align=\"center\">
                        <h2>Ce groupe est vide !</h2>
                        <br>
                        <h4>Lister les élèves et les affecter d'abord !</h4>
                        <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerEleves");
            echo "\">Lister les élèves</a>
                    </div>



                ";
        } else {
            // line 36
            echo "                    <table id=\"tableEleve\" cellspacing=\"0\" width=\"80%\">
                        <thead>
                        <tr class=\"table-header\">
                            <th>Matricule élève</th>
                            <th>Nom élève</th>
                            <th>Prénom élève</th>
                            <th>Date naissance</th>
                            <th>Sexe</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Matricule élève</th>
                            <th>Nom élève</th>
                            <th>Prénom élève</th>
                            <th>Date naissance</th>
                            <th>Sexe</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listEleve"]) ? $context["listEleve"] : $this->getContext($context, "listEleve")));
            foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
                // line 57
                echo "                            <tr>
                                <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "matriculeEleve", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "nomEleve", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenomEleve", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["eleve"], "dateNaissanceEleve", array()), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "sexeEleve", array()), "html", null, true);
                echo "</td>


                            </tr>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 71
        echo "            </div>
        </div>
    </div>

";

        $__internal_f3c25b8949baa8cf043f88e97c4d0f8695017c40f7f981a8a135a4db95ea4227->leave($__internal_f3c25b8949baa8cf043f88e97c4d0f8695017c40f7f981a8a135a4db95ea4227_prof);

    }

    // line 8

    public function isTraitable()
    {
        return false;
    }

    // line 15

    public function getDebugInfo()
    {
        return array(164 => 71, 159 => 68, 147 => 62, 143 => 61, 139 => 60, 135 => 59, 131 => 58, 128 => 57, 124 => 56, 102 => 36, 93 => 30, 85 => 24, 83 => 23, 74 => 16, 68 => 15, 56 => 9, 50 => 8, 42 => 4, 36 => 3, 11 => 1,);
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
    Lister eleves par groupe
{% endblock %}


{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function () {
            \$(\"#tableEleve\").dataTable();
        });
    </script>
{% endblock %}
{% block mainContent %}

    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <hr class=\"hr-2\">
            <div class=\"row\">

                {% if listEleve|length == 0 %}


                    <div class=\"alert alert-warning\" align=\"center\">
                        <h2>Ce groupe est vide !</h2>
                        <br>
                        <h4>Lister les élèves et les affecter d'abord !</h4>
                        <a href=\"{{ path('listerEleves') }}\">Lister les élèves</a>
                    </div>



                {% else %}
                    <table id=\"tableEleve\" cellspacing=\"0\" width=\"80%\">
                        <thead>
                        <tr class=\"table-header\">
                            <th>Matricule élève</th>
                            <th>Nom élève</th>
                            <th>Prénom élève</th>
                            <th>Date naissance</th>
                            <th>Sexe</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Matricule élève</th>
                            <th>Nom élève</th>
                            <th>Prénom élève</th>
                            <th>Date naissance</th>
                            <th>Sexe</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        {% for eleve in listEleve %}
                            <tr>
                                <td>{{ eleve.matriculeEleve }}</td>
                                <td>{{ eleve.nomEleve }}</td>
                                <td>{{ eleve.prenomEleve }}</td>
                                <td>{{ eleve.dateNaissanceEleve | date(\"d-m-Y\") }}</td>
                                <td>{{ eleve.sexeEleve }}</td>


                            </tr>

                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>
    </div>

{% endblock %}", "@projet/Default/Admin/listerEleveParGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerEleveParGroupe.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01015fd81ee76fe3b6d757c2fdd3db8a831e1a97af6955dc83794edc5d589a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01015fd81ee76fe3b6d757c2fdd3db8a831e1a97af6955dc83794edc5d589a9c->enter($__internal_01015fd81ee76fe3b6d757c2fdd3db8a831e1a97af6955dc83794edc5d589a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerEleveParGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_01015fd81ee76fe3b6d757c2fdd3db8a831e1a97af6955dc83794edc5d589a9c->leave($__internal_01015fd81ee76fe3b6d757c2fdd3db8a831e1a97af6955dc83794edc5d589a9c_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerEleveParGroupe.html.twig";
    }
}
