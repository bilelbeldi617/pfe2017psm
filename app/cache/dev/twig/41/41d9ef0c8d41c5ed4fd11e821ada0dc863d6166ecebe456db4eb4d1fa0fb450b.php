<?php

/* projetBundle:Default/Enseignant:contacterParent.html.twig */
class __TwigTemplate_6947941b6af21e1b16789630404a7136b3a97bc5b077d09b6aa63633a82810a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::baseForEnseignant.html.twig", "projetBundle:Default/Enseignant:contacterParent.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseForEnseignant.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f50662a8c472da75f555a7cdf6f88bfc3ff9e7db7f800ce6d83dfd275a504d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50662a8c472da75f555a7cdf6f88bfc3ff9e7db7f800ce6d83dfd275a504d1f->enter($__internal_f50662a8c472da75f555a7cdf6f88bfc3ff9e7db7f800ce6d83dfd275a504d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default/Enseignant:contacterParent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f50662a8c472da75f555a7cdf6f88bfc3ff9e7db7f800ce6d83dfd275a504d1f->leave($__internal_f50662a8c472da75f555a7cdf6f88bfc3ff9e7db7f800ce6d83dfd275a504d1f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_656db98d104584546751a00527e7d73a2754a1abc3320bfe489687b43ebb2778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656db98d104584546751a00527e7d73a2754a1abc3320bfe489687b43ebb2778->enter($__internal_656db98d104584546751a00527e7d73a2754a1abc3320bfe489687b43ebb2778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Contacter les parents
";
        
        $__internal_656db98d104584546751a00527e7d73a2754a1abc3320bfe489687b43ebb2778->leave($__internal_656db98d104584546751a00527e7d73a2754a1abc3320bfe489687b43ebb2778_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default/Enseignant:contacterParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForEnseignant.html.twig\" %}
{% block title %}
    Contacter les parents
{% endblock %}
", "projetBundle:Default/Enseignant:contacterParent.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/Enseignant/contacterParent.html.twig");
    }
}
