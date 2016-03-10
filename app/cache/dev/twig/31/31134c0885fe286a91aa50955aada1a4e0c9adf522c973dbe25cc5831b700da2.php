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
        $__internal_3c5df1eb4c0f2c4253e52fc152e4ce31899127151783919821f3df343ad162c6 = $this->env->getExtension("native_profiler");
        $__internal_3c5df1eb4c0f2c4253e52fc152e4ce31899127151783919821f3df343ad162c6->enter($__internal_3c5df1eb4c0f2c4253e52fc152e4ce31899127151783919821f3df343ad162c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3c5df1eb4c0f2c4253e52fc152e4ce31899127151783919821f3df343ad162c6->leave($__internal_3c5df1eb4c0f2c4253e52fc152e4ce31899127151783919821f3df343ad162c6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7a507194019ee5b111413d668a84b820eb45d948a447a62021003afae9324a93 = $this->env->getExtension("native_profiler");
        $__internal_7a507194019ee5b111413d668a84b820eb45d948a447a62021003afae9324a93->enter($__internal_7a507194019ee5b111413d668a84b820eb45d948a447a62021003afae9324a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7a507194019ee5b111413d668a84b820eb45d948a447a62021003afae9324a93->leave($__internal_7a507194019ee5b111413d668a84b820eb45d948a447a62021003afae9324a93_prof);

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
