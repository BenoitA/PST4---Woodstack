<?php

/* WSWoodstackBundle::layout.html.twig */
class __TwigTemplate_1777012592e350226edc26d7e2978de7abcb74facc730c3dc4b88b095088db90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5b87571ec1430e4569a5094e960449c98a1a73d9e95cea66395094a07ec5d57 = $this->env->getExtension("native_profiler");
        $__internal_b5b87571ec1430e4569a5094e960449c98a1a73d9e95cea66395094a07ec5d57->enter($__internal_b5b87571ec1430e4569a5094e960449c98a1a73d9e95cea66395094a07ec5d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  
</head>

<body style=\"padding-top: 70px;\">
\t
\t";
        // line 20
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "\t
\t<nav class=\"navbar navbar-fixed-top navbar-inverse\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">WoodStack</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_register");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> S'enregistrer</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_login");
            echo "\"><span class=\"glyphicon glyphicon-log-in\"> Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        } else {
            // line 46
            echo "\t\t<nav class=\"navbar navbar-fixed-top navbar-inverse\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">WoodStack</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_client");
            echo "\">Ajouts clients</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_navbar");
            echo "\">Profile client</a></li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span>Mon profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\"></span>Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t
    \t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        }
        // line 75
        echo "\t

  <div class=\"container\"> 
  
