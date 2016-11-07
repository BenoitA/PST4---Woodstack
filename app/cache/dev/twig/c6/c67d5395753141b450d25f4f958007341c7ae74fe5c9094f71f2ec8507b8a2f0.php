<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e28db3dd3199b95eb446a3df0440f37d0cc3e9c76be4a6c044b804ff37396c78 extends Twig_Template
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
        $__internal_cb7f3a162950ba042792ce52c13d878bb92863c9891b5332db81a174f59d530f = $this->env->getExtension("native_profiler");
        $__internal_cb7f3a162950ba042792ce52c13d878bb92863c9891b5332db81a174f59d530f->enter($__internal_cb7f3a162950ba042792ce52c13d878bb92863c9891b5332db81a174f59d530f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb7f3a162950ba042792ce52c13d878bb92863c9891b5332db81a174f59d530f->leave($__internal_cb7f3a162950ba042792ce52c13d878bb92863c9891b5332db81a174f59d530f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5575893914f4f12404d52c742cbe1e04b1b98d6d3a3065015958fc7cbccb3277 = $this->env->getExtension("native_profiler");
        $__internal_5575893914f4f12404d52c742cbe1e04b1b98d6d3a3065015958fc7cbccb3277->enter($__internal_5575893914f4f12404d52c742cbe1e04b1b98d6d3a3065015958fc7cbccb3277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack  
";
        
        $__internal_5575893914f4f12404d52c742cbe1e04b1b98d6d3a3065015958fc7cbccb3277->leave($__internal_5575893914f4f12404d52c742cbe1e04b1b98d6d3a3065015958fc7cbccb3277_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3dc156d5e464988e4f6ee3f3bc3850f3aef19f1976eb79f618d9d9b0b01dec9 = $this->env->getExtension("native_profiler");
        $__internal_e3dc156d5e464988e4f6ee3f3bc3850f3aef19f1976eb79f618d9d9b0b01dec9->enter($__internal_e3dc156d5e464988e4f6ee3f3bc3850f3aef19f1976eb79f618d9d9b0b01dec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "<div class=\"row\">
  <div class=\"col-md-6\"></div>
  <div class=\"col-md-6\">
\t<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\" style=\"width:200px\">
    \t
    \t\t<td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</td>
                <td>Nom d'utilisateur :</td>
                <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</td>
                <td>Email :</td>
                <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "</td>
                <td>Mot de passe :</td>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
\t\t<br/>
\t\t
                <td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "</td>
                <td>Confirmez le mot de passe :</td>
                <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
 
                
                
    \t\t<div>
    \t\t\t<br/>
       \t\t\t <input class=\"btn btn-success btn-block\" type=\"submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    \t\t</div>
\t</form>
     </div>
  <div class=\"col-md-6\"></div>
</div>

";
        
        $__internal_e3dc156d5e464988e4f6ee3f3bc3850f3aef19f1976eb79f618d9d9b0b01dec9->leave($__internal_e3dc156d5e464988e4f6ee3f3bc3850f3aef19f1976eb79f618d9d9b0b01dec9_prof);

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
        return array (  114 => 37,  105 => 31,  100 => 29,  94 => 26,  89 => 24,  83 => 21,  78 => 19,  72 => 16,  67 => 14,  60 => 12,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
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
/* <div class="row">*/
/*   <div class="col-md-6"></div>*/
/*   <div class="col-md-6">*/
/* 	<form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register" style="width:200px">*/
/*     	*/
/*     		<td>{{ form_errors(form.username) }}</td>*/
/*                 <td>Nom d'utilisateur :</td>*/
/*                 <td>{{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}</td>*/
/* 		<br/>*/
/* 		*/
/*                 <td>{{ form_errors(form.email) }}</td>*/
/*                 <td>Email :</td>*/
/*                 <td>{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}</td>*/
/* 		<br/>*/
/* 		*/
/*                 <td>{{ form_errors(form.plainPassword.first) }}</td>*/
/*                 <td>Mot de passe :</td>*/
/*                 <td>{{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}</td>*/
/* 		<br/>*/
/* 		*/
/*                 <td>{{ form_errors(form.plainPassword.second) }}</td>*/
/*                 <td>Confirmez le mot de passe :</td>*/
/*                 <td>{{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}</td>*/
/*  */
/*                 */
/*                 */
/*     		<div>*/
/*     			<br/>*/
/*        			 <input class="btn btn-success btn-block" type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     		</div>*/
/* 	</form>*/
/*      </div>*/
/*   <div class="col-md-6"></div>*/
/* </div>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
