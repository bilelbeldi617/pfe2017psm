<?php

/* projetBundle:Default/Admin:affecter.html.twig */

class __TwigTemplate_249ff528cdd571d4f6df650ff1697f147acaa236b7d4829195a36fad51749ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "projetBundle:Default/Admin:affecter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_9d14d1c247e0fa4faa33a6cec3f0d5bf1b9c1e1b2d5f2c78f6a3cec1d20501bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d14d1c247e0fa4faa33a6cec3f0d5bf1b9c1e1b2d5f2c78f6a3cec1d20501bc->enter($__internal_9d14d1c247e0fa4faa33a6cec3f0d5bf1b9c1e1b2d5f2c78f6a3cec1d20501bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Affecter
";

        $__internal_9d14d1c247e0fa4faa33a6cec3f0d5bf1b9c1e1b2d5f2c78f6a3cec1d20501bc->leave($__internal_9d14d1c247e0fa4faa33a6cec3f0d5bf1b9c1e1b2d5f2c78f6a3cec1d20501bc_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_ae9a26ee559576784b025022465f5a151a4942bc83012db0b463bbcd8f26ccf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9a26ee559576784b025022465f5a151a4942bc83012db0b463bbcd8f26ccf6->enter($__internal_ae9a26ee559576784b025022465f5a151a4942bc83012db0b463bbcd8f26ccf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
           \$(\"#formAffecter\").submit(function(){
               \$(\"#message\").html(\"\");

               var countChecked=0 ;
               \$.each(\$(\".radio\"), function(i, item){
                  if(item.checked){countChecked++;}
               }) ;

                   if(countChecked==0){
                       var message = \"<div class='alert alert-danger'>Il faut selectionner un groupe!!</div>\"
                       \$(\"#message\").html(message);
                   }else {
                       \$.ajax({
                           url: \"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affecterUnEleve");
        echo "\",
                           method: \"GET\",
                           data: \$(\"#formAffecter\").serialize(),
                           success: function (response) {
                               response = JSON.parse(response);
                               console.log(response);
                               var message = \"<div class='alert alert-success'>Affecté!</div>\"
                               \$(\"#message\").html(message);
                               setTimeout(function () {

                                   window.location.assign(\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("listerEleves");
        echo "\");
                               }, 1000);

                           }
                       });
                   }
           }) ;
        });
    </script>
    ";

        $__internal_ae9a26ee559576784b025022465f5a151a4942bc83012db0b463bbcd8f26ccf6->leave($__internal_ae9a26ee559576784b025022465f5a151a4942bc83012db0b463bbcd8f26ccf6_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_f0344f094591abecded830e23fa8bc7e3538344705c011cad070c09156d9df93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0344f094591abecded830e23fa8bc7e3538344705c011cad070c09156d9df93->enter($__internal_f0344f094591abecded830e23fa8bc7e3538344705c011cad070c09156d9df93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 44
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div id=\"message\">

        </div>
        ";
        // line 49
        if (((isset($context["listGroupes"]) ? $context["listGroupes"] : $this->getContext($context, "listGroupes")) == null)) {
            // line 50
            echo "            <center><div class=\"alert alert-danger\">Aucun groupe dans le niveau de cet élève!</div> </center>
            <center><h3><a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("creerGroupe");
            echo "\">Créer un groupe ici</a></h3></center>
            ";
        } else {
            // line 53
            echo "        <center><h3>Eleve : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "prenomEleve", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "nomEleve", array()), "html", null, true);
            echo "</h3></center>
        <form id=\"formAffecter\" action=\"#\" onsubmit=\"return false\">
        <input type=\"text\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["eleve"]) ? $context["eleve"] : $this->getContext($context, "eleve")), "id", array()), "html", null, true);
            echo "\" style=\"display: none\" name=\"idEleve\">
        <table class=\"table table-bordered\" width=\"80%\">
            <tr class=\"table-header\">
                <td>Groupe</td>
                <td>Nombre d'eleve</td>
                <td>Affecter</td>
            </tr>
            ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listGroupes"]) ? $context["listGroupes"] : $this->getContext($context, "listGroupes")));
            foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
                // line 63
                echo "                <tr>
                    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "nomGroupe", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "numGroupe", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "nombreEleve", array()), "html", null, true);
                echo "</td>
                    <td><input type=\"radio\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["g"], "id", array()), "html", null, true);
                echo "\" class=\"radio\" name=\"idGroupe\" id=\"idGroupe\"> </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "
        </table>
            <center><input type=\"submit\" value=\"affecter\" class=\"btn btn-primary\"></center>
        </form>
        ";
        }
        // line 74
        echo "    </div>
";

        $__internal_f0344f094591abecded830e23fa8bc7e3538344705c011cad070c09156d9df93->leave($__internal_f0344f094591abecded830e23fa8bc7e3538344705c011cad070c09156d9df93_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 43

    public function getDebugInfo()
    {
        return array(177 => 74, 170 => 69, 161 => 66, 157 => 65, 151 => 64, 148 => 63, 144 => 62, 134 => 55, 126 => 53, 121 => 51, 118 => 50, 116 => 49, 109 => 44, 103 => 43, 86 => 32, 73 => 22, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForAdmin.html.twig\" %}
{% block title %}
    Affecter
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
           \$(\"#formAffecter\").submit(function(){
               \$(\"#message\").html(\"\");

               var countChecked=0 ;
               \$.each(\$(\".radio\"), function(i, item){
                  if(item.checked){countChecked++;}
               }) ;

                   if(countChecked==0){
                       var message = \"<div class='alert alert-danger'>Il faut selectionner un groupe!!</div>\"
                       \$(\"#message\").html(message);
                   }else {
                       \$.ajax({
                           url: \"{{ path('affecterUnEleve') }}\",
                           method: \"GET\",
                           data: \$(\"#formAffecter\").serialize(),
                           success: function (response) {
                               response = JSON.parse(response);
                               console.log(response);
                               var message = \"<div class='alert alert-success'>Affecté!</div>\"
                               \$(\"#message\").html(message);
                               setTimeout(function () {

                                   window.location.assign(\"{{ path('listerEleves') }}\");
                               }, 1000);

                           }
                       });
                   }
           }) ;
        });
    </script>
    {% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div id=\"message\">

        </div>
        {% if listGroupes == null %}
            <center><div class=\"alert alert-danger\">Aucun groupe dans le niveau de cet élève!</div> </center>
            <center><h3><a href=\"{{ path('creerGroupe') }}\">Créer un groupe ici</a></h3></center>
            {% else %}
        <center><h3>Eleve : {{ eleve.prenomEleve }} {{ eleve.nomEleve }}</h3></center>
        <form id=\"formAffecter\" action=\"#\" onsubmit=\"return false\">
        <input type=\"text\" value=\"{{ eleve.id }}\" style=\"display: none\" name=\"idEleve\">
        <table class=\"table table-bordered\" width=\"80%\">
            <tr class=\"table-header\">
                <td>Groupe</td>
                <td>Nombre d'eleve</td>
                <td>Affecter</td>
            </tr>
            {% for g in listGroupes %}
                <tr>
                    <td>{{ g.nomGroupe }} {{ g.numGroupe }}</td>
                    <td>{{ g.nombreEleve }}</td>
                    <td><input type=\"radio\" value=\"{{ g.id }}\" class=\"radio\" name=\"idGroupe\" id=\"idGroupe\"> </td>
                </tr>
            {% endfor %}

        </table>
            <center><input type=\"submit\" value=\"affecter\" class=\"btn btn-primary\"></center>
        </form>
        {% endif %}
    </div>
{% endblock %}", "projetBundle:Default/Admin:affecter.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/affecter.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d9a80a2ed880df050c64bc2d8bf0a9c3bc2e4ba30d59981f65fcb204417506b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9a80a2ed880df050c64bc2d8bf0a9c3bc2e4ba30d59981f65fcb204417506b->enter($__internal_0d9a80a2ed880df050c64bc2d8bf0a9c3bc2e4ba30d59981f65fcb204417506b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:affecter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_0d9a80a2ed880df050c64bc2d8bf0a9c3bc2e4ba30d59981f65fcb204417506b->leave($__internal_0d9a80a2ed880df050c64bc2d8bf0a9c3bc2e4ba30d59981f65fcb204417506b_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:affecter.html.twig";
    }
}
