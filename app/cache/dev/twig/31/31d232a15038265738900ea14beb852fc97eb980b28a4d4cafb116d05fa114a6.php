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
        $__internal_a3917fd94362e0e0249f2d6b3c756b740f09e347338d5fcf74ba74b6e2272ded = $this->env->getExtension("native_profiler");
        $__internal_a3917fd94362e0e0249f2d6b3c756b740f09e347338d5fcf74ba74b6e2272ded->enter($__internal_a3917fd94362e0e0249f2d6b3c756b740f09e347338d5fcf74ba74b6e2272ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_a3917fd94362e0e0249f2d6b3c756b740f09e347338d5fcf74ba74b6e2272ded->leave($__internal_a3917fd94362e0e0249f2d6b3c756b740f09e347338d5fcf74ba74b6e2272ded_prof);

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
