<?php

/* SNTDarmankoBundle:reservation:confirm.html.twig */
class __TwigTemplate_158e07da86d617068d485e958d09a24bdb194ccfefa0be988a6e458c456fb9da extends Twig_Template
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
        $__internal_df28fc478d21fdbe7358b7855c1a9c0ed9d0cf5c45567b03576523da9d4a9e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df28fc478d21fdbe7358b7855c1a9c0ed9d0cf5c45567b03576523da9d4a9e02->enter($__internal_df28fc478d21fdbe7358b7855c1a9c0ed9d0cf5c45567b03576523da9d4a9e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:confirm.html.twig"));

        $__internal_94bd477054db324dc54c34f7cb6194e5ea6ae973f95dc923bbf45875f0f3e887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94bd477054db324dc54c34f7cb6194e5ea6ae973f95dc923bbf45875f0f3e887->enter($__internal_94bd477054db324dc54c34f7cb6194e5ea6ae973f95dc923bbf45875f0f3e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df28fc478d21fdbe7358b7855c1a9c0ed9d0cf5c45567b03576523da9d4a9e02->leave($__internal_df28fc478d21fdbe7358b7855c1a9c0ed9d0cf5c45567b03576523da9d4a9e02_prof);

        
        $__internal_94bd477054db324dc54c34f7cb6194e5ea6ae973f95dc923bbf45875f0f3e887->leave($__internal_94bd477054db324dc54c34f7cb6194e5ea6ae973f95dc923bbf45875f0f3e887_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_605a2a03cac2b269f2cef258bad498e2e1582bef6a9002fd0f674e47d5691cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_605a2a03cac2b269f2cef258bad498e2e1582bef6a9002fd0f674e47d5691cbd->enter($__internal_605a2a03cac2b269f2cef258bad498e2e1582bef6a9002fd0f674e47d5691cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_63c3119c1cd5ade4aaff5d0acafcd9ac2784538e34aa23f4c2354e773c6d05af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c3119c1cd5ade4aaff5d0acafcd9ac2784538e34aa23f4c2354e773c6d05af->enter($__internal_63c3119c1cd5ade4aaff5d0acafcd9ac2784538e34aa23f4c2354e773c6d05af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-produit";
        
        $__internal_63c3119c1cd5ade4aaff5d0acafcd9ac2784538e34aa23f4c2354e773c6d05af->leave($__internal_63c3119c1cd5ade4aaff5d0acafcd9ac2784538e34aa23f4c2354e773c6d05af_prof);

        
        $__internal_605a2a03cac2b269f2cef258bad498e2e1582bef6a9002fd0f674e47d5691cbd->leave($__internal_605a2a03cac2b269f2cef258bad498e2e1582bef6a9002fd0f674e47d5691cbd_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_ce8640d6d01b73da6ae7cb900e9e37fc8e84f749688c6d7a6e4dbee24934ed1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8640d6d01b73da6ae7cb900e9e37fc8e84f749688c6d7a6e4dbee24934ed1f->enter($__internal_ce8640d6d01b73da6ae7cb900e9e37fc8e84f749688c6d7a6e4dbee24934ed1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_760a1b3d88869c6304d8b05a43cda947b2d4a63b9ae9e23823b40c1e2412cf8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760a1b3d88869c6304d8b05a43cda947b2d4a63b9ae9e23823b40c1e2412cf8c->enter($__internal_760a1b3d88869c6304d8b05a43cda947b2d4a63b9ae9e23823b40c1e2412cf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<div class=\"container\">
    <h1 style=\"font-family:Goudy; color:grey\"> Votre réservation a été prise en charge</h1>
    <h1>
</div>
";
        
        $__internal_760a1b3d88869c6304d8b05a43cda947b2d4a63b9ae9e23823b40c1e2412cf8c->leave($__internal_760a1b3d88869c6304d8b05a43cda947b2d4a63b9ae9e23823b40c1e2412cf8c_prof);

        
        $__internal_ce8640d6d01b73da6ae7cb900e9e37fc8e84f749688c6d7a6e4dbee24934ed1f->leave($__internal_ce8640d6d01b73da6ae7cb900e9e37fc8e84f749688c6d7a6e4dbee24934ed1f_prof);

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
