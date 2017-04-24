<?php

/* projetBundle:Default/Admin:afficherBulletin.html.twig */
class __TwigTemplate_e3c1fbc3b62d561cd5156596b618b2a9d49235dc1ec03f348eb7f1525baf368b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForAdmin.html.twig", "projetBundle:Default/Admin:afficherBulletin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Bulletin
";
    }

    // line 6
    public function block_script($context, array $blocks = array())
    {
        // line 7
        echo "
<script language=\"JavaScript\">
    function printIt() {

        window.print();


    }

</script>

";
    }

    // line 21
    public function block_mainContent($context, array $blocks = array())
    {
        // line 22
        echo "    <hr class=\"hr-4\">

    ";
        // line 24
        if (array_key_exists("message", $context)) {
            // line 25
            echo "        <div class=\"alert alert-danger\" >";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
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
            echo twig_escape_filter($this->env, (isset($context["nomPrenomEleve"]) ? $context["nomPrenomEleve"] : null), "html", null, true);
            echo "</h4>
        </div>
        <div class=\"row col-xs-4\">
            <h4><b>* Matricule : </b>";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["matriculeEleve"]) ? $context["matriculeEleve"] : null), "html", null, true);
            echo "</h4>
        </div>
         </div>

        <div class=\"row\" align=\"center\">

    <table border=\"1\" class=\"table table-responsive\" style=\"margin-top: 40px\">
   <tr class=\"table-header\"><td>Matiere</td><td>Note 1</td> <td>Note 2</td><td>Note 3</td><td>Enseignant</td><td>Moyenne</td><td>Remarque de l'enseignant</td></tr>
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : null));
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
                    if ( !$this->getAttribute($this->getAttribute($context["r"], "note", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["moyenneGenerale"]) ? $context["moyenneGenerale"] : null), "2", ".", ","), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:afficherBulletin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 72,  156 => 66,  153 => 65,  141 => 59,  133 => 56,  128 => 53,  121 => 51,  115 => 49,  111 => 47,  108 => 46,  104 => 45,  98 => 43,  94 => 42,  83 => 34,  77 => 31,  71 => 27,  65 => 25,  63 => 24,  59 => 22,  56 => 21,  41 => 7,  38 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projetBundle:Default/Admin:afficherBulletin.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/afficherBulletin.html.twig");
    }
}
