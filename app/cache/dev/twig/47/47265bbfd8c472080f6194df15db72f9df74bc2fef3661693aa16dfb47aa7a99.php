<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5f4274bfd571788c8fbaf4fc7faad8758d09cf64219d13609cc32845f0034f59 extends Twig_Template
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
        $__internal_8213f9c9ad49525dc188ff816effd2c3fb785a755b6b2d84628d8449b5c0af4f = $this->env->getExtension("native_profiler");
        $__internal_8213f9c9ad49525dc188ff816effd2c3fb785a755b6b2d84628d8449b5c0af4f->enter($__internal_8213f9c9ad49525dc188ff816effd2c3fb785a755b6b2d84628d8449b5c0af4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<form class=\"form-signin\"  action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_8213f9c9ad49525dc188ff816effd2c3fb785a755b6b2d84628d8449b5c0af4f->leave($__internal_8213f9c9ad49525dc188ff816effd2c3fb785a755b6b2d84628d8449b5c0af4f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
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
/* <form class="form-signin"  action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" >*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
