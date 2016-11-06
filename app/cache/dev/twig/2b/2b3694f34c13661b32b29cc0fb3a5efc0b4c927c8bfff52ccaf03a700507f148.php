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
        $__internal_71d5b60e10c0a56cc1a7c1e9d3572f57ed730faefbe9b9e8daabc7c21a7a7ccd = $this->env->getExtension("native_profiler");
        $__internal_71d5b60e10c0a56cc1a7c1e9d3572f57ed730faefbe9b9e8daabc7c21a7a7ccd->enter($__internal_71d5b60e10c0a56cc1a7c1e9d3572f57ed730faefbe9b9e8daabc7c21a7a7ccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71d5b60e10c0a56cc1a7c1e9d3572f57ed730faefbe9b9e8daabc7c21a7a7ccd->leave($__internal_71d5b60e10c0a56cc1a7c1e9d3572f57ed730faefbe9b9e8daabc7c21a7a7ccd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ccf6c028dcf652f006fb7da9df5f31193d7660ca2ea01c7c3173afb3323692d = $this->env->getExtension("native_profiler");
        $__internal_7ccf6c028dcf652f006fb7da9df5f31193d7660ca2ea01c7c3173afb3323692d->enter($__internal_7ccf6c028dcf652f006fb7da9df5f31193d7660ca2ea01c7c3173afb3323692d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7ccf6c028dcf652f006fb7da9df5f31193d7660ca2ea01c7c3173afb3323692d->leave($__internal_7ccf6c028dcf652f006fb7da9df5f31193d7660ca2ea01c7c3173afb3323692d_prof);

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
