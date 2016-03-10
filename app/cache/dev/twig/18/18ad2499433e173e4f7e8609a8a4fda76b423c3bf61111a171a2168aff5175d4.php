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
        $__internal_4abdd228f7e803cdf506f758dfd702b6e4d791629e9b216bc10e2f31744a9d65 = $this->env->getExtension("native_profiler");
        $__internal_4abdd228f7e803cdf506f758dfd702b6e4d791629e9b216bc10e2f31744a9d65->enter($__internal_4abdd228f7e803cdf506f758dfd702b6e4d791629e9b216bc10e2f31744a9d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Client:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4abdd228f7e803cdf506f758dfd702b6e4d791629e9b216bc10e2f31744a9d65->leave($__internal_4abdd228f7e803cdf506f758dfd702b6e4d791629e9b216bc10e2f31744a9d65_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_128f9d594922947ab49c90eb5c8e2670d8dd6140fd619b9ffa95bf1828a4ead2 = $this->env->getExtension("native_profiler");
        $__internal_128f9d594922947ab49c90eb5c8e2670d8dd6140fd619b9ffa95bf1828a4ead2->enter($__internal_128f9d594922947ab49c90eb5c8e2670d8dd6140fd619b9ffa95bf1828a4ead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_128f9d594922947ab49c90eb5c8e2670d8dd6140fd619b9ffa95bf1828a4ead2->leave($__internal_128f9d594922947ab49c90eb5c8e2670d8dd6140fd619b9ffa95bf1828a4ead2_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c051d3984adde8e43c2cad71d246023bd16cff00fe772578c456d136bef166d8 = $this->env->getExtension("native_profiler");
        $__internal_c051d3984adde8e43c2cad71d246023bd16cff00fe772578c456d136bef166d8->enter($__internal_c051d3984adde8e43c2cad71d246023bd16cff00fe772578c456d136bef166d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c051d3984adde8e43c2cad71d246023bd16cff00fe772578c456d136bef166d8->leave($__internal_c051d3984adde8e43c2cad71d246023bd16cff00fe772578c456d136bef166d8_prof);

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
