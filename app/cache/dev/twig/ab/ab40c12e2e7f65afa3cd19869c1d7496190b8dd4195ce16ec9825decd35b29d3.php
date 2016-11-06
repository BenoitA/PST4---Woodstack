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
        $__internal_5909311fe94d4602d26afdee661a5fe91137c74733aeee365067812614636031 = $this->env->getExtension("native_profiler");
        $__internal_5909311fe94d4602d26afdee661a5fe91137c74733aeee365067812614636031->enter($__internal_5909311fe94d4602d26afdee661a5fe91137c74733aeee365067812614636031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5909311fe94d4602d26afdee661a5fe91137c74733aeee365067812614636031->leave($__internal_5909311fe94d4602d26afdee661a5fe91137c74733aeee365067812614636031_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58deba01d3e8da24f1a94ce73a6b0550b4efe0bc549ee3950a85a044dbecf4f2 = $this->env->getExtension("native_profiler");
        $__internal_58deba01d3e8da24f1a94ce73a6b0550b4efe0bc549ee3950a85a044dbecf4f2->enter($__internal_58deba01d3e8da24f1a94ce73a6b0550b4efe0bc549ee3950a85a044dbecf4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_58deba01d3e8da24f1a94ce73a6b0550b4efe0bc549ee3950a85a044dbecf4f2->leave($__internal_58deba01d3e8da24f1a94ce73a6b0550b4efe0bc549ee3950a85a044dbecf4f2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fe4c03398dfca4594f850c5298304de0d62a69dcca60d8dc1d4f157fe57cd4c = $this->env->getExtension("native_profiler");
        $__internal_6fe4c03398dfca4594f850c5298304de0d62a69dcca60d8dc1d4f157fe57cd4c->enter($__internal_6fe4c03398dfca4594f850c5298304de0d62a69dcca60d8dc1d4f157fe57cd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Annonces</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_6fe4c03398dfca4594f850c5298304de0d62a69dcca60d8dc1d4f157fe57cd4c->leave($__internal_6fe4c03398dfca4594f850c5298304de0d62a69dcca60d8dc1d4f157fe57cd4c_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_457c54cd4bf3674c6a5906e45c4cf5938efd5d76b54c9af5839a55fdded737b4 = $this->env->getExtension("native_profiler");
        $__internal_457c54cd4bf3674c6a5906e45c4cf5938efd5d76b54c9af5839a55fdded737b4->enter($__internal_457c54cd4bf3674c6a5906e45c4cf5938efd5d76b54c9af5839a55fdded737b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_457c54cd4bf3674c6a5906e45c4cf5938efd5d76b54c9af5839a55fdded737b4->leave($__internal_457c54cd4bf3674c6a5906e45c4cf5938efd5d76b54c9af5839a55fdded737b4_prof);

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
