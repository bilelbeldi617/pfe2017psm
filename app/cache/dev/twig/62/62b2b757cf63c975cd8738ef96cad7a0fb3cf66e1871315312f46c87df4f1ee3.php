<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8b56b95664e16a037cfb1fdb67e3ca4f7293d9f7a465eb3f6872d220c6656f0b extends Twig_Template
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
        $__internal_44a54cf36fae93decc77dab2315c2dbabff23d84aa7ddbf421ad21c0429c6975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a54cf36fae93decc77dab2315c2dbabff23d84aa7ddbf421ad21c0429c6975->enter($__internal_44a54cf36fae93decc77dab2315c2dbabff23d84aa7ddbf421ad21c0429c6975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_44a54cf36fae93decc77dab2315c2dbabff23d84aa7ddbf421ad21c0429c6975->leave($__internal_44a54cf36fae93decc77dab2315c2dbabff23d84aa7ddbf421ad21c0429c6975_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
