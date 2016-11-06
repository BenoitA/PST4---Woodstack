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
        $__internal_e82838951e6bee3096e73d0e278ae248846a194bd139886cba4ee5b29c3aa552 = $this->env->getExtension("native_profiler");
        $__internal_e82838951e6bee3096e73d0e278ae248846a194bd139886cba4ee5b29c3aa552->enter($__internal_e82838951e6bee3096e73d0e278ae248846a194bd139886cba4ee5b29c3aa552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e82838951e6bee3096e73d0e278ae248846a194bd139886cba4ee5b29c3aa552->leave($__internal_e82838951e6bee3096e73d0e278ae248846a194bd139886cba4ee5b29c3aa552_prof);

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
