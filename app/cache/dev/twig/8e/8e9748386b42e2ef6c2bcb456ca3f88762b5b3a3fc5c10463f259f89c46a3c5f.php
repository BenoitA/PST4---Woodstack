<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_6cc5116bad212bf91ab31536a414d90219637f30a04bc97745cc733135268633 extends Twig_Template
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
        $__internal_bd37a7547fe21912259d5977072893efa2691bd7449888d08abd025df9410ace = $this->env->getExtension("native_profiler");
        $__internal_bd37a7547fe21912259d5977072893efa2691bd7449888d08abd025df9410ace->enter($__internal_bd37a7547fe21912259d5977072893efa2691bd7449888d08abd025df9410ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bd37a7547fe21912259d5977072893efa2691bd7449888d08abd025df9410ace->leave($__internal_bd37a7547fe21912259d5977072893efa2691bd7449888d08abd025df9410ace_prof);

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
