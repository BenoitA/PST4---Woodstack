<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_3a59471be90f822476091032c96f9bec52c9df3ecd16b1b23e26374966acdd97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_cc9579a573ecb99ac60ed22dcd02f0a202f61a12d6c3fc1317d12d32c4f61be1 = $this->env->getExtension("native_profiler");
        $__internal_cc9579a573ecb99ac60ed22dcd02f0a202f61a12d6c3fc1317d12d32c4f61be1->enter($__internal_cc9579a573ecb99ac60ed22dcd02f0a202f61a12d6c3fc1317d12d32c4f61be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc9579a573ecb99ac60ed22dcd02f0a202f61a12d6c3fc1317d12d32c4f61be1->leave($__internal_cc9579a573ecb99ac60ed22dcd02f0a202f61a12d6c3fc1317d12d32c4f61be1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e926f3eb55ced4b294681f8bb12437aa105025896e39774741937451c9b2d672 = $this->env->getExtension("native_profiler");
        $__internal_e926f3eb55ced4b294681f8bb12437aa105025896e39774741937451c9b2d672->enter($__internal_e926f3eb55ced4b294681f8bb12437aa105025896e39774741937451c9b2d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e926f3eb55ced4b294681f8bb12437aa105025896e39774741937451c9b2d672->leave($__internal_e926f3eb55ced4b294681f8bb12437aa105025896e39774741937451c9b2d672_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
