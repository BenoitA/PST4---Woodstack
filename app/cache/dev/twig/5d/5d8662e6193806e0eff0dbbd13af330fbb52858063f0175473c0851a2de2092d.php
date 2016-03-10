<?php

/* WSWoodstackBundle:Wood:layout.html.twig */
class __TwigTemplate_70bfd6221f44dab8e376012075e716a4c8f9a13e7303645242f5c7968628a039 extends Twig_Template
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
        $__internal_6a3a07782012bf1214f73c90a4bf99e9d2405b8e5eeac2855cc1200aac2fc10f = $this->env->getExtension("native_profiler");
        $__internal_6a3a07782012bf1214f73c90a4bf99e9d2405b8e5eeac2855cc1200aac2fc10f->enter($__internal_6a3a07782012bf1214f73c90a4bf99e9d2405b8e5eeac2855cc1200aac2fc10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3a07782012bf1214f73c90a4bf99e9d2405b8e5eeac2855cc1200aac2fc10f->leave($__internal_6a3a07782012bf1214f73c90a4bf99e9d2405b8e5eeac2855cc1200aac2fc10f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29da1612470e8b8e1afce5d5f613c70c8526d90ecf417b10615679a78812b0de = $this->env->getExtension("native_profiler");
        $__internal_29da1612470e8b8e1afce5d5f613c70c8526d90ecf417b10615679a78812b0de->enter($__internal_29da1612470e8b8e1afce5d5f613c70c8526d90ecf417b10615679a78812b0de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_29da1612470e8b8e1afce5d5f613c70c8526d90ecf417b10615679a78812b0de->leave($__internal_29da1612470e8b8e1afce5d5f613c70c8526d90ecf417b10615679a78812b0de_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad978fce0ee9ed00355e0fcdd18aa0682f034fdbefa79225b84a6e93f8cb52cf = $this->env->getExtension("native_profiler");
        $__internal_ad978fce0ee9ed00355e0fcdd18aa0682f034fdbefa79225b84a6e93f8cb52cf->enter($__internal_ad978fce0ee9ed00355e0fcdd18aa0682f034fdbefa79225b84a6e93f8cb52cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Benoit est un petit pd!</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_ad978fce0ee9ed00355e0fcdd18aa0682f034fdbefa79225b84a6e93f8cb52cf->leave($__internal_ad978fce0ee9ed00355e0fcdd18aa0682f034fdbefa79225b84a6e93f8cb52cf_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9542513e8e1effb96312b799875661b806a45e55e45dad1b9787204f4f09049c = $this->env->getExtension("native_profiler");
        $__internal_9542513e8e1effb96312b799875661b806a45e55e45dad1b9787204f4f09049c->enter($__internal_9542513e8e1effb96312b799875661b806a45e55e45dad1b9787204f4f09049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_9542513e8e1effb96312b799875661b806a45e55e45dad1b9787204f4f09049c->leave($__internal_9542513e8e1effb96312b799875661b806a45e55e45dad1b9787204f4f09049c_prof);

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
