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
        $__internal_7bfdaafd1094cdc0dbfcd4ba3f40ab238f9329d864267a5429f9e47189e66d85 = $this->env->getExtension("native_profiler");
        $__internal_7bfdaafd1094cdc0dbfcd4ba3f40ab238f9329d864267a5429f9e47189e66d85->enter($__internal_7bfdaafd1094cdc0dbfcd4ba3f40ab238f9329d864267a5429f9e47189e66d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7bfdaafd1094cdc0dbfcd4ba3f40ab238f9329d864267a5429f9e47189e66d85->leave($__internal_7bfdaafd1094cdc0dbfcd4ba3f40ab238f9329d864267a5429f9e47189e66d85_prof);

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
