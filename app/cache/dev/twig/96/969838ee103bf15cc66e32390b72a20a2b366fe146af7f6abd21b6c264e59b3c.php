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
        $__internal_223bad557610e46127fdd3be1483a1fb3ab8f3c5377928c8f822d18435cab4fd = $this->env->getExtension("native_profiler");
        $__internal_223bad557610e46127fdd3be1483a1fb3ab8f3c5377928c8f822d18435cab4fd->enter($__internal_223bad557610e46127fdd3be1483a1fb3ab8f3c5377928c8f822d18435cab4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_223bad557610e46127fdd3be1483a1fb3ab8f3c5377928c8f822d18435cab4fd->leave($__internal_223bad557610e46127fdd3be1483a1fb3ab8f3c5377928c8f822d18435cab4fd_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2a96348d305ac990de13506803d445f73dfe92d1d3c8d1bd42eafc9e41d0687a = $this->env->getExtension("native_profiler");
        $__internal_2a96348d305ac990de13506803d445f73dfe92d1d3c8d1bd42eafc9e41d0687a->enter($__internal_2a96348d305ac990de13506803d445f73dfe92d1d3c8d1bd42eafc9e41d0687a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2a96348d305ac990de13506803d445f73dfe92d1d3c8d1bd42eafc9e41d0687a->leave($__internal_2a96348d305ac990de13506803d445f73dfe92d1d3c8d1bd42eafc9e41d0687a_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5140387da170b0affbbe31a8f170e48c1a4333b4aa2a0cc6f6303580a1234cad = $this->env->getExtension("native_profiler");
        $__internal_5140387da170b0affbbe31a8f170e48c1a4333b4aa2a0cc6f6303580a1234cad->enter($__internal_5140387da170b0affbbe31a8f170e48c1a4333b4aa2a0cc6f6303580a1234cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5140387da170b0affbbe31a8f170e48c1a4333b4aa2a0cc6f6303580a1234cad->leave($__internal_5140387da170b0affbbe31a8f170e48c1a4333b4aa2a0cc6f6303580a1234cad_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_622e47c511da3c5a00876e42c6e69cae9aeec1c064e054e2a8eb484ffb237187 = $this->env->getExtension("native_profiler");
        $__internal_622e47c511da3c5a00876e42c6e69cae9aeec1c064e054e2a8eb484ffb237187->enter($__internal_622e47c511da3c5a00876e42c6e69cae9aeec1c064e054e2a8eb484ffb237187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_622e47c511da3c5a00876e42c6e69cae9aeec1c064e054e2a8eb484ffb237187->leave($__internal_622e47c511da3c5a00876e42c6e69cae9aeec1c064e054e2a8eb484ffb237187_prof);

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
