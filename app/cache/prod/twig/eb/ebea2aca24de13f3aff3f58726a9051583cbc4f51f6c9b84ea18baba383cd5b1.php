<?php

/* @projet/Default/Admin/affecterEleve.html.twig */
class __TwigTemplate_cf7cc7d9ce1234aab0c7d7e84dadf5b8fe0c585f713facb6b6ab8e75c4c502f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/affecterEleve.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_script($context, array $blocks = array())
    {
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
    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        // line 36
        echo "    Affecter des élèves
";
    }

    // line 38
    public function block_mainContent($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["niveaux"]) ? $context["niveaux"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 50
            echo "                    <tr>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $context["n"], "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrEleves"]) ? $context["nbrEleves"] : null), ($context["n"] - 1), array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrGroupes"]) ? $context["nbrGroupes"] : null), ($context["n"] - 1), array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nbrGroupeCree"]) ? $context["nbrGroupeCree"] : null), ($context["n"] - 1), array(), "array"), "html", null, true);
            echo "</td>
                        ";
            // line 55
            if (((($this->getAttribute((isset($context["nbrGroupes"]) ? $context["nbrGroupes"] : null), ($context["n"] - 1), array(), "array") == $this->getAttribute((isset($context["nbrGroupeCree"]) ? $context["nbrGroupeCree"] : null), ($context["n"] - 1), array(), "array")) && ($this->getAttribute((isset($context["nbrGroupes"]) ? $context["nbrGroupes"] : null), ($context["n"] - 1), array(), "array") != 0)) && ($this->getAttribute((isset($context["nbrGroupeCree"]) ? $context["nbrGroupeCree"] : null), ($context["n"] - 1), array(), "array") != 0))) {
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
    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/affecterEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 65,  140 => 63,  136 => 61,  128 => 58,  124 => 57,  119 => 56,  117 => 55,  113 => 54,  109 => 53,  105 => 52,  101 => 51,  98 => 50,  94 => 49,  82 => 39,  79 => 38,  74 => 36,  71 => 35,  42 => 10,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@projet/Default/Admin/affecterEleve.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\affecterEleve.html.twig");
    }
}
