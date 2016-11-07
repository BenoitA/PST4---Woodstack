<?php

/* WSWoodstackBundle:Wood:layout.html.twig */
class __TwigTemplate_1c35ce84a1586cffc1fe84a58b9e7540b90bdddde2d5d585e3068cde4b1d1f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "WSWoodstackBundle:Wood:layout.html.twig", 1);
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
        $__internal_ec5a91aa9fe933a6e88ccaf9522d1eb9c42cb9e98a0d7a8d51812fb0c99ba4ac = $this->env->getExtension("native_profiler");
        $__internal_ec5a91aa9fe933a6e88ccaf9522d1eb9c42cb9e98a0d7a8d51812fb0c99ba4ac->enter($__internal_ec5a91aa9fe933a6e88ccaf9522d1eb9c42cb9e98a0d7a8d51812fb0c99ba4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5a91aa9fe933a6e88ccaf9522d1eb9c42cb9e98a0d7a8d51812fb0c99ba4ac->leave($__internal_ec5a91aa9fe933a6e88ccaf9522d1eb9c42cb9e98a0d7a8d51812fb0c99ba4ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6abf0587c6df8bf51cd2b644889debe05d0148083658f03588b4d298c7606f42 = $this->env->getExtension("native_profiler");
        $__internal_6abf0587c6df8bf51cd2b644889debe05d0148083658f03588b4d298c7606f42->enter($__internal_6abf0587c6df8bf51cd2b644889debe05d0148083658f03588b4d298c7606f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6abf0587c6df8bf51cd2b644889debe05d0148083658f03588b4d298c7606f42->leave($__internal_6abf0587c6df8bf51cd2b644889debe05d0148083658f03588b4d298c7606f42_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b965e45f4841a80656adaa9c2a9a53e0545134767a203a7fa93b206efc6835d0 = $this->env->getExtension("native_profiler");
        $__internal_b965e45f4841a80656adaa9c2a9a53e0545134767a203a7fa93b206efc6835d0->enter($__internal_b965e45f4841a80656adaa9c2a9a53e0545134767a203a7fa93b206efc6835d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Benoit est un petit pd!</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_b965e45f4841a80656adaa9c2a9a53e0545134767a203a7fa93b206efc6835d0->leave($__internal_b965e45f4841a80656adaa9c2a9a53e0545134767a203a7fa93b206efc6835d0_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b353818868319f5aace9027b4e42373e3c6711f1b4c44f09b670c40c958c848c = $this->env->getExtension("native_profiler");
        $__internal_b353818868319f5aace9027b4e42373e3c6711f1b4c44f09b670c40c958c848c->enter($__internal_b353818868319f5aace9027b4e42373e3c6711f1b4c44f09b670c40c958c848c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_b353818868319f5aace9027b4e42373e3c6711f1b4c44f09b670c40c958c848c->leave($__internal_b353818868319f5aace9027b4e42373e3c6711f1b4c44f09b670c40c958c848c_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Wood:layout.html.twig";
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
/* 	<h1>Benoit est un petit pd!</h1>*/
/* 	*/
/* 	<hr>*/
/* 	{% block ocplatform_body %}*/
/* 	{% endblock %}*/
/* {% endblock %}*/
