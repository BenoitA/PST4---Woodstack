<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_aace6d42cf35212819a94a1b3420e2f72a1f3e19dc169c026cfe00f1680dd6e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_3ce2fe007f92d7b3990c69989f591c6e728897521b264159a12927a517f2364a = $this->env->getExtension("native_profiler");
        $__internal_3ce2fe007f92d7b3990c69989f591c6e728897521b264159a12927a517f2364a->enter($__internal_3ce2fe007f92d7b3990c69989f591c6e728897521b264159a12927a517f2364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ce2fe007f92d7b3990c69989f591c6e728897521b264159a12927a517f2364a->leave($__internal_3ce2fe007f92d7b3990c69989f591c6e728897521b264159a12927a517f2364a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_089d1c345f048a7da72e7be2428b595c33f1440a9c66ce0f5b1a19e2a31df3c3 = $this->env->getExtension("native_profiler");
        $__internal_089d1c345f048a7da72e7be2428b595c33f1440a9c66ce0f5b1a19e2a31df3c3->enter($__internal_089d1c345f048a7da72e7be2428b595c33f1440a9c66ce0f5b1a19e2a31df3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_089d1c345f048a7da72e7be2428b595c33f1440a9c66ce0f5b1a19e2a31df3c3->leave($__internal_089d1c345f048a7da72e7be2428b595c33f1440a9c66ce0f5b1a19e2a31df3c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
