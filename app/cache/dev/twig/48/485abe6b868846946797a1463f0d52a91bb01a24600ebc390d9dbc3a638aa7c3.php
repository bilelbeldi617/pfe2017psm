<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0b7af98746dd24dd215c25a7b472cef9b6eb33d46b62e2ab8be944910a502dbb extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_262a267410705e95ff9f78b5b844c0fb690ce49ff7898bac1fb0badf3495f809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262a267410705e95ff9f78b5b844c0fb690ce49ff7898bac1fb0badf3495f809->enter($__internal_262a267410705e95ff9f78b5b844c0fb690ce49ff7898bac1fb0badf3495f809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";

        $__internal_262a267410705e95ff9f78b5b844c0fb690ce49ff7898bac1fb0badf3495f809->leave($__internal_262a267410705e95ff9f78b5b844c0fb690ce49ff7898bac1fb0badf3495f809_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }
}
