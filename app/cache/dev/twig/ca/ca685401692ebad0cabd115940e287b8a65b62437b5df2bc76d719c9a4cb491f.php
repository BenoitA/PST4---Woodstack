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
        $__internal_6f1dced4538e4554100ed499bc2997a9f77416e5adce448de258a4b9fb627f4a = $this->env->getExtension("native_profiler");
        $__internal_6f1dced4538e4554100ed499bc2997a9f77416e5adce448de258a4b9fb627f4a->enter($__internal_6f1dced4538e4554100ed499bc2997a9f77416e5adce448de258a4b9fb627f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f1dced4538e4554100ed499bc2997a9f77416e5adce448de258a4b9fb627f4a->leave($__internal_6f1dced4538e4554100ed499bc2997a9f77416e5adce448de258a4b9fb627f4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cfa90589eef0b98a152e96c41ffe324e8657a3bb675d08101cd41d05422301a = $this->env->getExtension("native_profiler");
        $__internal_5cfa90589eef0b98a152e96c41ffe324e8657a3bb675d08101cd41d05422301a->enter($__internal_5cfa90589eef0b98a152e96c41ffe324e8657a3bb675d08101cd41d05422301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_5cfa90589eef0b98a152e96c41ffe324e8657a3bb675d08101cd41d05422301a->leave($__internal_5cfa90589eef0b98a152e96c41ffe324e8657a3bb675d08101cd41d05422301a_prof);

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
