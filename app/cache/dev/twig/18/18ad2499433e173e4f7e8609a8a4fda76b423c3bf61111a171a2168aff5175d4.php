<?php

/* WSWoodstackBundle:Client:client.html.twig */
class __TwigTemplate_878e27ac1ae6f957020250ae9e75ac8d0bc5c26e70cd115b65aa2437add3cb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Client:client.html.twig", 1);
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
        $__internal_cc65464f7b710b00364cda589a65c06d476db867cc7797c7fed021ae02afd009 = $this->env->getExtension("native_profiler");
        $__internal_cc65464f7b710b00364cda589a65c06d476db867cc7797c7fed021ae02afd009->enter($__internal_cc65464f7b710b00364cda589a65c06d476db867cc7797c7fed021ae02afd009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Client:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc65464f7b710b00364cda589a65c06d476db867cc7797c7fed021ae02afd009->leave($__internal_cc65464f7b710b00364cda589a65c06d476db867cc7797c7fed021ae02afd009_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_11a48097d17a177b4594df73bd0c8e3af50cfcda2e9336961bdacd1b3722f6f4 = $this->env->getExtension("native_profiler");
        $__internal_11a48097d17a177b4594df73bd0c8e3af50cfcda2e9336961bdacd1b3722f6f4->enter($__internal_11a48097d17a177b4594df73bd0c8e3af50cfcda2e9336961bdacd1b3722f6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_11a48097d17a177b4594df73bd0c8e3af50cfcda2e9336961bdacd1b3722f6f4->leave($__internal_11a48097d17a177b4594df73bd0c8e3af50cfcda2e9336961bdacd1b3722f6f4_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e7e4735f81c51c6af035e5268bd173a471da6f78a15ab5794e2b60b6f5dac06 = $this->env->getExtension("native_profiler");
        $__internal_8e7e4735f81c51c6af035e5268bd173a471da6f78a15ab5794e2b60b6f5dac06->enter($__internal_8e7e4735f81c51c6af035e5268bd173a471da6f78a15ab5794e2b60b6f5dac06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "
<p>Veuillez ajouter un nouveau client.</p>
<center>
\t<div class=\"well\">
\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
</center>

";
        
        $__internal_8e7e4735f81c51c6af035e5268bd173a471da6f78a15ab5794e2b60b6f5dac06->leave($__internal_8e7e4735f81c51c6af035e5268bd173a471da6f78a15ab5794e2b60b6f5dac06_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Client:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack  */
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* <p>Veuillez ajouter un nouveau client.</p>*/
/* <center>*/
/* 	<div class="well">*/
/* 		{{ form(form) }}*/
/* 	</div>*/
/* </center>*/
/* */
/* {% endblock fos_user_content %}	*/
