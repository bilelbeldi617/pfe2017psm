<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b50903aa068429d983790852efe479c781eeabd527d3f5558b899e354c761736 extends Twig_Template
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
        $__internal_29cc91e7cb15d6cfee59d7d32f364d34ed0bf9cf4c8f9f07a2a398135c172e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29cc91e7cb15d6cfee59d7d32f364d34ed0bf9cf4c8f9f07a2a398135c172e6a->enter($__internal_29cc91e7cb15d6cfee59d7d32f364d34ed0bf9cf4c8f9f07a2a398135c172e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_29cc91e7cb15d6cfee59d7d32f364d34ed0bf9cf4c8f9f07a2a398135c172e6a->leave($__internal_29cc91e7cb15d6cfee59d7d32f364d34ed0bf9cf4c8f9f07a2a398135c172e6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
