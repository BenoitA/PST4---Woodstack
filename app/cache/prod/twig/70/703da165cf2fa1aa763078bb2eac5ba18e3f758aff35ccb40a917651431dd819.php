<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_377aad8364a3d73de8f5095d837fd11e536f2b2e6be6ba0d118e2add1098254c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tWoodStack 
";
    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 12
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 14
        echo "
<center>
<form class=\"form-signin\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"width:200px\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
    
\t\t<label class=\"sr-only\" for=\"username\" >";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo " </label>
\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"Login\" required=\"required\" onclick=\"this.value='';\"  />
\t\t<br/>
\t\t<label class=\"sr-only\" for=\"password\" >";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t<input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" value=\"Mot de passe\" required=\"required\" onclick=\"this.value='';\"  />\t
\t\t\t\t
\t\t<div class=\"checkbox\">
\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t\t<label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t</div>
\t\t
\t<input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t
</form>
</center>


";
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
        return array (  84 => 30,  78 => 27,  70 => 22,  64 => 19,  59 => 17,  55 => 16,  51 => 14,  45 => 12,  43 => 11,  40 => 10,  37 => 9,  32 => 4,  29 => 3,  11 => 1,);
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
/* <center>*/
/* <form class="form-signin" action="{{ path("fos_user_security_check") }}" method="post" style="width:200px">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     */
/* 		<label class="sr-only" for="username" >{{ 'security.login.username'|trans({}, 'FOSUserBundle') }} </label>*/
/* 		<input type="text" class="form-control" id="username" name="_username" value="Login" required="required" onclick="this.value='';"  />*/
/* 		<br/>*/
/* 		<label class="sr-only" for="password" >{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/* 		<input type="password" class="form-control" id="password" name="_password" value="Mot de passe" required="required" onclick="this.value='';"  />	*/
/* 				*/
/* 		<div class="checkbox">*/
/* 			<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/* 			<label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* 		</div>*/
/* 		*/
/* 	<input class="btn btn-primary btn-block" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 	*/
/* </form>*/
/* </center>*/
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
