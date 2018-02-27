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
        $__internal_10763c4b33b3c49c1d415459c8af166e5312a9e6fbdb1d2c60fb6df2b3b5a7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10763c4b33b3c49c1d415459c8af166e5312a9e6fbdb1d2c60fb6df2b3b5a7df->enter($__internal_10763c4b33b3c49c1d415459c8af166e5312a9e6fbdb1d2c60fb6df2b3b5a7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:dcontrat.html.twig"));

        $__internal_2882f5e4cd95734685857b4dcc64baf09d183ce94f1753c81bd58b7f45d525f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2882f5e4cd95734685857b4dcc64baf09d183ce94f1753c81bd58b7f45d525f6->enter($__internal_2882f5e4cd95734685857b4dcc64baf09d183ce94f1753c81bd58b7f45d525f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:dcontrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10763c4b33b3c49c1d415459c8af166e5312a9e6fbdb1d2c60fb6df2b3b5a7df->leave($__internal_10763c4b33b3c49c1d415459c8af166e5312a9e6fbdb1d2c60fb6df2b3b5a7df_prof);

        
        $__internal_2882f5e4cd95734685857b4dcc64baf09d183ce94f1753c81bd58b7f45d525f6->leave($__internal_2882f5e4cd95734685857b4dcc64baf09d183ce94f1753c81bd58b7f45d525f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2e9ed652daa7c4834659445df3b8c098e6f93ef2343dca4d34a22b3a2dab0c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e9ed652daa7c4834659445df3b8c098e6f93ef2343dca4d34a22b3a2dab0c1->enter($__internal_c2e9ed652daa7c4834659445df3b8c098e6f93ef2343dca4d34a22b3a2dab0c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d597d6ad726724889a791657d1adb285251fe9229bc0de0b1211916765e3d076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d597d6ad726724889a791657d1adb285251fe9229bc0de0b1211916765e3d076->enter($__internal_d597d6ad726724889a791657d1adb285251fe9229bc0de0b1211916765e3d076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d597d6ad726724889a791657d1adb285251fe9229bc0de0b1211916765e3d076->leave($__internal_d597d6ad726724889a791657d1adb285251fe9229bc0de0b1211916765e3d076_prof);

        
        $__internal_c2e9ed652daa7c4834659445df3b8c098e6f93ef2343dca4d34a22b3a2dab0c1->leave($__internal_c2e9ed652daa7c4834659445df3b8c098e6f93ef2343dca4d34a22b3a2dab0c1_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_458a8b4f4b619768ba42219bb2ba091093ca34ad7c3b47f254abe79f8af40bf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458a8b4f4b619768ba42219bb2ba091093ca34ad7c3b47f254abe79f8af40bf7->enter($__internal_458a8b4f4b619768ba42219bb2ba091093ca34ad7c3b47f254abe79f8af40bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e54fafd6a2b026a705ecd011929c2f259ba536573e563f2773e207cfe00dbe19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54fafd6a2b026a705ecd011929c2f259ba536573e563f2773e207cfe00dbe19->enter($__internal_e54fafd6a2b026a705ecd011929c2f259ba536573e563f2773e207cfe00dbe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
    <p><B>Caution:</B> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "prixLocation", array()), "html", null, true);
        echo "</p>
    ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"form-group col-12\">
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", array()), 'label');
        echo "
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "montant", array()), 'widget', array("attr" => array("class" => "form-control", "value" => "70000")));
        echo "
    </div>
    <div class=\"form-group col-12\">
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "periode", array()), 'label');
        echo "
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "periode", array()), 'widget', array("attr" => array("class" => "form-control", "value" => "2 mois")));
        echo "
    </div>
    
    <br>
    <p><B>Total: </B> ";
        // line 61
        echo twig_escape_filter($this->env, ($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), "prixLocation", array()) + 70000), "html", null, true);
        echo "</p>
      <p class=\"card-text\"><span class=\"row text-uppercase\">A prendre en compte:</span><i> </br>Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5 </i>
      <center>
        <input class=\"form-check-input\" type=\"checkbox\" name=\"radio\" id=\"accepter\" value=\"\">
        <label  class=\"form-check-label\" style=\"text-dark\">Accepter</label>
      </center>
        <br>
      <div class=\"row\" style=\"margin-left: 100px;margin-top: 0px\">
      
      <button type=\"submit\" id=\"enregistrer\" class=\"btn btn-secondary\" style=\"display: none;\">Enregistrer</button>
      </div>
    ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>
