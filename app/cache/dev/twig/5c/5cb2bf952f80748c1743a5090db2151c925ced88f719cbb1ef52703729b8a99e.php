<?php

/* WSWoodstackBundle:Wood:index.html.twig */
class __TwigTemplate_334bca12ba62dcb260eb7f30d90d3b172236164266b83e6ac54c3809e0b367f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Wood:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56e466a177218a5a645058598cfeaa758becabbb55b5accf4cd038ab81ffc031 = $this->env->getExtension("native_profiler");
        $__internal_56e466a177218a5a645058598cfeaa758becabbb55b5accf4cd038ab81ffc031->enter($__internal_56e466a177218a5a645058598cfeaa758becabbb55b5accf4cd038ab81ffc031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56e466a177218a5a645058598cfeaa758becabbb55b5accf4cd038ab81ffc031->leave($__internal_56e466a177218a5a645058598cfeaa758becabbb55b5accf4cd038ab81ffc031_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_28aaf228872afde3561117a33afed5161fd033f7893d3d16508a1b4492366302 = $this->env->getExtension("native_profiler");
        $__internal_28aaf228872afde3561117a33afed5161fd033f7893d3d16508a1b4492366302->enter($__internal_28aaf228872afde3561117a33afed5161fd033f7893d3d16508a1b4492366302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_28aaf228872afde3561117a33afed5161fd033f7893d3d16508a1b4492366302->leave($__internal_28aaf228872afde3561117a33afed5161fd033f7893d3d16508a1b4492366302_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Wood:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
