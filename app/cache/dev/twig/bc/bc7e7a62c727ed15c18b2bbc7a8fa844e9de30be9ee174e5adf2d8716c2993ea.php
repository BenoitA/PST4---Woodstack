<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_800ac717a01115fafffdcee51a33a60a6fe8fcfc4021338cc22635d0f19b5cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_5e56b588c12dbc1ccd5ec3700c477c325fe3134d0a12d5a7f9360346843b22b4 = $this->env->getExtension("native_profiler");
        $__internal_5e56b588c12dbc1ccd5ec3700c477c325fe3134d0a12d5a7f9360346843b22b4->enter($__internal_5e56b588c12dbc1ccd5ec3700c477c325fe3134d0a12d5a7f9360346843b22b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e56b588c12dbc1ccd5ec3700c477c325fe3134d0a12d5a7f9360346843b22b4->leave($__internal_5e56b588c12dbc1ccd5ec3700c477c325fe3134d0a12d5a7f9360346843b22b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f417efa7aec6a433785ecd66331615ed668267bb0d48a6852d8480996682aad1 = $this->env->getExtension("native_profiler");
        $__internal_f417efa7aec6a433785ecd66331615ed668267bb0d48a6852d8480996682aad1->enter($__internal_f417efa7aec6a433785ecd66331615ed668267bb0d48a6852d8480996682aad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f417efa7aec6a433785ecd66331615ed668267bb0d48a6852d8480996682aad1->leave($__internal_f417efa7aec6a433785ecd66331615ed668267bb0d48a6852d8480996682aad1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
