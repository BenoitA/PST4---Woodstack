<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9e00b8a3653b5e05c1a7e2cc091eb96edebb60929cfb021826e0507367044ab3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tWoodStack  
";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "<center>
\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\" style=\"width:200px\">
    \t
    \t\t
    \t\t<td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "</td>
                <td>Nom d'utilisateur :</td>
                <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "</td>
                <td>Email :</td>
                <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'errors');
        echo "</td>
                <td>Mot de passe :</td>
                <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'errors');
        echo "</td>
                <td>Confirmez le mot de passe :</td>
                <td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
 
 
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
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
        return array (  102 => 37,  95 => 33,  89 => 30,  84 => 28,  78 => 25,  73 => 23,  67 => 20,  62 => 18,  56 => 15,  51 => 13,  43 => 10,  40 => 9,  37 => 8,  32 => 4,  29 => 3,  11 => 1,);
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
