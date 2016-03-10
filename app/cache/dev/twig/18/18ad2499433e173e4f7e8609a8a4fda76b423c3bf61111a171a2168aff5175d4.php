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
        $__internal_12df90c8aaf04776db26ab57f5ccfb9167c10a0c1aab6200c51b06697a0f806f = $this->env->getExtension("native_profiler");
        $__internal_12df90c8aaf04776db26ab57f5ccfb9167c10a0c1aab6200c51b06697a0f806f->enter($__internal_12df90c8aaf04776db26ab57f5ccfb9167c10a0c1aab6200c51b06697a0f806f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Client:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12df90c8aaf04776db26ab57f5ccfb9167c10a0c1aab6200c51b06697a0f806f->leave($__internal_12df90c8aaf04776db26ab57f5ccfb9167c10a0c1aab6200c51b06697a0f806f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32631be7564997fedb59bf8628177efa6a4b092424a13cdf205198f31b5322f2 = $this->env->getExtension("native_profiler");
        $__internal_32631be7564997fedb59bf8628177efa6a4b092424a13cdf205198f31b5322f2->enter($__internal_32631be7564997fedb59bf8628177efa6a4b092424a13cdf205198f31b5322f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_32631be7564997fedb59bf8628177efa6a4b092424a13cdf205198f31b5322f2->leave($__internal_32631be7564997fedb59bf8628177efa6a4b092424a13cdf205198f31b5322f2_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a33ec27b957b2284cbcca5067b6674675d9ff9c8ddaaf935fc71ba6b6cb877a4 = $this->env->getExtension("native_profiler");
        $__internal_a33ec27b957b2284cbcca5067b6674675d9ff9c8ddaaf935fc71ba6b6cb877a4->enter($__internal_a33ec27b957b2284cbcca5067b6674675d9ff9c8ddaaf935fc71ba6b6cb877a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_a33ec27b957b2284cbcca5067b6674675d9ff9c8ddaaf935fc71ba6b6cb877a4->leave($__internal_a33ec27b957b2284cbcca5067b6674675d9ff9c8ddaaf935fc71ba6b6cb877a4_prof);

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
