<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_de3196ede1b50f00670cc598c121031fb043980bbfd688248a93ecea5c31e9f4 extends Twig_Template
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
        $__internal_9a1392ae59f036a26d863f8ac1c310d93377f17e18ec433827c8c1cbdba04e0b = $this->env->getExtension("native_profiler");
        $__internal_9a1392ae59f036a26d863f8ac1c310d93377f17e18ec433827c8c1cbdba04e0b->enter($__internal_9a1392ae59f036a26d863f8ac1c310d93377f17e18ec433827c8c1cbdba04e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">
\t<button type=\"button\" class=\"btn btn-success\" >
\tEdition profil
\t</button>
\t</a>
\t
</div>
";
        
        $__internal_9a1392ae59f036a26d863f8ac1c310d93377f17e18ec433827c8c1cbdba04e0b->leave($__internal_9a1392ae59f036a26d863f8ac1c310d93377f17e18ec433827c8c1cbdba04e0b_prof);

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
        return array (  37 => 4,  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* 	<a href="{{ path('fos_user_profile_edit') }}">*/
/* 	<button type="button" class="btn btn-success" >*/
/* 	Edition profil*/
/* 	</button>*/
/* 	</a>*/
/* 	*/
/* </div>*/
/* */
