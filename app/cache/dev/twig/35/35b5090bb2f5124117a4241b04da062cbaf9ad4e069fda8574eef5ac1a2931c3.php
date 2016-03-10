<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_0e0fdfcf275ea51580d07741db4a174777670e1809f8d8cdd864817c7ca25156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c86486481c45590432e7a52ed25adf0f2556f0b74244968756d7e79ec4f0618 = $this->env->getExtension("native_profiler");
        $__internal_8c86486481c45590432e7a52ed25adf0f2556f0b74244968756d7e79ec4f0618->enter($__internal_8c86486481c45590432e7a52ed25adf0f2556f0b74244968756d7e79ec4f0618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c86486481c45590432e7a52ed25adf0f2556f0b74244968756d7e79ec4f0618->leave($__internal_8c86486481c45590432e7a52ed25adf0f2556f0b74244968756d7e79ec4f0618_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1adfda7e7df9c6e59a850ceb33dbc42a117660740ddfc2ef4b902061709b24d = $this->env->getExtension("native_profiler");
        $__internal_d1adfda7e7df9c6e59a850ceb33dbc42a117660740ddfc2ef4b902061709b24d->enter($__internal_d1adfda7e7df9c6e59a850ceb33dbc42a117660740ddfc2ef4b902061709b24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d1adfda7e7df9c6e59a850ceb33dbc42a117660740ddfc2ef4b902061709b24d->leave($__internal_d1adfda7e7df9c6e59a850ceb33dbc42a117660740ddfc2ef4b902061709b24d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d16e075a525d8e15d62e54cc648ee2ad87e47e661763227ac8a107f659bf81ae = $this->env->getExtension("native_profiler");
        $__internal_d16e075a525d8e15d62e54cc648ee2ad87e47e661763227ac8a107f659bf81ae->enter($__internal_d16e075a525d8e15d62e54cc648ee2ad87e47e661763227ac8a107f659bf81ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d16e075a525d8e15d62e54cc648ee2ad87e47e661763227ac8a107f659bf81ae->leave($__internal_d16e075a525d8e15d62e54cc648ee2ad87e47e661763227ac8a107f659bf81ae_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e264c8f65a57f1c561cc688ca040b5a69ff14d7b1bcf2c8ee926f86adb46e8d = $this->env->getExtension("native_profiler");
        $__internal_3e264c8f65a57f1c561cc688ca040b5a69ff14d7b1bcf2c8ee926f86adb46e8d->enter($__internal_3e264c8f65a57f1c561cc688ca040b5a69ff14d7b1bcf2c8ee926f86adb46e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_3e264c8f65a57f1c561cc688ca040b5a69ff14d7b1bcf2c8ee926f86adb46e8d->leave($__internal_3e264c8f65a57f1c561cc688ca040b5a69ff14d7b1bcf2c8ee926f86adb46e8d_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8f95440d51c0b6c254ca1d7bd11742d4b6c8958f85851d1bebccdcc20dc1b1b6 = $this->env->getExtension("native_profiler");
        $__internal_8f95440d51c0b6c254ca1d7bd11742d4b6c8958f85851d1bebccdcc20dc1b1b6->enter($__internal_8f95440d51c0b6c254ca1d7bd11742d4b6c8958f85851d1bebccdcc20dc1b1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8f95440d51c0b6c254ca1d7bd11742d4b6c8958f85851d1bebccdcc20dc1b1b6->leave($__internal_8f95440d51c0b6c254ca1d7bd11742d4b6c8958f85851d1bebccdcc20dc1b1b6_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
