<?php

/* WSWoodstackBundle::layout.html.twig */
class __TwigTemplate_80d89516b423f7471cb932797deca7820b9da77ae791cbf9d26aa8ef0b8a6c37 extends Twig_Template
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
        $__internal_405b14991bd1dc17909f40c674326909c29cc9ff04a76d62d01905a1dbecda9a = $this->env->getExtension("native_profiler");
        $__internal_405b14991bd1dc17909f40c674326909c29cc9ff04a76d62d01905a1dbecda9a->enter($__internal_405b14991bd1dc17909f40c674326909c29cc9ff04a76d62d01905a1dbecda9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle::layout.html.twig"));

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
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_register");
            echo "\">S'enregistrer</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        } else {
            // line 47
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
            // line 56
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">WoodStack</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        }
        // line 72
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
\t\t";
        // line 90
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 91
            echo "\t\t\t<div id=\"menu\" class=\"col-md-2\">
\t\t\t\t<h3>Menu</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" >
\t\t\t\t\t<li><a href=\"";
            // line 94
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Edition profil</a></li>
\t\t\t\t\t<li><a href=\"#\">Clients</a></li>
\t\t\t\t\t<li><a href=\"#\">????</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 100
        echo "
\t\t\t<div id=\"content\" class=\"col-md-9\" >
\t\t\t\t
\t\t\t\t";
        // line 103
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 104
            echo "\t\t\t\t\tBienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<br />
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t
\t\t\t\t";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 116
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 118
        echo "\t\t\t</div>
\t\t\t
\t\t\t
\t</div>
\t<hr>
\t\t<footer style=\"text-align:center\">
\t\t\t<p>Auffret - Glaisner - Nurit</p>
\t\t</footer>
  ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 132
        echo "</body>
</html>
";
        
        $__internal_405b14991bd1dc17909f40c674326909c29cc9ff04a76d62d01905a1dbecda9a->leave($__internal_405b14991bd1dc17909f40c674326909c29cc9ff04a76d62d01905a1dbecda9a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_396860144a52c6e7b7dde064ac0b9c4aab638204ca42b0b3c1c050ba9d24bf1f = $this->env->getExtension("native_profiler");
        $__internal_396860144a52c6e7b7dde064ac0b9c4aab638204ca42b0b3c1c050ba9d24bf1f->enter($__internal_396860144a52c6e7b7dde064ac0b9c4aab638204ca42b0b3c1c050ba9d24bf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WoodStack";
        
        $__internal_396860144a52c6e7b7dde064ac0b9c4aab638204ca42b0b3c1c050ba9d24bf1f->leave($__internal_396860144a52c6e7b7dde064ac0b9c4aab638204ca42b0b3c1c050ba9d24bf1f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c58b24c51ce904225c472533b72f5b1a724a3817b5d75f3b8d8046ce58da446c = $this->env->getExtension("native_profiler");
        $__internal_c58b24c51ce904225c472533b72f5b1a724a3817b5d75f3b8d8046ce58da446c->enter($__internal_c58b24c51ce904225c472533b72f5b1a724a3817b5d75f3b8d8046ce58da446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"/Symfony/PST4---Woodstack/web/css/bootstrap.min.css\">
  ";
        
        $__internal_c58b24c51ce904225c472533b72f5b1a724a3817b5d75f3b8d8046ce58da446c->leave($__internal_c58b24c51ce904225c472533b72f5b1a724a3817b5d75f3b8d8046ce58da446c_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_84df2129e9c9d452656b34337661c49ad6523cd7e1795c4362f4a8ac5f49dd55 = $this->env->getExtension("native_profiler");
        $__internal_84df2129e9c9d452656b34337661c49ad6523cd7e1795c4362f4a8ac5f49dd55->enter($__internal_84df2129e9c9d452656b34337661c49ad6523cd7e1795c4362f4a8ac5f49dd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 111
        echo "\t\t\t\t\t
\t\t\t\t";
        
        $__internal_84df2129e9c9d452656b34337661c49ad6523cd7e1795c4362f4a8ac5f49dd55->leave($__internal_84df2129e9c9d452656b34337661c49ad6523cd7e1795c4362f4a8ac5f49dd55_prof);

    }

    // line 116
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fe2083c59cd186513e95297f94b545fb1bdd4ea2c8b9372e98cb1af80a90df1 = $this->env->getExtension("native_profiler");
        $__internal_9fe2083c59cd186513e95297f94b545fb1bdd4ea2c8b9372e98cb1af80a90df1->enter($__internal_9fe2083c59cd186513e95297f94b545fb1bdd4ea2c8b9372e98cb1af80a90df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 117
        echo "\t\t\t\t";
        
        $__internal_9fe2083c59cd186513e95297f94b545fb1bdd4ea2c8b9372e98cb1af80a90df1->leave($__internal_9fe2083c59cd186513e95297f94b545fb1bdd4ea2c8b9372e98cb1af80a90df1_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6a4ac05cf565cf57ee6595740ac9bb1ed05f4905a4e710ade5aaad5b5c6029e = $this->env->getExtension("native_profiler");
        $__internal_e6a4ac05cf565cf57ee6595740ac9bb1ed05f4905a4e710ade5aaad5b5c6029e->enter($__internal_e6a4ac05cf565cf57ee6595740ac9bb1ed05f4905a4e710ade5aaad5b5c6029e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "\t";
        // line 129
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"/Symfony/PST4---Woodstack/web/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_e6a4ac05cf565cf57ee6595740ac9bb1ed05f4905a4e710ade5aaad5b5c6029e->leave($__internal_e6a4ac05cf565cf57ee6595740ac9bb1ed05f4905a4e710ade5aaad5b5c6029e_prof);

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
        return array (  279 => 129,  277 => 127,  271 => 126,  264 => 117,  258 => 116,  250 => 111,  244 => 110,  236 => 13,  234 => 12,  228 => 11,  216 => 9,  207 => 132,  205 => 126,  195 => 118,  193 => 116,  188 => 113,  186 => 110,  183 => 109,  174 => 104,  172 => 103,  167 => 100,  158 => 94,  153 => 91,  151 => 90,  131 => 72,  121 => 65,  116 => 63,  111 => 61,  103 => 56,  92 => 47,  82 => 40,  77 => 38,  72 => 36,  64 => 31,  52 => 21,  50 => 20,  43 => 15,  41 => 11,  36 => 9,  27 => 2,);
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
/* 					<ul class="nav navbar-nav">*/
/* 						<li class="active">*/
/* 							<a href="{{ path('ws_woodstack_home') }}">Accueil</a>*/
/* 						</li>*/
/* 						<li><a href="{{ path('ws_woodstack_register') }}">S'enregistrer</a>*/
/* 						</li>*/
/* 						<li><a href="{{ path('ws_woodstack_login') }}">Connexion</a>*/
/* 						</li>*/
/* 					</ul>*/
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
/* 							<a href="{{ path('ws_woodstack_home') }}">Accueil</a>*/
/* 						</li>*/
/* 						<li><a href="{{ path('fos_user_profile_show') }}">Mon profil</a>*/
/* 						</li>*/
/* 						<li><a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/* 						</li>*/
/* 					</ul>*/
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
/* 		{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 			<div id="menu" class="col-md-2">*/
/* 				<h3>Menu</h3>*/
/* 				<ul class="nav nav-pills nav-stacked" >*/
/* 					<li><a href="{{ path('fos_user_profile_edit') }}">Edition profil</a></li>*/
/* 					<li><a href="#">Clients</a></li>*/
/* 					<li><a href="#">????</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		{% endif %}*/
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
