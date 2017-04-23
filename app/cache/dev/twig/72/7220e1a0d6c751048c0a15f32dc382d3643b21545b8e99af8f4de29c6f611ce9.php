<?php

/* projetBundle:Default/Parent:consulterPaiement.html.twig */

class __TwigTemplate_36f67fca02490f1ff5369677c2747fcf670a0c4ffa58455f0681c7781c85d504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "projetBundle:Default/Parent:consulterPaiement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_0e787be6e498a0e5e2272b8cd6e3868bfa7355ccdcf3864a834dbe6369bdc38a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e787be6e498a0e5e2272b8cd6e3868bfa7355ccdcf3864a834dbe6369bdc38a->enter($__internal_0e787be6e498a0e5e2272b8cd6e3868bfa7355ccdcf3864a834dbe6369bdc38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Consulter les paiements
";

        $__internal_0e787be6e498a0e5e2272b8cd6e3868bfa7355ccdcf3864a834dbe6369bdc38a->leave($__internal_0e787be6e498a0e5e2272b8cd6e3868bfa7355ccdcf3864a834dbe6369bdc38a_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_52b8b5c4277ebdb11f46d87653ce8cd07725572ed53a430d51327f3e80999c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b8b5c4277ebdb11f46d87653ce8cd07725572ed53a430d51327f3e80999c80->enter($__internal_52b8b5c4277ebdb11f46d87653ce8cd07725572ed53a430d51327f3e80999c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#tablePaiement\").dataTable();
        })
    </script>
";

        $__internal_52b8b5c4277ebdb11f46d87653ce8cd07725572ed53a430d51327f3e80999c80->leave($__internal_52b8b5c4277ebdb11f46d87653ce8cd07725572ed53a430d51327f3e80999c80_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_29ae9d2155dcae1b93ec6dceb3c3a2c2fc0fd72064ccd67403b786c441c08ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ae9d2155dcae1b93ec6dceb3c3a2c2fc0fd72064ccd67403b786c441c08ea3->enter($__internal_29ae9d2155dcae1b93ec6dceb3c3a2c2fc0fd72064ccd67403b786c441c08ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_29ae9d2155dcae1b93ec6dceb3c3a2c2fc0fd72064ccd67403b786c441c08ea3->leave($__internal_29ae9d2155dcae1b93ec6dceb3c3a2c2fc0fd72064ccd67403b786c441c08ea3_prof);

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
{% endblock %}", "projetBundle:Default/Parent:consulterPaiement.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/consulterPaiement.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9227019977ee1714756868a6f95e6e218b8658a39784a72ccc09ebde215d1cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9227019977ee1714756868a6f95e6e218b8658a39784a72ccc09ebde215d1cc6->enter($__internal_9227019977ee1714756868a6f95e6e218b8658a39784a72ccc09ebde215d1cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:consulterPaiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_9227019977ee1714756868a6f95e6e218b8658a39784a72ccc09ebde215d1cc6->leave($__internal_9227019977ee1714756868a6f95e6e218b8658a39784a72ccc09ebde215d1cc6_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:consulterPaiement.html.twig";
    }
}
