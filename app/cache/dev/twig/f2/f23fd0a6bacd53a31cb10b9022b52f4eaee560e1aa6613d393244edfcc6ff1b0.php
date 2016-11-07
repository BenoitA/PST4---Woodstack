<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_b6c4fb9c50b73d599ffbf3652505f3e407f82e43b7c55fc04e9196670aeaaacb extends Twig_Template
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
        $__internal_861806e931304a22c332408f2e2453f7446cde77a9da5cdd46dcc444bb4ac4db = $this->env->getExtension("native_profiler");
        $__internal_861806e931304a22c332408f2e2453f7446cde77a9da5cdd46dcc444bb4ac4db->enter($__internal_861806e931304a22c332408f2e2453f7446cde77a9da5cdd46dcc444bb4ac4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_861806e931304a22c332408f2e2453f7446cde77a9da5cdd46dcc444bb4ac4db->leave($__internal_861806e931304a22c332408f2e2453f7446cde77a9da5cdd46dcc444bb4ac4db_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa8f9082582a52da730cb9f4a7b2f49fcef198634d4181e7b5dba10cf22fa4d4 = $this->env->getExtension("native_profiler");
        $__internal_aa8f9082582a52da730cb9f4a7b2f49fcef198634d4181e7b5dba10cf22fa4d4->enter($__internal_aa8f9082582a52da730cb9f4a7b2f49fcef198634d4181e7b5dba10cf22fa4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aa8f9082582a52da730cb9f4a7b2f49fcef198634d4181e7b5dba10cf22fa4d4->leave($__internal_aa8f9082582a52da730cb9f4a7b2f49fcef198634d4181e7b5dba10cf22fa4d4_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c2d8fdbf5441e87b432febfdb602d39e7d196987a15e10b9da1df8fb0df00785 = $this->env->getExtension("native_profiler");
        $__internal_c2d8fdbf5441e87b432febfdb602d39e7d196987a15e10b9da1df8fb0df00785->enter($__internal_c2d8fdbf5441e87b432febfdb602d39e7d196987a15e10b9da1df8fb0df00785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_c2d8fdbf5441e87b432febfdb602d39e7d196987a15e10b9da1df8fb0df00785->leave($__internal_c2d8fdbf5441e87b432febfdb602d39e7d196987a15e10b9da1df8fb0df00785_prof);

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
