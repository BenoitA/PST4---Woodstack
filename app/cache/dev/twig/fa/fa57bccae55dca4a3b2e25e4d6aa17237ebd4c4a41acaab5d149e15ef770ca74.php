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
        $__internal_7aff5c8a693d5fc97823bf109c25ab0678e6815c480a602f5072026b12e49883 = $this->env->getExtension("native_profiler");
        $__internal_7aff5c8a693d5fc97823bf109c25ab0678e6815c480a602f5072026b12e49883->enter($__internal_7aff5c8a693d5fc97823bf109c25ab0678e6815c480a602f5072026b12e49883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aff5c8a693d5fc97823bf109c25ab0678e6815c480a602f5072026b12e49883->leave($__internal_7aff5c8a693d5fc97823bf109c25ab0678e6815c480a602f5072026b12e49883_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6662ce006ed509c8251b1809e4208e338e444a4e043279fe20f158bf68211a74 = $this->env->getExtension("native_profiler");
        $__internal_6662ce006ed509c8251b1809e4208e338e444a4e043279fe20f158bf68211a74->enter($__internal_6662ce006ed509c8251b1809e4208e338e444a4e043279fe20f158bf68211a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6662ce006ed509c8251b1809e4208e338e444a4e043279fe20f158bf68211a74->leave($__internal_6662ce006ed509c8251b1809e4208e338e444a4e043279fe20f158bf68211a74_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0194444b80b8617a2aac28413d27e2ae88bc68c9daeb7e4aef1f066898dafc7b = $this->env->getExtension("native_profiler");
        $__internal_0194444b80b8617a2aac28413d27e2ae88bc68c9daeb7e4aef1f066898dafc7b->enter($__internal_0194444b80b8617a2aac28413d27e2ae88bc68c9daeb7e4aef1f066898dafc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0194444b80b8617a2aac28413d27e2ae88bc68c9daeb7e4aef1f066898dafc7b->leave($__internal_0194444b80b8617a2aac28413d27e2ae88bc68c9daeb7e4aef1f066898dafc7b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec1754f4444196d9a3e2395495bb7aa2d23e48488b104c65c59a6fd50d3b5a7d = $this->env->getExtension("native_profiler");
        $__internal_ec1754f4444196d9a3e2395495bb7aa2d23e48488b104c65c59a6fd50d3b5a7d->enter($__internal_ec1754f4444196d9a3e2395495bb7aa2d23e48488b104c65c59a6fd50d3b5a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ec1754f4444196d9a3e2395495bb7aa2d23e48488b104c65c59a6fd50d3b5a7d->leave($__internal_ec1754f4444196d9a3e2395495bb7aa2d23e48488b104c65c59a6fd50d3b5a7d_prof);

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
