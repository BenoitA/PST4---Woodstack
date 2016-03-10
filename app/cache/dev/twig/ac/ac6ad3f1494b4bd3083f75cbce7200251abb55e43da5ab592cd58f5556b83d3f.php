<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_81de505bbc27896b5e71319fa6df4cee2b9beb7772eb4cf9e457008ba8b96634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_65a6937a0703b94a37b6acdbd59a4739ed8fbcc045f75500a700fe2a2aba993b = $this->env->getExtension("native_profiler");
        $__internal_65a6937a0703b94a37b6acdbd59a4739ed8fbcc045f75500a700fe2a2aba993b->enter($__internal_65a6937a0703b94a37b6acdbd59a4739ed8fbcc045f75500a700fe2a2aba993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65a6937a0703b94a37b6acdbd59a4739ed8fbcc045f75500a700fe2a2aba993b->leave($__internal_65a6937a0703b94a37b6acdbd59a4739ed8fbcc045f75500a700fe2a2aba993b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1cd5b5a74c425135dd135b1ceb6560693433bff29a8ad3c6391314ef8a38d54 = $this->env->getExtension("native_profiler");
        $__internal_a1cd5b5a74c425135dd135b1ceb6560693433bff29a8ad3c6391314ef8a38d54->enter($__internal_a1cd5b5a74c425135dd135b1ceb6560693433bff29a8ad3c6391314ef8a38d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a1cd5b5a74c425135dd135b1ceb6560693433bff29a8ad3c6391314ef8a38d54->leave($__internal_a1cd5b5a74c425135dd135b1ceb6560693433bff29a8ad3c6391314ef8a38d54_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
