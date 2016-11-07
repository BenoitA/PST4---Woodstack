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
        $__internal_76f67847839f6999921c4118b7e5ed5139f69e23fe51805572d95362756e6e01 = $this->env->getExtension("native_profiler");
        $__internal_76f67847839f6999921c4118b7e5ed5139f69e23fe51805572d95362756e6e01->enter($__internal_76f67847839f6999921c4118b7e5ed5139f69e23fe51805572d95362756e6e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f67847839f6999921c4118b7e5ed5139f69e23fe51805572d95362756e6e01->leave($__internal_76f67847839f6999921c4118b7e5ed5139f69e23fe51805572d95362756e6e01_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9c639f41bb2e5190bd48608a87fa263db718198ea719c31e233435e06f0302e = $this->env->getExtension("native_profiler");
        $__internal_d9c639f41bb2e5190bd48608a87fa263db718198ea719c31e233435e06f0302e->enter($__internal_d9c639f41bb2e5190bd48608a87fa263db718198ea719c31e233435e06f0302e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_d9c639f41bb2e5190bd48608a87fa263db718198ea719c31e233435e06f0302e->leave($__internal_d9c639f41bb2e5190bd48608a87fa263db718198ea719c31e233435e06f0302e_prof);

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
