<?php

/* WSWoodstackBundle:Wood:show.html.twig */
class __TwigTemplate_cfaa83e9042268d87ef70942ec512b76f6e7b8ad11f14a8b56310cda72c15ace extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Wood:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b05a2b9f0a8c500a8cce23b267ff6e0734b7396c2093ec79241cbdc45d3375d = $this->env->getExtension("native_profiler");
        $__internal_1b05a2b9f0a8c500a8cce23b267ff6e0734b7396c2093ec79241cbdc45d3375d->enter($__internal_1b05a2b9f0a8c500a8cce23b267ff6e0734b7396c2093ec79241cbdc45d3375d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b05a2b9f0a8c500a8cce23b267ff6e0734b7396c2093ec79241cbdc45d3375d->leave($__internal_1b05a2b9f0a8c500a8cce23b267ff6e0734b7396c2093ec79241cbdc45d3375d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f0d5b9ecade776dff0cf4b7c4c8d7f18efae6223f91528af4c9251fd97ed053 = $this->env->getExtension("native_profiler");
        $__internal_4f0d5b9ecade776dff0cf4b7c4c8d7f18efae6223f91528af4c9251fd97ed053->enter($__internal_4f0d5b9ecade776dff0cf4b7c4c8d7f18efae6223f91528af4c9251fd97ed053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_4f0d5b9ecade776dff0cf4b7c4c8d7f18efae6223f91528af4c9251fd97ed053->leave($__internal_4f0d5b9ecade776dff0cf4b7c4c8d7f18efae6223f91528af4c9251fd97ed053_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_230c235d8ca77489483ade560422add21bc756cc7c5585215f80820f4bf28a50 = $this->env->getExtension("native_profiler");
        $__internal_230c235d8ca77489483ade560422add21bc756cc7c5585215f80820f4bf28a50->enter($__internal_230c235d8ca77489483ade560422add21bc756cc7c5585215f80820f4bf28a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "</br>
\t<div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\"><h3>Client n° ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</h3></div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<h4><div class=\"col-md-2\">Nom</div><div class=\"col-md-2\">Prenom</div></h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</div><div class=\"col-md-2\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "prenom", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<h4><div class=\"col-md-2\">Adresse</div></h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "adresse", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<h4><div class=\"col-md-2\">Code postal</div><div class=\"col-md-2\">Ville</div></h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "codePostal", array()), "html", null, true);
        echo "</div><div class=\"col-md-2\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "ville", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<h4><div class=\"col-md-2\">Telephone</div></h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "telephone", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<h4><div class=\"col-md-2\">Commercial</div></h4>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-2\">";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "commercial", array()), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"row\"></br>
\t\t\t <div class=\"col-md-1\"></div><div class=\"col-md-1\"><a class=\"btn btn-success btn-xs\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("ws_woodstack_home");
        echo "\" role=\"button\">Retour</a></div>
\t\t</div>
\t</div>


";
        
        $__internal_230c235d8ca77489483ade560422add21bc756cc7c5585215f80820f4bf28a50->leave($__internal_230c235d8ca77489483ade560422add21bc756cc7c5585215f80820f4bf28a50_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Wood:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 45,  109 => 42,  100 => 36,  89 => 30,  80 => 24,  69 => 18,  60 => 12,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* </br>*/
/* 	<div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-2"><h3>Client n° {{ client.id }}</h3></div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<h4><div class="col-md-2">Nom</div><div class="col-md-2">Prenom</div></h4>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-2">{{ client.nom }}</div><div class="col-md-2">{{ client.prenom }}</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<h4><div class="col-md-2">Adresse</div></h4>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-2">{{ client.adresse }}</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<h4><div class="col-md-2">Code postal</div><div class="col-md-2">Ville</div></h4>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-2">{{ client.codePostal }}</div><div class="col-md-2">{{ client.ville }}</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<h4><div class="col-md-2">Telephone</div></h4>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-2">{{ client.telephone }}</div>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<h4><div class="col-md-2">Commercial</div></h4>*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-2">{{ client.commercial }}</div>*/
/* 		</div>*/
/* 		<div class="row"></br>*/
/* 			 <div class="col-md-1"></div><div class="col-md-1"><a class="btn btn-success btn-xs" href="{{ path('ws_woodstack_home') }}" role="button">Retour</a></div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* */
/* {% endblock %}*/
