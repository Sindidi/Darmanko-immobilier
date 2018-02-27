<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_114710ea39245b32943dbf584c451df7001c5b8648bd96f2856f5c12c9705420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fe8b18fa332c60e94e2fc508c267b561c01a2905f30e4276489f671d1f309e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe8b18fa332c60e94e2fc508c267b561c01a2905f30e4276489f671d1f309e8->enter($__internal_5fe8b18fa332c60e94e2fc508c267b561c01a2905f30e4276489f671d1f309e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dc0693a8540b018c341369d0112c279fa1fbba7df51b8f43108a6c59ee1e6d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0693a8540b018c341369d0112c279fa1fbba7df51b8f43108a6c59ee1e6d87->enter($__internal_dc0693a8540b018c341369d0112c279fa1fbba7df51b8f43108a6c59ee1e6d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fe8b18fa332c60e94e2fc508c267b561c01a2905f30e4276489f671d1f309e8->leave($__internal_5fe8b18fa332c60e94e2fc508c267b561c01a2905f30e4276489f671d1f309e8_prof);

        
        $__internal_dc0693a8540b018c341369d0112c279fa1fbba7df51b8f43108a6c59ee1e6d87->leave($__internal_dc0693a8540b018c341369d0112c279fa1fbba7df51b8f43108a6c59ee1e6d87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57251838d62c3acf196a17131f938efbe65ed5ea5d190482801e4983e311410e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57251838d62c3acf196a17131f938efbe65ed5ea5d190482801e4983e311410e->enter($__internal_57251838d62c3acf196a17131f938efbe65ed5ea5d190482801e4983e311410e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2701815564cc3ef3266b5b1ae88e6baad158cd9efc9da7bb5cfaede99b6741ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2701815564cc3ef3266b5b1ae88e6baad158cd9efc9da7bb5cfaede99b6741ee->enter($__internal_2701815564cc3ef3266b5b1ae88e6baad158cd9efc9da7bb5cfaede99b6741ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2701815564cc3ef3266b5b1ae88e6baad158cd9efc9da7bb5cfaede99b6741ee->leave($__internal_2701815564cc3ef3266b5b1ae88e6baad158cd9efc9da7bb5cfaede99b6741ee_prof);

        
        $__internal_57251838d62c3acf196a17131f938efbe65ed5ea5d190482801e4983e311410e->leave($__internal_57251838d62c3acf196a17131f938efbe65ed5ea5d190482801e4983e311410e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0aaa7b5d4bc237c5c069dffe262c8e1156dc5b42a212c80a7af9bc6b031f4b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaa7b5d4bc237c5c069dffe262c8e1156dc5b42a212c80a7af9bc6b031f4b61->enter($__internal_0aaa7b5d4bc237c5c069dffe262c8e1156dc5b42a212c80a7af9bc6b031f4b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_62792c5b9ade4b1e623befbe30bdf04b627ec941ad961c32478595bcd2c99bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62792c5b9ade4b1e623befbe30bdf04b627ec941ad961c32478595bcd2c99bf4->enter($__internal_62792c5b9ade4b1e623befbe30bdf04b627ec941ad961c32478595bcd2c99bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_62792c5b9ade4b1e623befbe30bdf04b627ec941ad961c32478595bcd2c99bf4->leave($__internal_62792c5b9ade4b1e623befbe30bdf04b627ec941ad961c32478595bcd2c99bf4_prof);

        
        $__internal_0aaa7b5d4bc237c5c069dffe262c8e1156dc5b42a212c80a7af9bc6b031f4b61->leave($__internal_0aaa7b5d4bc237c5c069dffe262c8e1156dc5b42a212c80a7af9bc6b031f4b61_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_08f788a8291b041c6e624d98301dc51188cea30e0cf49b1d593526fa5403de8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f788a8291b041c6e624d98301dc51188cea30e0cf49b1d593526fa5403de8b->enter($__internal_08f788a8291b041c6e624d98301dc51188cea30e0cf49b1d593526fa5403de8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c12b65674cf192be39cd01c2fd6d4d13470a758da0119ffa48d3f1284a2b0e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c12b65674cf192be39cd01c2fd6d4d13470a758da0119ffa48d3f1284a2b0e9->enter($__internal_8c12b65674cf192be39cd01c2fd6d4d13470a758da0119ffa48d3f1284a2b0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c12b65674cf192be39cd01c2fd6d4d13470a758da0119ffa48d3f1284a2b0e9->leave($__internal_8c12b65674cf192be39cd01c2fd6d4d13470a758da0119ffa48d3f1284a2b0e9_prof);

        
        $__internal_08f788a8291b041c6e624d98301dc51188cea30e0cf49b1d593526fa5403de8b->leave($__internal_08f788a8291b041c6e624d98301dc51188cea30e0cf49b1d593526fa5403de8b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
