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
        $__internal_63cd733b3dade1a6bbaf01c2d8a67ff97932b9af388b7a65dc55ae00a0eb0f4b = $this->env->getExtension("native_profiler");
        $__internal_63cd733b3dade1a6bbaf01c2d8a67ff97932b9af388b7a65dc55ae00a0eb0f4b->enter($__internal_63cd733b3dade1a6bbaf01c2d8a67ff97932b9af388b7a65dc55ae00a0eb0f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_63cd733b3dade1a6bbaf01c2d8a67ff97932b9af388b7a65dc55ae00a0eb0f4b->leave($__internal_63cd733b3dade1a6bbaf01c2d8a67ff97932b9af388b7a65dc55ae00a0eb0f4b_prof);

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
