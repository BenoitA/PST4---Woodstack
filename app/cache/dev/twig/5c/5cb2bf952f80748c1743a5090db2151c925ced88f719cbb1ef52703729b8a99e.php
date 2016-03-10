<?php

/* WSWoodstackBundle:Wood:index.html.twig */
class __TwigTemplate_334bca12ba62dcb260eb7f30d90d3b172236164266b83e6ac54c3809e0b367f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Wood:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5daa22f983e00be2383303df0a84c86c61471bc5e80287bcc604661d5de60cfb = $this->env->getExtension("native_profiler");
        $__internal_5daa22f983e00be2383303df0a84c86c61471bc5e80287bcc604661d5de60cfb->enter($__internal_5daa22f983e00be2383303df0a84c86c61471bc5e80287bcc604661d5de60cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5daa22f983e00be2383303df0a84c86c61471bc5e80287bcc604661d5de60cfb->leave($__internal_5daa22f983e00be2383303df0a84c86c61471bc5e80287bcc604661d5de60cfb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c9e701f869ada13e993bfca3670df4036109f63ae66df03c24e37f7d2027623 = $this->env->getExtension("native_profiler");
        $__internal_8c9e701f869ada13e993bfca3670df4036109f63ae66df03c24e37f7d2027623->enter($__internal_8c9e701f869ada13e993bfca3670df4036109f63ae66df03c24e37f7d2027623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_8c9e701f869ada13e993bfca3670df4036109f63ae66df03c24e37f7d2027623->leave($__internal_8c9e701f869ada13e993bfca3670df4036109f63ae66df03c24e37f7d2027623_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Wood:index.html.twig";
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
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
