<?php

/* SNTDarmankoBundle:admin:AfficherContrat.html.twig */
class __TwigTemplate_453fc7b629c2bcf8dd50bbfb4da29c7b15fab42cc4f2838d93ecdf30bb5435b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTDarmankoBundle:admin:AfficherContrat.html.twig", 1);
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
        $__internal_b30bcb93cac42ab34800aea66d94516aa26a5eb26824dd1c1f6d0f5ef4ede17d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b30bcb93cac42ab34800aea66d94516aa26a5eb26824dd1c1f6d0f5ef4ede17d->enter($__internal_b30bcb93cac42ab34800aea66d94516aa26a5eb26824dd1c1f6d0f5ef4ede17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:AfficherContrat.html.twig"));

        $__internal_937b49b69405a38a06b644924ae52e7efb21497890fb5a11cd61f957484c5cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937b49b69405a38a06b644924ae52e7efb21497890fb5a11cd61f957484c5cbf->enter($__internal_937b49b69405a38a06b644924ae52e7efb21497890fb5a11cd61f957484c5cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:AfficherContrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b30bcb93cac42ab34800aea66d94516aa26a5eb26824dd1c1f6d0f5ef4ede17d->leave($__internal_b30bcb93cac42ab34800aea66d94516aa26a5eb26824dd1c1f6d0f5ef4ede17d_prof);

        
        $__internal_937b49b69405a38a06b644924ae52e7efb21497890fb5a11cd61f957484c5cbf->leave($__internal_937b49b69405a38a06b644924ae52e7efb21497890fb5a11cd61f957484c5cbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6d02a6c6f21d2d99d639c1aee0c9c87d286508724d6bc74f01afa470b4ae648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d02a6c6f21d2d99d639c1aee0c9c87d286508724d6bc74f01afa470b4ae648->enter($__internal_f6d02a6c6f21d2d99d639c1aee0c9c87d286508724d6bc74f01afa470b4ae648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a842ea48251eb9e1add46521a19b21915990057664e798896812f91b98324233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a842ea48251eb9e1add46521a19b21915990057664e798896812f91b98324233->enter($__internal_a842ea48251eb9e1add46521a19b21915990057664e798896812f91b98324233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a842ea48251eb9e1add46521a19b21915990057664e798896812f91b98324233->leave($__internal_a842ea48251eb9e1add46521a19b21915990057664e798896812f91b98324233_prof);

        
        $__internal_f6d02a6c6f21d2d99d639c1aee0c9c87d286508724d6bc74f01afa470b4ae648->leave($__internal_f6d02a6c6f21d2d99d639c1aee0c9c87d286508724d6bc74f01afa470b4ae648_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e85b1945c876848a1babd38c5001cc39a4befdb028c4818e1b799e0f2a0d1f5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85b1945c876848a1babd38c5001cc39a4befdb028c4818e1b799e0f2a0d1f5a->enter($__internal_e85b1945c876848a1babd38c5001cc39a4befdb028c4818e1b799e0f2a0d1f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56473f082eae9e438a8fb14cd73ca96ffb269e7679a53fe142201e45dee3a156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56473f082eae9e438a8fb14cd73ca96ffb269e7679a53fe142201e45dee3a156->enter($__internal_56473f082eae9e438a8fb14cd73ca96ffb269e7679a53fe142201e45dee3a156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
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
                <div class=\"col-4\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "nomComplet", array()), "html", null, true);
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-4\"><B>Numéro de de pièce</B>:</div>
                <div class=\"col-4\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "numpiece", array()), "html", null, true);
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-4\"><B>Adresse</B>:</div>
                <div class=\"col-4\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "adress", array()), "html", null, true);
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-4\"><B>Adresse email</B>:</div>
                <div class=\"col-4\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "client", array()), "email", array()), "html", null, true);
        echo "</div>
            </div>
          </div>
    </div>
    <br>
    <h3>Information du bien</h3>
    <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-4\"><B>Nom du bien</B>:</div>
            <div class=\"col-4\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "nomBien", array()), "html", null, true);
        echo "</div>
          </div>
          <div class=\"row\">
            <div class=\"col-4\"><B>Type du bien</B>:</div>
            <div class=\"col-4\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "type", array()), "libelle", array()), "html", null, true);
        echo "</div>
          </div>
          <div class=\"row\">
            <div class=\"col-4\"><B>Localité du bien</B>:</div>
            <div class=\"col-4\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "localite", array()), "libelle", array()), "html", null, true);
        echo "</div>
          </div>
          <div class=\"row\">
            <div class=\"col-4\"><B>Prix location</B>:</div>
            <div class=\"col-4\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "prixlocation", array()), "html", null, true);
        echo "</div>
          </div><br>
            <p><B>Description du bien</B>: ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "description", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    <br>
    <h3>Détails du contrat</h3>
    <div class=\"card\">
        <div class=\"card-body\">
            <p><B>Caution</B>: ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "bien", array()), "prixlocation", array()), "html", null, true);
        echo "</p></br>
            <p><B>Termes du contrat</B>: Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5</p>
        </div>
    </div>
</div>

<div style=\"text-align:center\">
    <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contrat", array("id" => $this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">Télécharger le contrat</a>
    <br><br>
</div>
";
        
        $__internal_56473f082eae9e438a8fb14cd73ca96ffb269e7679a53fe142201e45dee3a156->leave($__internal_56473f082eae9e438a8fb14cd73ca96ffb269e7679a53fe142201e45dee3a156_prof);

        
        $__internal_e85b1945c876848a1babd38c5001cc39a4befdb028c4818e1b799e0f2a0d1f5a->leave($__internal_e85b1945c876848a1babd38c5001cc39a4befdb028c4818e1b799e0f2a0d1f5a_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:AfficherContrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 68,  151 => 61,  141 => 54,  136 => 52,  129 => 48,  122 => 44,  115 => 40,  102 => 30,  95 => 26,  88 => 22,  81 => 18,  67 => 6,  58 => 5,  41 => 3,  11 => 1,);
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
            <div class=\"row\">
                <div class=\"col-4\"><B>Numéro de de pièce</B>:</div>
                <div class=\"col-4\">{{ reservation.client.numpiece }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-4\"><B>Adresse</B>:</div>
                <div class=\"col-4\">{{ reservation.client.adress }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-4\"><B>Adresse email</B>:</div>
                <div class=\"col-4\">{{ reservation.client.email }}</div>
            </div>
          </div>
    </div>
    <br>
    <h3>Information du bien</h3>
    <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col-4\"><B>Nom du bien</B>:</div>
            <div class=\"col-4\">{{ reservation.bien.nomBien }}</div>
          </div>
          <div class=\"row\">
            <div class=\"col-4\"><B>Type du bien</B>:</div>
            <div class=\"col-4\">{{ reservation.bien.type.libelle }}</div>
          </div>
          <div class=\"row\">
            <div class=\"col-4\"><B>Localité du bien</B>:</div>
            <div class=\"col-4\">{{ reservation.bien.localite.libelle }}</div>
          </div>
          <div class=\"row\">
            <div class=\"col-4\"><B>Prix location</B>:</div>
            <div class=\"col-4\">{{ reservation.bien.prixlocation }}</div>
          </div><br>
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

<div style=\"text-align:center\">
    <a href=\"{{path('contrat', {\"id\": reservation.id})}}\">Télécharger le contrat</a>
    <br><br>
</div>
{% endblock %}
", "SNTDarmankoBundle:admin:AfficherContrat.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/AfficherContrat.html.twig");
    }
}
