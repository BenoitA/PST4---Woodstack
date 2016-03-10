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
        $__internal_36e746a92c6dbeb47444f442dc9697d8967d3e75244a2c3c98c310ba4786f422 = $this->env->getExtension("native_profiler");
        $__internal_36e746a92c6dbeb47444f442dc9697d8967d3e75244a2c3c98c310ba4786f422->enter($__internal_36e746a92c6dbeb47444f442dc9697d8967d3e75244a2c3c98c310ba4786f422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36e746a92c6dbeb47444f442dc9697d8967d3e75244a2c3c98c310ba4786f422->leave($__internal_36e746a92c6dbeb47444f442dc9697d8967d3e75244a2c3c98c310ba4786f422_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb697b7e96d761f1bb1e133cf5e90fd98ed78e765c4d40a50f544038e73d5750 = $this->env->getExtension("native_profiler");
        $__internal_eb697b7e96d761f1bb1e133cf5e90fd98ed78e765c4d40a50f544038e73d5750->enter($__internal_eb697b7e96d761f1bb1e133cf5e90fd98ed78e765c4d40a50f544038e73d5750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_eb697b7e96d761f1bb1e133cf5e90fd98ed78e765c4d40a50f544038e73d5750->leave($__internal_eb697b7e96d761f1bb1e133cf5e90fd98ed78e765c4d40a50f544038e73d5750_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7596b6d83b14f0662cdafaab9d4721a6d73afa396b602c7d959e5ec316ce09ea = $this->env->getExtension("native_profiler");
        $__internal_7596b6d83b14f0662cdafaab9d4721a6d73afa396b602c7d959e5ec316ce09ea->enter($__internal_7596b6d83b14f0662cdafaab9d4721a6d73afa396b602c7d959e5ec316ce09ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Annonces</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_7596b6d83b14f0662cdafaab9d4721a6d73afa396b602c7d959e5ec316ce09ea->leave($__internal_7596b6d83b14f0662cdafaab9d4721a6d73afa396b602c7d959e5ec316ce09ea_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6d50df3c46ef09f9178cdcd8e5313d26f8cfbba65eabb8fdab9e1f4a940fb8af = $this->env->getExtension("native_profiler");
        $__internal_6d50df3c46ef09f9178cdcd8e5313d26f8cfbba65eabb8fdab9e1f4a940fb8af->enter($__internal_6d50df3c46ef09f9178cdcd8e5313d26f8cfbba65eabb8fdab9e1f4a940fb8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_6d50df3c46ef09f9178cdcd8e5313d26f8cfbba65eabb8fdab9e1f4a940fb8af->leave($__internal_6d50df3c46ef09f9178cdcd8e5313d26f8cfbba65eabb8fdab9e1f4a940fb8af_prof);

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
