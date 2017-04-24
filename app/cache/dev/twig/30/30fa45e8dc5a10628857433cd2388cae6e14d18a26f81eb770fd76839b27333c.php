<?php

/* projetBundle:Default/Admin:affecterManuellement.html.twig */
class __TwigTemplate_44a22dd6650c08212fe76d94377ae6c2a2cc7e6cedbe0f4f5de2eec92447c1d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "projetBundle:Default/Admin:affecterManuellement.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e499082e5ba14a7d792e88ee29d4150ddd9bb9ee3032447be579ce5396d16ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e499082e5ba14a7d792e88ee29d4150ddd9bb9ee3032447be579ce5396d16ac1->enter($__internal_e499082e5ba14a7d792e88ee29d4150ddd9bb9ee3032447be579ce5396d16ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:affecterManuellement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e499082e5ba14a7d792e88ee29d4150ddd9bb9ee3032447be579ce5396d16ac1->leave($__internal_e499082e5ba14a7d792e88ee29d4150ddd9bb9ee3032447be579ce5396d16ac1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb4bcaa82dd7c2954777cc590bb2dd68ffa3c996485184464f328e06c0c99683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4bcaa82dd7c2954777cc590bb2dd68ffa3c996485184464f328e06c0c99683->enter($__internal_fb4bcaa82dd7c2954777cc590bb2dd68ffa3c996485184464f328e06c0c99683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Affecter Manuellement les élèves
";
        
        $__internal_fb4bcaa82dd7c2954777cc590bb2dd68ffa3c996485184464f328e06c0c99683->leave($__internal_fb4bcaa82dd7c2954777cc590bb2dd68ffa3c996485184464f328e06c0c99683_prof);

    }

    // line 7
    public function block_script($context, array $blocks = array())
    {
        $__internal_99a4dc29deb814f1857cbdf47412bf529dc5b900112b4831c0c41909c46f4832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a4dc29deb814f1857cbdf47412bf529dc5b900112b4831c0c41909c46f4832->enter($__internal_99a4dc29deb814f1857cbdf47412bf529dc5b900112b4831c0c41909c46f4832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 8
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
           \$(\"#tableEleve\").dataTable();
        });
    </script>
    ";
        
        $__internal_99a4dc29deb814f1857cbdf47412bf529dc5b900112b4831c0c41909c46f4832->leave($__internal_99a4dc29deb814f1857cbdf47412bf529dc5b900112b4831c0c41909c46f4832_prof);

    }

    // line 15
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_f7dcf495ff91f7050ed18953e01aa024ab08fdf1d6c757f74eaf7ba54d5536a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dcf495ff91f7050ed18953e01aa024ab08fdf1d6c757f74eaf7ba54d5536a7->enter($__internal_f7dcf495ff91f7050ed18953e01aa024ab08fdf1d6c757f74eaf7ba54d5536a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 16
        echo "

    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <center><h4>La liste des eleves sans groupe</h4></center>
        <div class=\"row\">

            <div id=\"tableContainer\">
                <table id=\"tableEleve\" class=\"display\" cellspacing=\"0\" width=\"95%\" border=\"1\">
                    <thead class=\"table-header\">
                    <tr>
                        <th>Groupe</th>
                        <th>Niveau</th>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date Naissance</th>
                        <th>Parent</th>


                    </tr>
                    </thead>
                    <tfoot class=\"table-header\">
                    <tr>
                        <th>Groupe</th>
                        <th>Niveau</th>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date Naissance</th>
                        <th>Parent</th>


                    </tr>
                    </tfoot>
                    <tbody id=\"tableBody\">
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEleves"]) ? $context["listEleves"] : $this->getContext($context, "listEleves")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 53
            echo "                            <tr>
                                <td><a href=\"";
            // line 54
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affecter");
            echo "?matEleve=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "matriculeEleve", array()), "html", null, true);
            echo "\"><input type=\"button\" value=\"Affecter à un groupe\" class=\"btn btn-primary\"></a></td>
                                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "niveauEleve", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "matriculeEleve", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "nomEleve", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "prenomEleve", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "dateNaissanceEleve", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "parent", array()), "nomParent", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["e"], "parent", array()), "prenomParent", array()), "html", null, true);
            echo "</td>

                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </tbody>
                </table>

            </div>


        </div>

    </div>
";
        
        $__internal_f7dcf495ff91f7050ed18953e01aa024ab08fdf1d6c757f74eaf7ba54d5536a7->leave($__internal_f7dcf495ff91f7050ed18953e01aa024ab08fdf1d6c757f74eaf7ba54d5536a7_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:affecterManuellement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 64,  145 => 60,  141 => 59,  137 => 58,  133 => 57,  129 => 56,  125 => 55,  119 => 54,  116 => 53,  112 => 52,  74 => 16,  68 => 15,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
    Affecter Manuellement les élèves
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
           \$(\"#tableEleve\").dataTable();
        });
    </script>
    {% endblock %}

{% block mainContent %}


    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <center><h4>La liste des eleves sans groupe</h4></center>
        <div class=\"row\">

            <div id=\"tableContainer\">
                <table id=\"tableEleve\" class=\"display\" cellspacing=\"0\" width=\"95%\" border=\"1\">
                    <thead class=\"table-header\">
                    <tr>
                        <th>Groupe</th>
                        <th>Niveau</th>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date Naissance</th>
                        <th>Parent</th>


                    </tr>
                    </thead>
                    <tfoot class=\"table-header\">
                    <tr>
                        <th>Groupe</th>
                        <th>Niveau</th>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date Naissance</th>
                        <th>Parent</th>


                    </tr>
                    </tfoot>
                    <tbody id=\"tableBody\">
                        {% for e in listEleves %}
                            <tr>
                                <td><a href=\"{{ path('affecter') }}?matEleve={{ e.matriculeEleve }}\"><input type=\"button\" value=\"Affecter à un groupe\" class=\"btn btn-primary\"></a></td>
                                <td>{{ e.niveauEleve }}</td>
                                <td>{{ e.matriculeEleve }}</td>
                                <td>{{ e.nomEleve }}</td>
                                <td>{{ e.prenomEleve }}</td>
                                <td>{{ e.dateNaissanceEleve }}</td>
                                <td>{{ e.parent.nomParent }} {{ e.parent.prenomParent }}</td>

                            </tr>
                        {% endfor %}
                    </tbody>
                </table>

            </div>


        </div>

    </div>
{% endblock %}", "projetBundle:Default/Admin:affecterManuellement.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/affecterManuellement.html.twig");
    }
}
