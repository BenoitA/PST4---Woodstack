<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_939e240fc9528c0410402d71b16222f7a787a9d76471d60c1f6d604eb4d44d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6c67676db4fa2ee4cbb2c7245dac2bb5cead7b732bf7366eb372d08a5555648 = $this->env->getExtension("native_profiler");
        $__internal_e6c67676db4fa2ee4cbb2c7245dac2bb5cead7b732bf7366eb372d08a5555648->enter($__internal_e6c67676db4fa2ee4cbb2c7245dac2bb5cead7b732bf7366eb372d08a5555648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6c67676db4fa2ee4cbb2c7245dac2bb5cead7b732bf7366eb372d08a5555648->leave($__internal_e6c67676db4fa2ee4cbb2c7245dac2bb5cead7b732bf7366eb372d08a5555648_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beb1730714a7a75edcd7d88f6dd19f641aef8b1a486767cbabb8b5cda5623a30 = $this->env->getExtension("native_profiler");
        $__internal_beb1730714a7a75edcd7d88f6dd19f641aef8b1a486767cbabb8b5cda5623a30->enter($__internal_beb1730714a7a75edcd7d88f6dd19f641aef8b1a486767cbabb8b5cda5623a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_beb1730714a7a75edcd7d88f6dd19f641aef8b1a486767cbabb8b5cda5623a30->leave($__internal_beb1730714a7a75edcd7d88f6dd19f641aef8b1a486767cbabb8b5cda5623a30_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
