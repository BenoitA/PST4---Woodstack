<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_dc1c774e12641b163bf9aa27e3c710eb3acba0597f6613eef14ab77829324f0b extends Twig_Template
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
        $__internal_d6460beb7990bb9602d9d105f5e00c998b6588ebdacbeb0eef6468050f7a046c = $this->env->getExtension("native_profiler");
        $__internal_d6460beb7990bb9602d9d105f5e00c998b6588ebdacbeb0eef6468050f7a046c->enter($__internal_d6460beb7990bb9602d9d105f5e00c998b6588ebdacbeb0eef6468050f7a046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d6460beb7990bb9602d9d105f5e00c998b6588ebdacbeb0eef6468050f7a046c->leave($__internal_d6460beb7990bb9602d9d105f5e00c998b6588ebdacbeb0eef6468050f7a046c_prof);

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
