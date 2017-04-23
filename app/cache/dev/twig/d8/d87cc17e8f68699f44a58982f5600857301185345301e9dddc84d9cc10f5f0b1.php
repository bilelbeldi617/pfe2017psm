<?php

/* form_div_layout.html.twig */

class __TwigTemplate_b81cdd5f68acd27e5f936f68eb701902acfb903bb272aff3e4caa7647775d5ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_37702b2ccbf07c0f3ef81d5270d4d78439f5e8ff71f775395b68da3338e3453b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37702b2ccbf07c0f3ef81d5270d4d78439f5e8ff71f775395b68da3338e3453b->enter($__internal_37702b2ccbf07c0f3ef81d5270d4d78439f5e8ff71f775395b68da3338e3453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }

        $__internal_37702b2ccbf07c0f3ef81d5270d4d78439f5e8ff71f775395b68da3338e3453b->leave($__internal_37702b2ccbf07c0f3ef81d5270d4d78439f5e8ff71f775395b68da3338e3453b_prof);

    }

    // line 3

    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_b089cae7c4ef71182297625061811fcc56f8f0cc72a9f65053d49452c5af48a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b089cae7c4ef71182297625061811fcc56f8f0cc72a9f65053d49452c5af48a6->enter($__internal_b089cae7c4ef71182297625061811fcc56f8f0cc72a9f65053d49452c5af48a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if (!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";

        $__internal_b089cae7c4ef71182297625061811fcc56f8f0cc72a9f65053d49452c5af48a6->leave($__internal_b089cae7c4ef71182297625061811fcc56f8f0cc72a9f65053d49452c5af48a6_prof);

    }

    // line 11

    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_97228e1af95c0cf2b93ebabb71304b15416a0d4117b1862f54bd246d16b583e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97228e1af95c0cf2b93ebabb71304b15416a0d4117b1862f54bd246d16b583e1->enter($__internal_97228e1af95c0cf2b93ebabb71304b15416a0d4117b1862f54bd246d16b583e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";

        $__internal_97228e1af95c0cf2b93ebabb71304b15416a0d4117b1862f54bd246d16b583e1->leave($__internal_97228e1af95c0cf2b93ebabb71304b15416a0d4117b1862f54bd246d16b583e1_prof);

    }

    // line 16

    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_62d9813d30ad4c1361d5aec78d187debb9e9007b6b23dbc073fc20d3712d7da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d9813d30ad4c1361d5aec78d187debb9e9007b6b23dbc073fc20d3712d7da8->enter($__internal_62d9813d30ad4c1361d5aec78d187debb9e9007b6b23dbc073fc20d3712d7da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);

        $__internal_62d9813d30ad4c1361d5aec78d187debb9e9007b6b23dbc073fc20d3712d7da8->leave($__internal_62d9813d30ad4c1361d5aec78d187debb9e9007b6b23dbc073fc20d3712d7da8_prof);

    }

    // line 26

    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e02569c9a13f324ab6d8a7eb9ca7f744dc658d5250338cbe29b7e1d5d2861ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02569c9a13f324ab6d8a7eb9ca7f744dc658d5250338cbe29b7e1d5d2861ded->enter($__internal_e02569c9a13f324ab6d8a7eb9ca7f744dc658d5250338cbe29b7e1d5d2861ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";

        $__internal_e02569c9a13f324ab6d8a7eb9ca7f744dc658d5250338cbe29b7e1d5d2861ded->leave($__internal_e02569c9a13f324ab6d8a7eb9ca7f744dc658d5250338cbe29b7e1d5d2861ded_prof);

    }

    // line 33

    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_1e1b2ce94b5c7d7a42eb349bc37effb8a4b817f9afef5e561a5fce5bdfcb4da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1b2ce94b5c7d7a42eb349bc37effb8a4b817f9afef5e561a5fce5bdfcb4da3->enter($__internal_1e1b2ce94b5c7d7a42eb349bc37effb8a4b817f9afef5e561a5fce5bdfcb4da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }

        $__internal_1e1b2ce94b5c7d7a42eb349bc37effb8a4b817f9afef5e561a5fce5bdfcb4da3->leave($__internal_1e1b2ce94b5c7d7a42eb349bc37effb8a4b817f9afef5e561a5fce5bdfcb4da3_prof);

    }

    // line 37

    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5192a0ec86fc5a3b952c31dac49585ddf592563e2fa5c6399ff7d1aca8b78c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5192a0ec86fc5a3b952c31dac49585ddf592563e2fa5c6399ff7d1aca8b78c21->enter($__internal_5192a0ec86fc5a3b952c31dac49585ddf592563e2fa5c6399ff7d1aca8b78c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";

        $__internal_5192a0ec86fc5a3b952c31dac49585ddf592563e2fa5c6399ff7d1aca8b78c21->leave($__internal_5192a0ec86fc5a3b952c31dac49585ddf592563e2fa5c6399ff7d1aca8b78c21_prof);

    }

    // line 45

    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_92fec5a971d2a2e4c4c7866daa9aae9ef0db21e37f8f377711885bf35eff5cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fec5a971d2a2e4c4c7866daa9aae9ef0db21e37f8f377711885bf35eff5cd5->enter($__internal_92fec5a971d2a2e4c4c7866daa9aae9ef0db21e37f8f377711885bf35eff5cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) && !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) && !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && (!$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if (!(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) && !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";

        $__internal_92fec5a971d2a2e4c4c7866daa9aae9ef0db21e37f8f377711885bf35eff5cd5->leave($__internal_92fec5a971d2a2e4c4c7866daa9aae9ef0db21e37f8f377711885bf35eff5cd5_prof);

    }

    // line 54

    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_f592cc02c85d4c64002eff646b115cba80d2d1befbcf2ed6a996327ddb5c2e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f592cc02c85d4c64002eff646b115cba80d2d1befbcf2ed6a996327ddb5c2e47->enter($__internal_f592cc02c85d4c64002eff646b115cba80d2d1befbcf2ed6a996327ddb5c2e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
            'parent' => $context['_parent'],
            'index0' => 0,
            'index' => 1,
            'first' => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_f592cc02c85d4c64002eff646b115cba80d2d1befbcf2ed6a996327ddb5c2e47->leave($__internal_f592cc02c85d4c64002eff646b115cba80d2d1befbcf2ed6a996327ddb5c2e47_prof);

    }

    // line 74

    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7e91d3497148c2b73c29715459c9e9ecb24e51e82bea199ade568fb3dd8da8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e91d3497148c2b73c29715459c9e9ecb24e51e82bea199ade568fb3dd8da8d3->enter($__internal_7e91d3497148c2b73c29715459c9e9ecb24e51e82bea199ade568fb3dd8da8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";

        $__internal_7e91d3497148c2b73c29715459c9e9ecb24e51e82bea199ade568fb3dd8da8d3->leave($__internal_7e91d3497148c2b73c29715459c9e9ecb24e51e82bea199ade568fb3dd8da8d3_prof);

    }

    // line 87

    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_7134325118d077c21cae591a7670349bf28208ee52d7b5e5c855eac2b63a604d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7134325118d077c21cae591a7670349bf28208ee52d7b5e5c855eac2b63a604d->enter($__internal_7134325118d077c21cae591a7670349bf28208ee52d7b5e5c855eac2b63a604d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";

        $__internal_7134325118d077c21cae591a7670349bf28208ee52d7b5e5c855eac2b63a604d->leave($__internal_7134325118d077c21cae591a7670349bf28208ee52d7b5e5c855eac2b63a604d_prof);

    }

    // line 91

    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_633e75279ac5d8c3ad2db136615402c8f7c11e43b08aa366b959825ed7984e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633e75279ac5d8c3ad2db136615402c8f7c11e43b08aa366b959825ed7984e84->enter($__internal_633e75279ac5d8c3ad2db136615402c8f7c11e43b08aa366b959825ed7984e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }

        $__internal_633e75279ac5d8c3ad2db136615402c8f7c11e43b08aa366b959825ed7984e84->leave($__internal_633e75279ac5d8c3ad2db136615402c8f7c11e43b08aa366b959825ed7984e84_prof);

    }

    // line 95

    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3d0039e878fa89845fa2cacbba5ae4ae6822df2eb388e13b63c0c27b8de4d92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0039e878fa89845fa2cacbba5ae4ae6822df2eb388e13b63c0c27b8de4d92b->enter($__internal_3d0039e878fa89845fa2cacbba5ae4ae6822df2eb388e13b63c0c27b8de4d92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
                $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
                $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
                $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }

        $__internal_3d0039e878fa89845fa2cacbba5ae4ae6822df2eb388e13b63c0c27b8de4d92b->leave($__internal_3d0039e878fa89845fa2cacbba5ae4ae6822df2eb388e13b63c0c27b8de4d92b_prof);

    }

    // line 108

    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_77d6e0872f409f7edcd76e2f39822739e00fffc6024e2ea4277c23993dad0505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d6e0872f409f7edcd76e2f39822739e00fffc6024e2ea4277c23993dad0505->enter($__internal_77d6e0872f409f7edcd76e2f39822739e00fffc6024e2ea4277c23993dad0505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }

        $__internal_77d6e0872f409f7edcd76e2f39822739e00fffc6024e2ea4277c23993dad0505->leave($__internal_77d6e0872f409f7edcd76e2f39822739e00fffc6024e2ea4277c23993dad0505_prof);

    }

    // line 122

    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_b2ee760d9cf4c0138af8b41a66756002027f82657eae4d3bb6e005000ac7a388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ee760d9cf4c0138af8b41a66756002027f82657eae4d3bb6e005000ac7a388->enter($__internal_b2ee760d9cf4c0138af8b41a66756002027f82657eae4d3bb6e005000ac7a388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);

        $__internal_b2ee760d9cf4c0138af8b41a66756002027f82657eae4d3bb6e005000ac7a388->leave($__internal_b2ee760d9cf4c0138af8b41a66756002027f82657eae4d3bb6e005000ac7a388_prof);

    }

    // line 133

    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_72e9a91ea541103faef13364386a8324079fa5ca2002cc5c49ac26d7696e7972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e9a91ea541103faef13364386a8324079fa5ca2002cc5c49ac26d7696e7972->enter($__internal_72e9a91ea541103faef13364386a8324079fa5ca2002cc5c49ac26d7696e7972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);

        $__internal_72e9a91ea541103faef13364386a8324079fa5ca2002cc5c49ac26d7696e7972->leave($__internal_72e9a91ea541103faef13364386a8324079fa5ca2002cc5c49ac26d7696e7972_prof);

    }

    // line 139

    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_cf10cd207b4616fff574bb885ccf4cfc6536739dce676713b86af1178d3a601d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf10cd207b4616fff574bb885ccf4cfc6536739dce676713b86af1178d3a601d->enter($__internal_cf10cd207b4616fff574bb885ccf4cfc6536739dce676713b86af1178d3a601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));

        $__internal_cf10cd207b4616fff574bb885ccf4cfc6536739dce676713b86af1178d3a601d->leave($__internal_cf10cd207b4616fff574bb885ccf4cfc6536739dce676713b86af1178d3a601d_prof);

    }

    // line 144

    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_39f46602eb19f50956c17c9ff4d61787e90768b1c830fcbfb0a89b760950af96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f46602eb19f50956c17c9ff4d61787e90768b1c830fcbfb0a89b760950af96->enter($__internal_39f46602eb19f50956c17c9ff4d61787e90768b1c830fcbfb0a89b760950af96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);

        $__internal_39f46602eb19f50956c17c9ff4d61787e90768b1c830fcbfb0a89b760950af96->leave($__internal_39f46602eb19f50956c17c9ff4d61787e90768b1c830fcbfb0a89b760950af96_prof);

    }

    // line 148

    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_70d22ab910b57f20cee34ed182d5e2a3c28c9c34f2fd8f809228733165465369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d22ab910b57f20cee34ed182d5e2a3c28c9c34f2fd8f809228733165465369->enter($__internal_70d22ab910b57f20cee34ed182d5e2a3c28c9c34f2fd8f809228733165465369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);

        $__internal_70d22ab910b57f20cee34ed182d5e2a3c28c9c34f2fd8f809228733165465369->leave($__internal_70d22ab910b57f20cee34ed182d5e2a3c28c9c34f2fd8f809228733165465369_prof);

    }

    // line 153

    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_56f554cb4239a5682ad0f88d2ed10dd4ad2f4441213fa4ff19307624e243d551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f554cb4239a5682ad0f88d2ed10dd4ad2f4441213fa4ff19307624e243d551->enter($__internal_56f554cb4239a5682ad0f88d2ed10dd4ad2f4441213fa4ff19307624e243d551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";

        $__internal_56f554cb4239a5682ad0f88d2ed10dd4ad2f4441213fa4ff19307624e243d551->leave($__internal_56f554cb4239a5682ad0f88d2ed10dd4ad2f4441213fa4ff19307624e243d551_prof);

    }

    // line 158

    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_3c36f4dee92ff7d82fa07a751f67b02da561f7f21e28c76bc7568c877a2fcafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c36f4dee92ff7d82fa07a751f67b02da561f7f21e28c76bc7568c877a2fcafa->enter($__internal_3c36f4dee92ff7d82fa07a751f67b02da561f7f21e28c76bc7568c877a2fcafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);

        $__internal_3c36f4dee92ff7d82fa07a751f67b02da561f7f21e28c76bc7568c877a2fcafa->leave($__internal_3c36f4dee92ff7d82fa07a751f67b02da561f7f21e28c76bc7568c877a2fcafa_prof);

    }

    // line 163

    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_b853d885dc3d04d3acf1f403ff037956657140cebdee21c3dbf605239e00c24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b853d885dc3d04d3acf1f403ff037956657140cebdee21c3dbf605239e00c24b->enter($__internal_b853d885dc3d04d3acf1f403ff037956657140cebdee21c3dbf605239e00c24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);

        $__internal_b853d885dc3d04d3acf1f403ff037956657140cebdee21c3dbf605239e00c24b->leave($__internal_b853d885dc3d04d3acf1f403ff037956657140cebdee21c3dbf605239e00c24b_prof);

    }

    // line 168

    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_c55292c2f7de58682de9e5af7e77f94de7705e28f5d40b3e02c42bde2afbc7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55292c2f7de58682de9e5af7e77f94de7705e28f5d40b3e02c42bde2afbc7ae->enter($__internal_c55292c2f7de58682de9e5af7e77f94de7705e28f5d40b3e02c42bde2afbc7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);

        $__internal_c55292c2f7de58682de9e5af7e77f94de7705e28f5d40b3e02c42bde2afbc7ae->leave($__internal_c55292c2f7de58682de9e5af7e77f94de7705e28f5d40b3e02c42bde2afbc7ae_prof);

    }

    // line 173

    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_c763ebd4386631b9c4becd6c43e1955d0b3e1bd4cb91a92d36eb073be8b93f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c763ebd4386631b9c4becd6c43e1955d0b3e1bd4cb91a92d36eb073be8b93f1b->enter($__internal_c763ebd4386631b9c4becd6c43e1955d0b3e1bd4cb91a92d36eb073be8b93f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 179
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 180
        $this->displayBlock("form_widget_simple", $context, $blocks);

        $__internal_c763ebd4386631b9c4becd6c43e1955d0b3e1bd4cb91a92d36eb073be8b93f1b->leave($__internal_c763ebd4386631b9c4becd6c43e1955d0b3e1bd4cb91a92d36eb073be8b93f1b_prof);

    }

    // line 178

    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e760a744e09256aef415540ccde40399b4b0e11e4c15e34e15efd4ebb8a028a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e760a744e09256aef415540ccde40399b4b0e11e4c15e34e15efd4ebb8a028a1->enter($__internal_e760a744e09256aef415540ccde40399b4b0e11e4c15e34e15efd4ebb8a028a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 184
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 185
            if (!twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 186
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 187
                    (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 188
                    (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 191
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 194
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";

        $__internal_e760a744e09256aef415540ccde40399b4b0e11e4c15e34e15efd4ebb8a028a1->leave($__internal_e760a744e09256aef415540ccde40399b4b0e11e4c15e34e15efd4ebb8a028a1_prof);

    }

    // line 183

    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_03903a5d8dc6a824757976cdb1de2662b966176437aea08a9540398ccf726b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03903a5d8dc6a824757976cdb1de2662b966176437aea08a9540398ccf726b5e->enter($__internal_03903a5d8dc6a824757976cdb1de2662b966176437aea08a9540398ccf726b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);

        $__internal_03903a5d8dc6a824757976cdb1de2662b966176437aea08a9540398ccf726b5e->leave($__internal_03903a5d8dc6a824757976cdb1de2662b966176437aea08a9540398ccf726b5e_prof);

    }

    // line 197

    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_da7a84adb281885567fdf44928174de66971790b7c795af1229783c2977f42a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7a84adb281885567fdf44928174de66971790b7c795af1229783c2977f42a9->enter($__internal_da7a84adb281885567fdf44928174de66971790b7c795af1229783c2977f42a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 203
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 204
        $this->displayBlock("button_widget", $context, $blocks);

        $__internal_da7a84adb281885567fdf44928174de66971790b7c795af1229783c2977f42a9->leave($__internal_da7a84adb281885567fdf44928174de66971790b7c795af1229783c2977f42a9_prof);

    }

    // line 202

    public function block_form_label($context, array $blocks = array())
    {
        $__internal_22355a9665c3356279573887dcd2768198beabe5b81e23124bd971eccdd33093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22355a9665c3356279573887dcd2768198beabe5b81e23124bd971eccdd33093->enter($__internal_22355a9665c3356279573887dcd2768198beabe5b81e23124bd971eccdd33093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 210
        if (!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 211
            if (!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 212
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 214
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 215
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 217
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 218
                if (!twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 219
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 220
                        (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 221
                        (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 224
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 227
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }

        $__internal_22355a9665c3356279573887dcd2768198beabe5b81e23124bd971eccdd33093->leave($__internal_22355a9665c3356279573887dcd2768198beabe5b81e23124bd971eccdd33093_prof);

    }

    // line 209

    public function block_button_label($context, array $blocks = array())
    {
        $__internal_753c153fe4de4115b5357fd475024181e0293ba24f2228da6e1c96fb88d8ff4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753c153fe4de4115b5357fd475024181e0293ba24f2228da6e1c96fb88d8ff4e->enter($__internal_753c153fe4de4115b5357fd475024181e0293ba24f2228da6e1c96fb88d8ff4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));


        $__internal_753c153fe4de4115b5357fd475024181e0293ba24f2228da6e1c96fb88d8ff4e->leave($__internal_753c153fe4de4115b5357fd475024181e0293ba24f2228da6e1c96fb88d8ff4e_prof);

    }

    // line 231

    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_da024367814dff6e577e8dd76103e9dc427f639a5402b221fc6bf7ba0b70c06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da024367814dff6e577e8dd76103e9dc427f639a5402b221fc6bf7ba0b70c06c->enter($__internal_da024367814dff6e577e8dd76103e9dc427f639a5402b221fc6bf7ba0b70c06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 240
        $this->displayBlock("form_rows", $context, $blocks);

        $__internal_da024367814dff6e577e8dd76103e9dc427f639a5402b221fc6bf7ba0b70c06c->leave($__internal_da024367814dff6e577e8dd76103e9dc427f639a5402b221fc6bf7ba0b70c06c_prof);

    }

    // line 235

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7e5ea1c676ae9f92ad55ebcda2ab66918f9a6835de7f3c21e6ccd65df8095244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5ea1c676ae9f92ad55ebcda2ab66918f9a6835de7f3c21e6ccd65df8095244->enter($__internal_7e5ea1c676ae9f92ad55ebcda2ab66918f9a6835de7f3c21e6ccd65df8095244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 244
        echo "<div>";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 247
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 248
        echo "</div>";

        $__internal_7e5ea1c676ae9f92ad55ebcda2ab66918f9a6835de7f3c21e6ccd65df8095244->leave($__internal_7e5ea1c676ae9f92ad55ebcda2ab66918f9a6835de7f3c21e6ccd65df8095244_prof);

    }

    // line 243

    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e962454d55a3e2b3f18d4e9a12ba3b7fb4ccb05161570d283650fbe99475ccb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e962454d55a3e2b3f18d4e9a12ba3b7fb4ccb05161570d283650fbe99475ccb5->enter($__internal_e962454d55a3e2b3f18d4e9a12ba3b7fb4ccb05161570d283650fbe99475ccb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 252
        echo "<div>";
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 254
        echo "</div>";

        $__internal_e962454d55a3e2b3f18d4e9a12ba3b7fb4ccb05161570d283650fbe99475ccb5->leave($__internal_e962454d55a3e2b3f18d4e9a12ba3b7fb4ccb05161570d283650fbe99475ccb5_prof);

    }

    // line 251

    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_06e4dbf42c1d7c02014b4658772719aea068d46f99b31d28ed16a5ebb5a44fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e4dbf42c1d7c02014b4658772719aea068d46f99b31d28ed16a5ebb5a44fd1->enter($__internal_06e4dbf42c1d7c02014b4658772719aea068d46f99b31d28ed16a5ebb5a44fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 258
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');

        $__internal_06e4dbf42c1d7c02014b4658772719aea068d46f99b31d28ed16a5ebb5a44fd1->leave($__internal_06e4dbf42c1d7c02014b4658772719aea068d46f99b31d28ed16a5ebb5a44fd1_prof);

    }

    // line 257

    public function block_form($context, array $blocks = array())
    {
        $__internal_4cfa3f55e885b9e0dc0884dd5d2278bd752872ad7c476dc480b0cbc594db3458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfa3f55e885b9e0dc0884dd5d2278bd752872ad7c476dc480b0cbc594db3458->enter($__internal_4cfa3f55e885b9e0dc0884dd5d2278bd752872ad7c476dc480b0cbc594db3458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 264
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 266
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');

        $__internal_4cfa3f55e885b9e0dc0884dd5d2278bd752872ad7c476dc480b0cbc594db3458->leave($__internal_4cfa3f55e885b9e0dc0884dd5d2278bd752872ad7c476dc480b0cbc594db3458_prof);

    }

    // line 263

    public function block_form_start($context, array $blocks = array())
    {
        $__internal_a160c520888d00d4cec1517a28dc6ba13c879f4151df0bc8efb4c19c47c11f42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a160c520888d00d4cec1517a28dc6ba13c879f4151df0bc8efb4c19c47c11f42->enter($__internal_a160c520888d00d4cec1517a28dc6ba13c879f4151df0bc8efb4c19c47c11f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 270
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 271
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 272
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 274
            $context["form_method"] = "POST";
        }
        // line 276
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 277
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 278
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }

        $__internal_a160c520888d00d4cec1517a28dc6ba13c879f4151df0bc8efb4c19c47c11f42->leave($__internal_a160c520888d00d4cec1517a28dc6ba13c879f4151df0bc8efb4c19c47c11f42_prof);

    }

    // line 269

    public function block_form_end($context, array $blocks = array())
    {
        $__internal_516a069ff61ae20476a9d1ae1c7750e966d7b8dad63b610f6a4b3869f26dc536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_516a069ff61ae20476a9d1ae1c7750e966d7b8dad63b610f6a4b3869f26dc536->enter($__internal_516a069ff61ae20476a9d1ae1c7750e966d7b8dad63b610f6a4b3869f26dc536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 283
        if ((!array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 284
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 286
        echo "</form>";

        $__internal_516a069ff61ae20476a9d1ae1c7750e966d7b8dad63b610f6a4b3869f26dc536->leave($__internal_516a069ff61ae20476a9d1ae1c7750e966d7b8dad63b610f6a4b3869f26dc536_prof);

    }

    // line 282

    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_00bd321f733fb5137cd8208b84e9d56e329b3c641de521df6d65f860327d9ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bd321f733fb5137cd8208b84e9d56e329b3c641de521df6d65f860327d9ed4->enter($__internal_00bd321f733fb5137cd8208b84e9d56e329b3c641de521df6d65f860327d9ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 290
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }

        $__internal_00bd321f733fb5137cd8208b84e9d56e329b3c641de521df6d65f860327d9ed4->leave($__internal_00bd321f733fb5137cd8208b84e9d56e329b3c641de521df6d65f860327d9ed4_prof);

    }

    // line 289

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_49e346ef7d006f24f05ee0bcd6516f6ccf8d23ecc00121c11dcca3a2334afb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e346ef7d006f24f05ee0bcd6516f6ccf8d23ecc00121c11dcca3a2334afb28->enter($__internal_49e346ef7d006f24f05ee0bcd6516f6ccf8d23ecc00121c11dcca3a2334afb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 294
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 295
            echo "<ul>";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 297
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "</ul>";
        }

        $__internal_49e346ef7d006f24f05ee0bcd6516f6ccf8d23ecc00121c11dcca3a2334afb28->leave($__internal_49e346ef7d006f24f05ee0bcd6516f6ccf8d23ecc00121c11dcca3a2334afb28_prof);

    }

    // line 293

    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_87843c5bb605a7118309966b9adda107082a9746fd2896376c83227d69f69d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87843c5bb605a7118309966b9adda107082a9746fd2896376c83227d69f69d0a->enter($__internal_87843c5bb605a7118309966b9adda107082a9746fd2896376c83227d69f69d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 305
            if (!$this->getAttribute($context["child"], "rendered", array())) {
                // line 306
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_87843c5bb605a7118309966b9adda107082a9746fd2896376c83227d69f69d0a->leave($__internal_87843c5bb605a7118309966b9adda107082a9746fd2896376c83227d69f69d0a_prof);

    }

    // line 303

    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_f3b2d55ade1609a750856c0d4e63406fe15be8e490b2855fd390850894ff222c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b2d55ade1609a750856c0d4e63406fe15be8e490b2855fd390850894ff222c->enter($__internal_f3b2d55ade1609a750856c0d4e63406fe15be8e490b2855fd390850894ff222c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 315
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_f3b2d55ade1609a750856c0d4e63406fe15be8e490b2855fd390850894ff222c->leave($__internal_f3b2d55ade1609a750856c0d4e63406fe15be8e490b2855fd390850894ff222c_prof);

    }

    // line 313

    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_11f0435fdee9e6063273a0d527159a70e084da82aa833426d4ce0c00da3d0198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f0435fdee9e6063273a0d527159a70e084da82aa833426d4ce0c00da3d0198->enter($__internal_11f0435fdee9e6063273a0d527159a70e084da82aa833426d4ce0c00da3d0198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 320
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 321
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 322
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 323
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) || !(isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
                // line 325
                echo " ";
                // line 326
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 327
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 328
                    $context["attrvalue"] === true)
                ) {
                    // line 329
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif (!(                // line 330
                    $context["attrvalue"] === false)
                ) {
                    // line 331
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_11f0435fdee9e6063273a0d527159a70e084da82aa833426d4ce0c00da3d0198->leave($__internal_11f0435fdee9e6063273a0d527159a70e084da82aa833426d4ce0c00da3d0198_prof);

    }

    // line 319

    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_42a6ab8682b669e13b70c44d4933686310298f1f39681a793012d1de272d6f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a6ab8682b669e13b70c44d4933686310298f1f39681a793012d1de272d6f60->enter($__internal_42a6ab8682b669e13b70c44d4933686310298f1f39681a793012d1de272d6f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 337
        if (!twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 338
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 339
            echo " ";
            // line 340
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 342
                $context["attrvalue"] === true)
            ) {
                // line 343
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif (!(            // line 344
                $context["attrvalue"] === false)
            ) {
                // line 345
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_42a6ab8682b669e13b70c44d4933686310298f1f39681a793012d1de272d6f60->leave($__internal_42a6ab8682b669e13b70c44d4933686310298f1f39681a793012d1de272d6f60_prof);

    }

    // line 336

    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_8e934b6862785cc3efacb0efd11e7792c8ea39f6953f2a964f248d66366e0d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e934b6862785cc3efacb0efd11e7792c8ea39f6953f2a964f248d66366e0d59->enter($__internal_8e934b6862785cc3efacb0efd11e7792c8ea39f6953f2a964f248d66366e0d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 351
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 352
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 353
            echo " ";
            // line 354
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 356
                $context["attrvalue"] === true)
            ) {
                // line 357
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif (!(            // line 358
                $context["attrvalue"] === false)
            ) {
                // line 359
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_8e934b6862785cc3efacb0efd11e7792c8ea39f6953f2a964f248d66366e0d59->leave($__internal_8e934b6862785cc3efacb0efd11e7792c8ea39f6953f2a964f248d66366e0d59_prof);

    }

    // line 350

    public function block_attributes($context, array $blocks = array())
    {
        $__internal_fca67d50662df6063eef899eef16bd235cbce217c7a0e9b5018c58de0830c69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca67d50662df6063eef899eef16bd235cbce217c7a0e9b5018c58de0830c69e->enter($__internal_fca67d50662df6063eef899eef16bd235cbce217c7a0e9b5018c58de0830c69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 365
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 366
            echo " ";
            // line 367
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 369
                $context["attrvalue"] === true)
            ) {
                // line 370
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif (!(            // line 371
                $context["attrvalue"] === false)
            ) {
                // line 372
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;

        $__internal_fca67d50662df6063eef899eef16bd235cbce217c7a0e9b5018c58de0830c69e->leave($__internal_fca67d50662df6063eef899eef16bd235cbce217c7a0e9b5018c58de0830c69e_prof);

    }

    // line 364

    public function getDebugInfo()
    {
        return array(1292 => 372, 1290 => 371, 1285 => 370, 1283 => 369, 1278 => 368, 1276 => 367, 1274 => 366, 1270 => 365, 1264 => 364, 1249 => 359, 1247 => 358, 1242 => 357, 1240 => 356, 1235 => 355, 1233 => 354, 1231 => 353, 1227 => 352, 1218 => 351, 1212 => 350, 1197 => 345, 1195 => 344, 1190 => 343, 1188 => 342, 1183 => 341, 1181 => 340, 1179 => 339, 1175 => 338, 1169 => 337, 1163 => 336, 1147 => 331, 1145 => 330, 1140 => 329, 1138 => 328, 1133 => 327, 1131 => 326, 1129 => 325, 1124 => 324, 1120 => 323, 1116 => 322, 1112 => 321, 1106 => 320, 1100 => 319, 1089 => 315, 1085 => 314, 1079 => 313, 1067 => 306, 1065 => 305, 1061 => 304, 1055 => 303, 1047 => 299, 1039 => 297, 1035 => 296, 1033 => 295, 1031 => 294, 1025 => 293, 1016 => 290, 1010 => 289, 1003 => 286, 1000 => 284, 998 => 283, 992 => 282, 982 => 278, 980 => 277, 953 => 276, 950 => 274, 947 => 272, 945 => 271, 943 => 270, 937 => 269, 930 => 266, 928 => 265, 926 => 264, 920 => 263, 913 => 258, 907 => 257, 900 => 254, 898 => 253, 896 => 252, 890 => 251, 883 => 248, 881 => 247, 879 => 246, 877 => 245, 875 => 244, 869 => 243, 862 => 240, 856 => 235, 845 => 231, 822 => 227, 818 => 224, 815 => 221, 814 => 220, 813 => 219, 811 => 218, 809 => 217, 806 => 215, 804 => 214, 801 => 212, 799 => 211, 797 => 210, 791 => 209, 784 => 204, 782 => 203, 776 => 202, 769 => 199, 767 => 198, 761 => 197, 748 => 194, 744 => 191, 741 => 188, 740 => 187, 739 => 186, 737 => 185, 735 => 184, 729 => 183, 722 => 180, 720 => 179, 714 => 178, 707 => 175, 705 => 174, 699 => 173, 692 => 170, 690 => 169, 684 => 168, 677 => 165, 675 => 164, 669 => 163, 661 => 160, 659 => 159, 653 => 158, 646 => 155, 644 => 154, 638 => 153, 631 => 150, 629 => 149, 623 => 148, 616 => 145, 610 => 144, 603 => 141, 601 => 140, 595 => 139, 588 => 136, 586 => 135, 580 => 133, 572 => 129, 562 => 128, 557 => 127, 555 => 126, 552 => 124, 550 => 123, 544 => 122, 536 => 118, 534 => 116, 533 => 115, 532 => 114, 531 => 113, 527 => 112, 524 => 110, 522 => 109, 516 => 108, 508 => 104, 506 => 103, 504 => 102, 502 => 101, 500 => 100, 496 => 99, 493 => 97, 491 => 96, 485 => 95, 468 => 92, 462 => 91, 445 => 88, 439 => 87, 406 => 82, 403 => 80, 401 => 79, 399 => 78, 394 => 77, 392 => 76, 375 => 75, 369 => 74, 362 => 71, 360 => 70, 358 => 69, 352 => 66, 350 => 65, 348 => 64, 346 => 63, 344 => 62, 335 => 60, 333 => 59, 326 => 58, 323 => 56, 321 => 55, 315 => 54, 308 => 51, 302 => 49, 300 => 48, 296 => 47, 292 => 46, 286 => 45, 278 => 41, 275 => 39, 273 => 38, 267 => 37, 256 => 34, 250 => 33, 243 => 30, 240 => 28, 238 => 27, 232 => 26, 225 => 23, 223 => 22, 221 => 21, 218 => 19, 216 => 18, 212 => 17, 206 => 16, 189 => 13, 187 => 12, 181 => 11, 173 => 7, 170 => 5, 168 => 4, 162 => 3, 155 => 364, 153 => 350, 151 => 336, 149 => 319, 147 => 313, 144 => 310, 142 => 303, 140 => 293, 138 => 289, 136 => 282, 134 => 269, 132 => 263, 130 => 257, 128 => 251, 126 => 243, 124 => 235, 122 => 231, 120 => 209, 118 => 202, 116 => 197, 114 => 183, 112 => 178, 110 => 173, 108 => 168, 106 => 163, 104 => 158, 102 => 153, 100 => 148, 98 => 144, 96 => 139, 94 => 133, 92 => 122, 90 => 108, 88 => 95, 86 => 91, 84 => 87, 82 => 74, 80 => 54, 78 => 45, 76 => 37, 74 => 33, 72 => 26, 70 => 16, 68 => 11, 66 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The ' . __METHOD__ . ' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "C:\\wamp\\www\\PrimaSchoolManager\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c80d58c65a8d3c2568268b087040fe4ccf64f6e5f9ff2355af21134b18c2de63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80d58c65a8d3c2568268b087040fe4ccf64f6e5f9ff2355af21134b18c2de63->enter($__internal_c80d58c65a8d3c2568268b087040fe4ccf64f6e5f9ff2355af21134b18c2de63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('range_widget', $context, $blocks);
        // line 183
        $this->displayBlock('button_widget', $context, $blocks);
        // line 197
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 202
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 209
        $this->displayBlock('form_label', $context, $blocks);
        // line 231
        $this->displayBlock('button_label', $context, $blocks);
        // line 235
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 243
        $this->displayBlock('form_row', $context, $blocks);
        // line 251
        $this->displayBlock('button_row', $context, $blocks);
        // line 257
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 263
        $this->displayBlock('form', $context, $blocks);
        // line 269
        $this->displayBlock('form_start', $context, $blocks);
        // line 282
        $this->displayBlock('form_end', $context, $blocks);
        // line 289
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 293
        $this->displayBlock('form_errors', $context, $blocks);
        // line 303
        $this->displayBlock('form_rest', $context, $blocks);
        // line 310
        echo "
";
        // line 313
        $this->displayBlock('form_rows', $context, $blocks);
        // line 319
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 336
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 350
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 364
        $this->displayBlock('attributes', $context, $blocks);

        $__internal_c80d58c65a8d3c2568268b087040fe4ccf64f6e5f9ff2355af21134b18c2de63->leave($__internal_c80d58c65a8d3c2568268b087040fe4ccf64f6e5f9ff2355af21134b18c2de63_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }
}
