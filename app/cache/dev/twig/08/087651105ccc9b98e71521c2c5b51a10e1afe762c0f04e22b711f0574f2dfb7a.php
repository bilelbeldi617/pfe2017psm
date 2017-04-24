<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_4515b2de9280ee389ecb1fe02802da31f19ca550bedb6954c9e32b1358bdd464 extends Twig_Template
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
        $__internal_ceafc48c77b06425e15af575580a5cb99b71d0481f37d273c031524f7fe81a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceafc48c77b06425e15af575580a5cb99b71d0481f37d273c031524f7fe81a06->enter($__internal_ceafc48c77b06425e15af575580a5cb99b71d0481f37d273c031524f7fe81a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ceafc48c77b06425e15af575580a5cb99b71d0481f37d273c031524f7fe81a06->leave($__internal_ceafc48c77b06425e15af575580a5cb99b71d0481f37d273c031524f7fe81a06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
