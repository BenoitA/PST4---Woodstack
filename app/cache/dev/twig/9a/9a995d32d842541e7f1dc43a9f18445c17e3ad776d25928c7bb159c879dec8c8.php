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
        $__internal_e0026df0dbcf69418c8649f3b13117c5a6fc7972c710d8e2976c58a826025235 = $this->env->getExtension("native_profiler");
        $__internal_e0026df0dbcf69418c8649f3b13117c5a6fc7972c710d8e2976c58a826025235->enter($__internal_e0026df0dbcf69418c8649f3b13117c5a6fc7972c710d8e2976c58a826025235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e0026df0dbcf69418c8649f3b13117c5a6fc7972c710d8e2976c58a826025235->leave($__internal_e0026df0dbcf69418c8649f3b13117c5a6fc7972c710d8e2976c58a826025235_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a4e862cf9c15dcb6b435b4a875573d9df0d11d580af24c0e3c83cc74ce25dd1c = $this->env->getExtension("native_profiler");
        $__internal_a4e862cf9c15dcb6b435b4a875573d9df0d11d580af24c0e3c83cc74ce25dd1c->enter($__internal_a4e862cf9c15dcb6b435b4a875573d9df0d11d580af24c0e3c83cc74ce25dd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a4e862cf9c15dcb6b435b4a875573d9df0d11d580af24c0e3c83cc74ce25dd1c->leave($__internal_a4e862cf9c15dcb6b435b4a875573d9df0d11d580af24c0e3c83cc74ce25dd1c_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_45fa284bb57a36d39a3f193cbaa2147913b2959bab914d3301e54e2f34333836 = $this->env->getExtension("native_profiler");
        $__internal_45fa284bb57a36d39a3f193cbaa2147913b2959bab914d3301e54e2f34333836->enter($__internal_45fa284bb57a36d39a3f193cbaa2147913b2959bab914d3301e54e2f34333836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_45fa284bb57a36d39a3f193cbaa2147913b2959bab914d3301e54e2f34333836->leave($__internal_45fa284bb57a36d39a3f193cbaa2147913b2959bab914d3301e54e2f34333836_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_966d1b400c1b9d100e66dba3d340ac40612f5d3dcd0ddc6eecb992efbe6f37c7 = $this->env->getExtension("native_profiler");
        $__internal_966d1b400c1b9d100e66dba3d340ac40612f5d3dcd0ddc6eecb992efbe6f37c7->enter($__internal_966d1b400c1b9d100e66dba3d340ac40612f5d3dcd0ddc6eecb992efbe6f37c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_966d1b400c1b9d100e66dba3d340ac40612f5d3dcd0ddc6eecb992efbe6f37c7->leave($__internal_966d1b400c1b9d100e66dba3d340ac40612f5d3dcd0ddc6eecb992efbe6f37c7_prof);

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
