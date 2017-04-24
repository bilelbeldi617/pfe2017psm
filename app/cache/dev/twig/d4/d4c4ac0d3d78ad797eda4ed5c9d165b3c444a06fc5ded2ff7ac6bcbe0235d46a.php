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

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c49bbe944ab3741e6886b3c72245aab9a052174c4dd02bb1d5492f520c7bfd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c49bbe944ab3741e6886b3c72245aab9a052174c4dd02bb1d5492f520c7bfd3->enter($__internal_3c49bbe944ab3741e6886b3c72245aab9a052174c4dd02bb1d5492f520c7bfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/mesEleves.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c49bbe944ab3741e6886b3c72245aab9a052174c4dd02bb1d5492f520c7bfd3->leave($__internal_3c49bbe944ab3741e6886b3c72245aab9a052174c4dd02bb1d5492f520c7bfd3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a95ae69168c69b99224d1e2841004dfa8bf8beef6c728226b648a8340f517678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95ae69168c69b99224d1e2841004dfa8bf8beef6c728226b648a8340f517678->enter($__internal_a95ae69168c69b99224d1e2841004dfa8bf8beef6c728226b648a8340f517678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Mes élèves
";
        
        $__internal_a95ae69168c69b99224d1e2841004dfa8bf8beef6c728226b648a8340f517678->leave($__internal_a95ae69168c69b99224d1e2841004dfa8bf8beef6c728226b648a8340f517678_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_1822687464a000ecabb258fee42f0e8bfb926b5ede96f2295b7ffdf6775870fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1822687464a000ecabb258fee42f0e8bfb926b5ede96f2295b7ffdf6775870fe->enter($__internal_1822687464a000ecabb258fee42f0e8bfb926b5ede96f2295b7ffdf6775870fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
           \$(\"#tableEleves\").dataTable();
        });
    </script>
";
        
        $__internal_1822687464a000ecabb258fee42f0e8bfb926b5ede96f2295b7ffdf6775870fe->leave($__internal_1822687464a000ecabb258fee42f0e8bfb926b5ede96f2295b7ffdf6775870fe_prof);

    }

    // line 14
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_254937f11eb6216b7780606c114b57fbc826cf1ad176276dd1121e043b0e1548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254937f11eb6216b7780606c114b57fbc826cf1ad176276dd1121e043b0e1548->enter($__internal_254937f11eb6216b7780606c114b57fbc826cf1ad176276dd1121e043b0e1548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_254937f11eb6216b7780606c114b57fbc826cf1ad176276dd1121e043b0e1548->leave($__internal_254937f11eb6216b7780606c114b57fbc826cf1ad176276dd1121e043b0e1548_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/mesEleves.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 44,  130 => 40,  124 => 39,  116 => 36,  111 => 34,  105 => 33,  101 => 32,  97 => 31,  94 => 30,  90 => 29,  74 => 15,  68 => 14,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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
}
