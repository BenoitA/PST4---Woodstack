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
        $__internal_c947258d3d3cefa43d02e21a01afe59a66a68f03d27b3d3d8f6aec66755e726e = $this->env->getExtension("native_profiler");
        $__internal_c947258d3d3cefa43d02e21a01afe59a66a68f03d27b3d3d8f6aec66755e726e->enter($__internal_c947258d3d3cefa43d02e21a01afe59a66a68f03d27b3d3d8f6aec66755e726e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c947258d3d3cefa43d02e21a01afe59a66a68f03d27b3d3d8f6aec66755e726e->leave($__internal_c947258d3d3cefa43d02e21a01afe59a66a68f03d27b3d3d8f6aec66755e726e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cb8cd1714690b6c7ae84fc753ba599f2e6175c8ea2d36229011a61669b42ac0 = $this->env->getExtension("native_profiler");
        $__internal_8cb8cd1714690b6c7ae84fc753ba599f2e6175c8ea2d36229011a61669b42ac0->enter($__internal_8cb8cd1714690b6c7ae84fc753ba599f2e6175c8ea2d36229011a61669b42ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_8cb8cd1714690b6c7ae84fc753ba599f2e6175c8ea2d36229011a61669b42ac0->leave($__internal_8cb8cd1714690b6c7ae84fc753ba599f2e6175c8ea2d36229011a61669b42ac0_prof);

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
