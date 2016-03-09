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
        $__internal_e4aebf2bc131d7b14599c10cab55502c8b0de68a39d0180c9d9c30c8c8bc34b7 = $this->env->getExtension("native_profiler");
        $__internal_e4aebf2bc131d7b14599c10cab55502c8b0de68a39d0180c9d9c30c8c8bc34b7->enter($__internal_e4aebf2bc131d7b14599c10cab55502c8b0de68a39d0180c9d9c30c8c8bc34b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4aebf2bc131d7b14599c10cab55502c8b0de68a39d0180c9d9c30c8c8bc34b7->leave($__internal_e4aebf2bc131d7b14599c10cab55502c8b0de68a39d0180c9d9c30c8c8bc34b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43a3b99b34c1f7e3d8e491d74e09ec8ccad389d1ff26d91b989f11901a924b1f = $this->env->getExtension("native_profiler");
        $__internal_43a3b99b34c1f7e3d8e491d74e09ec8ccad389d1ff26d91b989f11901a924b1f->enter($__internal_43a3b99b34c1f7e3d8e491d74e09ec8ccad389d1ff26d91b989f11901a924b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_43a3b99b34c1f7e3d8e491d74e09ec8ccad389d1ff26d91b989f11901a924b1f->leave($__internal_43a3b99b34c1f7e3d8e491d74e09ec8ccad389d1ff26d91b989f11901a924b1f_prof);

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
