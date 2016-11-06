<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_45dbae785bef14bf7f769218c88ff5c7d3ea75fb1f939080f2d8e3027fe7a635 extends Twig_Template
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
        $__internal_f8623b00afad8abd2213acc852d5535b09ec0db66d79c45ba8cd4baaf062ea98 = $this->env->getExtension("native_profiler");
        $__internal_f8623b00afad8abd2213acc852d5535b09ec0db66d79c45ba8cd4baaf062ea98->enter($__internal_f8623b00afad8abd2213acc852d5535b09ec0db66d79c45ba8cd4baaf062ea98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8623b00afad8abd2213acc852d5535b09ec0db66d79c45ba8cd4baaf062ea98->leave($__internal_f8623b00afad8abd2213acc852d5535b09ec0db66d79c45ba8cd4baaf062ea98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86f8c0f431dd03457cbf4a08315f78f1bb9b3a40392c02a5b08e2a37982b6cdd = $this->env->getExtension("native_profiler");
        $__internal_86f8c0f431dd03457cbf4a08315f78f1bb9b3a40392c02a5b08e2a37982b6cdd->enter($__internal_86f8c0f431dd03457cbf4a08315f78f1bb9b3a40392c02a5b08e2a37982b6cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_86f8c0f431dd03457cbf4a08315f78f1bb9b3a40392c02a5b08e2a37982b6cdd->leave($__internal_86f8c0f431dd03457cbf4a08315f78f1bb9b3a40392c02a5b08e2a37982b6cdd_prof);

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
