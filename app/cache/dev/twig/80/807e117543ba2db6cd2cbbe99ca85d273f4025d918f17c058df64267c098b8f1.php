<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0adaf851451302a02416a0d80ec76c4e6d5f95d42396fbe7464c116f4967cc03 extends Twig_Template
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
        $__internal_ab8668383694dcc3ce8c55a6f11ce0e2afc4650d15090593f2edb37747fa9151 = $this->env->getExtension("native_profiler");
        $__internal_ab8668383694dcc3ce8c55a6f11ce0e2afc4650d15090593f2edb37747fa9151->enter($__internal_ab8668383694dcc3ce8c55a6f11ce0e2afc4650d15090593f2edb37747fa9151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ab8668383694dcc3ce8c55a6f11ce0e2afc4650d15090593f2edb37747fa9151->leave($__internal_ab8668383694dcc3ce8c55a6f11ce0e2afc4650d15090593f2edb37747fa9151_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
