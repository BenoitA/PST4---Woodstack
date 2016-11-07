<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_115e9735f9416c5a6c5edb12e0915c0c95bd06805aba0e1910030e94ddad3649 extends Twig_Template
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
        $__internal_4ae396101d70113d6e7e4f9bc9f765cc55f810a9ccf6ae00a6be85c1b1d0968b = $this->env->getExtension("native_profiler");
        $__internal_4ae396101d70113d6e7e4f9bc9f765cc55f810a9ccf6ae00a6be85c1b1d0968b->enter($__internal_4ae396101d70113d6e7e4f9bc9f765cc55f810a9ccf6ae00a6be85c1b1d0968b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4ae396101d70113d6e7e4f9bc9f765cc55f810a9ccf6ae00a6be85c1b1d0968b->leave($__internal_4ae396101d70113d6e7e4f9bc9f765cc55f810a9ccf6ae00a6be85c1b1d0968b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
