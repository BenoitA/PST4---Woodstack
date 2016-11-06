<?php

/* ::layout.html.twig */
class __TwigTemplate_1988d2e9613e038ea570038f5c486bf029194b1e31e1bfdc19963efe8af5a4f7 extends Twig_Template
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
        $__internal_7a3ed36b43230564c42b6b41736b34db4cb7597dff5c159a520c1beb2305471b = $this->env->getExtension("native_profiler");
        $__internal_7a3ed36b43230564c42b6b41736b34db4cb7597dff5c159a520c1beb2305471b->enter($__internal_7a3ed36b43230564c42b6b41736b34db4cb7597dff5c159a520c1beb2305471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_7a3ed36b43230564c42b6b41736b34db4cb7597dff5c159a520c1beb2305471b->leave($__internal_7a3ed36b43230564c42b6b41736b34db4cb7597dff5c159a520c1beb2305471b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a40444b985c0059f631ee62a7e6356d3d9ff141af338fd363d241fc9da4f0898 = $this->env->getExtension("native_profiler");
        $__internal_a40444b985c0059f631ee62a7e6356d3d9ff141af338fd363d241fc9da4f0898->enter($__internal_a40444b985c0059f631ee62a7e6356d3d9ff141af338fd363d241fc9da4f0898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_a40444b985c0059f631ee62a7e6356d3d9ff141af338fd363d241fc9da4f0898->leave($__internal_a40444b985c0059f631ee62a7e6356d3d9ff141af338fd363d241fc9da4f0898_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a8d4facca5273946584fa6123f42d8835c5ad22791acd889a569deace3259b7a = $this->env->getExtension("native_profiler");
        $__internal_a8d4facca5273946584fa6123f42d8835c5ad22791acd889a569deace3259b7a->enter($__internal_a8d4facca5273946584fa6123f42d8835c5ad22791acd889a569deace3259b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_a8d4facca5273946584fa6123f42d8835c5ad22791acd889a569deace3259b7a->leave($__internal_a8d4facca5273946584fa6123f42d8835c5ad22791acd889a569deace3259b7a_prof);

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
