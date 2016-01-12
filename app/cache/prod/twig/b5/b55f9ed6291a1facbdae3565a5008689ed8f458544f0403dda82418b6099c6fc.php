<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_e676af260801c8f8fe504276e6fcf7ed8b4c3fe1fe05c2237c0abb4e33d592b4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t<i class=\"glyphicon glyphicon-chevron-left\"></i>
\t\t\tRetour à l'annonce
\t\t</a>
\t</p>
\t
\t";
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
        return array (  57 => 19,  47 => 12,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 2,);
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
