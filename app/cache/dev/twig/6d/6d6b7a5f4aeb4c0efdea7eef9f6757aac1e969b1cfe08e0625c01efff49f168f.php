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
        $__internal_72bf4d16bbffb805842318d615b3e19e52fc7091ed0f285ba5c17225e78657f5 = $this->env->getExtension("native_profiler");
        $__internal_72bf4d16bbffb805842318d615b3e19e52fc7091ed0f285ba5c17225e78657f5->enter($__internal_72bf4d16bbffb805842318d615b3e19e52fc7091ed0f285ba5c17225e78657f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72bf4d16bbffb805842318d615b3e19e52fc7091ed0f285ba5c17225e78657f5->leave($__internal_72bf4d16bbffb805842318d615b3e19e52fc7091ed0f285ba5c17225e78657f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35eba455f9e700ea2926fdade157c0ee0fed0289f1ac50b186649809d34ed3ec = $this->env->getExtension("native_profiler");
        $__internal_35eba455f9e700ea2926fdade157c0ee0fed0289f1ac50b186649809d34ed3ec->enter($__internal_35eba455f9e700ea2926fdade157c0ee0fed0289f1ac50b186649809d34ed3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_35eba455f9e700ea2926fdade157c0ee0fed0289f1ac50b186649809d34ed3ec->leave($__internal_35eba455f9e700ea2926fdade157c0ee0fed0289f1ac50b186649809d34ed3ec_prof);

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
