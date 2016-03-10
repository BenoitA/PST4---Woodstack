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
        $__internal_5cb6849bbf0a15d094e6a4b89ed02ee10a9d2b2a30d4fafb7f1c682686473eab = $this->env->getExtension("native_profiler");
        $__internal_5cb6849bbf0a15d094e6a4b89ed02ee10a9d2b2a30d4fafb7f1c682686473eab->enter($__internal_5cb6849bbf0a15d094e6a4b89ed02ee10a9d2b2a30d4fafb7f1c682686473eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb6849bbf0a15d094e6a4b89ed02ee10a9d2b2a30d4fafb7f1c682686473eab->leave($__internal_5cb6849bbf0a15d094e6a4b89ed02ee10a9d2b2a30d4fafb7f1c682686473eab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_390ac727e9df944ff824b0a9de3e2104c22e314cf5e876c67b5b69d30b85187a = $this->env->getExtension("native_profiler");
        $__internal_390ac727e9df944ff824b0a9de3e2104c22e314cf5e876c67b5b69d30b85187a->enter($__internal_390ac727e9df944ff824b0a9de3e2104c22e314cf5e876c67b5b69d30b85187a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_390ac727e9df944ff824b0a9de3e2104c22e314cf5e876c67b5b69d30b85187a->leave($__internal_390ac727e9df944ff824b0a9de3e2104c22e314cf5e876c67b5b69d30b85187a_prof);

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
