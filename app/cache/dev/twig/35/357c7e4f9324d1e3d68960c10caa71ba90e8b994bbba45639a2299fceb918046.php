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
        $__internal_4ac7cd33dd425b9b3c2052d6c4a8e6475ddb6ff4a7194725842790ffe6f0ea1c = $this->env->getExtension("native_profiler");
        $__internal_4ac7cd33dd425b9b3c2052d6c4a8e6475ddb6ff4a7194725842790ffe6f0ea1c->enter($__internal_4ac7cd33dd425b9b3c2052d6c4a8e6475ddb6ff4a7194725842790ffe6f0ea1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ac7cd33dd425b9b3c2052d6c4a8e6475ddb6ff4a7194725842790ffe6f0ea1c->leave($__internal_4ac7cd33dd425b9b3c2052d6c4a8e6475ddb6ff4a7194725842790ffe6f0ea1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25f0e3bcc7089e6c7ee0d8adc6dfe1a6952b037d52a5880f8229113195d813c0 = $this->env->getExtension("native_profiler");
        $__internal_25f0e3bcc7089e6c7ee0d8adc6dfe1a6952b037d52a5880f8229113195d813c0->enter($__internal_25f0e3bcc7089e6c7ee0d8adc6dfe1a6952b037d52a5880f8229113195d813c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_25f0e3bcc7089e6c7ee0d8adc6dfe1a6952b037d52a5880f8229113195d813c0->leave($__internal_25f0e3bcc7089e6c7ee0d8adc6dfe1a6952b037d52a5880f8229113195d813c0_prof);

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
