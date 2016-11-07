<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_99c970284b3ffb6c10afd159505cc2580518be89aca6a63fc65dbb754c34a7da extends Twig_Template
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
        $__internal_bb1cd7ad2cd2e214978154dfc90be8499bee5860112fa925834378c742806e6d = $this->env->getExtension("native_profiler");
        $__internal_bb1cd7ad2cd2e214978154dfc90be8499bee5860112fa925834378c742806e6d->enter($__internal_bb1cd7ad2cd2e214978154dfc90be8499bee5860112fa925834378c742806e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb1cd7ad2cd2e214978154dfc90be8499bee5860112fa925834378c742806e6d->leave($__internal_bb1cd7ad2cd2e214978154dfc90be8499bee5860112fa925834378c742806e6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47703e3dd56a10a63d5d27bf3d8581580b084cda517b79a146f8cd91f41c0aa3 = $this->env->getExtension("native_profiler");
        $__internal_47703e3dd56a10a63d5d27bf3d8581580b084cda517b79a146f8cd91f41c0aa3->enter($__internal_47703e3dd56a10a63d5d27bf3d8581580b084cda517b79a146f8cd91f41c0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_47703e3dd56a10a63d5d27bf3d8581580b084cda517b79a146f8cd91f41c0aa3->leave($__internal_47703e3dd56a10a63d5d27bf3d8581580b084cda517b79a146f8cd91f41c0aa3_prof);

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
