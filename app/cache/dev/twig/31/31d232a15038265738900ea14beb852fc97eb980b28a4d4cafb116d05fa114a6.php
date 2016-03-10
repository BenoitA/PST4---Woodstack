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
        $__internal_1c2136a5e4c1e35d921c613275749c41e5ce5ac9a432ba11ef3a46251ead306f = $this->env->getExtension("native_profiler");
        $__internal_1c2136a5e4c1e35d921c613275749c41e5ce5ac9a432ba11ef3a46251ead306f->enter($__internal_1c2136a5e4c1e35d921c613275749c41e5ce5ac9a432ba11ef3a46251ead306f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_1c2136a5e4c1e35d921c613275749c41e5ce5ac9a432ba11ef3a46251ead306f->leave($__internal_1c2136a5e4c1e35d921c613275749c41e5ce5ac9a432ba11ef3a46251ead306f_prof);

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
