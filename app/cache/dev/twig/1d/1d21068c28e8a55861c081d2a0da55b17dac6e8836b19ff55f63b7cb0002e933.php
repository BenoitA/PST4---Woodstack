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
        $__internal_8c1bce1f9ba7686186d3de61df488e021b3042a93e0185902303004f4f27bd7d = $this->env->getExtension("native_profiler");
        $__internal_8c1bce1f9ba7686186d3de61df488e021b3042a93e0185902303004f4f27bd7d->enter($__internal_8c1bce1f9ba7686186d3de61df488e021b3042a93e0185902303004f4f27bd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8c1bce1f9ba7686186d3de61df488e021b3042a93e0185902303004f4f27bd7d->leave($__internal_8c1bce1f9ba7686186d3de61df488e021b3042a93e0185902303004f4f27bd7d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d22f5548f9a1d0e51ce5f29ca3c7e4ace96a0c9edf8666140a25a0096d593cb9 = $this->env->getExtension("native_profiler");
        $__internal_d22f5548f9a1d0e51ce5f29ca3c7e4ace96a0c9edf8666140a25a0096d593cb9->enter($__internal_d22f5548f9a1d0e51ce5f29ca3c7e4ace96a0c9edf8666140a25a0096d593cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d22f5548f9a1d0e51ce5f29ca3c7e4ace96a0c9edf8666140a25a0096d593cb9->leave($__internal_d22f5548f9a1d0e51ce5f29ca3c7e4ace96a0c9edf8666140a25a0096d593cb9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76de10692348cb66514ec8bf225ced858743c0bcccc81690fc16d3b72abd9c5f = $this->env->getExtension("native_profiler");
        $__internal_76de10692348cb66514ec8bf225ced858743c0bcccc81690fc16d3b72abd9c5f->enter($__internal_76de10692348cb66514ec8bf225ced858743c0bcccc81690fc16d3b72abd9c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_76de10692348cb66514ec8bf225ced858743c0bcccc81690fc16d3b72abd9c5f->leave($__internal_76de10692348cb66514ec8bf225ced858743c0bcccc81690fc16d3b72abd9c5f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a1adafce272d8810f7c409ecfbdaed6b524db487777e076eafa6c43ab556377 = $this->env->getExtension("native_profiler");
        $__internal_8a1adafce272d8810f7c409ecfbdaed6b524db487777e076eafa6c43ab556377->enter($__internal_8a1adafce272d8810f7c409ecfbdaed6b524db487777e076eafa6c43ab556377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a1adafce272d8810f7c409ecfbdaed6b524db487777e076eafa6c43ab556377->leave($__internal_8a1adafce272d8810f7c409ecfbdaed6b524db487777e076eafa6c43ab556377_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30a317ad07222ae8ccdbfaf4897f40cac0cae64cfb07d3da2f894e28dd4f20de = $this->env->getExtension("native_profiler");
        $__internal_30a317ad07222ae8ccdbfaf4897f40cac0cae64cfb07d3da2f894e28dd4f20de->enter($__internal_30a317ad07222ae8ccdbfaf4897f40cac0cae64cfb07d3da2f894e28dd4f20de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30a317ad07222ae8ccdbfaf4897f40cac0cae64cfb07d3da2f894e28dd4f20de->leave($__internal_30a317ad07222ae8ccdbfaf4897f40cac0cae64cfb07d3da2f894e28dd4f20de_prof);

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
