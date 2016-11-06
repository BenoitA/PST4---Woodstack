<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cd75b47cec250eb6125154f162ba77fec713aec47c2eda323625b593339713f5 extends Twig_Template
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
        $__internal_4e0a2cc6e68e19ffa475343c1adbb1517958f77b2d28ebd05c420ee548d7ac9a = $this->env->getExtension("native_profiler");
        $__internal_4e0a2cc6e68e19ffa475343c1adbb1517958f77b2d28ebd05c420ee548d7ac9a->enter($__internal_4e0a2cc6e68e19ffa475343c1adbb1517958f77b2d28ebd05c420ee548d7ac9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e0a2cc6e68e19ffa475343c1adbb1517958f77b2d28ebd05c420ee548d7ac9a->leave($__internal_4e0a2cc6e68e19ffa475343c1adbb1517958f77b2d28ebd05c420ee548d7ac9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54b4415b0e05ff25ab700cf5158e32f0f545cd46590fb4045f631fbee77524b6 = $this->env->getExtension("native_profiler");
        $__internal_54b4415b0e05ff25ab700cf5158e32f0f545cd46590fb4045f631fbee77524b6->enter($__internal_54b4415b0e05ff25ab700cf5158e32f0f545cd46590fb4045f631fbee77524b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_54b4415b0e05ff25ab700cf5158e32f0f545cd46590fb4045f631fbee77524b6->leave($__internal_54b4415b0e05ff25ab700cf5158e32f0f545cd46590fb4045f631fbee77524b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_736d6e579d14ca42db9f5cb4cea5df8c849d06d31843787f7a82cbd4ca131612 = $this->env->getExtension("native_profiler");
        $__internal_736d6e579d14ca42db9f5cb4cea5df8c849d06d31843787f7a82cbd4ca131612->enter($__internal_736d6e579d14ca42db9f5cb4cea5df8c849d06d31843787f7a82cbd4ca131612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_736d6e579d14ca42db9f5cb4cea5df8c849d06d31843787f7a82cbd4ca131612->leave($__internal_736d6e579d14ca42db9f5cb4cea5df8c849d06d31843787f7a82cbd4ca131612_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bd1d4114cd296abf235e26e6b7551707b8e31694e082534898440dbcd7aaf77 = $this->env->getExtension("native_profiler");
        $__internal_9bd1d4114cd296abf235e26e6b7551707b8e31694e082534898440dbcd7aaf77->enter($__internal_9bd1d4114cd296abf235e26e6b7551707b8e31694e082534898440dbcd7aaf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9bd1d4114cd296abf235e26e6b7551707b8e31694e082534898440dbcd7aaf77->leave($__internal_9bd1d4114cd296abf235e26e6b7551707b8e31694e082534898440dbcd7aaf77_prof);

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
