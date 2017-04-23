<?php

/* @projet/Default/Admin/ajouterEnseignant.html.twig */
class __TwigTemplate_198dabea46bda513ea3472fb0892a927191379d8458e61bb1d9480a58804a11c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/ajouterEnseignant.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_a0f1b0097111fdf075d65a2fe329f807914c7c8e851d40f071c2a6c1c7af9de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f1b0097111fdf075d65a2fe329f807914c7c8e851d40f071c2a6c1c7af9de6->enter($__internal_a0f1b0097111fdf075d65a2fe329f807914c7c8e851d40f071c2a6c1c7af9de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Ajouter un enseignant
    ";

        $__internal_a0f1b0097111fdf075d65a2fe329f807914c7c8e851d40f071c2a6c1c7af9de6->leave($__internal_a0f1b0097111fdf075d65a2fe329f807914c7c8e851d40f071c2a6c1c7af9de6_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_440b8cec0376dac992ec08652b93507d57a223908866d4c556c541eb9873667f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440b8cec0376dac992ec08652b93507d57a223908866d4c556c541eb9873667f->enter($__internal_440b8cec0376dac992ec08652b93507d57a223908866d4c556c541eb9873667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_440b8cec0376dac992ec08652b93507d57a223908866d4c556c541eb9873667f->leave($__internal_440b8cec0376dac992ec08652b93507d57a223908866d4c556c541eb9873667f_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_8ee1da5572483a58918932dfb71fc7b44b85a568b091fc34d5119cc8426b1062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee1da5572483a58918932dfb71fc7b44b85a568b091fc34d5119cc8426b1062->enter($__internal_8ee1da5572483a58918932dfb71fc7b44b85a568b091fc34d5119cc8426b1062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_8ee1da5572483a58918932dfb71fc7b44b85a568b091fc34d5119cc8426b1062->leave($__internal_8ee1da5572483a58918932dfb71fc7b44b85a568b091fc34d5119cc8426b1062_prof);

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
    {% endblock %}", "@projet/Default/Admin/ajouterEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\ajouterEnseignant.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59f71dabaff46c1920d633c086fdaeefe2fd941b4547133c2a4ea62d8c3f59ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f71dabaff46c1920d633c086fdaeefe2fd941b4547133c2a4ea62d8c3f59ff->enter($__internal_59f71dabaff46c1920d633c086fdaeefe2fd941b4547133c2a4ea62d8c3f59ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/ajouterEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_59f71dabaff46c1920d633c086fdaeefe2fd941b4547133c2a4ea62d8c3f59ff->leave($__internal_59f71dabaff46c1920d633c086fdaeefe2fd941b4547133c2a4ea62d8c3f59ff_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/ajouterEnseignant.html.twig";
    }
}
