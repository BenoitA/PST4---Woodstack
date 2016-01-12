<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_016d1a8a5fdfe7a86be161af3a88c9f92e1f8b6a302604d45c7eaa957284264b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "\tWoodStack ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        // line 9
        echo "\t<h2>Liste des annonces</h2>
\t
\t<ul>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : null));
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
        return array (  83 => 23,  76 => 21,  68 => 18,  64 => 17,  59 => 15,  55 => 14,  52 => 13,  47 => 12,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
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
