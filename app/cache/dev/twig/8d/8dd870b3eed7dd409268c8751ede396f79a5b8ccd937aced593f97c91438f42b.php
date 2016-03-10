<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_7485d7a97a7cc798d318e079250a0a883a5d5529f99b620c9d90d7fb075c01ca extends Twig_Template
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
        $__internal_c0c9733c24561f7ae1fe46c1f66cd8f3d7d4e28e9eb3ec94a031672593f203bf = $this->env->getExtension("native_profiler");
        $__internal_c0c9733c24561f7ae1fe46c1f66cd8f3d7d4e28e9eb3ec94a031672593f203bf->enter($__internal_c0c9733c24561f7ae1fe46c1f66cd8f3d7d4e28e9eb3ec94a031672593f203bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c9733c24561f7ae1fe46c1f66cd8f3d7d4e28e9eb3ec94a031672593f203bf->leave($__internal_c0c9733c24561f7ae1fe46c1f66cd8f3d7d4e28e9eb3ec94a031672593f203bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81fad2128cd0c3f7bcd2f1bba235b5be962a3ca00eb7660102d12990d538a62d = $this->env->getExtension("native_profiler");
        $__internal_81fad2128cd0c3f7bcd2f1bba235b5be962a3ca00eb7660102d12990d538a62d->enter($__internal_81fad2128cd0c3f7bcd2f1bba235b5be962a3ca00eb7660102d12990d538a62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_81fad2128cd0c3f7bcd2f1bba235b5be962a3ca00eb7660102d12990d538a62d->leave($__internal_81fad2128cd0c3f7bcd2f1bba235b5be962a3ca00eb7660102d12990d538a62d_prof);

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
