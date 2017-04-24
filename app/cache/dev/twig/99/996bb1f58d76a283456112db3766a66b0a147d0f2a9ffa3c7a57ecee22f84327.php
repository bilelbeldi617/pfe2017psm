<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3b2e7e04857a994003cc495b8ab0973b0d7398b412d248f153fe1d462874faac extends Twig_Template
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
        $__internal_90f93dc61fa14f9214df71700a95eab5a4f19004f0ea83a7f8caeb7ab23c4f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f93dc61fa14f9214df71700a95eab5a4f19004f0ea83a7f8caeb7ab23c4f99->enter($__internal_90f93dc61fa14f9214df71700a95eab5a4f19004f0ea83a7f8caeb7ab23c4f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_90f93dc61fa14f9214df71700a95eab5a4f19004f0ea83a7f8caeb7ab23c4f99->leave($__internal_90f93dc61fa14f9214df71700a95eab5a4f19004f0ea83a7f8caeb7ab23c4f99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
