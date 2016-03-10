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
        $__internal_4786365d82b19f2fcb9c34d93594d39e4938dcbc26006a33d4dab148ddd64de4 = $this->env->getExtension("native_profiler");
        $__internal_4786365d82b19f2fcb9c34d93594d39e4938dcbc26006a33d4dab148ddd64de4->enter($__internal_4786365d82b19f2fcb9c34d93594d39e4938dcbc26006a33d4dab148ddd64de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:layout.html.twig"));

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
        
        $__internal_4786365d82b19f2fcb9c34d93594d39e4938dcbc26006a33d4dab148ddd64de4->leave($__internal_4786365d82b19f2fcb9c34d93594d39e4938dcbc26006a33d4dab148ddd64de4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_95bb3c2f437f80a6aaa7f47492d877667768d73180658296f38a1e4a4f8502e3 = $this->env->getExtension("native_profiler");
        $__internal_95bb3c2f437f80a6aaa7f47492d877667768d73180658296f38a1e4a4f8502e3->enter($__internal_95bb3c2f437f80a6aaa7f47492d877667768d73180658296f38a1e4a4f8502e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_95bb3c2f437f80a6aaa7f47492d877667768d73180658296f38a1e4a4f8502e3->leave($__internal_95bb3c2f437f80a6aaa7f47492d877667768d73180658296f38a1e4a4f8502e3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9c67163d4c00b5aa0039af05b1235a5878635bc2daf5f9135bbbe94ea83d061 = $this->env->getExtension("native_profiler");
        $__internal_e9c67163d4c00b5aa0039af05b1235a5878635bc2daf5f9135bbbe94ea83d061->enter($__internal_e9c67163d4c00b5aa0039af05b1235a5878635bc2daf5f9135bbbe94ea83d061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        
        $__internal_e9c67163d4c00b5aa0039af05b1235a5878635bc2daf5f9135bbbe94ea83d061->leave($__internal_e9c67163d4c00b5aa0039af05b1235a5878635bc2daf5f9135bbbe94ea83d061_prof);

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
