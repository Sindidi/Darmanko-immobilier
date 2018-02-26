<?php

/* SNTDarmankoBundle:admin:detailClient.html.twig */
class __TwigTemplate_3bb9e9d25f44262d8b6565be0d5b8d73622be7229408c8aab548ba5ec1b2d0b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTDarmankoBundle:admin:detailClient.html.twig", 1);
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
        $__internal_92f10c276c5bc6e0f38bd1ea91616f8bffa0c3506792b5c76a9323b070f021eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f10c276c5bc6e0f38bd1ea91616f8bffa0c3506792b5c76a9323b070f021eb->enter($__internal_92f10c276c5bc6e0f38bd1ea91616f8bffa0c3506792b5c76a9323b070f021eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:detailClient.html.twig"));

        $__internal_2de746304a86ffbbd8026a7b6de95a49e96add5ed7b2a292c9ee8d652460df0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de746304a86ffbbd8026a7b6de95a49e96add5ed7b2a292c9ee8d652460df0c->enter($__internal_2de746304a86ffbbd8026a7b6de95a49e96add5ed7b2a292c9ee8d652460df0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:detailClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92f10c276c5bc6e0f38bd1ea91616f8bffa0c3506792b5c76a9323b070f021eb->leave($__internal_92f10c276c5bc6e0f38bd1ea91616f8bffa0c3506792b5c76a9323b070f021eb_prof);

        
        $__internal_2de746304a86ffbbd8026a7b6de95a49e96add5ed7b2a292c9ee8d652460df0c->leave($__internal_2de746304a86ffbbd8026a7b6de95a49e96add5ed7b2a292c9ee8d652460df0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c33a5c22d14cfaba56cfacc95d47fba6922011ae4045c2dbc98bf5f79286d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c33a5c22d14cfaba56cfacc95d47fba6922011ae4045c2dbc98bf5f79286d4b->enter($__internal_7c33a5c22d14cfaba56cfacc95d47fba6922011ae4045c2dbc98bf5f79286d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87772b36d6b5bb5595f55c9514af98f621fabf5ef167a2b92ddeb77f898b68ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87772b36d6b5bb5595f55c9514af98f621fabf5ef167a2b92ddeb77f898b68ad->enter($__internal_87772b36d6b5bb5595f55c9514af98f621fabf5ef167a2b92ddeb77f898b68ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-location";
        
        $__internal_87772b36d6b5bb5595f55c9514af98f621fabf5ef167a2b92ddeb77f898b68ad->leave($__internal_87772b36d6b5bb5595f55c9514af98f621fabf5ef167a2b92ddeb77f898b68ad_prof);

        
        $__internal_7c33a5c22d14cfaba56cfacc95d47fba6922011ae4045c2dbc98bf5f79286d4b->leave($__internal_7c33a5c22d14cfaba56cfacc95d47fba6922011ae4045c2dbc98bf5f79286d4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_130d72a0fc31799ff72ee223c27db5a1eafee078ea7c9bdbbe8ad97ed50fcf56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_130d72a0fc31799ff72ee223c27db5a1eafee078ea7c9bdbbe8ad97ed50fcf56->enter($__internal_130d72a0fc31799ff72ee223c27db5a1eafee078ea7c9bdbbe8ad97ed50fcf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5b5a22ab6f2fcebfecb63e1e35f03983351c52d72f8f3953a9c2f2737581f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b5a22ab6f2fcebfecb63e1e35f03983351c52d72f8f3953a9c2f2737581f4d->enter($__internal_d5b5a22ab6f2fcebfecb63e1e35f03983351c52d72f8f3953a9c2f2737581f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

 <div class=\"container\">
      <h2 style=\"font-family:Goudy Old style; color:grey;margin-bottom:10px;\"><center><i>Espace location coté Administration </i></center></h2>
      <hr style=\"border:solid grey 1px ;\">
<div  class=\"row\" style=\"margin-bottom:50px;\">
<!-- -debut  card -->
<div class=\"col-lg-6\">


<div class=\"card\" style=\" height:400px;\">
    <div class=\"card-header\" style=\"background:lightgrey;opacity:0.5;\">
    <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i> Information Client</i></center></h4>
    </div>
    <div class=\"card-body\">
      

      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Nom du client  :</b> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "nomcomplet", array()), "html", null, true);
        echo "</p></i><br>
      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Numero piece : </b>  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "numPiece", array()), "html", null, true);
        echo "</p></i><br>
      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Adresse  : </b>  ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "adress", array()), "html", null, true);
        echo "</p></i><br>
      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Telephone  : </b>  ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "tel", array()), "html", null, true);
        echo "</p></i><br>
      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\" > <b>Email : </b> ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "email", array()), "html", null, true);
        echo "</p></i><br>


    </div>
 
</div>




</div>

<!---fin  card -->


<!---debut l'autre card -->


<div class=\"col-lg-6\">
<div class=\"card\" style=\" height:400px;\">
  <div class=\"card-header\" style=\"background:lightgrey;opacity:0.5\">
  <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>  Information Bien</i></center></h4>
  </div>
  <div class=\"card-body\">
    
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b> Nom du bien :</b> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "nomBien", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Type de bien : </b>  ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "type", array()), "libelle", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Localite : </b> ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "localite", array()), "libelle", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Description : </b>  ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "description", array()), "html", null, true);
        echo "</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Prix-Location : </b> ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "prixLocation", array()), "html", null, true);
        echo "</p></i><br>
  </div>
  
