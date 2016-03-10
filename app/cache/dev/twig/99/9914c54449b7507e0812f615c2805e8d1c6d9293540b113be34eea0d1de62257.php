<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_0bdc646f68914a2e571ccbe29b8128a1c7876cc863af18b1c4daa510c15930cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_541832dc1786f6460e2aec061ec2ea247581b96d0a0d980eaa3622be8b134962 = $this->env->getExtension("native_profiler");
        $__internal_541832dc1786f6460e2aec061ec2ea247581b96d0a0d980eaa3622be8b134962->enter($__internal_541832dc1786f6460e2aec061ec2ea247581b96d0a0d980eaa3622be8b134962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_541832dc1786f6460e2aec061ec2ea247581b96d0a0d980eaa3622be8b134962->leave($__internal_541832dc1786f6460e2aec061ec2ea247581b96d0a0d980eaa3622be8b134962_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e7096f788d3b13fdb754c4c84cf204778a30843d5ea7a8698e6f8f74568db86 = $this->env->getExtension("native_profiler");
        $__internal_8e7096f788d3b13fdb754c4c84cf204778a30843d5ea7a8698e6f8f74568db86->enter($__internal_8e7096f788d3b13fdb754c4c84cf204778a30843d5ea7a8698e6f8f74568db86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8e7096f788d3b13fdb754c4c84cf204778a30843d5ea7a8698e6f8f74568db86->leave($__internal_8e7096f788d3b13fdb754c4c84cf204778a30843d5ea7a8698e6f8f74568db86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
