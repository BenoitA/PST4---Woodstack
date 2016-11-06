<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ad212c75d009e3795b749b169ba6bff1642d1ee41240e7f743612789c3ff1959 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WSWoodstackBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e51f3e2795fd2d488cba5252b5371a70746c9e7a17bf97b25d246680631e97ed = $this->env->getExtension("native_profiler");
        $__internal_e51f3e2795fd2d488cba5252b5371a70746c9e7a17bf97b25d246680631e97ed->enter($__internal_e51f3e2795fd2d488cba5252b5371a70746c9e7a17bf97b25d246680631e97ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51f3e2795fd2d488cba5252b5371a70746c9e7a17bf97b25d246680631e97ed->leave($__internal_e51f3e2795fd2d488cba5252b5371a70746c9e7a17bf97b25d246680631e97ed_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_368d7c5612e5c2e9011adcef5adb13c73716a0a5b4d6baa637d00315b2d30b5d = $this->env->getExtension("native_profiler");
        $__internal_368d7c5612e5c2e9011adcef5adb13c73716a0a5b4d6baa637d00315b2d30b5d->enter($__internal_368d7c5612e5c2e9011adcef5adb13c73716a0a5b4d6baa637d00315b2d30b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_368d7c5612e5c2e9011adcef5adb13c73716a0a5b4d6baa637d00315b2d30b5d->leave($__internal_368d7c5612e5c2e9011adcef5adb13c73716a0a5b4d6baa637d00315b2d30b5d_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_131e7c0d1b731a2b120c0b195373415b36943844d82268ae606caed5f1fd775d = $this->env->getExtension("native_profiler");
        $__internal_131e7c0d1b731a2b120c0b195373415b36943844d82268ae606caed5f1fd775d->enter($__internal_131e7c0d1b731a2b120c0b195373415b36943844d82268ae606caed5f1fd775d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "
";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "
<div class=\"row\">
  <div class=\"col-md-6\"></div>
  <div class=\"col-md-6\">
\t\t<form class=\"form-signin\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"width:200px\">
    \t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    
\t\t\t\t<label class=\"sr-only\" for=\"username\" >";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"Login\" required=\"required\" onclick=\"this.value='';\"  />
\t\t\t\t<br/>
\t\t\t\t<label class=\"sr-only\" for=\"password\" >";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" value=\"Mot de passe\" required=\"required\" onclick=\"this.value='';\"  />\t
\t\t\t\t
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t\t\t<label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t</div>
\t\t
\t\t\t<input class=\"btn btn-success btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t
\t\t</form>
  </div>
  <div class=\"col-md-6\"></div>
</div>


";
        
        $__internal_131e7c0d1b731a2b120c0b195373415b36943844d82268ae606caed5f1fd775d->leave($__internal_131e7c0d1b731a2b120c0b195373415b36943844d82268ae606caed5f1fd775d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  95 => 29,  87 => 24,  81 => 21,  76 => 19,  72 => 18,  66 => 14,  60 => 12,  58 => 11,  55 => 10,  49 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/* <div class="row">*/
/*   <div class="col-md-6"></div>*/
/*   <div class="col-md-6">*/
/* 		<form class="form-signin" action="{{ path("fos_user_security_check") }}" method="post" style="width:200px">*/
/*     		<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     */
/* 				<label class="sr-only" for="username" >{{ 'security.login.username'|trans({}, 'FOSUserBundle') }} </label>*/
/* 				<input type="text" class="form-control" id="username" name="_username" value="Login" required="required" onclick="this.value='';"  />*/
/* 				<br/>*/
/* 				<label class="sr-only" for="password" >{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/* 				<input type="password" class="form-control" id="password" name="_password" value="Mot de passe" required="required" onclick="this.value='';"  />	*/
/* 				*/
/* 				<div class="checkbox">*/
/* 					<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 					<label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* 				</div>*/
/* 		*/
/* 			<input class="btn btn-success btn-block" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 	*/
/* 		</form>*/
/*   </div>*/
/*   <div class="col-md-6"></div>*/
/* </div>*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