</div>


</div>


<!---fin  card -->
</div>

<!--------------------------------------------------------------------------------------------- -->

<div class=\"row\" style=\"margin-bottom:20px;\">

";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 73
            echo "<div class=\"col-lg-3\" style=\"border: solid 1px grey; opacity:0.8 ; margin-left:80px;\">
 <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
            echo "\" class=\"mx-sm-1\" style=\"width: 100%; margin:10px;\">
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "


</div> 

<div class=\"row\" style=\"margin-bottom:30px;\">
<div class=\"col-lg-4\" ></div>
<div class=\"col-lg-2\" >

<a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lister");
        echo "\"><button type=\"reset\" class=\"btn btn-primary\" style=\"width:150px;\">Retour</button>
</div>
<div class=\"col-lg-2\">
<a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dcontrat", array("bien" => $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "bien", array()), "id", array()), "client" => $this->getAttribute($this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "client", array()), "id", array()))), "html", null, true);
        echo "\"><button type=\"reset\" class=\"btn btn-primary\" style=\"width:150px;\">Valider</button></a>
<div class=\"col-lg-4\" ></div>
</div> 

<!------------------------------------------------------------------------------------------------>



      


      </div>





";
        
        $__internal_d5b5a22ab6f2fcebfecb63e1e35f03983351c52d72f8f3953a9c2f2737581f4d->leave($__internal_d5b5a22ab6f2fcebfecb63e1e35f03983351c52d72f8f3953a9c2f2737581f4d_prof);

        
        $__internal_130d72a0fc31799ff72ee223c27db5a1eafee078ea7c9bdbbe8ad97ed50fcf56->leave($__internal_130d72a0fc31799ff72ee223c27db5a1eafee078ea7c9bdbbe8ad97ed50fcf56_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:detailClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 89,  194 => 86,  183 => 77,  173 => 74,  170 => 73,  166 => 72,  147 => 56,  143 => 55,  139 => 54,  135 => 53,  131 => 52,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Détail-location{% endblock %}

{% block body %}


 <div class=\"container\">
      <h2 style=\"font-family:Goudy Old style; color:grey;margin-bottom:10px;\"><center><i>Espace location coté Administration </i></center></h2>
      <hr style=\"border:solid grey 1px ;\">
<div  class=\"row\" style=\"margin-bottom:50px;\">
<!-- -debut  card -->
<div class=\"col-lg-6\">


<div class=\"card\" style=\" height:400px;\">
    <div class=\"card-header\" style=\"background:lightgrey;opacity:0.5;\">
    <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i> Information Client</i></center></h4>
    </div>
    <div class=\"card-body\">
      

      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Nom du client  :</b> {{ reservations.client.nomcomplet }}</p></i><br>
      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Numero piece : </b>  {{  reservations.client.numPiece }}</p></i><br>
      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Adresse  : </b>  {{ reservations.client.adress }}</p></i><br>
      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Telephone  : </b>  {{ reservations.client.tel }}</p></i><br>
      <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\" > <b>Email : </b> {{  reservations.client.email}}</p></i><br>


    </div>
 
</div>




</div>

<!---fin  card -->


<!---debut l'autre card -->


<div class=\"col-lg-6\">
<div class=\"card\" style=\" height:400px;\">
  <div class=\"card-header\" style=\"background:lightgrey;opacity:0.5\">
  <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>  Information Bien</i></center></h4>
  </div>
  <div class=\"card-body\">
    
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b> Nom du bien :</b> {{ reservations.bien.nomBien }}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Type de bien : </b>  {{ reservations.bien.type.libelle }}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Localite : </b> {{reservations.bien.localite.libelle }}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Description : </b>  {{ reservations.bien.description}}</p></i><br>
    <i><p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <b>Prix-Location : </b> {{reservations.bien.prixLocation}}</p></i><br>
  </div>
  
</div>


</div>


<!---fin  card -->
</div>

<!--------------------------------------------------------------------------------------------- -->

<div class=\"row\" style=\"margin-bottom:20px;\">

{% for image in reservations.bien.images %}
<div class=\"col-lg-3\" style=\"border: solid 1px grey; opacity:0.8 ; margin-left:80px;\">
 <img src=\"{{ asset('image/')}}{{ image.image }}\" class=\"mx-sm-1\" style=\"width: 100%; margin:10px;\">
</div>
{% endfor %}



</div> 

<div class=\"row\" style=\"margin-bottom:30px;\">
<div class=\"col-lg-4\" ></div>
<div class=\"col-lg-2\" >

<a href=\"{{ path('lister') }}\"><button type=\"reset\" class=\"btn btn-primary\" style=\"width:150px;\">Retour</button>
</div>
<div class=\"col-lg-2\">
<a href=\"{{ path('dcontrat', {\"bien\": reservations.bien.id, \"client\": reservations.client.id}) }}\"><button type=\"reset\" class=\"btn btn-primary\" style=\"width:150px;\">Valider</button></a>
<div class=\"col-lg-4\" ></div>
</div> 

<!------------------------------------------------------------------------------------------------>



      


      </div>





{% endblock %}", "SNTDarmankoBundle:admin:detailClient.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/detailClient.html.twig");
    }
}
