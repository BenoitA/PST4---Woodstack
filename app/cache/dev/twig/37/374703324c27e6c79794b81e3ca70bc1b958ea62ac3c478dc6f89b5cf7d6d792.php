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
        $__internal_5fc9eb7035edd952a2df66907cf7b0817caecb66d6e0aed2053c85decf4c3dce = $this->env->getExtension("native_profiler");
        $__internal_5fc9eb7035edd952a2df66907cf7b0817caecb66d6e0aed2053c85decf4c3dce->enter($__internal_5fc9eb7035edd952a2df66907cf7b0817caecb66d6e0aed2053c85decf4c3dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc9eb7035edd952a2df66907cf7b0817caecb66d6e0aed2053c85decf4c3dce->leave($__internal_5fc9eb7035edd952a2df66907cf7b0817caecb66d6e0aed2053c85decf4c3dce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_399c59fb4cfa4fa995d083cdfad104379fc99783ee14f0d8cbdc9f5e6d6f4faf = $this->env->getExtension("native_profiler");
        $__internal_399c59fb4cfa4fa995d083cdfad104379fc99783ee14f0d8cbdc9f5e6d6f4faf->enter($__internal_399c59fb4cfa4fa995d083cdfad104379fc99783ee14f0d8cbdc9f5e6d6f4faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_399c59fb4cfa4fa995d083cdfad104379fc99783ee14f0d8cbdc9f5e6d6f4faf->leave($__internal_399c59fb4cfa4fa995d083cdfad104379fc99783ee14f0d8cbdc9f5e6d6f4faf_prof);

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
