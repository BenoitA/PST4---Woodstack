<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_29ece3b1fa917562a08787d17f106f16b521d0665ffba048ef61a7365f07fe68 extends Twig_Template
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
        $__internal_4c1be4f98ad521c9899b6951181c77dd838ce61c752bfd41606f4cd2ca2ec7e6 = $this->env->getExtension("native_profiler");
        $__internal_4c1be4f98ad521c9899b6951181c77dd838ce61c752bfd41606f4cd2ca2ec7e6->enter($__internal_4c1be4f98ad521c9899b6951181c77dd838ce61c752bfd41606f4cd2ca2ec7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_4c1be4f98ad521c9899b6951181c77dd838ce61c752bfd41606f4cd2ca2ec7e6->leave($__internal_4c1be4f98ad521c9899b6951181c77dd838ce61c752bfd41606f4cd2ca2ec7e6_prof);

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
