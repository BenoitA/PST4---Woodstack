<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_81edab1c9f8495820385056b7d1e9dd93593de304d7bdc936ad3991a933e1411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af49bb053d3517cdb65cd3875c77e922c030af8ec07b5406f0017424912878d1 = $this->env->getExtension("native_profiler");
        $__internal_af49bb053d3517cdb65cd3875c77e922c030af8ec07b5406f0017424912878d1->enter($__internal_af49bb053d3517cdb65cd3875c77e922c030af8ec07b5406f0017424912878d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af49bb053d3517cdb65cd3875c77e922c030af8ec07b5406f0017424912878d1->leave($__internal_af49bb053d3517cdb65cd3875c77e922c030af8ec07b5406f0017424912878d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d36de3e42689764109cde806c19ec15cee51a8a18530b3ea4870ac52bb0af77 = $this->env->getExtension("native_profiler");
        $__internal_6d36de3e42689764109cde806c19ec15cee51a8a18530b3ea4870ac52bb0af77->enter($__internal_6d36de3e42689764109cde806c19ec15cee51a8a18530b3ea4870ac52bb0af77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_6d36de3e42689764109cde806c19ec15cee51a8a18530b3ea4870ac52bb0af77->leave($__internal_6d36de3e42689764109cde806c19ec15cee51a8a18530b3ea4870ac52bb0af77_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aaa26f36afdbf2aee23cab75fd78d11790665016e6057cd71e6c0b127e59b7ea = $this->env->getExtension("native_profiler");
        $__internal_aaa26f36afdbf2aee23cab75fd78d11790665016e6057cd71e6c0b127e59b7ea->enter($__internal_aaa26f36afdbf2aee23cab75fd78d11790665016e6057cd71e6c0b127e59b7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
\t\t";
        // line 11
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_aaa26f36afdbf2aee23cab75fd78d11790665016e6057cd71e6c0b127e59b7ea->leave($__internal_aaa26f36afdbf2aee23cab75fd78d11790665016e6057cd71e6c0b127e59b7ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  58 => 11,  55 => 10,  49 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block fos_user_content %}*/
/* */
/* 		{% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
