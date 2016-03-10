<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_b0f77fd6d4a5bfbc3f83c425f2e8badfa1410a75617f1b36153d5c8b470f1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_27e18f6e0acf4537d7b60fabd76fb4a3bf167de2deb5f4a4e91130f1e954c243 = $this->env->getExtension("native_profiler");
        $__internal_27e18f6e0acf4537d7b60fabd76fb4a3bf167de2deb5f4a4e91130f1e954c243->enter($__internal_27e18f6e0acf4537d7b60fabd76fb4a3bf167de2deb5f4a4e91130f1e954c243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e18f6e0acf4537d7b60fabd76fb4a3bf167de2deb5f4a4e91130f1e954c243->leave($__internal_27e18f6e0acf4537d7b60fabd76fb4a3bf167de2deb5f4a4e91130f1e954c243_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8cdae72667bbdf8a6a84bf2eba78d6aff4d4d16a3261f93289367aa7681e2adb = $this->env->getExtension("native_profiler");
        $__internal_8cdae72667bbdf8a6a84bf2eba78d6aff4d4d16a3261f93289367aa7681e2adb->enter($__internal_8cdae72667bbdf8a6a84bf2eba78d6aff4d4d16a3261f93289367aa7681e2adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8cdae72667bbdf8a6a84bf2eba78d6aff4d4d16a3261f93289367aa7681e2adb->leave($__internal_8cdae72667bbdf8a6a84bf2eba78d6aff4d4d16a3261f93289367aa7681e2adb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
