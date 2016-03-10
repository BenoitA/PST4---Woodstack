<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_939e240fc9528c0410402d71b16222f7a787a9d76471d60c1f6d604eb4d44d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_fc61af825a972ce7dcf4c4534763088eba67cee231dee66d609aa9b8f78a65b1 = $this->env->getExtension("native_profiler");
        $__internal_fc61af825a972ce7dcf4c4534763088eba67cee231dee66d609aa9b8f78a65b1->enter($__internal_fc61af825a972ce7dcf4c4534763088eba67cee231dee66d609aa9b8f78a65b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc61af825a972ce7dcf4c4534763088eba67cee231dee66d609aa9b8f78a65b1->leave($__internal_fc61af825a972ce7dcf4c4534763088eba67cee231dee66d609aa9b8f78a65b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a50882863001080b6570cd5c7424cab0828f6bed6d84c1e2e25de69bc71c1af8 = $this->env->getExtension("native_profiler");
        $__internal_a50882863001080b6570cd5c7424cab0828f6bed6d84c1e2e25de69bc71c1af8->enter($__internal_a50882863001080b6570cd5c7424cab0828f6bed6d84c1e2e25de69bc71c1af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a50882863001080b6570cd5c7424cab0828f6bed6d84c1e2e25de69bc71c1af8->leave($__internal_a50882863001080b6570cd5c7424cab0828f6bed6d84c1e2e25de69bc71c1af8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
