<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_0e0fdfcf275ea51580d07741db4a174777670e1809f8d8cdd864817c7ca25156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7df254428cba863e374186ffc022f5909179e51215598575f659c5fd7a4e27da = $this->env->getExtension("native_profiler");
        $__internal_7df254428cba863e374186ffc022f5909179e51215598575f659c5fd7a4e27da->enter($__internal_7df254428cba863e374186ffc022f5909179e51215598575f659c5fd7a4e27da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df254428cba863e374186ffc022f5909179e51215598575f659c5fd7a4e27da->leave($__internal_7df254428cba863e374186ffc022f5909179e51215598575f659c5fd7a4e27da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2e00e496c5bee874c89c567b0a9913e74d5e507ea5bc611f3dfe465ae59f7b1a = $this->env->getExtension("native_profiler");
        $__internal_2e00e496c5bee874c89c567b0a9913e74d5e507ea5bc611f3dfe465ae59f7b1a->enter($__internal_2e00e496c5bee874c89c567b0a9913e74d5e507ea5bc611f3dfe465ae59f7b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2e00e496c5bee874c89c567b0a9913e74d5e507ea5bc611f3dfe465ae59f7b1a->leave($__internal_2e00e496c5bee874c89c567b0a9913e74d5e507ea5bc611f3dfe465ae59f7b1a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3be682936c2ec788eab5ee29872e7d74ee3fac2936e5d8fb4750816dab8dcc1 = $this->env->getExtension("native_profiler");
        $__internal_e3be682936c2ec788eab5ee29872e7d74ee3fac2936e5d8fb4750816dab8dcc1->enter($__internal_e3be682936c2ec788eab5ee29872e7d74ee3fac2936e5d8fb4750816dab8dcc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_e3be682936c2ec788eab5ee29872e7d74ee3fac2936e5d8fb4750816dab8dcc1->leave($__internal_e3be682936c2ec788eab5ee29872e7d74ee3fac2936e5d8fb4750816dab8dcc1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d7893e5114d12fe57b1728cec7f769d4955b46885eb5ab3f75491973d6bd6de = $this->env->getExtension("native_profiler");
        $__internal_9d7893e5114d12fe57b1728cec7f769d4955b46885eb5ab3f75491973d6bd6de->enter($__internal_9d7893e5114d12fe57b1728cec7f769d4955b46885eb5ab3f75491973d6bd6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_9d7893e5114d12fe57b1728cec7f769d4955b46885eb5ab3f75491973d6bd6de->leave($__internal_9d7893e5114d12fe57b1728cec7f769d4955b46885eb5ab3f75491973d6bd6de_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_26c5c7414ca86d9ad41b49efe3d14bb5513d3e2f1652a46e5958789f429fe2a5 = $this->env->getExtension("native_profiler");
        $__internal_26c5c7414ca86d9ad41b49efe3d14bb5513d3e2f1652a46e5958789f429fe2a5->enter($__internal_26c5c7414ca86d9ad41b49efe3d14bb5513d3e2f1652a46e5958789f429fe2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_26c5c7414ca86d9ad41b49efe3d14bb5513d3e2f1652a46e5958789f429fe2a5->leave($__internal_26c5c7414ca86d9ad41b49efe3d14bb5513d3e2f1652a46e5958789f429fe2a5_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
