<?php

/* @projet/Default/Admin/listerParents.html.twig */
class __TwigTemplate_cd840d3fb65f223421fb2b2d313e33f07fedee9b82a7f806b038570fb7bda078 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "@projet/Default/Admin/listerParents.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_9c8e4d439f001c8f0e1259ff4725588b6a7386ba51cf4401796b2d5d08c2c933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8e4d439f001c8f0e1259ff4725588b6a7386ba51cf4401796b2d5d08c2c933->enter($__internal_9c8e4d439f001c8f0e1259ff4725588b6a7386ba51cf4401796b2d5d08c2c933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    La liste des parents
";

        $__internal_9c8e4d439f001c8f0e1259ff4725588b6a7386ba51cf4401796b2d5d08c2c933->leave($__internal_9c8e4d439f001c8f0e1259ff4725588b6a7386ba51cf4401796b2d5d08c2c933_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_487983eed16bb7022ea8e293c63469f59f68c3d7872ad2baad2408b3274154a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487983eed16bb7022ea8e293c63469f59f68c3d7872ad2baad2408b3274154a4->enter($__internal_487983eed16bb7022ea8e293c63469f59f68c3d7872ad2baad2408b3274154a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 8
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <center><h4>La liste des parents</h4></center>
        <table class=\"table table-bordered\" border=\"1\" width=\"80%\">
            <tr class=\"table-header\">
                <td>Nom&Prenom</td>
                <td>CIN</td>
                <td>Num Tel</td>
                <td>Adresse</td>
                <td>Fonction</td>
                <td>E-mail</td>
                <td>Opérations</td>
            </tr>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listParent"]) ? $context["listParent"] : $this->getContext($context, "listParent")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 22
            echo "                <tr>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "nomParent", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "prenomParent", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "cinParent", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "numTelParent", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "adresseParent", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "fonctionParent", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "emailParent", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulterPaiements");
            echo "?idParent=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\">Paiements</a> </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </table>
    </div>
";

        $__internal_487983eed16bb7022ea8e293c63469f59f68c3d7872ad2baad2408b3274154a4->leave($__internal_487983eed16bb7022ea8e293c63469f59f68c3d7872ad2baad2408b3274154a4_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 7

    public function getDebugInfo()
    {
        return array(114 => 32, 103 => 29, 99 => 28, 95 => 27, 91 => 26, 87 => 25, 83 => 24, 77 => 23, 74 => 22, 70 => 21, 55 => 8, 49 => 7, 41 => 4, 35 => 3, 11 => 1,);
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
    La liste des parents
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <center><h4>La liste des parents</h4></center>
        <table class=\"table table-bordered\" border=\"1\" width=\"80%\">
            <tr class=\"table-header\">
                <td>Nom&Prenom</td>
                <td>CIN</td>
                <td>Num Tel</td>
                <td>Adresse</td>
                <td>Fonction</td>
                <td>E-mail</td>
                <td>Opérations</td>
            </tr>
            {% for l in listParent %}
                <tr>
                    <td>{{ l.nomParent }} {{ l.prenomParent }}</td>
                    <td>{{ l.cinParent }}</td>
                    <td>{{ l.numTelParent }}</td>
                    <td>{{ l.adresseParent }}</td>
                    <td>{{ l.fonctionParent }}</td>
                    <td>{{ l.emailParent }}</td>
                    <td><a href=\"{{ path('consulterPaiements') }}?idParent={{ l.id }}\">Paiements</a> </td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}", "@projet/Default/Admin/listerParents.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\listerParents.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf658cf02d4b6ef5a5c33ea58ee005303511e9ba20f6f6854c92ba58f60c5bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf658cf02d4b6ef5a5c33ea58ee005303511e9ba20f6f6854c92ba58f60c5bbd->enter($__internal_bf658cf02d4b6ef5a5c33ea58ee005303511e9ba20f6f6854c92ba58f60c5bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/listerParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_bf658cf02d4b6ef5a5c33ea58ee005303511e9ba20f6f6854c92ba58f60c5bbd->leave($__internal_bf658cf02d4b6ef5a5c33ea58ee005303511e9ba20f6f6854c92ba58f60c5bbd_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/listerParents.html.twig";
    }
}
