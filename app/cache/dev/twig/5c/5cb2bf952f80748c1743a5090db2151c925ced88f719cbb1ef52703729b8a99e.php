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
        $__internal_7ebe6e1fa70525a2aa45fe149abfbf2d964adca967c5aa5524c7d44124ba3f9e = $this->env->getExtension("native_profiler");
        $__internal_7ebe6e1fa70525a2aa45fe149abfbf2d964adca967c5aa5524c7d44124ba3f9e->enter($__internal_7ebe6e1fa70525a2aa45fe149abfbf2d964adca967c5aa5524c7d44124ba3f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ebe6e1fa70525a2aa45fe149abfbf2d964adca967c5aa5524c7d44124ba3f9e->leave($__internal_7ebe6e1fa70525a2aa45fe149abfbf2d964adca967c5aa5524c7d44124ba3f9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_750223a4a66f41099d2687195a0b753f463c5b759dee6cfed4f9ba38beea08fb = $this->env->getExtension("native_profiler");
        $__internal_750223a4a66f41099d2687195a0b753f463c5b759dee6cfed4f9ba38beea08fb->enter($__internal_750223a4a66f41099d2687195a0b753f463c5b759dee6cfed4f9ba38beea08fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_750223a4a66f41099d2687195a0b753f463c5b759dee6cfed4f9ba38beea08fb->leave($__internal_750223a4a66f41099d2687195a0b753f463c5b759dee6cfed4f9ba38beea08fb_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56f5efa8b6fe035e06b67904203e5a31115d1b28f16c4bbc5c5f3c6824ad865e = $this->env->getExtension("native_profiler");
        $__internal_56f5efa8b6fe035e06b67904203e5a31115d1b28f16c4bbc5c5f3c6824ad865e->enter($__internal_56f5efa8b6fe035e06b67904203e5a31115d1b28f16c4bbc5c5f3c6824ad865e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
";
        } else {
            // line 40
            echo "
\t<form class=\"form-inline margform\" role=\"form\" name=\"formulaire\" action=\"connect.php\" method=\"POST\" enctype=\"multipart/form-data\">
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
        
        $__internal_56f5efa8b6fe035e06b67904203e5a31115d1b28f16c4bbc5c5f3c6824ad865e->leave($__internal_56f5efa8b6fe035e06b67904203e5a31115d1b28f16c4bbc5c5f3c6824ad865e_prof);

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
/* {% else %}*/
/* */
/* 	<form class="form-inline margform" role="form" name="formulaire" action="connect.php" method="POST" enctype="multipart/form-data">*/
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
