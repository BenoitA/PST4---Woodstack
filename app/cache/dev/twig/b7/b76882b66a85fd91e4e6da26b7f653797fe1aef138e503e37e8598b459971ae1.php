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
        $__internal_579e98e5ac283306b6597d1d2fbab68264c1cf1658066ac7a46255a6ded25f02 = $this->env->getExtension("native_profiler");
        $__internal_579e98e5ac283306b6597d1d2fbab68264c1cf1658066ac7a46255a6ded25f02->enter($__internal_579e98e5ac283306b6597d1d2fbab68264c1cf1658066ac7a46255a6ded25f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_579e98e5ac283306b6597d1d2fbab68264c1cf1658066ac7a46255a6ded25f02->leave($__internal_579e98e5ac283306b6597d1d2fbab68264c1cf1658066ac7a46255a6ded25f02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2af23812c15fa32e5fc89d4773826efe9b822a1183a8e5f4935153f9616aa62 = $this->env->getExtension("native_profiler");
        $__internal_d2af23812c15fa32e5fc89d4773826efe9b822a1183a8e5f4935153f9616aa62->enter($__internal_d2af23812c15fa32e5fc89d4773826efe9b822a1183a8e5f4935153f9616aa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_d2af23812c15fa32e5fc89d4773826efe9b822a1183a8e5f4935153f9616aa62->leave($__internal_d2af23812c15fa32e5fc89d4773826efe9b822a1183a8e5f4935153f9616aa62_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cceef25cb0217050bd1709e963517f97ffda9a18aab2ee8e9efaa969d93d00f = $this->env->getExtension("native_profiler");
        $__internal_7cceef25cb0217050bd1709e963517f97ffda9a18aab2ee8e9efaa969d93d00f->enter($__internal_7cceef25cb0217050bd1709e963517f97ffda9a18aab2ee8e9efaa969d93d00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
\t\t";
        // line 11
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_7cceef25cb0217050bd1709e963517f97ffda9a18aab2ee8e9efaa969d93d00f->leave($__internal_7cceef25cb0217050bd1709e963517f97ffda9a18aab2ee8e9efaa969d93d00f_prof);

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
