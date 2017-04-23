<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7b8e45068656c0632be3b24f1b65a7b3042e630a75fca6e71240ebd21351b957 extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_415f38cae25e721fb1086d97c6c0f1f164770601a6460c142e6fe3b6ef9cd0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415f38cae25e721fb1086d97c6c0f1f164770601a6460c142e6fe3b6ef9cd0e4->enter($__internal_415f38cae25e721fb1086d97c6c0f1f164770601a6460c142e6fe3b6ef9cd0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";

        $__internal_415f38cae25e721fb1086d97c6c0f1f164770601a6460c142e6fe3b6ef9cd0e4->leave($__internal_415f38cae25e721fb1086d97c6c0f1f164770601a6460c142e6fe3b6ef9cd0e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }
}
