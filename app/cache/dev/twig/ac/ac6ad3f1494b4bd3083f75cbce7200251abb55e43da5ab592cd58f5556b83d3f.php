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
        $__internal_1bbd3bf5ae7f35111e3c7a9f12bb3f93cc09d17d526be70a0a7713788c8a5d81 = $this->env->getExtension("native_profiler");
        $__internal_1bbd3bf5ae7f35111e3c7a9f12bb3f93cc09d17d526be70a0a7713788c8a5d81->enter($__internal_1bbd3bf5ae7f35111e3c7a9f12bb3f93cc09d17d526be70a0a7713788c8a5d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bbd3bf5ae7f35111e3c7a9f12bb3f93cc09d17d526be70a0a7713788c8a5d81->leave($__internal_1bbd3bf5ae7f35111e3c7a9f12bb3f93cc09d17d526be70a0a7713788c8a5d81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70b2a4ff091ab10f4b6cc3de761b6f6d3e534ee0887c854b8167482da0ed9e4c = $this->env->getExtension("native_profiler");
        $__internal_70b2a4ff091ab10f4b6cc3de761b6f6d3e534ee0887c854b8167482da0ed9e4c->enter($__internal_70b2a4ff091ab10f4b6cc3de761b6f6d3e534ee0887c854b8167482da0ed9e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_70b2a4ff091ab10f4b6cc3de761b6f6d3e534ee0887c854b8167482da0ed9e4c->leave($__internal_70b2a4ff091ab10f4b6cc3de761b6f6d3e534ee0887c854b8167482da0ed9e4c_prof);

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
