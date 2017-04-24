<?php

/* projetBundle:Default/Parent:envoyerMail.html.twig */
class __TwigTemplate_451e88cb6f01470625d5fb614f5e949b4e7d6f5443b6e4c33f4ff8c9b19e4392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "projetBundle:Default/Parent:envoyerMail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cb504ff27f401b55a2524a27a33d1e18e745bff5a924ac9cc631e614ff6b653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb504ff27f401b55a2524a27a33d1e18e745bff5a924ac9cc631e614ff6b653->enter($__internal_2cb504ff27f401b55a2524a27a33d1e18e745bff5a924ac9cc631e614ff6b653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:envoyerMail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cb504ff27f401b55a2524a27a33d1e18e745bff5a924ac9cc631e614ff6b653->leave($__internal_2cb504ff27f401b55a2524a27a33d1e18e745bff5a924ac9cc631e614ff6b653_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee8ccb515ef01f698c28c56f38f5068388446239f48102752523e53dab053dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8ccb515ef01f698c28c56f38f5068388446239f48102752523e53dab053dc1->enter($__internal_ee8ccb515ef01f698c28c56f38f5068388446239f48102752523e53dab053dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Mail To
";
        
        $__internal_ee8ccb515ef01f698c28c56f38f5068388446239f48102752523e53dab053dc1->leave($__internal_ee8ccb515ef01f698c28c56f38f5068388446239f48102752523e53dab053dc1_prof);

    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        $__internal_30ee56aa63dd19d828921d1ba8a31512f0eb409123c141ab1fa1371dec4d8b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ee56aa63dd19d828921d1ba8a31512f0eb409123c141ab1fa1371dec4d8b1a->enter($__internal_30ee56aa63dd19d828921d1ba8a31512f0eb409123c141ab1fa1371dec4d8b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#formEnvoyerEmail\").submit(function(){
                \$.ajax({
                    url: \"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sendmail");
        echo "\",
                    method: \"POST\",
                    data: \$(\"#formEnvoyerEmail\").serialize(),
                    success : function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Message Envoyé!!</div>\";
                        \$(\"#messageContainer\").html(message);
                        \$(\"#message\").val(\" \");
                    }

                });

            });
        });
    </script>
";
        
        $__internal_30ee56aa63dd19d828921d1ba8a31512f0eb409123c141ab1fa1371dec4d8b1a->leave($__internal_30ee56aa63dd19d828921d1ba8a31512f0eb409123c141ab1fa1371dec4d8b1a_prof);

    }

    // line 29
    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_54d9feafbd9175d726006209997ef0589d6cc982db942c5c5bec25173dcd79fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d9feafbd9175d726006209997ef0589d6cc982db942c5c5bec25173dcd79fa->enter($__internal_54d9feafbd9175d726006209997ef0589d6cc982db942c5c5bec25173dcd79fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 30
        echo "    <center><h4><b>Envoyer un e-mail</b></h4></center>
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div id=\"messageContainer\">

        </div>
        <form name=\"formEmail\" id=\"formEnvoyerEmail\" action=\"#\" onsubmit=\"return false\">
        <table class=\"table table-bordered\" align=\"center\" width=\"30%\">
            <tr>
                <td width=\"50%\">Email Enseignant</td>
                <td><input type=\"email\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\" name=\"emailEnseignant\" readonly></td>
            </tr>
            <tr>
                <td>Votre message</td>
                <td><textarea cols=\"50\" rows=\"5\" name=\"message\" id=\"message\"></textarea></td>
            </tr>
            <tr>
                <td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"></td>
            </tr>
        </table>
        </form>
    </div>
";
        
        $__internal_54d9feafbd9175d726006209997ef0589d6cc982db942c5c5bec25173dcd79fa->leave($__internal_54d9feafbd9175d726006209997ef0589d6cc982db942c5c5bec25173dcd79fa_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:envoyerMail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  92 => 30,  86 => 29,  62 => 11,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForParent.html.twig\" %}
{% block title %}
    Mail To
{% endblock %}

{% block script %}
    <script language=\"JavaScript\">
        \$(\"document\").ready(function(){
            \$(\"#formEnvoyerEmail\").submit(function(){
                \$.ajax({
                    url: \"{{ path('sendmail') }}\",
                    method: \"POST\",
                    data: \$(\"#formEnvoyerEmail\").serialize(),
                    success : function(response){
                        response = JSON.parse(response);
                        console.log(response);
                        var message = \"<div class='alert alert-success'>Message Envoyé!!</div>\";
                        \$(\"#messageContainer\").html(message);
                        \$(\"#message\").val(\" \");
                    }

                });

            });
        });
    </script>
{% endblock %}

{% block mainContent %}
    <center><h4><b>Envoyer un e-mail</b></h4></center>
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <div id=\"messageContainer\">

        </div>
        <form name=\"formEmail\" id=\"formEnvoyerEmail\" action=\"#\" onsubmit=\"return false\">
        <table class=\"table table-bordered\" align=\"center\" width=\"30%\">
            <tr>
                <td width=\"50%\">Email Enseignant</td>
                <td><input type=\"email\" value=\"{{ email }}\" name=\"emailEnseignant\" readonly></td>
            </tr>
            <tr>
                <td>Votre message</td>
                <td><textarea cols=\"50\" rows=\"5\" name=\"message\" id=\"message\"></textarea></td>
            </tr>
            <tr>
                <td colspan=\"2\" align=\"center\"><input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"></td>
            </tr>
        </table>
        </form>
    </div>
{% endblock %}", "projetBundle:Default/Parent:envoyerMail.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/envoyerMail.html.twig");
    }
}
