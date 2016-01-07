<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cd9b249abd5393da3131f86ec409d3a42b0f46ad2abff9033d90169097f58dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c51929c10512f12b31a789106f0ebe339621580c3e57a379c285fa3a9af286b8 = $this->env->getExtension("native_profiler");
        $__internal_c51929c10512f12b31a789106f0ebe339621580c3e57a379c285fa3a9af286b8->enter($__internal_c51929c10512f12b31a789106f0ebe339621580c3e57a379c285fa3a9af286b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c51929c10512f12b31a789106f0ebe339621580c3e57a379c285fa3a9af286b8->leave($__internal_c51929c10512f12b31a789106f0ebe339621580c3e57a379c285fa3a9af286b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88f578ea624ac936ad16886e93917162ce17cc1c2b2831aeaedc26f45ed2fafa = $this->env->getExtension("native_profiler");
        $__internal_88f578ea624ac936ad16886e93917162ce17cc1c2b2831aeaedc26f45ed2fafa->enter($__internal_88f578ea624ac936ad16886e93917162ce17cc1c2b2831aeaedc26f45ed2fafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_88f578ea624ac936ad16886e93917162ce17cc1c2b2831aeaedc26f45ed2fafa->leave($__internal_88f578ea624ac936ad16886e93917162ce17cc1c2b2831aeaedc26f45ed2fafa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_df50cc1cf3d7eace3ffcabed01f9bfef2d73cc0268949fee74aab846a0cd113c = $this->env->getExtension("native_profiler");
        $__internal_df50cc1cf3d7eace3ffcabed01f9bfef2d73cc0268949fee74aab846a0cd113c->enter($__internal_df50cc1cf3d7eace3ffcabed01f9bfef2d73cc0268949fee74aab846a0cd113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_df50cc1cf3d7eace3ffcabed01f9bfef2d73cc0268949fee74aab846a0cd113c->leave($__internal_df50cc1cf3d7eace3ffcabed01f9bfef2d73cc0268949fee74aab846a0cd113c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_202c7ee22e3bb344a18e09eb26b8e17705e19e5a3fedc993cb13d33f0fc0ba0c = $this->env->getExtension("native_profiler");
        $__internal_202c7ee22e3bb344a18e09eb26b8e17705e19e5a3fedc993cb13d33f0fc0ba0c->enter($__internal_202c7ee22e3bb344a18e09eb26b8e17705e19e5a3fedc993cb13d33f0fc0ba0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_202c7ee22e3bb344a18e09eb26b8e17705e19e5a3fedc993cb13d33f0fc0ba0c->leave($__internal_202c7ee22e3bb344a18e09eb26b8e17705e19e5a3fedc993cb13d33f0fc0ba0c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
