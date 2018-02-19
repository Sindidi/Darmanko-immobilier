<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
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
        $__internal_5efe9efa14e51417a2ef7727ef68aa125847b0ae4019856d6fae9bbd3a19bcb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efe9efa14e51417a2ef7727ef68aa125847b0ae4019856d6fae9bbd3a19bcb7->enter($__internal_5efe9efa14e51417a2ef7727ef68aa125847b0ae4019856d6fae9bbd3a19bcb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_714ae5683c693f2cc38c79b0e9c615308bcedcfd9680ec1c045e725dec84a976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714ae5683c693f2cc38c79b0e9c615308bcedcfd9680ec1c045e725dec84a976->enter($__internal_714ae5683c693f2cc38c79b0e9c615308bcedcfd9680ec1c045e725dec84a976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5efe9efa14e51417a2ef7727ef68aa125847b0ae4019856d6fae9bbd3a19bcb7->leave($__internal_5efe9efa14e51417a2ef7727ef68aa125847b0ae4019856d6fae9bbd3a19bcb7_prof);

        
        $__internal_714ae5683c693f2cc38c79b0e9c615308bcedcfd9680ec1c045e725dec84a976->leave($__internal_714ae5683c693f2cc38c79b0e9c615308bcedcfd9680ec1c045e725dec84a976_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53a46f1b692790420ca1444f22246356bf88040f3bfebd3d3a330d8aae0e1483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a46f1b692790420ca1444f22246356bf88040f3bfebd3d3a330d8aae0e1483->enter($__internal_53a46f1b692790420ca1444f22246356bf88040f3bfebd3d3a330d8aae0e1483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b1d82e397f3dc00b5098c370139c22f4f3a28fb9f65d78ca57114d79e279912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1d82e397f3dc00b5098c370139c22f4f3a28fb9f65d78ca57114d79e279912->enter($__internal_2b1d82e397f3dc00b5098c370139c22f4f3a28fb9f65d78ca57114d79e279912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b1d82e397f3dc00b5098c370139c22f4f3a28fb9f65d78ca57114d79e279912->leave($__internal_2b1d82e397f3dc00b5098c370139c22f4f3a28fb9f65d78ca57114d79e279912_prof);

        
        $__internal_53a46f1b692790420ca1444f22246356bf88040f3bfebd3d3a330d8aae0e1483->leave($__internal_53a46f1b692790420ca1444f22246356bf88040f3bfebd3d3a330d8aae0e1483_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f95f0e42adcbbf1ca2018298302bf2023ae142a62b9b2819ba3abd9ad6b030b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95f0e42adcbbf1ca2018298302bf2023ae142a62b9b2819ba3abd9ad6b030b4->enter($__internal_f95f0e42adcbbf1ca2018298302bf2023ae142a62b9b2819ba3abd9ad6b030b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c57bd14f6c1e340a88b70df48b027fa1177533b823b0f63192f0bfd8932caf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57bd14f6c1e340a88b70df48b027fa1177533b823b0f63192f0bfd8932caf89->enter($__internal_c57bd14f6c1e340a88b70df48b027fa1177533b823b0f63192f0bfd8932caf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c57bd14f6c1e340a88b70df48b027fa1177533b823b0f63192f0bfd8932caf89->leave($__internal_c57bd14f6c1e340a88b70df48b027fa1177533b823b0f63192f0bfd8932caf89_prof);

        
        $__internal_f95f0e42adcbbf1ca2018298302bf2023ae142a62b9b2819ba3abd9ad6b030b4->leave($__internal_f95f0e42adcbbf1ca2018298302bf2023ae142a62b9b2819ba3abd9ad6b030b4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b490fe2d6e3af8e8c66c9d87aabfba618648590c81cfebc7f2b4abf92fade9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b490fe2d6e3af8e8c66c9d87aabfba618648590c81cfebc7f2b4abf92fade9de->enter($__internal_b490fe2d6e3af8e8c66c9d87aabfba618648590c81cfebc7f2b4abf92fade9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54f47c897db3d2b2fe7f8dbf5219f0549cc830eb0551ff4a1a045eb938f2b3fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f47c897db3d2b2fe7f8dbf5219f0549cc830eb0551ff4a1a045eb938f2b3fd->enter($__internal_54f47c897db3d2b2fe7f8dbf5219f0549cc830eb0551ff4a1a045eb938f2b3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54f47c897db3d2b2fe7f8dbf5219f0549cc830eb0551ff4a1a045eb938f2b3fd->leave($__internal_54f47c897db3d2b2fe7f8dbf5219f0549cc830eb0551ff4a1a045eb938f2b3fd_prof);

        
        $__internal_b490fe2d6e3af8e8c66c9d87aabfba618648590c81cfebc7f2b4abf92fade9de->leave($__internal_b490fe2d6e3af8e8c66c9d87aabfba618648590c81cfebc7f2b4abf92fade9de_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
