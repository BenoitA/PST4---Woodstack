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
        $__internal_5b5f8ee6d02aa0f19e29c5533b4a241bb227d4cf43274d77baab88758ec945eb = $this->env->getExtension("native_profiler");
        $__internal_5b5f8ee6d02aa0f19e29c5533b4a241bb227d4cf43274d77baab88758ec945eb->enter($__internal_5b5f8ee6d02aa0f19e29c5533b4a241bb227d4cf43274d77baab88758ec945eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_5b5f8ee6d02aa0f19e29c5533b4a241bb227d4cf43274d77baab88758ec945eb->leave($__internal_5b5f8ee6d02aa0f19e29c5533b4a241bb227d4cf43274d77baab88758ec945eb_prof);

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
