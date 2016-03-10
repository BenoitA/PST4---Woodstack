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
        $__internal_3be77bb7c3d8365d76fc82195d3ad40803288229c8d2626bb7f57ab0ce6bf8e3 = $this->env->getExtension("native_profiler");
        $__internal_3be77bb7c3d8365d76fc82195d3ad40803288229c8d2626bb7f57ab0ce6bf8e3->enter($__internal_3be77bb7c3d8365d76fc82195d3ad40803288229c8d2626bb7f57ab0ce6bf8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3be77bb7c3d8365d76fc82195d3ad40803288229c8d2626bb7f57ab0ce6bf8e3->leave($__internal_3be77bb7c3d8365d76fc82195d3ad40803288229c8d2626bb7f57ab0ce6bf8e3_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_00365f32e133750c6bddf9c4658a68ebdab7fc1c17c71b7ffd1e1c0cecb9e54b = $this->env->getExtension("native_profiler");
        $__internal_00365f32e133750c6bddf9c4658a68ebdab7fc1c17c71b7ffd1e1c0cecb9e54b->enter($__internal_00365f32e133750c6bddf9c4658a68ebdab7fc1c17c71b7ffd1e1c0cecb9e54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_00365f32e133750c6bddf9c4658a68ebdab7fc1c17c71b7ffd1e1c0cecb9e54b->leave($__internal_00365f32e133750c6bddf9c4658a68ebdab7fc1c17c71b7ffd1e1c0cecb9e54b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f94aab3e1f8b617b8cf51e36264238ae95be2debab360c91c622d6db717242a6 = $this->env->getExtension("native_profiler");
        $__internal_f94aab3e1f8b617b8cf51e36264238ae95be2debab360c91c622d6db717242a6->enter($__internal_f94aab3e1f8b617b8cf51e36264238ae95be2debab360c91c622d6db717242a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f94aab3e1f8b617b8cf51e36264238ae95be2debab360c91c622d6db717242a6->leave($__internal_f94aab3e1f8b617b8cf51e36264238ae95be2debab360c91c622d6db717242a6_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2807d44497b662345d46f42f62433cecd9542fd9881875b770665ad470aba5f2 = $this->env->getExtension("native_profiler");
        $__internal_2807d44497b662345d46f42f62433cecd9542fd9881875b770665ad470aba5f2->enter($__internal_2807d44497b662345d46f42f62433cecd9542fd9881875b770665ad470aba5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2807d44497b662345d46f42f62433cecd9542fd9881875b770665ad470aba5f2->leave($__internal_2807d44497b662345d46f42f62433cecd9542fd9881875b770665ad470aba5f2_prof);

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
