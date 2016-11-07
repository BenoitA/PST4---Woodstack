<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_61d6229dc9065835c88a2fa43a72f180657b413ba0ca410d5d2bb93e76797118 extends Twig_Template
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
        $__internal_503ac27023c451927490d5220edeed50b4a0d5834334ac73c5f889b90eaa78f1 = $this->env->getExtension("native_profiler");
        $__internal_503ac27023c451927490d5220edeed50b4a0d5834334ac73c5f889b90eaa78f1->enter($__internal_503ac27023c451927490d5220edeed50b4a0d5834334ac73c5f889b90eaa78f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_503ac27023c451927490d5220edeed50b4a0d5834334ac73c5f889b90eaa78f1->leave($__internal_503ac27023c451927490d5220edeed50b4a0d5834334ac73c5f889b90eaa78f1_prof);

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
