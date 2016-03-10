<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_be9655078eb7eee6ac9ca4a37ed2a227e3343a78ea7762ed758d1c0bd73e7144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb82607ced63d96d88d4ee8cb093239bd04b2398d6c6d8987282ed4f48904f81 = $this->env->getExtension("native_profiler");
        $__internal_fb82607ced63d96d88d4ee8cb093239bd04b2398d6c6d8987282ed4f48904f81->enter($__internal_fb82607ced63d96d88d4ee8cb093239bd04b2398d6c6d8987282ed4f48904f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fb82607ced63d96d88d4ee8cb093239bd04b2398d6c6d8987282ed4f48904f81->leave($__internal_fb82607ced63d96d88d4ee8cb093239bd04b2398d6c6d8987282ed4f48904f81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
