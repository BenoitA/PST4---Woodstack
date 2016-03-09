<?php

/* WSWoodstackBundle:Client:client.html.twig */
class __TwigTemplate_878e27ac1ae6f957020250ae9e75ac8d0bc5c26e70cd115b65aa2437add3cb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "WSWoodstackBundle:Client:client.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WSWoodstackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d77e0b70aebab29150f02bd93164fa2368c0e2e58b9cc8b9031c216c56dfa741 = $this->env->getExtension("native_profiler");
        $__internal_d77e0b70aebab29150f02bd93164fa2368c0e2e58b9cc8b9031c216c56dfa741->enter($__internal_d77e0b70aebab29150f02bd93164fa2368c0e2e58b9cc8b9031c216c56dfa741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WSWoodstackBundle:Client:client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d77e0b70aebab29150f02bd93164fa2368c0e2e58b9cc8b9031c216c56dfa741->leave($__internal_d77e0b70aebab29150f02bd93164fa2368c0e2e58b9cc8b9031c216c56dfa741_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d40827f8e298f1691f126a59d0b8ada5c09a51a86d001e2aa08c868634d49bb6 = $this->env->getExtension("native_profiler");
        $__internal_d40827f8e298f1691f126a59d0b8ada5c09a51a86d001e2aa08c868634d49bb6->enter($__internal_d40827f8e298f1691f126a59d0b8ada5c09a51a86d001e2aa08c868634d49bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_d40827f8e298f1691f126a59d0b8ada5c09a51a86d001e2aa08c868634d49bb6->leave($__internal_d40827f8e298f1691f126a59d0b8ada5c09a51a86d001e2aa08c868634d49bb6_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e25e917e3e2910bdc6f89314b3f6e6f315ab7ac714e12c4ad134886556d67473 = $this->env->getExtension("native_profiler");
        $__internal_e25e917e3e2910bdc6f89314b3f6e6f315ab7ac714e12c4ad134886556d67473->enter($__internal_e25e917e3e2910bdc6f89314b3f6e6f315ab7ac714e12c4ad134886556d67473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        echo "
<p>Veuillez ajouter un nouveau client.</p>
<center>
\t<div class=\"well\">
\t\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t</div>
</center>

";
        
        $__internal_e25e917e3e2910bdc6f89314b3f6e6f315ab7ac714e12c4ad134886556d67473->leave($__internal_e25e917e3e2910bdc6f89314b3f6e6f315ab7ac714e12c4ad134886556d67473_prof);

    }

    public function getTemplateName()
    {
        return "WSWoodstackBundle:Client:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack  */
/* {% endblock %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* <p>Veuillez ajouter un nouveau client.</p>*/
/* <center>*/
/* 	<div class="well">*/
/* 		{{ form(form) }}*/
/* 	</div>*/
/* </center>*/
/* */
/* {% endblock fos_user_content %}	*/
