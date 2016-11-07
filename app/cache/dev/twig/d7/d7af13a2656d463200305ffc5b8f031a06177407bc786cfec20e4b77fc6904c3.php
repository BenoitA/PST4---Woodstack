<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b4e1b716258db12be9b1549e57ad1f5328f8358170ca9e607a28660b443a1d74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40df33d1d1f55767489f46b51228db68f6bde9b63d00e0f205c58f0b13e9fccf = $this->env->getExtension("native_profiler");
        $__internal_40df33d1d1f55767489f46b51228db68f6bde9b63d00e0f205c58f0b13e9fccf->enter($__internal_40df33d1d1f55767489f46b51228db68f6bde9b63d00e0f205c58f0b13e9fccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40df33d1d1f55767489f46b51228db68f6bde9b63d00e0f205c58f0b13e9fccf->leave($__internal_40df33d1d1f55767489f46b51228db68f6bde9b63d00e0f205c58f0b13e9fccf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdf24af9e8ffd431ebf42197320d4b29be9acc4f00e2dadcb440f0c0b0916940 = $this->env->getExtension("native_profiler");
        $__internal_cdf24af9e8ffd431ebf42197320d4b29be9acc4f00e2dadcb440f0c0b0916940->enter($__internal_cdf24af9e8ffd431ebf42197320d4b29be9acc4f00e2dadcb440f0c0b0916940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_cdf24af9e8ffd431ebf42197320d4b29be9acc4f00e2dadcb440f0c0b0916940->leave($__internal_cdf24af9e8ffd431ebf42197320d4b29be9acc4f00e2dadcb440f0c0b0916940_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
