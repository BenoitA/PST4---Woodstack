<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a50754cc9402d2dc7f8fd4a13729d944483a774e9b5c618d704612b48ac25fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_afad45b3031207eded5a0102cf2d8e75bbbace4e451f99f4ccdc5222853cc2c4 = $this->env->getExtension("native_profiler");
        $__internal_afad45b3031207eded5a0102cf2d8e75bbbace4e451f99f4ccdc5222853cc2c4->enter($__internal_afad45b3031207eded5a0102cf2d8e75bbbace4e451f99f4ccdc5222853cc2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afad45b3031207eded5a0102cf2d8e75bbbace4e451f99f4ccdc5222853cc2c4->leave($__internal_afad45b3031207eded5a0102cf2d8e75bbbace4e451f99f4ccdc5222853cc2c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_731d40810f3a8b57b7bcfd9c91661522a6b3f97f5b5f3cee2897065fd6f29b5d = $this->env->getExtension("native_profiler");
        $__internal_731d40810f3a8b57b7bcfd9c91661522a6b3f97f5b5f3cee2897065fd6f29b5d->enter($__internal_731d40810f3a8b57b7bcfd9c91661522a6b3f97f5b5f3cee2897065fd6f29b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_731d40810f3a8b57b7bcfd9c91661522a6b3f97f5b5f3cee2897065fd6f29b5d->leave($__internal_731d40810f3a8b57b7bcfd9c91661522a6b3f97f5b5f3cee2897065fd6f29b5d_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1992130ac5e47759dc3c4d58ef7234ad42dc702a13d2fdd2e73d662d9a03a665 = $this->env->getExtension("native_profiler");
        $__internal_1992130ac5e47759dc3c4d58ef7234ad42dc702a13d2fdd2e73d662d9a03a665->enter($__internal_1992130ac5e47759dc3c4d58ef7234ad42dc702a13d2fdd2e73d662d9a03a665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t
\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t
\t
";
        
        $__internal_1992130ac5e47759dc3c4d58ef7234ad42dc702a13d2fdd2e73d662d9a03a665->leave($__internal_1992130ac5e47759dc3c4d58ef7234ad42dc702a13d2fdd2e73d662d9a03a665_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  58 => 10,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* 	*/
/* 	{% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* 	*/
/* 	*/
/* {% endblock fos_user_content %}*/
/* */
