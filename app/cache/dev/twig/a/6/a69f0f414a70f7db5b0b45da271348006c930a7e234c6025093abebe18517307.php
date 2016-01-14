<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_3f14f6bc6afb142e60add1c902859a3f7c97affccbbe14025c70aebbe081a6af extends Twig_Template
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
        $__internal_d312c41891ea5df1709d846da411b4c62a91d753fe83210e22534a7db096ece1 = $this->env->getExtension("native_profiler");
        $__internal_d312c41891ea5df1709d846da411b4c62a91d753fe83210e22534a7db096ece1->enter($__internal_d312c41891ea5df1709d846da411b4c62a91d753fe83210e22534a7db096ece1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d312c41891ea5df1709d846da411b4c62a91d753fe83210e22534a7db096ece1->leave($__internal_d312c41891ea5df1709d846da411b4c62a91d753fe83210e22534a7db096ece1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b61d4b9acb50e732c928a9ba173c36f8fe1c9cfc38bd1f5f2d0abdb772ba72e = $this->env->getExtension("native_profiler");
        $__internal_7b61d4b9acb50e732c928a9ba173c36f8fe1c9cfc38bd1f5f2d0abdb772ba72e->enter($__internal_7b61d4b9acb50e732c928a9ba173c36f8fe1c9cfc38bd1f5f2d0abdb772ba72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_7b61d4b9acb50e732c928a9ba173c36f8fe1c9cfc38bd1f5f2d0abdb772ba72e->leave($__internal_7b61d4b9acb50e732c928a9ba173c36f8fe1c9cfc38bd1f5f2d0abdb772ba72e_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25d9c701aa6a114798d307a0b1ba44f2ef29d9375f151dd00866df6e62aabdf3 = $this->env->getExtension("native_profiler");
        $__internal_25d9c701aa6a114798d307a0b1ba44f2ef29d9375f151dd00866df6e62aabdf3->enter($__internal_25d9c701aa6a114798d307a0b1ba44f2ef29d9375f151dd00866df6e62aabdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
\t\t";
        // line 11
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_25d9c701aa6a114798d307a0b1ba44f2ef29d9375f151dd00866df6e62aabdf3->leave($__internal_25d9c701aa6a114798d307a0b1ba44f2ef29d9375f151dd00866df6e62aabdf3_prof);

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
