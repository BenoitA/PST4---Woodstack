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
        $__internal_c3a2eaafa8cdb653387252061033d5a16e989300c93676fc361aca53c8bbce23 = $this->env->getExtension("native_profiler");
        $__internal_c3a2eaafa8cdb653387252061033d5a16e989300c93676fc361aca53c8bbce23->enter($__internal_c3a2eaafa8cdb653387252061033d5a16e989300c93676fc361aca53c8bbce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a2eaafa8cdb653387252061033d5a16e989300c93676fc361aca53c8bbce23->leave($__internal_c3a2eaafa8cdb653387252061033d5a16e989300c93676fc361aca53c8bbce23_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d39f4f0c89fd0d862a2ef40aaa390739e25aaa35f0855924ae35a7991ad9b814 = $this->env->getExtension("native_profiler");
        $__internal_d39f4f0c89fd0d862a2ef40aaa390739e25aaa35f0855924ae35a7991ad9b814->enter($__internal_d39f4f0c89fd0d862a2ef40aaa390739e25aaa35f0855924ae35a7991ad9b814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d39f4f0c89fd0d862a2ef40aaa390739e25aaa35f0855924ae35a7991ad9b814->leave($__internal_d39f4f0c89fd0d862a2ef40aaa390739e25aaa35f0855924ae35a7991ad9b814_prof);

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
