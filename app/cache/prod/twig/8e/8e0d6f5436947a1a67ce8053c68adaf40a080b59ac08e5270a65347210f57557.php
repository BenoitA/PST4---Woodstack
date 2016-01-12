<?php

/* OCPlatformBundle:Advert:layout.html.twig */
class __TwigTemplate_532addc56b5164f04563c2b2befc0da5c1f9baa033652427401d265ed05d34fe extends Twig_Template
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "OC Plateforme";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  48 => 9,  42 => 5,  36 => 11,  34 => 9,  27 => 5,  21 => 1,);
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
