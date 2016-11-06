<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_23d319f6e1ccef90c5c4e0cfa6e0f6fc6fda55c11a93323c34dec832f3ab71ad extends Twig_Template
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
        $__internal_fe58de6c5edd92c8326c6264e9acdd4d818c313a359f2cb2e56fcf6ba4a5366b = $this->env->getExtension("native_profiler");
        $__internal_fe58de6c5edd92c8326c6264e9acdd4d818c313a359f2cb2e56fcf6ba4a5366b->enter($__internal_fe58de6c5edd92c8326c6264e9acdd4d818c313a359f2cb2e56fcf6ba4a5366b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        // line 14
        echo "
</head>

<body>
\t
\t";
        // line 19
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 20
            echo "\t<nav class=\"navbar navbar-fixed-top navbar-inverse\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">WoodStack</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_register");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> S'enregistrer</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 36
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
            // line 44
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
            // line 53
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
            echo "\">WoodStack</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_client");
            echo "\">Ajouts clients</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("ws_woodstack_navbar");
            echo "\">Profile client</a></li>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span>Mon profil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
            // line 65
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
        // line 73
        echo "

  <div class=\"jumbotron\" style=\"background-image:url(/PST4-Woodstack/web/blueprint.png);background-position:0% 100%;\"> 
\t<div id=\"header\" class=\"container\" style=\"text-align:center;height:200px;\">
\t
\t<font color=\"lightgreen\">
\t\t\t<h1 align=\"center\">WoodStack</h1>
\t\t\tMa plateforme de gestion <br/>
\t</font>
\t</div>\t
   </div>


   <div class=\"container\">
   <div class=\"row\" style=\"left:50em\">
\t\t\t<div id=\"content\" class=\"col-sm-9\" >
\t\t\t\t";
        // line 89
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 90
            echo "\t\t\t\t\tBienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<br />
\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t
\t\t\t\t";
        // line 93
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"col-sm-9\">
\t\t\t\t";
        // line 98
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 100
        echo "\t\t\t</div>\t\t\t
\t</div>
\t<hr>
\t\t<footer style=\"text-align:center\">
\t\t\t<p>Auffret - Glaisner - Nurit</p>
\t\t</footer>

  ";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 111
        echo "\t
