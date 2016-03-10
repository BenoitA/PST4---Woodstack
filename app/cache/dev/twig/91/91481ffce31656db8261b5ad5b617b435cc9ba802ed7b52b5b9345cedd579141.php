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
        $__internal_f4cfe37bcdcdff850bcdc8404381f5155362341b7d0f10e94a5cc1d7ad40f60f = $this->env->getExtension("native_profiler");
        $__internal_f4cfe37bcdcdff850bcdc8404381f5155362341b7d0f10e94a5cc1d7ad40f60f->enter($__internal_f4cfe37bcdcdff850bcdc8404381f5155362341b7d0f10e94a5cc1d7ad40f60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Navbar:Navbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4cfe37bcdcdff850bcdc8404381f5155362341b7d0f10e94a5cc1d7ad40f60f->leave($__internal_f4cfe37bcdcdff850bcdc8404381f5155362341b7d0f10e94a5cc1d7ad40f60f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_baacf1bf4744c55c18e442cc310535921fff01215a53d1b6c1fee0fef6cc7d07 = $this->env->getExtension("native_profiler");
        $__internal_baacf1bf4744c55c18e442cc310535921fff01215a53d1b6c1fee0fef6cc7d07->enter($__internal_baacf1bf4744c55c18e442cc310535921fff01215a53d1b6c1fee0fef6cc7d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Profil ";
        
        $__internal_baacf1bf4744c55c18e442cc310535921fff01215a53d1b6c1fee0fef6cc7d07->leave($__internal_baacf1bf4744c55c18e442cc310535921fff01215a53d1b6c1fee0fef6cc7d07_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_456870836338e3b2f85d177c6ae24db27896e12e9ce3e6da5fb14c85feea4847 = $this->env->getExtension("native_profiler");
        $__internal_456870836338e3b2f85d177c6ae24db27896e12e9ce3e6da5fb14c85feea4847->enter($__internal_456870836338e3b2f85d177c6ae24db27896e12e9ce3e6da5fb14c85feea4847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
\t <ul class=\"nav nav-pills\">
  <li class=\"active\"><a href=\"#\">Home</a></li>
  <li><a href=\"#\">Menu 1</a></li>
  <li><a href=\"#\">Menu 2</a></li>
  <li><a href=\"#\">Menu 3</a></li>
</ul>
";
        
        $__internal_456870836338e3b2f85d177c6ae24db27896e12e9ce3e6da5fb14c85feea4847->leave($__internal_456870836338e3b2f85d177c6ae24db27896e12e9ce3e6da5fb14c85feea4847_prof);

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
