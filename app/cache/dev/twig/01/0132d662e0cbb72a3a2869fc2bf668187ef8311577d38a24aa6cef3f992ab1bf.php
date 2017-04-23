<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5f17b7c7f690a34830fe29d1cd604c56ba314045edbf802f91a3679cca2d152c extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeb69594677b50c3bc794a190313c8587d57eb1e71cbc571a63cbcd58f556093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb69594677b50c3bc794a190313c8587d57eb1e71cbc571a63cbcd58f556093->enter($__internal_aeb69594677b50c3bc794a190313c8587d57eb1e71cbc571a63cbcd58f556093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";

        $__internal_aeb69594677b50c3bc794a190313c8587d57eb1e71cbc571a63cbcd58f556093->leave($__internal_aeb69594677b50c3bc794a190313c8587d57eb1e71cbc571a63cbcd58f556093_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }
}
