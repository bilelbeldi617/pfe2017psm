<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_be6c00ad4decabed574bfb1719c7067c3f00fc721b0b4e5ef2f0af674b4e4891 extends Twig_Template
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f212548d38e2ed6d62ac0b49db61e843fc30eb0a2b4d9ffb382b1f783ce613f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f212548d38e2ed6d62ac0b49db61e843fc30eb0a2b4d9ffb382b1f783ce613f->enter($__internal_5f212548d38e2ed6d62ac0b49db61e843fc30eb0a2b4d9ffb382b1f783ce613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";

        $__internal_5f212548d38e2ed6d62ac0b49db61e843fc30eb0a2b4d9ffb382b1f783ce613f->leave($__internal_5f212548d38e2ed6d62ac0b49db61e843fc30eb0a2b4d9ffb382b1f783ce613f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }
}
