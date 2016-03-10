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
        $__internal_9e0ed580a6af0c4f311a92e83b59556d73444a74efd3220c27f5122f1a922191 = $this->env->getExtension("native_profiler");
        $__internal_9e0ed580a6af0c4f311a92e83b59556d73444a74efd3220c27f5122f1a922191->enter($__internal_9e0ed580a6af0c4f311a92e83b59556d73444a74efd3220c27f5122f1a922191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9e0ed580a6af0c4f311a92e83b59556d73444a74efd3220c27f5122f1a922191->leave($__internal_9e0ed580a6af0c4f311a92e83b59556d73444a74efd3220c27f5122f1a922191_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e80a410529856e715d06447c7287ed40292f264b3b868da70fc77eaa8b0c41e = $this->env->getExtension("native_profiler");
        $__internal_4e80a410529856e715d06447c7287ed40292f264b3b868da70fc77eaa8b0c41e->enter($__internal_4e80a410529856e715d06447c7287ed40292f264b3b868da70fc77eaa8b0c41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4e80a410529856e715d06447c7287ed40292f264b3b868da70fc77eaa8b0c41e->leave($__internal_4e80a410529856e715d06447c7287ed40292f264b3b868da70fc77eaa8b0c41e_prof);

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
