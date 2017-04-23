<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eee5c11741be5702b8081fc9348081c4d03b8a95512f1a35062273bed3326f03 extends Twig_Template
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94708dbc7f19994b66574c86db6adfb296530daa81e18035548336aecd6a5c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94708dbc7f19994b66574c86db6adfb296530daa81e18035548336aecd6a5c28->enter($__internal_94708dbc7f19994b66574c86db6adfb296530daa81e18035548336aecd6a5c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";

        $__internal_94708dbc7f19994b66574c86db6adfb296530daa81e18035548336aecd6a5c28->leave($__internal_94708dbc7f19994b66574c86db6adfb296530daa81e18035548336aecd6a5c28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }
}
