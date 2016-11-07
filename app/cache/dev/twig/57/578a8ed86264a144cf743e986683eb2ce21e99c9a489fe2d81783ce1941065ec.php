<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b1df4c361cf3455e0f185b31148c665323b1b3ed5094665b9fc010adfaa6cab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6748a8e4ab421645ae3397c237cafc78b466184abd385e0669a83ace922efa8 = $this->env->getExtension("native_profiler");
        $__internal_d6748a8e4ab421645ae3397c237cafc78b466184abd385e0669a83ace922efa8->enter($__internal_d6748a8e4ab421645ae3397c237cafc78b466184abd385e0669a83ace922efa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6748a8e4ab421645ae3397c237cafc78b466184abd385e0669a83ace922efa8->leave($__internal_d6748a8e4ab421645ae3397c237cafc78b466184abd385e0669a83ace922efa8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92368abd26d86d4458cb01c822f1a459401615762b3fee72ad82ec789d49357c = $this->env->getExtension("native_profiler");
        $__internal_92368abd26d86d4458cb01c822f1a459401615762b3fee72ad82ec789d49357c->enter($__internal_92368abd26d86d4458cb01c822f1a459401615762b3fee72ad82ec789d49357c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_92368abd26d86d4458cb01c822f1a459401615762b3fee72ad82ec789d49357c->leave($__internal_92368abd26d86d4458cb01c822f1a459401615762b3fee72ad82ec789d49357c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1df8b9a7a352a9c56b69dd6d0152852032e6b91dbdf677c10ad9b375d4aa8243 = $this->env->getExtension("native_profiler");
        $__internal_1df8b9a7a352a9c56b69dd6d0152852032e6b91dbdf677c10ad9b375d4aa8243->enter($__internal_1df8b9a7a352a9c56b69dd6d0152852032e6b91dbdf677c10ad9b375d4aa8243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_1df8b9a7a352a9c56b69dd6d0152852032e6b91dbdf677c10ad9b375d4aa8243->leave($__internal_1df8b9a7a352a9c56b69dd6d0152852032e6b91dbdf677c10ad9b375d4aa8243_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2c0517e4d622eab634c0ce11d4f96bfc961a0769b80ad556b8c6bb0598705ca = $this->env->getExtension("native_profiler");
        $__internal_e2c0517e4d622eab634c0ce11d4f96bfc961a0769b80ad556b8c6bb0598705ca->enter($__internal_e2c0517e4d622eab634c0ce11d4f96bfc961a0769b80ad556b8c6bb0598705ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_e2c0517e4d622eab634c0ce11d4f96bfc961a0769b80ad556b8c6bb0598705ca->leave($__internal_e2c0517e4d622eab634c0ce11d4f96bfc961a0769b80ad556b8c6bb0598705ca_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cbabd5bfb9b599951dfaa0b74860b506cef0d7f301c4791daef392fa0f8f368a = $this->env->getExtension("native_profiler");
        $__internal_cbabd5bfb9b599951dfaa0b74860b506cef0d7f301c4791daef392fa0f8f368a->enter($__internal_cbabd5bfb9b599951dfaa0b74860b506cef0d7f301c4791daef392fa0f8f368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cbabd5bfb9b599951dfaa0b74860b506cef0d7f301c4791daef392fa0f8f368a->leave($__internal_cbabd5bfb9b599951dfaa0b74860b506cef0d7f301c4791daef392fa0f8f368a_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
