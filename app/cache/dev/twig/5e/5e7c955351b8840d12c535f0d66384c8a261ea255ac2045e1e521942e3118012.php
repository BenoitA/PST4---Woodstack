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
        $__internal_e66c2cd7e8843bcebc1f85779b1ada7acf105dac9357a45b2f667bef2139c728 = $this->env->getExtension("native_profiler");
        $__internal_e66c2cd7e8843bcebc1f85779b1ada7acf105dac9357a45b2f667bef2139c728->enter($__internal_e66c2cd7e8843bcebc1f85779b1ada7acf105dac9357a45b2f667bef2139c728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:layout.html.twig"));

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
        
        $__internal_e66c2cd7e8843bcebc1f85779b1ada7acf105dac9357a45b2f667bef2139c728->leave($__internal_e66c2cd7e8843bcebc1f85779b1ada7acf105dac9357a45b2f667bef2139c728_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bf39bfb4434d25c4abc8bb5926bd733ce382ec8809ade8020cc0076d4c375d3 = $this->env->getExtension("native_profiler");
        $__internal_0bf39bfb4434d25c4abc8bb5926bd733ce382ec8809ade8020cc0076d4c375d3->enter($__internal_0bf39bfb4434d25c4abc8bb5926bd733ce382ec8809ade8020cc0076d4c375d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_0bf39bfb4434d25c4abc8bb5926bd733ce382ec8809ade8020cc0076d4c375d3->leave($__internal_0bf39bfb4434d25c4abc8bb5926bd733ce382ec8809ade8020cc0076d4c375d3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ce2809a2855879d5af1b1bd19f3b0a5ce46ef11b4ba00ff012a1dc61c3004ee = $this->env->getExtension("native_profiler");
        $__internal_0ce2809a2855879d5af1b1bd19f3b0a5ce46ef11b4ba00ff012a1dc61c3004ee->enter($__internal_0ce2809a2855879d5af1b1bd19f3b0a5ce46ef11b4ba00ff012a1dc61c3004ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t";
        
        $__internal_0ce2809a2855879d5af1b1bd19f3b0a5ce46ef11b4ba00ff012a1dc61c3004ee->leave($__internal_0ce2809a2855879d5af1b1bd19f3b0a5ce46ef11b4ba00ff012a1dc61c3004ee_prof);

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
