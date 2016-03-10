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
        $__internal_eb7dce98821ba7eca94636c2fc15768744bca0e0991e96753382e7d6ae53dbe6 = $this->env->getExtension("native_profiler");
        $__internal_eb7dce98821ba7eca94636c2fc15768744bca0e0991e96753382e7d6ae53dbe6->enter($__internal_eb7dce98821ba7eca94636c2fc15768744bca0e0991e96753382e7d6ae53dbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle::layout.html.twig"));

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
\t\t\t\t\t<li><a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_client");
            echo "\">Ajouts clients</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_navbar");
            echo "\">Profile</a></li>
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
        
        $__internal_eb7dce98821ba7eca94636c2fc15768744bca0e0991e96753382e7d6ae53dbe6->leave($__internal_eb7dce98821ba7eca94636c2fc15768744bca0e0991e96753382e7d6ae53dbe6_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a96fb9c8fcfd1d41e050c1e1b500ac05a176db3efb0a20e4422f0871296c9822 = $this->env->getExtension("native_profiler");
        $__internal_a96fb9c8fcfd1d41e050c1e1b500ac05a176db3efb0a20e4422f0871296c9822->enter($__internal_a96fb9c8fcfd1d41e050c1e1b500ac05a176db3efb0a20e4422f0871296c9822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WoodStack";
        
        $__internal_a96fb9c8fcfd1d41e050c1e1b500ac05a176db3efb0a20e4422f0871296c9822->leave($__internal_a96fb9c8fcfd1d41e050c1e1b500ac05a176db3efb0a20e4422f0871296c9822_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c6117c1314c398566795ba028844fc2c757d77ad566b08d347a7693b80e55eaa = $this->env->getExtension("native_profiler");
        $__internal_c6117c1314c398566795ba028844fc2c757d77ad566b08d347a7693b80e55eaa->enter($__internal_c6117c1314c398566795ba028844fc2c757d77ad566b08d347a7693b80e55eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"/Symfony/PST4---Woodstack/web/css/bootstrap.min.css\">
  ";
        
        $__internal_c6117c1314c398566795ba028844fc2c757d77ad566b08d347a7693b80e55eaa->leave($__internal_c6117c1314c398566795ba028844fc2c757d77ad566b08d347a7693b80e55eaa_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f1a2ae416fb412efb441944f944898f54cbefd2720fd5ec8dda8eeddd5b9437 = $this->env->getExtension("native_profiler");
        $__internal_0f1a2ae416fb412efb441944f944898f54cbefd2720fd5ec8dda8eeddd5b9437->enter($__internal_0f1a2ae416fb412efb441944f944898f54cbefd2720fd5ec8dda8eeddd5b9437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 111
        echo "\t\t\t\t\t
\t\t\t\t";
        
        $__internal_0f1a2ae416fb412efb441944f944898f54cbefd2720fd5ec8dda8eeddd5b9437->leave($__internal_0f1a2ae416fb412efb441944f944898f54cbefd2720fd5ec8dda8eeddd5b9437_prof);

    }

    // line 116
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5d4fd8397366bc70e54291e1456b9876d860a48e99f513e989367bce36d15b1 = $this->env->getExtension("native_profiler");
        $__internal_a5d4fd8397366bc70e54291e1456b9876d860a48e99f513e989367bce36d15b1->enter($__internal_a5d4fd8397366bc70e54291e1456b9876d860a48e99f513e989367bce36d15b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 117
        echo "\t\t\t\t";
        
        $__internal_a5d4fd8397366bc70e54291e1456b9876d860a48e99f513e989367bce36d15b1->leave($__internal_a5d4fd8397366bc70e54291e1456b9876d860a48e99f513e989367bce36d15b1_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_111af216bc8c0a190e395116d7e8ececd7b4d503e337698f6696e95d8348fffa = $this->env->getExtension("native_profiler");
        $__internal_111af216bc8c0a190e395116d7e8ececd7b4d503e337698f6696e95d8348fffa->enter($__internal_111af216bc8c0a190e395116d7e8ececd7b4d503e337698f6696e95d8348fffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "\t";
        // line 129
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"/Symfony/PST4---Woodstack/web/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_111af216bc8c0a190e395116d7e8ececd7b4d503e337698f6696e95d8348fffa->leave($__internal_111af216bc8c0a190e395116d7e8ececd7b4d503e337698f6696e95d8348fffa_prof);

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
        return array (  285 => 129,  283 => 127,  277 => 126,  270 => 117,  264 => 116,  256 => 111,  250 => 110,  242 => 13,  240 => 12,  234 => 11,  222 => 9,  213 => 132,  211 => 126,  201 => 118,  199 => 116,  194 => 113,  192 => 110,  189 => 109,  180 => 104,  178 => 103,  173 => 100,  166 => 96,  162 => 95,  158 => 94,  153 => 91,  151 => 90,  131 => 72,  121 => 65,  116 => 63,  111 => 61,  103 => 56,  92 => 47,  82 => 40,  77 => 38,  72 => 36,  64 => 31,  52 => 21,  50 => 20,  43 => 15,  41 => 11,  36 => 9,  27 => 2,);
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
/* 					<li><a href="{{ path('ws_woodstack_client') }}">Ajouts clients</a></li>*/
/* 					<li><a href="{{ path('ws_woodstack_navbar') }}">Profile</a></li>*/
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
