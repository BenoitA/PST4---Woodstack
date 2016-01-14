<?php

/* WSWoodstackBundle:Wood:index.html.twig */
class __TwigTemplate_118e7634ffef749eae591aa9bdf8eb5a0efaebd376da1dfaa3efac23c86d4958 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Wood:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65dead7f9b80c10a47893d43ccb27a65410a318e787d81922f81f8d866f52606 = $this->env->getExtension("native_profiler");
        $__internal_65dead7f9b80c10a47893d43ccb27a65410a318e787d81922f81f8d866f52606->enter($__internal_65dead7f9b80c10a47893d43ccb27a65410a318e787d81922f81f8d866f52606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65dead7f9b80c10a47893d43ccb27a65410a318e787d81922f81f8d866f52606->leave($__internal_65dead7f9b80c10a47893d43ccb27a65410a318e787d81922f81f8d866f52606_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e860fe7ffceb5bde021063370f76ef56bebe08af43a36bd454cabea56d35040 = $this->env->getExtension("native_profiler");
        $__internal_4e860fe7ffceb5bde021063370f76ef56bebe08af43a36bd454cabea56d35040->enter($__internal_4e860fe7ffceb5bde021063370f76ef56bebe08af43a36bd454cabea56d35040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_4e860fe7ffceb5bde021063370f76ef56bebe08af43a36bd454cabea56d35040->leave($__internal_4e860fe7ffceb5bde021063370f76ef56bebe08af43a36bd454cabea56d35040_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
