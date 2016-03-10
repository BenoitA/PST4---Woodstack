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
        $__internal_a0ba8636d6f98b25fa55da2221075887b2384be30c2f690658e9b79dc646c0f6 = $this->env->getExtension("native_profiler");
        $__internal_a0ba8636d6f98b25fa55da2221075887b2384be30c2f690658e9b79dc646c0f6->enter($__internal_a0ba8636d6f98b25fa55da2221075887b2384be30c2f690658e9b79dc646c0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:layout.html.twig"));

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
        
        $__internal_a0ba8636d6f98b25fa55da2221075887b2384be30c2f690658e9b79dc646c0f6->leave($__internal_a0ba8636d6f98b25fa55da2221075887b2384be30c2f690658e9b79dc646c0f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_83f8428bf2872593d8a28d7a5e089e2d17559f1bf5a4f8bd268ba5cc38b7ec91 = $this->env->getExtension("native_profiler");
        $__internal_83f8428bf2872593d8a28d7a5e089e2d17559f1bf5a4f8bd268ba5cc38b7ec91->enter($__internal_83f8428bf2872593d8a28d7a5e089e2d17559f1bf5a4f8bd268ba5cc38b7ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_83f8428bf2872593d8a28d7a5e089e2d17559f1bf5a4f8bd268ba5cc38b7ec91->leave($__internal_83f8428bf2872593d8a28d7a5e089e2d17559f1bf5a4f8bd268ba5cc38b7ec91_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c4e3bdc6f84518a8be035420e4e17f7d8d930063ce48bb26c23be96573b13fe = $this->env->getExtension("native_profiler");
        $__internal_1c4e3bdc6f84518a8be035420e4e17f7d8d930063ce48bb26c23be96573b13fe->enter($__internal_1c4e3bdc6f84518a8be035420e4e17f7d8d930063ce48bb26c23be96573b13fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        
        $__internal_1c4e3bdc6f84518a8be035420e4e17f7d8d930063ce48bb26c23be96573b13fe->leave($__internal_1c4e3bdc6f84518a8be035420e4e17f7d8d930063ce48bb26c23be96573b13fe_prof);

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
