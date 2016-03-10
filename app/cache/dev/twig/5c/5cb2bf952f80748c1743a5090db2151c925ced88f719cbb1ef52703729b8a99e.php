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
        $__internal_6ac2f8fa6ebb66a85040f7e2c34d3630e472a474f0403996ec5d3dd985e292cd = $this->env->getExtension("native_profiler");
        $__internal_6ac2f8fa6ebb66a85040f7e2c34d3630e472a474f0403996ec5d3dd985e292cd->enter($__internal_6ac2f8fa6ebb66a85040f7e2c34d3630e472a474f0403996ec5d3dd985e292cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac2f8fa6ebb66a85040f7e2c34d3630e472a474f0403996ec5d3dd985e292cd->leave($__internal_6ac2f8fa6ebb66a85040f7e2c34d3630e472a474f0403996ec5d3dd985e292cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d5ef37b974d9b23b8f91ce042cf1a117306e750a5505956a2e2a54595914137 = $this->env->getExtension("native_profiler");
        $__internal_4d5ef37b974d9b23b8f91ce042cf1a117306e750a5505956a2e2a54595914137->enter($__internal_4d5ef37b974d9b23b8f91ce042cf1a117306e750a5505956a2e2a54595914137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_4d5ef37b974d9b23b8f91ce042cf1a117306e750a5505956a2e2a54595914137->leave($__internal_4d5ef37b974d9b23b8f91ce042cf1a117306e750a5505956a2e2a54595914137_prof);

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
