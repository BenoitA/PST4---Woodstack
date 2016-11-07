<?php

/* OCPlatformBundle:Advert:layout.html.twig */
class __TwigTemplate_af859f83076859b98b8fe480a2ec926d8a9a39648db18ea7f2434396d6191b3e extends Twig_Template
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
        $__internal_d58a1756be3968ccc47e4371011c41dd1a9b7ae3fb50d8f4d4f477d0a75a4ef2 = $this->env->getExtension("native_profiler");
        $__internal_d58a1756be3968ccc47e4371011c41dd1a9b7ae3fb50d8f4d4f477d0a75a4ef2->enter($__internal_d58a1756be3968ccc47e4371011c41dd1a9b7ae3fb50d8f4d4f477d0a75a4ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:layout.html.twig"));

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
        
        $__internal_d58a1756be3968ccc47e4371011c41dd1a9b7ae3fb50d8f4d4f477d0a75a4ef2->leave($__internal_d58a1756be3968ccc47e4371011c41dd1a9b7ae3fb50d8f4d4f477d0a75a4ef2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dec28734f8d4bc448b3f8395816921a14548e7c09eabe5d5034d8c10dc421660 = $this->env->getExtension("native_profiler");
        $__internal_dec28734f8d4bc448b3f8395816921a14548e7c09eabe5d5034d8c10dc421660->enter($__internal_dec28734f8d4bc448b3f8395816921a14548e7c09eabe5d5034d8c10dc421660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_dec28734f8d4bc448b3f8395816921a14548e7c09eabe5d5034d8c10dc421660->leave($__internal_dec28734f8d4bc448b3f8395816921a14548e7c09eabe5d5034d8c10dc421660_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eba169e5b5f045253d578bf210b5b4dc9ede9a8af9e672fb3471f9032d452bbe = $this->env->getExtension("native_profiler");
        $__internal_eba169e5b5f045253d578bf210b5b4dc9ede9a8af9e672fb3471f9032d452bbe->enter($__internal_eba169e5b5f045253d578bf210b5b4dc9ede9a8af9e672fb3471f9032d452bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        
        $__internal_eba169e5b5f045253d578bf210b5b4dc9ede9a8af9e672fb3471f9032d452bbe->leave($__internal_eba169e5b5f045253d578bf210b5b4dc9ede9a8af9e672fb3471f9032d452bbe_prof);

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
