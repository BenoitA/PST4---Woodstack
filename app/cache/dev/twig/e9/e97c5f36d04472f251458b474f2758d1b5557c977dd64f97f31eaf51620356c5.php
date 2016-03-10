<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a4178be152c70e679cc5f7ed59316cba09797fba768db323094b5ea21f223a02 extends Twig_Template
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
        $__internal_4a5921636fb175528ab426e23d500cbb79ad3685c3d07af23fdd084c30c78355 = $this->env->getExtension("native_profiler");
        $__internal_4a5921636fb175528ab426e23d500cbb79ad3685c3d07af23fdd084c30c78355->enter($__internal_4a5921636fb175528ab426e23d500cbb79ad3685c3d07af23fdd084c30c78355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4a5921636fb175528ab426e23d500cbb79ad3685c3d07af23fdd084c30c78355->leave($__internal_4a5921636fb175528ab426e23d500cbb79ad3685c3d07af23fdd084c30c78355_prof);

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
