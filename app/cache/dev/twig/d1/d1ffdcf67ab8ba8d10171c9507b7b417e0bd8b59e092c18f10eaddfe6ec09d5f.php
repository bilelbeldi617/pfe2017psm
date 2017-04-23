<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_764ab596ac75e2221439ca159a7b800930b0846f74e202cce9f9f20d07baa36f extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b23de7fd840a6122804d5b43c9f55f86382aa19b77690221581c67159e4f216d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23de7fd840a6122804d5b43c9f55f86382aa19b77690221581c67159e4f216d->enter($__internal_b23de7fd840a6122804d5b43c9f55f86382aa19b77690221581c67159e4f216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";

        $__internal_b23de7fd840a6122804d5b43c9f55f86382aa19b77690221581c67159e4f216d->leave($__internal_b23de7fd840a6122804d5b43c9f55f86382aa19b77690221581c67159e4f216d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }
}
