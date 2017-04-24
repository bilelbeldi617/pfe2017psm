<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_1c1e058067332635018c1d19f1f54729b6b6e1fb36cf3bdfafa33219cc6d5b9f extends Twig_Template
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
        $__internal_953befa22464f0e7b93dd3f9439d7adbc4841ab6f3c8f4ead0ee4e1ef47b3b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953befa22464f0e7b93dd3f9439d7adbc4841ab6f3c8f4ead0ee4e1ef47b3b76->enter($__internal_953befa22464f0e7b93dd3f9439d7adbc4841ab6f3c8f4ead0ee4e1ef47b3b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_953befa22464f0e7b93dd3f9439d7adbc4841ab6f3c8f4ead0ee4e1ef47b3b76->leave($__internal_953befa22464f0e7b93dd3f9439d7adbc4841ab6f3c8f4ead0ee4e1ef47b3b76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
