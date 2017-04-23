<?php

/* @projet/Default/Admin/afficherBulletinGroupe.html.twig */
class __TwigTemplate_69dba6e4ab415b64c4c1aa24156a5477b29ac9d742cb90eae43cafb3d1eaa07a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "@projet/Default/Admin/afficherBulletinGroupe.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Affichage Bulletin par groupe
";
    }

    public function block_mainContent($context, array $blocks = array())
    {
        // line 7
        echo "    <hr class=\"hr-4\">



        <div class=\"col-xs-12\" id=\"printable\">


           ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listResultat"]) ? $context["listResultat"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["resultatEleve"]) {
            // line 15
            echo "               ";
            if ((null === $context["resultatEleve"])) {
                // line 16
                echo "                   <hr>
                   ";
            } else {
                // line 18
                echo "
            <div>
                <div class=\"row col-xs-8\">
                    <h4><b>* Bulletin élève : </b>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatEleve"], "eleve", array()), "nomeleve", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatEleve"], "eleve", array()), "prenomeleve", array()), "html", null, true);
                echo "</h4>
                </div>
                <div class=\"row col-xs-4\">
                    <h4><b>* Matricule : </b>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["resultatEleve"], "eleve", array()), "matriculeeleve", array()), "html", null, true);
                echo "</h4>
                </div>
            </div>

            <div class=\"row\" align=\"center\">

                <table border=\"1\" class=\"table table-responsive\" style=\"margin-top: 40px\">
                    <tr class=\"table-header\"><td>Matiere</td><td>Note 1</td> <td>Note 2</td><td>Note 3</td><td>Enseignant</td><td>Moyenne</td><td>Remarque de l'enseignant</td></tr>
                    ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["resultatEleve"], "listResultat", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 33
                    echo "                    <tr align=\"center\"><td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "matiere", array()), "html", null, true);
                    echo "</td>

                        ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(0, 2));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 36
                        echo "                            ";
                        if (!$this->getAttribute($this->getAttribute($context["r"], "note", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                            // line 37
                            echo "                                <td> --- </td>
                            ";
                        } else {
                            // line 39
                            echo "                                <td> ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "note", array()), $context["i"], array(), "array"), "2", ".", ","), "html", null, true);
                            echo " </td>
                            ";
                        }
                        // line 41
                        echo "
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "

                        <td>
                            ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "nomenseignant", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "prenomenseignant", array()), "html", null, true);
                    echo "
                        </td>
                        <td>
                            ";
                    // line 49
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
                // line 55
                echo "
                    <tr align=\"center\"><td colspan=\"6\"><h4>Moyenne Générale</h4></td><td><h4>";
                // line 56
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["resultatEleve"], "moyenneGeneral", array()), "2", ".", ","), "html", null, true);
                echo "</h4></td></tr>
                </table>
                <button class=\"btn btn-primary\" onclick=\"printIt()\"><i class=\"fa fa-print\"></i> Imprimer</button>
            </div>
                   ";
            }
            // line 61
            echo "               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resultatEleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>


";
    }

    // line 2

    public function getTemplateName()
    {
        return "@projet/Default/Admin/afficherBulletinGroupe.html.twig";
    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(160 => 62, 154 => 61, 146 => 56, 143 => 55, 131 => 49, 123 => 46, 118 => 43, 111 => 41, 105 => 39, 101 => 37, 98 => 36, 94 => 35, 88 => 33, 84 => 32, 73 => 24, 65 => 21, 60 => 18, 56 => 16, 53 => 15, 49 => 14, 40 => 7, 37 => 6, 32 => 3, 29 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@projet/Default/Admin/afficherBulletinGroupe.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\afficherBulletinGroupe.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
