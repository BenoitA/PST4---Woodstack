<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9c8096935896890ac70c7d779160afd20f375f9d5dbb42182a5a6644b2d4809e extends Twig_Template
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
        $__internal_e8dbbd2b51f3ba9ae9fbe001515e858f4029e77e165f52b91bc3045dc0f05ba1 = $this->env->getExtension("native_profiler");
        $__internal_e8dbbd2b51f3ba9ae9fbe001515e858f4029e77e165f52b91bc3045dc0f05ba1->enter($__internal_e8dbbd2b51f3ba9ae9fbe001515e858f4029e77e165f52b91bc3045dc0f05ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e8dbbd2b51f3ba9ae9fbe001515e858f4029e77e165f52b91bc3045dc0f05ba1->leave($__internal_e8dbbd2b51f3ba9ae9fbe001515e858f4029e77e165f52b91bc3045dc0f05ba1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a4ef9554f9d525cc7005f8e1392aafc6f90e97444c0ebd912c8af023dec188e = $this->env->getExtension("native_profiler");
        $__internal_3a4ef9554f9d525cc7005f8e1392aafc6f90e97444c0ebd912c8af023dec188e->enter($__internal_3a4ef9554f9d525cc7005f8e1392aafc6f90e97444c0ebd912c8af023dec188e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3a4ef9554f9d525cc7005f8e1392aafc6f90e97444c0ebd912c8af023dec188e->leave($__internal_3a4ef9554f9d525cc7005f8e1392aafc6f90e97444c0ebd912c8af023dec188e_prof);

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
