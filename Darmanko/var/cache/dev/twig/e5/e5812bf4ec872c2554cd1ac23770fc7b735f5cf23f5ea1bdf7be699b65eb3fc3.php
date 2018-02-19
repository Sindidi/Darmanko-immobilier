<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
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
        $__internal_b562eaff99e5c93c804a027e53d22cb51c49a139dcf60797ab608688d732c130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b562eaff99e5c93c804a027e53d22cb51c49a139dcf60797ab608688d732c130->enter($__internal_b562eaff99e5c93c804a027e53d22cb51c49a139dcf60797ab608688d732c130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_90d38ad7e387a8836184ff46efe4a126252da295d64e3f2320fc2fb0af6d57a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d38ad7e387a8836184ff46efe4a126252da295d64e3f2320fc2fb0af6d57a9->enter($__internal_90d38ad7e387a8836184ff46efe4a126252da295d64e3f2320fc2fb0af6d57a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b562eaff99e5c93c804a027e53d22cb51c49a139dcf60797ab608688d732c130->leave($__internal_b562eaff99e5c93c804a027e53d22cb51c49a139dcf60797ab608688d732c130_prof);

        
        $__internal_90d38ad7e387a8836184ff46efe4a126252da295d64e3f2320fc2fb0af6d57a9->leave($__internal_90d38ad7e387a8836184ff46efe4a126252da295d64e3f2320fc2fb0af6d57a9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_318c0994a8fa1eb0021de562c0834c41852b9258eacbb47b1fa4dd1e11d52a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318c0994a8fa1eb0021de562c0834c41852b9258eacbb47b1fa4dd1e11d52a5b->enter($__internal_318c0994a8fa1eb0021de562c0834c41852b9258eacbb47b1fa4dd1e11d52a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f750f8b35ec660d7b0fcc7e1ef2f5b8134d26856e2803d30679a8248898db718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f750f8b35ec660d7b0fcc7e1ef2f5b8134d26856e2803d30679a8248898db718->enter($__internal_f750f8b35ec660d7b0fcc7e1ef2f5b8134d26856e2803d30679a8248898db718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f750f8b35ec660d7b0fcc7e1ef2f5b8134d26856e2803d30679a8248898db718->leave($__internal_f750f8b35ec660d7b0fcc7e1ef2f5b8134d26856e2803d30679a8248898db718_prof);

        
        $__internal_318c0994a8fa1eb0021de562c0834c41852b9258eacbb47b1fa4dd1e11d52a5b->leave($__internal_318c0994a8fa1eb0021de562c0834c41852b9258eacbb47b1fa4dd1e11d52a5b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2fe5098237d8d746822cb597d77e15e4b40b16fb396597b8966195b076de4c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe5098237d8d746822cb597d77e15e4b40b16fb396597b8966195b076de4c0b->enter($__internal_2fe5098237d8d746822cb597d77e15e4b40b16fb396597b8966195b076de4c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9f5eb3e4e89ab1a407779ee56d65939275876491d95144e45369d32c0ea0f14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5eb3e4e89ab1a407779ee56d65939275876491d95144e45369d32c0ea0f14c->enter($__internal_9f5eb3e4e89ab1a407779ee56d65939275876491d95144e45369d32c0ea0f14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9f5eb3e4e89ab1a407779ee56d65939275876491d95144e45369d32c0ea0f14c->leave($__internal_9f5eb3e4e89ab1a407779ee56d65939275876491d95144e45369d32c0ea0f14c_prof);

        
        $__internal_2fe5098237d8d746822cb597d77e15e4b40b16fb396597b8966195b076de4c0b->leave($__internal_2fe5098237d8d746822cb597d77e15e4b40b16fb396597b8966195b076de4c0b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_539a194f1d84d7434a64698f22d52f0b0e7beccc2345da5ed02825a6fe9aa5a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539a194f1d84d7434a64698f22d52f0b0e7beccc2345da5ed02825a6fe9aa5a9->enter($__internal_539a194f1d84d7434a64698f22d52f0b0e7beccc2345da5ed02825a6fe9aa5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5455647e390607bcbe2ee24580a046a3589e84755ca4321ff56fc5c79b3ae2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5455647e390607bcbe2ee24580a046a3589e84755ca4321ff56fc5c79b3ae2d->enter($__internal_f5455647e390607bcbe2ee24580a046a3589e84755ca4321ff56fc5c79b3ae2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f5455647e390607bcbe2ee24580a046a3589e84755ca4321ff56fc5c79b3ae2d->leave($__internal_f5455647e390607bcbe2ee24580a046a3589e84755ca4321ff56fc5c79b3ae2d_prof);

        
        $__internal_539a194f1d84d7434a64698f22d52f0b0e7beccc2345da5ed02825a6fe9aa5a9->leave($__internal_539a194f1d84d7434a64698f22d52f0b0e7beccc2345da5ed02825a6fe9aa5a9_prof);

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
