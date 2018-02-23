<?php

/* SNTDarmankoBundle:admin:lister.html.twig */
class __TwigTemplate_94b9e555c5304498b414888cddfe157ef030c11b0f9e8028da0729a9346919e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTDarmankoBundle:admin:lister.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d004ee36fd2a2c051f40af56a3990dcbfb6602ebdd4644fcf5faef2261c322b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d004ee36fd2a2c051f40af56a3990dcbfb6602ebdd4644fcf5faef2261c322b->enter($__internal_2d004ee36fd2a2c051f40af56a3990dcbfb6602ebdd4644fcf5faef2261c322b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $__internal_d4a51e2e6533b37f8500b51f405fa1789f5d669f05a445a0ab6c8ea80a5e7a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a51e2e6533b37f8500b51f405fa1789f5d669f05a445a0ab6c8ea80a5e7a48->enter($__internal_d4a51e2e6533b37f8500b51f405fa1789f5d669f05a445a0ab6c8ea80a5e7a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d004ee36fd2a2c051f40af56a3990dcbfb6602ebdd4644fcf5faef2261c322b->leave($__internal_2d004ee36fd2a2c051f40af56a3990dcbfb6602ebdd4644fcf5faef2261c322b_prof);

        
        $__internal_d4a51e2e6533b37f8500b51f405fa1789f5d669f05a445a0ab6c8ea80a5e7a48->leave($__internal_d4a51e2e6533b37f8500b51f405fa1789f5d669f05a445a0ab6c8ea80a5e7a48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37c650f3acf0cefb81cb1f0922e52a123a9768c1ae0f30947b5e8a4b8f817b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c650f3acf0cefb81cb1f0922e52a123a9768c1ae0f30947b5e8a4b8f817b8b->enter($__internal_37c650f3acf0cefb81cb1f0922e52a123a9768c1ae0f30947b5e8a4b8f817b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0adf6610ce0f9a950c39f07e4470ad958e3d07525df6325a88834d1e9ae593d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adf6610ce0f9a950c39f07e4470ad958e3d07525df6325a88834d1e9ae593d8->enter($__internal_0adf6610ce0f9a950c39f07e4470ad958e3d07525df6325a88834d1e9ae593d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_0adf6610ce0f9a950c39f07e4470ad958e3d07525df6325a88834d1e9ae593d8->leave($__internal_0adf6610ce0f9a950c39f07e4470ad958e3d07525df6325a88834d1e9ae593d8_prof);

        
        $__internal_37c650f3acf0cefb81cb1f0922e52a123a9768c1ae0f30947b5e8a4b8f817b8b->leave($__internal_37c650f3acf0cefb81cb1f0922e52a123a9768c1ae0f30947b5e8a4b8f817b8b_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a0eb195b1e3df62ffb8f90346f5239fa3cc4f0e0bfccbb0165aaf5981270e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0eb195b1e3df62ffb8f90346f5239fa3cc4f0e0bfccbb0165aaf5981270e18->enter($__internal_1a0eb195b1e3df62ffb8f90346f5239fa3cc4f0e0bfccbb0165aaf5981270e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_79848b50ce9b337963db13938ddb54346ed200e3b9ba4f77681c8a18f96173d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79848b50ce9b337963db13938ddb54346ed200e3b9ba4f77681c8a18f96173d4->enter($__internal_79848b50ce9b337963db13938ddb54346ed200e3b9ba4f77681c8a18f96173d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

";
        
        $__internal_79848b50ce9b337963db13938ddb54346ed200e3b9ba4f77681c8a18f96173d4->leave($__internal_79848b50ce9b337963db13938ddb54346ed200e3b9ba4f77681c8a18f96173d4_prof);

        
        $__internal_1a0eb195b1e3df62ffb8f90346f5239fa3cc4f0e0bfccbb0165aaf5981270e18->leave($__internal_1a0eb195b1e3df62ffb8f90346f5239fa3cc4f0e0bfccbb0165aaf5981270e18_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_41449ccbc4a2307ea6acb6a5ded107f62a9ce58ae68f4a099df72d5e25f69261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41449ccbc4a2307ea6acb6a5ded107f62a9ce58ae68f4a099df72d5e25f69261->enter($__internal_41449ccbc4a2307ea6acb6a5ded107f62a9ce58ae68f4a099df72d5e25f69261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3ffb415dd25616ecfd61b244256b888b779116ad4d0eae0da5cf764c6e3accc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ffb415dd25616ecfd61b244256b888b779116ad4d0eae0da5cf764c6e3accc->enter($__internal_d3ffb415dd25616ecfd61b244256b888b779116ad4d0eae0da5cf764c6e3accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<style>
    img{
        width: 50px;
    }
</style>
<div class=\"container\"><br>
<h1>Bienvenue dans l'interface admin de Darmanko Immobilier</h1><br>
    <div class=\"row\">
        <div class=\"col-12\">
        <table class=\"table table-bordered table-striped\" id=\"myTable\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Nom Client</th>
                    <th>Adresse</th>
                    <th>Bien</th>
                    <th>Prix location</th>
                    <th>Localité Bien</th>
                    <th>Photo</th>
                    <th>Admin</th>    
                </tr>
            </thead>

            <tbody>
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 39
            echo "                <tr>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "nomComplet", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "client", array()), "adress", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "nomBien", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "prixLocation", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "localite", array()), "libelle", array()), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\"></td>
                    <td><a href=\"#\">Détail</a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </tbody>
        
        </table>
        </div>
    </div>
</div>
";
        
        $__internal_d3ffb415dd25616ecfd61b244256b888b779116ad4d0eae0da5cf764c6e3accc->leave($__internal_d3ffb415dd25616ecfd61b244256b888b779116ad4d0eae0da5cf764c6e3accc_prof);

        
        $__internal_41449ccbc4a2307ea6acb6a5ded107f62a9ce58ae68f4a099df72d5e25f69261->leave($__internal_41449ccbc4a2307ea6acb6a5ded107f62a9ce58ae68f4a099df72d5e25f69261_prof);

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
        return array (  156 => 49,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  122 => 39,  118 => 38,  93 => 15,  84 => 14,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block javascripts %}

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

{% endblock %}


{% block body %}
<style>
    img{
        width: 50px;
    }
</style>
<div class=\"container\"><br>
<h1>Bienvenue dans l'interface admin de Darmanko Immobilier</h1><br>
    <div class=\"row\">
        <div class=\"col-12\">
        <table class=\"table table-bordered table-striped\" id=\"myTable\">
            <thead class=\"thead-dark\">
                <tr>
                    <th>Nom Client</th>
                    <th>Adresse</th>
                    <th>Bien</th>
                    <th>Prix location</th>
                    <th>Localité Bien</th>
                    <th>Photo</th>
                    <th>Admin</th>    
                </tr>
            </thead>

            <tbody>
                {% for reservation in reservations %}
                <tr>
                    <td>{{ reservation.client.nomComplet }}</td>
                    <td>{{ reservation.client.adress }}</td>
                    <td>{{ reservation.bien.nomBien }}</td>
                    <td>{{ reservation.bien.prixLocation }}</td>
                    <td>{{ reservation.bien.localite.libelle }}</td>
                    <td><img src=\"{{ asset('image/')}}{{ reservation.bien.images[0].image }}\"></td>
                    <td><a href=\"#\">Détail</a></td>
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
