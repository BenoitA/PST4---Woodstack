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
        $__internal_18e60443cde193cb1c5e5901de62dcc68098f4b68deee2314b6500036343dc59 = $this->env->getExtension("native_profiler");
        $__internal_18e60443cde193cb1c5e5901de62dcc68098f4b68deee2314b6500036343dc59->enter($__internal_18e60443cde193cb1c5e5901de62dcc68098f4b68deee2314b6500036343dc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Navbar:Navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e60443cde193cb1c5e5901de62dcc68098f4b68deee2314b6500036343dc59->leave($__internal_18e60443cde193cb1c5e5901de62dcc68098f4b68deee2314b6500036343dc59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1fe4cebd5f31da822efc1b013a51644828763fc36a966f5710e380d2d9722a2 = $this->env->getExtension("native_profiler");
        $__internal_a1fe4cebd5f31da822efc1b013a51644828763fc36a966f5710e380d2d9722a2->enter($__internal_a1fe4cebd5f31da822efc1b013a51644828763fc36a966f5710e380d2d9722a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profil ";
        
        $__internal_a1fe4cebd5f31da822efc1b013a51644828763fc36a966f5710e380d2d9722a2->leave($__internal_a1fe4cebd5f31da822efc1b013a51644828763fc36a966f5710e380d2d9722a2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3035e06ed81ed479889263231a2a4647cf794da05a7c0aa62f1b08213ed5399 = $this->env->getExtension("native_profiler");
        $__internal_e3035e06ed81ed479889263231a2a4647cf794da05a7c0aa62f1b08213ed5399->enter($__internal_e3035e06ed81ed479889263231a2a4647cf794da05a7c0aa62f1b08213ed5399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t <ul class=\"nav nav-pills\">

  <li class=\"active\"><a href=\"#\">Info client</a></li>
  <li><a href=\"#\">Projet client</a></li>
  <li><a href=\"#\">Historique</a></li>
  <li><a href=\"#\">Partage de doc</a></li>

</ul>
";
        
        $__internal_e3035e06ed81ed479889263231a2a4647cf794da05a7c0aa62f1b08213ed5399->leave($__internal_e3035e06ed81ed479889263231a2a4647cf794da05a7c0aa62f1b08213ed5399_prof);

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
