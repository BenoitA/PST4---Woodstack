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
        $__internal_9c2359d9bd32b46c59f0977d7fa61059655c9c6ae01ba9b6fd3c55f85b24a037 = $this->env->getExtension("native_profiler");
        $__internal_9c2359d9bd32b46c59f0977d7fa61059655c9c6ae01ba9b6fd3c55f85b24a037->enter($__internal_9c2359d9bd32b46c59f0977d7fa61059655c9c6ae01ba9b6fd3c55f85b24a037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2359d9bd32b46c59f0977d7fa61059655c9c6ae01ba9b6fd3c55f85b24a037->leave($__internal_9c2359d9bd32b46c59f0977d7fa61059655c9c6ae01ba9b6fd3c55f85b24a037_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a01661bc6cf496ce0438f079144aac71541d2592fd01f97a42daf2e8dd97bb76 = $this->env->getExtension("native_profiler");
        $__internal_a01661bc6cf496ce0438f079144aac71541d2592fd01f97a42daf2e8dd97bb76->enter($__internal_a01661bc6cf496ce0438f079144aac71541d2592fd01f97a42daf2e8dd97bb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a01661bc6cf496ce0438f079144aac71541d2592fd01f97a42daf2e8dd97bb76->leave($__internal_a01661bc6cf496ce0438f079144aac71541d2592fd01f97a42daf2e8dd97bb76_prof);

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
