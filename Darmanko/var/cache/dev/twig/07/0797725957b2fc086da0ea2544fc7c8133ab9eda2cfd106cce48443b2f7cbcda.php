<?php

/* ::base.html.twig */
class __TwigTemplate_75f6d1697f471eb5a2b4d2dc537280e809b722efdd7d18f8056fc34a2d24de35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0358b363f4beb080815bb70f9a7e99aee61bfd2313fb19dc856d990ed28fbddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0358b363f4beb080815bb70f9a7e99aee61bfd2313fb19dc856d990ed28fbddb->enter($__internal_0358b363f4beb080815bb70f9a7e99aee61bfd2313fb19dc856d990ed28fbddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b21758529db289f7b88ab99393bd08c044df9f1f5e44a7641f515638a8bec04e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21758529db289f7b88ab99393bd08c044df9f1f5e44a7641f515638a8bec04e->enter($__internal_b21758529db289f7b88ab99393bd08c044df9f1f5e44a7641f515638a8bec04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    \t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_0358b363f4beb080815bb70f9a7e99aee61bfd2313fb19dc856d990ed28fbddb->leave($__internal_0358b363f4beb080815bb70f9a7e99aee61bfd2313fb19dc856d990ed28fbddb_prof);

        
        $__internal_b21758529db289f7b88ab99393bd08c044df9f1f5e44a7641f515638a8bec04e->leave($__internal_b21758529db289f7b88ab99393bd08c044df9f1f5e44a7641f515638a8bec04e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_137725c212df29cc9299af78f9455fc7968a36c7d98859df8f8ce5677e519829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137725c212df29cc9299af78f9455fc7968a36c7d98859df8f8ce5677e519829->enter($__internal_137725c212df29cc9299af78f9455fc7968a36c7d98859df8f8ce5677e519829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d95bb149c7bab89eed5f0311730e9ec1f65b239f64eb652ae367411b528f962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d95bb149c7bab89eed5f0311730e9ec1f65b239f64eb652ae367411b528f962->enter($__internal_9d95bb149c7bab89eed5f0311730e9ec1f65b239f64eb652ae367411b528f962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9d95bb149c7bab89eed5f0311730e9ec1f65b239f64eb652ae367411b528f962->leave($__internal_9d95bb149c7bab89eed5f0311730e9ec1f65b239f64eb652ae367411b528f962_prof);

        
        $__internal_137725c212df29cc9299af78f9455fc7968a36c7d98859df8f8ce5677e519829->leave($__internal_137725c212df29cc9299af78f9455fc7968a36c7d98859df8f8ce5677e519829_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2ccb93ebea929167e726638179a709ae97fac1632cda0f6400fddc046c431ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccb93ebea929167e726638179a709ae97fac1632cda0f6400fddc046c431ea3->enter($__internal_2ccb93ebea929167e726638179a709ae97fac1632cda0f6400fddc046c431ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a35d983915678a2b4c870295fc2802f694830031aed2a711abf2223392b12e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35d983915678a2b4c870295fc2802f694830031aed2a711abf2223392b12e45->enter($__internal_a35d983915678a2b4c870295fc2802f694830031aed2a711abf2223392b12e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a35d983915678a2b4c870295fc2802f694830031aed2a711abf2223392b12e45->leave($__internal_a35d983915678a2b4c870295fc2802f694830031aed2a711abf2223392b12e45_prof);

        
        $__internal_2ccb93ebea929167e726638179a709ae97fac1632cda0f6400fddc046c431ea3->leave($__internal_2ccb93ebea929167e726638179a709ae97fac1632cda0f6400fddc046c431ea3_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_674e1a39b31863a910556d9ff86740d14d7d36121148fcf9c0a54e9246f89d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674e1a39b31863a910556d9ff86740d14d7d36121148fcf9c0a54e9246f89d66->enter($__internal_674e1a39b31863a910556d9ff86740d14d7d36121148fcf9c0a54e9246f89d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_915e4483b53f7bbba87810c086dd70a288c8bb8b9729f895ecbabcb2742bfd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_915e4483b53f7bbba87810c086dd70a288c8bb8b9729f895ecbabcb2742bfd7e->enter($__internal_915e4483b53f7bbba87810c086dd70a288c8bb8b9729f895ecbabcb2742bfd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_915e4483b53f7bbba87810c086dd70a288c8bb8b9729f895ecbabcb2742bfd7e->leave($__internal_915e4483b53f7bbba87810c086dd70a288c8bb8b9729f895ecbabcb2742bfd7e_prof);

        
        $__internal_674e1a39b31863a910556d9ff86740d14d7d36121148fcf9c0a54e9246f89d66->leave($__internal_674e1a39b31863a910556d9ff86740d14d7d36121148fcf9c0a54e9246f89d66_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d35a72f88d6a8640e39e3bed491224d04cd0c01a0bd26bf6fe01b57f84c5134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d35a72f88d6a8640e39e3bed491224d04cd0c01a0bd26bf6fe01b57f84c5134->enter($__internal_7d35a72f88d6a8640e39e3bed491224d04cd0c01a0bd26bf6fe01b57f84c5134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b100e3ef6c426b2165b7e52718cc058d777d3b6461c70e5e7c17c34b0f9f447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b100e3ef6c426b2165b7e52718cc058d777d3b6461c70e5e7c17c34b0f9f447->enter($__internal_5b100e3ef6c426b2165b7e52718cc058d777d3b6461c70e5e7c17c34b0f9f447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5b100e3ef6c426b2165b7e52718cc058d777d3b6461c70e5e7c17c34b0f9f447->leave($__internal_5b100e3ef6c426b2165b7e52718cc058d777d3b6461c70e5e7c17c34b0f9f447_prof);

        
        $__internal_7d35a72f88d6a8640e39e3bed491224d04cd0c01a0bd26bf6fe01b57f84c5134->leave($__internal_7d35a72f88d6a8640e39e3bed491224d04cd0c01a0bd26bf6fe01b57f84c5134_prof);

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
        return array (  130 => 13,  113 => 12,  96 => 6,  78 => 5,  65 => 19,  58 => 14,  55 => 13,  53 => 12,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    \t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    </head>
    <body>
        {% block javascripts %}{% endblock %}
        {% block body %}{% endblock %}
    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"{{asset('js/script.js')}}\"></script>
</html>
", "::base.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/app/Resources/views/base.html.twig");
    }
}