</body>
</html>
";
        
        $__internal_fe58de6c5edd92c8326c6264e9acdd4d818c313a359f2cb2e56fcf6ba4a5366b->leave($__internal_fe58de6c5edd92c8326c6264e9acdd4d818c313a359f2cb2e56fcf6ba4a5366b_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a7ecd1f29e4927ecf3770297150852c59c856b8170eb8579c042a1c30235ef9 = $this->env->getExtension("native_profiler");
        $__internal_9a7ecd1f29e4927ecf3770297150852c59c856b8170eb8579c042a1c30235ef9->enter($__internal_9a7ecd1f29e4927ecf3770297150852c59c856b8170eb8579c042a1c30235ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WoodStack";
        
        $__internal_9a7ecd1f29e4927ecf3770297150852c59c856b8170eb8579c042a1c30235ef9->leave($__internal_9a7ecd1f29e4927ecf3770297150852c59c856b8170eb8579c042a1c30235ef9_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0044f5945fef7b78a969e4f11950c7baa5557b14be63d8f7e21fb4492369cd9f = $this->env->getExtension("native_profiler");
        $__internal_0044f5945fef7b78a969e4f11950c7baa5557b14be63d8f7e21fb4492369cd9f->enter($__internal_0044f5945fef7b78a969e4f11950c7baa5557b14be63d8f7e21fb4492369cd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"/PST4-Woodstack/web/css/bootstrap.min.css\">
  ";
        
        $__internal_0044f5945fef7b78a969e4f11950c7baa5557b14be63d8f7e21fb4492369cd9f->leave($__internal_0044f5945fef7b78a969e4f11950c7baa5557b14be63d8f7e21fb4492369cd9f_prof);

    }

    // line 93
    public function block_body($context, array $blocks = array())
    {
        $__internal_67ea1a7cb98c36842ef54f29ec6ef0ca7b4f5d1dbab7ed7e7dc0d67d6f0ff389 = $this->env->getExtension("native_profiler");
        $__internal_67ea1a7cb98c36842ef54f29ec6ef0ca7b4f5d1dbab7ed7e7dc0d67d6f0ff389->enter($__internal_67ea1a7cb98c36842ef54f29ec6ef0ca7b4f5d1dbab7ed7e7dc0d67d6f0ff389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "\t\t\t\t";
        
        $__internal_67ea1a7cb98c36842ef54f29ec6ef0ca7b4f5d1dbab7ed7e7dc0d67d6f0ff389->leave($__internal_67ea1a7cb98c36842ef54f29ec6ef0ca7b4f5d1dbab7ed7e7dc0d67d6f0ff389_prof);

    }

    // line 98
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2543a9a94764fdd8034081552fe8f259f6471f73195896dd7419e6fc5af3993c = $this->env->getExtension("native_profiler");
        $__internal_2543a9a94764fdd8034081552fe8f259f6471f73195896dd7419e6fc5af3993c->enter($__internal_2543a9a94764fdd8034081552fe8f259f6471f73195896dd7419e6fc5af3993c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 99
        echo "\t\t\t\t";
        
        $__internal_2543a9a94764fdd8034081552fe8f259f6471f73195896dd7419e6fc5af3993c->leave($__internal_2543a9a94764fdd8034081552fe8f259f6471f73195896dd7419e6fc5af3993c_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea3ec1f094aa1367cf4c2d4a42dd39c6a656208cd9a32145846c4516b46e5d61 = $this->env->getExtension("native_profiler");
        $__internal_ea3ec1f094aa1367cf4c2d4a42dd39c6a656208cd9a32145846c4516b46e5d61->enter($__internal_ea3ec1f094aa1367cf4c2d4a42dd39c6a656208cd9a32145846c4516b46e5d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t\t<script src=\"/PST4-Woodstack/web/js/bootstrap.min.js\"></script>
\t";
        
        $__internal_ea3ec1f094aa1367cf4c2d4a42dd39c6a656208cd9a32145846c4516b46e5d61->leave($__internal_ea3ec1f094aa1367cf4c2d4a42dd39c6a656208cd9a32145846c4516b46e5d61_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 108,  244 => 107,  237 => 99,  231 => 98,  224 => 94,  218 => 93,  210 => 12,  204 => 11,  192 => 9,  182 => 111,  180 => 107,  171 => 100,  169 => 98,  164 => 95,  162 => 93,  159 => 92,  153 => 90,  151 => 89,  133 => 73,  122 => 65,  117 => 63,  110 => 59,  106 => 58,  98 => 53,  87 => 44,  76 => 36,  71 => 34,  63 => 29,  52 => 20,  50 => 19,  43 => 14,  41 => 11,  36 => 9,  27 => 2,);
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
/*     <link rel="stylesheet" href="/PST4-Woodstack/web/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* */
/* </head>*/
/* */
/* <body>*/
/* 	*/
/* 	{% if not is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
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
/* */
/* */
/*   <div class="jumbotron" style="background-image:url(/PST4-Woodstack/web/blueprint.png);background-position:0% 100%;"> */
/* 	<div id="header" class="container" style="text-align:center;height:200px;">*/
/* 	*/
/* 	<font color="lightgreen">*/
/* 			<h1 align="center">WoodStack</h1>*/
/* 			Ma plateforme de gestion <br/>*/
/* 	</font>*/
/* 	</div>	*/
/*    </div>*/
/* */
/* */
/*    <div class="container">*/
/*    <div class="row" style="left:50em">*/
/* 			<div id="content" class="col-sm-9" >*/
/* 				{% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* 					Bienvenue {{ app.user.username }}<br />*/
/* 				{% endif %}*/
/* 				*/
/* 				{% block body %}*/
/* 				{% endblock %}*/
/* 			</div>*/
/* 			*/
/* 			<div class="col-sm-9">*/
/* 				{% block fos_user_content %}*/
/* 				{% endblock fos_user_content %}*/
/* 			</div>			*/
/* 	</div>*/
/* 	<hr>*/
/* 		<footer style="text-align:center">*/
/* 			<p>Auffret - Glaisner - Nurit</p>*/
/* 		</footer>*/
/* */
/*   {% block javascripts %}*/
/* 		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* 		<script src="/PST4-Woodstack/web/js/bootstrap.min.js"></script>*/
/* 	{% endblock %}*/
/* 	*/
/* </body>*/
/* </html>*/
/* */
