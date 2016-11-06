<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_762847c7be7f9d9833ad3e407246e38136b0cd192e9fd9aba99dfd2eac6e6f21 extends Twig_Template
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
        $__internal_ecb7dba111c6a79e1dc032d5d7517d4754158d41bee7db5ce762673002a408d9 = $this->env->getExtension("native_profiler");
        $__internal_ecb7dba111c6a79e1dc032d5d7517d4754158d41bee7db5ce762673002a408d9->enter($__internal_ecb7dba111c6a79e1dc032d5d7517d4754158d41bee7db5ce762673002a408d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb7dba111c6a79e1dc032d5d7517d4754158d41bee7db5ce762673002a408d9->leave($__internal_ecb7dba111c6a79e1dc032d5d7517d4754158d41bee7db5ce762673002a408d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e018099710f14f6942c0b822ab66db1a88c7db3ce73bb2fb18836ee045266de = $this->env->getExtension("native_profiler");
        $__internal_7e018099710f14f6942c0b822ab66db1a88c7db3ce73bb2fb18836ee045266de->enter($__internal_7e018099710f14f6942c0b822ab66db1a88c7db3ce73bb2fb18836ee045266de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7e018099710f14f6942c0b822ab66db1a88c7db3ce73bb2fb18836ee045266de->leave($__internal_7e018099710f14f6942c0b822ab66db1a88c7db3ce73bb2fb18836ee045266de_prof);

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
