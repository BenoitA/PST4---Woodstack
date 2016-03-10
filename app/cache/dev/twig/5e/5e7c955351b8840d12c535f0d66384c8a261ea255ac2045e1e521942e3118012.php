<?php

/* OCPlatformBundle:Advert:layout.html.twig */
class __TwigTemplate_347af57f799141baf6b5d7894fc811c9c60b15e28f8c71614a5b5f77a3e294e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbec4070f84ce5867686af777a2b266984cfa665bf364e061bcc5824b27fc1c1 = $this->env->getExtension("native_profiler");
        $__internal_fbec4070f84ce5867686af777a2b266984cfa665bf364e061bcc5824b27fc1c1->enter($__internal_fbec4070f84ce5867686af777a2b266984cfa665bf364e061bcc5824b27fc1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t</head>
\t<body>
\t
\t";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "\t
\t</body>
</html>";
        
        $__internal_fbec4070f84ce5867686af777a2b266984cfa665bf364e061bcc5824b27fc1c1->leave($__internal_fbec4070f84ce5867686af777a2b266984cfa665bf364e061bcc5824b27fc1c1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1884743e36fb89ec6e77bb460bb5598d8f2e6e05b01969826f74e7ad9426bd0b = $this->env->getExtension("native_profiler");
        $__internal_1884743e36fb89ec6e77bb460bb5598d8f2e6e05b01969826f74e7ad9426bd0b->enter($__internal_1884743e36fb89ec6e77bb460bb5598d8f2e6e05b01969826f74e7ad9426bd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_1884743e36fb89ec6e77bb460bb5598d8f2e6e05b01969826f74e7ad9426bd0b->leave($__internal_1884743e36fb89ec6e77bb460bb5598d8f2e6e05b01969826f74e7ad9426bd0b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3965dbb8530a40b31591b0534194be209a224d3a22c6ab6c0ac89fd2c76917b = $this->env->getExtension("native_profiler");
        $__internal_e3965dbb8530a40b31591b0534194be209a224d3a22c6ab6c0ac89fd2c76917b->enter($__internal_e3965dbb8530a40b31591b0534194be209a224d3a22c6ab6c0ac89fd2c76917b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        
        $__internal_e3965dbb8530a40b31591b0534194be209a224d3a22c6ab6c0ac89fd2c76917b->leave($__internal_e3965dbb8530a40b31591b0534194be209a224d3a22c6ab6c0ac89fd2c76917b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  60 => 9,  48 => 5,  39 => 11,  37 => 9,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/* 		<title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* 	</head>*/
/* 	<body>*/
/* 	*/
/* 	{% block body %}*/
/* 	{% endblock %}*/
/* 	*/
/* 	</body>*/
/* </html>*/
