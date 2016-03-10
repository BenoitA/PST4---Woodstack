<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_37cc38b465c50af20a615f27214b98ee692ae8590e977d33870e83229dadf5ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_47a79476a258f3b64634c64315b3b1924536d40f1f7c596bf4606d65f8822099 = $this->env->getExtension("native_profiler");
        $__internal_47a79476a258f3b64634c64315b3b1924536d40f1f7c596bf4606d65f8822099->enter($__internal_47a79476a258f3b64634c64315b3b1924536d40f1f7c596bf4606d65f8822099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47a79476a258f3b64634c64315b3b1924536d40f1f7c596bf4606d65f8822099->leave($__internal_47a79476a258f3b64634c64315b3b1924536d40f1f7c596bf4606d65f8822099_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eda599a8f009d3f5f7c4fcf8174727bfac7d001e9334d867089adc20a21c24e8 = $this->env->getExtension("native_profiler");
        $__internal_eda599a8f009d3f5f7c4fcf8174727bfac7d001e9334d867089adc20a21c24e8->enter($__internal_eda599a8f009d3f5f7c4fcf8174727bfac7d001e9334d867089adc20a21c24e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_eda599a8f009d3f5f7c4fcf8174727bfac7d001e9334d867089adc20a21c24e8->leave($__internal_eda599a8f009d3f5f7c4fcf8174727bfac7d001e9334d867089adc20a21c24e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
