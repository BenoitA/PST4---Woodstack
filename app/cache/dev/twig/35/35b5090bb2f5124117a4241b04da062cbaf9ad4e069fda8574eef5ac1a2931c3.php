<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_0e0fdfcf275ea51580d07741db4a174777670e1809f8d8cdd864817c7ca25156 extends Twig_Template
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
        $__internal_d1cb4e05cad7df43ad73ed38105de9c0dd4c4077348738a1275b1ce59f701a13 = $this->env->getExtension("native_profiler");
        $__internal_d1cb4e05cad7df43ad73ed38105de9c0dd4c4077348738a1275b1ce59f701a13->enter($__internal_d1cb4e05cad7df43ad73ed38105de9c0dd4c4077348738a1275b1ce59f701a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1cb4e05cad7df43ad73ed38105de9c0dd4c4077348738a1275b1ce59f701a13->leave($__internal_d1cb4e05cad7df43ad73ed38105de9c0dd4c4077348738a1275b1ce59f701a13_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d38c5b41806af1f574a624568afc46f497cd6e150db844f2d8315cd3212f243 = $this->env->getExtension("native_profiler");
        $__internal_9d38c5b41806af1f574a624568afc46f497cd6e150db844f2d8315cd3212f243->enter($__internal_9d38c5b41806af1f574a624568afc46f497cd6e150db844f2d8315cd3212f243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9d38c5b41806af1f574a624568afc46f497cd6e150db844f2d8315cd3212f243->leave($__internal_9d38c5b41806af1f574a624568afc46f497cd6e150db844f2d8315cd3212f243_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c4340a4ea7758cf14344cf3031e71b1c9e8de53a4e52e52daeae698de77af75 = $this->env->getExtension("native_profiler");
        $__internal_7c4340a4ea7758cf14344cf3031e71b1c9e8de53a4e52e52daeae698de77af75->enter($__internal_7c4340a4ea7758cf14344cf3031e71b1c9e8de53a4e52e52daeae698de77af75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_7c4340a4ea7758cf14344cf3031e71b1c9e8de53a4e52e52daeae698de77af75->leave($__internal_7c4340a4ea7758cf14344cf3031e71b1c9e8de53a4e52e52daeae698de77af75_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_39a7dae6863f56c9f125939c123854b3e71206c4dc6f68ba0603250242c00bad = $this->env->getExtension("native_profiler");
        $__internal_39a7dae6863f56c9f125939c123854b3e71206c4dc6f68ba0603250242c00bad->enter($__internal_39a7dae6863f56c9f125939c123854b3e71206c4dc6f68ba0603250242c00bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39a7dae6863f56c9f125939c123854b3e71206c4dc6f68ba0603250242c00bad->leave($__internal_39a7dae6863f56c9f125939c123854b3e71206c4dc6f68ba0603250242c00bad_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4cd1b209c49a3f07f69926e06974bc93cdf8e5612abd05fcea3e8f0a6671cfd = $this->env->getExtension("native_profiler");
        $__internal_e4cd1b209c49a3f07f69926e06974bc93cdf8e5612abd05fcea3e8f0a6671cfd->enter($__internal_e4cd1b209c49a3f07f69926e06974bc93cdf8e5612abd05fcea3e8f0a6671cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e4cd1b209c49a3f07f69926e06974bc93cdf8e5612abd05fcea3e8f0a6671cfd->leave($__internal_e4cd1b209c49a3f07f69926e06974bc93cdf8e5612abd05fcea3e8f0a6671cfd_prof);

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
