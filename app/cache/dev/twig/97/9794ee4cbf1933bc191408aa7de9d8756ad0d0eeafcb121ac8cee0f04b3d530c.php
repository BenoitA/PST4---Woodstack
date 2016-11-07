<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d512b6fc304a5e8491b98a131def74ad4bd9231e103309acc076b978d2111d97 extends Twig_Template
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
        $__internal_2056368a9c756272a53bea458af01e9a60a946c78180a82a5c79aae4c65063e3 = $this->env->getExtension("native_profiler");
        $__internal_2056368a9c756272a53bea458af01e9a60a946c78180a82a5c79aae4c65063e3->enter($__internal_2056368a9c756272a53bea458af01e9a60a946c78180a82a5c79aae4c65063e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2056368a9c756272a53bea458af01e9a60a946c78180a82a5c79aae4c65063e3->leave($__internal_2056368a9c756272a53bea458af01e9a60a946c78180a82a5c79aae4c65063e3_prof);

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
