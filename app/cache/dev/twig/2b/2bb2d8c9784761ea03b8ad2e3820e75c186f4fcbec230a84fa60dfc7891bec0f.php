<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_c73e8d79e604dcf011451aedd1399c209342ab26e99dddd021beb426182cd739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_4a06ba7ef0b478579491eeab71c94500801fffa94b4fae91a122061620061144 = $this->env->getExtension("native_profiler");
        $__internal_4a06ba7ef0b478579491eeab71c94500801fffa94b4fae91a122061620061144->enter($__internal_4a06ba7ef0b478579491eeab71c94500801fffa94b4fae91a122061620061144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a06ba7ef0b478579491eeab71c94500801fffa94b4fae91a122061620061144->leave($__internal_4a06ba7ef0b478579491eeab71c94500801fffa94b4fae91a122061620061144_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bff05ca076603ebded18f503289e9a60917888cd63001801fce5578115ab94c8 = $this->env->getExtension("native_profiler");
        $__internal_bff05ca076603ebded18f503289e9a60917888cd63001801fce5578115ab94c8->enter($__internal_bff05ca076603ebded18f503289e9a60917888cd63001801fce5578115ab94c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_bff05ca076603ebded18f503289e9a60917888cd63001801fce5578115ab94c8->leave($__internal_bff05ca076603ebded18f503289e9a60917888cd63001801fce5578115ab94c8_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a86b15ded8b9472387786b11989e8751e78aa7b9a6a4ab8d0050043ad62af2f = $this->env->getExtension("native_profiler");
        $__internal_6a86b15ded8b9472387786b11989e8751e78aa7b9a6a4ab8d0050043ad62af2f->enter($__internal_6a86b15ded8b9472387786b11989e8751e78aa7b9a6a4ab8d0050043ad62af2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
<div class=\"row\">
  <div class=\"col-md-6\"></div>
  <div class=\"col-md-6\">
    <img src=\"/PST4-Woodstack/web/profil.png\" class=\"img-responsive\" style=\"width:20%\">
\t<div class=\"fos_user_user_show\">
    \t<p><strong>Nom d'utilisateur : </strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    \t<p><strong>Email : </strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t<a class=\"btn btn-success\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" role=\"button\">Modifier</a>
\t</div>
  </div>
  <div class=\"col-md-6\"></div>
</div>
\t\t";
        // line 29
        echo "
";
        
        $__internal_6a86b15ded8b9472387786b11989e8751e78aa7b9a6a4ab8d0050043ad62af2f->leave($__internal_6a86b15ded8b9472387786b11989e8751e78aa7b9a6a4ab8d0050043ad62af2f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  71 => 18,  67 => 17,  63 => 16,  55 => 10,  49 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "WSWoodstackBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* 	WoodStack */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block fos_user_content %}*/
/* */
/* <div class="row">*/
/*   <div class="col-md-6"></div>*/
/*   <div class="col-md-6">*/
/*     <img src="/PST4-Woodstack/web/profil.png" class="img-responsive" style="width:20%">*/
/* 	<div class="fos_user_user_show">*/
/*     	<p><strong>Nom d'utilisateur : </strong>{{ user.username }}</p>*/
/*     	<p><strong>Email : </strong>{{ user.email }}</p>*/
/* 		<a class="btn btn-success" href="{{ path('fos_user_profile_edit') }}" role="button">Modifier</a>*/
/* 	</div>*/
/*   </div>*/
/*   <div class="col-md-6"></div>*/
/* </div>*/
/* 		{#*/
/* 		*/
/* 		{% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* 		*/
/* 		*/
/* 		#}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
