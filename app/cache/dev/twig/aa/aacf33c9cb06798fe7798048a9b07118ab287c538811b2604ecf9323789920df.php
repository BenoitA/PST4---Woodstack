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
        $__internal_b645a17caf2f68ab42c496d8e8a79fdb22786b987caa168fac7e19a2c0f334b7 = $this->env->getExtension("native_profiler");
        $__internal_b645a17caf2f68ab42c496d8e8a79fdb22786b987caa168fac7e19a2c0f334b7->enter($__internal_b645a17caf2f68ab42c496d8e8a79fdb22786b987caa168fac7e19a2c0f334b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b645a17caf2f68ab42c496d8e8a79fdb22786b987caa168fac7e19a2c0f334b7->leave($__internal_b645a17caf2f68ab42c496d8e8a79fdb22786b987caa168fac7e19a2c0f334b7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce90dfb44f3cc72b877162876bf316505df346a4dc7d8668a753835be621c542 = $this->env->getExtension("native_profiler");
        $__internal_ce90dfb44f3cc72b877162876bf316505df346a4dc7d8668a753835be621c542->enter($__internal_ce90dfb44f3cc72b877162876bf316505df346a4dc7d8668a753835be621c542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ce90dfb44f3cc72b877162876bf316505df346a4dc7d8668a753835be621c542->leave($__internal_ce90dfb44f3cc72b877162876bf316505df346a4dc7d8668a753835be621c542_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f47ea2713430ee348e0bbceeb5013896b6a205c00f613943903519baff571c0 = $this->env->getExtension("native_profiler");
        $__internal_3f47ea2713430ee348e0bbceeb5013896b6a205c00f613943903519baff571c0->enter($__internal_3f47ea2713430ee348e0bbceeb5013896b6a205c00f613943903519baff571c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f47ea2713430ee348e0bbceeb5013896b6a205c00f613943903519baff571c0->leave($__internal_3f47ea2713430ee348e0bbceeb5013896b6a205c00f613943903519baff571c0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7152b58a483b537bf2b3ed42e6229521310277cbd1f365b7f1f5a8c0881615c4 = $this->env->getExtension("native_profiler");
        $__internal_7152b58a483b537bf2b3ed42e6229521310277cbd1f365b7f1f5a8c0881615c4->enter($__internal_7152b58a483b537bf2b3ed42e6229521310277cbd1f365b7f1f5a8c0881615c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7152b58a483b537bf2b3ed42e6229521310277cbd1f365b7f1f5a8c0881615c4->leave($__internal_7152b58a483b537bf2b3ed42e6229521310277cbd1f365b7f1f5a8c0881615c4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d418532fd3467c7a150fde236e6b690b5f08c28aad96133272103348e635652 = $this->env->getExtension("native_profiler");
        $__internal_7d418532fd3467c7a150fde236e6b690b5f08c28aad96133272103348e635652->enter($__internal_7d418532fd3467c7a150fde236e6b690b5f08c28aad96133272103348e635652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d418532fd3467c7a150fde236e6b690b5f08c28aad96133272103348e635652->leave($__internal_7d418532fd3467c7a150fde236e6b690b5f08c28aad96133272103348e635652_prof);

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
