<?php

/* projetBundle:Default/Admin:listerEmploi.html.twig */

class __TwigTemplate_4fc6e0233a821f55112910569c9a1b28f1f594bf3b401b0edb6eae0b0a58abfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForAdmin.html.twig", "projetBundle:Default/Admin:listerEmploi.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Lister les emplois
    ";
    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Admin:listerEmploi.html.twig";
    }

    // line 2

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(31 => 3, 28 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projetBundle:Default/Admin:listerEmploi.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Admin/listerEmploi.html.twig");
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
