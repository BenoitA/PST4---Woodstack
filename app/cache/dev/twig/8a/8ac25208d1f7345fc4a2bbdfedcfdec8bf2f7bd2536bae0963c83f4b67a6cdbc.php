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
        $__internal_41cd06c44821da33ec61705e46f38de8707010fb276ac5836bff639fda0a7413 = $this->env->getExtension("native_profiler");
        $__internal_41cd06c44821da33ec61705e46f38de8707010fb276ac5836bff639fda0a7413->enter($__internal_41cd06c44821da33ec61705e46f38de8707010fb276ac5836bff639fda0a7413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_41cd06c44821da33ec61705e46f38de8707010fb276ac5836bff639fda0a7413->leave($__internal_41cd06c44821da33ec61705e46f38de8707010fb276ac5836bff639fda0a7413_prof);

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
