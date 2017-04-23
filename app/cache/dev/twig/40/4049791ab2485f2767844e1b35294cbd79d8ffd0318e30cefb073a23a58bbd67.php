<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cd08e908144c49261c50037df4db355928051110cff9f6a94be8372711ef59af extends Twig_Template
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01c6fefa4abb0c2e4e0b240f00080f537b5d6188b891e22b574a399926c83619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c6fefa4abb0c2e4e0b240f00080f537b5d6188b891e22b574a399926c83619->enter($__internal_01c6fefa4abb0c2e4e0b240f00080f537b5d6188b891e22b574a399926c83619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";

        $__internal_01c6fefa4abb0c2e4e0b240f00080f537b5d6188b891e22b574a399926c83619->leave($__internal_01c6fefa4abb0c2e4e0b240f00080f537b5d6188b891e22b574a399926c83619_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }
}
