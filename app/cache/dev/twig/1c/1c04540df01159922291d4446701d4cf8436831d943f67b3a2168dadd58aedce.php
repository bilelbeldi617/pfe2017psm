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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41a59dc534082e9244fe650be50ffcbd09fbc3b5d641b99f1e7aa4a67bbf5ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a59dc534082e9244fe650be50ffcbd09fbc3b5d641b99f1e7aa4a67bbf5ffa->enter($__internal_41a59dc534082e9244fe650be50ffcbd09fbc3b5d641b99f1e7aa4a67bbf5ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:ajouterEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a59dc534082e9244fe650be50ffcbd09fbc3b5d641b99f1e7aa4a67bbf5ffa->leave($__internal_41a59dc534082e9244fe650be50ffcbd09fbc3b5d641b99f1e7aa4a67bbf5ffa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b0917314b4646df0b0f9e420bdb034b1c73ef8730595f5932c50739784e1a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0917314b4646df0b0f9e420bdb034b1c73ef8730595f5932c50739784e1a2d->enter($__internal_1b0917314b4646df0b0f9e420bdb034b1c73ef8730595f5932c50739784e1a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Ajouter un enseignant
    ";
        
        $__internal_1b0917314b4646df0b0f9e420bdb034b1c73ef8730595f5932c50739784e1a2d->leave($__internal_1b0917314b4646df0b0f9e420bdb034b1c73ef8730595f5932c50739784e1a2d_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_12608fe3117daa7c9bf73e29a1997bf48bdb11bc249e82922a8bf354b767865a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12608fe3117daa7c9bf73e29a1997bf48bdb11bc249e82922a8bf354b767865a->enter($__internal_12608fe3117daa7c9bf73e29a1997bf48bdb11bc249e82922a8bf354b767865a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_12608fe3117daa7c9bf73e29a1997bf48bdb11bc249e82922a8bf354b767865a->leave($__internal_12608fe3117daa7c9bf73e29a1997bf48bdb11bc249e82922a8bf354b767865a_prof);

    }

    // line 36
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_4921b471851b64a2c9c09c8e6477d49a8a1b062981d02aaf9d94c130408a7d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4921b471851b64a2c9c09c8e6477d49a8a1b062981d02aaf9d94c130408a7d69->enter($__internal_4921b471851b64a2c9c09c8e6477d49a8a1b062981d02aaf9d94c130408a7d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_4921b471851b64a2c9c09c8e6477d49a8a1b062981d02aaf9d94c130408a7d69->leave($__internal_4921b471851b64a2c9c09c8e6477d49a8a1b062981d02aaf9d94c130408a7d69_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:ajouterEnseignant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 51,  116 => 49,  112 => 48,  99 => 37,  93 => 36,  65 => 14,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
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
}
