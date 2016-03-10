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
        $__internal_c7b1d4f99821c0e6ef443d487b663cdffb12330e2fcd6d836d398f36db05fb59 = $this->env->getExtension("native_profiler");
        $__internal_c7b1d4f99821c0e6ef443d487b663cdffb12330e2fcd6d836d398f36db05fb59->enter($__internal_c7b1d4f99821c0e6ef443d487b663cdffb12330e2fcd6d836d398f36db05fb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7b1d4f99821c0e6ef443d487b663cdffb12330e2fcd6d836d398f36db05fb59->leave($__internal_c7b1d4f99821c0e6ef443d487b663cdffb12330e2fcd6d836d398f36db05fb59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d790e3184aad5997df1cb530b8545489ca0d3c34753023864d643edad755e8dc = $this->env->getExtension("native_profiler");
        $__internal_d790e3184aad5997df1cb530b8545489ca0d3c34753023864d643edad755e8dc->enter($__internal_d790e3184aad5997df1cb530b8545489ca0d3c34753023864d643edad755e8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d790e3184aad5997df1cb530b8545489ca0d3c34753023864d643edad755e8dc->leave($__internal_d790e3184aad5997df1cb530b8545489ca0d3c34753023864d643edad755e8dc_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_574195ba97837ceeb22cd73e3901c2c934c19180e4fa45e56b33674df0699462 = $this->env->getExtension("native_profiler");
        $__internal_574195ba97837ceeb22cd73e3901c2c934c19180e4fa45e56b33674df0699462->enter($__internal_574195ba97837ceeb22cd73e3901c2c934c19180e4fa45e56b33674df0699462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Benoit est un petit pd!</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_574195ba97837ceeb22cd73e3901c2c934c19180e4fa45e56b33674df0699462->leave($__internal_574195ba97837ceeb22cd73e3901c2c934c19180e4fa45e56b33674df0699462_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_233605f1ee4b9c3cfb60f9adbd0ea9b265f2063f922a82ba318222b43dbd8544 = $this->env->getExtension("native_profiler");
        $__internal_233605f1ee4b9c3cfb60f9adbd0ea9b265f2063f922a82ba318222b43dbd8544->enter($__internal_233605f1ee4b9c3cfb60f9adbd0ea9b265f2063f922a82ba318222b43dbd8544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_233605f1ee4b9c3cfb60f9adbd0ea9b265f2063f922a82ba318222b43dbd8544->leave($__internal_233605f1ee4b9c3cfb60f9adbd0ea9b265f2063f922a82ba318222b43dbd8544_prof);

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
