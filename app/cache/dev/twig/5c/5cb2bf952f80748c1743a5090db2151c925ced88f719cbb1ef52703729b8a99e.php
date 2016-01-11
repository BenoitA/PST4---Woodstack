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
        $__internal_12ab9c2c7ba3b71fdef6b10a740b902975189daef2d6c060fb3b0dc3f3261553 = $this->env->getExtension("native_profiler");
        $__internal_12ab9c2c7ba3b71fdef6b10a740b902975189daef2d6c060fb3b0dc3f3261553->enter($__internal_12ab9c2c7ba3b71fdef6b10a740b902975189daef2d6c060fb3b0dc3f3261553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ab9c2c7ba3b71fdef6b10a740b902975189daef2d6c060fb3b0dc3f3261553->leave($__internal_12ab9c2c7ba3b71fdef6b10a740b902975189daef2d6c060fb3b0dc3f3261553_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89bab447cdd109fe75afc493c63340cea9aee13041cda1d9465f44bfb8815fda = $this->env->getExtension("native_profiler");
        $__internal_89bab447cdd109fe75afc493c63340cea9aee13041cda1d9465f44bfb8815fda->enter($__internal_89bab447cdd109fe75afc493c63340cea9aee13041cda1d9465f44bfb8815fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_89bab447cdd109fe75afc493c63340cea9aee13041cda1d9465f44bfb8815fda->leave($__internal_89bab447cdd109fe75afc493c63340cea9aee13041cda1d9465f44bfb8815fda_prof);

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
