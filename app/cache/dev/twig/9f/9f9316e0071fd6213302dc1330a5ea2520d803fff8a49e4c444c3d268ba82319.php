<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_40deebb5f6751f23f6a7201ed619a028d5335ba5833668bb9fa5bd9cbedbec24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_547e54db153575b1ff2f835478aa63399bfad7707ed257cf2411878b6382d200 = $this->env->getExtension("native_profiler");
        $__internal_547e54db153575b1ff2f835478aa63399bfad7707ed257cf2411878b6382d200->enter($__internal_547e54db153575b1ff2f835478aa63399bfad7707ed257cf2411878b6382d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_547e54db153575b1ff2f835478aa63399bfad7707ed257cf2411878b6382d200->leave($__internal_547e54db153575b1ff2f835478aa63399bfad7707ed257cf2411878b6382d200_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99c14a8dc6c64bee5b3107d8f5d2c75de9bded4c61a6af4ddc723ff511e24d79 = $this->env->getExtension("native_profiler");
        $__internal_99c14a8dc6c64bee5b3107d8f5d2c75de9bded4c61a6af4ddc723ff511e24d79->enter($__internal_99c14a8dc6c64bee5b3107d8f5d2c75de9bded4c61a6af4ddc723ff511e24d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_99c14a8dc6c64bee5b3107d8f5d2c75de9bded4c61a6af4ddc723ff511e24d79->leave($__internal_99c14a8dc6c64bee5b3107d8f5d2c75de9bded4c61a6af4ddc723ff511e24d79_prof);

    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d3041913fb3fc49096c1ddabad6be28014bee0ccd865bb4a118f07e1b204e98 = $this->env->getExtension("native_profiler");
        $__internal_2d3041913fb3fc49096c1ddabad6be28014bee0ccd865bb4a118f07e1b204e98->enter($__internal_2d3041913fb3fc49096c1ddabad6be28014bee0ccd865bb4a118f07e1b204e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 9
        echo "<div class=\"row\">
  <div class=\"col-md-6\"></div>
  <div class=\"col-md-6\">
\t<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    \t
    \t\t\t<td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</td>
                <td>Nom d'utilisateur :</td>
                <td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
\t\t\t\t<br/>
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
\t\t\t\t<br/>

\t\t\t\t<td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "</td>
                <td>Email :</td>
                <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</td>
\t\t\t\t<br/>
                
    \t\t<div>
\t\t\t\t";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    \t\t\t<br/>
\t\t\t\t <input class=\"btn btn-success btn-block\"type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    \t\t</div>
\t</form>
     </div>
  <div class=\"col-md-6\"></div>
</div>\t

\t";
        // line 40
        echo "\t\t
";
        
        $__internal_2d3041913fb3fc49096c1ddabad6be28014bee0ccd865bb4a118f07e1b204e98->leave($__internal_2d3041913fb3fc49096c1ddabad6be28014bee0ccd865bb4a118f07e1b204e98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  106 => 32,  101 => 30,  94 => 26,  89 => 24,  83 => 21,  78 => 19,  72 => 16,  67 => 14,  60 => 12,  55 => 9,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* <div class="row">*/
/*   <div class="col-md-6"></div>*/
/*   <div class="col-md-6">*/
/* 	<form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" class="fos_user_profile_edit">*/
/*     	*/
/*     			<td>{{ form_errors(form.username) }}</td>*/
/*                 <td>Nom d'utilisateur :</td>*/
/*                 <td>{{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}</td>*/
/* 				<br/>*/
/* 		*/
/*                 <td>{{ form_errors(form.email) }}</td>*/
/*                 <td>Email :</td>*/
/*                 <td>{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}</td>*/
/* 				<br/>*/
/* */
/* 				<td>{{ form_errors(form.current_password) }}</td>*/
/*                 <td>Email :</td>*/
/*                 <td>{{ form_widget(form.current_password, {'attr': {'class': 'form-control'}}) }}</td>*/
/* 				<br/>*/
/*                 */
/*     		<div>*/
/* 				{{ form_end(form) }}*/
/*     			<br/>*/
/* 				 <input class="btn btn-success btn-block"type="submit" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     		</div>*/
/* 	</form>*/
/*      </div>*/
/*   <div class="col-md-6"></div>*/
/* </div>	*/
/* */
/* 	{#{% include "FOSUserBundle:Profile:edit_content.html.twig" %}#}*/
/* 		*/
/* {% endblock fos_user_content %}*/
/* */
