<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_38b84d48a3045512abfda5e7fd8706d4a803f9752486f91c0ae3c809f093af7b extends Twig_Template
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
        $__internal_ed9463b809d752e3a9e5019b8db5ba3282605c7338682d93f96ce3cd48e12a8f = $this->env->getExtension("native_profiler");
        $__internal_ed9463b809d752e3a9e5019b8db5ba3282605c7338682d93f96ce3cd48e12a8f->enter($__internal_ed9463b809d752e3a9e5019b8db5ba3282605c7338682d93f96ce3cd48e12a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ed9463b809d752e3a9e5019b8db5ba3282605c7338682d93f96ce3cd48e12a8f->leave($__internal_ed9463b809d752e3a9e5019b8db5ba3282605c7338682d93f96ce3cd48e12a8f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */