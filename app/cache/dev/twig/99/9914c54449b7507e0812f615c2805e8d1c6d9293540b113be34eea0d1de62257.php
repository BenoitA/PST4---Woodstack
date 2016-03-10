<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_0bdc646f68914a2e571ccbe29b8128a1c7876cc863af18b1c4daa510c15930cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_875655d62d51f3fd54fc145321c0bcc8cad5f4bdbc48e21bc36d0a5404055e41 = $this->env->getExtension("native_profiler");
        $__internal_875655d62d51f3fd54fc145321c0bcc8cad5f4bdbc48e21bc36d0a5404055e41->enter($__internal_875655d62d51f3fd54fc145321c0bcc8cad5f4bdbc48e21bc36d0a5404055e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_875655d62d51f3fd54fc145321c0bcc8cad5f4bdbc48e21bc36d0a5404055e41->leave($__internal_875655d62d51f3fd54fc145321c0bcc8cad5f4bdbc48e21bc36d0a5404055e41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b263898be479fbbf554929f02cc03c1e1fdcab8960e0643abbe2f6a371e74610 = $this->env->getExtension("native_profiler");
        $__internal_b263898be479fbbf554929f02cc03c1e1fdcab8960e0643abbe2f6a371e74610->enter($__internal_b263898be479fbbf554929f02cc03c1e1fdcab8960e0643abbe2f6a371e74610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_b263898be479fbbf554929f02cc03c1e1fdcab8960e0643abbe2f6a371e74610->leave($__internal_b263898be479fbbf554929f02cc03c1e1fdcab8960e0643abbe2f6a371e74610_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
