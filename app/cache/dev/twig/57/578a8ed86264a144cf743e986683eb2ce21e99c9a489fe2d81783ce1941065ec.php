<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_b1df4c361cf3455e0f185b31148c665323b1b3ed5094665b9fc010adfaa6cab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_fc92547a7dea60788bef70056507c0e449d23f993ca44661d7a4cd8a1cd1a7af = $this->env->getExtension("native_profiler");
        $__internal_fc92547a7dea60788bef70056507c0e449d23f993ca44661d7a4cd8a1cd1a7af->enter($__internal_fc92547a7dea60788bef70056507c0e449d23f993ca44661d7a4cd8a1cd1a7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc92547a7dea60788bef70056507c0e449d23f993ca44661d7a4cd8a1cd1a7af->leave($__internal_fc92547a7dea60788bef70056507c0e449d23f993ca44661d7a4cd8a1cd1a7af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d300694466042d2630c7f44d2d951a664f7396a4e4709b112fb1a15dff6134a6 = $this->env->getExtension("native_profiler");
        $__internal_d300694466042d2630c7f44d2d951a664f7396a4e4709b112fb1a15dff6134a6->enter($__internal_d300694466042d2630c7f44d2d951a664f7396a4e4709b112fb1a15dff6134a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_d300694466042d2630c7f44d2d951a664f7396a4e4709b112fb1a15dff6134a6->leave($__internal_d300694466042d2630c7f44d2d951a664f7396a4e4709b112fb1a15dff6134a6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_daa22ab36f86e8a3b5e836b6a0c9b763a3c867924a4340444a2edfc0115093cc = $this->env->getExtension("native_profiler");
        $__internal_daa22ab36f86e8a3b5e836b6a0c9b763a3c867924a4340444a2edfc0115093cc->enter($__internal_daa22ab36f86e8a3b5e836b6a0c9b763a3c867924a4340444a2edfc0115093cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_daa22ab36f86e8a3b5e836b6a0c9b763a3c867924a4340444a2edfc0115093cc->leave($__internal_daa22ab36f86e8a3b5e836b6a0c9b763a3c867924a4340444a2edfc0115093cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b96dabcd71873cecad72fecf9b977af7bcb4ec12fea68d387afdc98cd442aff5 = $this->env->getExtension("native_profiler");
        $__internal_b96dabcd71873cecad72fecf9b977af7bcb4ec12fea68d387afdc98cd442aff5->enter($__internal_b96dabcd71873cecad72fecf9b977af7bcb4ec12fea68d387afdc98cd442aff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b96dabcd71873cecad72fecf9b977af7bcb4ec12fea68d387afdc98cd442aff5->leave($__internal_b96dabcd71873cecad72fecf9b977af7bcb4ec12fea68d387afdc98cd442aff5_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_15c91647b18f1c4a7632622999ea9446a74ae77e8ba0ea88988ed33388e2978b = $this->env->getExtension("native_profiler");
        $__internal_15c91647b18f1c4a7632622999ea9446a74ae77e8ba0ea88988ed33388e2978b->enter($__internal_15c91647b18f1c4a7632622999ea9446a74ae77e8ba0ea88988ed33388e2978b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_15c91647b18f1c4a7632622999ea9446a74ae77e8ba0ea88988ed33388e2978b->leave($__internal_15c91647b18f1c4a7632622999ea9446a74ae77e8ba0ea88988ed33388e2978b_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
