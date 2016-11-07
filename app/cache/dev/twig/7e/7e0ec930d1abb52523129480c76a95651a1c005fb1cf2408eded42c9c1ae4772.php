<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d685466d1bc7728de1c5e2eee39493d2364dab96e69c292207d8bef4ce2fd925 extends Twig_Template
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
        $__internal_0b2d3b61871f33f5384c288ed0f318a34efa2bebb5c361286537e2c2a8ee3dda = $this->env->getExtension("native_profiler");
        $__internal_0b2d3b61871f33f5384c288ed0f318a34efa2bebb5c361286537e2c2a8ee3dda->enter($__internal_0b2d3b61871f33f5384c288ed0f318a34efa2bebb5c361286537e2c2a8ee3dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0b2d3b61871f33f5384c288ed0f318a34efa2bebb5c361286537e2c2a8ee3dda->leave($__internal_0b2d3b61871f33f5384c288ed0f318a34efa2bebb5c361286537e2c2a8ee3dda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
