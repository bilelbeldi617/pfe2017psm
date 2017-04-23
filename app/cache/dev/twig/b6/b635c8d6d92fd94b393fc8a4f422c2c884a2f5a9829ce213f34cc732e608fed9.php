<?php

/* TwigBundle:Exception:error.rdf.twig */

class __TwigTemplate_f746b3b3d0363a98ea526ab513f7a8a9f9d54948352fca32f15b2cac88dd87df extends Twig_Template
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a28556cb63a4a85fef5c5454af3695b752e46a88dfca451b0cc39931dd5c784f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28556cb63a4a85fef5c5454af3695b752e46a88dfca451b0cc39931dd5c784f->enter($__internal_a28556cb63a4a85fef5c5454af3695b752e46a88dfca451b0cc39931dd5c784f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);

        $__internal_a28556cb63a4a85fef5c5454af3695b752e46a88dfca451b0cc39931dd5c784f->leave($__internal_a28556cb63a4a85fef5c5454af3695b752e46a88dfca451b0cc39931dd5c784f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }
}
