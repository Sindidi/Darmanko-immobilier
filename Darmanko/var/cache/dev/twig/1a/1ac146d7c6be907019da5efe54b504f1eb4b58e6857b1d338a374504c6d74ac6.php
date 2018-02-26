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
        $__internal_17fa5c194be14056af6afa2bc3ebb2da176c4929f8319afdff7d46d65d021284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fa5c194be14056af6afa2bc3ebb2da176c4929f8319afdff7d46d65d021284->enter($__internal_17fa5c194be14056af6afa2bc3ebb2da176c4929f8319afdff7d46d65d021284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:biens.html.twig"));

        $__internal_5a2eb386f158da3093043506508be69de1521e5a3f989914b4c7922cc4792b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2eb386f158da3093043506508be69de1521e5a3f989914b4c7922cc4792b9a->enter($__internal_5a2eb386f158da3093043506508be69de1521e5a3f989914b4c7922cc4792b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:biens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fa5c194be14056af6afa2bc3ebb2da176c4929f8319afdff7d46d65d021284->leave($__internal_17fa5c194be14056af6afa2bc3ebb2da176c4929f8319afdff7d46d65d021284_prof);

        
        $__internal_5a2eb386f158da3093043506508be69de1521e5a3f989914b4c7922cc4792b9a->leave($__internal_5a2eb386f158da3093043506508be69de1521e5a3f989914b4c7922cc4792b9a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae7e6e9f3786291b5d36a437c596dacad843540a50c364ca169f8af54b404c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7e6e9f3786291b5d36a437c596dacad843540a50c364ca169f8af54b404c1d->enter($__internal_ae7e6e9f3786291b5d36a437c596dacad843540a50c364ca169f8af54b404c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88525fd23193aa4b940017c6160fe36cc935a27d7b15a6f3c72bd84882118a41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88525fd23193aa4b940017c6160fe36cc935a27d7b15a6f3c72bd84882118a41->enter($__internal_88525fd23193aa4b940017c6160fe36cc935a27d7b15a6f3c72bd84882118a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_88525fd23193aa4b940017c6160fe36cc935a27d7b15a6f3c72bd84882118a41->leave($__internal_88525fd23193aa4b940017c6160fe36cc935a27d7b15a6f3c72bd84882118a41_prof);

        
        $__internal_ae7e6e9f3786291b5d36a437c596dacad843540a50c364ca169f8af54b404c1d->leave($__internal_ae7e6e9f3786291b5d36a437c596dacad843540a50c364ca169f8af54b404c1d_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f96a711d81f08622103214c10b55518792598af618745722909234aa83924ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f96a711d81f08622103214c10b55518792598af618745722909234aa83924ff->enter($__internal_0f96a711d81f08622103214c10b55518792598af618745722909234aa83924ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cce2f3e801f6adcdc5509b0e09e1fa622c52e831901da94c2b048c19a67c9522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce2f3e801f6adcdc5509b0e09e1fa622c52e831901da94c2b048c19a67c9522->enter($__internal_cce2f3e801f6adcdc5509b0e09e1fa622c52e831901da94c2b048c19a67c9522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

";
        
        $__internal_cce2f3e801f6adcdc5509b0e09e1fa622c52e831901da94c2b048c19a67c9522->leave($__internal_cce2f3e801f6adcdc5509b0e09e1fa622c52e831901da94c2b048c19a67c9522_prof);

        
        $__internal_0f96a711d81f08622103214c10b55518792598af618745722909234aa83924ff->leave($__internal_0f96a711d81f08622103214c10b55518792598af618745722909234aa83924ff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e72b6f00e14c90e7d9962dc9fd0f6532798bfd77cb3c9509d656f82f72b36581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72b6f00e14c90e7d9962dc9fd0f6532798bfd77cb3c9509d656f82f72b36581->enter($__internal_e72b6f00e14c90e7d9962dc9fd0f6532798bfd77cb3c9509d656f82f72b36581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ab24d47a770c869f4e050ce84e9a79dd1d136c933feb9b3df18d4bbef4cb698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab24d47a770c869f4e050ce84e9a79dd1d136c933feb9b3df18d4bbef4cb698->enter($__internal_1ab24d47a770c869f4e050ce84e9a79dd1d136c933feb9b3df18d4bbef4cb698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<div class=\"container\">

\t<h1>Liste des biens</h1>

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
        
        $__internal_1ab24d47a770c869f4e050ce84e9a79dd1d136c933feb9b3df18d4bbef4cb698->leave($__internal_1ab24d47a770c869f4e050ce84e9a79dd1d136c933feb9b3df18d4bbef4cb698_prof);

        
        $__internal_e72b6f00e14c90e7d9962dc9fd0f6532798bfd77cb3c9509d656f82f72b36581->leave($__internal_e72b6f00e14c90e7d9962dc9fd0f6532798bfd77cb3c9509d656f82f72b36581_prof);

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

\t<h1>Liste des biens</h1>

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
