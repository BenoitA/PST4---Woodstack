<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_7173380a3a86a9dd3d0bdd664ed79f03af6e3ed6a9f21c71fa56770552eb6921 extends Twig_Template
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
        $__internal_0170e6e3831dfe34d45aaf3a04be0eadd35726abccb8e3a137836f6b17c3eaa1 = $this->env->getExtension("native_profiler");
        $__internal_0170e6e3831dfe34d45aaf3a04be0eadd35726abccb8e3a137836f6b17c3eaa1->enter($__internal_0170e6e3831dfe34d45aaf3a04be0eadd35726abccb8e3a137836f6b17c3eaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'annonce</h3>

";
        // line 39
        echo "\t\t";
        
        $__internal_0170e6e3831dfe34d45aaf3a04be0eadd35726abccb8e3a137836f6b17c3eaa1->leave($__internal_0170e6e3831dfe34d45aaf3a04be0eadd35726abccb8e3a137836f6b17c3eaa1_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 39,  22 => 1,);
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