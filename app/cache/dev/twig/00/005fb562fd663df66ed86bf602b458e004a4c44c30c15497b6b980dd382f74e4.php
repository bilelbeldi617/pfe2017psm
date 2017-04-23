<?php

/* TwigBundle:Exception:exception.atom.twig */

class __TwigTemplate_11be1baefcc5737488cfdc9d75876b03ff2cbb214aea3d1b7b636d4c18cb9a2a extends Twig_Template
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
        return array(22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ff3fe29eddbde55f7c501f36f1bd84ae880337a6534fe9644ae38d50cbe3dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff3fe29eddbde55f7c501f36f1bd84ae880337a6534fe9644ae38d50cbe3dad->enter($__internal_0ff3fe29eddbde55f7c501f36f1bd84ae880337a6534fe9644ae38d50cbe3dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));

        $__internal_0ff3fe29eddbde55f7c501f36f1bd84ae880337a6534fe9644ae38d50cbe3dad->leave($__internal_0ff3fe29eddbde55f7c501f36f1bd84ae880337a6534fe9644ae38d50cbe3dad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }
}
