<?php

/* WSWoodstackBundle::layout.html.twig */
class __TwigTemplate_df3dee1cdcb9bfdaf4fbf3bdbd3010d5a157d97fdb19d8261ea8e3d93ef91ec5 extends Twig_Template
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
        $__internal_18f5445832ceb50781d0942b95a0cd68caf69b6f56cd74d91c2976807f8c1bde = $this->env->getExtension("native_profiler");
        $__internal_18f5445832ceb50781d0942b95a0cd68caf69b6f56cd74d91c2976807f8c1bde->enter($__internal_18f5445832ceb50781d0942b95a0cd68caf69b6f56cd74d91c2976807f8c1bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle::layout.html.twig"));

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
\t
  <div class=\"container\">
  
\t<div class=\"col-xs-12 col-sm-9\">
\t\t<div id=\"header\" class=\"jumbotron\">
\t\t\t<h1 align=\"center\">WoodStack</h1>
\t\t\t<p>
\t\t\t\tMa plateforme de gestion <br />
\t\t\t\t<I>(Ce projet est dans le cadre des PST4 de l'ESIEA)</I>
\t\t\t</p>
      
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t";
        // line 87
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 88
            echo "\t\t\t<div id=\"menu\" class=\"col-md-2\">
\t\t\t\t<h3>Menu</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\" style=\"color: green;\">
\t\t\t\t\t<li><a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Edition profil</a></li>
\t\t\t\t\t<li><a href=\"#\">Clients</a></li>
\t\t\t\t\t<li><a href=\"#\">????</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 97
        echo "\t\t
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t
\t\t\t\t";
        // line 100
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 101
            echo "\t\t\t\t\tBienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<br />
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t
\t\t\t\t";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-md-9\">
\t\t\t\t";
        // line 113
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 115
        echo "\t\t\t</div>
\t\t\t
\t\t\t
\t\t</div>
\t
\t\t<hr>
\t
\t
\t\t<footer align=\"center\">
\t\t\t<p text-align=\"center\" >Auffret - Glaisner - Nurit</p>
\t\t</footer>
\t</div>
  ";
        // line 127
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "</body>
</html>
";
        
        $__internal_18f5445832ceb50781d0942b95a0cd68caf69b6f56cd74d91c2976807f8c1bde->leave($__internal_18f5445832ceb50781d0942b95a0cd68caf69b6f56cd74d91c2976807f8c1bde_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef6345fa8f46553a23b90892d5fe73342985ec0ab824d3b1383510e22d813c1d = $this->env->getExtension("native_profiler");
        $__internal_ef6345fa8f46553a23b90892d5fe73342985ec0ab824d3b1383510e22d813c1d->enter($__internal_ef6345fa8f46553a23b90892d5fe73342985ec0ab824d3b1383510e22d813c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WoodStack";
        
        $__internal_ef6345fa8f46553a23b90892d5fe73342985ec0ab824d3b1383510e22d813c1d->leave($__internal_ef6345fa8f46553a23b90892d5fe73342985ec0ab824d3b1383510e22d813c1d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00f99146e6cb1717e62904e50f328d2fdec9808aebd38817807b23fd0b03bc35 = $this->env->getExtension("native_profiler");
        $__internal_00f99146e6cb1717e62904e50f328d2fdec9808aebd38817807b23fd0b03bc35->enter($__internal_00f99146e6cb1717e62904e50f328d2fdec9808aebd38817807b23fd0b03bc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_00f99146e6cb1717e62904e50f328d2fdec9808aebd38817807b23fd0b03bc35->leave($__internal_00f99146e6cb1717e62904e50f328d2fdec9808aebd38817807b23fd0b03bc35_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e6f9172df48e8738783f0a45365b4a0a99d773bc98e598e7627e89478b80dc = $this->env->getExtension("native_profiler");
        $__internal_95e6f9172df48e8738783f0a45365b4a0a99d773bc98e598e7627e89478b80dc->enter($__internal_95e6f9172df48e8738783f0a45365b4a0a99d773bc98e598e7627e89478b80dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 108
        echo "\t\t\t\t\t
\t\t\t\t";
        
        $__internal_95e6f9172df48e8738783f0a45365b4a0a99d773bc98e598e7627e89478b80dc->leave($__internal_95e6f9172df48e8738783f0a45365b4a0a99d773bc98e598e7627e89478b80dc_prof);

    }

    // line 113
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7726a6ea659648df11f01d445c6698b10c49ba3b4006bda651ccee05f8945f4 = $this->env->getExtension("native_profiler");
        $__internal_a7726a6ea659648df11f01d445c6698b10c49ba3b4006bda651ccee05f8945f4->enter($__internal_a7726a6ea659648df11f01d445c6698b10c49ba3b4006bda651ccee05f8945f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 114
        echo "\t\t\t\t";
        
        $__internal_a7726a6ea659648df11f01d445c6698b10c49ba3b4006bda651ccee05f8945f4->leave($__internal_a7726a6ea659648df11f01d445c6698b10c49ba3b4006bda651ccee05f8945f4_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51c43fc4e7375ae14ad9670839ab6261c62f3a006e9d67469e46ee7a393caeab = $this->env->getExtension("native_profiler");
        $__internal_51c43fc4e7375ae14ad9670839ab6261c62f3a006e9d67469e46ee7a393caeab->enter($__internal_51c43fc4e7375ae14ad9670839ab6261c62f3a006e9d67469e46ee7a393caeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "\t";
        // line 130
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_51c43fc4e7375ae14ad9670839ab6261c62f3a006e9d67469e46ee7a393caeab->leave($__internal_51c43fc4e7375ae14ad9670839ab6261c62f3a006e9d67469e46ee7a393caeab_prof);

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
        return array (  280 => 130,  278 => 128,  272 => 127,  265 => 114,  259 => 113,  251 => 108,  245 => 107,  237 => 13,  235 => 12,  229 => 11,  217 => 9,  208 => 133,  206 => 127,  192 => 115,  190 => 113,  185 => 110,  183 => 107,  180 => 106,  171 => 101,  169 => 100,  164 => 97,  155 => 91,  150 => 88,  148 => 87,  131 => 72,  121 => 65,  116 => 63,  111 => 61,  103 => 56,  92 => 47,  82 => 40,  77 => 38,  72 => 36,  64 => 31,  52 => 21,  50 => 20,  43 => 15,  41 => 11,  36 => 9,  27 => 2,);
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
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
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
/* 	*/
/*   <div class="container">*/
/*   */
/* 	<div class="col-xs-12 col-sm-9">*/
/* 		<div id="header" class="jumbotron">*/
/* 			<h1 align="center">WoodStack</h1>*/
/* 			<p>*/
/* 				Ma plateforme de gestion <br />*/
/* 				<I>(Ce projet est dans le cadre des PST4 de l'ESIEA)</I>*/
/* 			</p>*/
/*       */
/* 		</div>*/
/* 	</div>*/
/* 	<div class="row">*/
/* 		{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 			<div id="menu" class="col-md-2">*/
/* 				<h3>Menu</h3>*/
/* 				<ul class="nav nav-pills nav-stacked" style="color: green;">*/
/* 					<li><a href="{{ path('fos_user_profile_edit') }}">Edition profil</a></li>*/
/* 					<li><a href="#">Clients</a></li>*/
/* 					<li><a href="#">????</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		*/
/* 			<div id="content" class="col-md-9">*/
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
/* 		</div>*/
/* 	*/
/* 		<hr>*/
/* 	*/
/* 	*/
/* 		<footer align="center">*/
/* 			<p text-align="center" >Auffret - Glaisner - Nurit</p>*/
/* 		</footer>*/
/* 	</div>*/
/*   {% block javascripts %}*/
/* 	{# Ajouter ces lignes javascript pour utiliser des fonctionnalités*/
/* 	de bootstrap twitter #}*/
/* 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* 		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
