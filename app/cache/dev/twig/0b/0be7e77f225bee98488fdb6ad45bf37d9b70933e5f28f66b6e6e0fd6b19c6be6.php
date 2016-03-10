<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_aace6d42cf35212819a94a1b3420e2f72a1f3e19dc169c026cfe00f1680dd6e6 extends Twig_Template
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
        $__internal_7ceec6bc6cfa126fec6adcf34cc9a0dc33039b61eefe9aa51ee2e4432e990b1f = $this->env->getExtension("native_profiler");
        $__internal_7ceec6bc6cfa126fec6adcf34cc9a0dc33039b61eefe9aa51ee2e4432e990b1f->enter($__internal_7ceec6bc6cfa126fec6adcf34cc9a0dc33039b61eefe9aa51ee2e4432e990b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ceec6bc6cfa126fec6adcf34cc9a0dc33039b61eefe9aa51ee2e4432e990b1f->leave($__internal_7ceec6bc6cfa126fec6adcf34cc9a0dc33039b61eefe9aa51ee2e4432e990b1f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdec2c11065810a400838d1746cc068264dc4c94a84b49154d219adbeab71442 = $this->env->getExtension("native_profiler");
        $__internal_fdec2c11065810a400838d1746cc068264dc4c94a84b49154d219adbeab71442->enter($__internal_fdec2c11065810a400838d1746cc068264dc4c94a84b49154d219adbeab71442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_fdec2c11065810a400838d1746cc068264dc4c94a84b49154d219adbeab71442->leave($__internal_fdec2c11065810a400838d1746cc068264dc4c94a84b49154d219adbeab71442_prof);

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
