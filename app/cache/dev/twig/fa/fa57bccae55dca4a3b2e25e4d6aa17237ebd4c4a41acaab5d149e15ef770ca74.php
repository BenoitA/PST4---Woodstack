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
        $__internal_40ac17a30f228221041a952a01cc64f69358ee5a5fbd23d0b8234b9a5e474fc5 = $this->env->getExtension("native_profiler");
        $__internal_40ac17a30f228221041a952a01cc64f69358ee5a5fbd23d0b8234b9a5e474fc5->enter($__internal_40ac17a30f228221041a952a01cc64f69358ee5a5fbd23d0b8234b9a5e474fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40ac17a30f228221041a952a01cc64f69358ee5a5fbd23d0b8234b9a5e474fc5->leave($__internal_40ac17a30f228221041a952a01cc64f69358ee5a5fbd23d0b8234b9a5e474fc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_095f2ab4c8c2877917a05e3ee21326fd000334e2c56d0910e30277a147a05f53 = $this->env->getExtension("native_profiler");
        $__internal_095f2ab4c8c2877917a05e3ee21326fd000334e2c56d0910e30277a147a05f53->enter($__internal_095f2ab4c8c2877917a05e3ee21326fd000334e2c56d0910e30277a147a05f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_095f2ab4c8c2877917a05e3ee21326fd000334e2c56d0910e30277a147a05f53->leave($__internal_095f2ab4c8c2877917a05e3ee21326fd000334e2c56d0910e30277a147a05f53_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c31049b3a16ff59feccfd7da27d93a98ea0ef212279be510b0de9b2c9a8c8f7 = $this->env->getExtension("native_profiler");
        $__internal_1c31049b3a16ff59feccfd7da27d93a98ea0ef212279be510b0de9b2c9a8c8f7->enter($__internal_1c31049b3a16ff59feccfd7da27d93a98ea0ef212279be510b0de9b2c9a8c8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c31049b3a16ff59feccfd7da27d93a98ea0ef212279be510b0de9b2c9a8c8f7->leave($__internal_1c31049b3a16ff59feccfd7da27d93a98ea0ef212279be510b0de9b2c9a8c8f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76d06a78de740967ca52a5be47158c343d0214a812e553c1183735f23de9dcab = $this->env->getExtension("native_profiler");
        $__internal_76d06a78de740967ca52a5be47158c343d0214a812e553c1183735f23de9dcab->enter($__internal_76d06a78de740967ca52a5be47158c343d0214a812e553c1183735f23de9dcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_76d06a78de740967ca52a5be47158c343d0214a812e553c1183735f23de9dcab->leave($__internal_76d06a78de740967ca52a5be47158c343d0214a812e553c1183735f23de9dcab_prof);

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
