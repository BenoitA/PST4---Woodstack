<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cd9b249abd5393da3131f86ec409d3a42b0f46ad2abff9033d90169097f58dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92b176441c7201b05e6d58ea2c17be8e6b74bc8ff6f313e870fbe5b35e7ef1f9 = $this->env->getExtension("native_profiler");
        $__internal_92b176441c7201b05e6d58ea2c17be8e6b74bc8ff6f313e870fbe5b35e7ef1f9->enter($__internal_92b176441c7201b05e6d58ea2c17be8e6b74bc8ff6f313e870fbe5b35e7ef1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b176441c7201b05e6d58ea2c17be8e6b74bc8ff6f313e870fbe5b35e7ef1f9->leave($__internal_92b176441c7201b05e6d58ea2c17be8e6b74bc8ff6f313e870fbe5b35e7ef1f9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa237b3062029ec048c47ff192ba12ef2c38d0f673e583851e51ebf316ac4d4d = $this->env->getExtension("native_profiler");
        $__internal_fa237b3062029ec048c47ff192ba12ef2c38d0f673e583851e51ebf316ac4d4d->enter($__internal_fa237b3062029ec048c47ff192ba12ef2c38d0f673e583851e51ebf316ac4d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fa237b3062029ec048c47ff192ba12ef2c38d0f673e583851e51ebf316ac4d4d->leave($__internal_fa237b3062029ec048c47ff192ba12ef2c38d0f673e583851e51ebf316ac4d4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28140151c5beaf2c1a52e1536bf7145c7063fa68affdfcfda82f9685843f4651 = $this->env->getExtension("native_profiler");
        $__internal_28140151c5beaf2c1a52e1536bf7145c7063fa68affdfcfda82f9685843f4651->enter($__internal_28140151c5beaf2c1a52e1536bf7145c7063fa68affdfcfda82f9685843f4651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28140151c5beaf2c1a52e1536bf7145c7063fa68affdfcfda82f9685843f4651->leave($__internal_28140151c5beaf2c1a52e1536bf7145c7063fa68affdfcfda82f9685843f4651_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a9335a1fe9c8741fd4167ed5e46ed624a27640e5755db8854b35244972eb244 = $this->env->getExtension("native_profiler");
        $__internal_2a9335a1fe9c8741fd4167ed5e46ed624a27640e5755db8854b35244972eb244->enter($__internal_2a9335a1fe9c8741fd4167ed5e46ed624a27640e5755db8854b35244972eb244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2a9335a1fe9c8741fd4167ed5e46ed624a27640e5755db8854b35244972eb244->leave($__internal_2a9335a1fe9c8741fd4167ed5e46ed624a27640e5755db8854b35244972eb244_prof);

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
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
