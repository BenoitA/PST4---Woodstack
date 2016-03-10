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
        $__internal_1daaad549f6bd8351192a8d3ef94b107740a15adc4d8f8be2b66e6af4f4e0d23 = $this->env->getExtension("native_profiler");
        $__internal_1daaad549f6bd8351192a8d3ef94b107740a15adc4d8f8be2b66e6af4f4e0d23->enter($__internal_1daaad549f6bd8351192a8d3ef94b107740a15adc4d8f8be2b66e6af4f4e0d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1daaad549f6bd8351192a8d3ef94b107740a15adc4d8f8be2b66e6af4f4e0d23->leave($__internal_1daaad549f6bd8351192a8d3ef94b107740a15adc4d8f8be2b66e6af4f4e0d23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a64d3d1f56cc70f898dca58ac6cf6290c1047f0a4b9e9d2d8560b507c3149d7d = $this->env->getExtension("native_profiler");
        $__internal_a64d3d1f56cc70f898dca58ac6cf6290c1047f0a4b9e9d2d8560b507c3149d7d->enter($__internal_a64d3d1f56cc70f898dca58ac6cf6290c1047f0a4b9e9d2d8560b507c3149d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a64d3d1f56cc70f898dca58ac6cf6290c1047f0a4b9e9d2d8560b507c3149d7d->leave($__internal_a64d3d1f56cc70f898dca58ac6cf6290c1047f0a4b9e9d2d8560b507c3149d7d_prof);

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
