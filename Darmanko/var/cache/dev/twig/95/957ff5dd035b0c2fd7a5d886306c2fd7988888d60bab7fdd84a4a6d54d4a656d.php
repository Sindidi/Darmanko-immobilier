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
        $__internal_92ecf0e8ff62d84532c20d7ef3e40cf56266861b3393a90d3c99b983df26aade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ecf0e8ff62d84532c20d7ef3e40cf56266861b3393a90d3c99b983df26aade->enter($__internal_92ecf0e8ff62d84532c20d7ef3e40cf56266861b3393a90d3c99b983df26aade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:detailClient.html.twig"));

        $__internal_ecb18d00b33fd41f1b67319d6747cc769fc7eb2ee6d6f8cdecd7689e51687e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb18d00b33fd41f1b67319d6747cc769fc7eb2ee6d6f8cdecd7689e51687e1a->enter($__internal_ecb18d00b33fd41f1b67319d6747cc769fc7eb2ee6d6f8cdecd7689e51687e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:detailClient.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ecf0e8ff62d84532c20d7ef3e40cf56266861b3393a90d3c99b983df26aade->leave($__internal_92ecf0e8ff62d84532c20d7ef3e40cf56266861b3393a90d3c99b983df26aade_prof);

        
        $__internal_ecb18d00b33fd41f1b67319d6747cc769fc7eb2ee6d6f8cdecd7689e51687e1a->leave($__internal_ecb18d00b33fd41f1b67319d6747cc769fc7eb2ee6d6f8cdecd7689e51687e1a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3e03cb52bed9ee203715fe9619da8d19cfd3dd5258464f69405a765ff3c0199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e03cb52bed9ee203715fe9619da8d19cfd3dd5258464f69405a765ff3c0199->enter($__internal_b3e03cb52bed9ee203715fe9619da8d19cfd3dd5258464f69405a765ff3c0199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b7774c9f80997d588277718d2c61f1159e907d2394f9461a578482393730c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7774c9f80997d588277718d2c61f1159e907d2394f9461a578482393730c12->enter($__internal_8b7774c9f80997d588277718d2c61f1159e907d2394f9461a578482393730c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-location";
        
        $__internal_8b7774c9f80997d588277718d2c61f1159e907d2394f9461a578482393730c12->leave($__internal_8b7774c9f80997d588277718d2c61f1159e907d2394f9461a578482393730c12_prof);

        
        $__internal_b3e03cb52bed9ee203715fe9619da8d19cfd3dd5258464f69405a765ff3c0199->leave($__internal_b3e03cb52bed9ee203715fe9619da8d19cfd3dd5258464f69405a765ff3c0199_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6edae26dc70d83aeffd3a97d42d9850f90948303c5298bd5e6ff31d7ce870d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edae26dc70d83aeffd3a97d42d9850f90948303c5298bd5e6ff31d7ce870d33->enter($__internal_6edae26dc70d83aeffd3a97d42d9850f90948303c5298bd5e6ff31d7ce870d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_583515b93d285efd20e92f77a3e9f6633e523be0901fd803ca05aeb91ffa1b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583515b93d285efd20e92f77a3e9f6633e523be0901fd803ca05aeb91ffa1b40->enter($__internal_583515b93d285efd20e92f77a3e9f6633e523be0901fd803ca05aeb91ffa1b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dcontrat", array("id" => $this->getAttribute(($context["reservations"] ?? $this->getContext($context, "reservations")), "id", array()))), "html", null, true);
        echo "\"><button type=\"reset\" class=\"btn btn-primary\" style=\"width:150px;\">Valider</button></a>
<div class=\"col-lg-4\" ></div>
</div> 

<!------------------------------------------------------------------------------------------------>



      


      </div>





";
        
        $__internal_583515b93d285efd20e92f77a3e9f6633e523be0901fd803ca05aeb91ffa1b40->leave($__internal_583515b93d285efd20e92f77a3e9f6633e523be0901fd803ca05aeb91ffa1b40_prof);

        
        $__internal_6edae26dc70d83aeffd3a97d42d9850f90948303c5298bd5e6ff31d7ce870d33->leave($__internal_6edae26dc70d83aeffd3a97d42d9850f90948303c5298bd5e6ff31d7ce870d33_prof);

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
<a href=\"{{ path('dcontrat', {\"id\": reservations.id}) }}\"><button type=\"reset\" class=\"btn btn-primary\" style=\"width:150px;\">Valider</button></a>
<div class=\"col-lg-4\" ></div>
</div> 

<!------------------------------------------------------------------------------------------------>



      


      </div>





{% endblock %}", "SNTDarmankoBundle:admin:detailClient.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/detailClient.html.twig");
    }
}
