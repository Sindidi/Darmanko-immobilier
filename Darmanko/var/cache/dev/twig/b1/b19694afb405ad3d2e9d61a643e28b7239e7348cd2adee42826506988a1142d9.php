<?php

/* SNTDarmankoBundle:admin:dcontrat.html.twig */
class __TwigTemplate_f09d0d2d9eed6e573648c5430e4e4e2823a869e2e407543f06ee8ca4c71acade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::reservation.html.twig", "SNTDarmankoBundle:admin:dcontrat.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::reservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86119a79a402eb7ad4f9192b2f75a99878c48938a2abfb351f01734b122d5e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86119a79a402eb7ad4f9192b2f75a99878c48938a2abfb351f01734b122d5e1a->enter($__internal_86119a79a402eb7ad4f9192b2f75a99878c48938a2abfb351f01734b122d5e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:dcontrat.html.twig"));

        $__internal_f84c9cb085ff490bcfc96adbaffa4880d89ac062978cd48287bad08653b0747c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84c9cb085ff490bcfc96adbaffa4880d89ac062978cd48287bad08653b0747c->enter($__internal_f84c9cb085ff490bcfc96adbaffa4880d89ac062978cd48287bad08653b0747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:dcontrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86119a79a402eb7ad4f9192b2f75a99878c48938a2abfb351f01734b122d5e1a->leave($__internal_86119a79a402eb7ad4f9192b2f75a99878c48938a2abfb351f01734b122d5e1a_prof);

        
        $__internal_f84c9cb085ff490bcfc96adbaffa4880d89ac062978cd48287bad08653b0747c->leave($__internal_f84c9cb085ff490bcfc96adbaffa4880d89ac062978cd48287bad08653b0747c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_683ebebb6b1add00793b98c8d5c7098ebe26fed31e265fe2b803a1c064dea8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683ebebb6b1add00793b98c8d5c7098ebe26fed31e265fe2b803a1c064dea8ff->enter($__internal_683ebebb6b1add00793b98c8d5c7098ebe26fed31e265fe2b803a1c064dea8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_311f17dfa519e4c119d674abc94d2254d284e1326d7570d1f4a0bca8da3c02de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311f17dfa519e4c119d674abc94d2254d284e1326d7570d1f4a0bca8da3c02de->enter($__internal_311f17dfa519e4c119d674abc94d2254d284e1326d7570d1f4a0bca8da3c02de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_311f17dfa519e4c119d674abc94d2254d284e1326d7570d1f4a0bca8da3c02de->leave($__internal_311f17dfa519e4c119d674abc94d2254d284e1326d7570d1f4a0bca8da3c02de_prof);

        
        $__internal_683ebebb6b1add00793b98c8d5c7098ebe26fed31e265fe2b803a1c064dea8ff->leave($__internal_683ebebb6b1add00793b98c8d5c7098ebe26fed31e265fe2b803a1c064dea8ff_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_83fed175302372fe5ff7d965a6075f65b25ff146ff86e32ccd4a93c5a5eba367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83fed175302372fe5ff7d965a6075f65b25ff146ff86e32ccd4a93c5a5eba367->enter($__internal_83fed175302372fe5ff7d965a6075f65b25ff146ff86e32ccd4a93c5a5eba367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d984e5757db0b82c76031e466eadbc6ad41bdeaba6a4bfbb800d85fe8680bb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d984e5757db0b82c76031e466eadbc6ad41bdeaba6a4bfbb800d85fe8680bb5c->enter($__internal_d984e5757db0b82c76031e466eadbc6ad41bdeaba6a4bfbb800d85fe8680bb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<br>

<div class=\"row col-lg-12\">


<div class=\"card col-lg-4\">
     <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
      <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Client</i></center></h4>
      </div>
          <div class=\"card-body\" style=\"font-family:Goudy Old style; color:grey;\"> 
           <p class=\"card-text\"><h2>Information du client:</h2></p>
           <p><B>Numero de pièce: </B><span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "numpiece", array()), "html", null, true);
        echo "</span></p>
           <p><B>Nom du client: </B><span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nomcomplet", array()), "html", null, true);
        echo "</span></p>
           <p><B>Téléphone: </B><span>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "tel", array()), "html", null, true);
        echo "</span></p>
           <p><B>Addresse du client: </B>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "adress", array()), "html", null, true);
        echo " </p>
           <p><B>Email: </B><span>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</span></p>
      </div>
 </div>  
<br>

 <div class=\"card col-lg-4\">
              <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
               <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Bien</i></center></h4>
             </div>
                <div class=\"card-body\" style=\"font-family:Goudy Old style; color:grey;\"> 
                <img class=\"card-img-top\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\" style=\"height: 200px;width: 350px\"> 
                <p class=\"card-text\"> <h2>Informations du bien </h2></p>
                <p><B>Nom du bien:</B> <span> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "nomBien", array()), "html", null, true);
        echo "</span> </p>
                <p><B>Description:</B> <span> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "description", array()), "html", null, true);
        echo "</span></p>
                <p><B>Prixlocation:</B> <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "prixLocation", array()), "html", null, true);
        echo "</span></p>
                <br>
            </div>
           </div>
<br>

