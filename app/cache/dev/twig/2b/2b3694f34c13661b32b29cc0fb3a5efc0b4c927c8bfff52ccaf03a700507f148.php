<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_7a32c192d2fb9e0cf226efc61d9f1da075f35c655abf34f0bcf64b0a94dae4f8 extends Twig_Template
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
        $__internal_0e830373a6441395103d870cde88f215b89c0bc0e1dac8872703c46161e739d7 = $this->env->getExtension("native_profiler");
        $__internal_0e830373a6441395103d870cde88f215b89c0bc0e1dac8872703c46161e739d7->enter($__internal_0e830373a6441395103d870cde88f215b89c0bc0e1dac8872703c46161e739d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e830373a6441395103d870cde88f215b89c0bc0e1dac8872703c46161e739d7->leave($__internal_0e830373a6441395103d870cde88f215b89c0bc0e1dac8872703c46161e739d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_720ef92e037d27c500e2ebe4be60f577b3ecd7f02ec6cec05d3d26621571f8c6 = $this->env->getExtension("native_profiler");
        $__internal_720ef92e037d27c500e2ebe4be60f577b3ecd7f02ec6cec05d3d26621571f8c6->enter($__internal_720ef92e037d27c500e2ebe4be60f577b3ecd7f02ec6cec05d3d26621571f8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_720ef92e037d27c500e2ebe4be60f577b3ecd7f02ec6cec05d3d26621571f8c6->leave($__internal_720ef92e037d27c500e2ebe4be60f577b3ecd7f02ec6cec05d3d26621571f8c6_prof);

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
