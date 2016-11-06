<?php

/* WSWoodstackBundle:Client:client.html.twig */
class __TwigTemplate_2735f2b3408d33021515c769af960a191df90ff65b9435d8f027560663d2e88c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Client:client.html.twig", 1);
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
        $__internal_fc21144df5ae59411cd05631920def14c81fb677bc70f3e58ed3b7d660e98dc7 = $this->env->getExtension("native_profiler");
        $__internal_fc21144df5ae59411cd05631920def14c81fb677bc70f3e58ed3b7d660e98dc7->enter($__internal_fc21144df5ae59411cd05631920def14c81fb677bc70f3e58ed3b7d660e98dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Client:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc21144df5ae59411cd05631920def14c81fb677bc70f3e58ed3b7d660e98dc7->leave($__internal_fc21144df5ae59411cd05631920def14c81fb677bc70f3e58ed3b7d660e98dc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f90813c4a87a9a4c2380fa6030a590ce85e0014e4b6967d6fc38235aa83460a = $this->env->getExtension("native_profiler");
        $__internal_1f90813c4a87a9a4c2380fa6030a590ce85e0014e4b6967d6fc38235aa83460a->enter($__internal_1f90813c4a87a9a4c2380fa6030a590ce85e0014e4b6967d6fc38235aa83460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_1f90813c4a87a9a4c2380fa6030a590ce85e0014e4b6967d6fc38235aa83460a->leave($__internal_1f90813c4a87a9a4c2380fa6030a590ce85e0014e4b6967d6fc38235aa83460a_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99ffb537de1020e91775299a59b5fca9d9741322aff8f2084802d2d233b864bb = $this->env->getExtension("native_profiler");
        $__internal_99ffb537de1020e91775299a59b5fca9d9741322aff8f2084802d2d233b864bb->enter($__internal_99ffb537de1020e91775299a59b5fca9d9741322aff8f2084802d2d233b864bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "
<div class=\"row\">
  <div class=\"col-md-5\"></div>
  <div class=\"col-md-6\">
\t\t<div class=\"well\">
\t\t  ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t    <div class=\"form-group\">
\t\t      ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nom"));
        echo "
\t\t      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t      <div class=\"col-sm-8\">
\t\t        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t      </div>
 \t\t   </div>

  \t\t  <div class=\"form-group\">
 \t\t     ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Prenom"));
        echo "
  \t\t     ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
  \t\t     <div class=\"col-sm-8\">
  \t\t       ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
  \t\t    </div>
  \t\t  </div>

 \t\t   <div class=\"form-group\">
  \t\t     ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Adresse"));
        echo "
   \t\t\t ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
   \t\t     <div class=\"col-sm-8\">
  \t\t       ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
  \t\t    </div>
 \t\t   </div>

\t\t\t<div class=\"form-group\">
\t\t      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code_postal", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Code postal"));
        echo "
\t\t      ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code_postal", array()), 'errors');
        echo "
 \t\t     <div class=\"col-sm-8\">
 \t\t       ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code_postal", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t\t     </div>
 \t\t   </div>

\t\t\t<div class=\"form-group\">
 \t\t     ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "ville"));
        echo "
      \t     ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'errors');
        echo "
 \t\t     <div class=\"col-sm-8\">
 \t\t       ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t        </div>
\t\t    </div>

\t\t\t<div class=\"form-group\">
\t\t      ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commercial", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "commercial"));
        echo "
\t\t      ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commercial", array()), 'errors');
        echo "
\t\t      <div class=\"col-sm-8\">
\t\t        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commercial", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t      </div>
\t\t    </div>\t

\t\t\t<div class=\"form-group\">
\t\t      ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "telephone"));
        echo "
\t\t      ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
\t\t      <div class=\"col-sm-8\">
\t\t        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t      </div>
\t\t    </div>
\t\t
\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-sm-3\"></div>
  \t\t\t<div class=\"col-sm-6\">
\t\t\t  ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Enregistrer"));
        echo "
\t\t\t  ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-block")));
        echo "
\t\t\t</div>
  \t\t\t<div class=\"col-sm-3\">";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "</div>
