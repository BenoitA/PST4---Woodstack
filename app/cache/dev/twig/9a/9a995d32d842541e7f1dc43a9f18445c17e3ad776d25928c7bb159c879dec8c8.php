<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_061bdd5f98f8d93ff523561327861d312c70be3a58f5c169ed7665645d981c07 extends Twig_Template
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
        $__internal_36841c31bf44917a2fc412b23582b06680551e9e5868ce27efb3ad0aa0ae70fe = $this->env->getExtension("native_profiler");
        $__internal_36841c31bf44917a2fc412b23582b06680551e9e5868ce27efb3ad0aa0ae70fe->enter($__internal_36841c31bf44917a2fc412b23582b06680551e9e5868ce27efb3ad0aa0ae70fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_36841c31bf44917a2fc412b23582b06680551e9e5868ce27efb3ad0aa0ae70fe->leave($__internal_36841c31bf44917a2fc412b23582b06680551e9e5868ce27efb3ad0aa0ae70fe_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e79df269055acafea9f174ead94ca04ee4366ac75686b55c95e593798070ce8e = $this->env->getExtension("native_profiler");
        $__internal_e79df269055acafea9f174ead94ca04ee4366ac75686b55c95e593798070ce8e->enter($__internal_e79df269055acafea9f174ead94ca04ee4366ac75686b55c95e593798070ce8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e79df269055acafea9f174ead94ca04ee4366ac75686b55c95e593798070ce8e->leave($__internal_e79df269055acafea9f174ead94ca04ee4366ac75686b55c95e593798070ce8e_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a44e412ec6793f5891d40c9961f378615462139742aaf753ad948e64075a3806 = $this->env->getExtension("native_profiler");
        $__internal_a44e412ec6793f5891d40c9961f378615462139742aaf753ad948e64075a3806->enter($__internal_a44e412ec6793f5891d40c9961f378615462139742aaf753ad948e64075a3806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a44e412ec6793f5891d40c9961f378615462139742aaf753ad948e64075a3806->leave($__internal_a44e412ec6793f5891d40c9961f378615462139742aaf753ad948e64075a3806_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_801966a3d5881d8082d7278186c53a31aa09f429d8c745dbbdc72bceaa98d8d4 = $this->env->getExtension("native_profiler");
        $__internal_801966a3d5881d8082d7278186c53a31aa09f429d8c745dbbdc72bceaa98d8d4->enter($__internal_801966a3d5881d8082d7278186c53a31aa09f429d8c745dbbdc72bceaa98d8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_801966a3d5881d8082d7278186c53a31aa09f429d8c745dbbdc72bceaa98d8d4->leave($__internal_801966a3d5881d8082d7278186c53a31aa09f429d8c745dbbdc72bceaa98d8d4_prof);

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
