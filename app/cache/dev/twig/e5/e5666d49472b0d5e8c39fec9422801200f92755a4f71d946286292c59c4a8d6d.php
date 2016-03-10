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
        $__internal_f73754911a912d2ec569992f91d8033a50a15dce880eb356ccaf94bb12d7c5a8 = $this->env->getExtension("native_profiler");
        $__internal_f73754911a912d2ec569992f91d8033a50a15dce880eb356ccaf94bb12d7c5a8->enter($__internal_f73754911a912d2ec569992f91d8033a50a15dce880eb356ccaf94bb12d7c5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f73754911a912d2ec569992f91d8033a50a15dce880eb356ccaf94bb12d7c5a8->leave($__internal_f73754911a912d2ec569992f91d8033a50a15dce880eb356ccaf94bb12d7c5a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05075b8f285d76113913cd2eb1ad0adbbe491a21165d649cb13f2ed41c1bf49b = $this->env->getExtension("native_profiler");
        $__internal_05075b8f285d76113913cd2eb1ad0adbbe491a21165d649cb13f2ed41c1bf49b->enter($__internal_05075b8f285d76113913cd2eb1ad0adbbe491a21165d649cb13f2ed41c1bf49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_05075b8f285d76113913cd2eb1ad0adbbe491a21165d649cb13f2ed41c1bf49b->leave($__internal_05075b8f285d76113913cd2eb1ad0adbbe491a21165d649cb13f2ed41c1bf49b_prof);

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
