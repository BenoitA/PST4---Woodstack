<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_ea231b829fdd05698743b269bb6d33e0f539233f9bd3253149faa586b42f69f6 extends Twig_Template
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
        $__internal_79f0ffc8bca8e2b9aaa6b4b8e6cb4027b94f7ccef84aea7dfb491fdbbb526e4e = $this->env->getExtension("native_profiler");
        $__internal_79f0ffc8bca8e2b9aaa6b4b8e6cb4027b94f7ccef84aea7dfb491fdbbb526e4e->enter($__internal_79f0ffc8bca8e2b9aaa6b4b8e6cb4027b94f7ccef84aea7dfb491fdbbb526e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_79f0ffc8bca8e2b9aaa6b4b8e6cb4027b94f7ccef84aea7dfb491fdbbb526e4e->leave($__internal_79f0ffc8bca8e2b9aaa6b4b8e6cb4027b94f7ccef84aea7dfb491fdbbb526e4e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
