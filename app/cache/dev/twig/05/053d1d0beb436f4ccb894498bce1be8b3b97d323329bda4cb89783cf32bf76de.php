<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dbb95a5e41b23386825f77a9028aec25409c1bc0b091a67d8df7a4d28cfef9d0 extends Twig_Template
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
        $__internal_f12162b513dd8857090a033531ff60eb6eab3a59af118a635cbd73ece5bee724 = $this->env->getExtension("native_profiler");
        $__internal_f12162b513dd8857090a033531ff60eb6eab3a59af118a635cbd73ece5bee724->enter($__internal_f12162b513dd8857090a033531ff60eb6eab3a59af118a635cbd73ece5bee724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f12162b513dd8857090a033531ff60eb6eab3a59af118a635cbd73ece5bee724->leave($__internal_f12162b513dd8857090a033531ff60eb6eab3a59af118a635cbd73ece5bee724_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
