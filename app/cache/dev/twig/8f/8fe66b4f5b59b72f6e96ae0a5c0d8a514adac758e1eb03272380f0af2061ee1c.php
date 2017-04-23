<?php

/* projetBundle:Default/Parent:voirToutNotif.html.twig */

class __TwigTemplate_9a4040509ebc68c15ba5fb552ca2ce576b128ce4e22869496711ea02f7157e71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseForParent.html.twig", "projetBundle:Default/Parent:voirToutNotif.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_16adfa86f81443efa10ca2ccc9825ed4d67544b84b22d0dba219f8d8479f8735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16adfa86f81443efa10ca2ccc9825ed4d67544b84b22d0dba219f8d8479f8735->enter($__internal_16adfa86f81443efa10ca2ccc9825ed4d67544b84b22d0dba219f8d8479f8735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Vos notifs
";

        $__internal_16adfa86f81443efa10ca2ccc9825ed4d67544b84b22d0dba219f8d8479f8735->leave($__internal_16adfa86f81443efa10ca2ccc9825ed4d67544b84b22d0dba219f8d8479f8735_prof);

    }

    public function block_mainContent($context, array $blocks = array())
    {
        $__internal_e8e05da80eedb90a0f72ca7b9089c65dcd3917715c2df74ce1f8ff80fe10906a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e05da80eedb90a0f72ca7b9089c65dcd3917715c2df74ce1f8ff80fe10906a->enter($__internal_e8e05da80eedb90a0f72ca7b9089c65dcd3917715c2df74ce1f8ff80fe10906a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "mainContent"));

        // line 8
        echo "    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <center><h4>Toutes vos notifications</h4></center>
    <div class=\"timeline-container timeline-style2\">


        <div class=\"timeline-items\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listNotifs"]) ? $context["listNotifs"] : $this->getContext($context, "listNotifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 16
            echo "            <div class=\"timeline-item clearfix\">
                <div class=\"timeline-info\">
                    <span class=\"timeline-date\">";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["n"], "dateNotification", array()), "d-F H:i"), "html", null, true);
            echo "</span>

                    <i class=\"timeline-indicator btn btn-info no-hover\"></i>
                </div>

                <div class=\"widget-box transparent\">
                    <div class=\"widget-body\">
                        <div class=\"widget-main no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bigger-110\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "texteNotification", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

                        </div>
                    </div>
                </div>
            </div>

           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div><!-- /.timeline-items -->
    </div>
    </div>
";

        $__internal_e8e05da80eedb90a0f72ca7b9089c65dcd3917715c2df74ce1f8ff80fe10906a->leave($__internal_e8e05da80eedb90a0f72ca7b9089c65dcd3917715c2df74ce1f8ff80fe10906a_prof);

    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    // line 7

    public function getDebugInfo()
    {
        return array(99 => 36, 84 => 27, 72 => 18, 68 => 16, 64 => 15, 55 => 8, 49 => 7, 41 => 4, 35 => 3, 11 => 1,);
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
    Vos notifs
{% endblock %}

{% block mainContent %}
    <hr class=\"hr-4\">
    <div class=\"col-xs-12\">
        <center><h4>Toutes vos notifications</h4></center>
    <div class=\"timeline-container timeline-style2\">


        <div class=\"timeline-items\">
            {% for n in listNotifs %}
            <div class=\"timeline-item clearfix\">
                <div class=\"timeline-info\">
                    <span class=\"timeline-date\">{{ n.dateNotification|date('d-F H:i') }}</span>

                    <i class=\"timeline-indicator btn btn-info no-hover\"></i>
                </div>

                <div class=\"widget-box transparent\">
                    <div class=\"widget-body\">
                        <div class=\"widget-main no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bigger-110\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ n.texteNotification }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

                        </div>
                    </div>
                </div>
            </div>

           {% endfor %}
        </div><!-- /.timeline-items -->
    </div>
    </div>
{% endblock %}", "projetBundle:Default/Parent:voirToutNotif.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Parent/voirToutNotif.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f3c2d7763caeed5341c74e5ac8842504c507ae86de2c57c7c9ecc500885e237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3c2d7763caeed5341c74e5ac8842504c507ae86de2c57c7c9ecc500885e237->enter($__internal_4f3c2d7763caeed5341c74e5ac8842504c507ae86de2c57c7c9ecc500885e237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Parent:voirToutNotif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_4f3c2d7763caeed5341c74e5ac8842504c507ae86de2c57c7c9ecc500885e237->leave($__internal_4f3c2d7763caeed5341c74e5ac8842504c507ae86de2c57c7c9ecc500885e237_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Parent:voirToutNotif.html.twig";
    }
}
