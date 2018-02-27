<?php

/* SNTDarmankoBundle:admin:contrat.html.twig */
class __TwigTemplate_047fa47ace63b2d62b0f0c6022ace15c45b942591e848e089d74b09e9e9e9287 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTDarmankoBundle:admin:contrat.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c41278789ed6ba5980656e2591c6ba09523d4000b6ff287473b40f5b74bd9b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41278789ed6ba5980656e2591c6ba09523d4000b6ff287473b40f5b74bd9b06->enter($__internal_c41278789ed6ba5980656e2591c6ba09523d4000b6ff287473b40f5b74bd9b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:contrat.html.twig"));

        $__internal_4991c878e3d0a9b3fcaf7a97b45f85c65923ed94531f11acaf1a49abb7b4d9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4991c878e3d0a9b3fcaf7a97b45f85c65923ed94531f11acaf1a49abb7b4d9b5->enter($__internal_4991c878e3d0a9b3fcaf7a97b45f85c65923ed94531f11acaf1a49abb7b4d9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c41278789ed6ba5980656e2591c6ba09523d4000b6ff287473b40f5b74bd9b06->leave($__internal_c41278789ed6ba5980656e2591c6ba09523d4000b6ff287473b40f5b74bd9b06_prof);

        
        $__internal_4991c878e3d0a9b3fcaf7a97b45f85c65923ed94531f11acaf1a49abb7b4d9b5->leave($__internal_4991c878e3d0a9b3fcaf7a97b45f85c65923ed94531f11acaf1a49abb7b4d9b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_51002007e448861ee633e33850037d1fb1a090c4469d908d8b94748a20a456e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51002007e448861ee633e33850037d1fb1a090c4469d908d8b94748a20a456e3->enter($__internal_51002007e448861ee633e33850037d1fb1a090c4469d908d8b94748a20a456e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a766525805ab3f2c7333fddf5bb144db6e491874a1ec38e9d125685534ae4d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a766525805ab3f2c7333fddf5bb144db6e491874a1ec38e9d125685534ae4d4a->enter($__internal_a766525805ab3f2c7333fddf5bb144db6e491874a1ec38e9d125685534ae4d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a766525805ab3f2c7333fddf5bb144db6e491874a1ec38e9d125685534ae4d4a->leave($__internal_a766525805ab3f2c7333fddf5bb144db6e491874a1ec38e9d125685534ae4d4a_prof);

        
        $__internal_51002007e448861ee633e33850037d1fb1a090c4469d908d8b94748a20a456e3->leave($__internal_51002007e448861ee633e33850037d1fb1a090c4469d908d8b94748a20a456e3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6270ac3dc8e6668f118e51b73a7c3f5dad6a93eedeb3327267fae3210f69b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6270ac3dc8e6668f118e51b73a7c3f5dad6a93eedeb3327267fae3210f69b8d->enter($__internal_b6270ac3dc8e6668f118e51b73a7c3f5dad6a93eedeb3327267fae3210f69b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa43d655e01a611ef1d6b9787cbbe5377a8ae77f2ed68593fb604eabb9a92702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa43d655e01a611ef1d6b9787cbbe5377a8ae77f2ed68593fb604eabb9a92702->enter($__internal_fa43d655e01a611ef1d6b9787cbbe5377a8ae77f2ed68593fb604eabb9a92702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\" style=\"font-family:Goudy Old style; color:grey;\">
    <center>
        <h1 class=\"text-primary\"><i>DARMANKO IMMOBILIER</i></h1>
        <h3>Contrat de location</h3>
    </center>
    <br>
    <h3>Information du client</h3>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-4\"><B>Nom du client:</B></div> 
                <div class=\"col-4\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "nomComplet", array()), "html", null, true);
        echo "</div>
            </div>
            <p><B>Numéro de de pièce</B>: ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "numpiece", array()), "html", null, true);
        echo "</p>
            <p><B>Adresse</B>: ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "adress", array()), "html", null, true);
        echo "</p>
            <p><B>Adresse email</B>: ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "email", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <br>
    <h3>Information du bien</h3>
    <div class=\"card\">
        <div class=\"card-body\">
            <p><B>Nom du bien</B>: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "nomBien", array()), "html", null, true);
        echo "</p>
            <p><B>Type du bien</B>: ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "type", array()), "libelle", array()), "html", null, true);
        echo "</p>
            <p><B>Localité du bien</B>: ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "localite", array()), "libelle", array()), "html", null, true);
        echo "</p>
            <p><B>Prix location</B>: ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "prixlocation", array()), "html", null, true);
        echo "</p><br>
            <p><B>Description du bien</B>: ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "description", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <br>
    <h3>Détails du contrat</h3>
    <div class=\"card\">
        <div class=\"card-body\">
            <p><B>Caution</B>: ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "prixlocation", array()), "html", null, true);
        echo "</p></br>
            <p><B>Termes du contrat</B>: Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5</p>
        </div>
    </div>
</div>
";
        
        $__internal_fa43d655e01a611ef1d6b9787cbbe5377a8ae77f2ed68593fb604eabb9a92702->leave($__internal_fa43d655e01a611ef1d6b9787cbbe5377a8ae77f2ed68593fb604eabb9a92702_prof);

        
        $__internal_b6270ac3dc8e6668f118e51b73a7c3f5dad6a93eedeb3327267fae3210f69b8d->leave($__internal_b6270ac3dc8e6668f118e51b73a7c3f5dad6a93eedeb3327267fae3210f69b8d_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  93 => 21,  89 => 20,  85 => 19,  80 => 17,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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

{% block title %}{% endblock %}

{% block body %}
<div class=\"container\" style=\"font-family:Goudy Old style; color:grey;\">
    <center>
        <h1 class=\"text-primary\"><i>DARMANKO IMMOBILIER</i></h1>
        <h3>Contrat de location</h3>
    </center>
    <br>
    <h3>Information du client</h3>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-4\"><B>Nom du client:</B></div> 
                <div class=\"col-4\">{{ reservation.client.nomComplet }}</div>
            </div>
            <p><B>Numéro de de pièce</B>: {{ reservation.client.numpiece }}</p>
            <p><B>Adresse</B>: {{ reservation.client.adress }}</p>
            <p><B>Adresse email</B>: {{ reservation.client.email }}</p>
        </div>
    </div>
    <br>
    <h3>Information du bien</h3>
    <div class=\"card\">
        <div class=\"card-body\">
            <p><B>Nom du bien</B>: {{ reservation.bien.nomBien }}</p>
            <p><B>Type du bien</B>: {{ reservation.bien.type.libelle }}</p>
            <p><B>Localité du bien</B>: {{ reservation.bien.localite.libelle }}</p>
            <p><B>Prix location</B>: {{ reservation.bien.prixlocation }}</p><br>
            <p><B>Description du bien</B>: {{ reservation.bien.description }}</p>
        </div>
    </div>
    <br>
    <h3>Détails du contrat</h3>
    <div class=\"card\">
        <div class=\"card-body\">
            <p><B>Caution</B>: {{ reservation.bien.prixlocation }}</p></br>
            <p><B>Termes du contrat</B>: Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5</p>
        </div>
    </div>
</div>
{% endblock %}
", "SNTDarmankoBundle:admin:contrat.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/contrat.html.twig");
    }
}
