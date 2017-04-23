<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5544d76066514473bd05f7a7080b98c281c456b33de466a750d6fa2dc8b9b3f3 extends Twig_Template
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d06fd3bc4c2fc5815c706d017549b4fbe8e8e5c30adb6cb01a6daa9a52c865e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06fd3bc4c2fc5815c706d017549b4fbe8e8e5c30adb6cb01a6daa9a52c865e9->enter($__internal_d06fd3bc4c2fc5815c706d017549b4fbe8e8e5c30adb6cb01a6daa9a52c865e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";

        $__internal_d06fd3bc4c2fc5815c706d017549b4fbe8e8e5c30adb6cb01a6daa9a52c865e9->leave($__internal_d06fd3bc4c2fc5815c706d017549b4fbe8e8e5c30adb6cb01a6daa9a52c865e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }
}
