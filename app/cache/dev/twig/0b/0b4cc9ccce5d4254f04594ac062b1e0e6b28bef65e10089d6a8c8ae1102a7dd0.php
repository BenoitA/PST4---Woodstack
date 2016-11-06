<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_bc0f30c4d1c273804d2daf503bde8afcae85b7ea2c3da0c9a9681af562210588 extends Twig_Template
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
        $__internal_982c305bba63f39888953501b573913bb9ab92e4dd1479fc4ad1bae4ca65ad71 = $this->env->getExtension("native_profiler");
        $__internal_982c305bba63f39888953501b573913bb9ab92e4dd1479fc4ad1bae4ca65ad71->enter($__internal_982c305bba63f39888953501b573913bb9ab92e4dd1479fc4ad1bae4ca65ad71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_982c305bba63f39888953501b573913bb9ab92e4dd1479fc4ad1bae4ca65ad71->leave($__internal_982c305bba63f39888953501b573913bb9ab92e4dd1479fc4ad1bae4ca65ad71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c97f927d19e4d726c690ad997510a0c8b55c9a400544ac6cd7da0d76a7cc3c1 = $this->env->getExtension("native_profiler");
        $__internal_0c97f927d19e4d726c690ad997510a0c8b55c9a400544ac6cd7da0d76a7cc3c1->enter($__internal_0c97f927d19e4d726c690ad997510a0c8b55c9a400544ac6cd7da0d76a7cc3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0c97f927d19e4d726c690ad997510a0c8b55c9a400544ac6cd7da0d76a7cc3c1->leave($__internal_0c97f927d19e4d726c690ad997510a0c8b55c9a400544ac6cd7da0d76a7cc3c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c3b46a17bee21e495cd8402e6ea06580e79f19852ea2c91731b7cd696e7ff74 = $this->env->getExtension("native_profiler");
        $__internal_4c3b46a17bee21e495cd8402e6ea06580e79f19852ea2c91731b7cd696e7ff74->enter($__internal_4c3b46a17bee21e495cd8402e6ea06580e79f19852ea2c91731b7cd696e7ff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4c3b46a17bee21e495cd8402e6ea06580e79f19852ea2c91731b7cd696e7ff74->leave($__internal_4c3b46a17bee21e495cd8402e6ea06580e79f19852ea2c91731b7cd696e7ff74_prof);

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
