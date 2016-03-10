<?php

/* WSWoodstackBundle:Navbar:Navbar.html.twig */
class __TwigTemplate_564ad6973b5abf25196e65b9a30826584d87fc6cb1fca9502957e6655ed8e484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Navbar:Navbar.html.twig", 1);
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
        $__internal_e90db197a573703c2b909a43ecaafb1372da424c48bce68bab6b12dea2f55a56 = $this->env->getExtension("native_profiler");
        $__internal_e90db197a573703c2b909a43ecaafb1372da424c48bce68bab6b12dea2f55a56->enter($__internal_e90db197a573703c2b909a43ecaafb1372da424c48bce68bab6b12dea2f55a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Navbar:Navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e90db197a573703c2b909a43ecaafb1372da424c48bce68bab6b12dea2f55a56->leave($__internal_e90db197a573703c2b909a43ecaafb1372da424c48bce68bab6b12dea2f55a56_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01759d1973fda554a41b045b30a00d5c07dfa88ccb7662fabe7b463bf8d13988 = $this->env->getExtension("native_profiler");
        $__internal_01759d1973fda554a41b045b30a00d5c07dfa88ccb7662fabe7b463bf8d13988->enter($__internal_01759d1973fda554a41b045b30a00d5c07dfa88ccb7662fabe7b463bf8d13988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profil ";
        
        $__internal_01759d1973fda554a41b045b30a00d5c07dfa88ccb7662fabe7b463bf8d13988->leave($__internal_01759d1973fda554a41b045b30a00d5c07dfa88ccb7662fabe7b463bf8d13988_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1930277fc0db0d64ae7c6b06a0032976bab508b04b1ce76c43ef982266bf8030 = $this->env->getExtension("native_profiler");
        $__internal_1930277fc0db0d64ae7c6b06a0032976bab508b04b1ce76c43ef982266bf8030->enter($__internal_1930277fc0db0d64ae7c6b06a0032976bab508b04b1ce76c43ef982266bf8030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t <ul class=\"nav nav-pills\">
  <li class=\"active\"><a href=\"#\">Home</a></li>
  <li><a href=\"#\">Menu 1</a></li>
  <li><a href=\"#\">Menu 2</a></li>
  <li><a href=\"#\">Menu 3</a></li>
</ul>
";
        
        $__internal_1930277fc0db0d64ae7c6b06a0032976bab508b04b1ce76c43ef982266bf8030->leave($__internal_1930277fc0db0d64ae7c6b06a0032976bab508b04b1ce76c43ef982266bf8030_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Navbar:Navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %} Profil {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* 	 <ul class="nav nav-pills">*/
/*   <li class="active"><a href="#">Home</a></li>*/
/*   <li><a href="#">Menu 1</a></li>*/
/*   <li><a href="#">Menu 2</a></li>*/
/*   <li><a href="#">Menu 3</a></li>*/
/* </ul>*/
/* {% endblock fos_user_content %}*/
/* */
