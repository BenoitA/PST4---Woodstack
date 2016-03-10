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
        $__internal_65e2978fe25c929bdc604fb624ef01fa39f31477f64d38927874f88374e9b38c = $this->env->getExtension("native_profiler");
        $__internal_65e2978fe25c929bdc604fb624ef01fa39f31477f64d38927874f88374e9b38c->enter($__internal_65e2978fe25c929bdc604fb624ef01fa39f31477f64d38927874f88374e9b38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e2978fe25c929bdc604fb624ef01fa39f31477f64d38927874f88374e9b38c->leave($__internal_65e2978fe25c929bdc604fb624ef01fa39f31477f64d38927874f88374e9b38c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_503b91a6baff278d226535e19c4640ff78816caf0017104aa24438816feddbce = $this->env->getExtension("native_profiler");
        $__internal_503b91a6baff278d226535e19c4640ff78816caf0017104aa24438816feddbce->enter($__internal_503b91a6baff278d226535e19c4640ff78816caf0017104aa24438816feddbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_503b91a6baff278d226535e19c4640ff78816caf0017104aa24438816feddbce->leave($__internal_503b91a6baff278d226535e19c4640ff78816caf0017104aa24438816feddbce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6f52a92651b6e427249e143854cb4c6929ca09eac683d11524a5ed16a4d9f4c = $this->env->getExtension("native_profiler");
        $__internal_f6f52a92651b6e427249e143854cb4c6929ca09eac683d11524a5ed16a4d9f4c->enter($__internal_f6f52a92651b6e427249e143854cb4c6929ca09eac683d11524a5ed16a4d9f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f6f52a92651b6e427249e143854cb4c6929ca09eac683d11524a5ed16a4d9f4c->leave($__internal_f6f52a92651b6e427249e143854cb4c6929ca09eac683d11524a5ed16a4d9f4c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_57917198d33e3a2f32437050a1e5ad5c93aa0a6fbc3bcfe1c7d65b259ed4c6b2 = $this->env->getExtension("native_profiler");
        $__internal_57917198d33e3a2f32437050a1e5ad5c93aa0a6fbc3bcfe1c7d65b259ed4c6b2->enter($__internal_57917198d33e3a2f32437050a1e5ad5c93aa0a6fbc3bcfe1c7d65b259ed4c6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_57917198d33e3a2f32437050a1e5ad5c93aa0a6fbc3bcfe1c7d65b259ed4c6b2->leave($__internal_57917198d33e3a2f32437050a1e5ad5c93aa0a6fbc3bcfe1c7d65b259ed4c6b2_prof);

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