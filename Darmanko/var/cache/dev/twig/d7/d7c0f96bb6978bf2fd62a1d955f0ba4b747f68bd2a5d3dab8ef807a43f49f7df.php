<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2e01d25e6df0ef0974e156e11981a38c407833bc584615e5b04d84e8a19e0f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2eaa8ad25828ff802d8a6675a390066bc64c6805d29d4dc4eb62aa054c6fcaa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eaa8ad25828ff802d8a6675a390066bc64c6805d29d4dc4eb62aa054c6fcaa6->enter($__internal_2eaa8ad25828ff802d8a6675a390066bc64c6805d29d4dc4eb62aa054c6fcaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_00c2ac91de8b4225c9fa0fe528d4e78173896e75e3dd0b8e6e6c908f3314f431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c2ac91de8b4225c9fa0fe528d4e78173896e75e3dd0b8e6e6c908f3314f431->enter($__internal_00c2ac91de8b4225c9fa0fe528d4e78173896e75e3dd0b8e6e6c908f3314f431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2eaa8ad25828ff802d8a6675a390066bc64c6805d29d4dc4eb62aa054c6fcaa6->leave($__internal_2eaa8ad25828ff802d8a6675a390066bc64c6805d29d4dc4eb62aa054c6fcaa6_prof);

        
        $__internal_00c2ac91de8b4225c9fa0fe528d4e78173896e75e3dd0b8e6e6c908f3314f431->leave($__internal_00c2ac91de8b4225c9fa0fe528d4e78173896e75e3dd0b8e6e6c908f3314f431_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_638b20f2954d5d3cbfce1c746ca79f594156b98fbb5ad1465c3a851b519d1776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638b20f2954d5d3cbfce1c746ca79f594156b98fbb5ad1465c3a851b519d1776->enter($__internal_638b20f2954d5d3cbfce1c746ca79f594156b98fbb5ad1465c3a851b519d1776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_11296f9ef4f13ff536c588c7196a6bad6f7d4ed85972a8058d0961c5d636a8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11296f9ef4f13ff536c588c7196a6bad6f7d4ed85972a8058d0961c5d636a8db->enter($__internal_11296f9ef4f13ff536c588c7196a6bad6f7d4ed85972a8058d0961c5d636a8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_11296f9ef4f13ff536c588c7196a6bad6f7d4ed85972a8058d0961c5d636a8db->leave($__internal_11296f9ef4f13ff536c588c7196a6bad6f7d4ed85972a8058d0961c5d636a8db_prof);

        
        $__internal_638b20f2954d5d3cbfce1c746ca79f594156b98fbb5ad1465c3a851b519d1776->leave($__internal_638b20f2954d5d3cbfce1c746ca79f594156b98fbb5ad1465c3a851b519d1776_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
