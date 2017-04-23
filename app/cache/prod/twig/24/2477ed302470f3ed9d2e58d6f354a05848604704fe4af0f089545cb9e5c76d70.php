<?php

/* projetBundle:Default/Admin:index.html.twig */

class __TwigTemplate_da6b1a7bba9b489d7af23e49e950c7c791dd909fadce9b1077e6b38fef902f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "
   Accueil

";
    }

    public function block_mainContent($context, array $blocks = array())
    {
        // line 14
        echo "
Des statistiques ...

";
    }

    // line 3

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:index.html.twig";
    }

    // line 13

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(42 => 14, 39 => 13, 32 => 4, 29 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projetBundle:Default/Admin:index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Admin\\index.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
