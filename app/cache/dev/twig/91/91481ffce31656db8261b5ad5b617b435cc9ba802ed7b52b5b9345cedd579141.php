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
        $__internal_db6d9525655ca73bddc818a9cee5ee6bae83be73d0a61d85b9d46e00691ad801 = $this->env->getExtension("native_profiler");
        $__internal_db6d9525655ca73bddc818a9cee5ee6bae83be73d0a61d85b9d46e00691ad801->enter($__internal_db6d9525655ca73bddc818a9cee5ee6bae83be73d0a61d85b9d46e00691ad801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Navbar:Navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db6d9525655ca73bddc818a9cee5ee6bae83be73d0a61d85b9d46e00691ad801->leave($__internal_db6d9525655ca73bddc818a9cee5ee6bae83be73d0a61d85b9d46e00691ad801_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20486deabe8c6b8e98b5fe9f5e84193d95d70267e343b89e8db9de20b25826c9 = $this->env->getExtension("native_profiler");
        $__internal_20486deabe8c6b8e98b5fe9f5e84193d95d70267e343b89e8db9de20b25826c9->enter($__internal_20486deabe8c6b8e98b5fe9f5e84193d95d70267e343b89e8db9de20b25826c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profil ";
        
        $__internal_20486deabe8c6b8e98b5fe9f5e84193d95d70267e343b89e8db9de20b25826c9->leave($__internal_20486deabe8c6b8e98b5fe9f5e84193d95d70267e343b89e8db9de20b25826c9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b734f77cea09cb6f29996f47abf1edd3a71088ecc18330a1f90b86c89af36463 = $this->env->getExtension("native_profiler");
        $__internal_b734f77cea09cb6f29996f47abf1edd3a71088ecc18330a1f90b86c89af36463->enter($__internal_b734f77cea09cb6f29996f47abf1edd3a71088ecc18330a1f90b86c89af36463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t <ul class=\"nav nav-pills\">
  <li class=\"active\"><a href=\"#\">Info client</a></li>
  <li><a href=\"#\">Projet client</a></li>
  <li><a href=\"#\">Historique</a></li>
  <li><a href=\"#\">Partage de doc</a></li>
</ul>
";
        
        $__internal_b734f77cea09cb6f29996f47abf1edd3a71088ecc18330a1f90b86c89af36463->leave($__internal_b734f77cea09cb6f29996f47abf1edd3a71088ecc18330a1f90b86c89af36463_prof);

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
/*   <li class="active"><a href="#">Info client</a></li>*/
/*   <li><a href="#">Projet client</a></li>*/
/*   <li><a href="#">Historique</a></li>*/
/*   <li><a href="#">Partage de doc</a></li>*/
/* </ul>*/
/* {% endblock fos_user_content %}*/
/* */
