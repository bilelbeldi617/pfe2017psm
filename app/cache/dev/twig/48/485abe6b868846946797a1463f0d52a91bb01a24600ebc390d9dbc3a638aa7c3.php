<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0b7af98746dd24dd215c25a7b472cef9b6eb33d46b62e2ab8be944910a502dbb extends Twig_Template
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
        $__internal_63495ca88b6da47f660ee48cc5caa7a4b12b540c4630a4ad1a976e0d48d45c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63495ca88b6da47f660ee48cc5caa7a4b12b540c4630a4ad1a976e0d48d45c3d->enter($__internal_63495ca88b6da47f660ee48cc5caa7a4b12b540c4630a4ad1a976e0d48d45c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_63495ca88b6da47f660ee48cc5caa7a4b12b540c4630a4ad1a976e0d48d45c3d->leave($__internal_63495ca88b6da47f660ee48cc5caa7a4b12b540c4630a4ad1a976e0d48d45c3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
