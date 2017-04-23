<?php

/* TwigBundle:Exception:error.css.twig */

class __TwigTemplate_2833d13851a897685d563cc8066101afb5a023f71cd75d0a5822c1172b027dc5 extends Twig_Template
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d651f676d804d598f74d49f1038362ed4fce2b2aac76d7eda5b9a381dd7b0429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d651f676d804d598f74d49f1038362ed4fce2b2aac76d7eda5b9a381dd7b0429->enter($__internal_d651f676d804d598f74d49f1038362ed4fce2b2aac76d7eda5b9a381dd7b0429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";

        $__internal_d651f676d804d598f74d49f1038362ed4fce2b2aac76d7eda5b9a381dd7b0429->leave($__internal_d651f676d804d598f74d49f1038362ed4fce2b2aac76d7eda5b9a381dd7b0429_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }
}
