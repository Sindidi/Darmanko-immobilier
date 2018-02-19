<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a675d732810b24879130d313b9bc9a9d9baa8b41fc75218bda5c41f1eb1a39b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a675d732810b24879130d313b9bc9a9d9baa8b41fc75218bda5c41f1eb1a39b9->enter($__internal_a675d732810b24879130d313b9bc9a9d9baa8b41fc75218bda5c41f1eb1a39b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_761eb5dbfb88df9292aac358264b09321f1f11c9e490faa9c12dd5e0ea60b7f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761eb5dbfb88df9292aac358264b09321f1f11c9e490faa9c12dd5e0ea60b7f0->enter($__internal_761eb5dbfb88df9292aac358264b09321f1f11c9e490faa9c12dd5e0ea60b7f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a675d732810b24879130d313b9bc9a9d9baa8b41fc75218bda5c41f1eb1a39b9->leave($__internal_a675d732810b24879130d313b9bc9a9d9baa8b41fc75218bda5c41f1eb1a39b9_prof);

        
        $__internal_761eb5dbfb88df9292aac358264b09321f1f11c9e490faa9c12dd5e0ea60b7f0->leave($__internal_761eb5dbfb88df9292aac358264b09321f1f11c9e490faa9c12dd5e0ea60b7f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b7dcc38bc64dc5de18c5445936e6fc394a571620933f4a1d3e0383eb80048d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7dcc38bc64dc5de18c5445936e6fc394a571620933f4a1d3e0383eb80048d6f->enter($__internal_b7dcc38bc64dc5de18c5445936e6fc394a571620933f4a1d3e0383eb80048d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f2f62c982f8489a7a16ad9f4febebd6697c3fa897b55cb7c0390dfddb913020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f2f62c982f8489a7a16ad9f4febebd6697c3fa897b55cb7c0390dfddb913020->enter($__internal_0f2f62c982f8489a7a16ad9f4febebd6697c3fa897b55cb7c0390dfddb913020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0f2f62c982f8489a7a16ad9f4febebd6697c3fa897b55cb7c0390dfddb913020->leave($__internal_0f2f62c982f8489a7a16ad9f4febebd6697c3fa897b55cb7c0390dfddb913020_prof);

        
        $__internal_b7dcc38bc64dc5de18c5445936e6fc394a571620933f4a1d3e0383eb80048d6f->leave($__internal_b7dcc38bc64dc5de18c5445936e6fc394a571620933f4a1d3e0383eb80048d6f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_05e1c30c64105d1519ecf7f4077e267457d1a4f03243996b87512f75427e795d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05e1c30c64105d1519ecf7f4077e267457d1a4f03243996b87512f75427e795d->enter($__internal_05e1c30c64105d1519ecf7f4077e267457d1a4f03243996b87512f75427e795d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d4887be570c871a4ca8c4fc71b753908bc8386b0f39bff909d8299e0ba347c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d4887be570c871a4ca8c4fc71b753908bc8386b0f39bff909d8299e0ba347c8->enter($__internal_8d4887be570c871a4ca8c4fc71b753908bc8386b0f39bff909d8299e0ba347c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8d4887be570c871a4ca8c4fc71b753908bc8386b0f39bff909d8299e0ba347c8->leave($__internal_8d4887be570c871a4ca8c4fc71b753908bc8386b0f39bff909d8299e0ba347c8_prof);

        
        $__internal_05e1c30c64105d1519ecf7f4077e267457d1a4f03243996b87512f75427e795d->leave($__internal_05e1c30c64105d1519ecf7f4077e267457d1a4f03243996b87512f75427e795d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ee353a5780b1ac385e23dd64af47e3d32b11e01ba30c43c139aecfc8aa589fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee353a5780b1ac385e23dd64af47e3d32b11e01ba30c43c139aecfc8aa589fa->enter($__internal_9ee353a5780b1ac385e23dd64af47e3d32b11e01ba30c43c139aecfc8aa589fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_435103481d9966d366492dbc46900fbad7ae5b8fa206811bc1b1051d0b6719f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435103481d9966d366492dbc46900fbad7ae5b8fa206811bc1b1051d0b6719f6->enter($__internal_435103481d9966d366492dbc46900fbad7ae5b8fa206811bc1b1051d0b6719f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_435103481d9966d366492dbc46900fbad7ae5b8fa206811bc1b1051d0b6719f6->leave($__internal_435103481d9966d366492dbc46900fbad7ae5b8fa206811bc1b1051d0b6719f6_prof);

        
        $__internal_9ee353a5780b1ac385e23dd64af47e3d32b11e01ba30c43c139aecfc8aa589fa->leave($__internal_9ee353a5780b1ac385e23dd64af47e3d32b11e01ba30c43c139aecfc8aa589fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
