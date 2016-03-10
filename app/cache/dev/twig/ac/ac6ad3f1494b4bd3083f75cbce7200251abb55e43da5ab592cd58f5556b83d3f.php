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
        $__internal_1a049fe4b95e205d9094f46baea99c527ba598c9105e81650cf49cd13b0a1cb9 = $this->env->getExtension("native_profiler");
        $__internal_1a049fe4b95e205d9094f46baea99c527ba598c9105e81650cf49cd13b0a1cb9->enter($__internal_1a049fe4b95e205d9094f46baea99c527ba598c9105e81650cf49cd13b0a1cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a049fe4b95e205d9094f46baea99c527ba598c9105e81650cf49cd13b0a1cb9->leave($__internal_1a049fe4b95e205d9094f46baea99c527ba598c9105e81650cf49cd13b0a1cb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a96a411edc008cb8fd755a51c24b9f3f754435c55531df7084f71ca47d55efc7 = $this->env->getExtension("native_profiler");
        $__internal_a96a411edc008cb8fd755a51c24b9f3f754435c55531df7084f71ca47d55efc7->enter($__internal_a96a411edc008cb8fd755a51c24b9f3f754435c55531df7084f71ca47d55efc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_a96a411edc008cb8fd755a51c24b9f3f754435c55531df7084f71ca47d55efc7->leave($__internal_a96a411edc008cb8fd755a51c24b9f3f754435c55531df7084f71ca47d55efc7_prof);

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
