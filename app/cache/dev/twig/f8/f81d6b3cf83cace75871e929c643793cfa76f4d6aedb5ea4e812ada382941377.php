<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_2c9252aada44f17c1e991bf28906c64bbab8988fc9182373af436a2c0e318efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35ba19170248292782b7350deb8586ddfe08adfb3866aa1c24f529f08e0bc769 = $this->env->getExtension("native_profiler");
        $__internal_35ba19170248292782b7350deb8586ddfe08adfb3866aa1c24f529f08e0bc769->enter($__internal_35ba19170248292782b7350deb8586ddfe08adfb3866aa1c24f529f08e0bc769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ba19170248292782b7350deb8586ddfe08adfb3866aa1c24f529f08e0bc769->leave($__internal_35ba19170248292782b7350deb8586ddfe08adfb3866aa1c24f529f08e0bc769_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d574c41c745cf4a5c5207f7448b8ec94918bc2dd01bc0f2c5372a17ce1cda7a8 = $this->env->getExtension("native_profiler");
        $__internal_d574c41c745cf4a5c5207f7448b8ec94918bc2dd01bc0f2c5372a17ce1cda7a8->enter($__internal_d574c41c745cf4a5c5207f7448b8ec94918bc2dd01bc0f2c5372a17ce1cda7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d574c41c745cf4a5c5207f7448b8ec94918bc2dd01bc0f2c5372a17ce1cda7a8->leave($__internal_d574c41c745cf4a5c5207f7448b8ec94918bc2dd01bc0f2c5372a17ce1cda7a8_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_97982ea28302809d2998a9af730733c2a2233bfd34e95db2828d6cdc0995b972 = $this->env->getExtension("native_profiler");
        $__internal_97982ea28302809d2998a9af730733c2a2233bfd34e95db2828d6cdc0995b972->enter($__internal_97982ea28302809d2998a9af730733c2a2233bfd34e95db2828d6cdc0995b972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 8
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
\t<i>Par ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
\t
\t<div class=\"well\">
\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
\t</div>
\t
\t<p>
\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glypicon glyphicon-edit\"></i>
\t\t\tModifier l'annonce
\t\t</a>
\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>
\t\t\tSupprimer l'annonce
\t\t</a>
\t</p>
";
        
        $__internal_97982ea28302809d2998a9af730733c2a2233bfd34e95db2828d6cdc0995b972->leave($__internal_97982ea28302809d2998a9af730733c2a2233bfd34e95db2828d6cdc0995b972_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 24,  84 => 20,  77 => 16,  70 => 12,  62 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* 	<h2>{{ advert.title }}</h2>*/
/* 	<i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* 	*/
/* 	<div class="well">*/
/* 		{{ advert.content }}*/
/* 	</div>*/
/* 	*/
/* 	<p>*/
/* 		<a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/* 			<i class="glyphicon-chevron-left"></i>*/
/* 			Retour à la liste*/
/* 		</a>*/
/* 		<a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glypicon glyphicon-edit"></i>*/
/* 			Modifier l'annonce*/
/* 		</a>*/
/* 		<a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/* 			<i class="glyphicon glyphicon-trash"></i>*/
/* 			Supprimer l'annonce*/
/* 		</a>*/
/* 	</p>*/
/* {% endblock %}*/
