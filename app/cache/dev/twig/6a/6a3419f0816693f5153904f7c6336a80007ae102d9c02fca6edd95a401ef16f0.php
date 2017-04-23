<?php

/* @projet/Default/Admin/consulterPaiements.html.twig */
class __TwigTemplate_1db735a293992bd4aef67b5bcd190d3566126cd9b99c0b09a05d68a4ec029905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "@projet/Default/Admin/consulterPaiements.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_e7edbc6746c587fd93ee4cf434b67896c4b99162107b63e6eabf83a26a82d29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7edbc6746c587fd93ee4cf434b67896c4b99162107b63e6eabf83a26a82d29e->enter($__internal_e7edbc6746c587fd93ee4cf434b67896c4b99162107b63e6eabf83a26a82d29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    La liste des paiements
";

        $__internal_e7edbc6746c587fd93ee4cf434b67896c4b99162107b63e6eabf83a26a82d29e->leave($__internal_e7edbc6746c587fd93ee4cf434b67896c4b99162107b63e6eabf83a26a82d29e_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_0cc709d9b4663d41dc700025025c2691ce196374c1255668f8188e68f7128825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc709d9b4663d41dc700025025c2691ce196374c1255668f8188e68f7128825->enter($__internal_0cc709d9b4663d41dc700025025c2691ce196374c1255668f8188e68f7128825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 8
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <table class=\"table table-bordered\" border=\"1\" width=\"80%\">
            <tr class=\"table-header\">
                <td>Eleve</td>
                <td>Types Frais</td>
                <td>Total</td>
                <td>Etat</td>
                <td>Payer</td>
            </tr>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listPaiements"]) ? $context["listPaiements"] : $this->getContext($context, "listPaiements")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 19
            echo "                <tr>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "eleve", array()), "prenomEleve", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "eleve", array()), "nomEleve", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "fraisPaiement", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "totalePaiement", array()), "html", null, true);
            echo " DT</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "etatPaiement", array()), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 25
            if (($this->getAttribute($context["p"], "etatPaiement", array()) != "2 tranches payés")) {
                // line 26
                echo "                            <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("payer");
                echo "?idPaiement=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
                echo "\">Payer</a>
                            ";
            } else {
                // line 28
                echo "                                <a href=\"\">Plus d'infos</a>
                                ";
            }
            // line 30
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </table>
    </div>
";

        $__internal_0cc709d9b4663d41dc700025025c2691ce196374c1255668f8188e68f7128825->leave($__internal_0cc709d9b4663d41dc700025025c2691ce196374c1255668f8188e68f7128825_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 7

    public function getDebugInfo()
    {
        return array(115 => 33, 107 => 30, 103 => 28, 95 => 26, 93 => 25, 88 => 23, 84 => 22, 80 => 21, 74 => 20, 71 => 19, 67 => 18, 55 => 8, 49 => 7, 41 => 4, 35 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForAdmin.html.twig\" %}

{% block title %}
    La liste des paiements
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <table class=\"table table-bordered\" border=\"1\" width=\"80%\">
            <tr class=\"table-header\">
                <td>Eleve</td>
                <td>Types Frais</td>
                <td>Total</td>
                <td>Etat</td>
                <td>Payer</td>
            </tr>
            {% for p in listPaiements %}
                <tr>
                    <td>{{ p.eleve.prenomEleve }} {{ p.eleve.nomEleve }}</td>
                    <td>{{ p.fraisPaiement }}</td>
                    <td>{{ p.totalePaiement }} DT</td>
                    <td>{{ p.etatPaiement }}</td>
                    <td>
                        {% if p.etatPaiement != \"2 tranches payés\"%}
                            <a href=\"{{ path('payer') }}?idPaiement={{ p.id }}\">Payer</a>
                            {% else %}
                                <a href=\"\">Plus d'infos</a>
                                {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}", "@projet/Default/Admin/consulterPaiements.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\consulterPaiements.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3db65bc2b63d5905c5c7ff8b9efa017bd935652ac155008c18d088f011144aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3db65bc2b63d5905c5c7ff8b9efa017bd935652ac155008c18d088f011144aa->enter($__internal_a3db65bc2b63d5905c5c7ff8b9efa017bd935652ac155008c18d088f011144aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/consulterPaiements.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_a3db65bc2b63d5905c5c7ff8b9efa017bd935652ac155008c18d088f011144aa->leave($__internal_a3db65bc2b63d5905c5c7ff8b9efa017bd935652ac155008c18d088f011144aa_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/consulterPaiements.html.twig";
    }
}
