<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_e3440f80090f4dfc5384d638f2974923f578aeaa458ea9aad2cbb2c3f2e011b8 extends Twig_Template
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
        $__internal_0f9149bcf7b8855a2ec4fd75233bcb55c0915bdc68ad6fac4092116f0c8c636f = $this->env->getExtension("native_profiler");
        $__internal_0f9149bcf7b8855a2ec4fd75233bcb55c0915bdc68ad6fac4092116f0c8c636f->enter($__internal_0f9149bcf7b8855a2ec4fd75233bcb55c0915bdc68ad6fac4092116f0c8c636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_0f9149bcf7b8855a2ec4fd75233bcb55c0915bdc68ad6fac4092116f0c8c636f->leave($__internal_0f9149bcf7b8855a2ec4fd75233bcb55c0915bdc68ad6fac4092116f0c8c636f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */