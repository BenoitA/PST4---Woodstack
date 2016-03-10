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
        $__internal_dc0881d9a6baccf02d6a1030531f8856c8fc48803cbb18eda7cd9bf99aa4ab33 = $this->env->getExtension("native_profiler");
        $__internal_dc0881d9a6baccf02d6a1030531f8856c8fc48803cbb18eda7cd9bf99aa4ab33->enter($__internal_dc0881d9a6baccf02d6a1030531f8856c8fc48803cbb18eda7cd9bf99aa4ab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0881d9a6baccf02d6a1030531f8856c8fc48803cbb18eda7cd9bf99aa4ab33->leave($__internal_dc0881d9a6baccf02d6a1030531f8856c8fc48803cbb18eda7cd9bf99aa4ab33_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f48beeaffd8988b7bbcd80b174117c3aa14ad7e07210a7d41ca773d4609b3b2f = $this->env->getExtension("native_profiler");
        $__internal_f48beeaffd8988b7bbcd80b174117c3aa14ad7e07210a7d41ca773d4609b3b2f->enter($__internal_f48beeaffd8988b7bbcd80b174117c3aa14ad7e07210a7d41ca773d4609b3b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f48beeaffd8988b7bbcd80b174117c3aa14ad7e07210a7d41ca773d4609b3b2f->leave($__internal_f48beeaffd8988b7bbcd80b174117c3aa14ad7e07210a7d41ca773d4609b3b2f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f752339cc045fba9ef5e5b31d287dac1c8f9b1d9010f0a02a12f531fa4b8e520 = $this->env->getExtension("native_profiler");
        $__internal_f752339cc045fba9ef5e5b31d287dac1c8f9b1d9010f0a02a12f531fa4b8e520->enter($__internal_f752339cc045fba9ef5e5b31d287dac1c8f9b1d9010f0a02a12f531fa4b8e520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f752339cc045fba9ef5e5b31d287dac1c8f9b1d9010f0a02a12f531fa4b8e520->leave($__internal_f752339cc045fba9ef5e5b31d287dac1c8f9b1d9010f0a02a12f531fa4b8e520_prof);

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
