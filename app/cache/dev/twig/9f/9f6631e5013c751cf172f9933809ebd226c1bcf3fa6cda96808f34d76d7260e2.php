<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_19ded0d4b42cca24e00f447666ced1d97913fa275156e515a7da4739981643c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_d4605612cf31996f6e3c23ec516dd1d83d6d1a1068f11147fd825fc9c8d12250 = $this->env->getExtension("native_profiler");
        $__internal_d4605612cf31996f6e3c23ec516dd1d83d6d1a1068f11147fd825fc9c8d12250->enter($__internal_d4605612cf31996f6e3c23ec516dd1d83d6d1a1068f11147fd825fc9c8d12250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4605612cf31996f6e3c23ec516dd1d83d6d1a1068f11147fd825fc9c8d12250->leave($__internal_d4605612cf31996f6e3c23ec516dd1d83d6d1a1068f11147fd825fc9c8d12250_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af600ff1d06ecdb08100b42a276e17a9792deccab7bbeacb1bc958cd9d0b22ed = $this->env->getExtension("native_profiler");
        $__internal_af600ff1d06ecdb08100b42a276e17a9792deccab7bbeacb1bc958cd9d0b22ed->enter($__internal_af600ff1d06ecdb08100b42a276e17a9792deccab7bbeacb1bc958cd9d0b22ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_af600ff1d06ecdb08100b42a276e17a9792deccab7bbeacb1bc958cd9d0b22ed->leave($__internal_af600ff1d06ecdb08100b42a276e17a9792deccab7bbeacb1bc958cd9d0b22ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
