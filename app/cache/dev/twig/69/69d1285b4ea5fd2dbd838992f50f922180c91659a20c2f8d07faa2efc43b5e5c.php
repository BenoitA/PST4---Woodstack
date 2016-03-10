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
        $__internal_4c390deced5ce21d49d6fc522eb5017bac9d96f7660a85e39c720c09107ca665 = $this->env->getExtension("native_profiler");
        $__internal_4c390deced5ce21d49d6fc522eb5017bac9d96f7660a85e39c720c09107ca665->enter($__internal_4c390deced5ce21d49d6fc522eb5017bac9d96f7660a85e39c720c09107ca665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_4c390deced5ce21d49d6fc522eb5017bac9d96f7660a85e39c720c09107ca665->leave($__internal_4c390deced5ce21d49d6fc522eb5017bac9d96f7660a85e39c720c09107ca665_prof);

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
