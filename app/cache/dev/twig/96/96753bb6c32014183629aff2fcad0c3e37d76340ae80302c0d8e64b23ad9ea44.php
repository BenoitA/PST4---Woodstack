<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f95042c3dfc443fcd3fa07afe66e2a9b5f1905175970a213285b274ec4f3d196 extends Twig_Template
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
        $__internal_856054f53305b5ae6d270732f053b38b93ede73095c9e5ec91bcc19210589900 = $this->env->getExtension("native_profiler");
        $__internal_856054f53305b5ae6d270732f053b38b93ede73095c9e5ec91bcc19210589900->enter($__internal_856054f53305b5ae6d270732f053b38b93ede73095c9e5ec91bcc19210589900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_856054f53305b5ae6d270732f053b38b93ede73095c9e5ec91bcc19210589900->leave($__internal_856054f53305b5ae6d270732f053b38b93ede73095c9e5ec91bcc19210589900_prof);

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
