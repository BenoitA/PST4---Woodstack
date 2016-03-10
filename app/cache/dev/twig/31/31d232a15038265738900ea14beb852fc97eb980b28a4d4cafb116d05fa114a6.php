<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3ecb643a9a3fd4f64bbbc515c11fd04996b6f68510cd550b083bdfc7e9d96d9e extends Twig_Template
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
        $__internal_91a0cb908bf6f559e45df27661ee22f76668f93e1454d4b19976b6125ee61b8f = $this->env->getExtension("native_profiler");
        $__internal_91a0cb908bf6f559e45df27661ee22f76668f93e1454d4b19976b6125ee61b8f->enter($__internal_91a0cb908bf6f559e45df27661ee22f76668f93e1454d4b19976b6125ee61b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_91a0cb908bf6f559e45df27661ee22f76668f93e1454d4b19976b6125ee61b8f->leave($__internal_91a0cb908bf6f559e45df27661ee22f76668f93e1454d4b19976b6125ee61b8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
