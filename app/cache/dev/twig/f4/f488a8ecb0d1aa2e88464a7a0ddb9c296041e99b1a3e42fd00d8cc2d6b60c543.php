<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_86eb38d484e816585bafc2e54da28e619737cf5e0d8a389f95c51718ee143865 extends Twig_Template
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
        $__internal_a7aaa4d6dbd8632b70e05e3695ab3d98dd552661047f8d920c00bcc81f336d58 = $this->env->getExtension("native_profiler");
        $__internal_a7aaa4d6dbd8632b70e05e3695ab3d98dd552661047f8d920c00bcc81f336d58->enter($__internal_a7aaa4d6dbd8632b70e05e3695ab3d98dd552661047f8d920c00bcc81f336d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_a7aaa4d6dbd8632b70e05e3695ab3d98dd552661047f8d920c00bcc81f336d58->leave($__internal_a7aaa4d6dbd8632b70e05e3695ab3d98dd552661047f8d920c00bcc81f336d58_prof);

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
