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

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aabe258a91e8ee5cf83e0b292243668b2af6b49e0a1af48f0658b92d4bbb231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aabe258a91e8ee5cf83e0b292243668b2af6b49e0a1af48f0658b92d4bbb231->enter($__internal_8aabe258a91e8ee5cf83e0b292243668b2af6b49e0a1af48f0658b92d4bbb231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/ajouterEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aabe258a91e8ee5cf83e0b292243668b2af6b49e0a1af48f0658b92d4bbb231->leave($__internal_8aabe258a91e8ee5cf83e0b292243668b2af6b49e0a1af48f0658b92d4bbb231_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1b2e382f4093ca5b597ddcf7c8d7ecf9bb683b531b8d9142cfc236db8c23ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b2e382f4093ca5b597ddcf7c8d7ecf9bb683b531b8d9142cfc236db8c23ee2->enter($__internal_e1b2e382f4093ca5b597ddcf7c8d7ecf9bb683b531b8d9142cfc236db8c23ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Ajouter un enseignant
    ";
        
        $__internal_e1b2e382f4093ca5b597ddcf7c8d7ecf9bb683b531b8d9142cfc236db8c23ee2->leave($__internal_e1b2e382f4093ca5b597ddcf7c8d7ecf9bb683b531b8d9142cfc236db8c23ee2_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_56a5b9724c0368c341642339afe35c0a83cda2d24a91f52b1f43b3a48a246850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a5b9724c0368c341642339afe35c0a83cda2d24a91f52b1f43b3a48a246850->enter($__internal_56a5b9724c0368c341642339afe35c0a83cda2d24a91f52b1f43b3a48a246850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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
        
        $__internal_56a5b9724c0368c341642339afe35c0a83cda2d24a91f52b1f43b3a48a246850->leave($__internal_56a5b9724c0368c341642339afe35c0a83cda2d24a91f52b1f43b3a48a246850_prof);

    }

    // line 36
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_23d066583b02dc385d0091d677c57a8950af0b55db91d16954ffc93e2a40c2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d066583b02dc385d0091d677c57a8950af0b55db91d16954ffc93e2a40c2aa->enter($__internal_23d066583b02dc385d0091d677c57a8950af0b55db91d16954ffc93e2a40c2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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
        
        $__internal_23d066583b02dc385d0091d677c57a8950af0b55db91d16954ffc93e2a40c2aa->leave($__internal_23d066583b02dc385d0091d677c57a8950af0b55db91d16954ffc93e2a40c2aa_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/ajouterEnseignant.html.twig";
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
    {% endblock %}", "@projet/Default/Admin/ajouterEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\ajouterEnseignant.html.twig");
    }
}
