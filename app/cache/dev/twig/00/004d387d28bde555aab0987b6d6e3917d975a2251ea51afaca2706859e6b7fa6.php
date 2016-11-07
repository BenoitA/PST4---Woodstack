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
        $__internal_b7c2c6acef50760734ea05b791bae11635ca2fc5cc79408e9d4bdacc730c3f6f = $this->env->getExtension("native_profiler");
        $__internal_b7c2c6acef50760734ea05b791bae11635ca2fc5cc79408e9d4bdacc730c3f6f->enter($__internal_b7c2c6acef50760734ea05b791bae11635ca2fc5cc79408e9d4bdacc730c3f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b7c2c6acef50760734ea05b791bae11635ca2fc5cc79408e9d4bdacc730c3f6f->leave($__internal_b7c2c6acef50760734ea05b791bae11635ca2fc5cc79408e9d4bdacc730c3f6f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_63af45a02bad2e78e54d3374d659b5540c11fc67b54c16c5c9d24b28763da02a = $this->env->getExtension("native_profiler");
        $__internal_63af45a02bad2e78e54d3374d659b5540c11fc67b54c16c5c9d24b28763da02a->enter($__internal_63af45a02bad2e78e54d3374d659b5540c11fc67b54c16c5c9d24b28763da02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_63af45a02bad2e78e54d3374d659b5540c11fc67b54c16c5c9d24b28763da02a->leave($__internal_63af45a02bad2e78e54d3374d659b5540c11fc67b54c16c5c9d24b28763da02a_prof);

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
