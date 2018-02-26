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
        $__internal_f1dafc22827d1dd1dfdeaad9c99cf1705787f0e591f8ef1fc99e516c520b777d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1dafc22827d1dd1dfdeaad9c99cf1705787f0e591f8ef1fc99e516c520b777d->enter($__internal_f1dafc22827d1dd1dfdeaad9c99cf1705787f0e591f8ef1fc99e516c520b777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:dcontrat.html.twig"));

        $__internal_1d8b29c73380ffdf96580d7edea882060038d9df1515053b5efa49b58aff7f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8b29c73380ffdf96580d7edea882060038d9df1515053b5efa49b58aff7f55->enter($__internal_1d8b29c73380ffdf96580d7edea882060038d9df1515053b5efa49b58aff7f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:dcontrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1dafc22827d1dd1dfdeaad9c99cf1705787f0e591f8ef1fc99e516c520b777d->leave($__internal_f1dafc22827d1dd1dfdeaad9c99cf1705787f0e591f8ef1fc99e516c520b777d_prof);

        
        $__internal_1d8b29c73380ffdf96580d7edea882060038d9df1515053b5efa49b58aff7f55->leave($__internal_1d8b29c73380ffdf96580d7edea882060038d9df1515053b5efa49b58aff7f55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f1f433fd0c2072e0319baf55bb11d7324fc1f9a8048f66903f841a36382d4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1f433fd0c2072e0319baf55bb11d7324fc1f9a8048f66903f841a36382d4c8->enter($__internal_6f1f433fd0c2072e0319baf55bb11d7324fc1f9a8048f66903f841a36382d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07d066eeccef2306e657d775c28707c0c9b64f341d995de48667b0c5b8297d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d066eeccef2306e657d775c28707c0c9b64f341d995de48667b0c5b8297d3e->enter($__internal_07d066eeccef2306e657d775c28707c0c9b64f341d995de48667b0c5b8297d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_07d066eeccef2306e657d775c28707c0c9b64f341d995de48667b0c5b8297d3e->leave($__internal_07d066eeccef2306e657d775c28707c0c9b64f341d995de48667b0c5b8297d3e_prof);

        
        $__internal_6f1f433fd0c2072e0319baf55bb11d7324fc1f9a8048f66903f841a36382d4c8->leave($__internal_6f1f433fd0c2072e0319baf55bb11d7324fc1f9a8048f66903f841a36382d4c8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_259321485628c1d8c9e5dd24f75b51d2d970bce3b62fb943d48ffe0d3d0363f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259321485628c1d8c9e5dd24f75b51d2d970bce3b62fb943d48ffe0d3d0363f7->enter($__internal_259321485628c1d8c9e5dd24f75b51d2d970bce3b62fb943d48ffe0d3d0363f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2693c0972cc48188014b029c8a4a56b7e344ec4e826e779e95d1e226552f0fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2693c0972cc48188014b029c8a4a56b7e344ec4e826e779e95d1e226552f0fa0->enter($__internal_2693c0972cc48188014b029c8a4a56b7e344ec4e826e779e95d1e226552f0fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
<br>

<div class=\"row col-lg-12\">


<div class=\"card col-lg-4\">
     <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
      <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Client</i></center></h4>
      </div>
          <div class=\"card-body\"> 
           <p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Information du client: </br> id: <span>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "id", array()), "html", null, true);
        echo "</span> </br> numpiece: <span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "numpiece", array()), "html", null, true);
        echo "</span>
           </br>nomcomplet:<span>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "nomcomplet", array()), "html", null, true);
        echo "</span> </br> tel:<span>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "tel", array()), "html", null, true);
        echo "</span> </br> address:";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "adress", array()), "html", null, true);
        echo " 
           </br> Email:<span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "email", array()), "html", null, true);
        echo "</span></p><br>
      </div>
 </div>  
<br>

 <div class=\"card col-lg-4\">
              <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
               <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Bien</i></center></h4>
             </div>
                <div class=\"card-body\"> 
                <img class=\"card-img-top\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"Card image cap\" style=\"height: 200px;width: 350px\"> 
                <p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <span class=\"row text-uppercase \">Informations détaillées du bien :</span> </br> <B>Bien:</B> <span> </br>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "nomBien", array()), "html", null, true);
        echo "</span> 
                </br> <B>Description:</B> <span></br>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "description", array()), "html", null, true);
        echo "</span> </br> <B>Prixlocation:</B> <span>";
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
                <div class=\"card-body\">
      
                <button type=\"button\" class=\"btn btn-default\">Termes du contrat</button>
                <br>
                  <br>
                  <input class=\"form-check-input\" type=\"radio\" name=\"radio\" id=\"accepter  \" value=\"\">
                  <label class=\"form-check-label\" style=\"text-dark\">Accepter</label>
                  <br>
                  <input class=\"form-check-input\" type=\"radio\" name=\"radio\" id=\"accepter  \" value=\"\">
                  <label class=\"form-check-label\" style=\"text-dark\">Refuser</label>
                  </br></br>

                
                  <p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"><span class=\"row text-uppercase\">A prendre en compte:</span><i> </br>Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5 </i></p><br>
               

                  <div class=\"row\" style=\"margin-left: 100px;margin-top: 0px\">
                  <button type=\"button\" id=\"enregistrer\" class=\"btn btn-default\">Envoyer</button>
                  <button type=\"button\" id=\"enregistrer\" class=\"btn btn-default\" style=\"margin-left: 20px;\">Annuler</button>
                  </div>

                </div>
           </div>
