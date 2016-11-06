<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_f5ddbf59b2dcc2f2a0acbf140113a33f8ae9db132e79218e79cac4aae667fabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_0d28ddc3c8a6b287b7c6aa3252004bf50bf63354ddd8377aedd3a79d652c7948 = $this->env->getExtension("native_profiler");
        $__internal_0d28ddc3c8a6b287b7c6aa3252004bf50bf63354ddd8377aedd3a79d652c7948->enter($__internal_0d28ddc3c8a6b287b7c6aa3252004bf50bf63354ddd8377aedd3a79d652c7948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d28ddc3c8a6b287b7c6aa3252004bf50bf63354ddd8377aedd3a79d652c7948->leave($__internal_0d28ddc3c8a6b287b7c6aa3252004bf50bf63354ddd8377aedd3a79d652c7948_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23c1ba7295cd4f4d28a8300650659697acb580a520baf74057ffca8b005cd260 = $this->env->getExtension("native_profiler");
        $__internal_23c1ba7295cd4f4d28a8300650659697acb580a520baf74057ffca8b005cd260->enter($__internal_23c1ba7295cd4f4d28a8300650659697acb580a520baf74057ffca8b005cd260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_23c1ba7295cd4f4d28a8300650659697acb580a520baf74057ffca8b005cd260->leave($__internal_23c1ba7295cd4f4d28a8300650659697acb580a520baf74057ffca8b005cd260_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
