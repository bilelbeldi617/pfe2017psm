<?php

/* @projet/Default/Admin/affecterEnseignantGroupeMatiere.html.twig */
class __TwigTemplate_bc481473c21b29ee48750e82765a5525a62d47506a2ff6dd88b741329dc04b06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/affecterEnseignantGroupeMatiere.html.twig", 1);
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
        $__internal_a31760e14e38fd4cbcb4a1880b62f83c69db65586eb479a99510f3a422654248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31760e14e38fd4cbcb4a1880b62f83c69db65586eb479a99510f3a422654248->enter($__internal_a31760e14e38fd4cbcb4a1880b62f83c69db65586eb479a99510f3a422654248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/affecterEnseignantGroupeMatiere.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a31760e14e38fd4cbcb4a1880b62f83c69db65586eb479a99510f3a422654248->leave($__internal_a31760e14e38fd4cbcb4a1880b62f83c69db65586eb479a99510f3a422654248_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8880bccc2bf8c57adf998d5bfd6e12a6ea41ff0e6a8398ed1ebb9386c7ab2438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8880bccc2bf8c57adf998d5bfd6e12a6ea41ff0e6a8398ed1ebb9386c7ab2438->enter($__internal_8880bccc2bf8c57adf998d5bfd6e12a6ea41ff0e6a8398ed1ebb9386c7ab2438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Affecter Enseignant à une matière
";
        
        $__internal_8880bccc2bf8c57adf998d5bfd6e12a6ea41ff0e6a8398ed1ebb9386c7ab2438->leave($__internal_8880bccc2bf8c57adf998d5bfd6e12a6ea41ff0e6a8398ed1ebb9386c7ab2438_prof);

    }

    // line 5
    public function block_script($context, array $blocks = array())
    {
        $__internal_ef4c84eedff8fb19c4f131b449c39a25ebdd4fa443d7dcf71b9484bf1fa583ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4c84eedff8fb19c4f131b449c39a25ebdd4fa443d7dcf71b9484bf1fa583ad->enter($__internal_ef4c84eedff8fb19c4f131b449c39a25ebdd4fa443d7dcf71b9484bf1fa583ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function () {


            \$(\"#envoyer\").click(function () {
                console.log(\"hey\");
                var check = ' <i class=\"ace-icon fa fa-check green bigger-300\" id=\"mySpinner\"> ';
                var spinner = ' <i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\"> ';
                if (\$(\"#matiere\").val() == \"null\" || \$(\"#groupe\").val() == \"null\") {
                    \$(\".alert-danger\").html(\"Veuillez sélectionner une matiere et un groupe !\");
                    \$(\".alert-danger\").slideDown();
                    setTimeout(function () {
                        \$(\".alert-danger\").slideUp();
                        \$(\".alert-danger\").html(\"\");

                    }, 5000);

                } else {
                    \$(\"#td\").html(spinner);
                    \$.ajax({
                        url: \"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affecterEnseignantGroupeAjax");
        echo "\",
                        method: \"POST\",
                        data: \$(\"#form\").serialize(),
                        success: function (response) {
                            response = JSON.parse(response);
                            if (response.status == \"affected\") {
                                \$(\"#td\").html(check);
                                setTimeout(function () {
                                    window.location.assign(\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerEnseignant");
        echo "\");
                                }, 1000);
                            }


                        }

                    });


                }


            });
        });
    </script>


";
        
        $__internal_ef4c84eedff8fb19c4f131b449c39a25ebdd4fa443d7dcf71b9484bf1fa583ad->leave($__internal_ef4c84eedff8fb19c4f131b449c39a25ebdd4fa443d7dcf71b9484bf1fa583ad_prof);

    }

    // line 53
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_dc5105783680f4fbf9f55495ed551efb29b2555e5e374e241a9f87e19d4c4507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5105783680f4fbf9f55495ed551efb29b2555e5e374e241a9f87e19d4c4507->enter($__internal_dc5105783680f4fbf9f55495ed551efb29b2555e5e374e241a9f87e19d4c4507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 54
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" align=\"center\">
            <h3>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "nomEnseignant", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "prenomEnseignant", array()), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"row\">
            <div class=\"alert alert-danger\" style=\"display: none;\"></div>
            <form name=\"form\" id=\"form\">
                <input type=\"hidden\" name=\"enseignant\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["enseignant"]) ? $context["enseignant"] : $this->getContext($context, "enseignant")), "matriculeEnseignant", array()), "html", null, true);
        echo "\">
                <table border=\"1\" align=\"center\" width=\"70%\" class=\"table table-bordered table-responsive\">
                    <tr class=\"table-header\">
                        <td>Matiere</td>
                        <td>Groupe</td>
                    </tr>
                    <tr align=\"center\">
                        <td><select id=\"matiere\" name=\"matiere\">
                                <option value=\"null\">Sélectionner une matière</option>
                                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listMatiere"]) ? $context["listMatiere"] : $this->getContext($context, "listMatiere")));
        foreach ($context['_seq'] as $context["_key"] => $context["matiere"]) {
            // line 72
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "libelleMatiere", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["matiere"], "libelleMatiere", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['matiere'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </select></td>
                        <td>
                            <select name=\"groupe\" id=\"groupe\">
                                <option value=\"null\">Sélectionner un groupe</option>
                                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listGroupe"]) ? $context["listGroupe"] : $this->getContext($context, "listGroupe")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 79
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "nomgroupe", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "numgroupe", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                            </select></td>

                    </tr>
                    <tr align=\"center\">
                        <td colspan=\"2\" id=\"td\"><input type=\"button\" value=\"Affecter\" class=\"btn btn-primary\"
                                                       id=\"envoyer\"></td>
                    </tr>

                </table>
            </form>
        </div>


    </div>




";
        
        $__internal_dc5105783680f4fbf9f55495ed551efb29b2555e5e374e241a9f87e19d4c4507->leave($__internal_dc5105783680f4fbf9f55495ed551efb29b2555e5e374e241a9f87e19d4c4507_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/affecterEnseignantGroupeMatiere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 81,  173 => 79,  169 => 78,  163 => 74,  152 => 72,  148 => 71,  136 => 62,  126 => 57,  121 => 54,  115 => 53,  89 => 34,  78 => 26,  56 => 6,  50 => 5,  42 => 3,  36 => 2,  11 => 1,);
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
    Affecter Enseignant à une matière
{% endblock %}
{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function () {


            \$(\"#envoyer\").click(function () {
                console.log(\"hey\");
                var check = ' <i class=\"ace-icon fa fa-check green bigger-300\" id=\"mySpinner\"> ';
                var spinner = ' <i class=\"ace-icon fa fa-spin fa-refresh blue bigger-300\" id=\"mySpinner\"> ';
                if (\$(\"#matiere\").val() == \"null\" || \$(\"#groupe\").val() == \"null\") {
                    \$(\".alert-danger\").html(\"Veuillez sélectionner une matiere et un groupe !\");
                    \$(\".alert-danger\").slideDown();
                    setTimeout(function () {
                        \$(\".alert-danger\").slideUp();
                        \$(\".alert-danger\").html(\"\");

                    }, 5000);

                } else {
                    \$(\"#td\").html(spinner);
                    \$.ajax({
                        url: \"{{ path('affecterEnseignantGroupeAjax') }}\",
                        method: \"POST\",
                        data: \$(\"#form\").serialize(),
                        success: function (response) {
                            response = JSON.parse(response);
                            if (response.status == \"affected\") {
                                \$(\"#td\").html(check);
                                setTimeout(function () {
                                    window.location.assign(\"{{ path('listerEnseignant') }}\");
                                }, 1000);
                            }


                        }

                    });


                }


            });
        });
    </script>


{% endblock %}
{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" align=\"center\">
            <h3>{{ enseignant.nomEnseignant }} {{ enseignant.prenomEnseignant }}</h3>
        </div>
        <div class=\"row\">
            <div class=\"alert alert-danger\" style=\"display: none;\"></div>
            <form name=\"form\" id=\"form\">
                <input type=\"hidden\" name=\"enseignant\" value=\"{{ enseignant.matriculeEnseignant }}\">
                <table border=\"1\" align=\"center\" width=\"70%\" class=\"table table-bordered table-responsive\">
                    <tr class=\"table-header\">
                        <td>Matiere</td>
                        <td>Groupe</td>
                    </tr>
                    <tr align=\"center\">
                        <td><select id=\"matiere\" name=\"matiere\">
                                <option value=\"null\">Sélectionner une matière</option>
                                {% for matiere in listMatiere %}
                                    <option value=\"{{ matiere.libelleMatiere }}\">{{ matiere.libelleMatiere }}</option>
                                {% endfor %}
                            </select></td>
                        <td>
                            <select name=\"groupe\" id=\"groupe\">
                                <option value=\"null\">Sélectionner un groupe</option>
                                {% for groupe in listGroupe %}
                                    <option value=\"{{ groupe.id }}\">{{ groupe.nomgroupe }} {{ groupe.numgroupe }}</option>
                                {% endfor %}

                            </select></td>

                    </tr>
                    <tr align=\"center\">
                        <td colspan=\"2\" id=\"td\"><input type=\"button\" value=\"Affecter\" class=\"btn btn-primary\"
                                                       id=\"envoyer\"></td>
                    </tr>

                </table>
            </form>
        </div>


    </div>




{% endblock %}", "@projet/Default/Admin/affecterEnseignantGroupeMatiere.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\affecterEnseignantGroupeMatiere.html.twig");
    }
}
