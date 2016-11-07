<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_09f3aa3ed66a5cb1533274f8381bf35c75f851a02e390f6ff66f8306e3bccdac extends Twig_Template
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
        $__internal_8d82466a42e4c1a6749ab956e60d6dbd3b996c5a60821536d3bf2c47afaf71b8 = $this->env->getExtension("native_profiler");
        $__internal_8d82466a42e4c1a6749ab956e60d6dbd3b996c5a60821536d3bf2c47afaf71b8->enter($__internal_8d82466a42e4c1a6749ab956e60d6dbd3b996c5a60821536d3bf2c47afaf71b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8d82466a42e4c1a6749ab956e60d6dbd3b996c5a60821536d3bf2c47afaf71b8->leave($__internal_8d82466a42e4c1a6749ab956e60d6dbd3b996c5a60821536d3bf2c47afaf71b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
