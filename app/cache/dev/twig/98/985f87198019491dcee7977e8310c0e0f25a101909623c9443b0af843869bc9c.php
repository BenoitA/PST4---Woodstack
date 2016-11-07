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
        $__internal_11a9d42824e8be6375d8855a9a632472df332f3dc73bb3bb5bbafcdcf8dce1a1 = $this->env->getExtension("native_profiler");
        $__internal_11a9d42824e8be6375d8855a9a632472df332f3dc73bb3bb5bbafcdcf8dce1a1->enter($__internal_11a9d42824e8be6375d8855a9a632472df332f3dc73bb3bb5bbafcdcf8dce1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Navbar:Navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11a9d42824e8be6375d8855a9a632472df332f3dc73bb3bb5bbafcdcf8dce1a1->leave($__internal_11a9d42824e8be6375d8855a9a632472df332f3dc73bb3bb5bbafcdcf8dce1a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8dd0ad061a830315a80663d9f5dc5f1819d571d07389d21e5182e5166f51cfc6 = $this->env->getExtension("native_profiler");
        $__internal_8dd0ad061a830315a80663d9f5dc5f1819d571d07389d21e5182e5166f51cfc6->enter($__internal_8dd0ad061a830315a80663d9f5dc5f1819d571d07389d21e5182e5166f51cfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profil ";
        
        $__internal_8dd0ad061a830315a80663d9f5dc5f1819d571d07389d21e5182e5166f51cfc6->leave($__internal_8dd0ad061a830315a80663d9f5dc5f1819d571d07389d21e5182e5166f51cfc6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cfdccd65ee00b8175b537b8bb832c5f018b343028f5c48e816500c9a8f555b0 = $this->env->getExtension("native_profiler");
        $__internal_7cfdccd65ee00b8175b537b8bb832c5f018b343028f5c48e816500c9a8f555b0->enter($__internal_7cfdccd65ee00b8175b537b8bb832c5f018b343028f5c48e816500c9a8f555b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t <ul class=\"nav nav-pills\">

  <li class=\"active\"><a href=\"#\">Info client</a></li>
  <li><a href=\"#\">Projet client</a></li>
  <li><a href=\"#\">Historique</a></li>
  <li><a href=\"#\">Partage de doc</a></li>

</ul>
";
        
        $__internal_7cfdccd65ee00b8175b537b8bb832c5f018b343028f5c48e816500c9a8f555b0->leave($__internal_7cfdccd65ee00b8175b537b8bb832c5f018b343028f5c48e816500c9a8f555b0_prof);

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
