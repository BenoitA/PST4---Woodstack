<?php

/* WSWoodstackBundle:Wood:index.html.twig */
class __TwigTemplate_0c2ec30fbb69932263e9ff1bb666e9692dab17b22ea5b3e239c99e0d8f0b7cdd extends Twig_Template
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
        $__internal_0dfa7192f98025a9aecc1bdc7f2c0c0fcbd8d222f04a4243bfb58c31ba6032be = $this->env->getExtension("native_profiler");
        $__internal_0dfa7192f98025a9aecc1bdc7f2c0c0fcbd8d222f04a4243bfb58c31ba6032be->enter($__internal_0dfa7192f98025a9aecc1bdc7f2c0c0fcbd8d222f04a4243bfb58c31ba6032be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dfa7192f98025a9aecc1bdc7f2c0c0fcbd8d222f04a4243bfb58c31ba6032be->leave($__internal_0dfa7192f98025a9aecc1bdc7f2c0c0fcbd8d222f04a4243bfb58c31ba6032be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d377061fcc86f79a91759fd6328d9ceb8cfcd865cec0419ffa83aa738ac0e09 = $this->env->getExtension("native_profiler");
        $__internal_0d377061fcc86f79a91759fd6328d9ceb8cfcd865cec0419ffa83aa738ac0e09->enter($__internal_0d377061fcc86f79a91759fd6328d9ceb8cfcd865cec0419ffa83aa738ac0e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_0d377061fcc86f79a91759fd6328d9ceb8cfcd865cec0419ffa83aa738ac0e09->leave($__internal_0d377061fcc86f79a91759fd6328d9ceb8cfcd865cec0419ffa83aa738ac0e09_prof);

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
