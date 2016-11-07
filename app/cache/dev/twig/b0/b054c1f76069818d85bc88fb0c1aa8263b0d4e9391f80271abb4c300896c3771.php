<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3832d5aa8ccb9b0d766b30fb8c464ec64b920b7f4a68a8268865e82e9e6f53ee extends Twig_Template
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
        $__internal_5f40aea14f2b5f57d2fe5bbaa20ed9b70594c25bca534c1287973842fed3de74 = $this->env->getExtension("native_profiler");
        $__internal_5f40aea14f2b5f57d2fe5bbaa20ed9b70594c25bca534c1287973842fed3de74->enter($__internal_5f40aea14f2b5f57d2fe5bbaa20ed9b70594c25bca534c1287973842fed3de74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_5f40aea14f2b5f57d2fe5bbaa20ed9b70594c25bca534c1287973842fed3de74->leave($__internal_5f40aea14f2b5f57d2fe5bbaa20ed9b70594c25bca534c1287973842fed3de74_prof);

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
