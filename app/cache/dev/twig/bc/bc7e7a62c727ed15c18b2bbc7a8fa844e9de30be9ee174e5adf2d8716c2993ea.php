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
        $__internal_aa226ff477f61ac4a6862c8a2b9909c71a5d0aa7f6fe2465b4c7c9d6b32e491c = $this->env->getExtension("native_profiler");
        $__internal_aa226ff477f61ac4a6862c8a2b9909c71a5d0aa7f6fe2465b4c7c9d6b32e491c->enter($__internal_aa226ff477f61ac4a6862c8a2b9909c71a5d0aa7f6fe2465b4c7c9d6b32e491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa226ff477f61ac4a6862c8a2b9909c71a5d0aa7f6fe2465b4c7c9d6b32e491c->leave($__internal_aa226ff477f61ac4a6862c8a2b9909c71a5d0aa7f6fe2465b4c7c9d6b32e491c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be29e37ac3cd2d9d0195087873ace8ae6e2e19f2fe70717edb218f732b7d7a0f = $this->env->getExtension("native_profiler");
        $__internal_be29e37ac3cd2d9d0195087873ace8ae6e2e19f2fe70717edb218f732b7d7a0f->enter($__internal_be29e37ac3cd2d9d0195087873ace8ae6e2e19f2fe70717edb218f732b7d7a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_be29e37ac3cd2d9d0195087873ace8ae6e2e19f2fe70717edb218f732b7d7a0f->leave($__internal_be29e37ac3cd2d9d0195087873ace8ae6e2e19f2fe70717edb218f732b7d7a0f_prof);

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
