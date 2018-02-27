<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_822341ac1d414711bfd0ef45eeff946c0cec9300c4f5d084eb590fde9ea6ae74 extends Twig_Template
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
        $__internal_a39da9e9ac8797f496d808977c5c91394b89230608c1835383ca4f3cf51ed375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39da9e9ac8797f496d808977c5c91394b89230608c1835383ca4f3cf51ed375->enter($__internal_a39da9e9ac8797f496d808977c5c91394b89230608c1835383ca4f3cf51ed375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ce9e72280ea05b4dbcd99d8b536880378d317454747784ca9c42c31d774e4ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce9e72280ea05b4dbcd99d8b536880378d317454747784ca9c42c31d774e4ba2->enter($__internal_ce9e72280ea05b4dbcd99d8b536880378d317454747784ca9c42c31d774e4ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a39da9e9ac8797f496d808977c5c91394b89230608c1835383ca4f3cf51ed375->leave($__internal_a39da9e9ac8797f496d808977c5c91394b89230608c1835383ca4f3cf51ed375_prof);

        
        $__internal_ce9e72280ea05b4dbcd99d8b536880378d317454747784ca9c42c31d774e4ba2->leave($__internal_ce9e72280ea05b4dbcd99d8b536880378d317454747784ca9c42c31d774e4ba2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53811e2589032d376d87446a0e9155c76d00c2e2c1da62dd66f9159380f83708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53811e2589032d376d87446a0e9155c76d00c2e2c1da62dd66f9159380f83708->enter($__internal_53811e2589032d376d87446a0e9155c76d00c2e2c1da62dd66f9159380f83708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4463bd6e96d5ad4652c281cfc95eb843a24f91d443e3332d074218599b70450d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4463bd6e96d5ad4652c281cfc95eb843a24f91d443e3332d074218599b70450d->enter($__internal_4463bd6e96d5ad4652c281cfc95eb843a24f91d443e3332d074218599b70450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4463bd6e96d5ad4652c281cfc95eb843a24f91d443e3332d074218599b70450d->leave($__internal_4463bd6e96d5ad4652c281cfc95eb843a24f91d443e3332d074218599b70450d_prof);

        
        $__internal_53811e2589032d376d87446a0e9155c76d00c2e2c1da62dd66f9159380f83708->leave($__internal_53811e2589032d376d87446a0e9155c76d00c2e2c1da62dd66f9159380f83708_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c95023889122f1b32ebe6dae49452e6580b89f42b4c7abc10945b4246e109c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c95023889122f1b32ebe6dae49452e6580b89f42b4c7abc10945b4246e109c26->enter($__internal_c95023889122f1b32ebe6dae49452e6580b89f42b4c7abc10945b4246e109c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fac4d32ba62d200b67ed8ec9872d76e10f9620d74041041ce98e4aafd911879c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac4d32ba62d200b67ed8ec9872d76e10f9620d74041041ce98e4aafd911879c->enter($__internal_fac4d32ba62d200b67ed8ec9872d76e10f9620d74041041ce98e4aafd911879c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fac4d32ba62d200b67ed8ec9872d76e10f9620d74041041ce98e4aafd911879c->leave($__internal_fac4d32ba62d200b67ed8ec9872d76e10f9620d74041041ce98e4aafd911879c_prof);

        
        $__internal_c95023889122f1b32ebe6dae49452e6580b89f42b4c7abc10945b4246e109c26->leave($__internal_c95023889122f1b32ebe6dae49452e6580b89f42b4c7abc10945b4246e109c26_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d0c75cca002f98f7b73b345b28d91dea301afaad44a0262567048a13316468f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d0c75cca002f98f7b73b345b28d91dea301afaad44a0262567048a13316468f->enter($__internal_1d0c75cca002f98f7b73b345b28d91dea301afaad44a0262567048a13316468f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7160824efb9433fd315a929d4ca5063ddf6e6520c1c83395310cf7c411ad752a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7160824efb9433fd315a929d4ca5063ddf6e6520c1c83395310cf7c411ad752a->enter($__internal_7160824efb9433fd315a929d4ca5063ddf6e6520c1c83395310cf7c411ad752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7160824efb9433fd315a929d4ca5063ddf6e6520c1c83395310cf7c411ad752a->leave($__internal_7160824efb9433fd315a929d4ca5063ddf6e6520c1c83395310cf7c411ad752a_prof);

        
        $__internal_1d0c75cca002f98f7b73b345b28d91dea301afaad44a0262567048a13316468f->leave($__internal_1d0c75cca002f98f7b73b345b28d91dea301afaad44a0262567048a13316468f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
