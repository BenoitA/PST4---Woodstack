<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_0bdc646f68914a2e571ccbe29b8128a1c7876cc863af18b1c4daa510c15930cb extends Twig_Template
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
        $__internal_6dbd7bb564233e03c154d0cfe5c2c5c6f9d50a1965ef9358e6dcc7d1ab7141a3 = $this->env->getExtension("native_profiler");
        $__internal_6dbd7bb564233e03c154d0cfe5c2c5c6f9d50a1965ef9358e6dcc7d1ab7141a3->enter($__internal_6dbd7bb564233e03c154d0cfe5c2c5c6f9d50a1965ef9358e6dcc7d1ab7141a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbd7bb564233e03c154d0cfe5c2c5c6f9d50a1965ef9358e6dcc7d1ab7141a3->leave($__internal_6dbd7bb564233e03c154d0cfe5c2c5c6f9d50a1965ef9358e6dcc7d1ab7141a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_37bb4767a03cfd349b6a1b1f482293715db25d698ed940e70757231373be432e = $this->env->getExtension("native_profiler");
        $__internal_37bb4767a03cfd349b6a1b1f482293715db25d698ed940e70757231373be432e->enter($__internal_37bb4767a03cfd349b6a1b1f482293715db25d698ed940e70757231373be432e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_37bb4767a03cfd349b6a1b1f482293715db25d698ed940e70757231373be432e->leave($__internal_37bb4767a03cfd349b6a1b1f482293715db25d698ed940e70757231373be432e_prof);

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
