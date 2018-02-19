<?php

/* SNTDarmankoBundle:reservation:confirm.html.twig */
class __TwigTemplate_9ecdea1cf6eb42de708fce0a7f039de0a2a4b536bbdd4b40443161cf41d8ed17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::reservation.html.twig", "SNTDarmankoBundle:reservation:confirm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::reservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_952b7e203ebac62d26814db353c113a0aca6c98180248abc13053430f4dd1759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952b7e203ebac62d26814db353c113a0aca6c98180248abc13053430f4dd1759->enter($__internal_952b7e203ebac62d26814db353c113a0aca6c98180248abc13053430f4dd1759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:confirm.html.twig"));

        $__internal_a4dfd266a1d792959f8244ed0a4ed17d4294d8b879bf653b255b70a683bcfb72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4dfd266a1d792959f8244ed0a4ed17d4294d8b879bf653b255b70a683bcfb72->enter($__internal_a4dfd266a1d792959f8244ed0a4ed17d4294d8b879bf653b255b70a683bcfb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_952b7e203ebac62d26814db353c113a0aca6c98180248abc13053430f4dd1759->leave($__internal_952b7e203ebac62d26814db353c113a0aca6c98180248abc13053430f4dd1759_prof);

        
        $__internal_a4dfd266a1d792959f8244ed0a4ed17d4294d8b879bf653b255b70a683bcfb72->leave($__internal_a4dfd266a1d792959f8244ed0a4ed17d4294d8b879bf653b255b70a683bcfb72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf1801e45e1ad6800e6a48665aea80c94ef2fc34c0785df2eb3ab04a9f43071f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1801e45e1ad6800e6a48665aea80c94ef2fc34c0785df2eb3ab04a9f43071f->enter($__internal_cf1801e45e1ad6800e6a48665aea80c94ef2fc34c0785df2eb3ab04a9f43071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2272835303790a12f04b4cd56951cce285cc7b6d1c40f23c8b295330b73b8af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2272835303790a12f04b4cd56951cce285cc7b6d1c40f23c8b295330b73b8af7->enter($__internal_2272835303790a12f04b4cd56951cce285cc7b6d1c40f23c8b295330b73b8af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-produit";
        
        $__internal_2272835303790a12f04b4cd56951cce285cc7b6d1c40f23c8b295330b73b8af7->leave($__internal_2272835303790a12f04b4cd56951cce285cc7b6d1c40f23c8b295330b73b8af7_prof);

        
        $__internal_cf1801e45e1ad6800e6a48665aea80c94ef2fc34c0785df2eb3ab04a9f43071f->leave($__internal_cf1801e45e1ad6800e6a48665aea80c94ef2fc34c0785df2eb3ab04a9f43071f_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_d23779cd10ffb5b6a19eb0bd511d4d79a50231919161e54ba0a9884f30b30ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23779cd10ffb5b6a19eb0bd511d4d79a50231919161e54ba0a9884f30b30ffe->enter($__internal_d23779cd10ffb5b6a19eb0bd511d4d79a50231919161e54ba0a9884f30b30ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5ca68f38c8147ea4b10710791b4be7bf20cd0cf43694bf6fd91cd975fff8d73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca68f38c8147ea4b10710791b4be7bf20cd0cf43694bf6fd91cd975fff8d73f->enter($__internal_5ca68f38c8147ea4b10710791b4be7bf20cd0cf43694bf6fd91cd975fff8d73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container\">
    <h1 style=\"font-family:Goudy; color:grey\"> Votre réservation a été prise en charge</h1>
    <h1>
</div>
";
        
        $__internal_5ca68f38c8147ea4b10710791b4be7bf20cd0cf43694bf6fd91cd975fff8d73f->leave($__internal_5ca68f38c8147ea4b10710791b4be7bf20cd0cf43694bf6fd91cd975fff8d73f_prof);

        
        $__internal_d23779cd10ffb5b6a19eb0bd511d4d79a50231919161e54ba0a9884f30b30ffe->leave($__internal_d23779cd10ffb5b6a19eb0bd511d4d79a50231919161e54ba0a9884f30b30ffe_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  59 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::reservation.html.twig\" %}

{% block title %}Détail-produit{% endblock %}
{% block content %}
<div class=\"container\">
    <h1 style=\"font-family:Goudy; color:grey\"> Votre réservation a été prise en charge</h1>
    <h1>
</div>
{% endblock %}", "SNTDarmankoBundle:reservation:confirm.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/confirm.html.twig");
    }
}
