<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_623de78cd7f463f127ee2e3a56939d5aa7516f71aef35e5454759b5f9df5b30e extends Twig_Template
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
        $__internal_45a558d4c8bc1745ab22498ff21b0b08a0bb4768f8bfaccf3bd33995cff2f4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a558d4c8bc1745ab22498ff21b0b08a0bb4768f8bfaccf3bd33995cff2f4f7->enter($__internal_45a558d4c8bc1745ab22498ff21b0b08a0bb4768f8bfaccf3bd33995cff2f4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_45a558d4c8bc1745ab22498ff21b0b08a0bb4768f8bfaccf3bd33995cff2f4f7->leave($__internal_45a558d4c8bc1745ab22498ff21b0b08a0bb4768f8bfaccf3bd33995cff2f4f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
