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
        $__internal_0eafe21d349d2bf5f1ac888c7abba6ba29eba2a80ba1aabd50dfaaef5de3176a = $this->env->getExtension("native_profiler");
        $__internal_0eafe21d349d2bf5f1ac888c7abba6ba29eba2a80ba1aabd50dfaaef5de3176a->enter($__internal_0eafe21d349d2bf5f1ac888c7abba6ba29eba2a80ba1aabd50dfaaef5de3176a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle::layout.html.twig"));

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
        // line 16
        echo "  
</head>

<body style=\"padding-top: 70px;\">
\t
\t";
        // line 21
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
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
            // line 32
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">WoodStack</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_register");
            echo "\">S'enregistrer</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_login");
            echo "\">Connexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        } else {
            // line 48
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
            // line 57
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">WoodStack</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t";
        }
        // line 73
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
        // line 91
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 92
            echo "\t\t\t<div id=\"menu\" class=\"col-md-2\">
\t\t\t\t<h3>Menu</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" >
\t\t\t\t\t<li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Edition profil</a></li>
\t\t\t\t\t<li><a href=\"#\">Clients</a></li>
\t\t\t\t\t<li><a href=\"#\">????</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 101
        echo "
\t\t\t<div id=\"content\" class=\"col-md-9\" >
\t\t\t\t
\t\t\t\t";
        // line 104
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 105
            echo "\t\t\t\t\tBienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<br />
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t
\t\t\t\t";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 117
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 119
        echo "\t\t\t</div>
\t\t\t
\t\t\t
\t</div>
\t<hr>
\t\t<footer style=\"text-align:center\">
\t\t\t<p>Auffret - Glaisner - Nurit</p>
\t\t</footer>
  ";
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "</body>
</html>
";
        
        $__internal_0eafe21d349d2bf5f1ac888c7abba6ba29eba2a80ba1aabd50dfaaef5de3176a->leave($__internal_0eafe21d349d2bf5f1ac888c7abba6ba29eba2a80ba1aabd50dfaaef5de3176a_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_990d8ea94c00e24b899d216b2f1ead126237ae03f595d4c4d99b36518523ca4f = $this->env->getExtension("native_profiler");
        $__internal_990d8ea94c00e24b899d216b2f1ead126237ae03f595d4c4d99b36518523ca4f->enter($__internal_990d8ea94c00e24b899d216b2f1ead126237ae03f595d4c4d99b36518523ca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WoodStack";
        
        $__internal_990d8ea94c00e24b899d216b2f1ead126237ae03f595d4c4d99b36518523ca4f->leave($__internal_990d8ea94c00e24b899d216b2f1ead126237ae03f595d4c4d99b36518523ca4f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_282e513e8262be59099637fdd3a1cafe1c993b77303b5dacc0445290963ac4dd = $this->env->getExtension("native_profiler");
        $__internal_282e513e8262be59099637fdd3a1cafe1c993b77303b5dacc0445290963ac4dd->enter($__internal_282e513e8262be59099637fdd3a1cafe1c993b77303b5dacc0445290963ac4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"/Symfony/PST4---Woodstack/web/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
  ";
        
        $__internal_282e513e8262be59099637fdd3a1cafe1c993b77303b5dacc0445290963ac4dd->leave($__internal_282e513e8262be59099637fdd3a1cafe1c993b77303b5dacc0445290963ac4dd_prof);

    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1cc8d59cd28a5a19c03bb6cd9e67086131e0a5fd552ffb0f63c79d8bae5753e = $this->env->getExtension("native_profiler");
        $__internal_a1cc8d59cd28a5a19c03bb6cd9e67086131e0a5fd552ffb0f63c79d8bae5753e->enter($__internal_a1cc8d59cd28a5a19c03bb6cd9e67086131e0a5fd552ffb0f63c79d8bae5753e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "\t\t\t\t\t
\t\t\t\t";
        
        $__internal_a1cc8d59cd28a5a19c03bb6cd9e67086131e0a5fd552ffb0f63c79d8bae5753e->leave($__internal_a1cc8d59cd28a5a19c03bb6cd9e67086131e0a5fd552ffb0f63c79d8bae5753e_prof);

    }

    // line 117
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8b933f127a3915c349a703aa6d6c9ad7ddd8e6bc25160526512e1f285efa4b1 = $this->env->getExtension("native_profiler");
        $__internal_d8b933f127a3915c349a703aa6d6c9ad7ddd8e6bc25160526512e1f285efa4b1->enter($__internal_d8b933f127a3915c349a703aa6d6c9ad7ddd8e6bc25160526512e1f285efa4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 118
        echo "\t\t\t\t";
        
        $__internal_d8b933f127a3915c349a703aa6d6c9ad7ddd8e6bc25160526512e1f285efa4b1->leave($__internal_d8b933f127a3915c349a703aa6d6c9ad7ddd8e6bc25160526512e1f285efa4b1_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80e1dd139ae466d3ce9532ce361ee1560bcf895c721bcf7bef5283d21c5c87a4 = $this->env->getExtension("native_profiler");
        $__internal_80e1dd139ae466d3ce9532ce361ee1560bcf895c721bcf7bef5283d21c5c87a4->enter($__internal_80e1dd139ae466d3ce9532ce361ee1560bcf895c721bcf7bef5283d21c5c87a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "\t";
        // line 130
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"/Symfony/PST4---Woodstack/web/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_80e1dd139ae466d3ce9532ce361ee1560bcf895c721bcf7bef5283d21c5c87a4->leave($__internal_80e1dd139ae466d3ce9532ce361ee1560bcf895c721bcf7bef5283d21c5c87a4_prof);

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
        return array (  280 => 130,  278 => 128,  272 => 127,  265 => 118,  259 => 117,  251 => 112,  245 => 111,  236 => 13,  234 => 12,  228 => 11,  216 => 9,  207 => 133,  205 => 127,  195 => 119,  193 => 117,  188 => 114,  186 => 111,  183 => 110,  174 => 105,  172 => 104,  167 => 101,  158 => 95,  153 => 92,  151 => 91,  131 => 73,  121 => 66,  116 => 64,  111 => 62,  103 => 57,  92 => 48,  82 => 41,  77 => 39,  72 => 37,  64 => 32,  52 => 22,  50 => 21,  43 => 16,  41 => 11,  36 => 9,  27 => 2,);
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
/*     <link rel="stylesheet" href="css/bootstrap.min.css">*/
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
