<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_19ded0d4b42cca24e00f447666ced1d97913fa275156e515a7da4739981643c3 extends Twig_Template
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
        $__internal_9d78e94b84ceca3f8deffd7c7a1b921397e4d99179ee96674fd2a55c294fa615 = $this->env->getExtension("native_profiler");
        $__internal_9d78e94b84ceca3f8deffd7c7a1b921397e4d99179ee96674fd2a55c294fa615->enter($__internal_9d78e94b84ceca3f8deffd7c7a1b921397e4d99179ee96674fd2a55c294fa615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d78e94b84ceca3f8deffd7c7a1b921397e4d99179ee96674fd2a55c294fa615->leave($__internal_9d78e94b84ceca3f8deffd7c7a1b921397e4d99179ee96674fd2a55c294fa615_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07a7238c147c626a2f6a612121daf10720e3fb3dd86a471341150ed5c4e3e5c6 = $this->env->getExtension("native_profiler");
        $__internal_07a7238c147c626a2f6a612121daf10720e3fb3dd86a471341150ed5c4e3e5c6->enter($__internal_07a7238c147c626a2f6a612121daf10720e3fb3dd86a471341150ed5c4e3e5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_07a7238c147c626a2f6a612121daf10720e3fb3dd86a471341150ed5c4e3e5c6->leave($__internal_07a7238c147c626a2f6a612121daf10720e3fb3dd86a471341150ed5c4e3e5c6_prof);

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
