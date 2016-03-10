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
        $__internal_ad3f6c3a23bee5c83436e26ea82cc63eb6da38e8da7184a540bcf5153f93f7fc = $this->env->getExtension("native_profiler");
        $__internal_ad3f6c3a23bee5c83436e26ea82cc63eb6da38e8da7184a540bcf5153f93f7fc->enter($__internal_ad3f6c3a23bee5c83436e26ea82cc63eb6da38e8da7184a540bcf5153f93f7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ad3f6c3a23bee5c83436e26ea82cc63eb6da38e8da7184a540bcf5153f93f7fc->leave($__internal_ad3f6c3a23bee5c83436e26ea82cc63eb6da38e8da7184a540bcf5153f93f7fc_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cbca8d97c279d1db23e8c5331854d72604324098396cb573a79154685e23c79c = $this->env->getExtension("native_profiler");
        $__internal_cbca8d97c279d1db23e8c5331854d72604324098396cb573a79154685e23c79c->enter($__internal_cbca8d97c279d1db23e8c5331854d72604324098396cb573a79154685e23c79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cbca8d97c279d1db23e8c5331854d72604324098396cb573a79154685e23c79c->leave($__internal_cbca8d97c279d1db23e8c5331854d72604324098396cb573a79154685e23c79c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fe9c6d4aac3885073a5dd2888988527a392b10583d7aa2e3c889a16f75f6754e = $this->env->getExtension("native_profiler");
        $__internal_fe9c6d4aac3885073a5dd2888988527a392b10583d7aa2e3c889a16f75f6754e->enter($__internal_fe9c6d4aac3885073a5dd2888988527a392b10583d7aa2e3c889a16f75f6754e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fe9c6d4aac3885073a5dd2888988527a392b10583d7aa2e3c889a16f75f6754e->leave($__internal_fe9c6d4aac3885073a5dd2888988527a392b10583d7aa2e3c889a16f75f6754e_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_797f597e585f8a7844677183f4d9f3d2c8db24bf71c4fa662a100441863f869e = $this->env->getExtension("native_profiler");
        $__internal_797f597e585f8a7844677183f4d9f3d2c8db24bf71c4fa662a100441863f869e->enter($__internal_797f597e585f8a7844677183f4d9f3d2c8db24bf71c4fa662a100441863f869e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_797f597e585f8a7844677183f4d9f3d2c8db24bf71c4fa662a100441863f869e->leave($__internal_797f597e585f8a7844677183f4d9f3d2c8db24bf71c4fa662a100441863f869e_prof);

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
