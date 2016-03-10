<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9d14b5ad2aec52bc23c5a885f73cb6c2f80af39904b427183091a42fa6ecc61c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5c56e6f7ca9ff60f96476a745ebc2dcbd382a048b830d39e2a3da7d9aef04ebd = $this->env->getExtension("native_profiler");
        $__internal_5c56e6f7ca9ff60f96476a745ebc2dcbd382a048b830d39e2a3da7d9aef04ebd->enter($__internal_5c56e6f7ca9ff60f96476a745ebc2dcbd382a048b830d39e2a3da7d9aef04ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c56e6f7ca9ff60f96476a745ebc2dcbd382a048b830d39e2a3da7d9aef04ebd->leave($__internal_5c56e6f7ca9ff60f96476a745ebc2dcbd382a048b830d39e2a3da7d9aef04ebd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b1fa952251ad879de7b316cf73528cf6a0a2de1be285a3e6cdcb65c0113d138 = $this->env->getExtension("native_profiler");
        $__internal_5b1fa952251ad879de7b316cf73528cf6a0a2de1be285a3e6cdcb65c0113d138->enter($__internal_5b1fa952251ad879de7b316cf73528cf6a0a2de1be285a3e6cdcb65c0113d138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_5b1fa952251ad879de7b316cf73528cf6a0a2de1be285a3e6cdcb65c0113d138->leave($__internal_5b1fa952251ad879de7b316cf73528cf6a0a2de1be285a3e6cdcb65c0113d138_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
