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
        $__internal_81f864106fbf02d85f51c2aaf4764ab326484244b2609bc5801bbf6597a15cec = $this->env->getExtension("native_profiler");
        $__internal_81f864106fbf02d85f51c2aaf4764ab326484244b2609bc5801bbf6597a15cec->enter($__internal_81f864106fbf02d85f51c2aaf4764ab326484244b2609bc5801bbf6597a15cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81f864106fbf02d85f51c2aaf4764ab326484244b2609bc5801bbf6597a15cec->leave($__internal_81f864106fbf02d85f51c2aaf4764ab326484244b2609bc5801bbf6597a15cec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bfbbfa1c5c6a35c9010d11b8d26f10bcec969144d846468e798b75977b29f13 = $this->env->getExtension("native_profiler");
        $__internal_2bfbbfa1c5c6a35c9010d11b8d26f10bcec969144d846468e798b75977b29f13->enter($__internal_2bfbbfa1c5c6a35c9010d11b8d26f10bcec969144d846468e798b75977b29f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_2bfbbfa1c5c6a35c9010d11b8d26f10bcec969144d846468e798b75977b29f13->leave($__internal_2bfbbfa1c5c6a35c9010d11b8d26f10bcec969144d846468e798b75977b29f13_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b514b2d82a236e1f4024978fb21f9c266626b2f2bef1c1040dfe680331934bef = $this->env->getExtension("native_profiler");
        $__internal_b514b2d82a236e1f4024978fb21f9c266626b2f2bef1c1040dfe680331934bef->enter($__internal_b514b2d82a236e1f4024978fb21f9c266626b2f2bef1c1040dfe680331934bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_b514b2d82a236e1f4024978fb21f9c266626b2f2bef1c1040dfe680331934bef->leave($__internal_b514b2d82a236e1f4024978fb21f9c266626b2f2bef1c1040dfe680331934bef_prof);

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
