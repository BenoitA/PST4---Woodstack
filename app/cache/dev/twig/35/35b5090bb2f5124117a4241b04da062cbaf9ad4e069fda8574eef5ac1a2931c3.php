<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_0e0fdfcf275ea51580d07741db4a174777670e1809f8d8cdd864817c7ca25156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
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
        $__internal_fb494f40ebd5da3ad3c19aca739bee961b6ddc5f4460510be9bc3aef78da86d0 = $this->env->getExtension("native_profiler");
        $__internal_fb494f40ebd5da3ad3c19aca739bee961b6ddc5f4460510be9bc3aef78da86d0->enter($__internal_fb494f40ebd5da3ad3c19aca739bee961b6ddc5f4460510be9bc3aef78da86d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb494f40ebd5da3ad3c19aca739bee961b6ddc5f4460510be9bc3aef78da86d0->leave($__internal_fb494f40ebd5da3ad3c19aca739bee961b6ddc5f4460510be9bc3aef78da86d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7614e20beaebff39d58e1b50e00e39bbe45773a9bd7b0bccdf2ab7d6d54e1232 = $this->env->getExtension("native_profiler");
        $__internal_7614e20beaebff39d58e1b50e00e39bbe45773a9bd7b0bccdf2ab7d6d54e1232->enter($__internal_7614e20beaebff39d58e1b50e00e39bbe45773a9bd7b0bccdf2ab7d6d54e1232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_7614e20beaebff39d58e1b50e00e39bbe45773a9bd7b0bccdf2ab7d6d54e1232->leave($__internal_7614e20beaebff39d58e1b50e00e39bbe45773a9bd7b0bccdf2ab7d6d54e1232_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_93dde0b58fc6c03297d156f0f8db81e69c7c43446f3c1571431dfcba0da8579d = $this->env->getExtension("native_profiler");
        $__internal_93dde0b58fc6c03297d156f0f8db81e69c7c43446f3c1571431dfcba0da8579d->enter($__internal_93dde0b58fc6c03297d156f0f8db81e69c7c43446f3c1571431dfcba0da8579d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_93dde0b58fc6c03297d156f0f8db81e69c7c43446f3c1571431dfcba0da8579d->leave($__internal_93dde0b58fc6c03297d156f0f8db81e69c7c43446f3c1571431dfcba0da8579d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_84592dc320de8a48a0b58b31ed5711939bc5c3a74f91eea57672c459004d08ae = $this->env->getExtension("native_profiler");
        $__internal_84592dc320de8a48a0b58b31ed5711939bc5c3a74f91eea57672c459004d08ae->enter($__internal_84592dc320de8a48a0b58b31ed5711939bc5c3a74f91eea57672c459004d08ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_84592dc320de8a48a0b58b31ed5711939bc5c3a74f91eea57672c459004d08ae->leave($__internal_84592dc320de8a48a0b58b31ed5711939bc5c3a74f91eea57672c459004d08ae_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_38f1cee35535e65a28171441b58716214d8ddeda78c0afd543a71249b4586532 = $this->env->getExtension("native_profiler");
        $__internal_38f1cee35535e65a28171441b58716214d8ddeda78c0afd543a71249b4586532->enter($__internal_38f1cee35535e65a28171441b58716214d8ddeda78c0afd543a71249b4586532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_38f1cee35535e65a28171441b58716214d8ddeda78c0afd543a71249b4586532->leave($__internal_38f1cee35535e65a28171441b58716214d8ddeda78c0afd543a71249b4586532_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
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
