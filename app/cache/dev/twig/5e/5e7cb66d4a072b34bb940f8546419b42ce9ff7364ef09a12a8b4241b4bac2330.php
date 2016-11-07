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
        $__internal_737eaf3c56a521e5fbbef6d9f4f6d06a162a25e156f69567a086d87d5289ee91 = $this->env->getExtension("native_profiler");
        $__internal_737eaf3c56a521e5fbbef6d9f4f6d06a162a25e156f69567a086d87d5289ee91->enter($__internal_737eaf3c56a521e5fbbef6d9f4f6d06a162a25e156f69567a086d87d5289ee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737eaf3c56a521e5fbbef6d9f4f6d06a162a25e156f69567a086d87d5289ee91->leave($__internal_737eaf3c56a521e5fbbef6d9f4f6d06a162a25e156f69567a086d87d5289ee91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c85a1dbae2de54a50a418c9d7857f63900e5b53c984e45b8f90ae5ff8fa8c9e = $this->env->getExtension("native_profiler");
        $__internal_6c85a1dbae2de54a50a418c9d7857f63900e5b53c984e45b8f90ae5ff8fa8c9e->enter($__internal_6c85a1dbae2de54a50a418c9d7857f63900e5b53c984e45b8f90ae5ff8fa8c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_6c85a1dbae2de54a50a418c9d7857f63900e5b53c984e45b8f90ae5ff8fa8c9e->leave($__internal_6c85a1dbae2de54a50a418c9d7857f63900e5b53c984e45b8f90ae5ff8fa8c9e_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e841ca7acbdf505a7f227c20e587c4249d7578dbfefba610c0d96aeee9a9014 = $this->env->getExtension("native_profiler");
        $__internal_6e841ca7acbdf505a7f227c20e587c4249d7578dbfefba610c0d96aeee9a9014->enter($__internal_6e841ca7acbdf505a7f227c20e587c4249d7578dbfefba610c0d96aeee9a9014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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

</br>
\t<table class=\"table table-striped table-bordered\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Ville</th>
        <th>Commercial</th>
        <th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 74
                echo "\t\t\t<tr>
\t\t\t\t<td><a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ws_woodstack_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
                echo "</a></td>
\t\t\t\t<td><a href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ws_woodstack_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
                echo "</a></td>
        <td><a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ws_woodstack_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "prenom", array()), "html", null, true);
                echo "</a></td>
        <td><a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ws_woodstack_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "ville", array()), "html", null, true);
                echo "</a></td>
        <td><a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ws_woodstack_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "Commercial", array()), "html", null, true);
                echo "</a></td>
        <td><a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ws_woodstack_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
                echo "\" role=\"button\"><img src=\"/PST4-Woodstack/web/edit-icon.png\" style=\"width:22px;height:22px;border:0;\" alt=\"Modifier\"></a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t</tbody>
\t</table>
";
        }
        // line 85
        echo "\t


";
        
        $__internal_6e841ca7acbdf505a7f227c20e587c4249d7578dbfefba610c0d96aeee9a9014->leave($__internal_6e841ca7acbdf505a7f227c20e587c4249d7578dbfefba610c0d96aeee9a9014_prof);

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
        return array (  177 => 85,  172 => 83,  163 => 80,  157 => 79,  151 => 78,  145 => 77,  139 => 76,  133 => 75,  130 => 74,  126 => 73,  102 => 51,  57 => 8,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
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
/* </br>*/
/* 	<table class="table table-striped table-bordered">*/
/* 		<thead>*/
/* 			<tr>*/
/* 				<th>Id</th>*/
/*         <th>Nom</th>*/
/*         <th>Prenom</th>*/
/*         <th>Ville</th>*/
/*         <th>Commercial</th>*/
/*         <th></th>*/
/* 			</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		{% for client in clients %}*/
/* 			<tr>*/
/* 				<td><a href="{{ path('ws_woodstack_show', { 'id': client.id}) }}" role="button">{{ client.id }}</a></td>*/
/* 				<td><a href="{{ path('ws_woodstack_show', { 'id': client.id}) }}" role="button">{{ client.nom }}</a></td>*/
/*         <td><a href="{{ path('ws_woodstack_show', { 'id': client.id}) }}" role="button">{{ client.prenom }}</a></td>*/
/*         <td><a href="{{ path('ws_woodstack_show', { 'id': client.id}) }}" role="button">{{ client.ville }}</a></td>*/
/*         <td><a href="{{ path('ws_woodstack_show', { 'id': client.id}) }}" role="button">{{ client.Commercial }}</a></td>*/
/*         <td><a href="{{ path('ws_woodstack_edit', { 'id': client.id}) }}" role="button"><img src="/PST4-Woodstack/web/edit-icon.png" style="width:22px;height:22px;border:0;" alt="Modifier"></a></td>*/
/* 			</tr>*/
/* 		{% endfor %}*/
/* 		</tbody>*/
/* 	</table>*/
/* {% endif %}	*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
