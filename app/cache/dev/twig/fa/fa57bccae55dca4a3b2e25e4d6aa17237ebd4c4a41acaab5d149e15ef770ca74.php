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
        $__internal_89dc8c451720369dac23b0b9fd6b45e1cc209e4faaee161afbfd28266bfae992 = $this->env->getExtension("native_profiler");
        $__internal_89dc8c451720369dac23b0b9fd6b45e1cc209e4faaee161afbfd28266bfae992->enter($__internal_89dc8c451720369dac23b0b9fd6b45e1cc209e4faaee161afbfd28266bfae992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89dc8c451720369dac23b0b9fd6b45e1cc209e4faaee161afbfd28266bfae992->leave($__internal_89dc8c451720369dac23b0b9fd6b45e1cc209e4faaee161afbfd28266bfae992_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_954f7d68b55baa3a3812797ba4fead53363f5e4fef9f4423ed7b15ff4a32c39c = $this->env->getExtension("native_profiler");
        $__internal_954f7d68b55baa3a3812797ba4fead53363f5e4fef9f4423ed7b15ff4a32c39c->enter($__internal_954f7d68b55baa3a3812797ba4fead53363f5e4fef9f4423ed7b15ff4a32c39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_954f7d68b55baa3a3812797ba4fead53363f5e4fef9f4423ed7b15ff4a32c39c->leave($__internal_954f7d68b55baa3a3812797ba4fead53363f5e4fef9f4423ed7b15ff4a32c39c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1caf1961ad1429361fc63410743ddc71e265f85a49fe0c6c033620889c2f4bd = $this->env->getExtension("native_profiler");
        $__internal_f1caf1961ad1429361fc63410743ddc71e265f85a49fe0c6c033620889c2f4bd->enter($__internal_f1caf1961ad1429361fc63410743ddc71e265f85a49fe0c6c033620889c2f4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1caf1961ad1429361fc63410743ddc71e265f85a49fe0c6c033620889c2f4bd->leave($__internal_f1caf1961ad1429361fc63410743ddc71e265f85a49fe0c6c033620889c2f4bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bff8cd4de50788c7325bee38f830e17abba9acf2e2cd83b77a6d37d6c2d1121 = $this->env->getExtension("native_profiler");
        $__internal_8bff8cd4de50788c7325bee38f830e17abba9acf2e2cd83b77a6d37d6c2d1121->enter($__internal_8bff8cd4de50788c7325bee38f830e17abba9acf2e2cd83b77a6d37d6c2d1121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8bff8cd4de50788c7325bee38f830e17abba9acf2e2cd83b77a6d37d6c2d1121->leave($__internal_8bff8cd4de50788c7325bee38f830e17abba9acf2e2cd83b77a6d37d6c2d1121_prof);

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
