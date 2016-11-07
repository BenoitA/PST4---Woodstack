<?php

/* WSWoodstackBundle:Wood:edit.html.twig */
class __TwigTemplate_05f70379924f74009ee547daa1a956486a2e552dee72697810046575406aea9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Wood:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bde4e71b8170563a4a5eb75536c0c0b975b867f7c42c77c078b41e5efcf68e69 = $this->env->getExtension("native_profiler");
        $__internal_bde4e71b8170563a4a5eb75536c0c0b975b867f7c42c77c078b41e5efcf68e69->enter($__internal_bde4e71b8170563a4a5eb75536c0c0b975b867f7c42c77c078b41e5efcf68e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde4e71b8170563a4a5eb75536c0c0b975b867f7c42c77c078b41e5efcf68e69->leave($__internal_bde4e71b8170563a4a5eb75536c0c0b975b867f7c42c77c078b41e5efcf68e69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9483f1b8ccd20d87c419362213ec4c3202449d54f1ca6ee16e1a0ad7d2dc03c = $this->env->getExtension("native_profiler");
        $__internal_d9483f1b8ccd20d87c419362213ec4c3202449d54f1ca6ee16e1a0ad7d2dc03c->enter($__internal_d9483f1b8ccd20d87c419362213ec4c3202449d54f1ca6ee16e1a0ad7d2dc03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_d9483f1b8ccd20d87c419362213ec4c3202449d54f1ca6ee16e1a0ad7d2dc03c->leave($__internal_d9483f1b8ccd20d87c419362213ec4c3202449d54f1ca6ee16e1a0ad7d2dc03c_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dd75940691789f2aeb06fad36a3f4408aac68f802344f33bd5011e060382d73 = $this->env->getExtension("native_profiler");
        $__internal_6dd75940691789f2aeb06fad36a3f4408aac68f802344f33bd5011e060382d73->enter($__internal_6dd75940691789f2aeb06fad36a3f4408aac68f802344f33bd5011e060382d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t



";
        
        $__internal_6dd75940691789f2aeb06fad36a3f4408aac68f802344f33bd5011e060382d73->leave($__internal_6dd75940691789f2aeb06fad36a3f4408aac68f802344f33bd5011e060382d73_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Wood:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	*/
/* */
/* */
/* */
/* {% endblock %}*/
