<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_60125c21fdb54c9fa658426b59f0ab93fbb52845f949b318082da755a02a9f21 extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01cc6d6005993a1febf2a44e1200b04bced4a54943b955a16b87d855b974a816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cc6d6005993a1febf2a44e1200b04bced4a54943b955a16b87d855b974a816->enter($__internal_01cc6d6005993a1febf2a44e1200b04bced4a54943b955a16b87d855b974a816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";

        $__internal_01cc6d6005993a1febf2a44e1200b04bced4a54943b955a16b87d855b974a816->leave($__internal_01cc6d6005993a1febf2a44e1200b04bced4a54943b955a16b87d855b974a816_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }
}
