<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_ab600b23afeebf36e6c2cf9e27ca7ac919946d9b59b85b03a9afbf219498537d extends Twig_Template
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
        $__internal_44221b7c853890d5d9529225c15c9fa2766f8f3ec6b05690cee7c756474d5645 = $this->env->getExtension("native_profiler");
        $__internal_44221b7c853890d5d9529225c15c9fa2766f8f3ec6b05690cee7c756474d5645->enter($__internal_44221b7c853890d5d9529225c15c9fa2766f8f3ec6b05690cee7c756474d5645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44221b7c853890d5d9529225c15c9fa2766f8f3ec6b05690cee7c756474d5645->leave($__internal_44221b7c853890d5d9529225c15c9fa2766f8f3ec6b05690cee7c756474d5645_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18753847e2d401ae0f340d469b7326748535865fefa36bba68ae106bf85690bd = $this->env->getExtension("native_profiler");
        $__internal_18753847e2d401ae0f340d469b7326748535865fefa36bba68ae106bf85690bd->enter($__internal_18753847e2d401ae0f340d469b7326748535865fefa36bba68ae106bf85690bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tLecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_18753847e2d401ae0f340d469b7326748535865fefa36bba68ae106bf85690bd->leave($__internal_18753847e2d401ae0f340d469b7326748535865fefa36bba68ae106bf85690bd_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4c7f57a108d43bce32ef6ed778635691dea64a0c0f005d9414c3436661cde5b9 = $this->env->getExtension("native_profiler");
        $__internal_4c7f57a108d43bce32ef6ed778635691dea64a0c0f005d9414c3436661cde5b9->enter($__internal_4c7f57a108d43bce32ef6ed778635691dea64a0c0f005d9414c3436661cde5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_4c7f57a108d43bce32ef6ed778635691dea64a0c0f005d9414c3436661cde5b9->leave($__internal_4c7f57a108d43bce32ef6ed778635691dea64a0c0f005d9414c3436661cde5b9_prof);

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
