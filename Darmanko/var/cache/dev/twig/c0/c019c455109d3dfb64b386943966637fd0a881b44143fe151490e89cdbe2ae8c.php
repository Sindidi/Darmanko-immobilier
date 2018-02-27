<?php

/* SNTDarmankoBundle:admin:lister.html.twig */
class __TwigTemplate_94b9e555c5304498b414888cddfe157ef030c11b0f9e8028da0729a9346919e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::reservation.html.twig", "SNTDarmankoBundle:admin:lister.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::reservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbdf0f11d6b9f886c7d4094861a3109f24a64813b1df94aad5ce1e74fd50e9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdf0f11d6b9f886c7d4094861a3109f24a64813b1df94aad5ce1e74fd50e9d7->enter($__internal_dbdf0f11d6b9f886c7d4094861a3109f24a64813b1df94aad5ce1e74fd50e9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $__internal_d1c6db6a5416b4dc31160ef2071a5765e318fe6eb80c3b764be932d64107a15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c6db6a5416b4dc31160ef2071a5765e318fe6eb80c3b764be932d64107a15f->enter($__internal_d1c6db6a5416b4dc31160ef2071a5765e318fe6eb80c3b764be932d64107a15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:lister.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbdf0f11d6b9f886c7d4094861a3109f24a64813b1df94aad5ce1e74fd50e9d7->leave($__internal_dbdf0f11d6b9f886c7d4094861a3109f24a64813b1df94aad5ce1e74fd50e9d7_prof);

        
        $__internal_d1c6db6a5416b4dc31160ef2071a5765e318fe6eb80c3b764be932d64107a15f->leave($__internal_d1c6db6a5416b4dc31160ef2071a5765e318fe6eb80c3b764be932d64107a15f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e1faa4f3bd2a3596e136d2dac6bbe40c94adb94d636bd20811ff99c5c974556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1faa4f3bd2a3596e136d2dac6bbe40c94adb94d636bd20811ff99c5c974556->enter($__internal_8e1faa4f3bd2a3596e136d2dac6bbe40c94adb94d636bd20811ff99c5c974556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3d5cb15e4a63179458018fa5fe0622a3d0e72008b10b6f1103841a877d78615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d5cb15e4a63179458018fa5fe0622a3d0e72008b10b6f1103841a877d78615->enter($__internal_e3d5cb15e4a63179458018fa5fe0622a3d0e72008b10b6f1103841a877d78615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_e3d5cb15e4a63179458018fa5fe0622a3d0e72008b10b6f1103841a877d78615->leave($__internal_e3d5cb15e4a63179458018fa5fe0622a3d0e72008b10b6f1103841a877d78615_prof);

        
        $__internal_8e1faa4f3bd2a3596e136d2dac6bbe40c94adb94d636bd20811ff99c5c974556->leave($__internal_8e1faa4f3bd2a3596e136d2dac6bbe40c94adb94d636bd20811ff99c5c974556_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b6c4761523d033582ecc82936c85d64c1a55a9de57d152162eb16b439806f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6c4761523d033582ecc82936c85d64c1a55a9de57d152162eb16b439806f4b->enter($__internal_4b6c4761523d033582ecc82936c85d64c1a55a9de57d152162eb16b439806f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b55dda32b1d30dfff62d22ccbe726e799d8a5196fb07bea60d03861d2c5a592a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b55dda32b1d30dfff62d22ccbe726e799d8a5196fb07bea60d03861d2c5a592a->enter($__internal_b55dda32b1d30dfff62d22ccbe726e799d8a5196fb07bea60d03861d2c5a592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

";
        
        $__internal_b55dda32b1d30dfff62d22ccbe726e799d8a5196fb07bea60d03861d2c5a592a->leave($__internal_b55dda32b1d30dfff62d22ccbe726e799d8a5196fb07bea60d03861d2c5a592a_prof);

        
        $__internal_4b6c4761523d033582ecc82936c85d64c1a55a9de57d152162eb16b439806f4b->leave($__internal_4b6c4761523d033582ecc82936c85d64c1a55a9de57d152162eb16b439806f4b_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_795429a1246a43ce570ea6eab93285f2874aaccf3c352340f3ce64e1787c0486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_795429a1246a43ce570ea6eab93285f2874aaccf3c352340f3ce64e1787c0486->enter($__internal_795429a1246a43ce570ea6eab93285f2874aaccf3c352340f3ce64e1787c0486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_64c08be41f06b4d4a6bfbf3734b1855163090adca56993fa1c6d86fc97b2f2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c08be41f06b4d4a6bfbf3734b1855163090adca56993fa1c6d86fc97b2f2c5->enter($__internal_64c08be41f06b4d4a6bfbf3734b1855163090adca56993fa1c6d86fc97b2f2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_64c08be41f06b4d4a6bfbf3734b1855163090adca56993fa1c6d86fc97b2f2c5->leave($__internal_64c08be41f06b4d4a6bfbf3734b1855163090adca56993fa1c6d86fc97b2f2c5_prof);

        
        $__internal_795429a1246a43ce570ea6eab93285f2874aaccf3c352340f3ce64e1787c0486->leave($__internal_795429a1246a43ce570ea6eab93285f2874aaccf3c352340f3ce64e1787c0486_prof);

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
        return new Twig_Source("{% extends \"::reservation.html.twig\" %}

{% block title %}Darmanko-Admin{% endblock %}

{% block javascripts %}

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

{% endblock %}


{% block content %}
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
