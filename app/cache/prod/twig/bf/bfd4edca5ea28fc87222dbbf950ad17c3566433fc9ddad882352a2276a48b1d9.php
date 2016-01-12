<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_83c6d8330d90871cb7b0d3816b48450a398b84dcea19e976dd06eaba167c55ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h3>Formulaire d'annonce</h3>

";
        // line 39
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 39,  19 => 1,);
    }
}
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* {#*/
/* <div class="well">*/
/* */
/* </div>*/
/* 	*/
/* 	{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* 	{{ form_errors(form) }}	*/
/* 	*/
/* 	<div class="form-group">*/
/* 		{{ form_label(form.title, "Titre de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 		*/
/* 		{{ form_errors(form.title) }}*/
/* 		*/
/* 			<div class="col-sm-4">*/
/* 				{{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/* 			</div>*/
/* 	</div>*/
/* */
/* 	<div class="form-group">	*/
/* 		{{ form_label(form.content, "Contenu de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* 		{{ form_errors(form.title) }}*/
/* 		<div class="col-sm-4">*/
/* 			{{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	{{ form_row(form.date) }}*/
/* 	{{ form_row(form.author) }}*/
/* 	{{ form_row(form.published) }}*/
/* 	*/
/* 	{{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* 	*/
/* 	{{ form_rest(form) }}*/
/* 	{{ form_end(form) }}*/
/* 	*/
/* </div>*/
/* 	#}		*/
