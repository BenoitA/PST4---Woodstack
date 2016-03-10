<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_eca6bdb4bd6f8ce282363582959d159a1c570a377495613df6cbc97213c4cc2c extends Twig_Template
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
        $__internal_78e3187e134eea7d4dee9b6e3ec707fd91c7835158be4b797f15bfdefeb9256d = $this->env->getExtension("native_profiler");
        $__internal_78e3187e134eea7d4dee9b6e3ec707fd91c7835158be4b797f15bfdefeb9256d->enter($__internal_78e3187e134eea7d4dee9b6e3ec707fd91c7835158be4b797f15bfdefeb9256d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_78e3187e134eea7d4dee9b6e3ec707fd91c7835158be4b797f15bfdefeb9256d->leave($__internal_78e3187e134eea7d4dee9b6e3ec707fd91c7835158be4b797f15bfdefeb9256d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
