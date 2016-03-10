<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3ecb643a9a3fd4f64bbbc515c11fd04996b6f68510cd550b083bdfc7e9d96d9e extends Twig_Template
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
        $__internal_a304c3c0ddf137c1ff1a4120049bf6aebad8ce7c099af6c89cb64baa85d23197 = $this->env->getExtension("native_profiler");
        $__internal_a304c3c0ddf137c1ff1a4120049bf6aebad8ce7c099af6c89cb64baa85d23197->enter($__internal_a304c3c0ddf137c1ff1a4120049bf6aebad8ce7c099af6c89cb64baa85d23197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a304c3c0ddf137c1ff1a4120049bf6aebad8ce7c099af6c89cb64baa85d23197->leave($__internal_a304c3c0ddf137c1ff1a4120049bf6aebad8ce7c099af6c89cb64baa85d23197_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
