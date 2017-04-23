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

    public function block_script($context, array $blocks = array())
    {
        $__internal_9a7bf74612ff72e0225d3ae552020bb270ddccfb11aa4f2a4075a91c8dbdc285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7bf74612ff72e0225d3ae552020bb270ddccfb11aa4f2a4075a91c8dbdc285->enter($__internal_9a7bf74612ff72e0225d3ae552020bb270ddccfb11aa4f2a4075a91c8dbdc285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_9a7bf74612ff72e0225d3ae552020bb270ddccfb11aa4f2a4075a91c8dbdc285->leave($__internal_9a7bf74612ff72e0225d3ae552020bb270ddccfb11aa4f2a4075a91c8dbdc285_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_e8fecf148bdcffcd1a9bed3731dcf4b35c76212b7303de026d8425b6000545ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fecf148bdcffcd1a9bed3731dcf4b35c76212b7303de026d8425b6000545ca->enter($__internal_e8fecf148bdcffcd1a9bed3731dcf4b35c76212b7303de026d8425b6000545ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 36
        echo "    Affecter des élèves
";

        $__internal_e8fecf148bdcffcd1a9bed3731dcf4b35c76212b7303de026d8425b6000545ca->leave($__internal_e8fecf148bdcffcd1a9bed3731dcf4b35c76212b7303de026d8425b6000545ca_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_153975e8c3355bf4f0dc523a955be0ec76c66c0226dfb71f2ed9661b7632c677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153975e8c3355bf4f0dc523a955be0ec76c66c0226dfb71f2ed9661b7632c677->enter($__internal_153975e8c3355bf4f0dc523a955be0ec76c66c0226dfb71f2ed9661b7632c677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_153975e8c3355bf4f0dc523a955be0ec76c66c0226dfb71f2ed9661b7632c677->leave($__internal_153975e8c3355bf4f0dc523a955be0ec76c66c0226dfb71f2ed9661b7632c677_prof);

    }

    // line 35

    public function isTraitable()
    {
        return false;
    }

    // line 38

    public function getDebugInfo()
    {
        return array(168 => 65, 161 => 63, 157 => 61, 149 => 58, 145 => 57, 140 => 56, 138 => 55, 134 => 54, 130 => 53, 126 => 52, 122 => 51, 119 => 50, 115 => 49, 103 => 39, 97 => 38, 89 => 36, 83 => 35, 51 => 10, 42 => 3, 36 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a30f687358bca17dcdda670466e812fcfada30aed3fc4a252318413845b12e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30f687358bca17dcdda670466e812fcfada30aed3fc4a252318413845b12e97->enter($__internal_a30f687358bca17dcdda670466e812fcfada30aed3fc4a252318413845b12e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:affecterEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_a30f687358bca17dcdda670466e812fcfada30aed3fc4a252318413845b12e97->leave($__internal_a30f687358bca17dcdda670466e812fcfada30aed3fc4a252318413845b12e97_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:affecterEleve.html.twig";
    }
}
