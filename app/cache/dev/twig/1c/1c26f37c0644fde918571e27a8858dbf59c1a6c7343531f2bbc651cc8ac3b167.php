<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_762847c7be7f9d9833ad3e407246e38136b0cd192e9fd9aba99dfd2eac6e6f21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f3fad5adb330efd7c142be909c8b41aa4e31bcfce730ca6be184fe903a18a437 = $this->env->getExtension("native_profiler");
        $__internal_f3fad5adb330efd7c142be909c8b41aa4e31bcfce730ca6be184fe903a18a437->enter($__internal_f3fad5adb330efd7c142be909c8b41aa4e31bcfce730ca6be184fe903a18a437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3fad5adb330efd7c142be909c8b41aa4e31bcfce730ca6be184fe903a18a437->leave($__internal_f3fad5adb330efd7c142be909c8b41aa4e31bcfce730ca6be184fe903a18a437_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42e7d9538e41276def7d953c9502c74a9431eb7555d9571cdaa469b1810b592c = $this->env->getExtension("native_profiler");
        $__internal_42e7d9538e41276def7d953c9502c74a9431eb7555d9571cdaa469b1810b592c->enter($__internal_42e7d9538e41276def7d953c9502c74a9431eb7555d9571cdaa469b1810b592c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_42e7d9538e41276def7d953c9502c74a9431eb7555d9571cdaa469b1810b592c->leave($__internal_42e7d9538e41276def7d953c9502c74a9431eb7555d9571cdaa469b1810b592c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
