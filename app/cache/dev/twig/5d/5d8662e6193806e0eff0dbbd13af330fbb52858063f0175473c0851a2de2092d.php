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
        $__internal_b4fb443d7c56b568e9b7f144683b45500deb4b712ac50a7a2352a179ee8a38c8 = $this->env->getExtension("native_profiler");
        $__internal_b4fb443d7c56b568e9b7f144683b45500deb4b712ac50a7a2352a179ee8a38c8->enter($__internal_b4fb443d7c56b568e9b7f144683b45500deb4b712ac50a7a2352a179ee8a38c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4fb443d7c56b568e9b7f144683b45500deb4b712ac50a7a2352a179ee8a38c8->leave($__internal_b4fb443d7c56b568e9b7f144683b45500deb4b712ac50a7a2352a179ee8a38c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_719eb992726fd169b9c1f6b79e85614341106cbf8afced4793bfbf95b47d81ad = $this->env->getExtension("native_profiler");
        $__internal_719eb992726fd169b9c1f6b79e85614341106cbf8afced4793bfbf95b47d81ad->enter($__internal_719eb992726fd169b9c1f6b79e85614341106cbf8afced4793bfbf95b47d81ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_719eb992726fd169b9c1f6b79e85614341106cbf8afced4793bfbf95b47d81ad->leave($__internal_719eb992726fd169b9c1f6b79e85614341106cbf8afced4793bfbf95b47d81ad_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_a782a1130e025ead4a408ce1fca2b9335385556d3df4649cb09aa9d64f903f6c = $this->env->getExtension("native_profiler");
        $__internal_a782a1130e025ead4a408ce1fca2b9335385556d3df4649cb09aa9d64f903f6c->enter($__internal_a782a1130e025ead4a408ce1fca2b9335385556d3df4649cb09aa9d64f903f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Benoit est un petit pd!</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_a782a1130e025ead4a408ce1fca2b9335385556d3df4649cb09aa9d64f903f6c->leave($__internal_a782a1130e025ead4a408ce1fca2b9335385556d3df4649cb09aa9d64f903f6c_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_96b2976a2eef32e1a8df938ca8a97f94e1421b7bb4919996e4bdc0cc3e6ea761 = $this->env->getExtension("native_profiler");
        $__internal_96b2976a2eef32e1a8df938ca8a97f94e1421b7bb4919996e4bdc0cc3e6ea761->enter($__internal_96b2976a2eef32e1a8df938ca8a97f94e1421b7bb4919996e4bdc0cc3e6ea761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_96b2976a2eef32e1a8df938ca8a97f94e1421b7bb4919996e4bdc0cc3e6ea761->leave($__internal_96b2976a2eef32e1a8df938ca8a97f94e1421b7bb4919996e4bdc0cc3e6ea761_prof);

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
