<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9d70a145bcd744b733352c66beaa623adceed9f9e0faa6bf17c69f69a1ba003 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a51f0b66680fc7d2519cb2f59121dcf2aff8ce7335723a4cde973558abc44b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51f0b66680fc7d2519cb2f59121dcf2aff8ce7335723a4cde973558abc44b32->enter($__internal_a51f0b66680fc7d2519cb2f59121dcf2aff8ce7335723a4cde973558abc44b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c3d43c9302153216c74c25bf5e1e8c174aa8fe491b50c59a541e21cef89aaa6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d43c9302153216c74c25bf5e1e8c174aa8fe491b50c59a541e21cef89aaa6e->enter($__internal_c3d43c9302153216c74c25bf5e1e8c174aa8fe491b50c59a541e21cef89aaa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_a51f0b66680fc7d2519cb2f59121dcf2aff8ce7335723a4cde973558abc44b32->leave($__internal_a51f0b66680fc7d2519cb2f59121dcf2aff8ce7335723a4cde973558abc44b32_prof);

        
        $__internal_c3d43c9302153216c74c25bf5e1e8c174aa8fe491b50c59a541e21cef89aaa6e->leave($__internal_c3d43c9302153216c74c25bf5e1e8c174aa8fe491b50c59a541e21cef89aaa6e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_38e04a482c8ed1c40342cb18514ecf54c6920a9d96dd5d723d24e5a997163210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e04a482c8ed1c40342cb18514ecf54c6920a9d96dd5d723d24e5a997163210->enter($__internal_38e04a482c8ed1c40342cb18514ecf54c6920a9d96dd5d723d24e5a997163210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60d8337fb738776aeeaa02bfd94e3b5c2317421d465cd2a7827df700c68bc565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d8337fb738776aeeaa02bfd94e3b5c2317421d465cd2a7827df700c68bc565->enter($__internal_60d8337fb738776aeeaa02bfd94e3b5c2317421d465cd2a7827df700c68bc565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_60d8337fb738776aeeaa02bfd94e3b5c2317421d465cd2a7827df700c68bc565->leave($__internal_60d8337fb738776aeeaa02bfd94e3b5c2317421d465cd2a7827df700c68bc565_prof);

        
        $__internal_38e04a482c8ed1c40342cb18514ecf54c6920a9d96dd5d723d24e5a997163210->leave($__internal_38e04a482c8ed1c40342cb18514ecf54c6920a9d96dd5d723d24e5a997163210_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e00f92ea301f06d2e34d0edefdca836fa7e904f38d8c724af3ed4c79db7db14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00f92ea301f06d2e34d0edefdca836fa7e904f38d8c724af3ed4c79db7db14f->enter($__internal_e00f92ea301f06d2e34d0edefdca836fa7e904f38d8c724af3ed4c79db7db14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_663f7d7e7bccee911b8ff8d936cabea813b9246c440eedb9c918986e9589babf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663f7d7e7bccee911b8ff8d936cabea813b9246c440eedb9c918986e9589babf->enter($__internal_663f7d7e7bccee911b8ff8d936cabea813b9246c440eedb9c918986e9589babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_663f7d7e7bccee911b8ff8d936cabea813b9246c440eedb9c918986e9589babf->leave($__internal_663f7d7e7bccee911b8ff8d936cabea813b9246c440eedb9c918986e9589babf_prof);

        
        $__internal_e00f92ea301f06d2e34d0edefdca836fa7e904f38d8c724af3ed4c79db7db14f->leave($__internal_e00f92ea301f06d2e34d0edefdca836fa7e904f38d8c724af3ed4c79db7db14f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_43545d6efa5c25cc56dea54b29af246bbb86bf9b964f6b47741e51c46ed92ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43545d6efa5c25cc56dea54b29af246bbb86bf9b964f6b47741e51c46ed92ea5->enter($__internal_43545d6efa5c25cc56dea54b29af246bbb86bf9b964f6b47741e51c46ed92ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1de41ac8b215536b32ada3f207d45840a05cc458cdbe793e3978a199cb528e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de41ac8b215536b32ada3f207d45840a05cc458cdbe793e3978a199cb528e5c->enter($__internal_1de41ac8b215536b32ada3f207d45840a05cc458cdbe793e3978a199cb528e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1de41ac8b215536b32ada3f207d45840a05cc458cdbe793e3978a199cb528e5c->leave($__internal_1de41ac8b215536b32ada3f207d45840a05cc458cdbe793e3978a199cb528e5c_prof);

        
        $__internal_43545d6efa5c25cc56dea54b29af246bbb86bf9b964f6b47741e51c46ed92ea5->leave($__internal_43545d6efa5c25cc56dea54b29af246bbb86bf9b964f6b47741e51c46ed92ea5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
