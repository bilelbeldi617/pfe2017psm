<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5c8d0b7e187b2e7c66c22c232fca83c48c6f233c871d2f68e2e2a7122e597855 extends Twig_Template
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4618a55835c655e860eba0497a31aba79cbb0ff00eda3d2b28991eaf457aa0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4618a55835c655e860eba0497a31aba79cbb0ff00eda3d2b28991eaf457aa0f7->enter($__internal_4618a55835c655e860eba0497a31aba79cbb0ff00eda3d2b28991eaf457aa0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";

        $__internal_4618a55835c655e860eba0497a31aba79cbb0ff00eda3d2b28991eaf457aa0f7->leave($__internal_4618a55835c655e860eba0497a31aba79cbb0ff00eda3d2b28991eaf457aa0f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }
}
