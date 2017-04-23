<?php

/* projetBundle:Default/Parent:contacterEnseignant.html.twig */

class __TwigTemplate_8d7520643da446ddba83978a89d691fe8aa80ca076d1ee6e91449c53fc5b7aab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "projetBundle:Default/Parent:contacterEnseignant.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_8bd2aa97a276d645217cc4a0b8a0ce13deae9b891edb4859c83df33f9eafe536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd2aa97a276d645217cc4a0b8a0ce13deae9b891edb4859c83df33f9eafe536->enter($__internal_8bd2aa97a276d645217cc4a0b8a0ce13deae9b891edb4859c83df33f9eafe536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Contacter Enseignant
";

        $__internal_8bd2aa97a276d645217cc4a0b8a0ce13deae9b891edb4859c83df33f9eafe536->leave($__internal_8bd2aa97a276d645217cc4a0b8a0ce13deae9b891edb4859c83df33f9eafe536_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_8f7040d33b74b92ad9dfcd8181e88ff1e4b4332c1f99a84f3f0138343df3deec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7040d33b74b92ad9dfcd8181e88ff1e4b4332c1f99a84f3f0138343df3deec->enter($__internal_8f7040d33b74b92ad9dfcd8181e88ff1e4b4332c1f99a84f3f0138343df3deec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#tableEnseignant\").dataTable();
            \$(\".btnMail\").click(function(){
                \$(\"#mailEnseignant\").val(\$(\"#emailEnseignant\").val());
                console.log(\"click\");
                \$(\"#mailContainer\").slideDown(\"fast\");
            });
        });
    </script>
";

        $__internal_8f7040d33b74b92ad9dfcd8181e88ff1e4b4332c1f99a84f3f0138343df3deec->leave($__internal_8f7040d33b74b92ad9dfcd8181e88ff1e4b4332c1f99a84f3f0138343df3deec_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_e6bde2605faed65a81590f54da3654d4d5ba37e514cee783d097243ecd450f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bde2605faed65a81590f54da3654d4d5ba37e514cee783d097243ecd450f67->enter($__internal_e6bde2605faed65a81590f54da3654d4d5ba37e514cee783d097243ecd450f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 20
        echo "    <center><h4><b>La liste des enseignants de votre(vos) élève(s)</b></h4></center>
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <table class=\"table table-bordered\" width=\"80%\" id=\"tableEnseignant\">
            <thead>
                <th>L'enseignant</th>
                <th>Enseigne votre enfant</th>
                <th>La matiere</th>
                <th>Contacter</th>
            </thead>
            <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listEnseignant"]) ? $context["listEnseignant"] : $this->getContext($context, "listEnseignant")));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                    <tr>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "enseignant", array()), "nomenseignant", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "enseignant", array()), "prenomenseignant", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "eleve", array()), "prenomeleve", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "eleve", array()), "nomeleve", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "matiere", array()), "libellematiere", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("envoyerMail");
            echo "?emailEnseignant=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["l"], "enseignant", array()), "emailenseignant", array()), "html", null, true);
            echo "\" ><input type=\"button\" value=\"Envoyer un e-mail\" class=\"btn btn-primary\"></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
            <tfoot>
                 <th>L'enseignant</th>
                 <th>Enseigne votre enfant</th>
                 <th>La matiere</th>
                 <th>Contacter</th>
            </tfoot>
        </table>
    </div>
";

        $__internal_e6bde2605faed65a81590f54da3654d4d5ba37e514cee783d097243ecd450f67->leave($__internal_e6bde2605faed65a81590f54da3654d4d5ba37e514cee783d097243ecd450f67_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 19

    public function getDebugInfo()
    {
        return array(126 => 39, 115 => 36, 111 => 35, 105 => 34, 99 => 33, 96 => 32, 92 => 31, 79 => 20, 73 => 19, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForParent.html.twig\" %}
{% block title %}
    Contacter Enseignant
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#tableEnseignant\").dataTable();
            \$(\".btnMail\").click(function(){
                \$(\"#mailEnseignant\").val(\$(\"#emailEnseignant\").val());
                console.log(\"click\");
                \$(\"#mailContainer\").slideDown(\"fast\");
            });
        });
    </script>
{% endblock %}

{% block mainContent %}
    <center><h4><b>La liste des enseignants de votre(vos) élève(s)</b></h4></center>
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <table class=\"table table-bordered\" width=\"80%\" id=\"tableEnseignant\">
            <thead>
                <th>L'enseignant</th>
                <th>Enseigne votre enfant</th>
                <th>La matiere</th>
                <th>Contacter</th>
            </thead>
            <tbody>
                {% for l in listEnseignant %}
                    <tr>
                        <td>{{ l.enseignant.nomenseignant }} {{ l.enseignant.prenomenseignant }}</td>
                        <td>{{ l.eleve.prenomeleve }} {{ l.eleve.nomeleve }}</td>
                        <td>{{ l.matiere.libellematiere }}</td>
                        <td><a href=\"{{ path('envoyerMail') }}?emailEnseignant={{ l.enseignant.emailenseignant }}\" ><input type=\"button\" value=\"Envoyer un e-mail\" class=\"btn btn-primary\"></a></td>
                    </tr>
                {% endfor %}
            </tbody>
            <tfoot>
                 <th>L'enseignant</th>
                 <th>Enseigne votre enfant</th>
                 <th>La matiere</th>
                 <th>Contacter</th>
            </tfoot>
        </table>
    </div>
{% endblock %}", "projetBundle:Default/Parent:contacterEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/contacterEnseignant.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cefa0afff2e2b643b486c1fa233f86ea7fc271e19a6b21bfd3b974f30004f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cefa0afff2e2b643b486c1fa233f86ea7fc271e19a6b21bfd3b974f30004f1b->enter($__internal_4cefa0afff2e2b643b486c1fa233f86ea7fc271e19a6b21bfd3b974f30004f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:contacterEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_4cefa0afff2e2b643b486c1fa233f86ea7fc271e19a6b21bfd3b974f30004f1b->leave($__internal_4cefa0afff2e2b643b486c1fa233f86ea7fc271e19a6b21bfd3b974f30004f1b_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:contacterEnseignant.html.twig";
    }
}
