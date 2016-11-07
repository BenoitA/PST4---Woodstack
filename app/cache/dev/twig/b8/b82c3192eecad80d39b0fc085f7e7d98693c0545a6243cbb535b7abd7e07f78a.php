<?php

/* ::layout.html.twig */
class __TwigTemplate_1988d2e9613e038ea570038f5c486bf029194b1e31e1bfdc19963efe8af5a4f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d5dfa755daf6ec12291796f0be612c3eb7f454a3252a175e9d759f80b3c0b0d = $this->env->getExtension("native_profiler");
        $__internal_6d5dfa755daf6ec12291796f0be612c3eb7f454a3252a175e9d759f80b3c0b0d->enter($__internal_6d5dfa755daf6ec12291796f0be612c3eb7f454a3252a175e9d759f80b3c0b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t
\t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
</body>
</html>\t\t\t\t
";
        
        $__internal_6d5dfa755daf6ec12291796f0be612c3eb7f454a3252a175e9d759f80b3c0b0d->leave($__internal_6d5dfa755daf6ec12291796f0be612c3eb7f454a3252a175e9d759f80b3c0b0d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25c0d050c887f7a91e3b6d0607cffb336af39835e5ae193282110a3d932357cb = $this->env->getExtension("native_profiler");
        $__internal_25c0d050c887f7a91e3b6d0607cffb336af39835e5ae193282110a3d932357cb->enter($__internal_25c0d050c887f7a91e3b6d0607cffb336af39835e5ae193282110a3d932357cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_25c0d050c887f7a91e3b6d0607cffb336af39835e5ae193282110a3d932357cb->leave($__internal_25c0d050c887f7a91e3b6d0607cffb336af39835e5ae193282110a3d932357cb_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0c2a8a813c92f12e00ec92b1a3bde0b86935df8f4a718077c51d63131b0a5a9 = $this->env->getExtension("native_profiler");
        $__internal_b0c2a8a813c92f12e00ec92b1a3bde0b86935df8f4a718077c51d63131b0a5a9->enter($__internal_b0c2a8a813c92f12e00ec92b1a3bde0b86935df8f4a718077c51d63131b0a5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_b0c2a8a813c92f12e00ec92b1a3bde0b86935df8f4a718077c51d63131b0a5a9->leave($__internal_b0c2a8a813c92f12e00ec92b1a3bde0b86935df8f4a718077c51d63131b0a5a9_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  69 => 10,  63 => 9,  51 => 7,  39 => 14,  37 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	*/
/* 	<title>{% block title %} {% endblock %}</title>*/
/* 	*/
/* 	{% block stylesheets %}*/
/* 		{# On charge le css de bootstrap depuis le site directement #}*/
/* 		<link rel="stylesheet"*/
/* 		href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/* 	{% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* </body>*/
/* </html>				*/
/* */
