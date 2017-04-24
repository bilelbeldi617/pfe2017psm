<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8c4dfab4a9b050b37c1ff4fa1fbba5c8aff839e4c584dd644438f70a2f939375 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b1b9f1b4e7edb3f8d9e98bf163e97d4f6d43aa120052fa9bb7ade8bb20364be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1b9f1b4e7edb3f8d9e98bf163e97d4f6d43aa120052fa9bb7ade8bb20364be->enter($__internal_9b1b9f1b4e7edb3f8d9e98bf163e97d4f6d43aa120052fa9bb7ade8bb20364be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_9b1b9f1b4e7edb3f8d9e98bf163e97d4f6d43aa120052fa9bb7ade8bb20364be->leave($__internal_9b1b9f1b4e7edb3f8d9e98bf163e97d4f6d43aa120052fa9bb7ade8bb20364be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
