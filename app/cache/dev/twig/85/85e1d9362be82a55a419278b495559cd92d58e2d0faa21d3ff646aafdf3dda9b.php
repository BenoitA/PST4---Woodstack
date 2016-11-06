<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_7fc85543de7d16ecfe77ef817674656f0b25f36fc1be3dc794dee6e0fc8c07e1 extends Twig_Template
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
        $__internal_934faf247db63d50a9c2d9f60df84d539a517f5c921c66121d32fffc680cfa5b = $this->env->getExtension("native_profiler");
        $__internal_934faf247db63d50a9c2d9f60df84d539a517f5c921c66121d32fffc680cfa5b->enter($__internal_934faf247db63d50a9c2d9f60df84d539a517f5c921c66121d32fffc680cfa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_934faf247db63d50a9c2d9f60df84d539a517f5c921c66121d32fffc680cfa5b->leave($__internal_934faf247db63d50a9c2d9f60df84d539a517f5c921c66121d32fffc680cfa5b_prof);

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
