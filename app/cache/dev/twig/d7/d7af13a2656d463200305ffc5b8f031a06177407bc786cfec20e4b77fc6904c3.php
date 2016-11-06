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
        $__internal_4767126207d2ba373acb01f4ef561729576ed84e56f7dcc3e04ee1a5d2d83852 = $this->env->getExtension("native_profiler");
        $__internal_4767126207d2ba373acb01f4ef561729576ed84e56f7dcc3e04ee1a5d2d83852->enter($__internal_4767126207d2ba373acb01f4ef561729576ed84e56f7dcc3e04ee1a5d2d83852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4767126207d2ba373acb01f4ef561729576ed84e56f7dcc3e04ee1a5d2d83852->leave($__internal_4767126207d2ba373acb01f4ef561729576ed84e56f7dcc3e04ee1a5d2d83852_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd9548add2f2cc8ee5053c2e34600278a4cad3ab0605e7c9d943a49208e41d78 = $this->env->getExtension("native_profiler");
        $__internal_fd9548add2f2cc8ee5053c2e34600278a4cad3ab0605e7c9d943a49208e41d78->enter($__internal_fd9548add2f2cc8ee5053c2e34600278a4cad3ab0605e7c9d943a49208e41d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_fd9548add2f2cc8ee5053c2e34600278a4cad3ab0605e7c9d943a49208e41d78->leave($__internal_fd9548add2f2cc8ee5053c2e34600278a4cad3ab0605e7c9d943a49208e41d78_prof);

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
