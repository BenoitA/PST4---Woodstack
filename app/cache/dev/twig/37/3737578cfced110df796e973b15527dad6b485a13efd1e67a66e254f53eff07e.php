<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_863e1550917bbd12c3f6daf37c24b3a39701b1c9ef22f1e083ab845f250f4f88 extends Twig_Template
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
        $__internal_18364b424ab987fd4ca1cf5c90d9033452f4ee4a1f0217d57352b4c04c522b4d = $this->env->getExtension("native_profiler");
        $__internal_18364b424ab987fd4ca1cf5c90d9033452f4ee4a1f0217d57352b4c04c522b4d->enter($__internal_18364b424ab987fd4ca1cf5c90d9033452f4ee4a1f0217d57352b4c04c522b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18364b424ab987fd4ca1cf5c90d9033452f4ee4a1f0217d57352b4c04c522b4d->leave($__internal_18364b424ab987fd4ca1cf5c90d9033452f4ee4a1f0217d57352b4c04c522b4d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53558746aa454a3896bbf112ad377a3221e2c5514112014f7719fd1a7282ce25 = $this->env->getExtension("native_profiler");
        $__internal_53558746aa454a3896bbf112ad377a3221e2c5514112014f7719fd1a7282ce25->enter($__internal_53558746aa454a3896bbf112ad377a3221e2c5514112014f7719fd1a7282ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tWoodStack 
";
        
        $__internal_53558746aa454a3896bbf112ad377a3221e2c5514112014f7719fd1a7282ce25->leave($__internal_53558746aa454a3896bbf112ad377a3221e2c5514112014f7719fd1a7282ce25_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1285c8224ffb2febf1ceb26f4f0effed6ad518d88f106d4b3b47807ea9cc4d5b = $this->env->getExtension("native_profiler");
        $__internal_1285c8224ffb2febf1ceb26f4f0effed6ad518d88f106d4b3b47807ea9cc4d5b->enter($__internal_1285c8224ffb2febf1ceb26f4f0effed6ad518d88f106d4b3b47807ea9cc4d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
<center>
<form class=\"form-signin\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"width:200px\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
        
        $__internal_1285c8224ffb2febf1ceb26f4f0effed6ad518d88f106d4b3b47807ea9cc4d5b->leave($__internal_1285c8224ffb2febf1ceb26f4f0effed6ad518d88f106d4b3b47807ea9cc4d5b_prof);

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
        return array (  99 => 30,  93 => 27,  85 => 22,  79 => 19,  74 => 17,  70 => 16,  66 => 14,  60 => 12,  58 => 11,  55 => 10,  49 => 9,  41 => 4,  35 => 3,  11 => 1,);
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
