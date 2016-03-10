<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_61bd7c47c6586d6cfa099bfb8f1acee22daba23360829378a1d5bd89ed022ed4 extends Twig_Template
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
        $__internal_0b0371e8fb423c8f1f4572403f25426c41ca4f0fcd5c2f5ddf8a1e74308181ff = $this->env->getExtension("native_profiler");
        $__internal_0b0371e8fb423c8f1f4572403f25426c41ca4f0fcd5c2f5ddf8a1e74308181ff->enter($__internal_0b0371e8fb423c8f1f4572403f25426c41ca4f0fcd5c2f5ddf8a1e74308181ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0b0371e8fb423c8f1f4572403f25426c41ca4f0fcd5c2f5ddf8a1e74308181ff->leave($__internal_0b0371e8fb423c8f1f4572403f25426c41ca4f0fcd5c2f5ddf8a1e74308181ff_prof);

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
