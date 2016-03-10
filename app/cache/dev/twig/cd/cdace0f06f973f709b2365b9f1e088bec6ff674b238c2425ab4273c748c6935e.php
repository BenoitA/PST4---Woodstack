<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c4bd373ea1c2a466acacf6d2ba3e5ce152ce7dc65b139bb6b418487ad3f61880 extends Twig_Template
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
        $__internal_41c915a937fcbc1b9291e443f423408435a396beb3bbd56c207d7e1ce3c72662 = $this->env->getExtension("native_profiler");
        $__internal_41c915a937fcbc1b9291e443f423408435a396beb3bbd56c207d7e1ce3c72662->enter($__internal_41c915a937fcbc1b9291e443f423408435a396beb3bbd56c207d7e1ce3c72662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c915a937fcbc1b9291e443f423408435a396beb3bbd56c207d7e1ce3c72662->leave($__internal_41c915a937fcbc1b9291e443f423408435a396beb3bbd56c207d7e1ce3c72662_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03223c54be2915cad9d06487f85dc03f48a823f55e877ea0b8c6c6ddc26ae383 = $this->env->getExtension("native_profiler");
        $__internal_03223c54be2915cad9d06487f85dc03f48a823f55e877ea0b8c6c6ddc26ae383->enter($__internal_03223c54be2915cad9d06487f85dc03f48a823f55e877ea0b8c6c6ddc26ae383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_03223c54be2915cad9d06487f85dc03f48a823f55e877ea0b8c6c6ddc26ae383->leave($__internal_03223c54be2915cad9d06487f85dc03f48a823f55e877ea0b8c6c6ddc26ae383_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5457943562c4e1adbc5c45f58955ec80fde820f131faf8aee38786a5b6891383 = $this->env->getExtension("native_profiler");
        $__internal_5457943562c4e1adbc5c45f58955ec80fde820f131faf8aee38786a5b6891383->enter($__internal_5457943562c4e1adbc5c45f58955ec80fde820f131faf8aee38786a5b6891383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "\t
\t";
        // line 10
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 10)->display($context);
        // line 11
        echo "\t
\t
";
        
        $__internal_5457943562c4e1adbc5c45f58955ec80fde820f131faf8aee38786a5b6891383->leave($__internal_5457943562c4e1adbc5c45f58955ec80fde820f131faf8aee38786a5b6891383_prof);

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
