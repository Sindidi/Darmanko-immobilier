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
        $__internal_b37352f77f5d51e73b0fb4fa16701383fb87a0e91df0747369f1c324f399453b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37352f77f5d51e73b0fb4fa16701383fb87a0e91df0747369f1c324f399453b->enter($__internal_b37352f77f5d51e73b0fb4fa16701383fb87a0e91df0747369f1c324f399453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $__internal_03cc2ed3fd41b1f755c57cfeeb169229f14867408213c5285850370c4973025a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03cc2ed3fd41b1f755c57cfeeb169229f14867408213c5285850370c4973025a->enter($__internal_03cc2ed3fd41b1f755c57cfeeb169229f14867408213c5285850370c4973025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b37352f77f5d51e73b0fb4fa16701383fb87a0e91df0747369f1c324f399453b->leave($__internal_b37352f77f5d51e73b0fb4fa16701383fb87a0e91df0747369f1c324f399453b_prof);

        
        $__internal_03cc2ed3fd41b1f755c57cfeeb169229f14867408213c5285850370c4973025a->leave($__internal_03cc2ed3fd41b1f755c57cfeeb169229f14867408213c5285850370c4973025a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_74974bee631681824687ce453ed387194ed7ad1f48c199a9eeab677a9a4263b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74974bee631681824687ce453ed387194ed7ad1f48c199a9eeab677a9a4263b3->enter($__internal_74974bee631681824687ce453ed387194ed7ad1f48c199a9eeab677a9a4263b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3e86411e06bf6f75e3fa71139aa99dcf7c36a671a6152753d434a7dd2aa7396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e86411e06bf6f75e3fa71139aa99dcf7c36a671a6152753d434a7dd2aa7396->enter($__internal_c3e86411e06bf6f75e3fa71139aa99dcf7c36a671a6152753d434a7dd2aa7396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_c3e86411e06bf6f75e3fa71139aa99dcf7c36a671a6152753d434a7dd2aa7396->leave($__internal_c3e86411e06bf6f75e3fa71139aa99dcf7c36a671a6152753d434a7dd2aa7396_prof);

        
        $__internal_74974bee631681824687ce453ed387194ed7ad1f48c199a9eeab677a9a4263b3->leave($__internal_74974bee631681824687ce453ed387194ed7ad1f48c199a9eeab677a9a4263b3_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fdd7d45ddb972ab691442cc45b5a5f633c1ba640a3f17d93e54456418836d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fdd7d45ddb972ab691442cc45b5a5f633c1ba640a3f17d93e54456418836d15->enter($__internal_5fdd7d45ddb972ab691442cc45b5a5f633c1ba640a3f17d93e54456418836d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c319dbc110379278f406b53bc8d22e90fc15d5ae5d3ad1a947a7c35a2e3fa753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c319dbc110379278f406b53bc8d22e90fc15d5ae5d3ad1a947a7c35a2e3fa753->enter($__internal_c319dbc110379278f406b53bc8d22e90fc15d5ae5d3ad1a947a7c35a2e3fa753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

";
        
        $__internal_c319dbc110379278f406b53bc8d22e90fc15d5ae5d3ad1a947a7c35a2e3fa753->leave($__internal_c319dbc110379278f406b53bc8d22e90fc15d5ae5d3ad1a947a7c35a2e3fa753_prof);

        
        $__internal_5fdd7d45ddb972ab691442cc45b5a5f633c1ba640a3f17d93e54456418836d15->leave($__internal_5fdd7d45ddb972ab691442cc45b5a5f633c1ba640a3f17d93e54456418836d15_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_81d5ef1783b5d122a84cacce6bd1b358c03ae9cf7177b9a61598b224b183c994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d5ef1783b5d122a84cacce6bd1b358c03ae9cf7177b9a61598b224b183c994->enter($__internal_81d5ef1783b5d122a84cacce6bd1b358c03ae9cf7177b9a61598b224b183c994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8626d44b7adb7fe440f38d029c2dec29d1e0dd3e32ee565d199f3382210d0b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8626d44b7adb7fe440f38d029c2dec29d1e0dd3e32ee565d199f3382210d0b4->enter($__internal_f8626d44b7adb7fe440f38d029c2dec29d1e0dd3e32ee565d199f3382210d0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "<style>
    img{
        width: 50px;
    }
</style>
<div class=\"container\">
<h1>Liste des réservations</h1><br>
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
                    <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\">Détail</a></td>
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
        
        $__internal_f8626d44b7adb7fe440f38d029c2dec29d1e0dd3e32ee565d199f3382210d0b4->leave($__internal_f8626d44b7adb7fe440f38d029c2dec29d1e0dd3e32ee565d199f3382210d0b4_prof);

        
        $__internal_81d5ef1783b5d122a84cacce6bd1b358c03ae9cf7177b9a61598b224b183c994->leave($__internal_81d5ef1783b5d122a84cacce6bd1b358c03ae9cf7177b9a61598b224b183c994_prof);

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
        return array (  159 => 49,  150 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  122 => 39,  118 => 38,  93 => 15,  84 => 14,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
<div class=\"container\">
<h1>Liste des réservations</h1><br>
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
                    <td><a href=\"{{path('reservation', {'id': reservation.id})}}\">Détail</a></td>
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
