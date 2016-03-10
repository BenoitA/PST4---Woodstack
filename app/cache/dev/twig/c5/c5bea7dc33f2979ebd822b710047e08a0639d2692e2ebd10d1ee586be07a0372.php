<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_3cdf1d05ac74bcbcb9cf2ea3a80aa4209cc39bd131b64547cb8e0eda2da7172e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_575c41fbcc44d628b75c9f1826033a0929dbad5433af87d4198361478c739339 = $this->env->getExtension("native_profiler");
        $__internal_575c41fbcc44d628b75c9f1826033a0929dbad5433af87d4198361478c739339->enter($__internal_575c41fbcc44d628b75c9f1826033a0929dbad5433af87d4198361478c739339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_575c41fbcc44d628b75c9f1826033a0929dbad5433af87d4198361478c739339->leave($__internal_575c41fbcc44d628b75c9f1826033a0929dbad5433af87d4198361478c739339_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23ae8c6ccc8cc740799300e0a3a95f487cba7d32839d920ef79b7130c98dbb52 = $this->env->getExtension("native_profiler");
        $__internal_23ae8c6ccc8cc740799300e0a3a95f487cba7d32839d920ef79b7130c98dbb52->enter($__internal_23ae8c6ccc8cc740799300e0a3a95f487cba7d32839d920ef79b7130c98dbb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_23ae8c6ccc8cc740799300e0a3a95f487cba7d32839d920ef79b7130c98dbb52->leave($__internal_23ae8c6ccc8cc740799300e0a3a95f487cba7d32839d920ef79b7130c98dbb52_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_978d07877bbbf4d11bf5787c30f9ec9afea5726d1e1de21f13d4754a47203a63 = $this->env->getExtension("native_profiler");
        $__internal_978d07877bbbf4d11bf5787c30f9ec9afea5726d1e1de21f13d4754a47203a63->enter($__internal_978d07877bbbf4d11bf5787c30f9ec9afea5726d1e1de21f13d4754a47203a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "<center>
\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\" style=\"width:200px\">
    \t
    \t\t
    \t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</td>
                <td>Nom d'utilisateur :</td>
                <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</td>
                <td>Email :</td>
                <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "</td>
                <td>Mot de passe :</td>
                <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "</td>
                <td>Confirmez le mot de passe :</td>
                <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
 
 
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                
    \t\t<div>
    \t\t\t<br/>
       \t\t\t <input class=\"btn btn-success btn-block\" type=\"submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    \t\t</div>
\t</form>
</center>

";
        
        $__internal_978d07877bbbf4d11bf5787c30f9ec9afea5726d1e1de21f13d4754a47203a63->leave($__internal_978d07877bbbf4d11bf5787c30f9ec9afea5726d1e1de21f13d4754a47203a63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  110 => 33,  104 => 30,  99 => 28,  93 => 25,  88 => 23,  82 => 20,  77 => 18,  71 => 15,  66 => 13,  58 => 10,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack  */
/* {% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* <center>*/
/* 	<form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register" style="width:200px">*/
/*     	*/
/*     		*/
/*     		<td>{{ form_errors(form.username) }}</td>*/
/*                 <td>Nom d'utilisateur :</td>*/
/*                 <td>{{ form_widget(form.username) }}</td>*/
/* 		<br/>*/
/* 		*/
/*                 <td>{{ form_errors(form.email) }}</td>*/
/*                 <td>Email :</td>*/
/*                 <td>{{ form_widget(form.email) }}</td>*/
/* 		<br/>*/
/* 		*/
/*                 <td>{{ form_errors(form.plainPassword.first) }}</td>*/
/*                 <td>Mot de passe :</td>*/
/*                 <td>{{ form_widget(form.plainPassword.first) }}</td>*/
/* 		<br/>*/
/* 		*/
/*                 <td>{{ form_errors(form.plainPassword.second) }}</td>*/
/*                 <td>Confirmez le mot de passe :</td>*/
/*                 <td>{{ form_widget(form.plainPassword.second) }}</td>*/
/*  */
/*  */
/*                 {{ form_rest(form) }}*/
/*                 */
/*     		<div>*/
/*     			<br/>*/
/*        			 <input class="btn btn-success btn-block" type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     		</div>*/
/* 	</form>*/
/* </center>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
