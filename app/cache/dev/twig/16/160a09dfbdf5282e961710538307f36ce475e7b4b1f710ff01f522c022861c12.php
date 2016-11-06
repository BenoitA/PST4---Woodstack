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
        $__internal_8c9f0c4dba060f349c1754a066458fd8214b95d9c15b72e6b0ef18897d3313b4 = $this->env->getExtension("native_profiler");
        $__internal_8c9f0c4dba060f349c1754a066458fd8214b95d9c15b72e6b0ef18897d3313b4->enter($__internal_8c9f0c4dba060f349c1754a066458fd8214b95d9c15b72e6b0ef18897d3313b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c9f0c4dba060f349c1754a066458fd8214b95d9c15b72e6b0ef18897d3313b4->leave($__internal_8c9f0c4dba060f349c1754a066458fd8214b95d9c15b72e6b0ef18897d3313b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_646c75bc2bc9d4d91d0290d3360fec197a2edf564056a1b5ac308528ae5b9e2f = $this->env->getExtension("native_profiler");
        $__internal_646c75bc2bc9d4d91d0290d3360fec197a2edf564056a1b5ac308528ae5b9e2f->enter($__internal_646c75bc2bc9d4d91d0290d3360fec197a2edf564056a1b5ac308528ae5b9e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_646c75bc2bc9d4d91d0290d3360fec197a2edf564056a1b5ac308528ae5b9e2f->leave($__internal_646c75bc2bc9d4d91d0290d3360fec197a2edf564056a1b5ac308528ae5b9e2f_prof);

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
