<?php

/* ::layout.html.twig */
class __TwigTemplate_ceaef77cefbc9235a95cfb14c2a36f3b2c052bb784430c847588413a7c7add41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
\t<div class=\"container\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1>WoodStack</h1>
\t\t\t<p>
\t\t\t\tGestionnaire de client. Pour toute aide, cliquez
\t\t\t\tsur le lien Benoit t'est nul !
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a class=\"btn btn-primary btn-lg\"
\t\t\t\thref=\"https://www.youtube.com/watch?v=Qe9sIwn12OQ\">
\t\t\t\tClique là batard !
\t\t\t\t</a>
\t\t\t</p>
\t\t</div>
\t\t
\t\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Les annonces</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Se connecter</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Benoit t'est nul !</a></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<h4>Dernières annonces</h4>
\t\t\t\t";
        // line 42
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t\t<hr>
\t\t
\t\t<footer>
\t\t\t<p>On est en ";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". Fait par Beubeu, Glaisnouille, et le Nul ! Bande de con !</p>
\t\t</footer>
\t</div>
\t
\t";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "</body>
</html>\t\t\t\t";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t\t";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "\t";
        // line 60
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 60,  134 => 58,  131 => 57,  127 => 46,  124 => 45,  118 => 11,  116 => 10,  113 => 9,  107 => 7,  102 => 63,  100 => 57,  93 => 53,  85 => 47,  83 => 45,  77 => 42,  70 => 38,  66 => 37,  62 => 36,  38 => 14,  36 => 9,  31 => 7,  23 => 1,);
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
/* 	<div class="container">*/
/* 		<div id="header" class="jumbotron">*/
/* 			<h1>WoodStack</h1>*/
/* 			<p>*/
/* 				Gestionnaire de client. Pour toute aide, cliquez*/
/* 				sur le lien Benoit t'est nul !*/
/* 			</p>*/
/* 			<p>*/
/* 				<a class="btn btn-primary btn-lg"*/
/* 				href="https://www.youtube.com/watch?v=Qe9sIwn12OQ">*/
/* 				Clique là batard !*/
/* 				</a>*/
/* 			</p>*/
/* 		</div>*/
/* 		*/
/* 		<div class="row">*/
/* 			<div id="menu" class="col-md-3">*/
/* 				<h3>Les annonces</h3>*/
/* 				<ul class="nav nav-pills nav-stacked">*/
/* 					<li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/* 					<li><a href="{{ path('oc_platform_add') }}">Se connecter</a></li>*/
/* 					<li><a href="{{ path('oc_platform_add') }}">Benoit t'est nul !</a></li>*/
/* 				</ul>*/
/* 				*/
/* 				<h4>Dernières annonces</h4>*/
/* 				{{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/* 			</div>*/
/* 			<div id="content" class="col-md-9">*/
/* 				{% block body %}*/
/* 				{% endblock %}*/
/* 			</div>*/
/* 		</div>*/
/* 		*/
/* 		<hr>*/
/* 		*/
/* 		<footer>*/
/* 			<p>On est en {{ 'now'|date('Y') }}. Fait par Beubeu, Glaisnouille, et le Nul ! Bande de con !</p>*/
/* 		</footer>*/
/* 	</div>*/
/* 	*/
/* 	{% block javascripts %}*/
/* 	{# Ajouter ces lignes javascript pour utiliser des fonctionnalités*/
/* 	de bootstrap twitter #}*/
/* 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* 		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>				*/
