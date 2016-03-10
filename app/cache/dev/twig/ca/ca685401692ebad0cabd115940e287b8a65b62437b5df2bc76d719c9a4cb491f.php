<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_29b19bbaa9e5ed8f09cb3ac72fe0ebdb604b82dde7749e6e7d983db40b8bb84e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bba0ce3bcc8761715e387d488fc84c87c91e5c8b376bb03c7e0ad67a3a3183a8 = $this->env->getExtension("native_profiler");
        $__internal_bba0ce3bcc8761715e387d488fc84c87c91e5c8b376bb03c7e0ad67a3a3183a8->enter($__internal_bba0ce3bcc8761715e387d488fc84c87c91e5c8b376bb03c7e0ad67a3a3183a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bba0ce3bcc8761715e387d488fc84c87c91e5c8b376bb03c7e0ad67a3a3183a8->leave($__internal_bba0ce3bcc8761715e387d488fc84c87c91e5c8b376bb03c7e0ad67a3a3183a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b79a0b9422bbdd963331f5426a346aa2c70ec3466a4e8a37f7f965758244fd4d = $this->env->getExtension("native_profiler");
        $__internal_b79a0b9422bbdd963331f5426a346aa2c70ec3466a4e8a37f7f965758244fd4d->enter($__internal_b79a0b9422bbdd963331f5426a346aa2c70ec3466a4e8a37f7f965758244fd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b79a0b9422bbdd963331f5426a346aa2c70ec3466a4e8a37f7f965758244fd4d->leave($__internal_b79a0b9422bbdd963331f5426a346aa2c70ec3466a4e8a37f7f965758244fd4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
