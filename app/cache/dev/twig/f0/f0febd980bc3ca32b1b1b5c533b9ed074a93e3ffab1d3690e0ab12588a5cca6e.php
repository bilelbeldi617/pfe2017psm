<?php

/* @projet/Default/Admin/afficherBulletin.html.twig */
class __TwigTemplate_64c889f3cdff148ea1beb5ee4ce53326aee72299476c8611d1636f993029f659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "@projet/Default/Admin/afficherBulletin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_dfbcdb1b9ba85157f249fd7ded61187c54ea43c1a1b5bec9c94e3aac7bffb7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbcdb1b9ba85157f249fd7ded61187c54ea43c1a1b5bec9c94e3aac7bffb7f2->enter($__internal_dfbcdb1b9ba85157f249fd7ded61187c54ea43c1a1b5bec9c94e3aac7bffb7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Bulletin
";

        $__internal_dfbcdb1b9ba85157f249fd7ded61187c54ea43c1a1b5bec9c94e3aac7bffb7f2->leave($__internal_dfbcdb1b9ba85157f249fd7ded61187c54ea43c1a1b5bec9c94e3aac7bffb7f2_prof);

    }

    public function block_script($context, array $blocks = array())
    {
        $__internal_16ad415dafa6ad63975d8e82724534496cf6a1b7bd659df5d647dc0ee85de2c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ad415dafa6ad63975d8e82724534496cf6a1b7bd659df5d647dc0ee85de2c9->enter($__internal_16ad415dafa6ad63975d8e82724534496cf6a1b7bd659df5d647dc0ee85de2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 7
        echo "
<script language=\"JavaScript\">
    function printIt() {

        window.print();


    }

</script>

";

        $__internal_16ad415dafa6ad63975d8e82724534496cf6a1b7bd659df5d647dc0ee85de2c9->leave($__internal_16ad415dafa6ad63975d8e82724534496cf6a1b7bd659df5d647dc0ee85de2c9_prof);

    }

    // line 2

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_5a102fb7f0e1ba29db4ad89ee6d71d6af94ecbe1b4763adc1b0e8200d302ebbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a102fb7f0e1ba29db4ad89ee6d71d6af94ecbe1b4763adc1b0e8200d302ebbd->enter($__internal_5a102fb7f0e1ba29db4ad89ee6d71d6af94ecbe1b4763adc1b0e8200d302ebbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 22
        echo "    <hr class=\"hr-4\">

    ";
        // line 24
        if (array_key_exists("message", $context)) {
            // line 25
            echo "        <div class=\"alert alert-danger\" >";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 27
            echo "
    <div class=\"col-xs-12\" id=\"printable\">
         <div>
        <div class=\"row col-xs-8\">
           <h4><b>* Bulletin élève : </b>";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["nomPrenomEleve"]) ? $context["nomPrenomEleve"] : $this->getContext($context, "nomPrenomEleve")), "html", null, true);
            echo "</h4>
        </div>
        <div class=\"row col-xs-4\">
            <h4><b>* Matricule : </b>";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["matriculeEleve"]) ? $context["matriculeEleve"] : $this->getContext($context, "matriculeEleve")), "html", null, true);
            echo "</h4>
        </div>
         </div>

        <div class=\"row\" align=\"center\">

    <table border=\"1\" class=\"table table-responsive\" style=\"margin-top: 40px\">
   <tr class=\"table-header\"><td>Matiere</td><td>Note 1</td> <td>Note 2</td><td>Note 3</td><td>Enseignant</td><td>Moyenne</td><td>Remarque de l'enseignant</td></tr>
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 43
                echo "           <tr align=\"center\"><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "matiere", array()), "html", null, true);
                echo "</td>

               ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, 2));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 46
                    echo "               ";
                    if (!$this->getAttribute($this->getAttribute($context["r"], "note", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                        // line 47
                        echo "                  <td> --- </td>
                   ";
                    } else {
                        // line 49
                        echo "                  <td> ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "note", array()), $context["i"], array(), "array"), "2", ".", ","), "html", null, true);
                        echo " </td>
                   ";
                    }
                    // line 51
                    echo "
               ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "

               <td>
               ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "nomenseignant", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "prenomenseignant", array()), "html", null, true);
                echo "
                   </td>
               <td>
               ";
                // line 59
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["r"], "moyenne", array()), "2", ".", ","), "html", null, true);
                echo "
        </td>
               <td>
                   <br><br>
               </td>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
        <tr align=\"center\"><td colspan=\"6\"><h4>Moyenne Générale</h4></td><td><h4>";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["moyenneGenerale"]) ? $context["moyenneGenerale"] : $this->getContext($context, "moyenneGenerale")), "2", ".", ","), "html", null, true);
            echo "</h4></td></tr>
     </table>
    <button class=\"btn btn-primary\" onclick=\"printIt()\"><i class=\"fa fa-print\"></i> Imprimer</button>
    </div>
    </div>
    ";
        }
        // line 72
        echo "
