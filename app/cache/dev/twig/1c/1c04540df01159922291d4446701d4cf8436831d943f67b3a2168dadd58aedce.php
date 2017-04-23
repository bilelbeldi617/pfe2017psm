<?php

/* projetBundle:Default/Admin:ajouterEnseignant.html.twig */

class __TwigTemplate_ad603c346a07af8fe76e2d62ca5b31a498630dd14e7076c5b8a5dbad2419e745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:ajouterEnseignant.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_01366b4dd4d1108d09c28abb37dec3d3e4a87a9e2487c3079b86c8e3620f397b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01366b4dd4d1108d09c28abb37dec3d3e4a87a9e2487c3079b86c8e3620f397b->enter($__internal_01366b4dd4d1108d09c28abb37dec3d3e4a87a9e2487c3079b86c8e3620f397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Ajouter un enseignant
    ";

        $__internal_01366b4dd4d1108d09c28abb37dec3d3e4a87a9e2487c3079b86c8e3620f397b->leave($__internal_01366b4dd4d1108d09c28abb37dec3d3e4a87a9e2487c3079b86c8e3620f397b_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_c34c6eaac689bf8c8cc7071239218aab418bedf6a073c87de9efee7a90d23eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34c6eaac689bf8c8cc7071239218aab418bedf6a073c87de9efee7a90d23eda->enter($__internal_c34c6eaac689bf8c8cc7071239218aab418bedf6a073c87de9efee7a90d23eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
                var matriculeRandom = Math.floor(Math.random()*99999999);
                \$(\"#matriculeEnseignant\").val(matriculeRandom);
                \$(\"#formAjouterEnseignant\").submit(function (){
                    console.log(\$(\"#formAjouterEnseignant\").serialize());
                    \$.ajax({
                        url : \"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouterEnseignantAJAX");
        echo "\",
                        method : \"POST\",
                        data : \$(\"#formAjouterEnseignant\").serialize(),
                        success : function(response){
                            console.log(response);
                            response = JSON.parse(response);
                            if(response.status == \"inserted\"){
                                var message = \"<div class='alert alert-success'>Ajout avec success</div>\";
                            }else{
                                var message = \"<div class='alert alert-danger'>Failed !</div>\";
                            }
                            \$(\"#messageContainer\").html(message);
                        },
                        error : function(erreur){
                            //console.log(erreur);
                        }
                    });
                });
            });
        </script>
    ";

        $__internal_c34c6eaac689bf8c8cc7071239218aab418bedf6a073c87de9efee7a90d23eda->leave($__internal_c34c6eaac689bf8c8cc7071239218aab418bedf6a073c87de9efee7a90d23eda_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_8971bfb30e17a56bba00d2812e39d5f63330e132d16234a85e692d5fc5d13a83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8971bfb30e17a56bba00d2812e39d5f63330e132d16234a85e692d5fc5d13a83->enter($__internal_8971bfb30e17a56bba00d2812e39d5f63330e132d16234a85e692d5fc5d13a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 37
        echo "        <div class=\"hr-4\">
            <div class=\"col-xs-12\">
                <div id=\"messageContainer\" class=\"row\">

                </div>
                <div class=\"row\">
                    <form name=\"ajouterEnseignant\" id=\"formAjouterEnseignant\" onsubmit=\"return false\" action=\"#\">
                        <table border=\"1\" align=\"center\" class=\"table table-bordered\">
                            <tr>
                                <td>Grade</td>
                                <td><select name=\"idGrade\">
                                        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["grades"]) ? $context["grades"] : $this->getContext($context, "grades")));
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 49
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "nomGrade", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                </select></td>
                            </tr>
                            <tr>
                                <td>Matricule</td>
                                <td><input type=\"text\" name=\"matriculeEnseignant\" id=\"matriculeEnseignant\" readonly></td>
                            </tr>
                            <tr>
                                <td>Nom</td>
                                <td><input type=\"text\" name=\"nomEnseignant\" id=\"nomEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Prenom</td>
                                <td><input type=\"text\" name=\"prenomEnseignant\" id=\"prenomEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Adresse</td>
                                <td><input type=\"text\" name=\"adresseEnseignant\" id=\"adresseEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Numéro de téléphone</td>
                                <td><input type=\"tel\" name=\"numTelEnseignant\" id=\"numTelEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>CIN</td>
                                <td><input type=\"text\" name=\"cinEnseignant\" id=\"cinEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td><input type=\"email\" name=\"emailEnseignant\" id=\"emailEnseignant\"></td>
                            </tr>
                            <tr align=\"center\">
                                <td><input type=\"submit\" name=\"submitBtn\" id=\"submitBtn\" value=\"Ajouter\" class=\"btn btn-primary\"></td>
                                <td><input type=\"reset\" value=\"Vider\" class=\"btn btn-danger\"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    ";

        $__internal_8971bfb30e17a56bba00d2812e39d5f63330e132d16234a85e692d5fc5d13a83->leave($__internal_8971bfb30e17a56bba00d2812e39d5f63330e132d16234a85e692d5fc5d13a83_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 36

    public function getDebugInfo()
    {
        return array(127 => 51, 116 => 49, 112 => 48, 99 => 37, 93 => 36, 65 => 14, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
    {% block title %}
        Ajouter un enseignant
    {% endblock %}

    {% block script %}
        <script language=\"JavaScript\">
            \$(\"document\").ready(function(){
                var matriculeRandom = Math.floor(Math.random()*99999999);
                \$(\"#matriculeEnseignant\").val(matriculeRandom);
                \$(\"#formAjouterEnseignant\").submit(function (){
                    console.log(\$(\"#formAjouterEnseignant\").serialize());
                    \$.ajax({
                        url : \"{{ path('ajouterEnseignantAJAX') }}\",
                        method : \"POST\",
                        data : \$(\"#formAjouterEnseignant\").serialize(),
                        success : function(response){
                            console.log(response);
                            response = JSON.parse(response);
                            if(response.status == \"inserted\"){
                                var message = \"<div class='alert alert-success'>Ajout avec success</div>\";
                            }else{
                                var message = \"<div class='alert alert-danger'>Failed !</div>\";
                            }
                            \$(\"#messageContainer\").html(message);
                        },
                        error : function(erreur){
                            //console.log(erreur);
                        }
                    });
                });
            });
        </script>
    {% endblock %}

    {% block mainContent %}
        <div class=\"hr-4\">
            <div class=\"col-xs-12\">
                <div id=\"messageContainer\" class=\"row\">

                </div>
                <div class=\"row\">
                    <form name=\"ajouterEnseignant\" id=\"formAjouterEnseignant\" onsubmit=\"return false\" action=\"#\">
                        <table border=\"1\" align=\"center\" class=\"table table-bordered\">
                            <tr>
                                <td>Grade</td>
                                <td><select name=\"idGrade\">
                                        {% for g in grades %}
                                            <option value=\"{{ g.id }}\">{{ g.nomGrade }}</option>
                                        {% endfor %}
                                </select></td>
                            </tr>
                            <tr>
                                <td>Matricule</td>
                                <td><input type=\"text\" name=\"matriculeEnseignant\" id=\"matriculeEnseignant\" readonly></td>
                            </tr>
                            <tr>
                                <td>Nom</td>
                                <td><input type=\"text\" name=\"nomEnseignant\" id=\"nomEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Prenom</td>
                                <td><input type=\"text\" name=\"prenomEnseignant\" id=\"prenomEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Adresse</td>
                                <td><input type=\"text\" name=\"adresseEnseignant\" id=\"adresseEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>Numéro de téléphone</td>
                                <td><input type=\"tel\" name=\"numTelEnseignant\" id=\"numTelEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>CIN</td>
                                <td><input type=\"text\" name=\"cinEnseignant\" id=\"cinEnseignant\"></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td><input type=\"email\" name=\"emailEnseignant\" id=\"emailEnseignant\"></td>
                            </tr>
                            <tr align=\"center\">
                                <td><input type=\"submit\" name=\"submitBtn\" id=\"submitBtn\" value=\"Ajouter\" class=\"btn btn-primary\"></td>
                                <td><input type=\"reset\" value=\"Vider\" class=\"btn btn-danger\"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    {% endblock %}", "projetBundle:Default/Admin:ajouterEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/ajouterEnseignant.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c7e6d3b9943dcdb6be0f660b22299d7d6676c2040737ddfc17bd700bad3ab55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7e6d3b9943dcdb6be0f660b22299d7d6676c2040737ddfc17bd700bad3ab55->enter($__internal_9c7e6d3b9943dcdb6be0f660b22299d7d6676c2040737ddfc17bd700bad3ab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:ajouterEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_9c7e6d3b9943dcdb6be0f660b22299d7d6676c2040737ddfc17bd700bad3ab55->leave($__internal_9c7e6d3b9943dcdb6be0f660b22299d7d6676c2040737ddfc17bd700bad3ab55_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:ajouterEnseignant.html.twig";
    }
}
