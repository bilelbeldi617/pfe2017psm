<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5f17b7c7f690a34830fe29d1cd604c56ba314045edbf802f91a3679cca2d152c extends Twig_Template
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
        $__internal_0a9597439c2cf6cf5f6ee00bf6b5f194bc77c8accd94dbbb1933ab8571712b95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9597439c2cf6cf5f6ee00bf6b5f194bc77c8accd94dbbb1933ab8571712b95->enter($__internal_0a9597439c2cf6cf5f6ee00bf6b5f194bc77c8accd94dbbb1933ab8571712b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0a9597439c2cf6cf5f6ee00bf6b5f194bc77c8accd94dbbb1933ab8571712b95->leave($__internal_0a9597439c2cf6cf5f6ee00bf6b5f194bc77c8accd94dbbb1933ab8571712b95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
