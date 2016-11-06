<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0a8d57b09b6972dbd18b60a5ad74a7522fbcda2304b7d23581c2f1cc1025e4d2 extends Twig_Template
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
        $__internal_0183967412770a6a5dae9aa3e858d9893cbb8d2f1394ac71dc74792d5a605ea8 = $this->env->getExtension("native_profiler");
        $__internal_0183967412770a6a5dae9aa3e858d9893cbb8d2f1394ac71dc74792d5a605ea8->enter($__internal_0183967412770a6a5dae9aa3e858d9893cbb8d2f1394ac71dc74792d5a605ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0183967412770a6a5dae9aa3e858d9893cbb8d2f1394ac71dc74792d5a605ea8->leave($__internal_0183967412770a6a5dae9aa3e858d9893cbb8d2f1394ac71dc74792d5a605ea8_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3dcb56c79693aa64dee3f5f6d97051ee6f505efe2f16d6ec9b83e09676141072 = $this->env->getExtension("native_profiler");
        $__internal_3dcb56c79693aa64dee3f5f6d97051ee6f505efe2f16d6ec9b83e09676141072->enter($__internal_3dcb56c79693aa64dee3f5f6d97051ee6f505efe2f16d6ec9b83e09676141072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3dcb56c79693aa64dee3f5f6d97051ee6f505efe2f16d6ec9b83e09676141072->leave($__internal_3dcb56c79693aa64dee3f5f6d97051ee6f505efe2f16d6ec9b83e09676141072_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_02745efa22237e66528a386b79357309ba747e0661baf7840a54d3bf87d56d0c = $this->env->getExtension("native_profiler");
        $__internal_02745efa22237e66528a386b79357309ba747e0661baf7840a54d3bf87d56d0c->enter($__internal_02745efa22237e66528a386b79357309ba747e0661baf7840a54d3bf87d56d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_02745efa22237e66528a386b79357309ba747e0661baf7840a54d3bf87d56d0c->leave($__internal_02745efa22237e66528a386b79357309ba747e0661baf7840a54d3bf87d56d0c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_301fc00af228c5e70a221d99296bd564742274c3b2d790dc8c1474640cc967bb = $this->env->getExtension("native_profiler");
        $__internal_301fc00af228c5e70a221d99296bd564742274c3b2d790dc8c1474640cc967bb->enter($__internal_301fc00af228c5e70a221d99296bd564742274c3b2d790dc8c1474640cc967bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_301fc00af228c5e70a221d99296bd564742274c3b2d790dc8c1474640cc967bb->leave($__internal_301fc00af228c5e70a221d99296bd564742274c3b2d790dc8c1474640cc967bb_prof);

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
