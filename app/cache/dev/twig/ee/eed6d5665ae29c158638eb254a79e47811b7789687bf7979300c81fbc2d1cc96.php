<?php

/* @projet/Default/Parent/consulterNotes.html.twig */
class __TwigTemplate_c25a55d12451ba4475f0b762e3036a67a2887a152d575b236aa0eb389487b5ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForParent.html.twig", "@projet/Default/Parent/consulterNotes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_4592cd5f43abe9272e78d4a518e2d7d7467583f42b1a5cf1b6e90c09f4bba47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4592cd5f43abe9272e78d4a518e2d7d7467583f42b1a5cf1b6e90c09f4bba47a->enter($__internal_4592cd5f43abe9272e78d4a518e2d7d7467583f42b1a5cf1b6e90c09f4bba47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Consulter Notes
";

        $__internal_4592cd5f43abe9272e78d4a518e2d7d7467583f42b1a5cf1b6e90c09f4bba47a->leave($__internal_4592cd5f43abe9272e78d4a518e2d7d7467583f42b1a5cf1b6e90c09f4bba47a_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_d806f4d24653f1b8009f740dbab835f06fd0f896c733413ea6eb6b66cd1e5a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d806f4d24653f1b8009f740dbab835f06fd0f896c733413ea6eb6b66cd1e5a2e->enter($__internal_d806f4d24653f1b8009f740dbab835f06fd0f896c733413ea6eb6b66cd1e5a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "    ";
        if (array_key_exists("message", $context)) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "
    ";
        } else {
            // line 10
            echo "        <div>
            <div class=\"row col-xs-8\">
                <h4><b>* Elève : </b>";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["nomPrenomEleve"]) ? $context["nomPrenomEleve"] : $this->getContext($context, "nomPrenomEleve")), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"row col-xs-4\">
                <h4><b>* Matricule : </b>";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["matriculeEleve"]) ? $context["matriculeEleve"] : $this->getContext($context, "matriculeEleve")), "html", null, true);
            echo "</h4>
            </div>
        </div>

        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 20
                echo "            <center><h3>Annee Scolaire courante, Trimestre : ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</h3></center>
            <table border=\"1\" class=\"table table-responsive\">
                <tr class=\"table-header\">
                    <td>Matiere</td>
                    <td>Note 1</td>
                    <td>Note 2</td>
                    <td>Note 3</td>
                    <td>Enseignant</td>
                </tr>
                ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["resultat"]) ? $context["resultat"] : $this->getContext($context, "resultat")));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 30
                    echo "                    ";
                    if (($this->getAttribute($context["r"], "trimestre", array()) == $context["i"])) {
                        // line 31
                        echo "                        <tr>
                            <td>";
                        // line 32
                        echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "matiere", array()), "html", null, true);
                        echo "</td>
                            ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 2));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 34
                            echo "                                ";
                            if (!$this->getAttribute($this->getAttribute($context["r"], "note", array(), "any", false, true), $context["i"], array(), "array", true, true)) {
                                // line 35
                                echo "                                    <td> --- </td>
                                ";
                            } else {
                                // line 37
                                echo "                                    <td> ";
                                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "note", array()), $context["i"], array(), "array"), "2", ".", ","), "html", null, true);
                                echo " </td>
                                ";
                            }
                            // line 39
                            echo "
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "                            <td>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "nomenseignant", array()), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "nomenseignant", array()), "prenomenseignant", array()), "html", null, true);
                        echo "</td>
                        </tr>
                    ";
                    }
                    // line 44
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            </table>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
        }

        $__internal_d806f4d24653f1b8009f740dbab835f06fd0f896c733413ea6eb6b66cd1e5a2e->leave($__internal_d806f4d24653f1b8009f740dbab835f06fd0f896c733413ea6eb6b66cd1e5a2e_prof);

    }

    // line 2

    public function isTraitable()
    {
        return false;
    }

    // line 6

    public function getDebugInfo()
    {
        return array(158 => 47, 151 => 45, 145 => 44, 136 => 41, 129 => 39, 123 => 37, 119 => 35, 116 => 34, 112 => 33, 108 => 32, 105 => 31, 102 => 30, 98 => 29, 85 => 20, 81 => 19, 74 => 15, 68 => 12, 64 => 10, 58 => 8, 55 => 7, 49 => 6, 41 => 3, 35 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"baseForParent.html.twig\" %}
{% block title %}
    Consulter Notes
{% endblock %}

{% block mainContent %}
    {% if message is defined %}
        {{ message }}
    {% else %}
        <div>
            <div class=\"row col-xs-8\">
                <h4><b>* Elève : </b>{{ nomPrenomEleve }}</h4>
            </div>
            <div class=\"row col-xs-4\">
                <h4><b>* Matricule : </b>{{ matriculeEleve }}</h4>
            </div>
        </div>

        {% for i in 1..3 %}
            <center><h3>Annee Scolaire courante, Trimestre : {{ i }}</h3></center>
            <table border=\"1\" class=\"table table-responsive\">
                <tr class=\"table-header\">
                    <td>Matiere</td>
                    <td>Note 1</td>
                    <td>Note 2</td>
                    <td>Note 3</td>
                    <td>Enseignant</td>
                </tr>
                {% for r in resultat %}
                    {% if r.trimestre == i %}
                        <tr>
                            <td>{{ r.matiere }}</td>
                            {% for i in 0..2 %}
                                {% if r.note[i] is not defined  %}
                                    <td> --- </td>
                                {% else %}
                                    <td> {{ r.note[i] | number_format(\"2\", \".\", \",\") }} </td>
                                {% endif %}

                            {% endfor %}
                            <td>{{ r.nomenseignant.nomenseignant}} {{ r.nomenseignant.prenomenseignant }}</td>
                        </tr>
                    {% endif %}
                {% endfor %}
            </table>
        {% endfor %}
    {% endif %}
{% endblock %}", "@projet/Default/Parent/consulterNotes.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\consulterNotes.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b47bbc3c43d91040156b06fdcda9dd8165cf3670352cc54d8cf8a3835b70b25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47bbc3c43d91040156b06fdcda9dd8165cf3670352cc54d8cf8a3835b70b25d->enter($__internal_b47bbc3c43d91040156b06fdcda9dd8165cf3670352cc54d8cf8a3835b70b25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@projet/Default/Parent/consulterNotes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_b47bbc3c43d91040156b06fdcda9dd8165cf3670352cc54d8cf8a3835b70b25d->leave($__internal_b47bbc3c43d91040156b06fdcda9dd8165cf3670352cc54d8cf8a3835b70b25d_prof);

    }

    public function getTemplateName()
    {
        return "@projet/Default/Parent/consulterNotes.html.twig";
    }
}
