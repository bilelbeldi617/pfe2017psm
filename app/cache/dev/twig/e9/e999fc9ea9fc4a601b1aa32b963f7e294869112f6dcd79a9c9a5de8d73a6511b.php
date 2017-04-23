<?php

/* @projet/Default/Parent/contacterEnseignant.html.twig */
class __TwigTemplate_4376f14b67ce416f201eecf9ac806fe4496c253e0c2d393425a1703f94fb4a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "@projet/Default/Parent/contacterEnseignant.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_46686d56fb450c084ef3e17d96b21ce17be062c597812cf44bfca75fbf39e750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46686d56fb450c084ef3e17d96b21ce17be062c597812cf44bfca75fbf39e750->enter($__internal_46686d56fb450c084ef3e17d96b21ce17be062c597812cf44bfca75fbf39e750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Contacter Enseignant
";

        $__internal_46686d56fb450c084ef3e17d96b21ce17be062c597812cf44bfca75fbf39e750->leave($__internal_46686d56fb450c084ef3e17d96b21ce17be062c597812cf44bfca75fbf39e750_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_674f2592f13dce4d22ce469e458da7cd7cdda0c590bdf8dc75467091225b8f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_674f2592f13dce4d22ce469e458da7cd7cdda0c590bdf8dc75467091225b8f10->enter($__internal_674f2592f13dce4d22ce469e458da7cd7cdda0c590bdf8dc75467091225b8f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

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

        $__internal_674f2592f13dce4d22ce469e458da7cd7cdda0c590bdf8dc75467091225b8f10->leave($__internal_674f2592f13dce4d22ce469e458da7cd7cdda0c590bdf8dc75467091225b8f10_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_37a172107202b4eb4dca3361289a7f27775e6b0a684b20c1f78333c1ab1fe246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a172107202b4eb4dca3361289a7f27775e6b0a684b20c1f78333c1ab1fe246->enter($__internal_37a172107202b4eb4dca3361289a7f27775e6b0a684b20c1f78333c1ab1fe246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

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

        $__internal_37a172107202b4eb4dca3361289a7f27775e6b0a684b20c1f78333c1ab1fe246->leave($__internal_37a172107202b4eb4dca3361289a7f27775e6b0a684b20c1f78333c1ab1fe246_prof);

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
{% endblock %}", "@projet/Default/Parent/contacterEnseignant.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\contacterEnseignant.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ec2141347b0b5e50e1a4ca87868506dc36ca3bfb2ae1ebc2d984b30eeef46aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec2141347b0b5e50e1a4ca87868506dc36ca3bfb2ae1ebc2d984b30eeef46aa->enter($__internal_8ec2141347b0b5e50e1a4ca87868506dc36ca3bfb2ae1ebc2d984b30eeef46aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/contacterEnseignant.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_8ec2141347b0b5e50e1a4ca87868506dc36ca3bfb2ae1ebc2d984b30eeef46aa->leave($__internal_8ec2141347b0b5e50e1a4ca87868506dc36ca3bfb2ae1ebc2d984b30eeef46aa_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/contacterEnseignant.html.twig";
    }
}