<br>


 ";
        
        $__internal_2693c0972cc48188014b029c8a4a56b7e344ec4e826e779e95d1e226552f0fa0->leave($__internal_2693c0972cc48188014b029c8a4a56b7e344ec4e826e779e95d1e226552f0fa0_prof);

        
        $__internal_259321485628c1d8c9e5dd24f75b51d2d970bce3b62fb943d48ffe0d3d0363f7->leave($__internal_259321485628c1d8c9e5dd24f75b51d2d970bce3b62fb943d48ffe0d3d0363f7_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70ee88b513006b03cf772a39a33148d9e8c0e0f493825c4a575f25375992147c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ee88b513006b03cf772a39a33148d9e8c0e0f493825c4a575f25375992147c->enter($__internal_70ee88b513006b03cf772a39a33148d9e8c0e0f493825c4a575f25375992147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2106dcf42aa15b336db5369b53005edf356755e5fc3bdb2079bf46f49541b1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2106dcf42aa15b336db5369b53005edf356755e5fc3bdb2079bf46f49541b1fd->enter($__internal_2106dcf42aa15b336db5369b53005edf356755e5fc3bdb2079bf46f49541b1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scriptAccueil.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2106dcf42aa15b336db5369b53005edf356755e5fc3bdb2079bf46f49541b1fd->leave($__internal_2106dcf42aa15b336db5369b53005edf356755e5fc3bdb2079bf46f49541b1fd_prof);

        
        $__internal_70ee88b513006b03cf772a39a33148d9e8c0e0f493825c4a575f25375992147c->leave($__internal_70ee88b513006b03cf772a39a33148d9e8c0e0f493825c4a575f25375992147c_prof);

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
        return array (  180 => 70,  175 => 69,  166 => 68,  117 => 31,  113 => 30,  108 => 29,  95 => 19,  87 => 18,  81 => 17,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
          <div class=\"card-body\"> 
           <p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\">Information du client: </br> id: <span>{{client.id}}</span> </br> numpiece: <span>{{client.numpiece}}</span>
           </br>nomcomplet:<span>{{client.nomcomplet}}</span> </br> tel:<span>{{client.tel}}</span> </br> address:{{client.adress}} 
           </br> Email:<span>{{client.email}}</span></p><br>
      </div>
 </div>  
<br>

 <div class=\"card col-lg-4\">
              <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
               <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Bien</i></center></h4>
             </div>
                <div class=\"card-body\"> 
                <img class=\"card-img-top\" src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Card image cap\" style=\"height: 200px;width: 350px\"> 
                <p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"> <span class=\"row text-uppercase \">Informations détaillées du bien :</span> </br> <B>Bien:</B> <span> </br>{{bien.nomBien}}</span> 
                </br> <B>Description:</B> <span></br>{{bien.description}}</span> </br> <B>Prixlocation:</B> <span>{{bien.prixLocation}}</span></p>
                <br>
            </div>
           </div>
<br>

<div class=\"card col-lg-4\">
              <div class=\"card-header\" style=\"background:lightgrey;opacity:1\">
               <h4 style=\"font-family:Goudy Old style; color:black;\"><center><i>Contrat</i></center></h4>
             </div>
                <div class=\"card-body\">
      
                <button type=\"button\" class=\"btn btn-default\">Termes du contrat</button>
                <br>
                  <br>
                  <input class=\"form-check-input\" type=\"radio\" name=\"radio\" id=\"accepter  \" value=\"\">
                  <label class=\"form-check-label\" style=\"text-dark\">Accepter</label>
                  <br>
                  <input class=\"form-check-input\" type=\"radio\" name=\"radio\" id=\"accepter  \" value=\"\">
                  <label class=\"form-check-label\" style=\"text-dark\">Refuser</label>
                  </br></br>

                
                  <p class=\"card-text\" style=\"font-family:Goudy Old style; color:grey;\"><span class=\"row text-uppercase\">A prendre en compte:</span><i> </br>Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5 </i></p><br>
               

                  <div class=\"row\" style=\"margin-left: 100px;margin-top: 0px\">
                  <button type=\"button\" id=\"enregistrer\" class=\"btn btn-default\">Envoyer</button>
                  <button type=\"button\" id=\"enregistrer\" class=\"btn btn-default\" style=\"margin-left: 20px;\">Annuler</button>
                  </div>

                </div>
           </div>
<br>


 {% endblock %}
{% block javascripts %}
<script src=\"{{asset('js/jquery.js')}}\"></script>
<script src=\"{{asset('js/scriptAccueil.js')}}\"></script>
{% endblock %}
", "SNTDarmankoBundle:admin:dcontrat.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/dcontrat.html.twig");
    }
}
