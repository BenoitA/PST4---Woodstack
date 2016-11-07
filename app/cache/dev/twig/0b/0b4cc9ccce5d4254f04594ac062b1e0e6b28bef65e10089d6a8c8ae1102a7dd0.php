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
        $__internal_2f8d94e079b1cc9b4ab5b39bac04a7310637b85ea0ef1eec5ceb981e7b1fa312 = $this->env->getExtension("native_profiler");
        $__internal_2f8d94e079b1cc9b4ab5b39bac04a7310637b85ea0ef1eec5ceb981e7b1fa312->enter($__internal_2f8d94e079b1cc9b4ab5b39bac04a7310637b85ea0ef1eec5ceb981e7b1fa312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f8d94e079b1cc9b4ab5b39bac04a7310637b85ea0ef1eec5ceb981e7b1fa312->leave($__internal_2f8d94e079b1cc9b4ab5b39bac04a7310637b85ea0ef1eec5ceb981e7b1fa312_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10917a9ce784d2dfecfaf74ee42e2ccfc92f0b96fa5499989a610873ccf669d3 = $this->env->getExtension("native_profiler");
        $__internal_10917a9ce784d2dfecfaf74ee42e2ccfc92f0b96fa5499989a610873ccf669d3->enter($__internal_10917a9ce784d2dfecfaf74ee42e2ccfc92f0b96fa5499989a610873ccf669d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_10917a9ce784d2dfecfaf74ee42e2ccfc92f0b96fa5499989a610873ccf669d3->leave($__internal_10917a9ce784d2dfecfaf74ee42e2ccfc92f0b96fa5499989a610873ccf669d3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f64a419dec489b2ef2db95ff5d2af73ede11ae1028820591f263c005c29f3ac = $this->env->getExtension("native_profiler");
        $__internal_9f64a419dec489b2ef2db95ff5d2af73ede11ae1028820591f263c005c29f3ac->enter($__internal_9f64a419dec489b2ef2db95ff5d2af73ede11ae1028820591f263c005c29f3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9f64a419dec489b2ef2db95ff5d2af73ede11ae1028820591f263c005c29f3ac->leave($__internal_9f64a419dec489b2ef2db95ff5d2af73ede11ae1028820591f263c005c29f3ac_prof);

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
