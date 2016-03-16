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
        $__internal_31c2d352319d327897971eb5ba864225f75526eefae0d7e9c754a29ebcb606e9 = $this->env->getExtension("native_profiler");
        $__internal_31c2d352319d327897971eb5ba864225f75526eefae0d7e9c754a29ebcb606e9->enter($__internal_31c2d352319d327897971eb5ba864225f75526eefae0d7e9c754a29ebcb606e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31c2d352319d327897971eb5ba864225f75526eefae0d7e9c754a29ebcb606e9->leave($__internal_31c2d352319d327897971eb5ba864225f75526eefae0d7e9c754a29ebcb606e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_805fbcac73f80e4365dee06166a62c090a32c40883a953996709a3ee482b4781 = $this->env->getExtension("native_profiler");
        $__internal_805fbcac73f80e4365dee06166a62c090a32c40883a953996709a3ee482b4781->enter($__internal_805fbcac73f80e4365dee06166a62c090a32c40883a953996709a3ee482b4781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_805fbcac73f80e4365dee06166a62c090a32c40883a953996709a3ee482b4781->leave($__internal_805fbcac73f80e4365dee06166a62c090a32c40883a953996709a3ee482b4781_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11f56fe3da84363831d5d88fca919c5efde3b242968eb788764940ed89195a1e = $this->env->getExtension("native_profiler");
        $__internal_11f56fe3da84363831d5d88fca919c5efde3b242968eb788764940ed89195a1e->enter($__internal_11f56fe3da84363831d5d88fca919c5efde3b242968eb788764940ed89195a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "<div id=\"myCarousel\" class=\"carousel slide text-center\" data-ride=\"carousel\">
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
        } else {
            // line 40
            echo "
\t<form class=\"form-inline margform\" role=\"form\" name=\"formulaire\" action=\"connect.php\" method=\"GET\" enctype=\"multipart/form-data\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"client\">Nom client :</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"client\" id=\"client\" required placeholder=\"Nom\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
\t</form>

";
        }
        // line 49
        echo "\t

";
        
        $__internal_11f56fe3da84363831d5d88fca919c5efde3b242968eb788764940ed89195a1e->leave($__internal_11f56fe3da84363831d5d88fca919c5efde3b242968eb788764940ed89195a1e_prof);

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
        return array (  103 => 49,  91 => 40,  57 => 8,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* {% block fos_user_content %}*/
/* {% if not is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
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
/* {% else %}*/
/* */
/* 	<form class="form-inline margform" role="form" name="formulaire" action="connect.php" method="GET" enctype="multipart/form-data">*/
/* 		<div class="form-group">*/
/* 			<label for="client">Nom client :</label>*/
/* 			<input type="text" class="form-control" name="client" id="client" required placeholder="Nom">*/
/* 		</div>*/
/* 		<button type="submit" class="btn btn-primary">Rechercher</button>*/
/* 	</form>*/
/* */
/* {% endif %}	*/
/* */
/* {% endblock fos_user_content %}*/
/* */
