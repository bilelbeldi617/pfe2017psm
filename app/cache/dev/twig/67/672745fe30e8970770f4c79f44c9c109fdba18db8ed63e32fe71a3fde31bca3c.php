<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_b94057625192e36197e06b508340139e613d76a836e98bd27a22eae7aa783ebc extends Twig_Template
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80655ea89ec5dd5d8b3c9166880c83dc45af2c5b79719e608cd797c141b06cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80655ea89ec5dd5d8b3c9166880c83dc45af2c5b79719e608cd797c141b06cff->enter($__internal_80655ea89ec5dd5d8b3c9166880c83dc45af2c5b79719e608cd797c141b06cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";

        $__internal_80655ea89ec5dd5d8b3c9166880c83dc45af2c5b79719e608cd797c141b06cff->leave($__internal_80655ea89ec5dd5d8b3c9166880c83dc45af2c5b79719e608cd797c141b06cff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }
}
