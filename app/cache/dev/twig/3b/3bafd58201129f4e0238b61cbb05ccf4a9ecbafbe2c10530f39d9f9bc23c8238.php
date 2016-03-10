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
        $__internal_94f1754988de3bc42c14c9733c7947f914c4064a826a22f913aa6201371d8dbc = $this->env->getExtension("native_profiler");
        $__internal_94f1754988de3bc42c14c9733c7947f914c4064a826a22f913aa6201371d8dbc->enter($__internal_94f1754988de3bc42c14c9733c7947f914c4064a826a22f913aa6201371d8dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_94f1754988de3bc42c14c9733c7947f914c4064a826a22f913aa6201371d8dbc->leave($__internal_94f1754988de3bc42c14c9733c7947f914c4064a826a22f913aa6201371d8dbc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_952f28e4b8fefd894a35693427a5947db0e85821a031777d9d8b43ffcaa2bb7b = $this->env->getExtension("native_profiler");
        $__internal_952f28e4b8fefd894a35693427a5947db0e85821a031777d9d8b43ffcaa2bb7b->enter($__internal_952f28e4b8fefd894a35693427a5947db0e85821a031777d9d8b43ffcaa2bb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_952f28e4b8fefd894a35693427a5947db0e85821a031777d9d8b43ffcaa2bb7b->leave($__internal_952f28e4b8fefd894a35693427a5947db0e85821a031777d9d8b43ffcaa2bb7b_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98de30669feeec315b83a86f6c8bae42b5697d73dae05dc3840f2811538c67ef = $this->env->getExtension("native_profiler");
        $__internal_98de30669feeec315b83a86f6c8bae42b5697d73dae05dc3840f2811538c67ef->enter($__internal_98de30669feeec315b83a86f6c8bae42b5697d73dae05dc3840f2811538c67ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_98de30669feeec315b83a86f6c8bae42b5697d73dae05dc3840f2811538c67ef->leave($__internal_98de30669feeec315b83a86f6c8bae42b5697d73dae05dc3840f2811538c67ef_prof);

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
