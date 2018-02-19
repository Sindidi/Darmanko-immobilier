<?php

/* SNTDarmankoBundle:admin:lister.html.twig */
class __TwigTemplate_a7302f5d862143f705fe2635eab240cdd0d57550dc6be33fc9e0df0e2111c68f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTDarmankoBundle:admin:lister.html.twig", 1);
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
        $__internal_441d332bc615c9d02cd62044967b3c7326459695ea497009e212eca08180f501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441d332bc615c9d02cd62044967b3c7326459695ea497009e212eca08180f501->enter($__internal_441d332bc615c9d02cd62044967b3c7326459695ea497009e212eca08180f501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $__internal_958ac0c463f7b0e6d2c5d01b1745b4e5a99ddc705c5f8a4223b24e396547e76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_958ac0c463f7b0e6d2c5d01b1745b4e5a99ddc705c5f8a4223b24e396547e76a->enter($__internal_958ac0c463f7b0e6d2c5d01b1745b4e5a99ddc705c5f8a4223b24e396547e76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_441d332bc615c9d02cd62044967b3c7326459695ea497009e212eca08180f501->leave($__internal_441d332bc615c9d02cd62044967b3c7326459695ea497009e212eca08180f501_prof);

        
        $__internal_958ac0c463f7b0e6d2c5d01b1745b4e5a99ddc705c5f8a4223b24e396547e76a->leave($__internal_958ac0c463f7b0e6d2c5d01b1745b4e5a99ddc705c5f8a4223b24e396547e76a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_647452d0f9c75f3f837b05f50d823bdd7ecaeb85cdfbfcef0f1afb331e96cdb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647452d0f9c75f3f837b05f50d823bdd7ecaeb85cdfbfcef0f1afb331e96cdb1->enter($__internal_647452d0f9c75f3f837b05f50d823bdd7ecaeb85cdfbfcef0f1afb331e96cdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d5cfacda1d1c1732078c2187724338ff136348e1c6d4765f7625d15a66e4faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5cfacda1d1c1732078c2187724338ff136348e1c6d4765f7625d15a66e4faf->enter($__internal_9d5cfacda1d1c1732078c2187724338ff136348e1c6d4765f7625d15a66e4faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_9d5cfacda1d1c1732078c2187724338ff136348e1c6d4765f7625d15a66e4faf->leave($__internal_9d5cfacda1d1c1732078c2187724338ff136348e1c6d4765f7625d15a66e4faf_prof);

        
        $__internal_647452d0f9c75f3f837b05f50d823bdd7ecaeb85cdfbfcef0f1afb331e96cdb1->leave($__internal_647452d0f9c75f3f837b05f50d823bdd7ecaeb85cdfbfcef0f1afb331e96cdb1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_89b1b59ace87997cc704c9f127f30c9873446461177dcbe019e095eae53b89ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b1b59ace87997cc704c9f127f30c9873446461177dcbe019e095eae53b89ea->enter($__internal_89b1b59ace87997cc704c9f127f30c9873446461177dcbe019e095eae53b89ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb6b65de76984c723d5b41ac8854d13bb7697c7e4e76712dc7de9576f41a2a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6b65de76984c723d5b41ac8854d13bb7697c7e4e76712dc7de9576f41a2a5b->enter($__internal_eb6b65de76984c723d5b41ac8854d13bb7697c7e4e76712dc7de9576f41a2a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    img{
        width: 50px;
    }
</style>
<div class=\"container\"><br>
<h1>Bienvenue dans l'interface admin de Darmanko Immobilier</h1><br>
<div class=\"col-7\">
      <form class=\"form-inline\" id=\"recherche\">
        <div class=\"form-group mx-sm-3 mb-2\">
          <input type=\"text\" name=\"produit\" class=\"form-control\" id=\"tags\" placeholder=\"Rechercher un Bien\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary mb-2\">Rechercher</button>
      </form>
  </div>
    <div class=\"row\">
        <div class=\"col-12\">
        <table class=\"table table-bordered table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Bien</th>
                    <th>Prix location</th>
                    <th>Photo</th>
                    <th>Client</th>
                    <th>Etat réservation</th>
                    <th>Action</th>    
                </tr>
            </thead>

        <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 37
            echo "            <tr>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixLocation", array()), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"></td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                ";
            // line 42
            if (($this->getAttribute($context["reservation"], "etat", array()) == 0)) {
                // line 43
                echo "                <td>En cours</td>
                <td><a href=\"\">Confirmer</a> / <a href=\"\">Annuler</a></td>
                ";
            }
            // line 46
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
        
        </table>
        </div>
    </div>
</div>
";
        
        $__internal_eb6b65de76984c723d5b41ac8854d13bb7697c7e4e76712dc7de9576f41a2a5b->leave($__internal_eb6b65de76984c723d5b41ac8854d13bb7697c7e4e76712dc7de9576f41a2a5b_prof);

        
        $__internal_89b1b59ace87997cc704c9f127f30c9873446461177dcbe019e095eae53b89ea->leave($__internal_89b1b59ace87997cc704c9f127f30c9873446461177dcbe019e095eae53b89ea_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  131 => 46,  126 => 43,  124 => 42,  120 => 41,  115 => 40,  111 => 39,  107 => 38,  104 => 37,  100 => 36,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block body %}
<style>
    img{
        width: 50px;
    }
</style>
<div class=\"container\"><br>
<h1>Bienvenue dans l'interface admin de Darmanko Immobilier</h1><br>
<div class=\"col-7\">
      <form class=\"form-inline\" id=\"recherche\">
        <div class=\"form-group mx-sm-3 mb-2\">
          <input type=\"text\" name=\"produit\" class=\"form-control\" id=\"tags\" placeholder=\"Rechercher un Bien\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary mb-2\">Rechercher</button>
      </form>
  </div>
    <div class=\"row\">
        <div class=\"col-12\">
        <table class=\"table table-bordered table-striped\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Bien</th>
                    <th>Prix location</th>
                    <th>Photo</th>
                    <th>Client</th>
                    <th>Etat réservation</th>
                    <th>Action</th>    
                </tr>
            </thead>

        <tbody>
            {% for reservation in reservations %}
            <tr>
                <td>{{ reservation.bien.nomBien }}</td>
                <td>{{ reservation.bien.prixLocation }}</td>
                <td><img src=\"{{ asset('image/')}}{{ reservation.bien.images[0].image }}\"></td>
                <td>{{ reservation.client.nomComplet }}</td>
                {% if reservation.etat == 0 %}
                <td>En cours</td>
                <td><a href=\"\">Confirmer</a> / <a href=\"\">Annuler</a></td>
                {% endif %}
            </tr>
            {% endfor %}
        </tbody>
        
        </table>
        </div>
    </div>
</div>
{% endblock %}
", "SNTDarmankoBundle:admin:lister.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/lister.html.twig");
    }
}
