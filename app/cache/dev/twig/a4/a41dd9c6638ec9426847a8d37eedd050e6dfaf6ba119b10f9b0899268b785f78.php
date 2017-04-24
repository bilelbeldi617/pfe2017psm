<?php

/* @projet/Default/Admin/affecterEleve.html.twig */
class __TwigTemplate_27193f349e53719f966ee5790aca874f42cb6548b97b4df8146eff475e7a5675 extends Twig_Template
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
        $__internal_68b67ae38982fffe8bdd66db088f6c32f9635a160595e2900d53c10d78e4fd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b67ae38982fffe8bdd66db088f6c32f9635a160595e2900d53c10d78e4fd76->enter($__internal_68b67ae38982fffe8bdd66db088f6c32f9635a160595e2900d53c10d78e4fd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/affecterEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68b67ae38982fffe8bdd66db088f6c32f9635a160595e2900d53c10d78e4fd76->leave($__internal_68b67ae38982fffe8bdd66db088f6c32f9635a160595e2900d53c10d78e4fd76_prof);

    }

    // line 2
    public function block_script($context, array $blocks = array())
    {
        $__internal_4c731bd68974d5f9fda6807a32aaa89aa70cfb73e664bf361d380b7419dc1a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c731bd68974d5f9fda6807a32aaa89aa70cfb73e664bf361d380b7419dc1a10->enter($__internal_4c731bd68974d5f9fda6807a32aaa89aa70cfb73e664bf361d380b7419dc1a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_4c731bd68974d5f9fda6807a32aaa89aa70cfb73e664bf361d380b7419dc1a10->leave($__internal_4c731bd68974d5f9fda6807a32aaa89aa70cfb73e664bf361d380b7419dc1a10_prof);

    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        $__internal_beb87075ed6862d4c58ad134621ef7144a1cdf26610d0d3188b670403db1ba2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb87075ed6862d4c58ad134621ef7144a1cdf26610d0d3188b670403db1ba2f->enter($__internal_beb87075ed6862d4c58ad134621ef7144a1cdf26610d0d3188b670403db1ba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 36
        echo "    Affecter des élèves
";
        
        $__internal_beb87075ed6862d4c58ad134621ef7144a1cdf26610d0d3188b670403db1ba2f->leave($__internal_beb87075ed6862d4c58ad134621ef7144a1cdf26610d0d3188b670403db1ba2f_prof);

    }

    // line 38
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_9443c2215db6eaa2dab7b4da1868ced0b21db104c766ae2c62d91bc91d273ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9443c2215db6eaa2dab7b4da1868ced0b21db104c766ae2c62d91bc91d273ae2->enter($__internal_9443c2215db6eaa2dab7b4da1868ced0b21db104c766ae2c62d91bc91d273ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_9443c2215db6eaa2dab7b4da1868ced0b21db104c766ae2c62d91bc91d273ae2->leave($__internal_9443c2215db6eaa2dab7b4da1868ced0b21db104c766ae2c62d91bc91d273ae2_prof);

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
", "@projet/Default/Admin/affecterEleve.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\affecterEleve.html.twig");
    }
}
