<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5b1e647c9bd0050d378ed2f1d95874b90cb19d25d613c67eca5ae8138c192ce8 extends Twig_Template
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
        return array(27 => 3, 25 => 2, 22 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_799308ef8303744aac5a132e8570b2e704cfcbcdcae9bd9add5e2980db89fc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799308ef8303744aac5a132e8570b2e704cfcbcdcae9bd9add5e2980db89fc34->enter($__internal_799308ef8303744aac5a132e8570b2e704cfcbcdcae9bd9add5e2980db89fc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";

        $__internal_799308ef8303744aac5a132e8570b2e704cfcbcdcae9bd9add5e2980db89fc34->leave($__internal_799308ef8303744aac5a132e8570b2e704cfcbcdcae9bd9add5e2980db89fc34_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }
}
