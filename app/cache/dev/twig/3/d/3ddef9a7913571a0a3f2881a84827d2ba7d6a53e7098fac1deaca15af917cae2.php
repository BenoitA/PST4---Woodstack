<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_07566c11c5aa88988d404e00d13c147335487999afc44c8d7925e1989fb1b89e extends Twig_Template
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
        $__internal_9205cf0f686612dbf4340bde388f51ee9eea3251feb54ef93499f85e639c4d96 = $this->env->getExtension("native_profiler");
        $__internal_9205cf0f686612dbf4340bde388f51ee9eea3251feb54ef93499f85e639c4d96->enter($__internal_9205cf0f686612dbf4340bde388f51ee9eea3251feb54ef93499f85e639c4d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9205cf0f686612dbf4340bde388f51ee9eea3251feb54ef93499f85e639c4d96->leave($__internal_9205cf0f686612dbf4340bde388f51ee9eea3251feb54ef93499f85e639c4d96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fd03ea6d6712dac713dc7adb789584d9d2fece4e92f5b100fab0ec95de67dc9 = $this->env->getExtension("native_profiler");
        $__internal_8fd03ea6d6712dac713dc7adb789584d9d2fece4e92f5b100fab0ec95de67dc9->enter($__internal_8fd03ea6d6712dac713dc7adb789584d9d2fece4e92f5b100fab0ec95de67dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8fd03ea6d6712dac713dc7adb789584d9d2fece4e92f5b100fab0ec95de67dc9->leave($__internal_8fd03ea6d6712dac713dc7adb789584d9d2fece4e92f5b100fab0ec95de67dc9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e19175f13852773f2bfcd336ae45c4db482b6cbf8a86ff17deb137fd31f08ccc = $this->env->getExtension("native_profiler");
        $__internal_e19175f13852773f2bfcd336ae45c4db482b6cbf8a86ff17deb137fd31f08ccc->enter($__internal_e19175f13852773f2bfcd336ae45c4db482b6cbf8a86ff17deb137fd31f08ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e19175f13852773f2bfcd336ae45c4db482b6cbf8a86ff17deb137fd31f08ccc->leave($__internal_e19175f13852773f2bfcd336ae45c4db482b6cbf8a86ff17deb137fd31f08ccc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f65fd4d6fe440d88f953b634f174068dcd1cb90a07fb507cd766305d5c278c39 = $this->env->getExtension("native_profiler");
        $__internal_f65fd4d6fe440d88f953b634f174068dcd1cb90a07fb507cd766305d5c278c39->enter($__internal_f65fd4d6fe440d88f953b634f174068dcd1cb90a07fb507cd766305d5c278c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f65fd4d6fe440d88f953b634f174068dcd1cb90a07fb507cd766305d5c278c39->leave($__internal_f65fd4d6fe440d88f953b634f174068dcd1cb90a07fb507cd766305d5c278c39_prof);

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
