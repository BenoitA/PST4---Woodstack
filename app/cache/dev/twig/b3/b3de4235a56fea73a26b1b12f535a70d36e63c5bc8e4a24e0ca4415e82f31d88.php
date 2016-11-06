<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_c595f1d701739c574448f4db2a861d9c9f8b6313fa2506922cfe6c05269a23bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_e952d338008ffd9eab904ce9b910f84dd391fcaa9f9e69be6587364e61b221b0 = $this->env->getExtension("native_profiler");
        $__internal_e952d338008ffd9eab904ce9b910f84dd391fcaa9f9e69be6587364e61b221b0->enter($__internal_e952d338008ffd9eab904ce9b910f84dd391fcaa9f9e69be6587364e61b221b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e952d338008ffd9eab904ce9b910f84dd391fcaa9f9e69be6587364e61b221b0->leave($__internal_e952d338008ffd9eab904ce9b910f84dd391fcaa9f9e69be6587364e61b221b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7873b2cfa693a793b09983f635c4f6b213541a50c20b780b0201049f5ee8a063 = $this->env->getExtension("native_profiler");
        $__internal_7873b2cfa693a793b09983f635c4f6b213541a50c20b780b0201049f5ee8a063->enter($__internal_7873b2cfa693a793b09983f635c4f6b213541a50c20b780b0201049f5ee8a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_7873b2cfa693a793b09983f635c4f6b213541a50c20b780b0201049f5ee8a063->leave($__internal_7873b2cfa693a793b09983f635c4f6b213541a50c20b780b0201049f5ee8a063_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
