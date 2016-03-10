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
        $__internal_f5c0f9c5fdb2884cf475c337ef0cdc5174cb4d6da53401d3713a14a85c715441 = $this->env->getExtension("native_profiler");
        $__internal_f5c0f9c5fdb2884cf475c337ef0cdc5174cb4d6da53401d3713a14a85c715441->enter($__internal_f5c0f9c5fdb2884cf475c337ef0cdc5174cb4d6da53401d3713a14a85c715441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c0f9c5fdb2884cf475c337ef0cdc5174cb4d6da53401d3713a14a85c715441->leave($__internal_f5c0f9c5fdb2884cf475c337ef0cdc5174cb4d6da53401d3713a14a85c715441_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5a3e13644e5e6033e9ff7b5c45a399660d756704e83faacdb48fb8d956999ae = $this->env->getExtension("native_profiler");
        $__internal_b5a3e13644e5e6033e9ff7b5c45a399660d756704e83faacdb48fb8d956999ae->enter($__internal_b5a3e13644e5e6033e9ff7b5c45a399660d756704e83faacdb48fb8d956999ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b5a3e13644e5e6033e9ff7b5c45a399660d756704e83faacdb48fb8d956999ae->leave($__internal_b5a3e13644e5e6033e9ff7b5c45a399660d756704e83faacdb48fb8d956999ae_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f9c6e8ff7e498bb907f3ab22533434c6db117286e3b8b9f9e5ce12649e2515c = $this->env->getExtension("native_profiler");
        $__internal_4f9c6e8ff7e498bb907f3ab22533434c6db117286e3b8b9f9e5ce12649e2515c->enter($__internal_4f9c6e8ff7e498bb907f3ab22533434c6db117286e3b8b9f9e5ce12649e2515c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Annonces</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_4f9c6e8ff7e498bb907f3ab22533434c6db117286e3b8b9f9e5ce12649e2515c->leave($__internal_4f9c6e8ff7e498bb907f3ab22533434c6db117286e3b8b9f9e5ce12649e2515c_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cf228ab958a82870405b55c5d3667b7da25b3196826bde2d7088c73a07489213 = $this->env->getExtension("native_profiler");
        $__internal_cf228ab958a82870405b55c5d3667b7da25b3196826bde2d7088c73a07489213->enter($__internal_cf228ab958a82870405b55c5d3667b7da25b3196826bde2d7088c73a07489213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_cf228ab958a82870405b55c5d3667b7da25b3196826bde2d7088c73a07489213->leave($__internal_cf228ab958a82870405b55c5d3667b7da25b3196826bde2d7088c73a07489213_prof);

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
