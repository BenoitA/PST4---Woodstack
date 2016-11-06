<?php

/* WSWoodstackBundle:Wood:index.html.twig */
class __TwigTemplate_f2cdb0e00c5b1534ed007cb15923e784bcddaec34a6a8099ec34046c77172e33 extends Twig_Template
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
        $__internal_331c1b60823b0666bf86dd009e1a4ecdc6fdc82afa791bb0b6aa6de5c9a1d1ba = $this->env->getExtension("native_profiler");
        $__internal_331c1b60823b0666bf86dd009e1a4ecdc6fdc82afa791bb0b6aa6de5c9a1d1ba->enter($__internal_331c1b60823b0666bf86dd009e1a4ecdc6fdc82afa791bb0b6aa6de5c9a1d1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331c1b60823b0666bf86dd009e1a4ecdc6fdc82afa791bb0b6aa6de5c9a1d1ba->leave($__internal_331c1b60823b0666bf86dd009e1a4ecdc6fdc82afa791bb0b6aa6de5c9a1d1ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c4d2208ea1d72de67f09331d9c31a0bd78d459090324d7c4cb9a0473459fc7e = $this->env->getExtension("native_profiler");
        $__internal_1c4d2208ea1d72de67f09331d9c31a0bd78d459090324d7c4cb9a0473459fc7e->enter($__internal_1c4d2208ea1d72de67f09331d9c31a0bd78d459090324d7c4cb9a0473459fc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_1c4d2208ea1d72de67f09331d9c31a0bd78d459090324d7c4cb9a0473459fc7e->leave($__internal_1c4d2208ea1d72de67f09331d9c31a0bd78d459090324d7c4cb9a0473459fc7e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0791a51456a3c269c6b05d2b5fe1180cb2ede013dcd032f0439451807f9be7f1 = $this->env->getExtension("native_profiler");
        $__internal_0791a51456a3c269c6b05d2b5fe1180cb2ede013dcd032f0439451807f9be7f1->enter($__internal_0791a51456a3c269c6b05d2b5fe1180cb2ede013dcd032f0439451807f9be7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        if ( !$this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "
<div class=\"row\">
  <div class=\"col-md-4\"></div>
  <div class=\"col-md-8\">

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
    <h4>Accessibilité pour tous les commerciaux de l’entreprise</h4>
    </div>
    <div class=\"item\">
      <h4>Ameliore l’efficacité des commerciaux</h4>
    </div>
    <div class=\"item\">
      <h4>Données clients adaptées à l’entreprise</h4>
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

  </div>
  <div class=\"col-md-4\"></div>
</div>


";
        } else {
            // line 51
            echo "
\t<form class=\"form-inline margform\" role=\"form\" name=\"formulaire\" action=\"connect.php\" method=\"POST\" enctype=\"multipart/form-data\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"client\">Nom client :</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"client\" id=\"client\" required placeholder=\"Nom\">
\t\t</div>
\t\t<button type=\"submit\" class=\"btn btn-success\" >Rechercher</button>
\t</form>

";
        }
        // line 60
        echo "\t

";
        
        $__internal_0791a51456a3c269c6b05d2b5fe1180cb2ede013dcd032f0439451807f9be7f1->leave($__internal_0791a51456a3c269c6b05d2b5fe1180cb2ede013dcd032f0439451807f9be7f1_prof);

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
        return array (  114 => 60,  102 => 51,  57 => 8,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* {% block fos_user_content %}*/
/* {% if not is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/* <div class="row">*/
/*   <div class="col-md-4"></div>*/
/*   <div class="col-md-8">*/
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
/*     <h4>Accessibilité pour tous les commerciaux de l’entreprise</h4>*/
/*     </div>*/
/*     <div class="item">*/
/*       <h4>Ameliore l’efficacité des commerciaux</h4>*/
/*     </div>*/
/*     <div class="item">*/
/*       <h4>Données clients adaptées à l’entreprise</h4>*/
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
/*   </div>*/
/*   <div class="col-md-4"></div>*/
/* </div>*/
/* */
/* */
/* {% else %}*/
/* */
/* 	<form class="form-inline margform" role="form" name="formulaire" action="connect.php" method="POST" enctype="multipart/form-data">*/
/* 		<div class="form-group">*/
/* 			<label for="client">Nom client :</label>*/
/* 			<input type="text" class="form-control" name="client" id="client" required placeholder="Nom">*/
/* 		</div>*/
/* 		<button type="submit" class="btn btn-success" >Rechercher</button>*/
/* 	</form>*/
/* */
/* {% endif %}	*/
/* */
/* {% endblock fos_user_content %}*/
/* */
