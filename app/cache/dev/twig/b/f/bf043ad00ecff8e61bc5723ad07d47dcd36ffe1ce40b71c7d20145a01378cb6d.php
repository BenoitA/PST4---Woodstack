<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0ab12e475e2d81705f7619ebf29b7ade6f5b937a3479cc2f834fb562562e8427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_383e732eb714702cabf22fefd420103b5fe8f23dc23592fb792061339308a3e7 = $this->env->getExtension("native_profiler");
        $__internal_383e732eb714702cabf22fefd420103b5fe8f23dc23592fb792061339308a3e7->enter($__internal_383e732eb714702cabf22fefd420103b5fe8f23dc23592fb792061339308a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_383e732eb714702cabf22fefd420103b5fe8f23dc23592fb792061339308a3e7->leave($__internal_383e732eb714702cabf22fefd420103b5fe8f23dc23592fb792061339308a3e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a314e31c30b0eaa0aa6844482480b6d2389b8258e52b525bfb0ae1fa146e6c6 = $this->env->getExtension("native_profiler");
        $__internal_7a314e31c30b0eaa0aa6844482480b6d2389b8258e52b525bfb0ae1fa146e6c6->enter($__internal_7a314e31c30b0eaa0aa6844482480b6d2389b8258e52b525bfb0ae1fa146e6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_7a314e31c30b0eaa0aa6844482480b6d2389b8258e52b525bfb0ae1fa146e6c6->leave($__internal_7a314e31c30b0eaa0aa6844482480b6d2389b8258e52b525bfb0ae1fa146e6c6_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_029bf91eb182263e165d0b1eb00d9f1e4ef454ab8c94978e7423eab019e10c7c = $this->env->getExtension("native_profiler");
        $__internal_029bf91eb182263e165d0b1eb00d9f1e4ef454ab8c94978e7423eab019e10c7c->enter($__internal_029bf91eb182263e165d0b1eb00d9f1e4ef454ab8c94978e7423eab019e10c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "
\t";
        // line 10
        echo twig_include($this->env, $context, "FOSUserBundle:Registration:register_content.html.twig");
        echo "

";
        
        $__internal_029bf91eb182263e165d0b1eb00d9f1e4ef454ab8c94978e7423eab019e10c7c->leave($__internal_029bf91eb182263e165d0b1eb00d9f1e4ef454ab8c94978e7423eab019e10c7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack  */
/* {% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* */
/* 	{{ include("FOSUserBundle:Registration:register_content.html.twig") }}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
