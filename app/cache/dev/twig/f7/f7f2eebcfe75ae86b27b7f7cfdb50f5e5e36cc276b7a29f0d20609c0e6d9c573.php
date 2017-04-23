<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2d0c89151de0b656b8e5df6d9aca9c12aa4a7d9523311674a4ebacc0513af99c extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb7583ab4ffcf6ebf6af24c81bae2cdee06a73bc80ec5e38aa7283448129788f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7583ab4ffcf6ebf6af24c81bae2cdee06a73bc80ec5e38aa7283448129788f->enter($__internal_eb7583ab4ffcf6ebf6af24c81bae2cdee06a73bc80ec5e38aa7283448129788f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";

        $__internal_eb7583ab4ffcf6ebf6af24c81bae2cdee06a73bc80ec5e38aa7283448129788f->leave($__internal_eb7583ab4ffcf6ebf6af24c81bae2cdee06a73bc80ec5e38aa7283448129788f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }
}
