<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_49f7bca70b1e982fcb1f621de2b462aeed4a89877093f0d13dc9bd4b23160cc2 extends Twig_Template
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
        $__internal_98563fef149e955b2956091a5b53ae003eccbd422b3fd84c327cbaa2a3b23a32 = $this->env->getExtension("native_profiler");
        $__internal_98563fef149e955b2956091a5b53ae003eccbd422b3fd84c327cbaa2a3b23a32->enter($__internal_98563fef149e955b2956091a5b53ae003eccbd422b3fd84c327cbaa2a3b23a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_98563fef149e955b2956091a5b53ae003eccbd422b3fd84c327cbaa2a3b23a32->leave($__internal_98563fef149e955b2956091a5b53ae003eccbd422b3fd84c327cbaa2a3b23a32_prof);

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
