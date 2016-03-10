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
        $__internal_5bae9d1f422002ce1304744f1eb3231abfec8a702b9584bbb94d18d0d20c980e = $this->env->getExtension("native_profiler");
        $__internal_5bae9d1f422002ce1304744f1eb3231abfec8a702b9584bbb94d18d0d20c980e->enter($__internal_5bae9d1f422002ce1304744f1eb3231abfec8a702b9584bbb94d18d0d20c980e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bae9d1f422002ce1304744f1eb3231abfec8a702b9584bbb94d18d0d20c980e->leave($__internal_5bae9d1f422002ce1304744f1eb3231abfec8a702b9584bbb94d18d0d20c980e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_833c6a1bd94234a0f3b9f52d9ec6c303fec92cc6c6da07d38742b625e96bbf16 = $this->env->getExtension("native_profiler");
        $__internal_833c6a1bd94234a0f3b9f52d9ec6c303fec92cc6c6da07d38742b625e96bbf16->enter($__internal_833c6a1bd94234a0f3b9f52d9ec6c303fec92cc6c6da07d38742b625e96bbf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_833c6a1bd94234a0f3b9f52d9ec6c303fec92cc6c6da07d38742b625e96bbf16->leave($__internal_833c6a1bd94234a0f3b9f52d9ec6c303fec92cc6c6da07d38742b625e96bbf16_prof);

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
