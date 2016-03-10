<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_81edab1c9f8495820385056b7d1e9dd93593de304d7bdc936ad3991a933e1411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a7d296d02b335c72f583d59004e562944689024a9bca7ecaefb95db977f16dc = $this->env->getExtension("native_profiler");
        $__internal_0a7d296d02b335c72f583d59004e562944689024a9bca7ecaefb95db977f16dc->enter($__internal_0a7d296d02b335c72f583d59004e562944689024a9bca7ecaefb95db977f16dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a7d296d02b335c72f583d59004e562944689024a9bca7ecaefb95db977f16dc->leave($__internal_0a7d296d02b335c72f583d59004e562944689024a9bca7ecaefb95db977f16dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bee1898e1a2ac7b34cd96b2e8cc9ec618775be602a1662ef0419c53ee1d1c1c4 = $this->env->getExtension("native_profiler");
        $__internal_bee1898e1a2ac7b34cd96b2e8cc9ec618775be602a1662ef0419c53ee1d1c1c4->enter($__internal_bee1898e1a2ac7b34cd96b2e8cc9ec618775be602a1662ef0419c53ee1d1c1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_bee1898e1a2ac7b34cd96b2e8cc9ec618775be602a1662ef0419c53ee1d1c1c4->leave($__internal_bee1898e1a2ac7b34cd96b2e8cc9ec618775be602a1662ef0419c53ee1d1c1c4_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8972680c2c0660fc19313106762d09abce8b4b6f8480297ec4f1da08f26e8977 = $this->env->getExtension("native_profiler");
        $__internal_8972680c2c0660fc19313106762d09abce8b4b6f8480297ec4f1da08f26e8977->enter($__internal_8972680c2c0660fc19313106762d09abce8b4b6f8480297ec4f1da08f26e8977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
\t\t";
        // line 11
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 11)->display($context);
        // line 12
        echo "
";
        
        $__internal_8972680c2c0660fc19313106762d09abce8b4b6f8480297ec4f1da08f26e8977->leave($__internal_8972680c2c0660fc19313106762d09abce8b4b6f8480297ec4f1da08f26e8977_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 12,  58 => 11,  55 => 10,  49 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block fos_user_content %}*/
/* */
/* 		{% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
