<?php

/* base.html.twig */
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
        $__internal_9eb304c7ce9864a1b8f6566dd247560b77c46e0849c87346aa2dbdf371a4e08c = $this->env->getExtension("native_profiler");
        $__internal_9eb304c7ce9864a1b8f6566dd247560b77c46e0849c87346aa2dbdf371a4e08c->enter($__internal_9eb304c7ce9864a1b8f6566dd247560b77c46e0849c87346aa2dbdf371a4e08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9eb304c7ce9864a1b8f6566dd247560b77c46e0849c87346aa2dbdf371a4e08c->leave($__internal_9eb304c7ce9864a1b8f6566dd247560b77c46e0849c87346aa2dbdf371a4e08c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c346d6cb89ae7fade57d4edd25c8dc35dee272906ad6e3bbb8c4702ba21ce019 = $this->env->getExtension("native_profiler");
        $__internal_c346d6cb89ae7fade57d4edd25c8dc35dee272906ad6e3bbb8c4702ba21ce019->enter($__internal_c346d6cb89ae7fade57d4edd25c8dc35dee272906ad6e3bbb8c4702ba21ce019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c346d6cb89ae7fade57d4edd25c8dc35dee272906ad6e3bbb8c4702ba21ce019->leave($__internal_c346d6cb89ae7fade57d4edd25c8dc35dee272906ad6e3bbb8c4702ba21ce019_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3e763515f2fdc445fbf1a97e2e9664bf34dfdc9f1cca701f33adba6f7e0bc420 = $this->env->getExtension("native_profiler");
        $__internal_3e763515f2fdc445fbf1a97e2e9664bf34dfdc9f1cca701f33adba6f7e0bc420->enter($__internal_3e763515f2fdc445fbf1a97e2e9664bf34dfdc9f1cca701f33adba6f7e0bc420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3e763515f2fdc445fbf1a97e2e9664bf34dfdc9f1cca701f33adba6f7e0bc420->leave($__internal_3e763515f2fdc445fbf1a97e2e9664bf34dfdc9f1cca701f33adba6f7e0bc420_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_68899f2af0b0c5cf85db3f912bb715220eaa610986928c21f5232c863f89736a = $this->env->getExtension("native_profiler");
        $__internal_68899f2af0b0c5cf85db3f912bb715220eaa610986928c21f5232c863f89736a->enter($__internal_68899f2af0b0c5cf85db3f912bb715220eaa610986928c21f5232c863f89736a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_68899f2af0b0c5cf85db3f912bb715220eaa610986928c21f5232c863f89736a->leave($__internal_68899f2af0b0c5cf85db3f912bb715220eaa610986928c21f5232c863f89736a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1b0d45f6cfd4d05146c1dbd4c98c3786ff25c3c1787808001416764a2ecdd44 = $this->env->getExtension("native_profiler");
        $__internal_e1b0d45f6cfd4d05146c1dbd4c98c3786ff25c3c1787808001416764a2ecdd44->enter($__internal_e1b0d45f6cfd4d05146c1dbd4c98c3786ff25c3c1787808001416764a2ecdd44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e1b0d45f6cfd4d05146c1dbd4c98c3786ff25c3c1787808001416764a2ecdd44->leave($__internal_e1b0d45f6cfd4d05146c1dbd4c98c3786ff25c3c1787808001416764a2ecdd44_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
