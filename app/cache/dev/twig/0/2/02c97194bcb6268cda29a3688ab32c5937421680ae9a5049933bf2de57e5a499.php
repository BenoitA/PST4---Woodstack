<?php

/* WSWoodstackBundle:Wood:index.html.twig */
class __TwigTemplate_0c2ec30fbb69932263e9ff1bb666e9692dab17b22ea5b3e239c99e0d8f0b7cdd extends Twig_Template
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
        $__internal_4d14ce0ed8042230fd3b26f36c36df41b967fc1505c2423b822e81e46c7f76a9 = $this->env->getExtension("native_profiler");
        $__internal_4d14ce0ed8042230fd3b26f36c36df41b967fc1505c2423b822e81e46c7f76a9->enter($__internal_4d14ce0ed8042230fd3b26f36c36df41b967fc1505c2423b822e81e46c7f76a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d14ce0ed8042230fd3b26f36c36df41b967fc1505c2423b822e81e46c7f76a9->leave($__internal_4d14ce0ed8042230fd3b26f36c36df41b967fc1505c2423b822e81e46c7f76a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65d1d4beb9063d6a276ecd2501046797d8a71bfe0f83432096935e76d770b1c6 = $this->env->getExtension("native_profiler");
        $__internal_65d1d4beb9063d6a276ecd2501046797d8a71bfe0f83432096935e76d770b1c6->enter($__internal_65d1d4beb9063d6a276ecd2501046797d8a71bfe0f83432096935e76d770b1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_65d1d4beb9063d6a276ecd2501046797d8a71bfe0f83432096935e76d770b1c6->leave($__internal_65d1d4beb9063d6a276ecd2501046797d8a71bfe0f83432096935e76d770b1c6_prof);

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
