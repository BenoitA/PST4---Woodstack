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
        $__internal_5a3d543eac063fad4ca1e414ebe7f16b496b636b7fccbed4085de3d538b63222 = $this->env->getExtension("native_profiler");
        $__internal_5a3d543eac063fad4ca1e414ebe7f16b496b636b7fccbed4085de3d538b63222->enter($__internal_5a3d543eac063fad4ca1e414ebe7f16b496b636b7fccbed4085de3d538b63222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Client:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a3d543eac063fad4ca1e414ebe7f16b496b636b7fccbed4085de3d538b63222->leave($__internal_5a3d543eac063fad4ca1e414ebe7f16b496b636b7fccbed4085de3d538b63222_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4fea94ff8744ec5104503b3556953a45f2c7f4e505b39f751e8abab5441494b = $this->env->getExtension("native_profiler");
        $__internal_b4fea94ff8744ec5104503b3556953a45f2c7f4e505b39f751e8abab5441494b->enter($__internal_b4fea94ff8744ec5104503b3556953a45f2c7f4e505b39f751e8abab5441494b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_b4fea94ff8744ec5104503b3556953a45f2c7f4e505b39f751e8abab5441494b->leave($__internal_b4fea94ff8744ec5104503b3556953a45f2c7f4e505b39f751e8abab5441494b_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8d0396a7f4f866fb2bdbfa3680807e492280d7f1e163fedb0112627368b9047 = $this->env->getExtension("native_profiler");
        $__internal_e8d0396a7f4f866fb2bdbfa3680807e492280d7f1e163fedb0112627368b9047->enter($__internal_e8d0396a7f4f866fb2bdbfa3680807e492280d7f1e163fedb0112627368b9047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_e8d0396a7f4f866fb2bdbfa3680807e492280d7f1e163fedb0112627368b9047->leave($__internal_e8d0396a7f4f866fb2bdbfa3680807e492280d7f1e163fedb0112627368b9047_prof);

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