";

        $__internal_5a102fb7f0e1ba29db4ad89ee6d71d6af94ecbe1b4763adc1b0e8200d302ebbd->leave($__internal_5a102fb7f0e1ba29db4ad89ee6d71d6af94ecbe1b4763adc1b0e8200d302ebbd_prof);

    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    // line 21

    public function getDebugInfo()
    {
        return array(186 => 72, 177 => 66, 174 => 65, 162 => 59, 154 => 56, 149 => 53, 142 => 51, 136 => 49, 132 => 47, 129 => 46, 125 => 45, 119 => 43, 115 => 42, 104 => 34, 98 => 31, 92 => 27, 86 => 25, 84 => 24, 80 => 22, 74 => 21, 56 => 7, 50 => 6, 42 => 3, 36 => 2, 11 => 1,);
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
{% block title%}
    Bulletin
{% endblock %}

{% block script %}

<script language=\"JavaScript\">
    function printIt() {

        window.print();


    }

</script>

{% endblock %}


{% block mainContent %}
    <hr class=\"hr-4\">

    {% if message is defined %}
        <div class=\"alert alert-danger\" >{{ message }}</div>
        {% else %}

    <div class=\"col-xs-12\" id=\"printable\">
         <div>
        <div class=\"row col-xs-8\">
           <h4><b>* Bulletin élève : </b>{{ nomPrenomEleve }}</h4>
        </div>
        <div class=\"row col-xs-4\">
            <h4><b>* Matricule : </b>{{ matriculeEleve }}</h4>
        </div>
         </div>

        <div class=\"row\" align=\"center\">

    <table border=\"1\" class=\"table table-responsive\" style=\"margin-top: 40px\">
   <tr class=\"table-header\"><td>Matiere</td><td>Note 1</td> <td>Note 2</td><td>Note 3</td><td>Enseignant</td><td>Moyenne</td><td>Remarque de l'enseignant</td></tr>
        {% for r in resultat %}
           <tr align=\"center\"><td>{{ r.matiere }}</td>

               {% for i in 0..2 %}
               {% if r.note[i] is not defined  %}
                  <td> --- </td>
                   {% else %}
                  <td> {{ r.note[i] | number_format(\"2\", \".\", \",\") }} </td>
                   {% endif %}

               {% endfor %}


               <td>
               {{ r.nomenseignant.nomenseignant}} {{ r.nomenseignant.prenomenseignant }}
                   </td>
               <td>
               {{ r.moyenne | number_format(\"2\", \".\", \",\") }}
        </td>
               <td>
                   <br><br>
               </td>
               {% endfor %}

        <tr align=\"center\"><td colspan=\"6\"><h4>Moyenne Générale</h4></td><td><h4>{{ moyenneGenerale | number_format(\"2\", \".\", \",\") }}</h4></td></tr>
     </table>
    <button class=\"btn btn-primary\" onclick=\"printIt()\"><i class=\"fa fa-print\"></i> Imprimer</button>
    </div>
    </div>
    {% endif %}

{% endblock %}", "@projet/Default/Admin/afficherBulletin.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\afficherBulletin.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2831ae64d3cba68459d57ed68bf4dab9a592a141f0b3d576595baa4f0be54464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2831ae64d3cba68459d57ed68bf4dab9a592a141f0b3d576595baa4f0be54464->enter($__internal_2831ae64d3cba68459d57ed68bf4dab9a592a141f0b3d576595baa4f0be54464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Admin/afficherBulletin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_2831ae64d3cba68459d57ed68bf4dab9a592a141f0b3d576595baa4f0be54464->leave($__internal_2831ae64d3cba68459d57ed68bf4dab9a592a141f0b3d576595baa4f0be54464_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Admin/afficherBulletin.html.twig";
    }
}
