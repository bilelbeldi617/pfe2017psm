<?php

/* projetBundle:Default/Admin:affecterEleve.html.twig */
class __TwigTemplate_734d591d8fd048764fd890247025c924cb69210cee75d1d9bc26bb0a134cf047 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:affecterEleve.html.twig", 1);
        $this->blocks = array(
            'script' => array($this, 'block_script'),
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b7edb6afcfee32959b8c911a416e9c1c3ff03b678ef7cba3ff551fe231e677a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7edb6afcfee32959b8c911a416e9c1c3ff03b678ef7cba3ff551fe231e677a->enter($__internal_6b7edb6afcfee32959b8c911a416e9c1c3ff03b678ef7cba3ff551fe231e677a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:affecterEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b7edb6afcfee32959b8c911a416e9c1c3ff03b678ef7cba3ff551fe231e677a->leave($__internal_6b7edb6afcfee32959b8c911a416e9c1c3ff03b678ef7cba3ff551fe231e677a_prof);

    }

    // line 2
    public function block_script($context, array $blocks = array())
    {
        $__internal_9a1367081c1480ae5eb57413fab43f64643d57f97e2948124daad1bad72d4f3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1367081c1480ae5eb57413fab43f64643d57f97e2948124daad1bad72d4f3a->enter($__internal_9a1367081c1480ae5eb57413fab43f64643d57f97e2948124daad1bad72d4f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 3
        echo "    <script language=\"javascript\">
          function affecterEleves(niveau){

              console.log(niveau) ;
              \$(\"#buttonClicked\"+niveau).fadeToggle() ;
              \$(\"#mySpinner\"+niveau).fadeToggle() ;
              \$.ajax({
                  url : \"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affecter");
        echo "\",
                  method:\"GET\",
                  data : {\"niveau\":niveau},
                  success: function(response){
                      if (response.result=\"affected\"){
                          \$(\"#checked\"+niveau).fadeToggle() ;
                          \$(\"#mySpinner\"+niveau).fadeToggle() ;
                      }
                  }


              });







          }


    </script>

";
        
        $__internal_9a1367081c1480ae5eb57413fab43f64643d57f97e2948124daad1bad72d4f3a->leave($__internal_9a1367081c1480ae5eb57413fab43f64643d57f97e2948124daad1bad72d4f3a_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c62b2d64b117839c469e692b8c2a6b3a67a1a6998f1fc3806cf95b53493f7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c62b2d64b117839c469e692b8c2a6b3a67a1a6998f1fc3806cf95b53493f7d3->enter($__internal_3c62b2d64b117839c469e692b8c2a6b3a67a1a6998f1fc3806cf95b53493f7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 36
        echo "    Affecter des élèves
";
        
        $__internal_3c62b2d64b117839c469e692b8c2a6b3a67a1a6998f1fc3806cf95b53493f7d3->leave($__internal_3c62b2d64b117839c469e692b8c2a6b3a67a1a6998f1fc3806cf95b53493f7d3_prof);

    }

    // line 38
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_1039b126d6c17db6bcd21f0afa24799dba830103897e37ab9f2ee17111f2d94a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1039b126d6c17db6bcd21f0afa24799dba830103897e37ab9f2ee17111f2d94a->enter($__internal_1039b126d6c17db6bcd21f0afa24799dba830103897e37ab9f2ee17111f2d94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 39
        echo "    <div class=\"col-xs-12\">
        <div class=\"row\">
            <table border=\"1\" width=\"80%\" class=\"table table-bordered\">
                <tr>
                    <td>Niveaux</td>
                    <td>Nombre d'élèves</td>
                    <td>Nombre de groupes à crée</td>
                    <td>Nombre de groupes existants</td>
                    <td>Opération</td>
                </tr>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) ? $context["niveaux"] : $this->getContext($context, "niveaux")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 50
            echo "                    <tr>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrEleves"]) ? $context["nbrEleves"] : $this->getContext($context, "nbrEleves")), ($context["n"] - 1), array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrGroupes"]) ? $context["nbrGroupes"] : $this->getContext($context, "nbrGroupes")), ($context["n"] - 1), array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrGroupeCree"]) ? $context["nbrGroupeCree"] : $this->getContext($context, "nbrGroupeCree")), ($context["n"] - 1), array(), "array"), "html", null, true);
            echo "</td>
                        ";
            // line 55
            if (((($this->getAttribute((isset($context["nbrGroupes"]) ? $context["nbrGroupes"] : $this->getContext($context, "nbrGroupes")), ($context["n"] - 1), array(), "array") == $this->getAttribute((isset($context["nbrGroupeCree"]) ? $context["nbrGroupeCree"] : $this->getContext($context, "nbrGroupeCree")), ($context["n"] - 1), array(), "array")) && ($this->getAttribute((isset($context["nbrGroupes"]) ? $context["nbrGroupes"] : $this->getContext($context, "nbrGroupes")), ($context["n"] - 1), array(), "array") != 0)) && ($this->getAttribute((isset($context["nbrGroupeCree"]) ? $context["nbrGroupeCree"] : $this->getContext($context, "nbrGroupeCree")), ($context["n"] - 1), array(), "array") != 0))) {
                // line 56
                echo "                            <td><center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "\" style=\"display: none\"></i></center>
                                <center><i class=\"ace-icon fa fa-check green bigger-300\" id=\"checked";
                // line 57
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "\" style=\"display: none\"></i></center>
                                <input id=\"buttonClicked";
                // line 58
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo "\" type=\"button\" value=\"Affecter\" onclick=\"affecterEleves(";
                echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                echo ")\" class=\"btn btn-primary\"></td>

                        ";
            } else {
                // line 61
                echo "                        <td><input type=\"button\" value=\"Affecter\" class=\"btn btn-primary\" disabled> </td>
                        ";
            }
            // line 63
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_1039b126d6c17db6bcd21f0afa24799dba830103897e37ab9f2ee17111f2d94a->leave($__internal_1039b126d6c17db6bcd21f0afa24799dba830103897e37ab9f2ee17111f2d94a_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:affecterEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 65,  161 => 63,  157 => 61,  149 => 58,  145 => 57,  140 => 56,  138 => 55,  134 => 54,  130 => 53,  126 => 52,  122 => 51,  119 => 50,  115 => 49,  103 => 39,  97 => 38,  89 => 36,  83 => 35,  51 => 10,  42 => 3,  36 => 2,  11 => 1,);
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
{% block script %}
    <script language=\"javascript\">
          function affecterEleves(niveau){

              console.log(niveau) ;
              \$(\"#buttonClicked\"+niveau).fadeToggle() ;
              \$(\"#mySpinner\"+niveau).fadeToggle() ;
              \$.ajax({
                  url : \"{{ path('affecter') }}\",
                  method:\"GET\",
                  data : {\"niveau\":niveau},
                  success: function(response){
                      if (response.result=\"affected\"){
                          \$(\"#checked\"+niveau).fadeToggle() ;
                          \$(\"#mySpinner\"+niveau).fadeToggle() ;
                      }
                  }


              });







          }


    </script>

{% endblock %}
{% block title %}
    Affecter des élèves
{% endblock %}
{% block mainContent %}
    <div class=\"col-xs-12\">
        <div class=\"row\">
            <table border=\"1\" width=\"80%\" class=\"table table-bordered\">
                <tr>
                    <td>Niveaux</td>
                    <td>Nombre d'élèves</td>
                    <td>Nombre de groupes à crée</td>
                    <td>Nombre de groupes existants</td>
                    <td>Opération</td>
                </tr>
                {% for n in niveaux %}
                    <tr>
                        <td>{{ n }}</td>
                        <td>{{ nbrEleves[n-1] }}</td>
                        <td>{{ nbrGroupes[n-1] }}</td>
                        <td>{{ nbrGroupeCree[n-1] }}</td>
                        {% if nbrGroupes[n-1] == nbrGroupeCree[n-1] and  nbrGroupes[n-1] != 0 and nbrGroupeCree[n-1] != 0 %}
                            <td><center><i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner{{ n }}\" style=\"display: none\"></i></center>
                                <center><i class=\"ace-icon fa fa-check green bigger-300\" id=\"checked{{ n }}\" style=\"display: none\"></i></center>
                                <input id=\"buttonClicked{{ n }}\" type=\"button\" value=\"Affecter\" onclick=\"affecterEleves({{ n }})\" class=\"btn btn-primary\"></td>

                        {% else %}
                        <td><input type=\"button\" value=\"Affecter\" class=\"btn btn-primary\" disabled> </td>
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
{% endblock %}
", "projetBundle:Default/Admin:affecterEleve.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/affecterEleve.html.twig");
    }
}
