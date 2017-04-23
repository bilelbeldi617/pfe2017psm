<?php

/* @projet/Default/Parent/index.html.twig */
class __TwigTemplate_fd358062c09e07ca03a39546e89ec366421ba1a28aabffe0658129b1e94aa8eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForParent.html.twig", "@projet/Default/Parent/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'mainContent' => array($this, 'block_mainContent'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    Accueil
";
    }

    public function block_mainContent($context, array $blocks = array())
    {
        // line 7
        echo "    Hello mister Foulen!
";
    }

    // line 2

    public function getTemplateName()
    {
        return "@projet/Default/Parent/index.html.twig";
    }

    // line 6

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array(40 => 7, 37 => 6, 32 => 3, 29 => 2, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@projet/Default/Parent/index.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Parent\\index.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForParent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
