<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0ac29242850a535f26083e6553583a0aa872064c278cd6c6d7de0f7c518c1fe8 extends Twig_Template
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
        $__internal_9d49c52a87cc0007731d9cdff164d0fa8ec90e179c35ecb31ad9e1106dbdd7df = $this->env->getExtension("native_profiler");
        $__internal_9d49c52a87cc0007731d9cdff164d0fa8ec90e179c35ecb31ad9e1106dbdd7df->enter($__internal_9d49c52a87cc0007731d9cdff164d0fa8ec90e179c35ecb31ad9e1106dbdd7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d49c52a87cc0007731d9cdff164d0fa8ec90e179c35ecb31ad9e1106dbdd7df->leave($__internal_9d49c52a87cc0007731d9cdff164d0fa8ec90e179c35ecb31ad9e1106dbdd7df_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_db31af58b68f2c483b17aa19ea0f3c218709efb89bb97f744eb87763c3756bc7 = $this->env->getExtension("native_profiler");
        $__internal_db31af58b68f2c483b17aa19ea0f3c218709efb89bb97f744eb87763c3756bc7->enter($__internal_db31af58b68f2c483b17aa19ea0f3c218709efb89bb97f744eb87763c3756bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_db31af58b68f2c483b17aa19ea0f3c218709efb89bb97f744eb87763c3756bc7->leave($__internal_db31af58b68f2c483b17aa19ea0f3c218709efb89bb97f744eb87763c3756bc7_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0c20bfd1c4f50e2d3b918594f2d60d3e6adf33b4c43b43f8ba37a959181df87e = $this->env->getExtension("native_profiler");
        $__internal_0c20bfd1c4f50e2d3b918594f2d60d3e6adf33b4c43b43f8ba37a959181df87e->enter($__internal_0c20bfd1c4f50e2d3b918594f2d60d3e6adf33b4c43b43f8ba37a959181df87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0c20bfd1c4f50e2d3b918594f2d60d3e6adf33b4c43b43f8ba37a959181df87e->leave($__internal_0c20bfd1c4f50e2d3b918594f2d60d3e6adf33b4c43b43f8ba37a959181df87e_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5c76d806e3555349bc81a30cb322d78dbcff5b0fff02f01344f36199c4f1f7a6 = $this->env->getExtension("native_profiler");
        $__internal_5c76d806e3555349bc81a30cb322d78dbcff5b0fff02f01344f36199c4f1f7a6->enter($__internal_5c76d806e3555349bc81a30cb322d78dbcff5b0fff02f01344f36199c4f1f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5c76d806e3555349bc81a30cb322d78dbcff5b0fff02f01344f36199c4f1f7a6->leave($__internal_5c76d806e3555349bc81a30cb322d78dbcff5b0fff02f01344f36199c4f1f7a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
