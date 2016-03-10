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
        $__internal_5ede978a2942993bc130c46846a5711f10fdc3e40a97c6b62c768d73e4591ba7 = $this->env->getExtension("native_profiler");
        $__internal_5ede978a2942993bc130c46846a5711f10fdc3e40a97c6b62c768d73e4591ba7->enter($__internal_5ede978a2942993bc130c46846a5711f10fdc3e40a97c6b62c768d73e4591ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ede978a2942993bc130c46846a5711f10fdc3e40a97c6b62c768d73e4591ba7->leave($__internal_5ede978a2942993bc130c46846a5711f10fdc3e40a97c6b62c768d73e4591ba7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac162e590653cd80fce01cd347ce44a2c2f71df74ba19b5cfe80d123f8193982 = $this->env->getExtension("native_profiler");
        $__internal_ac162e590653cd80fce01cd347ce44a2c2f71df74ba19b5cfe80d123f8193982->enter($__internal_ac162e590653cd80fce01cd347ce44a2c2f71df74ba19b5cfe80d123f8193982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ac162e590653cd80fce01cd347ce44a2c2f71df74ba19b5cfe80d123f8193982->leave($__internal_ac162e590653cd80fce01cd347ce44a2c2f71df74ba19b5cfe80d123f8193982_prof);

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
