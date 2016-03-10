<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ef4e9da69a20a153d9c0c6901b47da0b430814dc08011ab42577d3c684b66f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4be05105f6b64249079579ef5a8ef5490458b30f3b2ab69820376c677daaa52 = $this->env->getExtension("native_profiler");
        $__internal_f4be05105f6b64249079579ef5a8ef5490458b30f3b2ab69820376c677daaa52->enter($__internal_f4be05105f6b64249079579ef5a8ef5490458b30f3b2ab69820376c677daaa52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f4be05105f6b64249079579ef5a8ef5490458b30f3b2ab69820376c677daaa52->leave($__internal_f4be05105f6b64249079579ef5a8ef5490458b30f3b2ab69820376c677daaa52_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c734caae3cfab9ee90aab7366b9892ef1a912a77daf7c870ff0e14e5fb6c5b1 = $this->env->getExtension("native_profiler");
        $__internal_2c734caae3cfab9ee90aab7366b9892ef1a912a77daf7c870ff0e14e5fb6c5b1->enter($__internal_2c734caae3cfab9ee90aab7366b9892ef1a912a77daf7c870ff0e14e5fb6c5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2c734caae3cfab9ee90aab7366b9892ef1a912a77daf7c870ff0e14e5fb6c5b1->leave($__internal_2c734caae3cfab9ee90aab7366b9892ef1a912a77daf7c870ff0e14e5fb6c5b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
