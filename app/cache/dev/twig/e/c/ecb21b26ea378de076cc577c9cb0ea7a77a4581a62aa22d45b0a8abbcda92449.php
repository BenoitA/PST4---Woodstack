<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_5b045731a9db13de0864a984361ca38836ab624e8ff10b025e2e16c2edacd21d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5546f8f4834b7a7e751744d1492f0dc178096e0cd99e5870fb9957586d14332c = $this->env->getExtension("native_profiler");
        $__internal_5546f8f4834b7a7e751744d1492f0dc178096e0cd99e5870fb9957586d14332c->enter($__internal_5546f8f4834b7a7e751744d1492f0dc178096e0cd99e5870fb9957586d14332c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_5546f8f4834b7a7e751744d1492f0dc178096e0cd99e5870fb9957586d14332c->leave($__internal_5546f8f4834b7a7e751744d1492f0dc178096e0cd99e5870fb9957586d14332c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */
