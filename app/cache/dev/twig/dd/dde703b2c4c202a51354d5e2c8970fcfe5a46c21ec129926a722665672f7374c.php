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
        $__internal_60daa864227c31279f68ec9a5f29e3a90da1347eafa6f044cfdb19c01693534b = $this->env->getExtension("native_profiler");
        $__internal_60daa864227c31279f68ec9a5f29e3a90da1347eafa6f044cfdb19c01693534b->enter($__internal_60daa864227c31279f68ec9a5f29e3a90da1347eafa6f044cfdb19c01693534b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60daa864227c31279f68ec9a5f29e3a90da1347eafa6f044cfdb19c01693534b->leave($__internal_60daa864227c31279f68ec9a5f29e3a90da1347eafa6f044cfdb19c01693534b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7002cdea4872f977d72710fca8c1d7dbf7143194001be63a396930843dd330ef = $this->env->getExtension("native_profiler");
        $__internal_7002cdea4872f977d72710fca8c1d7dbf7143194001be63a396930843dd330ef->enter($__internal_7002cdea4872f977d72710fca8c1d7dbf7143194001be63a396930843dd330ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7002cdea4872f977d72710fca8c1d7dbf7143194001be63a396930843dd330ef->leave($__internal_7002cdea4872f977d72710fca8c1d7dbf7143194001be63a396930843dd330ef_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f13db1b1411e563b02a56643b3be803e180566c173d65329deaa29b5e9a76b63 = $this->env->getExtension("native_profiler");
        $__internal_f13db1b1411e563b02a56643b3be803e180566c173d65329deaa29b5e9a76b63->enter($__internal_f13db1b1411e563b02a56643b3be803e180566c173d65329deaa29b5e9a76b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Annonces</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_f13db1b1411e563b02a56643b3be803e180566c173d65329deaa29b5e9a76b63->leave($__internal_f13db1b1411e563b02a56643b3be803e180566c173d65329deaa29b5e9a76b63_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_13b3dd06aab9b2776f9d2d90c680f0d191e2b8743605c264e5dcd48fc3db276f = $this->env->getExtension("native_profiler");
        $__internal_13b3dd06aab9b2776f9d2d90c680f0d191e2b8743605c264e5dcd48fc3db276f->enter($__internal_13b3dd06aab9b2776f9d2d90c680f0d191e2b8743605c264e5dcd48fc3db276f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_13b3dd06aab9b2776f9d2d90c680f0d191e2b8743605c264e5dcd48fc3db276f->leave($__internal_13b3dd06aab9b2776f9d2d90c680f0d191e2b8743605c264e5dcd48fc3db276f_prof);

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
