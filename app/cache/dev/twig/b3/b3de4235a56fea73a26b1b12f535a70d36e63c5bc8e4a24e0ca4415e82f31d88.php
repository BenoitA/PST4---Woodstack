<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c595f1d701739c574448f4db2a861d9c9f8b6313fa2506922cfe6c05269a23bb extends Twig_Template
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
        $__internal_66d9d1942c387e4441cc3c3d42a85f943026bec45fc447956f12f7008fe6a320 = $this->env->getExtension("native_profiler");
        $__internal_66d9d1942c387e4441cc3c3d42a85f943026bec45fc447956f12f7008fe6a320->enter($__internal_66d9d1942c387e4441cc3c3d42a85f943026bec45fc447956f12f7008fe6a320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66d9d1942c387e4441cc3c3d42a85f943026bec45fc447956f12f7008fe6a320->leave($__internal_66d9d1942c387e4441cc3c3d42a85f943026bec45fc447956f12f7008fe6a320_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1d3951de0144e47897e13b4da39a1f006b3ebe8998cd40f4a875eb3f42450cee = $this->env->getExtension("native_profiler");
        $__internal_1d3951de0144e47897e13b4da39a1f006b3ebe8998cd40f4a875eb3f42450cee->enter($__internal_1d3951de0144e47897e13b4da39a1f006b3ebe8998cd40f4a875eb3f42450cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1d3951de0144e47897e13b4da39a1f006b3ebe8998cd40f4a875eb3f42450cee->leave($__internal_1d3951de0144e47897e13b4da39a1f006b3ebe8998cd40f4a875eb3f42450cee_prof);

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
