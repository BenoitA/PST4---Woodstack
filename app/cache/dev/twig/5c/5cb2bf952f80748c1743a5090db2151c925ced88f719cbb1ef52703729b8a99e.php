<?php

/* WSWoodstackBundle:Wood:index.html.twig */
class __TwigTemplate_334bca12ba62dcb260eb7f30d90d3b172236164266b83e6ac54c3809e0b367f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Wood:index.html.twig", 1);
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
        $__internal_4ebd5882aff30191db2011a72442b2bab6b6fe6eba2d2b7ba13168b15e1cede9 = $this->env->getExtension("native_profiler");
        $__internal_4ebd5882aff30191db2011a72442b2bab6b6fe6eba2d2b7ba13168b15e1cede9->enter($__internal_4ebd5882aff30191db2011a72442b2bab6b6fe6eba2d2b7ba13168b15e1cede9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ebd5882aff30191db2011a72442b2bab6b6fe6eba2d2b7ba13168b15e1cede9->leave($__internal_4ebd5882aff30191db2011a72442b2bab6b6fe6eba2d2b7ba13168b15e1cede9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9fdd2dc3f2d37abdc9cc14f28bb1d5e8e08f979604f0529b25fa20c57382ef8 = $this->env->getExtension("native_profiler");
        $__internal_a9fdd2dc3f2d37abdc9cc14f28bb1d5e8e08f979604f0529b25fa20c57382ef8->enter($__internal_a9fdd2dc3f2d37abdc9cc14f28bb1d5e8e08f979604f0529b25fa20c57382ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_a9fdd2dc3f2d37abdc9cc14f28bb1d5e8e08f979604f0529b25fa20c57382ef8->leave($__internal_a9fdd2dc3f2d37abdc9cc14f28bb1d5e8e08f979604f0529b25fa20c57382ef8_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b1bb84005287065ab6755b71b8dc138ef1f7411a5aa2766f9c233226d328d2a = $this->env->getExtension("native_profiler");
        $__internal_9b1bb84005287065ab6755b71b8dc138ef1f7411a5aa2766f9c233226d328d2a->enter($__internal_9b1bb84005287065ab6755b71b8dc138ef1f7411a5aa2766f9c233226d328d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
<div id=\"myCarousel\" class=\"carousel slide text-center\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
    <h4>\"This company is the best. I am so happy with the result!\"<br><span style=\"font-style:normal;\">Michael Roe, Vice President, Comment Box</span></h4>
    </div>
    <div class=\"item\">
      <h4>\"One word... WOW!!\"<br><span style=\"font-style:normal;\">John Doe, Salesman, Rep Inc</span></h4>
    </div>
    <div class=\"item\">
      <h4>\"Could I... BE any more happy with this company?\"<br><span style=\"font-style:normal;\">Chandler Bing, Actor, FriendsAlot</span></h4>/pP
    </div>
  </div>

  <!-- Left and right controls -->
  <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>


";
        
        $__internal_9b1bb84005287065ab6755b71b8dc138ef1f7411a5aa2766f9c233226d328d2a->leave($__internal_9b1bb84005287065ab6755b71b8dc138ef1f7411a5aa2766f9c233226d328d2a_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Wood:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* {% block fos_user_content %}*/
/* */
/* <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">*/
/*   <!-- Indicators -->*/
/*   <ol class="carousel-indicators">*/
/*     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*     <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*     <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*   </ol>*/
/* */
/*   <!-- Wrapper for slides -->*/
/*   <div class="carousel-inner" role="listbox">*/
/*     <div class="item active">*/
/*     <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>*/
/*     </div>*/
/*     <div class="item">*/
/*       <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>*/
/*     </div>*/
/*     <div class="item">*/
/*       <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>/pP*/
/*     </div>*/
/*   </div>*/
/* */
/*   <!-- Left and right controls -->*/
/*   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*     <span class="sr-only">Previous</span>*/
/*   </a>*/
/*   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*     <span class="sr-only">Next</span>*/
/*   </a>*/
/* </div>*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
