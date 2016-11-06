<?php

/* WSWoodstackBundle:Wood:layout.html.twig */
class __TwigTemplate_1c35ce84a1586cffc1fe84a58b9e7540b90bdddde2d5d585e3068cde4b1d1f5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "WSWoodstackBundle:Wood:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2feb2d2be6424b67f636e0aa276bb028b094ca2874a099f91febc19ee7f32ce = $this->env->getExtension("native_profiler");
        $__internal_f2feb2d2be6424b67f636e0aa276bb028b094ca2874a099f91febc19ee7f32ce->enter($__internal_f2feb2d2be6424b67f636e0aa276bb028b094ca2874a099f91febc19ee7f32ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Wood:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2feb2d2be6424b67f636e0aa276bb028b094ca2874a099f91febc19ee7f32ce->leave($__internal_f2feb2d2be6424b67f636e0aa276bb028b094ca2874a099f91febc19ee7f32ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2bd78f0794e1e882637d8e547d0ceba59bf907bb0e0a0b51509af2b5e407154 = $this->env->getExtension("native_profiler");
        $__internal_e2bd78f0794e1e882637d8e547d0ceba59bf907bb0e0a0b51509af2b5e407154->enter($__internal_e2bd78f0794e1e882637d8e547d0ceba59bf907bb0e0a0b51509af2b5e407154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e2bd78f0794e1e882637d8e547d0ceba59bf907bb0e0a0b51509af2b5e407154->leave($__internal_e2bd78f0794e1e882637d8e547d0ceba59bf907bb0e0a0b51509af2b5e407154_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_badcc0222a4c1cd0a95d5e889f2091a21e48bfcb81c8993b375e8828a9fc5833 = $this->env->getExtension("native_profiler");
        $__internal_badcc0222a4c1cd0a95d5e889f2091a21e48bfcb81c8993b375e8828a9fc5833->enter($__internal_badcc0222a4c1cd0a95d5e889f2091a21e48bfcb81c8993b375e8828a9fc5833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        // line 9
        echo "\t<h1>Benoit est un petit pd!</h1>
\t
\t<hr>
\t";
        // line 12
        $this->displayBlock('ocplatform_body', $context, $blocks);
        
        $__internal_badcc0222a4c1cd0a95d5e889f2091a21e48bfcb81c8993b375e8828a9fc5833->leave($__internal_badcc0222a4c1cd0a95d5e889f2091a21e48bfcb81c8993b375e8828a9fc5833_prof);

    }

    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_17db9e5e0e704d4fd6f0805c45228d396f31b92ef8328adc5f62c3c23e77b0d0 = $this->env->getExtension("native_profiler");
        $__internal_17db9e5e0e704d4fd6f0805c45228d396f31b92ef8328adc5f62c3c23e77b0d0->enter($__internal_17db9e5e0e704d4fd6f0805c45228d396f31b92ef8328adc5f62c3c23e77b0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 13
        echo "\t";
        
        $__internal_17db9e5e0e704d4fd6f0805c45228d396f31b92ef8328adc5f62c3c23e77b0d0->leave($__internal_17db9e5e0e704d4fd6f0805c45228d396f31b92ef8328adc5f62c3c23e77b0d0_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Wood:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 13,  65 => 12,  60 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	{{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	{# On definit un sous-titre a toutes les pages du bundle par ex #}*/
/* 	<h1>Benoit est un petit pd!</h1>*/
/* 	*/
/* 	<hr>*/
/* 	{% block ocplatform_body %}*/
/* 	{% endblock %}*/
/* {% endblock %}*/
