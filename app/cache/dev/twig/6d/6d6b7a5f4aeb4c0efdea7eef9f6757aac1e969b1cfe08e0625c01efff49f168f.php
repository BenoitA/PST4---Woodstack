<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_85b04361d25ad7e0678984ee6c7d9ca2b38add4f98ea1eb98c6b43b67514ce0f extends Twig_Template
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
        $__internal_4d80f21a4f51a36f9d1fa7e52dedcfe4316a92b25cf543661edc8955e8dafe55 = $this->env->getExtension("native_profiler");
        $__internal_4d80f21a4f51a36f9d1fa7e52dedcfe4316a92b25cf543661edc8955e8dafe55->enter($__internal_4d80f21a4f51a36f9d1fa7e52dedcfe4316a92b25cf543661edc8955e8dafe55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d80f21a4f51a36f9d1fa7e52dedcfe4316a92b25cf543661edc8955e8dafe55->leave($__internal_4d80f21a4f51a36f9d1fa7e52dedcfe4316a92b25cf543661edc8955e8dafe55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb20c9201ac5f1526872ef4318631c3a279be2951ec398a37af863e3f654dcfe = $this->env->getExtension("native_profiler");
        $__internal_eb20c9201ac5f1526872ef4318631c3a279be2951ec398a37af863e3f654dcfe->enter($__internal_eb20c9201ac5f1526872ef4318631c3a279be2951ec398a37af863e3f654dcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_eb20c9201ac5f1526872ef4318631c3a279be2951ec398a37af863e3f654dcfe->leave($__internal_eb20c9201ac5f1526872ef4318631c3a279be2951ec398a37af863e3f654dcfe_prof);

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
