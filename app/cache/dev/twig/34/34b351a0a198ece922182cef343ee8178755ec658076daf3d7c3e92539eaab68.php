<?php

/* @projet/Default/Parent/consulterPaiement.html.twig */
class __TwigTemplate_c545f662518d4aabf6652141e68abc90fb4efc63f9d4be862defcb43c0b0ce41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "@projet/Default/Parent/consulterPaiement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_fac2c417e3af3fccc937608beaf448ad7c255d50e0a89fa4cf65ce05163ca278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac2c417e3af3fccc937608beaf448ad7c255d50e0a89fa4cf65ce05163ca278->enter($__internal_fac2c417e3af3fccc937608beaf448ad7c255d50e0a89fa4cf65ce05163ca278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Consulter les paiements
";

        $__internal_fac2c417e3af3fccc937608beaf448ad7c255d50e0a89fa4cf65ce05163ca278->leave($__internal_fac2c417e3af3fccc937608beaf448ad7c255d50e0a89fa4cf65ce05163ca278_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_44f0a8267647de9c8f61017b345be4717e16e633e137f0c0e8f960544e89619e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f0a8267647de9c8f61017b345be4717e16e633e137f0c0e8f960544e89619e->enter($__internal_44f0a8267647de9c8f61017b345be4717e16e633e137f0c0e8f960544e89619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#tablePaiement\").dataTable();
        })
    </script>
";

        $__internal_44f0a8267647de9c8f61017b345be4717e16e633e137f0c0e8f960544e89619e->leave($__internal_44f0a8267647de9c8f61017b345be4717e16e633e137f0c0e8f960544e89619e_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_0c8ca7cb557570b8a43f1bbde6e363c68ae70ffefce951aa9fe793907280e0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c8ca7cb557570b8a43f1bbde6e363c68ae70ffefce951aa9fe793907280e0c2->enter($__internal_0c8ca7cb557570b8a43f1bbde6e363c68ae70ffefce951aa9fe793907280e0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 15
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <center><h4>La liste des paiements de l'élève : <b>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenomeleve", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nomeleve", array()), "html", null, true);
        echo "</b></h4></center>
        <table class=\"table table-bordered\" width=\"80%\" id=\"tablePaiement\" style=\"margin-top: 50px;\">
            <thead>
                <th>Annee Scolaire</th>
                <th>Trimestre</th>
                <th>Frais</th>
                <th>Montant</th>
                <th>Etat</th>
            </thead>
            <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paiements"]) ? $context["paiements"] : $this->getContext($context, "paiements")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 28
            echo "                    <tr>

                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "anneescolaire", array()), "periode", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "trimestre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "frais", array()), "typefrais", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "frais", array()), "montantfrais", array()), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 35
            if (($this->getAttribute($context["p"], "etat", array()) == "NP")) {
                // line 36
                echo "                                Non Payé
                                ";
            } else {
                // line 38
                echo "                                    Payé le ...
                                    ";
            }
            // line 40
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "            </tbody>
            <tfoot>
                <th>Annee Scolaire</th>
                <th>Trimestre</th>
                <th>Frais</th>
                <th>Montant</th>
                <th>Etat</th>
                </tfoot>
        </table>
        <center><h4>Question? Problème? vous pouvez contacter l'administrateur <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacterAdmin");
        echo "\"><b>içi !</b></a></h4></center>
    </div>
";

        $__internal_0c8ca7cb557570b8a43f1bbde6e363c68ae70ffefce951aa9fe793907280e0c2->leave($__internal_0c8ca7cb557570b8a43f1bbde6e363c68ae70ffefce951aa9fe793907280e0c2_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 14

    public function getDebugInfo()
    {
        return array(147 => 52, 136 => 43, 128 => 40, 124 => 38, 120 => 36, 118 => 35, 113 => 33, 109 => 32, 105 => 31, 101 => 30, 97 => 28, 93 => 27, 78 => 17, 74 => 15, 68 => 14, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForParent.html.twig\" %}
{% block title %}
    Consulter les paiements
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#tablePaiement\").dataTable();
        })
    </script>
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <center><h4>La liste des paiements de l'élève : <b>{{ eleve.prenomeleve }} {{ eleve.nomeleve }}</b></h4></center>
        <table class=\"table table-bordered\" width=\"80%\" id=\"tablePaiement\" style=\"margin-top: 50px;\">
            <thead>
                <th>Annee Scolaire</th>
                <th>Trimestre</th>
                <th>Frais</th>
                <th>Montant</th>
                <th>Etat</th>
            </thead>
            <tbody>
            {% for p in paiements %}
                    <tr>

                        <td>{{ p.anneescolaire.periode }}</td>
                        <td>{{ p.trimestre }}</td>
                        <td>{{ p.frais.typefrais }}</td>
                        <td>{{ p.frais.montantfrais }}</td>
                        <td>
                            {% if p.etat == \"NP\" %}
                                Non Payé
                                {% else %}
                                    Payé le ...
                                    {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                <th>Annee Scolaire</th>
                <th>Trimestre</th>
                <th>Frais</th>
                <th>Montant</th>
                <th>Etat</th>
                </tfoot>
        </table>
        <center><h4>Question? Problème? vous pouvez contacter l'administrateur <a href=\"{{ path('contacterAdmin') }}\"><b>içi !</b></a></h4></center>
    </div>
{% endblock %}", "@projet/Default/Parent/consulterPaiement.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\consulterPaiement.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be9b593aba7dfa4baa0e43a892da72b78903d5e5be1090b580261cbe95cbeac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9b593aba7dfa4baa0e43a892da72b78903d5e5be1090b580261cbe95cbeac8->enter($__internal_be9b593aba7dfa4baa0e43a892da72b78903d5e5be1090b580261cbe95cbeac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/consulterPaiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_be9b593aba7dfa4baa0e43a892da72b78903d5e5be1090b580261cbe95cbeac8->leave($__internal_be9b593aba7dfa4baa0e43a892da72b78903d5e5be1090b580261cbe95cbeac8_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/consulterPaiement.html.twig";
    }
}
