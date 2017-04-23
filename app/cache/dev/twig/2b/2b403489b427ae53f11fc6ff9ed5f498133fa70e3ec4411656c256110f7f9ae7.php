<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_36e4da84419f87679cec467b0f8b73b515eefa116a37a11119e5622e689a278f extends Twig_Template
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab0643eb11708b40101f3fbbc2b61ed5656a4fcb023abcb13fc25d2c02c5ff25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0643eb11708b40101f3fbbc2b61ed5656a4fcb023abcb13fc25d2c02c5ff25->enter($__internal_ab0643eb11708b40101f3fbbc2b61ed5656a4fcb023abcb13fc25d2c02c5ff25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";

        $__internal_ab0643eb11708b40101f3fbbc2b61ed5656a4fcb023abcb13fc25d2c02c5ff25->leave($__internal_ab0643eb11708b40101f3fbbc2b61ed5656a4fcb023abcb13fc25d2c02c5ff25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }
}
