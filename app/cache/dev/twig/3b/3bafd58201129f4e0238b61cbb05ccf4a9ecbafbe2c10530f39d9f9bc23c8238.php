<?php

/* ::layout.html.twig */
class __TwigTemplate_076d690314bee98b6a38ca2b290904d333c08ac6c473f27a56eb0a1e2aaa1fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2cfcc74847a74d41e6ce5ad3609b2f8fe6007bdaad5faf015b45660a7802082 = $this->env->getExtension("native_profiler");
        $__internal_f2cfcc74847a74d41e6ce5ad3609b2f8fe6007bdaad5faf015b45660a7802082->enter($__internal_f2cfcc74847a74d41e6ce5ad3609b2f8fe6007bdaad5faf015b45660a7802082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
</body>
</html>\t\t\t\t
";
        
        $__internal_f2cfcc74847a74d41e6ce5ad3609b2f8fe6007bdaad5faf015b45660a7802082->leave($__internal_f2cfcc74847a74d41e6ce5ad3609b2f8fe6007bdaad5faf015b45660a7802082_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d185c133b25a3a2d2fc72cd1db0a5671e6575a590e022e96f7d63cb771b1339 = $this->env->getExtension("native_profiler");
        $__internal_3d185c133b25a3a2d2fc72cd1db0a5671e6575a590e022e96f7d63cb771b1339->enter($__internal_3d185c133b25a3a2d2fc72cd1db0a5671e6575a590e022e96f7d63cb771b1339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_3d185c133b25a3a2d2fc72cd1db0a5671e6575a590e022e96f7d63cb771b1339->leave($__internal_3d185c133b25a3a2d2fc72cd1db0a5671e6575a590e022e96f7d63cb771b1339_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8917761abcc790aaef349e73c51f17b1d41701ccc8761b3fec73b5d6a99ad819 = $this->env->getExtension("native_profiler");
        $__internal_8917761abcc790aaef349e73c51f17b1d41701ccc8761b3fec73b5d6a99ad819->enter($__internal_8917761abcc790aaef349e73c51f17b1d41701ccc8761b3fec73b5d6a99ad819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_8917761abcc790aaef349e73c51f17b1d41701ccc8761b3fec73b5d6a99ad819->leave($__internal_8917761abcc790aaef349e73c51f17b1d41701ccc8761b3fec73b5d6a99ad819_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  69 => 10,  63 => 9,  51 => 7,  39 => 14,  37 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	*/
/* 	<title>{% block title %} {% endblock %}</title>*/
/* 	*/
/* 	{% block stylesheets %}*/
/* 		{# On charge le css de bootstrap depuis le site directement #}*/
/* 		<link rel="stylesheet"*/
/* 		href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* 	{% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* </body>*/
/* </html>				*/
/* */
