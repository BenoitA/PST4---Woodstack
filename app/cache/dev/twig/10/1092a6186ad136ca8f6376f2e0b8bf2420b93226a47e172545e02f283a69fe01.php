<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_724149cd2d6c6069c9c798530fd0e9c73904d9710a60b22a8e7f8ea4ed84d1d6 extends Twig_Template
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
        $__internal_f8eb39f8cc8705e437c807197dd5c78d994930d8af18fdd0c9de62f6c0b5e870 = $this->env->getExtension("native_profiler");
        $__internal_f8eb39f8cc8705e437c807197dd5c78d994930d8af18fdd0c9de62f6c0b5e870->enter($__internal_f8eb39f8cc8705e437c807197dd5c78d994930d8af18fdd0c9de62f6c0b5e870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_f8eb39f8cc8705e437c807197dd5c78d994930d8af18fdd0c9de62f6c0b5e870->leave($__internal_f8eb39f8cc8705e437c807197dd5c78d994930d8af18fdd0c9de62f6c0b5e870_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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
/* <form action="{{ path('fos_user_group_new') }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_new">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
