<?php

/* TwigBundle:Exception:error.js.twig */

class __TwigTemplate_fd4468c95d3e3efcdb5337ba19494257795fad1a9489ced6a79ba43d4b3e50e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array();
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(25 => 2, 22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4c1ff75291ab8ac9fcdc5d124faa94760ea0cd26058418e3be4449f058c1ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c1ff75291ab8ac9fcdc5d124faa94760ea0cd26058418e3be4449f058c1ec4->enter($__internal_f4c1ff75291ab8ac9fcdc5d124faa94760ea0cd26058418e3be4449f058c1ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";

        $__internal_f4c1ff75291ab8ac9fcdc5d124faa94760ea0cd26058418e3be4449f058c1ec4->leave($__internal_f4c1ff75291ab8ac9fcdc5d124faa94760ea0cd26058418e3be4449f058c1ec4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }
}
