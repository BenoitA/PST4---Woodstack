<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_10b778dc005c91bb24a40d46c20aa1a0087c3203f51f4a84adda1be6e8cbb6db extends Twig_Template
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
        $__internal_a4074d13f5e868a3e442fdb6e64a6607933aeb10e95b199605563b27f26c76f5 = $this->env->getExtension("native_profiler");
        $__internal_a4074d13f5e868a3e442fdb6e64a6607933aeb10e95b199605563b27f26c76f5->enter($__internal_a4074d13f5e868a3e442fdb6e64a6607933aeb10e95b199605563b27f26c76f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

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
        
        $__internal_a4074d13f5e868a3e442fdb6e64a6607933aeb10e95b199605563b27f26c76f5->leave($__internal_a4074d13f5e868a3e442fdb6e64a6607933aeb10e95b199605563b27f26c76f5_prof);

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
