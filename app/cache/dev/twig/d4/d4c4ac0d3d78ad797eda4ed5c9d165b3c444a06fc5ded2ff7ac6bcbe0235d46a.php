<?php

/* @projet/Default/Parent/mesEleves.html.twig */
class __TwigTemplate_e503d6cab1820b23be32b0b8eb7a752a02bad7efc32a0cedd46427356d49f611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForParent.html.twig", "@projet/Default/Parent/mesEleves.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_5d4fd88a0cf2b6e30ff7a5dc0bf5fc1f938aa28cfb42814fdd75369d65578438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4fd88a0cf2b6e30ff7a5dc0bf5fc1f938aa28cfb42814fdd75369d65578438->enter($__internal_5d4fd88a0cf2b6e30ff7a5dc0bf5fc1f938aa28cfb42814fdd75369d65578438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Mes élèves
";

        $__internal_5d4fd88a0cf2b6e30ff7a5dc0bf5fc1f938aa28cfb42814fdd75369d65578438->leave($__internal_5d4fd88a0cf2b6e30ff7a5dc0bf5fc1f938aa28cfb42814fdd75369d65578438_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_aa8733359d968dcc2f1ad5b057808a3b26ed0d631bd74f21c1f9bbccf66ccd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8733359d968dcc2f1ad5b057808a3b26ed0d631bd74f21c1f9bbccf66ccd3a->enter($__internal_aa8733359d968dcc2f1ad5b057808a3b26ed0d631bd74f21c1f9bbccf66ccd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
           \$(\"#tableEleves\").dataTable();
        });
    </script>
";

        $__internal_aa8733359d968dcc2f1ad5b057808a3b26ed0d631bd74f21c1f9bbccf66ccd3a->leave($__internal_aa8733359d968dcc2f1ad5b057808a3b26ed0d631bd74f21c1f9bbccf66ccd3a_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_c0d1e21f79dc4afc70365c0ff4f5c7c45e65de25c5d198ac9465f86bb97b3797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d1e21f79dc4afc70365c0ff4f5c7c45e65de25c5d198ac9465f86bb97b3797->enter($__internal_c0d1e21f79dc4afc70365c0ff4f5c7c45e65de25c5d198ac9465f86bb97b3797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 15
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <table class=\"table table-bordered\" align=\"center\" width=\"85%\" id=\"tableEleves\">
                <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Groupe</th>
                    <th>Matricule</th>
                    <th>Opérations</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEleves"]) ? $context["listEleves"] : $this->getContext($context, "listEleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenomEleve", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nomEleve", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "groupe", array()), "nomGroupe", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "groupe", array()), "numGroupe", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "matriculeEleve", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulterNotes");
            echo "?matEleve=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "matriculeEleve", array()), "html", null, true);
            echo "\">Notes <i class=\"menu-icon fa fa-calculator\"></i></a> |
                            <a href=\"\">Absences <i class=\"menu-icon fa fa-thumbs-down\"></i></a> |
                            <a href=\"\">Emploi <i class=\"menu-icon fa fa-calendar\"></i></a> |
                            <a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulterPaiement");
            echo "?matEleve=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "matriculeEleve", array()), "html", null, true);
            echo "\">Paiements <i class=\"menu-icon fa fa-money\"></i></a> |
                            <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulterHistorique");
            echo "?matEleve=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "matriculeEleve", array()), "html", null, true);
            echo "\">Historique <i class=\"menu-icon fa fa-history\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </tbody>
                <tfoot>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Groupe</th>
                    <th>Matricule</th>
                <th>Opérations</th>
                </tfoot>
            </table>
        </div>
    </div>
";

        $__internal_c0d1e21f79dc4afc70365c0ff4f5c7c45e65de25c5d198ac9465f86bb97b3797->leave($__internal_c0d1e21f79dc4afc70365c0ff4f5c7c45e65de25c5d198ac9465f86bb97b3797_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 14

    public function getDebugInfo()
    {
        return array(142 => 44, 130 => 40, 124 => 39, 116 => 36, 111 => 34, 105 => 33, 101 => 32, 97 => 31, 94 => 30, 90 => 29, 74 => 15, 68 => 14, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
    Mes élèves
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
           \$(\"#tableEleves\").dataTable();
        });
    </script>
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <table class=\"table table-bordered\" align=\"center\" width=\"85%\" id=\"tableEleves\">
                <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Groupe</th>
                    <th>Matricule</th>
                    <th>Opérations</th>
                </tr>
                </thead>
                <tbody>
                {% for e in listEleves %}
                    <tr>
                        <td>{{ e.prenomEleve }}</td>
                        <td>{{ e.nomEleve }}</td>
                        <td>{{ e.groupe.nomGroupe }} {{ e.groupe.numGroupe }}</td>
                        <td>{{ e.matriculeEleve }}</td>
                        <td>
                            <a href=\"{{ path('consulterNotes') }}?matEleve={{ e.matriculeEleve }}\">Notes <i class=\"menu-icon fa fa-calculator\"></i></a> |
                            <a href=\"\">Absences <i class=\"menu-icon fa fa-thumbs-down\"></i></a> |
                            <a href=\"\">Emploi <i class=\"menu-icon fa fa-calendar\"></i></a> |
                            <a href=\"{{ path('consulterPaiement') }}?matEleve={{ e.matriculeEleve }}\">Paiements <i class=\"menu-icon fa fa-money\"></i></a> |
                            <a href=\"{{ path('consulterHistorique') }}?matEleve={{ e.matriculeEleve }}\">Historique <i class=\"menu-icon fa fa-history\"></i></a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Groupe</th>
                    <th>Matricule</th>
                <th>Opérations</th>
                </tfoot>
            </table>
        </div>
    </div>
{% endblock %}", "@projet/Default/Parent/mesEleves.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\mesEleves.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a3b163ef304ec766e77e7b3168d17075f6c60d9c9c73e4b2560bc45d341410b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3b163ef304ec766e77e7b3168d17075f6c60d9c9c73e4b2560bc45d341410b->enter($__internal_1a3b163ef304ec766e77e7b3168d17075f6c60d9c9c73e4b2560bc45d341410b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/mesEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_1a3b163ef304ec766e77e7b3168d17075f6c60d9c9c73e4b2560bc45d341410b->leave($__internal_1a3b163ef304ec766e77e7b3168d17075f6c60d9c9c73e4b2560bc45d341410b_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/mesEleves.html.twig";
    }
}