\t\t</div>
  \t\t";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t </div>
  <div class=\"col-md-5\"></div>
</div>

";
        
        $__internal_99ffb537de1020e91775299a59b5fca9d9741322aff8f2084802d2d233b864bb->leave($__internal_99ffb537de1020e91775299a59b5fca9d9741322aff8f2084802d2d233b864bb_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Client:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 80,  202 => 78,  197 => 76,  193 => 75,  183 => 68,  178 => 66,  174 => 65,  166 => 60,  161 => 58,  157 => 57,  149 => 52,  144 => 50,  140 => 49,  132 => 44,  127 => 42,  123 => 41,  115 => 36,  110 => 34,  106 => 33,  98 => 28,  93 => 26,  89 => 25,  81 => 20,  76 => 18,  72 => 17,  66 => 14,  62 => 13,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack  */
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* <div class="row">*/
/*   <div class="col-md-5"></div>*/
/*   <div class="col-md-6">*/
/* 		<div class="well">*/
/* 		  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* 		  {{ form_errors(form) }}*/
/* */
/* 		    <div class="form-group">*/
/* 		      {{ form_label(form.nom, "Nom", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 		      {{ form_errors(form.nom) }}*/
/* 		      <div class="col-sm-8">*/
/* 		        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}*/
/* 		      </div>*/
/*  		   </div>*/
/* */
/*   		  <div class="form-group">*/
/*  		     {{ form_label(form.prenom, "Prenom", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*   		     {{ form_errors(form.prenom) }}*/
/*   		     <div class="col-sm-8">*/
/*   		       {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}*/
/*   		    </div>*/
/*   		  </div>*/
/* */
/*  		   <div class="form-group">*/
/*   		     {{ form_label(form.adresse, "Adresse", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*    			 {{ form_errors(form.adresse) }}*/
/*    		     <div class="col-sm-8">*/
/*   		       {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}*/
/*   		    </div>*/
/*  		   </div>*/
/* */
/* 			<div class="form-group">*/
/* 		      {{ form_label(form.code_postal, "Code postal", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 		      {{ form_errors(form.code_postal) }}*/
/*  		     <div class="col-sm-8">*/
/*  		       {{ form_widget(form.code_postal, {'attr': {'class': 'form-control'}}) }}*/
/*  		     </div>*/
/*  		   </div>*/
/* */
/* 			<div class="form-group">*/
/*  		     {{ form_label(form.ville, "ville", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       	     {{ form_errors(form.ville) }}*/
/*  		     <div class="col-sm-8">*/
/*  		       {{ form_widget(form.ville, {'attr': {'class': 'form-control'}}) }}*/
/* 	        </div>*/
/* 		    </div>*/
/* */
/* 			<div class="form-group">*/
/* 		      {{ form_label(form.commercial, "commercial", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 		      {{ form_errors(form.commercial) }}*/
/* 		      <div class="col-sm-8">*/
/* 		        {{ form_widget(form.commercial, {'attr': {'class': 'form-control'}}) }}*/
/* 		      </div>*/
/* 		    </div>	*/
/* */
/* 			<div class="form-group">*/
/* 		      {{ form_label(form.telephone, "telephone", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 		      {{ form_errors(form.telephone) }}*/
/* 		      <div class="col-sm-8">*/
/* 		        {{ form_widget(form.telephone, {'attr': {'class': 'form-control'}}) }}*/
/* 		      </div>*/
/* 		    </div>*/
/* 		*/
/* 		<div class="form-group">*/
/* 			<div class="col-sm-3"></div>*/
/*   			<div class="col-sm-6">*/
/* 			  {{ form_label(form.save, "Enregistrer", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 			  {{ form_widget(form.save, {'attr': {'class': 'btn btn-success btn-block'}}) }}*/
/* 			</div>*/
/*   			<div class="col-sm-3">{{ form_rest(form) }}</div>*/
/* 		</div>*/
/*   		{{ form_end(form) }}*/
/* 		</div>*/
/* 	 </div>*/
/*   <div class="col-md-5"></div>*/
/* </div>*/
/* */
/* {% endblock fos_user_content %}	*/
