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
        $__internal_6d0cbaca7e4daa1fd6b0eb68083c20d56c88d24e10e34afbdeeec6fef4bd8270 = $this->env->getExtension("native_profiler");
        $__internal_6d0cbaca7e4daa1fd6b0eb68083c20d56c88d24e10e34afbdeeec6fef4bd8270->enter($__internal_6d0cbaca7e4daa1fd6b0eb68083c20d56c88d24e10e34afbdeeec6fef4bd8270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d0cbaca7e4daa1fd6b0eb68083c20d56c88d24e10e34afbdeeec6fef4bd8270->leave($__internal_6d0cbaca7e4daa1fd6b0eb68083c20d56c88d24e10e34afbdeeec6fef4bd8270_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7201b6e595cb80bbb038dc0a094396b9364eec88022310bafea760ec1a964d5c = $this->env->getExtension("native_profiler");
        $__internal_7201b6e595cb80bbb038dc0a094396b9364eec88022310bafea760ec1a964d5c->enter($__internal_7201b6e595cb80bbb038dc0a094396b9364eec88022310bafea760ec1a964d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7201b6e595cb80bbb038dc0a094396b9364eec88022310bafea760ec1a964d5c->leave($__internal_7201b6e595cb80bbb038dc0a094396b9364eec88022310bafea760ec1a964d5c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5e5ee9f93cb4af7f4d91791e66be42d50a28b88d9729b9fcb1df16148279e94 = $this->env->getExtension("native_profiler");
        $__internal_b5e5ee9f93cb4af7f4d91791e66be42d50a28b88d9729b9fcb1df16148279e94->enter($__internal_b5e5ee9f93cb4af7f4d91791e66be42d50a28b88d9729b9fcb1df16148279e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5e5ee9f93cb4af7f4d91791e66be42d50a28b88d9729b9fcb1df16148279e94->leave($__internal_b5e5ee9f93cb4af7f4d91791e66be42d50a28b88d9729b9fcb1df16148279e94_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dad0c5827aae01f65b47e516aef1639674c8a53d1cdcb781fa9c1b6fae6d3ab4 = $this->env->getExtension("native_profiler");
        $__internal_dad0c5827aae01f65b47e516aef1639674c8a53d1cdcb781fa9c1b6fae6d3ab4->enter($__internal_dad0c5827aae01f65b47e516aef1639674c8a53d1cdcb781fa9c1b6fae6d3ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_dad0c5827aae01f65b47e516aef1639674c8a53d1cdcb781fa9c1b6fae6d3ab4->leave($__internal_dad0c5827aae01f65b47e516aef1639674c8a53d1cdcb781fa9c1b6fae6d3ab4_prof);

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
