<?php

/* @projet/Default/Enseignant/listerExamens.html.twig */
class __TwigTemplate_bf8acbaa3ffe6a845274dabb2487e32802a87ee42f655965bb8caed786fb5610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "@projet/Default/Enseignant/listerExamens.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "        Lister les examens
    ";
    }

    public function getTemplateName()
    {
        return "@projet/Default/Enseignant/listerExamens.html.twig";
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
        return new Twig_Source("", "@projet/Default/Enseignant/listerExamens.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle\\Resources\\views\\Default\\Enseignant\\listerExamens.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
