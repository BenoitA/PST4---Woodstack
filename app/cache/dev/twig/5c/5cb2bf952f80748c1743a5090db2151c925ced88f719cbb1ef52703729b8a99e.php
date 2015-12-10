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
        $__internal_6120986a9d49d1cde35fe01aeaca8b37738f0748f9de34154a4f95533d2184d0 = $this->env->getExtension("native_profiler");
        $__internal_6120986a9d49d1cde35fe01aeaca8b37738f0748f9de34154a4f95533d2184d0->enter($__internal_6120986a9d49d1cde35fe01aeaca8b37738f0748f9de34154a4f95533d2184d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6120986a9d49d1cde35fe01aeaca8b37738f0748f9de34154a4f95533d2184d0->leave($__internal_6120986a9d49d1cde35fe01aeaca8b37738f0748f9de34154a4f95533d2184d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6640bc4ba310d1c3f416ec6267c65830865f459df55966d7a9266e516811056c = $this->env->getExtension("native_profiler");
        $__internal_6640bc4ba310d1c3f416ec6267c65830865f459df55966d7a9266e516811056c->enter($__internal_6640bc4ba310d1c3f416ec6267c65830865f459df55966d7a9266e516811056c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_6640bc4ba310d1c3f416ec6267c65830865f459df55966d7a9266e516811056c->leave($__internal_6640bc4ba310d1c3f416ec6267c65830865f459df55966d7a9266e516811056c_prof);

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
