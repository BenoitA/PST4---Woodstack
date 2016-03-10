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
        $__internal_0582000c553b9767541a2ef5bfaa1d5b3bd528642146ef773d7d2b8bea66c6f8 = $this->env->getExtension("native_profiler");
        $__internal_0582000c553b9767541a2ef5bfaa1d5b3bd528642146ef773d7d2b8bea66c6f8->enter($__internal_0582000c553b9767541a2ef5bfaa1d5b3bd528642146ef773d7d2b8bea66c6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Navbar:Navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0582000c553b9767541a2ef5bfaa1d5b3bd528642146ef773d7d2b8bea66c6f8->leave($__internal_0582000c553b9767541a2ef5bfaa1d5b3bd528642146ef773d7d2b8bea66c6f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf2bf138b8a6c6484989017d849a16161217077c56edd65cd731ff5109ed5a33 = $this->env->getExtension("native_profiler");
        $__internal_bf2bf138b8a6c6484989017d849a16161217077c56edd65cd731ff5109ed5a33->enter($__internal_bf2bf138b8a6c6484989017d849a16161217077c56edd65cd731ff5109ed5a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profil ";
        
        $__internal_bf2bf138b8a6c6484989017d849a16161217077c56edd65cd731ff5109ed5a33->leave($__internal_bf2bf138b8a6c6484989017d849a16161217077c56edd65cd731ff5109ed5a33_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ca50f6d1bb81fbb1ed88bdd5e56cfd4da83036f2e66272aa8e1476b2781ff6a = $this->env->getExtension("native_profiler");
        $__internal_7ca50f6d1bb81fbb1ed88bdd5e56cfd4da83036f2e66272aa8e1476b2781ff6a->enter($__internal_7ca50f6d1bb81fbb1ed88bdd5e56cfd4da83036f2e66272aa8e1476b2781ff6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t <ul class=\"nav nav-pills\">

  <li class=\"active\"><a href=\"#\">Info client</a></li>
  <li><a href=\"#\">Projet client</a></li>
  <li><a href=\"#\">Historique</a></li>
  <li><a href=\"#\">Partage de doc</a></li>

</ul>
";
        
        $__internal_7ca50f6d1bb81fbb1ed88bdd5e56cfd4da83036f2e66272aa8e1476b2781ff6a->leave($__internal_7ca50f6d1bb81fbb1ed88bdd5e56cfd4da83036f2e66272aa8e1476b2781ff6a_prof);

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
