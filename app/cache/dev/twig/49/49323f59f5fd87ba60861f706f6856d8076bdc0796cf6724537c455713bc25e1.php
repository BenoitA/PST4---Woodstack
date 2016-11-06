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
        $__internal_a6a3d9faaae41e85b8146df158794b8f89971c5f48c215ad7091e1975f5ebac1 = $this->env->getExtension("native_profiler");
        $__internal_a6a3d9faaae41e85b8146df158794b8f89971c5f48c215ad7091e1975f5ebac1->enter($__internal_a6a3d9faaae41e85b8146df158794b8f89971c5f48c215ad7091e1975f5ebac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:layout.html.twig"));

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
        
        $__internal_a6a3d9faaae41e85b8146df158794b8f89971c5f48c215ad7091e1975f5ebac1->leave($__internal_a6a3d9faaae41e85b8146df158794b8f89971c5f48c215ad7091e1975f5ebac1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e1aa8377fbd252d8b53a364065b825249d3bbb6f02bd538db425d653f8eceba = $this->env->getExtension("native_profiler");
        $__internal_3e1aa8377fbd252d8b53a364065b825249d3bbb6f02bd538db425d653f8eceba->enter($__internal_3e1aa8377fbd252d8b53a364065b825249d3bbb6f02bd538db425d653f8eceba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_3e1aa8377fbd252d8b53a364065b825249d3bbb6f02bd538db425d653f8eceba->leave($__internal_3e1aa8377fbd252d8b53a364065b825249d3bbb6f02bd538db425d653f8eceba_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_374fe5c7244604e25310b6de366c290f2f01f7b2ee8820b8cfd48569b9e743ec = $this->env->getExtension("native_profiler");
        $__internal_374fe5c7244604e25310b6de366c290f2f01f7b2ee8820b8cfd48569b9e743ec->enter($__internal_374fe5c7244604e25310b6de366c290f2f01f7b2ee8820b8cfd48569b9e743ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        
        $__internal_374fe5c7244604e25310b6de366c290f2f01f7b2ee8820b8cfd48569b9e743ec->leave($__internal_374fe5c7244604e25310b6de366c290f2f01f7b2ee8820b8cfd48569b9e743ec_prof);

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
