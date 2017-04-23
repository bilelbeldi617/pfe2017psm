<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c2318a13e26546a6a8af1968dc6092a171fec1b8d775ef5453b015bee7d96f83 extends Twig_Template
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b64ce94d4e3648f13a21b3599c1ae9a6701cb45813597aa7d03f5bc096676c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b64ce94d4e3648f13a21b3599c1ae9a6701cb45813597aa7d03f5bc096676c1->enter($__internal_4b64ce94d4e3648f13a21b3599c1ae9a6701cb45813597aa7d03f5bc096676c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";

        $__internal_4b64ce94d4e3648f13a21b3599c1ae9a6701cb45813597aa7d03f5bc096676c1->leave($__internal_4b64ce94d4e3648f13a21b3599c1ae9a6701cb45813597aa7d03f5bc096676c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }
}
