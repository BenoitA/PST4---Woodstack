<?php

/* ::base.html.twig */
class __TwigTemplate_2dcc8e6daad317cea15adecb0755a28687ebd504e2fe6e17bdf65de7ee94c22d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b4c8c4bdd82eb0ca6826b17f410fa0905b9734ccf617e38549142876b259b3b = $this->env->getExtension("native_profiler");
        $__internal_0b4c8c4bdd82eb0ca6826b17f410fa0905b9734ccf617e38549142876b259b3b->enter($__internal_0b4c8c4bdd82eb0ca6826b17f410fa0905b9734ccf617e38549142876b259b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0b4c8c4bdd82eb0ca6826b17f410fa0905b9734ccf617e38549142876b259b3b->leave($__internal_0b4c8c4bdd82eb0ca6826b17f410fa0905b9734ccf617e38549142876b259b3b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c16adf7d64454998be7a4a52656146445e52b7985786d1adaf430c6782cc63ea = $this->env->getExtension("native_profiler");
        $__internal_c16adf7d64454998be7a4a52656146445e52b7985786d1adaf430c6782cc63ea->enter($__internal_c16adf7d64454998be7a4a52656146445e52b7985786d1adaf430c6782cc63ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c16adf7d64454998be7a4a52656146445e52b7985786d1adaf430c6782cc63ea->leave($__internal_c16adf7d64454998be7a4a52656146445e52b7985786d1adaf430c6782cc63ea_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_463d1282d22b89c38128117c419e056293cbf5e79f9bf32e41b37f6f36a70044 = $this->env->getExtension("native_profiler");
        $__internal_463d1282d22b89c38128117c419e056293cbf5e79f9bf32e41b37f6f36a70044->enter($__internal_463d1282d22b89c38128117c419e056293cbf5e79f9bf32e41b37f6f36a70044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_463d1282d22b89c38128117c419e056293cbf5e79f9bf32e41b37f6f36a70044->leave($__internal_463d1282d22b89c38128117c419e056293cbf5e79f9bf32e41b37f6f36a70044_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cede0c09a522a52d573df69b5dd050315c8f7a4784aa9fd029f344d9026fa57a = $this->env->getExtension("native_profiler");
        $__internal_cede0c09a522a52d573df69b5dd050315c8f7a4784aa9fd029f344d9026fa57a->enter($__internal_cede0c09a522a52d573df69b5dd050315c8f7a4784aa9fd029f344d9026fa57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cede0c09a522a52d573df69b5dd050315c8f7a4784aa9fd029f344d9026fa57a->leave($__internal_cede0c09a522a52d573df69b5dd050315c8f7a4784aa9fd029f344d9026fa57a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8e8eb82688f7a168cea4880b3a2ed7af5e6c63ec8b1d7ddab25d2d96ae02be7 = $this->env->getExtension("native_profiler");
        $__internal_b8e8eb82688f7a168cea4880b3a2ed7af5e6c63ec8b1d7ddab25d2d96ae02be7->enter($__internal_b8e8eb82688f7a168cea4880b3a2ed7af5e6c63ec8b1d7ddab25d2d96ae02be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b8e8eb82688f7a168cea4880b3a2ed7af5e6c63ec8b1d7ddab25d2d96ae02be7->leave($__internal_b8e8eb82688f7a168cea4880b3a2ed7af5e6c63ec8b1d7ddab25d2d96ae02be7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
