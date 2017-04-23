<?php

/* projetBundle:Default/Admin:creerEmploi.html.twig */

class __TwigTemplate_66eb87027b60a79b6497c4e933a786ec0451741bc6cc38a37f0b699a6a96820a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:creerEmploi.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_c9d2e14f147a7c4aa350e7c9a1cfe0c8a8365e6f5a4796d013339d58d02ab16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d2e14f147a7c4aa350e7c9a1cfe0c8a8365e6f5a4796d013339d58d02ab16a->enter($__internal_c9d2e14f147a7c4aa350e7c9a1cfe0c8a8365e6f5a4796d013339d58d02ab16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        Créer un emploi
    ";

        $__internal_c9d2e14f147a7c4aa350e7c9a1cfe0c8a8365e6f5a4796d013339d58d02ab16a->leave($__internal_c9d2e14f147a7c4aa350e7c9a1cfe0c8a8365e6f5a4796d013339d58d02ab16a_prof);

    }

    public function isTraitable()
    {
        return false;
    }

    // line 2

    public function getDebugInfo()
    {
        return array(40 => 3, 34 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForAdmin.html.twig\" %}
    {% block title %}
        Créer un emploi
    {% endblock %}", "projetBundle:Default/Admin:creerEmploi.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/creerEmploi.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0b7223469976b0e3c3797bc3685b5dd11dbc1fe42b3efae85a65899db9bf578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b7223469976b0e3c3797bc3685b5dd11dbc1fe42b3efae85a65899db9bf578->enter($__internal_c0b7223469976b0e3c3797bc3685b5dd11dbc1fe42b3efae85a65899db9bf578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Admin:creerEmploi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_c0b7223469976b0e3c3797bc3685b5dd11dbc1fe42b3efae85a65899db9bf578->leave($__internal_c0b7223469976b0e3c3797bc3685b5dd11dbc1fe42b3efae85a65899db9bf578_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:creerEmploi.html.twig";
    }
}
