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
        $__internal_84c46174c2f2c6f109b3aeee71496c8ffefa2652a28c670416ea829caa60538b = $this->env->getExtension("native_profiler");
        $__internal_84c46174c2f2c6f109b3aeee71496c8ffefa2652a28c670416ea829caa60538b->enter($__internal_84c46174c2f2c6f109b3aeee71496c8ffefa2652a28c670416ea829caa60538b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_84c46174c2f2c6f109b3aeee71496c8ffefa2652a28c670416ea829caa60538b->leave($__internal_84c46174c2f2c6f109b3aeee71496c8ffefa2652a28c670416ea829caa60538b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_037a37c594a3c7cdef2620f78a7600960d6fd8a1fb6a4b7c693af628266c2ef6 = $this->env->getExtension("native_profiler");
        $__internal_037a37c594a3c7cdef2620f78a7600960d6fd8a1fb6a4b7c693af628266c2ef6->enter($__internal_037a37c594a3c7cdef2620f78a7600960d6fd8a1fb6a4b7c693af628266c2ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_037a37c594a3c7cdef2620f78a7600960d6fd8a1fb6a4b7c693af628266c2ef6->leave($__internal_037a37c594a3c7cdef2620f78a7600960d6fd8a1fb6a4b7c693af628266c2ef6_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0402cf7f132f5b7927975bb27882b03cbb15dd0d3b75c9c311dba62bfdbc6c4a = $this->env->getExtension("native_profiler");
        $__internal_0402cf7f132f5b7927975bb27882b03cbb15dd0d3b75c9c311dba62bfdbc6c4a->enter($__internal_0402cf7f132f5b7927975bb27882b03cbb15dd0d3b75c9c311dba62bfdbc6c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0402cf7f132f5b7927975bb27882b03cbb15dd0d3b75c9c311dba62bfdbc6c4a->leave($__internal_0402cf7f132f5b7927975bb27882b03cbb15dd0d3b75c9c311dba62bfdbc6c4a_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_01a15c1706d846976608edbd3b99c0066c08350a5effdf1d1f818a17cc9a742e = $this->env->getExtension("native_profiler");
        $__internal_01a15c1706d846976608edbd3b99c0066c08350a5effdf1d1f818a17cc9a742e->enter($__internal_01a15c1706d846976608edbd3b99c0066c08350a5effdf1d1f818a17cc9a742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_01a15c1706d846976608edbd3b99c0066c08350a5effdf1d1f818a17cc9a742e->leave($__internal_01a15c1706d846976608edbd3b99c0066c08350a5effdf1d1f818a17cc9a742e_prof);

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
