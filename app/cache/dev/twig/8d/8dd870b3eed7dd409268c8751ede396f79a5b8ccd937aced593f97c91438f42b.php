<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7485d7a97a7cc798d318e079250a0a883a5d5529f99b620c9d90d7fb075c01ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01aac87937a1029b530bb1e45778f04f94a3880e0088d482e9f0ba3e259dc83e = $this->env->getExtension("native_profiler");
        $__internal_01aac87937a1029b530bb1e45778f04f94a3880e0088d482e9f0ba3e259dc83e->enter($__internal_01aac87937a1029b530bb1e45778f04f94a3880e0088d482e9f0ba3e259dc83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01aac87937a1029b530bb1e45778f04f94a3880e0088d482e9f0ba3e259dc83e->leave($__internal_01aac87937a1029b530bb1e45778f04f94a3880e0088d482e9f0ba3e259dc83e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6d7b68fd15b6c748ec1a674ef510666668283b7e0929a92a07d75f2d819db52 = $this->env->getExtension("native_profiler");
        $__internal_a6d7b68fd15b6c748ec1a674ef510666668283b7e0929a92a07d75f2d819db52->enter($__internal_a6d7b68fd15b6c748ec1a674ef510666668283b7e0929a92a07d75f2d819db52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a6d7b68fd15b6c748ec1a674ef510666668283b7e0929a92a07d75f2d819db52->leave($__internal_a6d7b68fd15b6c748ec1a674ef510666668283b7e0929a92a07d75f2d819db52_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
