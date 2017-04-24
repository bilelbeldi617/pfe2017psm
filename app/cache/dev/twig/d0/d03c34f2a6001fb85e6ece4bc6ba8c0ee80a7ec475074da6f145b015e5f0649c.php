<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_31ef7f72bb95407f2569b8d55f7d902799f2a0525ae2c252cd4e49fa0808353f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ddd6aed7b5710ea069ae592bf88654c718d55b3413da6e41b8767e9dc5ac28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ddd6aed7b5710ea069ae592bf88654c718d55b3413da6e41b8767e9dc5ac28b->enter($__internal_5ddd6aed7b5710ea069ae592bf88654c718d55b3413da6e41b8767e9dc5ac28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ddd6aed7b5710ea069ae592bf88654c718d55b3413da6e41b8767e9dc5ac28b->leave($__internal_5ddd6aed7b5710ea069ae592bf88654c718d55b3413da6e41b8767e9dc5ac28b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b19e1f8218a3ee6f0855e86a82f3c68af32eeca7f93f9ba04e5b67e957cca38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b19e1f8218a3ee6f0855e86a82f3c68af32eeca7f93f9ba04e5b67e957cca38->enter($__internal_6b19e1f8218a3ee6f0855e86a82f3c68af32eeca7f93f9ba04e5b67e957cca38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6b19e1f8218a3ee6f0855e86a82f3c68af32eeca7f93f9ba04e5b67e957cca38->leave($__internal_6b19e1f8218a3ee6f0855e86a82f3c68af32eeca7f93f9ba04e5b67e957cca38_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4906fb23bb5d9cfee24077291f52a981cc117e93052236cc0d023c35439dc73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4906fb23bb5d9cfee24077291f52a981cc117e93052236cc0d023c35439dc73a->enter($__internal_4906fb23bb5d9cfee24077291f52a981cc117e93052236cc0d023c35439dc73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4906fb23bb5d9cfee24077291f52a981cc117e93052236cc0d023c35439dc73a->leave($__internal_4906fb23bb5d9cfee24077291f52a981cc117e93052236cc0d023c35439dc73a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa6295c0db216ca3b831c0398f6d66c05767b63363ff3b9d73a59017ff72edb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6295c0db216ca3b831c0398f6d66c05767b63363ff3b9d73a59017ff72edb7->enter($__internal_aa6295c0db216ca3b831c0398f6d66c05767b63363ff3b9d73a59017ff72edb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_aa6295c0db216ca3b831c0398f6d66c05767b63363ff3b9d73a59017ff72edb7->leave($__internal_aa6295c0db216ca3b831c0398f6d66c05767b63363ff3b9d73a59017ff72edb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
