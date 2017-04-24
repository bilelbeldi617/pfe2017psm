<?php

/* projetBundle:Default/Admin:listerParents.html.twig */
class __TwigTemplate_904be1ec141198ca49ac70b2b0d098435301b7324e8c2c5f2b80d18a9337534e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "projetBundle:Default/Admin:listerParents.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f9b5fb7fbc61c0f738490052f722aec7314de0db5f4a6479d201b4d06e38230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9b5fb7fbc61c0f738490052f722aec7314de0db5f4a6479d201b4d06e38230->enter($__internal_0f9b5fb7fbc61c0f738490052f722aec7314de0db5f4a6479d201b4d06e38230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerParents.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f9b5fb7fbc61c0f738490052f722aec7314de0db5f4a6479d201b4d06e38230->leave($__internal_0f9b5fb7fbc61c0f738490052f722aec7314de0db5f4a6479d201b4d06e38230_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8db0a0bbd676659bf1058c6c197d2599550d08185c5ad4a70264e4f78552e635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db0a0bbd676659bf1058c6c197d2599550d08185c5ad4a70264e4f78552e635->enter($__internal_8db0a0bbd676659bf1058c6c197d2599550d08185c5ad4a70264e4f78552e635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    La liste des parents
";
        
        $__internal_8db0a0bbd676659bf1058c6c197d2599550d08185c5ad4a70264e4f78552e635->leave($__internal_8db0a0bbd676659bf1058c6c197d2599550d08185c5ad4a70264e4f78552e635_prof);

    }

    // line 7
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_43a00751073d892ee4a2f2ebeaedf391072db0d6b05f8f35074e7323fb8bacc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43a00751073d892ee4a2f2ebeaedf391072db0d6b05f8f35074e7323fb8bacc8->enter($__internal_43a00751073d892ee4a2f2ebeaedf391072db0d6b05f8f35074e7323fb8bacc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_43a00751073d892ee4a2f2ebeaedf391072db0d6b05f8f35074e7323fb8bacc8->leave($__internal_43a00751073d892ee4a2f2ebeaedf391072db0d6b05f8f35074e7323fb8bacc8_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerParents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 32,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  77 => 23,  74 => 22,  70 => 21,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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
{% endblock %}", "projetBundle:Default/Admin:listerParents.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerParents.html.twig");
    }
}
