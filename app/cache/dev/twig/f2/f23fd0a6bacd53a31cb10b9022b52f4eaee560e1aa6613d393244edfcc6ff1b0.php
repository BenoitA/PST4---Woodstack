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
        $__internal_d7fc67ea0bc8f32dfd6deb973f9295ea7657379b8b43ad1828abbcb06a1dc1b9 = $this->env->getExtension("native_profiler");
        $__internal_d7fc67ea0bc8f32dfd6deb973f9295ea7657379b8b43ad1828abbcb06a1dc1b9->enter($__internal_d7fc67ea0bc8f32dfd6deb973f9295ea7657379b8b43ad1828abbcb06a1dc1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7fc67ea0bc8f32dfd6deb973f9295ea7657379b8b43ad1828abbcb06a1dc1b9->leave($__internal_d7fc67ea0bc8f32dfd6deb973f9295ea7657379b8b43ad1828abbcb06a1dc1b9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7d5e4fa8cc837532238a5c10e64e7b144b9193965207dfb780eecbce488f1cf = $this->env->getExtension("native_profiler");
        $__internal_d7d5e4fa8cc837532238a5c10e64e7b144b9193965207dfb780eecbce488f1cf->enter($__internal_d7d5e4fa8cc837532238a5c10e64e7b144b9193965207dfb780eecbce488f1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d7d5e4fa8cc837532238a5c10e64e7b144b9193965207dfb780eecbce488f1cf->leave($__internal_d7d5e4fa8cc837532238a5c10e64e7b144b9193965207dfb780eecbce488f1cf_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_a7b9f8cfac02977a8ccd3a9ffcb2c5dcc881c0b576a657f278e9fe36a7f52c45 = $this->env->getExtension("native_profiler");
        $__internal_a7b9f8cfac02977a8ccd3a9ffcb2c5dcc881c0b576a657f278e9fe36a7f52c45->enter($__internal_a7b9f8cfac02977a8ccd3a9ffcb2c5dcc881c0b576a657f278e9fe36a7f52c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_a7b9f8cfac02977a8ccd3a9ffcb2c5dcc881c0b576a657f278e9fe36a7f52c45->leave($__internal_a7b9f8cfac02977a8ccd3a9ffcb2c5dcc881c0b576a657f278e9fe36a7f52c45_prof);

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