<div class=\"card col-lg-4\">
              <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
               <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Contrat</i></center></h4>
             </div>
                <div class=\"card-body\"  style=\"font-family:Goudy Old style; color:grey;\">
      
                <h2><center>Termes du contrat</center></h2>
                <br>
                
                  <p class=\"card-text\"><span class=\"row text-uppercase\">A prendre en compte:</span><i> </br>Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5 </i>
                  <center>
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"radio\" id=\"accepter\" value=\"\">
                    <label  class=\"form-check-label\" style=\"text-dark\">Accepter</label>
                  </center>
                    <br>
                  <div class=\"row\" style=\"margin-left: 100px;margin-top: 0px\">
                  <button type=\"button\" id=\"enregistrer\" class=\"btn btn-secondary\" style=\"display: none;\">Enregistrer</button>
                  </div>

                </div>
           </div>
<br>


 ";
        
        $__internal_d984e5757db0b82c76031e466eadbc6ad41bdeaba6a4bfbb800d85fe8680bb5c->leave($__internal_d984e5757db0b82c76031e466eadbc6ad41bdeaba6a4bfbb800d85fe8680bb5c_prof);

        
        $__internal_83fed175302372fe5ff7d965a6075f65b25ff146ff86e32ccd4a93c5a5eba367->leave($__internal_83fed175302372fe5ff7d965a6075f65b25ff146ff86e32ccd4a93c5a5eba367_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1c491b619014084c1a31d4bb18cacf46e8f61782584bcc5522d87cf9074ebfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c491b619014084c1a31d4bb18cacf46e8f61782584bcc5522d87cf9074ebfe->enter($__internal_f1c491b619014084c1a31d4bb18cacf46e8f61782584bcc5522d87cf9074ebfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e65746cad7b086d5cc29bdb4bd663feada2d3d0e04988a1ca87dd917798de4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65746cad7b086d5cc29bdb4bd663feada2d3d0e04988a1ca87dd917798de4c1->enter($__internal_e65746cad7b086d5cc29bdb4bd663feada2d3d0e04988a1ca87dd917798de4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script>
\$(function(){
  \$(\"#accepter\").on(\"click\", function(){
    \$(\"#enregistrer\").slideToggle('slow');
  })
})
</script>
";
        
        $__internal_e65746cad7b086d5cc29bdb4bd663feada2d3d0e04988a1ca87dd917798de4c1->leave($__internal_e65746cad7b086d5cc29bdb4bd663feada2d3d0e04988a1ca87dd917798de4c1_prof);

        
        $__internal_f1c491b619014084c1a31d4bb18cacf46e8f61782584bcc5522d87cf9074ebfe->leave($__internal_f1c491b619014084c1a31d4bb18cacf46e8f61782584bcc5522d87cf9074ebfe_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:dcontrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 68,  166 => 67,  125 => 36,  121 => 35,  117 => 34,  111 => 32,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block title %}{% endblock %}

{% block content %}

<br>

<div class=\"row col-lg-12\">


<div class=\"card col-lg-4\">
     <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
      <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Client</i></center></h4>
      </div>
          <div class=\"card-body\" style=\"font-family:Goudy Old style; color:grey;\"> 
           <p class=\"card-text\"><h2>Information du client:</h2></p>
           <p><B>Numero de pièce: </B><span>{{client.numpiece}}</span></p>
           <p><B>Nom du client: </B><span>{{client.nomcomplet}}</span></p>
           <p><B>Téléphone: </B><span>{{client.tel}}</span></p>
           <p><B>Addresse du client: </B>{{client.adress}} </p>
           <p><B>Email: </B><span>{{client.email}}</span></p>
      </div>
 </div>  
<br>

 <div class=\"card col-lg-4\">
              <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
               <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Bien</i></center></h4>
             </div>
                <div class=\"card-body\" style=\"font-family:Goudy Old style; color:grey;\"> 
                <img class=\"card-img-top\" src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Card image cap\" style=\"height: 200px;width: 350px\"> 
                <p class=\"card-text\"> <h2>Informations du bien </h2></p>
                <p><B>Nom du bien:</B> <span> {{bien.nomBien}}</span> </p>
                <p><B>Description:</B> <span> {{bien.description}}</span></p>
                <p><B>Prixlocation:</B> <span>{{bien.prixLocation}}</span></p>
                <br>
            </div>
           </div>
<br>

<div class=\"card col-lg-4\">
              <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
               <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Contrat</i></center></h4>
             </div>
                <div class=\"card-body\"  style=\"font-family:Goudy Old style; color:grey;\">
      
                <h2><center>Termes du contrat</center></h2>
                <br>
                
                  <p class=\"card-text\"><span class=\"row text-uppercase\">A prendre en compte:</span><i> </br>Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5 </i>
                  <center>
                    <input class=\"form-check-input\" type=\"checkbox\" name=\"radio\" id=\"accepter\" value=\"\">
                    <label  class=\"form-check-label\" style=\"text-dark\">Accepter</label>
                  </center>
                    <br>
                  <div class=\"row\" style=\"margin-left: 100px;margin-top: 0px\">
                  <button type=\"button\" id=\"enregistrer\" class=\"btn btn-secondary\" style=\"display: none;\">Enregistrer</button>
                  </div>

                </div>
           </div>
<br>


 {% endblock %}
{% block javascripts %}
<script src=\"{{asset('js/jquery.js')}}\"></script>
<script>
\$(function(){
  \$(\"#accepter\").on(\"click\", function(){
    \$(\"#enregistrer\").slideToggle('slow');
  })
})
</script>
{% endblock %}
", "SNTDarmankoBundle:admin:dcontrat.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/dcontrat.html.twig");
    }
}
