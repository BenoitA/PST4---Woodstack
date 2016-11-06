<?php

/* ::base.html.twig */
class __TwigTemplate_fdee706cda0577dcc2c5d8a944e68f24b781d3e104dfcf8ad239e1690c1d4d19 extends Twig_Template
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
        $__internal_620e662e1dc9a2c0cc2f4a28494c38bf91950472a9cec1de055d97b6cf1eb3d6 = $this->env->getExtension("native_profiler");
        $__internal_620e662e1dc9a2c0cc2f4a28494c38bf91950472a9cec1de055d97b6cf1eb3d6->enter($__internal_620e662e1dc9a2c0cc2f4a28494c38bf91950472a9cec1de055d97b6cf1eb3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_620e662e1dc9a2c0cc2f4a28494c38bf91950472a9cec1de055d97b6cf1eb3d6->leave($__internal_620e662e1dc9a2c0cc2f4a28494c38bf91950472a9cec1de055d97b6cf1eb3d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e980274cc3c2ba06cce4123e7b8472035527621c7873e088e9b72fa1eb678fb = $this->env->getExtension("native_profiler");
        $__internal_9e980274cc3c2ba06cce4123e7b8472035527621c7873e088e9b72fa1eb678fb->enter($__internal_9e980274cc3c2ba06cce4123e7b8472035527621c7873e088e9b72fa1eb678fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e980274cc3c2ba06cce4123e7b8472035527621c7873e088e9b72fa1eb678fb->leave($__internal_9e980274cc3c2ba06cce4123e7b8472035527621c7873e088e9b72fa1eb678fb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c89ac8a97f6ab2f5a0388f4bd4138895fb054357da10c590efa229395e4b6eb = $this->env->getExtension("native_profiler");
        $__internal_8c89ac8a97f6ab2f5a0388f4bd4138895fb054357da10c590efa229395e4b6eb->enter($__internal_8c89ac8a97f6ab2f5a0388f4bd4138895fb054357da10c590efa229395e4b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8c89ac8a97f6ab2f5a0388f4bd4138895fb054357da10c590efa229395e4b6eb->leave($__internal_8c89ac8a97f6ab2f5a0388f4bd4138895fb054357da10c590efa229395e4b6eb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4583f7cf1577bef07c98517144d8085b65f2cf159a9b6af07c8e96f7ee101ff1 = $this->env->getExtension("native_profiler");
        $__internal_4583f7cf1577bef07c98517144d8085b65f2cf159a9b6af07c8e96f7ee101ff1->enter($__internal_4583f7cf1577bef07c98517144d8085b65f2cf159a9b6af07c8e96f7ee101ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4583f7cf1577bef07c98517144d8085b65f2cf159a9b6af07c8e96f7ee101ff1->leave($__internal_4583f7cf1577bef07c98517144d8085b65f2cf159a9b6af07c8e96f7ee101ff1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_880d282dc16710d2ed225edcd57c9f8cbf999229d52ce3774d3e94c365394cf7 = $this->env->getExtension("native_profiler");
        $__internal_880d282dc16710d2ed225edcd57c9f8cbf999229d52ce3774d3e94c365394cf7->enter($__internal_880d282dc16710d2ed225edcd57c9f8cbf999229d52ce3774d3e94c365394cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_880d282dc16710d2ed225edcd57c9f8cbf999229d52ce3774d3e94c365394cf7->leave($__internal_880d282dc16710d2ed225edcd57c9f8cbf999229d52ce3774d3e94c365394cf7_prof);

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
