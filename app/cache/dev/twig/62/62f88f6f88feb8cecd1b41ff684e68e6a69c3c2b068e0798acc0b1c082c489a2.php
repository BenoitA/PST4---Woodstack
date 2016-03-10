<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_939e240fc9528c0410402d71b16222f7a787a9d76471d60c1f6d604eb4d44d24 extends Twig_Template
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
        $__internal_b4d36ea132a1c6dbb3ead719c0528b1d1e2fa98df100959a2a06a8f5ab23c9ec = $this->env->getExtension("native_profiler");
        $__internal_b4d36ea132a1c6dbb3ead719c0528b1d1e2fa98df100959a2a06a8f5ab23c9ec->enter($__internal_b4d36ea132a1c6dbb3ead719c0528b1d1e2fa98df100959a2a06a8f5ab23c9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d36ea132a1c6dbb3ead719c0528b1d1e2fa98df100959a2a06a8f5ab23c9ec->leave($__internal_b4d36ea132a1c6dbb3ead719c0528b1d1e2fa98df100959a2a06a8f5ab23c9ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49e31ecdd7bff759b6d16ee96fb92ddd4a7bde1f5de91d5999529e7a84ceac2a = $this->env->getExtension("native_profiler");
        $__internal_49e31ecdd7bff759b6d16ee96fb92ddd4a7bde1f5de91d5999529e7a84ceac2a->enter($__internal_49e31ecdd7bff759b6d16ee96fb92ddd4a7bde1f5de91d5999529e7a84ceac2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_49e31ecdd7bff759b6d16ee96fb92ddd4a7bde1f5de91d5999529e7a84ceac2a->leave($__internal_49e31ecdd7bff759b6d16ee96fb92ddd4a7bde1f5de91d5999529e7a84ceac2a_prof);

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
