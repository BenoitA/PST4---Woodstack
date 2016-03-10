<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3a0c0d6490c6e6cff5fbd1b641edc73769059426bea2a3311e7e754d15ab242d extends Twig_Template
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
        $__internal_e7ec0f4d08b7363acbe0cf13c0bc4d6da6c8d0866fe1df355b0ea83a270c3294 = $this->env->getExtension("native_profiler");
        $__internal_e7ec0f4d08b7363acbe0cf13c0bc4d6da6c8d0866fe1df355b0ea83a270c3294->enter($__internal_e7ec0f4d08b7363acbe0cf13c0bc4d6da6c8d0866fe1df355b0ea83a270c3294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_e7ec0f4d08b7363acbe0cf13c0bc4d6da6c8d0866fe1df355b0ea83a270c3294->leave($__internal_e7ec0f4d08b7363acbe0cf13c0bc4d6da6c8d0866fe1df355b0ea83a270c3294_prof);

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
