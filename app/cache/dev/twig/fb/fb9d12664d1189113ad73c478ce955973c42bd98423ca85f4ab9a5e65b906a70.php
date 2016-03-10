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
        $__internal_c936e34a4d55e709aae1c7067c209c6cd5b73407ad2c6f7a7f46eecdb069616b = $this->env->getExtension("native_profiler");
        $__internal_c936e34a4d55e709aae1c7067c209c6cd5b73407ad2c6f7a7f46eecdb069616b->enter($__internal_c936e34a4d55e709aae1c7067c209c6cd5b73407ad2c6f7a7f46eecdb069616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c936e34a4d55e709aae1c7067c209c6cd5b73407ad2c6f7a7f46eecdb069616b->leave($__internal_c936e34a4d55e709aae1c7067c209c6cd5b73407ad2c6f7a7f46eecdb069616b_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f1de71b2ae1617daf7f210d39200983d6b28803f3ca0e193a2782d2d3ec95180 = $this->env->getExtension("native_profiler");
        $__internal_f1de71b2ae1617daf7f210d39200983d6b28803f3ca0e193a2782d2d3ec95180->enter($__internal_f1de71b2ae1617daf7f210d39200983d6b28803f3ca0e193a2782d2d3ec95180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f1de71b2ae1617daf7f210d39200983d6b28803f3ca0e193a2782d2d3ec95180->leave($__internal_f1de71b2ae1617daf7f210d39200983d6b28803f3ca0e193a2782d2d3ec95180_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5e053e017fc11366d3a2350a141b644c293aba0ad09a0c9ba8216b65758c4d3b = $this->env->getExtension("native_profiler");
        $__internal_5e053e017fc11366d3a2350a141b644c293aba0ad09a0c9ba8216b65758c4d3b->enter($__internal_5e053e017fc11366d3a2350a141b644c293aba0ad09a0c9ba8216b65758c4d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5e053e017fc11366d3a2350a141b644c293aba0ad09a0c9ba8216b65758c4d3b->leave($__internal_5e053e017fc11366d3a2350a141b644c293aba0ad09a0c9ba8216b65758c4d3b_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ce1446e49006895f78efe9ecdd7ae860e65af4fb7522f6d9c03d4bfe1fc8b22 = $this->env->getExtension("native_profiler");
        $__internal_1ce1446e49006895f78efe9ecdd7ae860e65af4fb7522f6d9c03d4bfe1fc8b22->enter($__internal_1ce1446e49006895f78efe9ecdd7ae860e65af4fb7522f6d9c03d4bfe1fc8b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1ce1446e49006895f78efe9ecdd7ae860e65af4fb7522f6d9c03d4bfe1fc8b22->leave($__internal_1ce1446e49006895f78efe9ecdd7ae860e65af4fb7522f6d9c03d4bfe1fc8b22_prof);

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
