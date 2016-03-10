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
        $__internal_9ae7bad97302131ac516ce60595f3907e8bc53042e0a4985e5700bb249476415 = $this->env->getExtension("native_profiler");
        $__internal_9ae7bad97302131ac516ce60595f3907e8bc53042e0a4985e5700bb249476415->enter($__internal_9ae7bad97302131ac516ce60595f3907e8bc53042e0a4985e5700bb249476415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9ae7bad97302131ac516ce60595f3907e8bc53042e0a4985e5700bb249476415->leave($__internal_9ae7bad97302131ac516ce60595f3907e8bc53042e0a4985e5700bb249476415_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b71d40b2ca52b3faa250fdf4548438b11a5e93c1ec7499300cb545ca23a59d6e = $this->env->getExtension("native_profiler");
        $__internal_b71d40b2ca52b3faa250fdf4548438b11a5e93c1ec7499300cb545ca23a59d6e->enter($__internal_b71d40b2ca52b3faa250fdf4548438b11a5e93c1ec7499300cb545ca23a59d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b71d40b2ca52b3faa250fdf4548438b11a5e93c1ec7499300cb545ca23a59d6e->leave($__internal_b71d40b2ca52b3faa250fdf4548438b11a5e93c1ec7499300cb545ca23a59d6e_prof);

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
