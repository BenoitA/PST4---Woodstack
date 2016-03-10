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
        $__internal_fe566689f1c936e5454450011dba077abc497cadef8e64117e06de757206b48c = $this->env->getExtension("native_profiler");
        $__internal_fe566689f1c936e5454450011dba077abc497cadef8e64117e06de757206b48c->enter($__internal_fe566689f1c936e5454450011dba077abc497cadef8e64117e06de757206b48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_fe566689f1c936e5454450011dba077abc497cadef8e64117e06de757206b48c->leave($__internal_fe566689f1c936e5454450011dba077abc497cadef8e64117e06de757206b48c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7648ad23693e782678d470f7ee9a02710e024823493dbdbbe4a10dd55fc17eb5 = $this->env->getExtension("native_profiler");
        $__internal_7648ad23693e782678d470f7ee9a02710e024823493dbdbbe4a10dd55fc17eb5->enter($__internal_7648ad23693e782678d470f7ee9a02710e024823493dbdbbe4a10dd55fc17eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_7648ad23693e782678d470f7ee9a02710e024823493dbdbbe4a10dd55fc17eb5->leave($__internal_7648ad23693e782678d470f7ee9a02710e024823493dbdbbe4a10dd55fc17eb5_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a420138243e02b1f0821f9a7eb0d566283d754445b29177043f440e7749fb88 = $this->env->getExtension("native_profiler");
        $__internal_4a420138243e02b1f0821f9a7eb0d566283d754445b29177043f440e7749fb88->enter($__internal_4a420138243e02b1f0821f9a7eb0d566283d754445b29177043f440e7749fb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t";
        // line 11
        echo "\t\t<link rel=\"stylesheet\"
\t\thref=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
\t";
        
        $__internal_4a420138243e02b1f0821f9a7eb0d566283d754445b29177043f440e7749fb88->leave($__internal_4a420138243e02b1f0821f9a7eb0d566283d754445b29177043f440e7749fb88_prof);

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
