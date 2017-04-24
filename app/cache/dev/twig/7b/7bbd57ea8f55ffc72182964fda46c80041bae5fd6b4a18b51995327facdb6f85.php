<?php

/* projetBundle:Default/Admin:listerEleveParGroupe.html.twig */
class __TwigTemplate_c9b613019fa53265811155efa806d584b36300eae8b033a123029907f18efc99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:listerEleveParGroupe.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9025ddaf3aff4e4068ebae4514a3799af6125180b1cb93a2396fe6e48fdb8240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9025ddaf3aff4e4068ebae4514a3799af6125180b1cb93a2396fe6e48fdb8240->enter($__internal_9025ddaf3aff4e4068ebae4514a3799af6125180b1cb93a2396fe6e48fdb8240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:listerEleveParGroupe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9025ddaf3aff4e4068ebae4514a3799af6125180b1cb93a2396fe6e48fdb8240->leave($__internal_9025ddaf3aff4e4068ebae4514a3799af6125180b1cb93a2396fe6e48fdb8240_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82db907860cc156ed7401e0f0746fd27bb97a514d3ba1f7bf2b997369c48788b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82db907860cc156ed7401e0f0746fd27bb97a514d3ba1f7bf2b997369c48788b->enter($__internal_82db907860cc156ed7401e0f0746fd27bb97a514d3ba1f7bf2b997369c48788b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Lister eleves par groupe
";
        
        $__internal_82db907860cc156ed7401e0f0746fd27bb97a514d3ba1f7bf2b997369c48788b->leave($__internal_82db907860cc156ed7401e0f0746fd27bb97a514d3ba1f7bf2b997369c48788b_prof);

    }

    // line 8
    public function block_script($context, array $blocks = array())
    {
        $__internal_213c467e845b9cf76e9320c87dc47c34c46bfd09103d289d0be94b4ab0420aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213c467e845b9cf76e9320c87dc47c34c46bfd09103d289d0be94b4ab0420aaa->enter($__internal_213c467e845b9cf76e9320c87dc47c34c46bfd09103d289d0be94b4ab0420aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 9
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function () {
            \$(\"#tableEleve\").dataTable();
        });
    </script>
";
        
        $__internal_213c467e845b9cf76e9320c87dc47c34c46bfd09103d289d0be94b4ab0420aaa->leave($__internal_213c467e845b9cf76e9320c87dc47c34c46bfd09103d289d0be94b4ab0420aaa_prof);

    }

    // line 15
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_21252aa0d95e166f775b57e5671a1a1ae95c747b68634b61ffa4dbe8b4c4c178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21252aa0d95e166f775b57e5671a1a1ae95c747b68634b61ffa4dbe8b4c4c178->enter($__internal_21252aa0d95e166f775b57e5671a1a1ae95c747b68634b61ffa4dbe8b4c4c178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_21252aa0d95e166f775b57e5671a1a1ae95c747b68634b61ffa4dbe8b4c4c178->leave($__internal_21252aa0d95e166f775b57e5671a1a1ae95c747b68634b61ffa4dbe8b4c4c178_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerEleveParGroupe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 71,  159 => 68,  147 => 62,  143 => 61,  139 => 60,  135 => 59,  131 => 58,  128 => 57,  124 => 56,  102 => 36,  93 => 30,  85 => 24,  83 => 23,  74 => 16,  68 => 15,  56 => 9,  50 => 8,  42 => 4,  36 => 3,  11 => 1,);
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

{% endblock %}", "projetBundle:Default/Admin:listerEleveParGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerEleveParGroupe.html.twig");
    }
}
