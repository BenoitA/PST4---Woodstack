<?php

/* ::base.html.twig */
class __TwigTemplate_2dcc8e6daad317cea15adecb0755a28687ebd504e2fe6e17bdf65de7ee94c22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a914e6c89b1f146225428db780ad5c76ec30dd09fd22abbbf56bb1b8db9cbc0 = $this->env->getExtension("native_profiler");
        $__internal_5a914e6c89b1f146225428db780ad5c76ec30dd09fd22abbbf56bb1b8db9cbc0->enter($__internal_5a914e6c89b1f146225428db780ad5c76ec30dd09fd22abbbf56bb1b8db9cbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5a914e6c89b1f146225428db780ad5c76ec30dd09fd22abbbf56bb1b8db9cbc0->leave($__internal_5a914e6c89b1f146225428db780ad5c76ec30dd09fd22abbbf56bb1b8db9cbc0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8a081c9eec9161605054aad66a1b80431297aa6ea94764217094d2ac5d96bb5 = $this->env->getExtension("native_profiler");
        $__internal_e8a081c9eec9161605054aad66a1b80431297aa6ea94764217094d2ac5d96bb5->enter($__internal_e8a081c9eec9161605054aad66a1b80431297aa6ea94764217094d2ac5d96bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e8a081c9eec9161605054aad66a1b80431297aa6ea94764217094d2ac5d96bb5->leave($__internal_e8a081c9eec9161605054aad66a1b80431297aa6ea94764217094d2ac5d96bb5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af5bf28eee3ed0b008cf51943ae58794fbfe6c96949aae2bb8bd0d19587a299c = $this->env->getExtension("native_profiler");
        $__internal_af5bf28eee3ed0b008cf51943ae58794fbfe6c96949aae2bb8bd0d19587a299c->enter($__internal_af5bf28eee3ed0b008cf51943ae58794fbfe6c96949aae2bb8bd0d19587a299c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af5bf28eee3ed0b008cf51943ae58794fbfe6c96949aae2bb8bd0d19587a299c->leave($__internal_af5bf28eee3ed0b008cf51943ae58794fbfe6c96949aae2bb8bd0d19587a299c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_57d76d846a5ebd2154757201d08815867cad1d1579ba68e639cbd1eea9423efe = $this->env->getExtension("native_profiler");
        $__internal_57d76d846a5ebd2154757201d08815867cad1d1579ba68e639cbd1eea9423efe->enter($__internal_57d76d846a5ebd2154757201d08815867cad1d1579ba68e639cbd1eea9423efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_57d76d846a5ebd2154757201d08815867cad1d1579ba68e639cbd1eea9423efe->leave($__internal_57d76d846a5ebd2154757201d08815867cad1d1579ba68e639cbd1eea9423efe_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb29549c59968f33a4275217832dd10fe37be259f9f7f93a9aa652e13a71c65e = $this->env->getExtension("native_profiler");
        $__internal_eb29549c59968f33a4275217832dd10fe37be259f9f7f93a9aa652e13a71c65e->enter($__internal_eb29549c59968f33a4275217832dd10fe37be259f9f7f93a9aa652e13a71c65e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eb29549c59968f33a4275217832dd10fe37be259f9f7f93a9aa652e13a71c65e->leave($__internal_eb29549c59968f33a4275217832dd10fe37be259f9f7f93a9aa652e13a71c65e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