<br>


 ";
        
        $__internal_e54fafd6a2b026a705ecd011929c2f259ba536573e563f2773e207cfe00dbe19->leave($__internal_e54fafd6a2b026a705ecd011929c2f259ba536573e563f2773e207cfe00dbe19_prof);

        
        $__internal_458a8b4f4b619768ba42219bb2ba091093ca34ad7c3b47f254abe79f8af40bf7->leave($__internal_458a8b4f4b619768ba42219bb2ba091093ca34ad7c3b47f254abe79f8af40bf7_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59d742b3ad499498a1132372c9a26a05db429a24f7e3956e5997f6905fb0f556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d742b3ad499498a1132372c9a26a05db429a24f7e3956e5997f6905fb0f556->enter($__internal_59d742b3ad499498a1132372c9a26a05db429a24f7e3956e5997f6905fb0f556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27523397c7a2c15469b318881c4ba0aab6bdd74b0cd83181ebccc92bbbf24fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27523397c7a2c15469b318881c4ba0aab6bdd74b0cd83181ebccc92bbbf24fd8->enter($__internal_27523397c7a2c15469b318881c4ba0aab6bdd74b0cd83181ebccc92bbbf24fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
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
        
        $__internal_27523397c7a2c15469b318881c4ba0aab6bdd74b0cd83181ebccc92bbbf24fd8->leave($__internal_27523397c7a2c15469b318881c4ba0aab6bdd74b0cd83181ebccc92bbbf24fd8_prof);

        
        $__internal_59d742b3ad499498a1132372c9a26a05db429a24f7e3956e5997f6905fb0f556->leave($__internal_59d742b3ad499498a1132372c9a26a05db429a24f7e3956e5997f6905fb0f556_prof);

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
        return array (  211 => 80,  202 => 79,  185 => 72,  171 => 61,  164 => 57,  160 => 56,  154 => 53,  150 => 52,  145 => 50,  141 => 49,  125 => 36,  121 => 35,  117 => 34,  111 => 32,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
    <p><B>Caution:</B> {{ bien.prixLocation }}</p>
    {{ form_start(form) }}
    <div class=\"form-group col-12\">
        {{form_label(form.montant)}}
        {{form_widget(form.montant, {\"attr\": {\"class\": \"form-control\", \"value\": \"70000\"}})}}
    </div>
    <div class=\"form-group col-12\">
        {{form_label(form.periode)}}
        {{form_widget(form.periode, {\"attr\": {\"class\": \"form-control\", \"value\": \"2 mois\"}})}}
    </div>
    
    <br>
    <p><B>Total: </B> {{ bien.prixLocation+70000 }}</p>
      <p class=\"card-text\"><span class=\"row text-uppercase\">A prendre en compte:</span><i> </br>Il est mentionné que si vous reservez un bien et qu'on le valide,une fois le contrat signé et que vous occupez les lieux vous devrez payer chaque fin du mois au plutard le 5 </i>
      <center>
        <input class=\"form-check-input\" type=\"checkbox\" name=\"radio\" id=\"accepter\" value=\"\">
        <label  class=\"form-check-label\" style=\"text-dark\">Accepter</label>
      </center>
        <br>
      <div class=\"row\" style=\"margin-left: 100px;margin-top: 0px\">
      
      <button type=\"submit\" id=\"enregistrer\" class=\"btn btn-secondary\" style=\"display: none;\">Enregistrer</button>
      </div>
    {{form_end(form)}}
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
