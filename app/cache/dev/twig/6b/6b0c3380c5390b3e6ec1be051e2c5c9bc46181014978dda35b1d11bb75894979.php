<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a8799f9d0a05c1f345c9f1cc4284abf0a0534fdd28fd379acfa916deea6ba1ea extends Twig_Template
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8a55d60b45f8f5066cf53f21e24a2a9ac41dd7915c937e2907de82af6519f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a55d60b45f8f5066cf53f21e24a2a9ac41dd7915c937e2907de82af6519f32->enter($__internal_a8a55d60b45f8f5066cf53f21e24a2a9ac41dd7915c937e2907de82af6519f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";

        $__internal_a8a55d60b45f8f5066cf53f21e24a2a9ac41dd7915c937e2907de82af6519f32->leave($__internal_a8a55d60b45f8f5066cf53f21e24a2a9ac41dd7915c937e2907de82af6519f32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }
}
