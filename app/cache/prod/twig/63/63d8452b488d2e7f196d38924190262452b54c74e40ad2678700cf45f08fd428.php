<?php

/* projetBundle:Default:login.html.twig */

class __TwigTemplate_1556ecee2258dd4170b39e1434cfd5e7d0e086d0097eefbc70cae6f240dcac45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForLogin.html.twig", "projetBundle:Default:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "
    S'authentifier

";
    }

    public function getTemplateName()
    {
        return "projetBundle:Default:login.html.twig";
    }

    // line 3

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(31 => 4, 28 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projetBundle:Default:login.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/login.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
