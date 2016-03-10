<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_239c700147b906f673b38e385dbc7b137ea956c85ca9d48dda5a521edc1a4373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bceed70443b1a44114fd6250a90478810488d041e2fd0daab66f29514499224e = $this->env->getExtension("native_profiler");
        $__internal_bceed70443b1a44114fd6250a90478810488d041e2fd0daab66f29514499224e->enter($__internal_bceed70443b1a44114fd6250a90478810488d041e2fd0daab66f29514499224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bceed70443b1a44114fd6250a90478810488d041e2fd0daab66f29514499224e->leave($__internal_bceed70443b1a44114fd6250a90478810488d041e2fd0daab66f29514499224e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8538f2d75c24041a16ed82acf1e3781492c7b27439efe5c911f22814411805f8 = $this->env->getExtension("native_profiler");
        $__internal_8538f2d75c24041a16ed82acf1e3781492c7b27439efe5c911f22814411805f8->enter($__internal_8538f2d75c24041a16ed82acf1e3781492c7b27439efe5c911f22814411805f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<h2>Ajouter une annonce</h2>
\t
\t";
        // line 7
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "
\t
\t<p>Attention : Ajout d'une annonce en cours boloss!</p>
\t
";
        
        $__internal_8538f2d75c24041a16ed82acf1e3781492c7b27439efe5c911f22814411805f8->leave($__internal_8538f2d75c24041a16ed82acf1e3781492c7b27439efe5c911f22814411805f8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* 	<h2>Ajouter une annonce</h2>*/
/* 	*/
/* 	{{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* 	*/
/* 	<p>Attention : Ajout d'une annonce en cours boloss!</p>*/
/* 	*/
/* {% endblock %}*/
