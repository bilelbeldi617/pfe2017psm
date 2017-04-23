<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8b8d05b5d44f7fd1be60e516324c5039f7170b079da12a64efec2627e64b2185 extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85943a25c42aabbc9c5c48251c35356495921754ccfee82116c14cf31ccf2df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85943a25c42aabbc9c5c48251c35356495921754ccfee82116c14cf31ccf2df1->enter($__internal_85943a25c42aabbc9c5c48251c35356495921754ccfee82116c14cf31ccf2df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";

        $__internal_85943a25c42aabbc9c5c48251c35356495921754ccfee82116c14cf31ccf2df1->leave($__internal_85943a25c42aabbc9c5c48251c35356495921754ccfee82116c14cf31ccf2df1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }
}
