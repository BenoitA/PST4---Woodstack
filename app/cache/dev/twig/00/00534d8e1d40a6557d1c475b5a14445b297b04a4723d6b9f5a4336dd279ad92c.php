<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ee5ad1e043bcd2619b39832da66d8532234eac095fe6836d30da959f27e6d821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bebb007fcdf7b66a4fa532599d28e597bb0bb826252ade02f632114c94968fb8 = $this->env->getExtension("native_profiler");
        $__internal_bebb007fcdf7b66a4fa532599d28e597bb0bb826252ade02f632114c94968fb8->enter($__internal_bebb007fcdf7b66a4fa532599d28e597bb0bb826252ade02f632114c94968fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bebb007fcdf7b66a4fa532599d28e597bb0bb826252ade02f632114c94968fb8->leave($__internal_bebb007fcdf7b66a4fa532599d28e597bb0bb826252ade02f632114c94968fb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
