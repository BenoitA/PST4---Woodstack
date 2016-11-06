<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_05bd4b0175883f07ba647d45d4da5668b12ab9647f87bc3493347657ea050405 extends Twig_Template
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
        $__internal_3f6e8f3af4df03c195288f21fc07cdfe15c92acfffdaa7f44177f9e1e73e667c = $this->env->getExtension("native_profiler");
        $__internal_3f6e8f3af4df03c195288f21fc07cdfe15c92acfffdaa7f44177f9e1e73e667c->enter($__internal_3f6e8f3af4df03c195288f21fc07cdfe15c92acfffdaa7f44177f9e1e73e667c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3f6e8f3af4df03c195288f21fc07cdfe15c92acfffdaa7f44177f9e1e73e667c->leave($__internal_3f6e8f3af4df03c195288f21fc07cdfe15c92acfffdaa7f44177f9e1e73e667c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