\t<div class=\"col-xs-12 col-sm-9\" style=\"text-align:center\" >
\t\t<div id=\"header\" class=\"jumbotron\" style=\"background:lightgreen\">
\t\t\t<h1 align=\"center\">WoodStack</h1>
\t\t\t<p>
\t\t\t\tMa plateforme de gestion <br />
\t\t\t\t<I>(Ce projet est dans le cadre des PST4 de l'ESIEA)</I>
\t\t\t</p>
      
\t\t</div>
\t</div>\t
   </div>
   
   <div class=\"container\">
   <div class=\"row\" style=\"left:50em\">


\t\t\t<div id=\"content\" class=\"col-md-9\" >
\t\t\t\t
\t\t\t\t";
        // line 97
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 98
            echo "\t\t\t\t\tBienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<br />
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t
\t\t\t\t";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 110
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 112
        echo "\t\t\t</div>
\t\t\t
\t\t\t
\t</div>
\t<hr>
\t\t<footer style=\"text-align:center\">
\t\t\t<p>Auffret - Glaisner - Nurit</p>
\t\t</footer>
  ";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 126
        echo "</body>
</html>
";
        
        $__internal_b5b87571ec1430e4569a5094e960449c98a1a73d9e95cea66395094a07ec5d57->leave($__internal_b5b87571ec1430e4569a5094e960449c98a1a73d9e95cea66395094a07ec5d57_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_6127e9f5aad17fdb7776a50571c88fbd9bfe8de7ae702a0786f18a3e70a0f794 = $this->env->getExtension("native_profiler");
        $__internal_6127e9f5aad17fdb7776a50571c88fbd9bfe8de7ae702a0786f18a3e70a0f794->enter($__internal_6127e9f5aad17fdb7776a50571c88fbd9bfe8de7ae702a0786f18a3e70a0f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WoodStack";
        
        $__internal_6127e9f5aad17fdb7776a50571c88fbd9bfe8de7ae702a0786f18a3e70a0f794->leave($__internal_6127e9f5aad17fdb7776a50571c88fbd9bfe8de7ae702a0786f18a3e70a0f794_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_02523360cbefd2b6a61307aa630a8d97cd30586da8ff71fa262791940e5fc0f2 = $this->env->getExtension("native_profiler");
        $__internal_02523360cbefd2b6a61307aa630a8d97cd30586da8ff71fa262791940e5fc0f2->enter($__internal_02523360cbefd2b6a61307aa630a8d97cd30586da8ff71fa262791940e5fc0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"/Symfony/PST4---Woodstack/web/css/bootstrap.min.css\">
  ";
        
        $__internal_02523360cbefd2b6a61307aa630a8d97cd30586da8ff71fa262791940e5fc0f2->leave($__internal_02523360cbefd2b6a61307aa630a8d97cd30586da8ff71fa262791940e5fc0f2_prof);

    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
        $__internal_5876191d3f3bba8bd114f2ce148c6b980f4fefbbe561666794e4c0a10991b95d = $this->env->getExtension("native_profiler");
        $__internal_5876191d3f3bba8bd114f2ce148c6b980f4fefbbe561666794e4c0a10991b95d->enter($__internal_5876191d3f3bba8bd114f2ce148c6b980f4fefbbe561666794e4c0a10991b95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "\t\t\t\t\t
\t\t\t\t";
        
        $__internal_5876191d3f3bba8bd114f2ce148c6b980f4fefbbe561666794e4c0a10991b95d->leave($__internal_5876191d3f3bba8bd114f2ce148c6b980f4fefbbe561666794e4c0a10991b95d_prof);

    }

    // line 110
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b3e36f339fbcc63d8d847b480e7d82b193733ccd777ade249cead9521bc20d7 = $this->env->getExtension("native_profiler");
        $__internal_4b3e36f339fbcc63d8d847b480e7d82b193733ccd777ade249cead9521bc20d7->enter($__internal_4b3e36f339fbcc63d8d847b480e7d82b193733ccd777ade249cead9521bc20d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 111
        echo "\t\t\t\t";
        
        $__internal_4b3e36f339fbcc63d8d847b480e7d82b193733ccd777ade249cead9521bc20d7->leave($__internal_4b3e36f339fbcc63d8d847b480e7d82b193733ccd777ade249cead9521bc20d7_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4930a4083111eb429162d18e8b68d4aa66e626095a66fbd675ced88560fcc99 = $this->env->getExtension("native_profiler");
        $__internal_e4930a4083111eb429162d18e8b68d4aa66e626095a66fbd675ced88560fcc99->enter($__internal_e4930a4083111eb429162d18e8b68d4aa66e626095a66fbd675ced88560fcc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "\t";
        // line 123
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"/Symfony/PST4---Woodstack/web/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_e4930a4083111eb429162d18e8b68d4aa66e626095a66fbd675ced88560fcc99->leave($__internal_e4930a4083111eb429162d18e8b68d4aa66e626095a66fbd675ced88560fcc99_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 123,  263 => 121,  257 => 120,  250 => 111,  244 => 110,  236 => 105,  230 => 104,  222 => 13,  220 => 12,  214 => 11,  202 => 9,  193 => 126,  191 => 120,  181 => 112,  179 => 110,  174 => 107,  172 => 104,  169 => 103,  160 => 98,  158 => 97,  134 => 75,  123 => 67,  118 => 65,  111 => 61,  107 => 60,  99 => 55,  88 => 46,  77 => 38,  72 => 36,  64 => 31,  52 => 21,  50 => 20,  43 => 15,  41 => 11,  36 => 9,  27 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}WoodStack{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="/Symfony/PST4---Woodstack/web/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/*   */
/* </head>*/
/* */
/* <body style="padding-top: 70px;">*/
/* 	*/
/* 	{% if not is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 	*/
/* 	<nav class="navbar navbar-fixed-top navbar-inverse">*/
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 					<span class="sr-only">Toggle navigation</span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* 				<a class="navbar-brand" href="{{ path('ws_woodstack_home') }}">WoodStack</a>*/
/* 				</div>*/
/* 				<div id="navbar" class="collapse navbar-collapse">*/
/* 					*/
/* 					<ul class="nav navbar-nav navbar-right">*/
/* 						<li><a href="{{ path('ws_woodstack_register') }}"><span class="glyphicon glyphicon-user"></span> S'enregistrer</a>*/
/* 						</li>*/
/* 						<li><a href="{{ path('ws_woodstack_login') }}"><span class="glyphicon glyphicon-log-in"> Connexion</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				*/
/* 				</div>*/
/* 			</div>*/
/* 		</nav>*/
/* 		{% else %}*/
/* 		<nav class="navbar navbar-fixed-top navbar-inverse">*/
/* 		<div class="container">*/
/* 			<div class="navbar-header">*/
/* 				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 					<span class="sr-only">Toggle navigation</span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* 				<a class="navbar-brand" href="{{ path('ws_woodstack_home') }}">WoodStack</a>*/
/* 				</div>*/
/* 				<div id="navbar" class="collapse navbar-collapse">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li class="active">*/
/* 							<li><a href="{{ path('ws_woodstack_client') }}">Ajouts clients</a></li>*/
/* 							<li><a href="{{ path('ws_woodstack_navbar') }}">Profile client</a></li>*/
/* 						</li>*/
/* 					</ul>*/
/* 					<ul class="nav navbar-nav navbar-right">*/
/* 						<li><a href="{{ path('fos_user_profile_show') }}"><span class="glyphicon glyphicon-user"></span>Mon profil</a>*/
/* 						</li>*/
/* 						<li><a href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-log-out"></span>Déconnexion</a>*/
/* 						</li>*/
/* 					*/
/*     					*/
/* 				</div>*/
/* 			</div>*/
/* 		</nav>*/
/* 		{% endif %}*/
/* 	*/
/* */
/*   <div class="container"> */
/*   */
/* 	<div class="col-xs-12 col-sm-9" style="text-align:center" >*/
/* 		<div id="header" class="jumbotron" style="background:lightgreen">*/
/* 			<h1 align="center">WoodStack</h1>*/
/* 			<p>*/
/* 				Ma plateforme de gestion <br />*/
/* 				<I>(Ce projet est dans le cadre des PST4 de l'ESIEA)</I>*/
/* 			</p>*/
/*       */
/* 		</div>*/
/* 	</div>	*/
/*    </div>*/
/*    */
/*    <div class="container">*/
/*    <div class="row" style="left:50em">*/
/* */
/* */
/* 			<div id="content" class="col-md-9" >*/
/* 				*/
/* 				{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 					Bienvenue {{ app.user.username }}<br />*/
/* 					*/
/* 					*/
/* 					*/
/* 				{% endif %}*/
/* 				*/
/* 				{% block body %}*/
/* 					*/
/* 				{% endblock %}*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-md-9">*/
/* 				{% block fos_user_content %}*/
/* 				{% endblock fos_user_content %}*/
/* 			</div>*/
/* 			*/
/* 			*/
/* 	</div>*/
/* 	<hr>*/
/* 		<footer style="text-align:center">*/
/* 			<p>Auffret - Glaisner - Nurit</p>*/
/* 		</footer>*/
/*   {% block javascripts %}*/
/* 	{# Ajouter ces lignes javascript pour utiliser des fonctionnalités*/
/* 	de bootstrap twitter #}*/
/* 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* 		<script src="/Symfony/PST4---Woodstack/web/js/bootstrap.min.js"></script>*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
