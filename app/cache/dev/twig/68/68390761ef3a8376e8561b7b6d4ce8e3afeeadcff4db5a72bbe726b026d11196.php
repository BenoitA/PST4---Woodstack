<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a0ce2a80915925c09c794aacad740e805dacd091f5ebd5a9acbf5e48e880dab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b35b6482d98c51c4f9a8f48828f22c23e8efe3152b0531f25d5d0a7ed7dc9b41 = $this->env->getExtension("native_profiler");
        $__internal_b35b6482d98c51c4f9a8f48828f22c23e8efe3152b0531f25d5d0a7ed7dc9b41->enter($__internal_b35b6482d98c51c4f9a8f48828f22c23e8efe3152b0531f25d5d0a7ed7dc9b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b35b6482d98c51c4f9a8f48828f22c23e8efe3152b0531f25d5d0a7ed7dc9b41->leave($__internal_b35b6482d98c51c4f9a8f48828f22c23e8efe3152b0531f25d5d0a7ed7dc9b41_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_436dc2a5dc89d912e3a904f1c27d6e050fc0ff37ef2136dc1e578dac96bb5875 = $this->env->getExtension("native_profiler");
        $__internal_436dc2a5dc89d912e3a904f1c27d6e050fc0ff37ef2136dc1e578dac96bb5875->enter($__internal_436dc2a5dc89d912e3a904f1c27d6e050fc0ff37ef2136dc1e578dac96bb5875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_436dc2a5dc89d912e3a904f1c27d6e050fc0ff37ef2136dc1e578dac96bb5875->leave($__internal_436dc2a5dc89d912e3a904f1c27d6e050fc0ff37ef2136dc1e578dac96bb5875_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc10df746ac1bde24606b0c5f44732f1fc37482853d1a0c4cd2bbb890ee2e7bb = $this->env->getExtension("native_profiler");
        $__internal_fc10df746ac1bde24606b0c5f44732f1fc37482853d1a0c4cd2bbb890ee2e7bb->enter($__internal_fc10df746ac1bde24606b0c5f44732f1fc37482853d1a0c4cd2bbb890ee2e7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fc10df746ac1bde24606b0c5f44732f1fc37482853d1a0c4cd2bbb890ee2e7bb->leave($__internal_fc10df746ac1bde24606b0c5f44732f1fc37482853d1a0c4cd2bbb890ee2e7bb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
