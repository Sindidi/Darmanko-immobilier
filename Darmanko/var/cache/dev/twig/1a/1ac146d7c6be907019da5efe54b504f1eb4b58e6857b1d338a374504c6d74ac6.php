<?php

/* SNTDarmankoBundle:admin:biens.html.twig */
class __TwigTemplate_baf13d23098b3edda89d7520b05bfd68b21d672350f39ecce57db538058a5ad4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTDarmankoBundle:admin:biens.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcfb4a82a3b0455626cd2a599a422d071a0e787f1a0db5186cd087f6febab0e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcfb4a82a3b0455626cd2a599a422d071a0e787f1a0db5186cd087f6febab0e7->enter($__internal_bcfb4a82a3b0455626cd2a599a422d071a0e787f1a0db5186cd087f6febab0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:biens.html.twig"));

        $__internal_9f06a6b1e776e66f58b846472ddd7ec6c416672bcb3ad99e5a546322a8310149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f06a6b1e776e66f58b846472ddd7ec6c416672bcb3ad99e5a546322a8310149->enter($__internal_9f06a6b1e776e66f58b846472ddd7ec6c416672bcb3ad99e5a546322a8310149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:biens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcfb4a82a3b0455626cd2a599a422d071a0e787f1a0db5186cd087f6febab0e7->leave($__internal_bcfb4a82a3b0455626cd2a599a422d071a0e787f1a0db5186cd087f6febab0e7_prof);

        
        $__internal_9f06a6b1e776e66f58b846472ddd7ec6c416672bcb3ad99e5a546322a8310149->leave($__internal_9f06a6b1e776e66f58b846472ddd7ec6c416672bcb3ad99e5a546322a8310149_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1419ca621396a3740a46118d5b8e63f8ae9788091c8f1d95a452f2e90b173149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1419ca621396a3740a46118d5b8e63f8ae9788091c8f1d95a452f2e90b173149->enter($__internal_1419ca621396a3740a46118d5b8e63f8ae9788091c8f1d95a452f2e90b173149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5e129aee63714cd86c31e01a86b58a70f2dbbf2eefc376b96b838f823052941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e129aee63714cd86c31e01a86b58a70f2dbbf2eefc376b96b838f823052941->enter($__internal_e5e129aee63714cd86c31e01a86b58a70f2dbbf2eefc376b96b838f823052941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_e5e129aee63714cd86c31e01a86b58a70f2dbbf2eefc376b96b838f823052941->leave($__internal_e5e129aee63714cd86c31e01a86b58a70f2dbbf2eefc376b96b838f823052941_prof);

        
        $__internal_1419ca621396a3740a46118d5b8e63f8ae9788091c8f1d95a452f2e90b173149->leave($__internal_1419ca621396a3740a46118d5b8e63f8ae9788091c8f1d95a452f2e90b173149_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c1e8090b37df28471de794f551804705f6654051a1a62c68adb865710ba91b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1e8090b37df28471de794f551804705f6654051a1a62c68adb865710ba91b7->enter($__internal_9c1e8090b37df28471de794f551804705f6654051a1a62c68adb865710ba91b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_644e23712440b29f9d3655139982527236ba039d54e9da63f1a8757116c094ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644e23712440b29f9d3655139982527236ba039d54e9da63f1a8757116c094ef->enter($__internal_644e23712440b29f9d3655139982527236ba039d54e9da63f1a8757116c094ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

";
        
        $__internal_644e23712440b29f9d3655139982527236ba039d54e9da63f1a8757116c094ef->leave($__internal_644e23712440b29f9d3655139982527236ba039d54e9da63f1a8757116c094ef_prof);

        
        $__internal_9c1e8090b37df28471de794f551804705f6654051a1a62c68adb865710ba91b7->leave($__internal_9c1e8090b37df28471de794f551804705f6654051a1a62c68adb865710ba91b7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5af5d714b610e3aad8afd3323dcbfb152fbb45e68d1693b7b1ba6af9ea7b05dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af5d714b610e3aad8afd3323dcbfb152fbb45e68d1693b7b1ba6af9ea7b05dd->enter($__internal_5af5d714b610e3aad8afd3323dcbfb152fbb45e68d1693b7b1ba6af9ea7b05dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d017482cfafcde2c29c8ba9841e778847222e2860f7105c514c18d70eb2aec84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d017482cfafcde2c29c8ba9841e778847222e2860f7105c514c18d70eb2aec84->enter($__internal_d017482cfafcde2c29c8ba9841e778847222e2860f7105c514c18d70eb2aec84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<div class=\"container\">

\t<h1>Bienvenue dans la page admin</h1>

\t<table id=\"myTable\" class=\"table table-striped table-bordered\">
\t\t<thead class=\"thead-dark\">
\t\t\t<tr>
\t\t\t\t<th>Nom du bien</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Localité</th>
\t\t\t\t<th>Prix Location</th>
\t\t\t\t<th>Etat</th>
\t\t\t</tr>
\t\t</thead>
\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 28
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "type", array()), "libelle", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "localite", array()), "libelle", array()), "html", null, true);
            echo "</th>
\t\t\t\t<th>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "</th>
\t\t\t\t";
            // line 33
            if (($this->getAttribute($context["bien"], "etat", array()) == 1)) {
                // line 34
                echo "\t\t\t\t<th>Disponible</th>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t</table>
</div>
";
        
        $__internal_d017482cfafcde2c29c8ba9841e778847222e2860f7105c514c18d70eb2aec84->leave($__internal_d017482cfafcde2c29c8ba9841e778847222e2860f7105c514c18d70eb2aec84_prof);

        
        $__internal_5af5d714b610e3aad8afd3323dcbfb152fbb45e68d1693b7b1ba6af9ea7b05dd->leave($__internal_5af5d714b610e3aad8afd3323dcbfb152fbb45e68d1693b7b1ba6af9ea7b05dd_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:biens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 38,  139 => 36,  135 => 34,  133 => 33,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  114 => 28,  110 => 27,  93 => 12,  84 => 11,  69 => 5,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Darmanko-Admin{% endblock %}
{% block javascripts %}

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

{% endblock %}
{% block body %}

<div class=\"container\">

\t<h1>Bienvenue dans la page admin</h1>

\t<table id=\"myTable\" class=\"table table-striped table-bordered\">
\t\t<thead class=\"thead-dark\">
\t\t\t<tr>
\t\t\t\t<th>Nom du bien</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Localité</th>
\t\t\t\t<th>Prix Location</th>
\t\t\t\t<th>Etat</th>
\t\t\t</tr>
\t\t</thead>
\t\t{% for bien in biens %}
\t\t\t<tr>
\t\t\t\t<th>{{ bien.nomBien }}</th>
\t\t\t\t<th>{{ bien.type.libelle }}</th>
\t\t\t\t<th>{{ bien.localite.libelle }}</th>
\t\t\t\t<th>{{ bien.prixLocation }}</th>
\t\t\t\t{% if bien.etat ==1 %}
\t\t\t\t<th>Disponible</th>
\t\t\t\t{% endif %}
\t\t\t</tr>
\t\t{% endfor %}
\t</table>
</div>
{% endblock %}
", "SNTDarmankoBundle:admin:biens.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/biens.html.twig");
    }
}
