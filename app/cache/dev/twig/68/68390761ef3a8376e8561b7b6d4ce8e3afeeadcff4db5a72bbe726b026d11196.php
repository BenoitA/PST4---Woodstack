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
        $__internal_668ff3f825a3a07d3486659a1c62ba2eb8be61943b83349cf60f06a525fc823d = $this->env->getExtension("native_profiler");
        $__internal_668ff3f825a3a07d3486659a1c62ba2eb8be61943b83349cf60f06a525fc823d->enter($__internal_668ff3f825a3a07d3486659a1c62ba2eb8be61943b83349cf60f06a525fc823d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_668ff3f825a3a07d3486659a1c62ba2eb8be61943b83349cf60f06a525fc823d->leave($__internal_668ff3f825a3a07d3486659a1c62ba2eb8be61943b83349cf60f06a525fc823d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b46ba0abf94e23cef09a42c3230e7de7c970c562b7d05c152e0b3ebfcbf4969 = $this->env->getExtension("native_profiler");
        $__internal_7b46ba0abf94e23cef09a42c3230e7de7c970c562b7d05c152e0b3ebfcbf4969->enter($__internal_7b46ba0abf94e23cef09a42c3230e7de7c970c562b7d05c152e0b3ebfcbf4969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7b46ba0abf94e23cef09a42c3230e7de7c970c562b7d05c152e0b3ebfcbf4969->leave($__internal_7b46ba0abf94e23cef09a42c3230e7de7c970c562b7d05c152e0b3ebfcbf4969_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c77c92994d04655db18758262f76af8a518af7041e9381b9c5da4406bade625 = $this->env->getExtension("native_profiler");
        $__internal_3c77c92994d04655db18758262f76af8a518af7041e9381b9c5da4406bade625->enter($__internal_3c77c92994d04655db18758262f76af8a518af7041e9381b9c5da4406bade625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c77c92994d04655db18758262f76af8a518af7041e9381b9c5da4406bade625->leave($__internal_3c77c92994d04655db18758262f76af8a518af7041e9381b9c5da4406bade625_prof);

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
