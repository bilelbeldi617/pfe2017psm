<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7bb0c17fab40361d13fceb27d8a88387404597a255ccc0ce679fb4852e132519 extends Twig_Template
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc042bed51bcf45675be3108f097420a2053ed21d6fa365aadec6ee4d431b630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc042bed51bcf45675be3108f097420a2053ed21d6fa365aadec6ee4d431b630->enter($__internal_dc042bed51bcf45675be3108f097420a2053ed21d6fa365aadec6ee4d431b630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";

        $__internal_dc042bed51bcf45675be3108f097420a2053ed21d6fa365aadec6ee4d431b630->leave($__internal_dc042bed51bcf45675be3108f097420a2053ed21d6fa365aadec6ee4d431b630_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }
}
