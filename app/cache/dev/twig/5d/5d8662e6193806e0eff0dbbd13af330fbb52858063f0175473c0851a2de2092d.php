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
        $__internal_d11fcd81e3888f6e0c104a54c86a0379eb2f6f6e2ad8d84b9eba1f31bb91e0f0 = $this->env->getExtension("native_profiler");
        $__internal_d11fcd81e3888f6e0c104a54c86a0379eb2f6f6e2ad8d84b9eba1f31bb91e0f0->enter($__internal_d11fcd81e3888f6e0c104a54c86a0379eb2f6f6e2ad8d84b9eba1f31bb91e0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d11fcd81e3888f6e0c104a54c86a0379eb2f6f6e2ad8d84b9eba1f31bb91e0f0->leave($__internal_d11fcd81e3888f6e0c104a54c86a0379eb2f6f6e2ad8d84b9eba1f31bb91e0f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcad84a2ff9c5e42e00c1b0bd55f2c0fda00ad4328a00203c6919d4aa1610c8d = $this->env->getExtension("native_profiler");
        $__internal_dcad84a2ff9c5e42e00c1b0bd55f2c0fda00ad4328a00203c6919d4aa1610c8d->enter($__internal_dcad84a2ff9c5e42e00c1b0bd55f2c0fda00ad4328a00203c6919d4aa1610c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dcad84a2ff9c5e42e00c1b0bd55f2c0fda00ad4328a00203c6919d4aa1610c8d->leave($__internal_dcad84a2ff9c5e42e00c1b0bd55f2c0fda00ad4328a00203c6919d4aa1610c8d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_54922215e01daf5f778ef4bdb07d3bc85b61901674d0efc37be07a667072a9d1 = $this->env->getExtension("native_profiler");
        $__internal_54922215e01daf5f778ef4bdb07d3bc85b61901674d0efc37be07a667072a9d1->enter($__internal_54922215e01daf5f778ef4bdb07d3bc85b61901674d0efc37be07a667072a9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Benoit est un petit pd!</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_54922215e01daf5f778ef4bdb07d3bc85b61901674d0efc37be07a667072a9d1->leave($__internal_54922215e01daf5f778ef4bdb07d3bc85b61901674d0efc37be07a667072a9d1_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_176c991dcc5778cc833adb88e418f66ffe73f4e8d120cb4327a6ae7d01ae4f80 = $this->env->getExtension("native_profiler");
        $__internal_176c991dcc5778cc833adb88e418f66ffe73f4e8d120cb4327a6ae7d01ae4f80->enter($__internal_176c991dcc5778cc833adb88e418f66ffe73f4e8d120cb4327a6ae7d01ae4f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_176c991dcc5778cc833adb88e418f66ffe73f4e8d120cb4327a6ae7d01ae4f80->leave($__internal_176c991dcc5778cc833adb88e418f66ffe73f4e8d120cb4327a6ae7d01ae4f80_prof);

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
