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
        $__internal_af28b52f72eae1f74207db58d7a1fe7961e41cf9043f076136f6b089d25a6f7f = $this->env->getExtension("native_profiler");
        $__internal_af28b52f72eae1f74207db58d7a1fe7961e41cf9043f076136f6b089d25a6f7f->enter($__internal_af28b52f72eae1f74207db58d7a1fe7961e41cf9043f076136f6b089d25a6f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af28b52f72eae1f74207db58d7a1fe7961e41cf9043f076136f6b089d25a6f7f->leave($__internal_af28b52f72eae1f74207db58d7a1fe7961e41cf9043f076136f6b089d25a6f7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_957fd8e472f8fb8b56389f362192d1139778b27d6398ecd97a4e264ff51649f3 = $this->env->getExtension("native_profiler");
        $__internal_957fd8e472f8fb8b56389f362192d1139778b27d6398ecd97a4e264ff51649f3->enter($__internal_957fd8e472f8fb8b56389f362192d1139778b27d6398ecd97a4e264ff51649f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_957fd8e472f8fb8b56389f362192d1139778b27d6398ecd97a4e264ff51649f3->leave($__internal_957fd8e472f8fb8b56389f362192d1139778b27d6398ecd97a4e264ff51649f3_prof);

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
