<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6dc8b3a252a755595529f1bd2327b86621fd3bcc66258b33b6be47ab9622a324 extends Twig_Template
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
        $__internal_f93a088e51eca893f7d6a130d4f4a7df5ffb3275f5f8b5a672d7a0118c675bbb = $this->env->getExtension("native_profiler");
        $__internal_f93a088e51eca893f7d6a130d4f4a7df5ffb3275f5f8b5a672d7a0118c675bbb->enter($__internal_f93a088e51eca893f7d6a130d4f4a7df5ffb3275f5f8b5a672d7a0118c675bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f93a088e51eca893f7d6a130d4f4a7df5ffb3275f5f8b5a672d7a0118c675bbb->leave($__internal_f93a088e51eca893f7d6a130d4f4a7df5ffb3275f5f8b5a672d7a0118c675bbb_prof);

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
