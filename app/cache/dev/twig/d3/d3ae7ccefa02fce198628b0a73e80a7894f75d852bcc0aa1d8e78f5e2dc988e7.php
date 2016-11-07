<?php

/* base.html.twig */
class __TwigTemplate_f30234e0275e5cc6809edc84a66db6ce5c93ddd18b97d3c98b2e0ebd2fc85476 extends Twig_Template
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
        $__internal_908891847a9c54553815b79bef57f182827aa7c48ac024bdc4d36eabb7462bd3 = $this->env->getExtension("native_profiler");
        $__internal_908891847a9c54553815b79bef57f182827aa7c48ac024bdc4d36eabb7462bd3->enter($__internal_908891847a9c54553815b79bef57f182827aa7c48ac024bdc4d36eabb7462bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_908891847a9c54553815b79bef57f182827aa7c48ac024bdc4d36eabb7462bd3->leave($__internal_908891847a9c54553815b79bef57f182827aa7c48ac024bdc4d36eabb7462bd3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c79089fe262c2e816e4d27f4ced78ff75ab9f278a70383e118e393383632d31 = $this->env->getExtension("native_profiler");
        $__internal_2c79089fe262c2e816e4d27f4ced78ff75ab9f278a70383e118e393383632d31->enter($__internal_2c79089fe262c2e816e4d27f4ced78ff75ab9f278a70383e118e393383632d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2c79089fe262c2e816e4d27f4ced78ff75ab9f278a70383e118e393383632d31->leave($__internal_2c79089fe262c2e816e4d27f4ced78ff75ab9f278a70383e118e393383632d31_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18e22cc30cdf9fe8acfc308f487d991508b389e226e9e99ab85551e67672b48b = $this->env->getExtension("native_profiler");
        $__internal_18e22cc30cdf9fe8acfc308f487d991508b389e226e9e99ab85551e67672b48b->enter($__internal_18e22cc30cdf9fe8acfc308f487d991508b389e226e9e99ab85551e67672b48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_18e22cc30cdf9fe8acfc308f487d991508b389e226e9e99ab85551e67672b48b->leave($__internal_18e22cc30cdf9fe8acfc308f487d991508b389e226e9e99ab85551e67672b48b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f30f95c95e83606c103836f6fb1f908c5a0bc571005143ca4c8d7593b2a7874e = $this->env->getExtension("native_profiler");
        $__internal_f30f95c95e83606c103836f6fb1f908c5a0bc571005143ca4c8d7593b2a7874e->enter($__internal_f30f95c95e83606c103836f6fb1f908c5a0bc571005143ca4c8d7593b2a7874e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f30f95c95e83606c103836f6fb1f908c5a0bc571005143ca4c8d7593b2a7874e->leave($__internal_f30f95c95e83606c103836f6fb1f908c5a0bc571005143ca4c8d7593b2a7874e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9a2cec3734cca3337e06f254d2ead8071040937c88e1429e76a4dbfac323c3d = $this->env->getExtension("native_profiler");
        $__internal_c9a2cec3734cca3337e06f254d2ead8071040937c88e1429e76a4dbfac323c3d->enter($__internal_c9a2cec3734cca3337e06f254d2ead8071040937c88e1429e76a4dbfac323c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c9a2cec3734cca3337e06f254d2ead8071040937c88e1429e76a4dbfac323c3d->leave($__internal_c9a2cec3734cca3337e06f254d2ead8071040937c88e1429e76a4dbfac323c3d_prof);

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
