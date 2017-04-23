<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_274461ebafe68615e1293386549ea8f30a0a5d0aa27d490f33f97e600c15bd90 extends Twig_Template
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c0054d0debe45b318902de077e278cb2cc46e37c41a8bc0f4aa84f3f751b2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0054d0debe45b318902de077e278cb2cc46e37c41a8bc0f4aa84f3f751b2cb->enter($__internal_2c0054d0debe45b318902de077e278cb2cc46e37c41a8bc0f4aa84f3f751b2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";

        $__internal_2c0054d0debe45b318902de077e278cb2cc46e37c41a8bc0f4aa84f3f751b2cb->leave($__internal_2c0054d0debe45b318902de077e278cb2cc46e37c41a8bc0f4aa84f3f751b2cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }
}
