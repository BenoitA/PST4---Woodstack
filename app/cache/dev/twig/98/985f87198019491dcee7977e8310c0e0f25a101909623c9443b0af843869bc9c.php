<?php

/* WSWoodstackBundle:Navbar:Navbar.html.twig */
class __TwigTemplate_125ecb0c3e95a59441073560ad705f54a80f71d308cbf879dd1b879bd8feb5dd extends Twig_Template
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
        $__internal_4bcaec474709f7adcbb207aba7e69ba608dd8f0fefc4218710fd28b1db23e4ff = $this->env->getExtension("native_profiler");
        $__internal_4bcaec474709f7adcbb207aba7e69ba608dd8f0fefc4218710fd28b1db23e4ff->enter($__internal_4bcaec474709f7adcbb207aba7e69ba608dd8f0fefc4218710fd28b1db23e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Navbar:Navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bcaec474709f7adcbb207aba7e69ba608dd8f0fefc4218710fd28b1db23e4ff->leave($__internal_4bcaec474709f7adcbb207aba7e69ba608dd8f0fefc4218710fd28b1db23e4ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1285ea5aca9d53a3ff35b0fa8535381e13d4aef6d8e6101526fef861508be145 = $this->env->getExtension("native_profiler");
        $__internal_1285ea5aca9d53a3ff35b0fa8535381e13d4aef6d8e6101526fef861508be145->enter($__internal_1285ea5aca9d53a3ff35b0fa8535381e13d4aef6d8e6101526fef861508be145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profil ";
        
        $__internal_1285ea5aca9d53a3ff35b0fa8535381e13d4aef6d8e6101526fef861508be145->leave($__internal_1285ea5aca9d53a3ff35b0fa8535381e13d4aef6d8e6101526fef861508be145_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8144e8d8313280fa30555e0991d74f62e62a514c3df83c4d737b59d8f7b522e = $this->env->getExtension("native_profiler");
        $__internal_b8144e8d8313280fa30555e0991d74f62e62a514c3df83c4d737b59d8f7b522e->enter($__internal_b8144e8d8313280fa30555e0991d74f62e62a514c3df83c4d737b59d8f7b522e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t <ul class=\"nav nav-pills\">

  <li class=\"active\"><a href=\"#\">Info client</a></li>
  <li><a href=\"#\">Projet client</a></li>
  <li><a href=\"#\">Historique</a></li>
  <li><a href=\"#\">Partage de doc</a></li>

</ul>
";
        
        $__internal_b8144e8d8313280fa30555e0991d74f62e62a514c3df83c4d737b59d8f7b522e->leave($__internal_b8144e8d8313280fa30555e0991d74f62e62a514c3df83c4d737b59d8f7b522e_prof);

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
/* */
/*   <li class="active"><a href="#">Info client</a></li>*/
/*   <li><a href="#">Projet client</a></li>*/
/*   <li><a href="#">Historique</a></li>*/
/*   <li><a href="#">Partage de doc</a></li>*/
/* */
/* </ul>*/
/* {% endblock fos_user_content %}*/
/* */
