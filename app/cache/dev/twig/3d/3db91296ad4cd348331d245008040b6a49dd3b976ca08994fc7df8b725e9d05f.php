<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b50903aa068429d983790852efe479c781eeabd527d3f5558b899e354c761736 extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_659134e8f2a33c275efcc23773de6f2dba47132628e20708cbdf97d9e53eaf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659134e8f2a33c275efcc23773de6f2dba47132628e20708cbdf97d9e53eaf89->enter($__internal_659134e8f2a33c275efcc23773de6f2dba47132628e20708cbdf97d9e53eaf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";

        $__internal_659134e8f2a33c275efcc23773de6f2dba47132628e20708cbdf97d9e53eaf89->leave($__internal_659134e8f2a33c275efcc23773de6f2dba47132628e20708cbdf97d9e53eaf89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }
}
