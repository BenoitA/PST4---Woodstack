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
        $__internal_a78f4b71e815e82cdf4b662f359f2afed0de0e72a9938a7baa43c0706641dd62 = $this->env->getExtension("native_profiler");
        $__internal_a78f4b71e815e82cdf4b662f359f2afed0de0e72a9938a7baa43c0706641dd62->enter($__internal_a78f4b71e815e82cdf4b662f359f2afed0de0e72a9938a7baa43c0706641dd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle::layout.html.twig"));

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

<body>
\t";
        // line 19
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "\t\tConnecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
    -
\t\t<a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t";
        } else {
            // line 24
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
\t";
        }
        // line 26
        echo "
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1 align=\"center\">WoodStack</h1>
      <p>
\t\tMa plateforme de gestion <br />
        <I>(Ce projet est dans le cadre des PST4 de l'ESIEA)</I>
      </p>
      
    </div>
\t<div class=\"row\">
\t\t\t<div id=\"menu\" class=\"col-md-3\">
\t\t\t\t<h3>Menu</h3>
\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t<li><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
        echo "\">Accueil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ws_woodstack_register");
        echo "\">S'enregistrer</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("ws_woodstack_login");
        echo "\">Connexion</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Edition profil</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mon profil</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div id=\"content\" class=\"col-md-9\">
\t\t\t\t";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div>
\t\t\t\t";
        // line 54
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 56
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
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "</body>
</html>
";
        
        $__internal_a78f4b71e815e82cdf4b662f359f2afed0de0e72a9938a7baa43c0706641dd62->leave($__internal_a78f4b71e815e82cdf4b662f359f2afed0de0e72a9938a7baa43c0706641dd62_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_91917852e30795028f5be5c0e3bc90da9eb3c12583625b531b361b8e8b8b0d8d = $this->env->getExtension("native_profiler");
        $__internal_91917852e30795028f5be5c0e3bc90da9eb3c12583625b531b361b8e8b8b0d8d->enter($__internal_91917852e30795028f5be5c0e3bc90da9eb3c12583625b531b361b8e8b8b0d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WoodStack";
        
        $__internal_91917852e30795028f5be5c0e3bc90da9eb3c12583625b531b361b8e8b8b0d8d->leave($__internal_91917852e30795028f5be5c0e3bc90da9eb3c12583625b531b361b8e8b8b0d8d_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f999273d1e4e9f822f0619e5cbbd8cc29927bca42bfdb932068917a897d231b3 = $this->env->getExtension("native_profiler");
        $__internal_f999273d1e4e9f822f0619e5cbbd8cc29927bca42bfdb932068917a897d231b3->enter($__internal_f999273d1e4e9f822f0619e5cbbd8cc29927bca42bfdb932068917a897d231b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_f999273d1e4e9f822f0619e5cbbd8cc29927bca42bfdb932068917a897d231b3->leave($__internal_f999273d1e4e9f822f0619e5cbbd8cc29927bca42bfdb932068917a897d231b3_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_8511536fc06e7c4b9a0704d4821d49d1bc1e4a45edecaa531cde7b3d3a45ee61 = $this->env->getExtension("native_profiler");
        $__internal_8511536fc06e7c4b9a0704d4821d49d1bc1e4a45edecaa531cde7b3d3a45ee61->enter($__internal_8511536fc06e7c4b9a0704d4821d49d1bc1e4a45edecaa531cde7b3d3a45ee61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "\t\t\t\t\t
\t\t\t\t";
        
        $__internal_8511536fc06e7c4b9a0704d4821d49d1bc1e4a45edecaa531cde7b3d3a45ee61->leave($__internal_8511536fc06e7c4b9a0704d4821d49d1bc1e4a45edecaa531cde7b3d3a45ee61_prof);

    }

    // line 54
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a96b63365d10c3613999b3328ccc5963095d79c3f9a943c1aa691d661e4ea8b6 = $this->env->getExtension("native_profiler");
        $__internal_a96b63365d10c3613999b3328ccc5963095d79c3f9a943c1aa691d661e4ea8b6->enter($__internal_a96b63365d10c3613999b3328ccc5963095d79c3f9a943c1aa691d661e4ea8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 55
        echo "\t\t\t\t";
        
        $__internal_a96b63365d10c3613999b3328ccc5963095d79c3f9a943c1aa691d661e4ea8b6->leave($__internal_a96b63365d10c3613999b3328ccc5963095d79c3f9a943c1aa691d661e4ea8b6_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2a78b46954ce28c3aad41422b3ade913bbfb035b4d9247da1a88d36b15a39af = $this->env->getExtension("native_profiler");
        $__internal_a2a78b46954ce28c3aad41422b3ade913bbfb035b4d9247da1a88d36b15a39af->enter($__internal_a2a78b46954ce28c3aad41422b3ade913bbfb035b4d9247da1a88d36b15a39af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "\t";
        // line 71
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_a2a78b46954ce28c3aad41422b3ade913bbfb035b4d9247da1a88d36b15a39af->leave($__internal_a2a78b46954ce28c3aad41422b3ade913bbfb035b4d9247da1a88d36b15a39af_prof);

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
        return array (  204 => 71,  202 => 69,  196 => 68,  189 => 55,  183 => 54,  175 => 49,  169 => 48,  161 => 13,  159 => 12,  153 => 11,  141 => 9,  132 => 74,  130 => 68,  116 => 56,  114 => 54,  109 => 51,  107 => 48,  100 => 44,  96 => 43,  92 => 42,  88 => 41,  84 => 40,  68 => 26,  62 => 24,  57 => 22,  51 => 20,  49 => 19,  43 => 15,  41 => 11,  36 => 9,  27 => 2,);
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
/* <body>*/
/* 	{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 		Connecté en tant que {{ app.user.username }}*/
/*     -*/
/* 		<a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>*/
/* 	{% else %}*/
/* 		<a href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/* 	{% endif %}*/
/* */
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1 align="center">WoodStack</h1>*/
/*       <p>*/
/* 		Ma plateforme de gestion <br />*/
/*         <I>(Ce projet est dans le cadre des PST4 de l'ESIEA)</I>*/
/*       </p>*/
/*       */
/*     </div>*/
/* 	<div class="row">*/
/* 			<div id="menu" class="col-md-3">*/
/* 				<h3>Menu</h3>*/
/* 				<ul class="nav nav-pills nav-stacked">*/
/* 					<li><a href="{{ path('ws_woodstack_home') }}">Accueil</a></li>*/
/* 					<li><a href="{{ path('ws_woodstack_register') }}">S'enregistrer</a></li>*/
/* 					<li><a href="{{ path('ws_woodstack_login') }}">Connexion</a></li>*/
/* 					<li><a href="{{ path('fos_user_profile_edit') }}">Edition profil</a></li>*/
/* 					<li><a href="{{ path('fos_user_profile_show') }}">Mon profil</a></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div id="content" class="col-md-9">*/
/* 				{% block body %}*/
/* 					*/
/* 				{% endblock %}*/
/* 			</div>*/
/* 			*/
/* 			<div>*/
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
