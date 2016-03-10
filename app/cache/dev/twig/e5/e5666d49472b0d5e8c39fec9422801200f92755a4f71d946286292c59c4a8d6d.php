<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_b0f77fd6d4a5bfbc3f83c425f2e8badfa1410a75617f1b36153d5c8b470f1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64eeab5267213b95c7eb2013ec362f7b36a4d403db749e88b0e604848d24485c = $this->env->getExtension("native_profiler");
        $__internal_64eeab5267213b95c7eb2013ec362f7b36a4d403db749e88b0e604848d24485c->enter($__internal_64eeab5267213b95c7eb2013ec362f7b36a4d403db749e88b0e604848d24485c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64eeab5267213b95c7eb2013ec362f7b36a4d403db749e88b0e604848d24485c->leave($__internal_64eeab5267213b95c7eb2013ec362f7b36a4d403db749e88b0e604848d24485c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_904532c683955c7ee242596ff8f689ec022e48e32cd043ac7653a2d91095a1ca = $this->env->getExtension("native_profiler");
        $__internal_904532c683955c7ee242596ff8f689ec022e48e32cd043ac7653a2d91095a1ca->enter($__internal_904532c683955c7ee242596ff8f689ec022e48e32cd043ac7653a2d91095a1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_904532c683955c7ee242596ff8f689ec022e48e32cd043ac7653a2d91095a1ca->leave($__internal_904532c683955c7ee242596ff8f689ec022e48e32cd043ac7653a2d91095a1ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
