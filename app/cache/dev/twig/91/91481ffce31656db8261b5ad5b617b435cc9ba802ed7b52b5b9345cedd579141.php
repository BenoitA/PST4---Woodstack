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
        $__internal_08c521330c010e1a05e613b19889487d9b6fa22d2003885a13eb57a1f36a9c88 = $this->env->getExtension("native_profiler");
        $__internal_08c521330c010e1a05e613b19889487d9b6fa22d2003885a13eb57a1f36a9c88->enter($__internal_08c521330c010e1a05e613b19889487d9b6fa22d2003885a13eb57a1f36a9c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Navbar:Navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c521330c010e1a05e613b19889487d9b6fa22d2003885a13eb57a1f36a9c88->leave($__internal_08c521330c010e1a05e613b19889487d9b6fa22d2003885a13eb57a1f36a9c88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_052ade81271fa931858a9ed868622b7eade6f44037cda7ed0c0905ad7db26006 = $this->env->getExtension("native_profiler");
        $__internal_052ade81271fa931858a9ed868622b7eade6f44037cda7ed0c0905ad7db26006->enter($__internal_052ade81271fa931858a9ed868622b7eade6f44037cda7ed0c0905ad7db26006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profil ";
        
        $__internal_052ade81271fa931858a9ed868622b7eade6f44037cda7ed0c0905ad7db26006->leave($__internal_052ade81271fa931858a9ed868622b7eade6f44037cda7ed0c0905ad7db26006_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9d9ae2952dd62bca96078a58d0f43690641b8965f4ba89310ab21114d29a7e6 = $this->env->getExtension("native_profiler");
        $__internal_d9d9ae2952dd62bca96078a58d0f43690641b8965f4ba89310ab21114d29a7e6->enter($__internal_d9d9ae2952dd62bca96078a58d0f43690641b8965f4ba89310ab21114d29a7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t <ul class=\"nav nav-pills\">
<<<<<<< HEAD
  <li class=\"active\"><a href=\"#\">Info client</a></li>
  <li><a href=\"#\">Projet client</a></li>
  <li><a href=\"#\">Historique</a></li>
  <li><a href=\"#\">Partage de doc</a></li>
=======
  <li class=\"active\"><a href=\"#\">Infos</a></li>
  <li><a href=\"#\">Projet</a></li>
  <li><a href=\"#\">Historique commercial</a></li>
  <li><a href=\"#\">Partage de fichiers</a></li>
>>>>>>> 6a3202c31a6a8901bc5c2454404b9e899d7280d9
</ul>
";
        
        $__internal_d9d9ae2952dd62bca96078a58d0f43690641b8965f4ba89310ab21114d29a7e6->leave($__internal_d9d9ae2952dd62bca96078a58d0f43690641b8965f4ba89310ab21114d29a7e6_prof);

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
/* <<<<<<< HEAD*/
/*   <li class="active"><a href="#">Info client</a></li>*/
/*   <li><a href="#">Projet client</a></li>*/
/*   <li><a href="#">Historique</a></li>*/
/*   <li><a href="#">Partage de doc</a></li>*/
/* =======*/
/*   <li class="active"><a href="#">Infos</a></li>*/
/*   <li><a href="#">Projet</a></li>*/
/*   <li><a href="#">Historique commercial</a></li>*/
/*   <li><a href="#">Partage de fichiers</a></li>*/
/* >>>>>>> 6a3202c31a6a8901bc5c2454404b9e899d7280d9*/
/* </ul>*/
/* {% endblock fos_user_content %}*/
/* */
