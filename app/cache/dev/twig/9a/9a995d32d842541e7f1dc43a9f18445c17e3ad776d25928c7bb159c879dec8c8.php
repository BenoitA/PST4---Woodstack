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
        $__internal_78861c5b86b2b749650c7e63f2ad934871b6637f7cadda79d8851b8900762e45 = $this->env->getExtension("native_profiler");
        $__internal_78861c5b86b2b749650c7e63f2ad934871b6637f7cadda79d8851b8900762e45->enter($__internal_78861c5b86b2b749650c7e63f2ad934871b6637f7cadda79d8851b8900762e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_78861c5b86b2b749650c7e63f2ad934871b6637f7cadda79d8851b8900762e45->leave($__internal_78861c5b86b2b749650c7e63f2ad934871b6637f7cadda79d8851b8900762e45_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e56f1f39f7b56372186f8fc6c843c9be060b36d56be36d26e1970dcd92741ea9 = $this->env->getExtension("native_profiler");
        $__internal_e56f1f39f7b56372186f8fc6c843c9be060b36d56be36d26e1970dcd92741ea9->enter($__internal_e56f1f39f7b56372186f8fc6c843c9be060b36d56be36d26e1970dcd92741ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e56f1f39f7b56372186f8fc6c843c9be060b36d56be36d26e1970dcd92741ea9->leave($__internal_e56f1f39f7b56372186f8fc6c843c9be060b36d56be36d26e1970dcd92741ea9_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_98f5641760040eb10ef581a8f1ecb52ac969d886c188ffe42212a7548f80ac19 = $this->env->getExtension("native_profiler");
        $__internal_98f5641760040eb10ef581a8f1ecb52ac969d886c188ffe42212a7548f80ac19->enter($__internal_98f5641760040eb10ef581a8f1ecb52ac969d886c188ffe42212a7548f80ac19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_98f5641760040eb10ef581a8f1ecb52ac969d886c188ffe42212a7548f80ac19->leave($__internal_98f5641760040eb10ef581a8f1ecb52ac969d886c188ffe42212a7548f80ac19_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4c60091be4c7f0bdc3f47bb70347bc41af200335e3a2fa3cd4cd0f6717a9175f = $this->env->getExtension("native_profiler");
        $__internal_4c60091be4c7f0bdc3f47bb70347bc41af200335e3a2fa3cd4cd0f6717a9175f->enter($__internal_4c60091be4c7f0bdc3f47bb70347bc41af200335e3a2fa3cd4cd0f6717a9175f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4c60091be4c7f0bdc3f47bb70347bc41af200335e3a2fa3cd4cd0f6717a9175f->leave($__internal_4c60091be4c7f0bdc3f47bb70347bc41af200335e3a2fa3cd4cd0f6717a9175f_prof);

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
