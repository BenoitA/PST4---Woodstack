<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_5a1284e4fb2e5c5771258098263011b2b4ae5d81fa042e843d8b59735b5fd48a extends Twig_Template
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
        $__internal_efa8da47f8006cb40df8b8aa6dedd1bd2612816def9216caf144d857bbc28a7e = $this->env->getExtension("native_profiler");
        $__internal_efa8da47f8006cb40df8b8aa6dedd1bd2612816def9216caf144d857bbc28a7e->enter($__internal_efa8da47f8006cb40df8b8aa6dedd1bd2612816def9216caf144d857bbc28a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa8da47f8006cb40df8b8aa6dedd1bd2612816def9216caf144d857bbc28a7e->leave($__internal_efa8da47f8006cb40df8b8aa6dedd1bd2612816def9216caf144d857bbc28a7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2543099603c46e55205eb51b7ef9b5f5164d847afa69ef65aa66ce5989d749c = $this->env->getExtension("native_profiler");
        $__internal_a2543099603c46e55205eb51b7ef9b5f5164d847afa69ef65aa66ce5989d749c->enter($__internal_a2543099603c46e55205eb51b7ef9b5f5164d847afa69ef65aa66ce5989d749c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a2543099603c46e55205eb51b7ef9b5f5164d847afa69ef65aa66ce5989d749c->leave($__internal_a2543099603c46e55205eb51b7ef9b5f5164d847afa69ef65aa66ce5989d749c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_22f416017e0426d40037635b9ed2f17a17c7e9179c8e1b44492adabb5ae3ce77 = $this->env->getExtension("native_profiler");
        $__internal_22f416017e0426d40037635b9ed2f17a17c7e9179c8e1b44492adabb5ae3ce77->enter($__internal_22f416017e0426d40037635b9ed2f17a17c7e9179c8e1b44492adabb5ae3ce77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Annonces</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_22f416017e0426d40037635b9ed2f17a17c7e9179c8e1b44492adabb5ae3ce77->leave($__internal_22f416017e0426d40037635b9ed2f17a17c7e9179c8e1b44492adabb5ae3ce77_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c810fb7071fe078faf06f3d8ba7871919cd50385603f19b61bedacb444b6fcc7 = $this->env->getExtension("native_profiler");
        $__internal_c810fb7071fe078faf06f3d8ba7871919cd50385603f19b61bedacb444b6fcc7->enter($__internal_c810fb7071fe078faf06f3d8ba7871919cd50385603f19b61bedacb444b6fcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_c810fb7071fe078faf06f3d8ba7871919cd50385603f19b61bedacb444b6fcc7->leave($__internal_c810fb7071fe078faf06f3d8ba7871919cd50385603f19b61bedacb444b6fcc7_prof);

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
