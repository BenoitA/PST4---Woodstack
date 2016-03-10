<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_230ae6906fbe843856fc21561a1269777d7f727303a72184c7f95bd03644c115 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 2);
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
        $__internal_94f843a9a46e8c662d6e25684ef2e6010091fd2026a4677b7cd974745ddafad2 = $this->env->getExtension("native_profiler");
        $__internal_94f843a9a46e8c662d6e25684ef2e6010091fd2026a4677b7cd974745ddafad2->enter($__internal_94f843a9a46e8c662d6e25684ef2e6010091fd2026a4677b7cd974745ddafad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f843a9a46e8c662d6e25684ef2e6010091fd2026a4677b7cd974745ddafad2->leave($__internal_94f843a9a46e8c662d6e25684ef2e6010091fd2026a4677b7cd974745ddafad2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e51b85f81058fe2dc84382a9a400274159c7a5e8ee5bd551117fd0c37ff3223f = $this->env->getExtension("native_profiler");
        $__internal_e51b85f81058fe2dc84382a9a400274159c7a5e8ee5bd551117fd0c37ff3223f->enter($__internal_e51b85f81058fe2dc84382a9a400274159c7a5e8ee5bd551117fd0c37ff3223f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e51b85f81058fe2dc84382a9a400274159c7a5e8ee5bd551117fd0c37ff3223f->leave($__internal_e51b85f81058fe2dc84382a9a400274159c7a5e8ee5bd551117fd0c37ff3223f_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8f1e6fc2bd19508c9703cecd123c8b8b302ccb18d56a5dfa07923c0eb1be0c8c = $this->env->getExtension("native_profiler");
        $__internal_8f1e6fc2bd19508c9703cecd123c8b8b302ccb18d56a5dfa07923c0eb1be0c8c->enter($__internal_8f1e6fc2bd19508c9703cecd123c8b8b302ccb18d56a5dfa07923c0eb1be0c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 9
        echo "
\t<h2>Modifier une annonce</h2>
\t
\t";
        // line 12
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "
\t
\t<p>Vous éditez une annonce déjà existante, merci de ne pas 
\tchanger l'annonce.
\t</p>
\t
\t<p>
\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>
\t
\t";
        
        $__internal_8f1e6fc2bd19508c9703cecd123c8b8b302ccb18d56a5dfa07923c0eb1be0c8c->leave($__internal_8f1e6fc2bd19508c9703cecd123c8b8b302ccb18d56a5dfa07923c0eb1be0c8c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  62 => 12,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/* 	<h2>Modifier une annonce</h2>*/
/* 	*/
/* 	{{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* 	*/
/* 	<p>Vous éditez une annonce déjà existante, merci de ne pas */
/* 	changer l'annonce.*/
/* 	</p>*/
/* 	*/
/* 	<p>*/
/* 		<a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/* 			<i class="glyphicon glyphicon-chevron-left"></i>*/
/* 			Retour à l'annonce*/
/* 		</a>*/
/* 	</p>*/
/* 	*/
/* 	{% endblock %}*/
/* 	*/
