<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8b56b95664e16a037cfb1fdb67e3ca4f7293d9f7a465eb3f6872d220c6656f0b extends Twig_Template
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b8f612e5353b6672c782ec39c83632fa11671c02d4762458be2c98dc0825945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b8f612e5353b6672c782ec39c83632fa11671c02d4762458be2c98dc0825945->enter($__internal_1b8f612e5353b6672c782ec39c83632fa11671c02d4762458be2c98dc0825945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";

        $__internal_1b8f612e5353b6672c782ec39c83632fa11671c02d4762458be2c98dc0825945->leave($__internal_1b8f612e5353b6672c782ec39c83632fa11671c02d4762458be2c98dc0825945_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }
}
