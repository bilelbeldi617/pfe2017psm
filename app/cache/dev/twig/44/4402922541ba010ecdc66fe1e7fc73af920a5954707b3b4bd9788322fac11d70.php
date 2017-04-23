<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_defbbd35bedc1192ab159784981f6f822e1e28c3fb04cee998d319cbde873668 extends Twig_Template
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00fba00661fecb3fbd428d9df0cc444ed5b7c1b2e57ba2299bd0331f43a56c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fba00661fecb3fbd428d9df0cc444ed5b7c1b2e57ba2299bd0331f43a56c8c->enter($__internal_00fba00661fecb3fbd428d9df0cc444ed5b7c1b2e57ba2299bd0331f43a56c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";

        $__internal_00fba00661fecb3fbd428d9df0cc444ed5b7c1b2e57ba2299bd0331f43a56c8c->leave($__internal_00fba00661fecb3fbd428d9df0cc444ed5b7c1b2e57ba2299bd0331f43a56c8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }
}
