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
        $__internal_f15004d13a4203f15272825c92cc89805f95d383bc07fa9044777b6d65450324 = $this->env->getExtension("native_profiler");
        $__internal_f15004d13a4203f15272825c92cc89805f95d383bc07fa9044777b6d65450324->enter($__internal_f15004d13a4203f15272825c92cc89805f95d383bc07fa9044777b6d65450324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15004d13a4203f15272825c92cc89805f95d383bc07fa9044777b6d65450324->leave($__internal_f15004d13a4203f15272825c92cc89805f95d383bc07fa9044777b6d65450324_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7600a817e276d6ba047302be6e8f0ce55e51b35c658cd5bc84176474720c3b6b = $this->env->getExtension("native_profiler");
        $__internal_7600a817e276d6ba047302be6e8f0ce55e51b35c658cd5bc84176474720c3b6b->enter($__internal_7600a817e276d6ba047302be6e8f0ce55e51b35c658cd5bc84176474720c3b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_7600a817e276d6ba047302be6e8f0ce55e51b35c658cd5bc84176474720c3b6b->leave($__internal_7600a817e276d6ba047302be6e8f0ce55e51b35c658cd5bc84176474720c3b6b_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2954e2e27aba138af9b064347e64b63fbcb00acfe35aac82b7a03deddb312bc = $this->env->getExtension("native_profiler");
        $__internal_a2954e2e27aba138af9b064347e64b63fbcb00acfe35aac82b7a03deddb312bc->enter($__internal_a2954e2e27aba138af9b064347e64b63fbcb00acfe35aac82b7a03deddb312bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
\t\t";
        // line 11
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_a2954e2e27aba138af9b064347e64b63fbcb00acfe35aac82b7a03deddb312bc->leave($__internal_a2954e2e27aba138af9b064347e64b63fbcb00acfe35aac82b7a03deddb312bc_prof);

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
