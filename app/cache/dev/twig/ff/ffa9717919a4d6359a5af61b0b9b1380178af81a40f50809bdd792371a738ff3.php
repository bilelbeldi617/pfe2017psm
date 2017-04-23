<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_623de78cd7f463f127ee2e3a56939d5aa7516f71aef35e5454759b5f9df5b30e extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_950129240731b96e2d8973c6aa3d61a9bb4a27e3b60029e40bf782e4cec3e105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_950129240731b96e2d8973c6aa3d61a9bb4a27e3b60029e40bf782e4cec3e105->enter($__internal_950129240731b96e2d8973c6aa3d61a9bb4a27e3b60029e40bf782e4cec3e105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";

        $__internal_950129240731b96e2d8973c6aa3d61a9bb4a27e3b60029e40bf782e4cec3e105->leave($__internal_950129240731b96e2d8973c6aa3d61a9bb4a27e3b60029e40bf782e4cec3e105_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }
}
