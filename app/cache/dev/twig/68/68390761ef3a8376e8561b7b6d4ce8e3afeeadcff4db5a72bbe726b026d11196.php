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
        $__internal_71c45c7cb3ea97b4a3365a6e8cda233c569d3f8d259a7d7a2e6e588f5e60ccd0 = $this->env->getExtension("native_profiler");
        $__internal_71c45c7cb3ea97b4a3365a6e8cda233c569d3f8d259a7d7a2e6e588f5e60ccd0->enter($__internal_71c45c7cb3ea97b4a3365a6e8cda233c569d3f8d259a7d7a2e6e588f5e60ccd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71c45c7cb3ea97b4a3365a6e8cda233c569d3f8d259a7d7a2e6e588f5e60ccd0->leave($__internal_71c45c7cb3ea97b4a3365a6e8cda233c569d3f8d259a7d7a2e6e588f5e60ccd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a510444d52af4a28894ffce8306b05d677ee806faae14bec6f0c0fed1eac5d3b = $this->env->getExtension("native_profiler");
        $__internal_a510444d52af4a28894ffce8306b05d677ee806faae14bec6f0c0fed1eac5d3b->enter($__internal_a510444d52af4a28894ffce8306b05d677ee806faae14bec6f0c0fed1eac5d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a510444d52af4a28894ffce8306b05d677ee806faae14bec6f0c0fed1eac5d3b->leave($__internal_a510444d52af4a28894ffce8306b05d677ee806faae14bec6f0c0fed1eac5d3b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b1e2024aeb4851fe8531722e0ab8297f56654964b236c53a9af3fe83e907bbb = $this->env->getExtension("native_profiler");
        $__internal_3b1e2024aeb4851fe8531722e0ab8297f56654964b236c53a9af3fe83e907bbb->enter($__internal_3b1e2024aeb4851fe8531722e0ab8297f56654964b236c53a9af3fe83e907bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b1e2024aeb4851fe8531722e0ab8297f56654964b236c53a9af3fe83e907bbb->leave($__internal_3b1e2024aeb4851fe8531722e0ab8297f56654964b236c53a9af3fe83e907bbb_prof);

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
