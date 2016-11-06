<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_9c99bbaf755b88ea6855ff175a1c87453b74ee3577c591e2c2320dd523c62d31 extends Twig_Template
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
        $__internal_26a957b37441d4b7b5e2148d311ef01e67e86c8d25cf6b3e64e5c41fd0a6a09b = $this->env->getExtension("native_profiler");
        $__internal_26a957b37441d4b7b5e2148d311ef01e67e86c8d25cf6b3e64e5c41fd0a6a09b->enter($__internal_26a957b37441d4b7b5e2148d311ef01e67e86c8d25cf6b3e64e5c41fd0a6a09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_26a957b37441d4b7b5e2148d311ef01e67e86c8d25cf6b3e64e5c41fd0a6a09b->leave($__internal_26a957b37441d4b7b5e2148d311ef01e67e86c8d25cf6b3e64e5c41fd0a6a09b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
