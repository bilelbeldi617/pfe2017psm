<?php

/* TwigBundle:Exception:error.atom.twig */

class __TwigTemplate_00a9351b2335ca003a3353e8aa8a822a3aee58e27d6195d5dc83c1e3ff2c367c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array();
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57df4dfeb3b5bbeeb817f0ced97e13938a74552f17fbec38b16561179b6f1b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57df4dfeb3b5bbeeb817f0ced97e13938a74552f17fbec38b16561179b6f1b04->enter($__internal_57df4dfeb3b5bbeeb817f0ced97e13938a74552f17fbec38b16561179b6f1b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);

        $__internal_57df4dfeb3b5bbeeb817f0ced97e13938a74552f17fbec38b16561179b6f1b04->leave($__internal_57df4dfeb3b5bbeeb817f0ced97e13938a74552f17fbec38b16561179b6f1b04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }
}
