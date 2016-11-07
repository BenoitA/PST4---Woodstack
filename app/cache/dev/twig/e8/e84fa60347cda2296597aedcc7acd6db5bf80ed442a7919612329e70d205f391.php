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
        $__internal_95fba0da78bc39a38c2dc3e13e40d442ac777c8ab0d2e4a89bed481bcd89ffed = $this->env->getExtension("native_profiler");
        $__internal_95fba0da78bc39a38c2dc3e13e40d442ac777c8ab0d2e4a89bed481bcd89ffed->enter($__internal_95fba0da78bc39a38c2dc3e13e40d442ac777c8ab0d2e4a89bed481bcd89ffed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_95fba0da78bc39a38c2dc3e13e40d442ac777c8ab0d2e4a89bed481bcd89ffed->leave($__internal_95fba0da78bc39a38c2dc3e13e40d442ac777c8ab0d2e4a89bed481bcd89ffed_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_da112ad48e62bf5ec3f1ca3ecd1444824f987c3c798b63582dc3471d658be67a = $this->env->getExtension("native_profiler");
        $__internal_da112ad48e62bf5ec3f1ca3ecd1444824f987c3c798b63582dc3471d658be67a->enter($__internal_da112ad48e62bf5ec3f1ca3ecd1444824f987c3c798b63582dc3471d658be67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_da112ad48e62bf5ec3f1ca3ecd1444824f987c3c798b63582dc3471d658be67a->leave($__internal_da112ad48e62bf5ec3f1ca3ecd1444824f987c3c798b63582dc3471d658be67a_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5ee3e05ee4d633b89167c7c2d4e5d29bac3749b8df5381a46730af0add18f5c4 = $this->env->getExtension("native_profiler");
        $__internal_5ee3e05ee4d633b89167c7c2d4e5d29bac3749b8df5381a46730af0add18f5c4->enter($__internal_5ee3e05ee4d633b89167c7c2d4e5d29bac3749b8df5381a46730af0add18f5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5ee3e05ee4d633b89167c7c2d4e5d29bac3749b8df5381a46730af0add18f5c4->leave($__internal_5ee3e05ee4d633b89167c7c2d4e5d29bac3749b8df5381a46730af0add18f5c4_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_dfc5619698c885e6a817c6a0642c817254f7f61e3039eae9d80f0e685c79670f = $this->env->getExtension("native_profiler");
        $__internal_dfc5619698c885e6a817c6a0642c817254f7f61e3039eae9d80f0e685c79670f->enter($__internal_dfc5619698c885e6a817c6a0642c817254f7f61e3039eae9d80f0e685c79670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_dfc5619698c885e6a817c6a0642c817254f7f61e3039eae9d80f0e685c79670f->leave($__internal_dfc5619698c885e6a817c6a0642c817254f7f61e3039eae9d80f0e685c79670f_prof);

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
