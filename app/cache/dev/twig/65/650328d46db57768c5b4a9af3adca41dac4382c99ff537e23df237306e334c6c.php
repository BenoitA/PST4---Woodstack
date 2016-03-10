<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_aac681528336deccd508d2d7b5607bbfe0e3bfc408f3ce44757dc7b5089b19e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 2);
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
        $__internal_102ae36181f7a7ad712bd5e216d71112ad8fc3bdd7c0335ecbac97909acfd934 = $this->env->getExtension("native_profiler");
        $__internal_102ae36181f7a7ad712bd5e216d71112ad8fc3bdd7c0335ecbac97909acfd934->enter($__internal_102ae36181f7a7ad712bd5e216d71112ad8fc3bdd7c0335ecbac97909acfd934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_102ae36181f7a7ad712bd5e216d71112ad8fc3bdd7c0335ecbac97909acfd934->leave($__internal_102ae36181f7a7ad712bd5e216d71112ad8fc3bdd7c0335ecbac97909acfd934_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4d145ee31d9901576472c67a4fabb773f89fe9ad4a38910436606d5edc0481c = $this->env->getExtension("native_profiler");
        $__internal_b4d145ee31d9901576472c67a4fabb773f89fe9ad4a38910436606d5edc0481c->enter($__internal_b4d145ee31d9901576472c67a4fabb773f89fe9ad4a38910436606d5edc0481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\tWoodStack ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_b4d145ee31d9901576472c67a4fabb773f89fe9ad4a38910436606d5edc0481c->leave($__internal_b4d145ee31d9901576472c67a4fabb773f89fe9ad4a38910436606d5edc0481c_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_baf5cc113ea3f13a176bb7891c82bf308a5aa594e6ae9d36da5fc26f9eda1e11 = $this->env->getExtension("native_profiler");
        $__internal_baf5cc113ea3f13a176bb7891c82bf308a5aa594e6ae9d36da5fc26f9eda1e11->enter($__internal_baf5cc113ea3f13a176bb7891c82bf308a5aa594e6ae9d36da5fc26f9eda1e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 9
        echo "\t<h2>Liste des annonces</h2>
\t
\t<ul>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "\t\t\t<li>
\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t\tpar ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo "
\t\t\t\tle ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
\t\t\t</li>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "\t\t\t<li> Pas encore d'annonces</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t</ul>
\t
";
        
        $__internal_baf5cc113ea3f13a176bb7891c82bf308a5aa594e6ae9d36da5fc26f9eda1e11->leave($__internal_baf5cc113ea3f13a176bb7891c82bf308a5aa594e6ae9d36da5fc26f9eda1e11_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  91 => 21,  83 => 18,  79 => 17,  74 => 15,  70 => 14,  67 => 13,  62 => 12,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack {{ parent() }} */
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* 	<h2>Liste des annonces</h2>*/
/* 	*/
/* 	<ul>*/
/* 		{% for advert in listAdverts %}*/
/* 			<li>*/
/* 				<a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/* 					{{ advert.title }}*/
/* 				</a>*/
/* 				par {{ advert.author }}*/
/* 				le {{ advert.date|date('d/m/Y') }}*/
/* 			</li>*/
/* 		{% else %}*/
/* 			<li> Pas encore d'annonces</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	*/
/* {% endblock %}*/