<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_bf199c94878c2706003f87a4e8b7a7dade4f4d01d67bb290ad86c2de12d16204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d343e9f33e4e3d81b57219cd216414ae55e380d6ea2a89bbadd7947efb7c215 = $this->env->getExtension("native_profiler");
        $__internal_0d343e9f33e4e3d81b57219cd216414ae55e380d6ea2a89bbadd7947efb7c215->enter($__internal_0d343e9f33e4e3d81b57219cd216414ae55e380d6ea2a89bbadd7947efb7c215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d343e9f33e4e3d81b57219cd216414ae55e380d6ea2a89bbadd7947efb7c215->leave($__internal_0d343e9f33e4e3d81b57219cd216414ae55e380d6ea2a89bbadd7947efb7c215_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de35129ed6099ce0f99832ab48ff2d30ec9e2dc23339ef1f2a8e1198ddba799d = $this->env->getExtension("native_profiler");
        $__internal_de35129ed6099ce0f99832ab48ff2d30ec9e2dc23339ef1f2a8e1198ddba799d->enter($__internal_de35129ed6099ce0f99832ab48ff2d30ec9e2dc23339ef1f2a8e1198ddba799d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_de35129ed6099ce0f99832ab48ff2d30ec9e2dc23339ef1f2a8e1198ddba799d->leave($__internal_de35129ed6099ce0f99832ab48ff2d30ec9e2dc23339ef1f2a8e1198ddba799d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4c50770e8fdd1a6573eb13bd927ac323f313caaabd097754e1996c393ceec93 = $this->env->getExtension("native_profiler");
        $__internal_a4c50770e8fdd1a6573eb13bd927ac323f313caaabd097754e1996c393ceec93->enter($__internal_a4c50770e8fdd1a6573eb13bd927ac323f313caaabd097754e1996c393ceec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Annonces</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_a4c50770e8fdd1a6573eb13bd927ac323f313caaabd097754e1996c393ceec93->leave($__internal_a4c50770e8fdd1a6573eb13bd927ac323f313caaabd097754e1996c393ceec93_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a375fdc338ee095a649af1f079433d19adb834a5c3ff8729680a3eba7abc3cbe = $this->env->getExtension("native_profiler");
        $__internal_a375fdc338ee095a649af1f079433d19adb834a5c3ff8729680a3eba7abc3cbe->enter($__internal_a375fdc338ee095a649af1f079433d19adb834a5c3ff8729680a3eba7abc3cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_a375fdc338ee095a649af1f079433d19adb834a5c3ff8729680a3eba7abc3cbe->leave($__internal_a375fdc338ee095a649af1f079433d19adb834a5c3ff8729680a3eba7abc3cbe_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  65 => 12,  60 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{# On definit un sous-titre a toutes les pages du bundle par ex #}*/
/* 	<h1>Annonces</h1>*/
/* 	*/
/* 	<hr>*/
/* 	{% block ocplatform_body %}*/
/* 	{% endblock %}*/
/* {% endblock %}*/
/* */
