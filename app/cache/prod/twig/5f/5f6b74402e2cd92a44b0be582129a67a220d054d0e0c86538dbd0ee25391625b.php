<?php

/* WSWoodstackBundle:Wood:layout.html.twig */
class __TwigTemplate_efac9ee1e625547fc13b8b2e2597fefd18ddc3717563df92b6dc3435e6d9e644 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Benoit est un petit pd!</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 13
        echo "\t";
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
        return array (  56 => 13,  50 => 12,  45 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
