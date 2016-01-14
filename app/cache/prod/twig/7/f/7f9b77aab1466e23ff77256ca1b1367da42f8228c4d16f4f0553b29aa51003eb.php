<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f5638193c30509e59479104b9de67ff9774e488d6bc67c1fb81fdb19a7f88e03 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tWoodStack 
";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "\t
\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t
\t
";
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
        return array (  45 => 11,  43 => 10,  40 => 9,  37 => 8,  32 => 4,  29 => 3,  11 => 1,);
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
