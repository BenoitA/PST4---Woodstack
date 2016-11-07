<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_10b78d51036b921b9e36c0210378b3c810905830993a5e3920fe188d562fa72b extends Twig_Template
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
        $__internal_eb423c3fc268217cd7ba0d4bc85b5fcf5aa7132b96f34f5088b540a56958832b = $this->env->getExtension("native_profiler");
        $__internal_eb423c3fc268217cd7ba0d4bc85b5fcf5aa7132b96f34f5088b540a56958832b->enter($__internal_eb423c3fc268217cd7ba0d4bc85b5fcf5aa7132b96f34f5088b540a56958832b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb423c3fc268217cd7ba0d4bc85b5fcf5aa7132b96f34f5088b540a56958832b->leave($__internal_eb423c3fc268217cd7ba0d4bc85b5fcf5aa7132b96f34f5088b540a56958832b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84ab0ffaba7a9320e3f9e586a25b4bcfa0b5c7d08f4b212bf378ab2944e9b0ef = $this->env->getExtension("native_profiler");
        $__internal_84ab0ffaba7a9320e3f9e586a25b4bcfa0b5c7d08f4b212bf378ab2944e9b0ef->enter($__internal_84ab0ffaba7a9320e3f9e586a25b4bcfa0b5c7d08f4b212bf378ab2944e9b0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_84ab0ffaba7a9320e3f9e586a25b4bcfa0b5c7d08f4b212bf378ab2944e9b0ef->leave($__internal_84ab0ffaba7a9320e3f9e586a25b4bcfa0b5c7d08f4b212bf378ab2944e9b0ef_prof);

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
