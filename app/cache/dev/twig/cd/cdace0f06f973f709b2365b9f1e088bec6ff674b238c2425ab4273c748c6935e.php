<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c4bd373ea1c2a466acacf6d2ba3e5ce152ce7dc65b139bb6b418487ad3f61880 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c836ea3075b0396666776931f612450e3cd96285da5ddcb5387aa1e0e4b08324 = $this->env->getExtension("native_profiler");
        $__internal_c836ea3075b0396666776931f612450e3cd96285da5ddcb5387aa1e0e4b08324->enter($__internal_c836ea3075b0396666776931f612450e3cd96285da5ddcb5387aa1e0e4b08324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c836ea3075b0396666776931f612450e3cd96285da5ddcb5387aa1e0e4b08324->leave($__internal_c836ea3075b0396666776931f612450e3cd96285da5ddcb5387aa1e0e4b08324_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20ca59ccb37b728030b5a089977b0f32cadba5c4b9341741460cb5f7d2b506cd = $this->env->getExtension("native_profiler");
        $__internal_20ca59ccb37b728030b5a089977b0f32cadba5c4b9341741460cb5f7d2b506cd->enter($__internal_20ca59ccb37b728030b5a089977b0f32cadba5c4b9341741460cb5f7d2b506cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_20ca59ccb37b728030b5a089977b0f32cadba5c4b9341741460cb5f7d2b506cd->leave($__internal_20ca59ccb37b728030b5a089977b0f32cadba5c4b9341741460cb5f7d2b506cd_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43644ddbcf26808f584b7898f134d9db551af3feaffc5332580300ff53e6b650 = $this->env->getExtension("native_profiler");
        $__internal_43644ddbcf26808f584b7898f134d9db551af3feaffc5332580300ff53e6b650->enter($__internal_43644ddbcf26808f584b7898f134d9db551af3feaffc5332580300ff53e6b650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t
\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t
\t
";
        
        $__internal_43644ddbcf26808f584b7898f134d9db551af3feaffc5332580300ff53e6b650->leave($__internal_43644ddbcf26808f584b7898f134d9db551af3feaffc5332580300ff53e6b650_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  58 => 10,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* 	*/
/* 	{% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* 	*/
/* 	*/
/* {% endblock fos_user_content %}*/
/* */
