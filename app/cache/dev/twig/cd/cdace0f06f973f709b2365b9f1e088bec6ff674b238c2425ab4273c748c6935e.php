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
        $__internal_1790c138e192ecdc91e1f1fcc254eb5c8ef08810472fdab127817f5743bf62bc = $this->env->getExtension("native_profiler");
        $__internal_1790c138e192ecdc91e1f1fcc254eb5c8ef08810472fdab127817f5743bf62bc->enter($__internal_1790c138e192ecdc91e1f1fcc254eb5c8ef08810472fdab127817f5743bf62bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1790c138e192ecdc91e1f1fcc254eb5c8ef08810472fdab127817f5743bf62bc->leave($__internal_1790c138e192ecdc91e1f1fcc254eb5c8ef08810472fdab127817f5743bf62bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bce13be39a1978c261f4fb0b3cbd217ecac8ddd38679b29b4532fef2f899c542 = $this->env->getExtension("native_profiler");
        $__internal_bce13be39a1978c261f4fb0b3cbd217ecac8ddd38679b29b4532fef2f899c542->enter($__internal_bce13be39a1978c261f4fb0b3cbd217ecac8ddd38679b29b4532fef2f899c542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_bce13be39a1978c261f4fb0b3cbd217ecac8ddd38679b29b4532fef2f899c542->leave($__internal_bce13be39a1978c261f4fb0b3cbd217ecac8ddd38679b29b4532fef2f899c542_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95fa768c247cbe397b9e317005d4d327628720b655d95e50f9bd0570c26fa853 = $this->env->getExtension("native_profiler");
        $__internal_95fa768c247cbe397b9e317005d4d327628720b655d95e50f9bd0570c26fa853->enter($__internal_95fa768c247cbe397b9e317005d4d327628720b655d95e50f9bd0570c26fa853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t
\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t
\t
";
        
        $__internal_95fa768c247cbe397b9e317005d4d327628720b655d95e50f9bd0570c26fa853->leave($__internal_95fa768c247cbe397b9e317005d4d327628720b655d95e50f9bd0570c26fa853_prof);

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
