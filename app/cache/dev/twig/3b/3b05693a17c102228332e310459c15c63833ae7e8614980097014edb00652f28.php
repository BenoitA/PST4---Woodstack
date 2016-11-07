<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cd75b47cec250eb6125154f162ba77fec713aec47c2eda323625b593339713f5 extends Twig_Template
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
        $__internal_8652c576b2064babfc7a2dc1da796eaec03ec13287193398af230f861e59f7d1 = $this->env->getExtension("native_profiler");
        $__internal_8652c576b2064babfc7a2dc1da796eaec03ec13287193398af230f861e59f7d1->enter($__internal_8652c576b2064babfc7a2dc1da796eaec03ec13287193398af230f861e59f7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8652c576b2064babfc7a2dc1da796eaec03ec13287193398af230f861e59f7d1->leave($__internal_8652c576b2064babfc7a2dc1da796eaec03ec13287193398af230f861e59f7d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6501b4e865dbe9a7c41cfd39c42d8f38e55b9239c7880a78f95aae5ebef5312b = $this->env->getExtension("native_profiler");
        $__internal_6501b4e865dbe9a7c41cfd39c42d8f38e55b9239c7880a78f95aae5ebef5312b->enter($__internal_6501b4e865dbe9a7c41cfd39c42d8f38e55b9239c7880a78f95aae5ebef5312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6501b4e865dbe9a7c41cfd39c42d8f38e55b9239c7880a78f95aae5ebef5312b->leave($__internal_6501b4e865dbe9a7c41cfd39c42d8f38e55b9239c7880a78f95aae5ebef5312b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a988f679157d4f6c86e4447dcd74f8779691751a89e6a1dce86b92729b76e129 = $this->env->getExtension("native_profiler");
        $__internal_a988f679157d4f6c86e4447dcd74f8779691751a89e6a1dce86b92729b76e129->enter($__internal_a988f679157d4f6c86e4447dcd74f8779691751a89e6a1dce86b92729b76e129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a988f679157d4f6c86e4447dcd74f8779691751a89e6a1dce86b92729b76e129->leave($__internal_a988f679157d4f6c86e4447dcd74f8779691751a89e6a1dce86b92729b76e129_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e2e29f8f4a66929e2faa9392362092eb7ba92acb6c8d75fd3df95af9570f004 = $this->env->getExtension("native_profiler");
        $__internal_2e2e29f8f4a66929e2faa9392362092eb7ba92acb6c8d75fd3df95af9570f004->enter($__internal_2e2e29f8f4a66929e2faa9392362092eb7ba92acb6c8d75fd3df95af9570f004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2e2e29f8f4a66929e2faa9392362092eb7ba92acb6c8d75fd3df95af9570f004->leave($__internal_2e2e29f8f4a66929e2faa9392362092eb7ba92acb6c8d75fd3df95af9570f004_prof);

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
