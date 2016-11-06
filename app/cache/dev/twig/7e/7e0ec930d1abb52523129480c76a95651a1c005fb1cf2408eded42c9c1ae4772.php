<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_d685466d1bc7728de1c5e2eee39493d2364dab96e69c292207d8bef4ce2fd925 extends Twig_Template
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
        $__internal_3c9bb670b838fe7769675ede4ca7bdd090bd156f2e7c721c5846e0578b3bc75c = $this->env->getExtension("native_profiler");
        $__internal_3c9bb670b838fe7769675ede4ca7bdd090bd156f2e7c721c5846e0578b3bc75c->enter($__internal_3c9bb670b838fe7769675ede4ca7bdd090bd156f2e7c721c5846e0578b3bc75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3c9bb670b838fe7769675ede4ca7bdd090bd156f2e7c721c5846e0578b3bc75c->leave($__internal_3c9bb670b838fe7769675ede4ca7bdd090bd156f2e7c721c5846e0578b3bc75c_prof);

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
