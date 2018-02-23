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
        $__internal_10bd7b0b1b96e25d8a16f90f67be204534e10539131d97ad883da4d011919b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10bd7b0b1b96e25d8a16f90f67be204534e10539131d97ad883da4d011919b7d->enter($__internal_10bd7b0b1b96e25d8a16f90f67be204534e10539131d97ad883da4d011919b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4038db95affa191b7ae4cb95ad50336c13ee09dc74c9f94c0a09090d761dea5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4038db95affa191b7ae4cb95ad50336c13ee09dc74c9f94c0a09090d761dea5e->enter($__internal_4038db95affa191b7ae4cb95ad50336c13ee09dc74c9f94c0a09090d761dea5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10bd7b0b1b96e25d8a16f90f67be204534e10539131d97ad883da4d011919b7d->leave($__internal_10bd7b0b1b96e25d8a16f90f67be204534e10539131d97ad883da4d011919b7d_prof);

        
        $__internal_4038db95affa191b7ae4cb95ad50336c13ee09dc74c9f94c0a09090d761dea5e->leave($__internal_4038db95affa191b7ae4cb95ad50336c13ee09dc74c9f94c0a09090d761dea5e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fb37581d086c858ec9ddafca28cdc810ddb0b3f84df83db8424c7785a83a270d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb37581d086c858ec9ddafca28cdc810ddb0b3f84df83db8424c7785a83a270d->enter($__internal_fb37581d086c858ec9ddafca28cdc810ddb0b3f84df83db8424c7785a83a270d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bfe7a15f4b8f25a64b2bd41171ac39f33fd1818890f81ebd77e2d788edcf8ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe7a15f4b8f25a64b2bd41171ac39f33fd1818890f81ebd77e2d788edcf8ddc->enter($__internal_bfe7a15f4b8f25a64b2bd41171ac39f33fd1818890f81ebd77e2d788edcf8ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bfe7a15f4b8f25a64b2bd41171ac39f33fd1818890f81ebd77e2d788edcf8ddc->leave($__internal_bfe7a15f4b8f25a64b2bd41171ac39f33fd1818890f81ebd77e2d788edcf8ddc_prof);

        
        $__internal_fb37581d086c858ec9ddafca28cdc810ddb0b3f84df83db8424c7785a83a270d->leave($__internal_fb37581d086c858ec9ddafca28cdc810ddb0b3f84df83db8424c7785a83a270d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8169eeae0730b4fe24ef3ac7086f4cb07455c18fe8e85a553ba08585cba5b701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8169eeae0730b4fe24ef3ac7086f4cb07455c18fe8e85a553ba08585cba5b701->enter($__internal_8169eeae0730b4fe24ef3ac7086f4cb07455c18fe8e85a553ba08585cba5b701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e760495e07d1a1aeaab60ffdb2fc6b2a72674d226cdbc8ca44f5c1077af31276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e760495e07d1a1aeaab60ffdb2fc6b2a72674d226cdbc8ca44f5c1077af31276->enter($__internal_e760495e07d1a1aeaab60ffdb2fc6b2a72674d226cdbc8ca44f5c1077af31276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e760495e07d1a1aeaab60ffdb2fc6b2a72674d226cdbc8ca44f5c1077af31276->leave($__internal_e760495e07d1a1aeaab60ffdb2fc6b2a72674d226cdbc8ca44f5c1077af31276_prof);

        
        $__internal_8169eeae0730b4fe24ef3ac7086f4cb07455c18fe8e85a553ba08585cba5b701->leave($__internal_8169eeae0730b4fe24ef3ac7086f4cb07455c18fe8e85a553ba08585cba5b701_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_addebb69317ff7d14f94d27c4dc8a6dac22a0a7dddc85cd8168d9e8d0ff2c29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addebb69317ff7d14f94d27c4dc8a6dac22a0a7dddc85cd8168d9e8d0ff2c29d->enter($__internal_addebb69317ff7d14f94d27c4dc8a6dac22a0a7dddc85cd8168d9e8d0ff2c29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2bdd92b1006b19ed0d63577c51cad74d352cc40e38439b4a821503c46ce31b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bdd92b1006b19ed0d63577c51cad74d352cc40e38439b4a821503c46ce31b0->enter($__internal_d2bdd92b1006b19ed0d63577c51cad74d352cc40e38439b4a821503c46ce31b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2bdd92b1006b19ed0d63577c51cad74d352cc40e38439b4a821503c46ce31b0->leave($__internal_d2bdd92b1006b19ed0d63577c51cad74d352cc40e38439b4a821503c46ce31b0_prof);

        
        $__internal_addebb69317ff7d14f94d27c4dc8a6dac22a0a7dddc85cd8168d9e8d0ff2c29d->leave($__internal_addebb69317ff7d14f94d27c4dc8a6dac22a0a7dddc85cd8168d9e8d0ff2c29d_prof);

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
