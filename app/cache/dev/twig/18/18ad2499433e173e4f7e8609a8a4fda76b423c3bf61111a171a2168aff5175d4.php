<?php

/* WSWoodstackBundle:Client:client.html.twig */
class __TwigTemplate_878e27ac1ae6f957020250ae9e75ac8d0bc5c26e70cd115b65aa2437add3cb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Client:client.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1dbf8b9e03217aa9d52d5cfd5424a4f32fae99ce09ab9100ec3009fdeeb84a1 = $this->env->getExtension("native_profiler");
        $__internal_f1dbf8b9e03217aa9d52d5cfd5424a4f32fae99ce09ab9100ec3009fdeeb84a1->enter($__internal_f1dbf8b9e03217aa9d52d5cfd5424a4f32fae99ce09ab9100ec3009fdeeb84a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Client:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1dbf8b9e03217aa9d52d5cfd5424a4f32fae99ce09ab9100ec3009fdeeb84a1->leave($__internal_f1dbf8b9e03217aa9d52d5cfd5424a4f32fae99ce09ab9100ec3009fdeeb84a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e45a9b8a450efde7e85d6bf8975c8c3e3d0f7c9a4a46307946d1e82ee949d073 = $this->env->getExtension("native_profiler");
        $__internal_e45a9b8a450efde7e85d6bf8975c8c3e3d0f7c9a4a46307946d1e82ee949d073->enter($__internal_e45a9b8a450efde7e85d6bf8975c8c3e3d0f7c9a4a46307946d1e82ee949d073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_e45a9b8a450efde7e85d6bf8975c8c3e3d0f7c9a4a46307946d1e82ee949d073->leave($__internal_e45a9b8a450efde7e85d6bf8975c8c3e3d0f7c9a4a46307946d1e82ee949d073_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59e9ad59528ba740381f4455fc4eea889fce155eba2bba74d6723ff9ffe3ab28 = $this->env->getExtension("native_profiler");
        $__internal_59e9ad59528ba740381f4455fc4eea889fce155eba2bba74d6723ff9ffe3ab28->enter($__internal_59e9ad59528ba740381f4455fc4eea889fce155eba2bba74d6723ff9ffe3ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "
<p>Veuillez ajouter un nouveau client.</p>
<center>
\t<div class=\"well\">
\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
</center>

";
        
        $__internal_59e9ad59528ba740381f4455fc4eea889fce155eba2bba74d6723ff9ffe3ab28->leave($__internal_59e9ad59528ba740381f4455fc4eea889fce155eba2bba74d6723ff9ffe3ab28_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Client:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack  */
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* <p>Veuillez ajouter un nouveau client.</p>*/
/* <center>*/
/* 	<div class="well">*/
/* 		{{ form(form) }}*/
/* 	</div>*/
/* </center>*/
/* */
/* {% endblock fos_user_content %}	*/
