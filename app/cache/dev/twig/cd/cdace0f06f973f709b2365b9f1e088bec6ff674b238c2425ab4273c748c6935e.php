<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c4bd373ea1c2a466acacf6d2ba3e5ce152ce7dc65b139bb6b418487ad3f61880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58f8b32e4c93f1a6c8a3935da173a3ee27f569ee8f87eddebd6a4a0171cca952 = $this->env->getExtension("native_profiler");
        $__internal_58f8b32e4c93f1a6c8a3935da173a3ee27f569ee8f87eddebd6a4a0171cca952->enter($__internal_58f8b32e4c93f1a6c8a3935da173a3ee27f569ee8f87eddebd6a4a0171cca952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f8b32e4c93f1a6c8a3935da173a3ee27f569ee8f87eddebd6a4a0171cca952->leave($__internal_58f8b32e4c93f1a6c8a3935da173a3ee27f569ee8f87eddebd6a4a0171cca952_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc6fb15fc94a8e9531e6d487448d59996f79ee3c58840e352b8c25fde39a5368 = $this->env->getExtension("native_profiler");
        $__internal_fc6fb15fc94a8e9531e6d487448d59996f79ee3c58840e352b8c25fde39a5368->enter($__internal_fc6fb15fc94a8e9531e6d487448d59996f79ee3c58840e352b8c25fde39a5368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_fc6fb15fc94a8e9531e6d487448d59996f79ee3c58840e352b8c25fde39a5368->leave($__internal_fc6fb15fc94a8e9531e6d487448d59996f79ee3c58840e352b8c25fde39a5368_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b36372b7effa0a6567a90f17b9c472f8f1d2b2fdf4da5700ccdef5d6277d1bf7 = $this->env->getExtension("native_profiler");
        $__internal_b36372b7effa0a6567a90f17b9c472f8f1d2b2fdf4da5700ccdef5d6277d1bf7->enter($__internal_b36372b7effa0a6567a90f17b9c472f8f1d2b2fdf4da5700ccdef5d6277d1bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t
\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t
\t
";
        
        $__internal_b36372b7effa0a6567a90f17b9c472f8f1d2b2fdf4da5700ccdef5d6277d1bf7->leave($__internal_b36372b7effa0a6567a90f17b9c472f8f1d2b2fdf4da5700ccdef5d6277d1bf7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  58 => 10,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* 	*/
/* 	{% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* 	*/
/* 	*/
/* {% endblock fos_user_content %}*/
/* */
