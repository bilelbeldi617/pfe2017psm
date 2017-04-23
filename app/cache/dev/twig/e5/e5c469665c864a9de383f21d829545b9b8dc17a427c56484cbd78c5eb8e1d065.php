<?php

/* projetBundle:Default:login.html.twig */

class __TwigTemplate_412a4707b8168ff4ea41beadd5ac9887db745e2ec53722e215542fd9d5368e48 extends Twig_Template
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
        $__internal_66b0519e13c75fc121703bf826afc97e3aeb3ab6761fb28b2e30a6ebf579525b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b0519e13c75fc121703bf826afc97e3aeb3ab6761fb28b2e30a6ebf579525b->enter($__internal_66b0519e13c75fc121703bf826afc97e3aeb3ab6761fb28b2e30a6ebf579525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
    S'authentifier

";

        $__internal_66b0519e13c75fc121703bf826afc97e3aeb3ab6761fb28b2e30a6ebf579525b->leave($__internal_66b0519e13c75fc121703bf826afc97e3aeb3ab6761fb28b2e30a6ebf579525b_prof);

    }

    public function isTraitable()
    {
        return false;
    }

    // line 3

    public function getDebugInfo()
    {
        return array(40 => 4, 34 => 3, 11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::baseForLogin.html.twig\"%}

{% block title %}

    S'authentifier

{% endblock %}


", "projetBundle:Default:login.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\src\\projetBundle/Resources/views/Default/login.html.twig");
    }

    protected function doGetParent(array $context)
    {
        return "::baseForLogin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e903b861ede2f7a3438f8b8f48247b78134f3edff6968ec47930f3d7261e697f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e903b861ede2f7a3438f8b8f48247b78134f3edff6968ec47930f3d7261e697f->enter($__internal_e903b861ede2f7a3438f8b8f48247b78134f3edff6968ec47930f3d7261e697f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetBundle:Default:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));

        $__internal_e903b861ede2f7a3438f8b8f48247b78134f3edff6968ec47930f3d7261e697f->leave($__internal_e903b861ede2f7a3438f8b8f48247b78134f3edff6968ec47930f3d7261e697f_prof);

    }

    public function getTemplateName()
    {
        return "projetBundle:Default:login.html.twig";
    }
}
