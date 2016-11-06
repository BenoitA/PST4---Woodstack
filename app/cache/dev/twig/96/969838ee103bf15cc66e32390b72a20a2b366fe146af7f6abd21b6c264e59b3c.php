<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_91b4ca9a90c2770e951ffee5b4407213eeb385ae75db4329c710c9b8b63b70f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5cd3076ba00a558d3800ec5b4054edabd16913743c5a933d57196526e3efa3b = $this->env->getExtension("native_profiler");
        $__internal_a5cd3076ba00a558d3800ec5b4054edabd16913743c5a933d57196526e3efa3b->enter($__internal_a5cd3076ba00a558d3800ec5b4054edabd16913743c5a933d57196526e3efa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a5cd3076ba00a558d3800ec5b4054edabd16913743c5a933d57196526e3efa3b->leave($__internal_a5cd3076ba00a558d3800ec5b4054edabd16913743c5a933d57196526e3efa3b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bff287d627313a75881364b5ffc6c75ab6c50d53bab4a5050b1882a291bbe44d = $this->env->getExtension("native_profiler");
        $__internal_bff287d627313a75881364b5ffc6c75ab6c50d53bab4a5050b1882a291bbe44d->enter($__internal_bff287d627313a75881364b5ffc6c75ab6c50d53bab4a5050b1882a291bbe44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bff287d627313a75881364b5ffc6c75ab6c50d53bab4a5050b1882a291bbe44d->leave($__internal_bff287d627313a75881364b5ffc6c75ab6c50d53bab4a5050b1882a291bbe44d_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d34da85c633f3ff735508fcfc50b73678cf19c13fa849a9ce0155927396ba7df = $this->env->getExtension("native_profiler");
        $__internal_d34da85c633f3ff735508fcfc50b73678cf19c13fa849a9ce0155927396ba7df->enter($__internal_d34da85c633f3ff735508fcfc50b73678cf19c13fa849a9ce0155927396ba7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d34da85c633f3ff735508fcfc50b73678cf19c13fa849a9ce0155927396ba7df->leave($__internal_d34da85c633f3ff735508fcfc50b73678cf19c13fa849a9ce0155927396ba7df_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2b9140cf948a82edfe0efae961422038ccf77d2d5f0d2d46019ee2f97a9e44b4 = $this->env->getExtension("native_profiler");
        $__internal_2b9140cf948a82edfe0efae961422038ccf77d2d5f0d2d46019ee2f97a9e44b4->enter($__internal_2b9140cf948a82edfe0efae961422038ccf77d2d5f0d2d46019ee2f97a9e44b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2b9140cf948a82edfe0efae961422038ccf77d2d5f0d2d46019ee2f97a9e44b4->leave($__internal_2b9140cf948a82edfe0efae961422038ccf77d2d5f0d2d46019ee2f97a9e44b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
