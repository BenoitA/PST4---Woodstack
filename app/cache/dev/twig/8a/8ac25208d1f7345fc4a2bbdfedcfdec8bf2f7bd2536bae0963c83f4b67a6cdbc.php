<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_06ed08bb22229233f6cd89bf84d88074200c633587f0337db0af80902cf9e5b8 extends Twig_Template
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
        $__internal_c48ddc6e64cef1d3f92a621ae7dce2e31b8f9fc2b17c1845ccebf022dc723a0e = $this->env->getExtension("native_profiler");
        $__internal_c48ddc6e64cef1d3f92a621ae7dce2e31b8f9fc2b17c1845ccebf022dc723a0e->enter($__internal_c48ddc6e64cef1d3f92a621ae7dce2e31b8f9fc2b17c1845ccebf022dc723a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c48ddc6e64cef1d3f92a621ae7dce2e31b8f9fc2b17c1845ccebf022dc723a0e->leave($__internal_c48ddc6e64cef1d3f92a621ae7dce2e31b8f9fc2b17c1845ccebf022dc723a0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
