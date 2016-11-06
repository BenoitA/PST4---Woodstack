<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_99c970284b3ffb6c10afd159505cc2580518be89aca6a63fc65dbb754c34a7da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_ebbae1b754d75fc81104581f3a4f98a97521113bbe381afa43989d3f57decda2 = $this->env->getExtension("native_profiler");
        $__internal_ebbae1b754d75fc81104581f3a4f98a97521113bbe381afa43989d3f57decda2->enter($__internal_ebbae1b754d75fc81104581f3a4f98a97521113bbe381afa43989d3f57decda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebbae1b754d75fc81104581f3a4f98a97521113bbe381afa43989d3f57decda2->leave($__internal_ebbae1b754d75fc81104581f3a4f98a97521113bbe381afa43989d3f57decda2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a19ec35a944cf931e52dba3c4ac41b8e640a3270ffdc0553448aa744ba0c3ee8 = $this->env->getExtension("native_profiler");
        $__internal_a19ec35a944cf931e52dba3c4ac41b8e640a3270ffdc0553448aa744ba0c3ee8->enter($__internal_a19ec35a944cf931e52dba3c4ac41b8e640a3270ffdc0553448aa744ba0c3ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a19ec35a944cf931e52dba3c4ac41b8e640a3270ffdc0553448aa744ba0c3ee8->leave($__internal_a19ec35a944cf931e52dba3c4ac41b8e640a3270ffdc0553448aa744ba0c3ee8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
