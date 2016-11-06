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
        $__internal_e8ce376f3aa3395657684981c3a717d9a69e9fe4a112b22571d2c62fcf64a784 = $this->env->getExtension("native_profiler");
        $__internal_e8ce376f3aa3395657684981c3a717d9a69e9fe4a112b22571d2c62fcf64a784->enter($__internal_e8ce376f3aa3395657684981c3a717d9a69e9fe4a112b22571d2c62fcf64a784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e8ce376f3aa3395657684981c3a717d9a69e9fe4a112b22571d2c62fcf64a784->leave($__internal_e8ce376f3aa3395657684981c3a717d9a69e9fe4a112b22571d2c62fcf64a784_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c94c6d6b342f4e6a944f878fb5f1e839977feb19f6e9258710997ea5667763d = $this->env->getExtension("native_profiler");
        $__internal_0c94c6d6b342f4e6a944f878fb5f1e839977feb19f6e9258710997ea5667763d->enter($__internal_0c94c6d6b342f4e6a944f878fb5f1e839977feb19f6e9258710997ea5667763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c94c6d6b342f4e6a944f878fb5f1e839977feb19f6e9258710997ea5667763d->leave($__internal_0c94c6d6b342f4e6a944f878fb5f1e839977feb19f6e9258710997ea5667763d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa5c7a5c2a7cbc42baf37fae0578f3a4ff6b42a4e86119ce6c8c544c9a98bcee = $this->env->getExtension("native_profiler");
        $__internal_fa5c7a5c2a7cbc42baf37fae0578f3a4ff6b42a4e86119ce6c8c544c9a98bcee->enter($__internal_fa5c7a5c2a7cbc42baf37fae0578f3a4ff6b42a4e86119ce6c8c544c9a98bcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa5c7a5c2a7cbc42baf37fae0578f3a4ff6b42a4e86119ce6c8c544c9a98bcee->leave($__internal_fa5c7a5c2a7cbc42baf37fae0578f3a4ff6b42a4e86119ce6c8c544c9a98bcee_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_19cfd183658d4af47f53d476855bb00902a787da7934580d406bd77b4f2ddfa1 = $this->env->getExtension("native_profiler");
        $__internal_19cfd183658d4af47f53d476855bb00902a787da7934580d406bd77b4f2ddfa1->enter($__internal_19cfd183658d4af47f53d476855bb00902a787da7934580d406bd77b4f2ddfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_19cfd183658d4af47f53d476855bb00902a787da7934580d406bd77b4f2ddfa1->leave($__internal_19cfd183658d4af47f53d476855bb00902a787da7934580d406bd77b4f2ddfa1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1cc8d3d4479bd1f0152410940deae1400c14dd3076755a87618530be09949ee0 = $this->env->getExtension("native_profiler");
        $__internal_1cc8d3d4479bd1f0152410940deae1400c14dd3076755a87618530be09949ee0->enter($__internal_1cc8d3d4479bd1f0152410940deae1400c14dd3076755a87618530be09949ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1cc8d3d4479bd1f0152410940deae1400c14dd3076755a87618530be09949ee0->leave($__internal_1cc8d3d4479bd1f0152410940deae1400c14dd3076755a87618530be09949ee0_prof);

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
