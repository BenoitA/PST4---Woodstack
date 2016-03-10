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
        $__internal_89e011f576eb65a21b444840ba416c7e35af147ab6c50130b10e6a3bf422ab84 = $this->env->getExtension("native_profiler");
        $__internal_89e011f576eb65a21b444840ba416c7e35af147ab6c50130b10e6a3bf422ab84->enter($__internal_89e011f576eb65a21b444840ba416c7e35af147ab6c50130b10e6a3bf422ab84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89e011f576eb65a21b444840ba416c7e35af147ab6c50130b10e6a3bf422ab84->leave($__internal_89e011f576eb65a21b444840ba416c7e35af147ab6c50130b10e6a3bf422ab84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_02d19f33995b2911bad555ea5e96c4f00d8fa2d9cbab5394cdeddeb6334f13f7 = $this->env->getExtension("native_profiler");
        $__internal_02d19f33995b2911bad555ea5e96c4f00d8fa2d9cbab5394cdeddeb6334f13f7->enter($__internal_02d19f33995b2911bad555ea5e96c4f00d8fa2d9cbab5394cdeddeb6334f13f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_02d19f33995b2911bad555ea5e96c4f00d8fa2d9cbab5394cdeddeb6334f13f7->leave($__internal_02d19f33995b2911bad555ea5e96c4f00d8fa2d9cbab5394cdeddeb6334f13f7_prof);

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
