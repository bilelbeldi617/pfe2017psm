<?php

/* projetBundle:Default/Admin:creerGroupe.html.twig */

class __TwigTemplate_f9518e9f12e2f232512d8d0568b3586e290a7572eaacbb466e1a6dab7d82790c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:creerGroupe.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Créer un groupe d'élèves
";
    }

    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#formCreerGroupe\").submit(function(){
                console.log(\$(\"#formCreerGroupe\").serialize());
                \$.ajax({
                    url: \"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creerGroupeAJAX");
        echo "\",
                    method : \"POST\",
                    data: \$(\"#formCreerGroupe\").serialize(),
                    success : function(response){
                        console.log(response);
                        response = JSON.parse(response);
                        if(response.status == \"inserted\"){
                            var message = \"<div class='alert alert-success'>Groupe crée avec succes !</div>\";
                        }else{
                            var message = \"<div class='alert alert-danger'>Echec de création du groupe !</div>\";
                        }
                        \$(\"#messageContainer\").html(message);
                    },
                    error : function(erreur){
                        console.log(erreur);
                    }
                });
            });
        });
    </script>
";
    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        // line 35
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div class=\"row\" id=\"messageContainer\">

        </div>
        <div class=\"row\">
            <form name=\"creerGroupe\" id=\"formCreerGroupe\" onsubmit=\"return false\" action=\"#\">
                <table border=\"1\" class=\"table table-bordered\">
                    <tr>
                        <td>Nom groupe</td>
                        <td><select name=\"listGroupe\">
                                <option value=\"Premiere Annee\">Premiere Annee</option>
                                <option value=\"Deuxieme Annee\">Deuxieme Annee</option>
                                <option value=\"Troisieme Annee\">Troisieme Annee</option>
                                <option value=\"Quatrieme Annee\">Quatrieme Annee</option>
                                <option value=\"Cinquieme Annee\">Cinquieme Annee</option>
                                <option value=\"Sixieme Annee\">Sixieme Annee</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Numéro groupe</td>
                        <td><input type=\"number\" name=\"numGroupe\" id=\"numGroupe\"></td>
                    </tr>
                    <tr>
                        <td>Année Scolaire</td>
                        <td><select name=\"annee\">
                                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annees"]) ? $context["annees"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 62
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "periode", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </select></td>
                    </tr>
                    <tr align=\"center\">
                        <td><input type=\"submit\" value=\"Créer\" class=\"btn btn-primary\"></td>
                        <td><input type=\"reset\" value=\"Vider\" class=\"btn btn-danger\"> </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
";
    }

    // line 6

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:creerGroupe.html.twig";
    }

    // line 34

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(119 => 64, 108 => 62, 104 => 61, 76 => 35, 73 => 34, 48 => 12, 41 => 7, 38 => 6, 33 => 3, 30 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projetBundle:Default/Admin:creerGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/creerGroupe.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
