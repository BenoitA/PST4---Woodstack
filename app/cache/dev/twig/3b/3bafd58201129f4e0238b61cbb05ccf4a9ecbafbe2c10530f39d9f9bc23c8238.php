<?php

/* ::layout.html.twig */
class __TwigTemplate_076d690314bee98b6a38ca2b290904d333c08ac6c473f27a56eb0a1e2aaa1fdb extends Twig_Template
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
        $__internal_24c842f1b3d55e5f48304447a8430df40ff327cdb7b37f6727fb15ea76546087 = $this->env->getExtension("native_profiler");
        $__internal_24c842f1b3d55e5f48304447a8430df40ff327cdb7b37f6727fb15ea76546087->enter($__internal_24c842f1b3d55e5f48304447a8430df40ff327cdb7b37f6727fb15ea76546087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_24c842f1b3d55e5f48304447a8430df40ff327cdb7b37f6727fb15ea76546087->leave($__internal_24c842f1b3d55e5f48304447a8430df40ff327cdb7b37f6727fb15ea76546087_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffc3518730282dc137a1868f99225c9abcd8eb8ae8228ded73e97d4db5160983 = $this->env->getExtension("native_profiler");
        $__internal_ffc3518730282dc137a1868f99225c9abcd8eb8ae8228ded73e97d4db5160983->enter($__internal_ffc3518730282dc137a1868f99225c9abcd8eb8ae8228ded73e97d4db5160983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_ffc3518730282dc137a1868f99225c9abcd8eb8ae8228ded73e97d4db5160983->leave($__internal_ffc3518730282dc137a1868f99225c9abcd8eb8ae8228ded73e97d4db5160983_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e178b53349dde6770f41e77cc1bdba136addd82292715bad6d8a9adc000e9590 = $this->env->getExtension("native_profiler");
        $__internal_e178b53349dde6770f41e77cc1bdba136addd82292715bad6d8a9adc000e9590->enter($__internal_e178b53349dde6770f41e77cc1bdba136addd82292715bad6d8a9adc000e9590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_e178b53349dde6770f41e77cc1bdba136addd82292715bad6d8a9adc000e9590->leave($__internal_e178b53349dde6770f41e77cc1bdba136addd82292715bad6d8a9adc000e9590_prof);

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
