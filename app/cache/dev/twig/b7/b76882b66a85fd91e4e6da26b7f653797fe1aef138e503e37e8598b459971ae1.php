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
        $__internal_b9063989bc312599dbd40184d99b9920fd20a9a935200cae0cfd38ca926a4389 = $this->env->getExtension("native_profiler");
        $__internal_b9063989bc312599dbd40184d99b9920fd20a9a935200cae0cfd38ca926a4389->enter($__internal_b9063989bc312599dbd40184d99b9920fd20a9a935200cae0cfd38ca926a4389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9063989bc312599dbd40184d99b9920fd20a9a935200cae0cfd38ca926a4389->leave($__internal_b9063989bc312599dbd40184d99b9920fd20a9a935200cae0cfd38ca926a4389_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d133b3f083653796fc0706d03ef77dbace809a4f5e3997033864a14d56e668d4 = $this->env->getExtension("native_profiler");
        $__internal_d133b3f083653796fc0706d03ef77dbace809a4f5e3997033864a14d56e668d4->enter($__internal_d133b3f083653796fc0706d03ef77dbace809a4f5e3997033864a14d56e668d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_d133b3f083653796fc0706d03ef77dbace809a4f5e3997033864a14d56e668d4->leave($__internal_d133b3f083653796fc0706d03ef77dbace809a4f5e3997033864a14d56e668d4_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ade8dbf5243c777cee16109daeae06540cad2992b327c9d2c5678c6c154dd385 = $this->env->getExtension("native_profiler");
        $__internal_ade8dbf5243c777cee16109daeae06540cad2992b327c9d2c5678c6c154dd385->enter($__internal_ade8dbf5243c777cee16109daeae06540cad2992b327c9d2c5678c6c154dd385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
\t\t";
        // line 11
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_ade8dbf5243c777cee16109daeae06540cad2992b327c9d2c5678c6c154dd385->leave($__internal_ade8dbf5243c777cee16109daeae06540cad2992b327c9d2c5678c6c154dd385_prof);

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
