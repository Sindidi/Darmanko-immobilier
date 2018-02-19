<?php

/* SNTDarmankoBundle:reservation:list.html.twig */
class __TwigTemplate_218051a7d4345a69438bb200929e126398706dccde0ea4cb062c31f0eaad2590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SNTDarmankoBundle:reservation:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eeb0514fdca7e1753af86293b924ac0f78e0b24ae0b292378fea4a2844aac53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eeb0514fdca7e1753af86293b924ac0f78e0b24ae0b292378fea4a2844aac53->enter($__internal_3eeb0514fdca7e1753af86293b924ac0f78e0b24ae0b292378fea4a2844aac53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:list.html.twig"));

        $__internal_5970c92bdc98ac4646762098aedcf0204e894cc57ebc80c883f4de3abddc57f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5970c92bdc98ac4646762098aedcf0204e894cc57ebc80c883f4de3abddc57f9->enter($__internal_5970c92bdc98ac4646762098aedcf0204e894cc57ebc80c883f4de3abddc57f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eeb0514fdca7e1753af86293b924ac0f78e0b24ae0b292378fea4a2844aac53->leave($__internal_3eeb0514fdca7e1753af86293b924ac0f78e0b24ae0b292378fea4a2844aac53_prof);

        
        $__internal_5970c92bdc98ac4646762098aedcf0204e894cc57ebc80c883f4de3abddc57f9->leave($__internal_5970c92bdc98ac4646762098aedcf0204e894cc57ebc80c883f4de3abddc57f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1aaf4ee8bb062c8135b3d6a1a2f89301686075b76881cc876e23b1ac0bfeda73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aaf4ee8bb062c8135b3d6a1a2f89301686075b76881cc876e23b1ac0bfeda73->enter($__internal_1aaf4ee8bb062c8135b3d6a1a2f89301686075b76881cc876e23b1ac0bfeda73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_425bd6579db48a8ae707a7444966ea19eed49680fe511594ac8ecef9fb675ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_425bd6579db48a8ae707a7444966ea19eed49680fe511594ac8ecef9fb675ef1->enter($__internal_425bd6579db48a8ae707a7444966ea19eed49680fe511594ac8ecef9fb675ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_425bd6579db48a8ae707a7444966ea19eed49680fe511594ac8ecef9fb675ef1->leave($__internal_425bd6579db48a8ae707a7444966ea19eed49680fe511594ac8ecef9fb675ef1_prof);

        
        $__internal_1aaf4ee8bb062c8135b3d6a1a2f89301686075b76881cc876e23b1ac0bfeda73->leave($__internal_1aaf4ee8bb062c8135b3d6a1a2f89301686075b76881cc876e23b1ac0bfeda73_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4ff222e33bdaa3bbde5785c5635346e628d60098a73cb014c7b043ff6ab77d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ff222e33bdaa3bbde5785c5635346e628d60098a73cb014c7b043ff6ab77d7->enter($__internal_e4ff222e33bdaa3bbde5785c5635346e628d60098a73cb014c7b043ff6ab77d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93e86111100284bd5ea7de8222c462b6fc309969d31a889516e25fe83c2c0d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e86111100284bd5ea7de8222c462b6fc309969d31a889516e25fe83c2c0d82->enter($__internal_93e86111100284bd5ea7de8222c462b6fc309969d31a889516e25fe83c2c0d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<br>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-4 bg-light\">
            <h4 style=\"font-family:Goudy; color:grey\">Que rechercher vous?</h4>
            <div class=\"container\">
                <form class=\"form-inline\">
                    <div class=\"form-group mx-sm-1 mb-2\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Entrer juste un nom\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary mb-2\">Rechercher</button>
                </form><br>
                <h3 style=\"font-family:Goudy; color:grey\"><i>Nos meilleurs offres</i></h3>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 23
            echo "                    <li class=\"list-group-item\"><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-8\">
            <div class=\"container\">
                    <p>
                        <h1 style=\"font-family:Goudy Old style;\">
                            <center style=\"font-family:Goudy; color:grey\"><i>Nos meilleurs produits partout dans le monde!</i></center>
                        </h1>
                    </p>
                    <div class=\"card-columns\" id=\"list\">
                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 37
            echo "                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\">
                            <div class=\"card-body bg-light\">
                                <h4 style=\"font-family:Goudy; color:grey\" class=\"card-title\"><center>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</center></h4>
                                <p class=\"card-text\">
                                    <p><B>Prix: </B><span class=\"text-primary\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "</span></p>
                                    <p><B>Localité: </B>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "localite", array()), "libelle", array()), "html", null, true);
            echo "</p>
                                </p>
                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary col-12\">voir les details</a>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </div>
                </div>
        </div>
    </div>
</div>
<br>

";
        
        $__internal_93e86111100284bd5ea7de8222c462b6fc309969d31a889516e25fe83c2c0d82->leave($__internal_93e86111100284bd5ea7de8222c462b6fc309969d31a889516e25fe83c2c0d82_prof);

        
        $__internal_e4ff222e33bdaa3bbde5785c5635346e628d60098a73cb014c7b043ff6ab77d7->leave($__internal_e4ff222e33bdaa3bbde5785c5635346e628d60098a73cb014c7b043ff6ab77d7_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f299f023002ae05a8070f6eb1ebd8a8d89ae9e08b48011f876f7d7c3c7f252e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f299f023002ae05a8070f6eb1ebd8a8d89ae9e08b48011f876f7d7c3c7f252e->enter($__internal_8f299f023002ae05a8070f6eb1ebd8a8d89ae9e08b48011f876f7d7c3c7f252e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a68287feae418e6ee25cd010722d2296a69d8233b966f8cf3ced3cd769294eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68287feae418e6ee25cd010722d2296a69d8233b966f8cf3ced3cd769294eb3->enter($__internal_a68287feae418e6ee25cd010722d2296a69d8233b966f8cf3ced3cd769294eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scriptAccueil.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a68287feae418e6ee25cd010722d2296a69d8233b966f8cf3ced3cd769294eb3->leave($__internal_a68287feae418e6ee25cd010722d2296a69d8233b966f8cf3ced3cd769294eb3_prof);

        
        $__internal_8f299f023002ae05a8070f6eb1ebd8a8d89ae9e08b48011f876f7d7c3c7f252e->leave($__internal_8f299f023002ae05a8070f6eb1ebd8a8d89ae9e08b48011f876f7d7c3c7f252e_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 59,  176 => 58,  167 => 57,  150 => 49,  140 => 45,  135 => 43,  131 => 42,  126 => 40,  120 => 38,  117 => 37,  113 => 36,  100 => 25,  91 => 23,  87 => 22,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}Accueil{% endblock %}

{% block body %}

<br>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-4 bg-light\">
            <h4 style=\"font-family:Goudy; color:grey\">Que rechercher vous?</h4>
            <div class=\"container\">
                <form class=\"form-inline\">
                    <div class=\"form-group mx-sm-1 mb-2\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Entrer juste un nom\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary mb-2\">Rechercher</button>
                </form><br>
                <h3 style=\"font-family:Goudy; color:grey\"><i>Nos meilleurs offres</i></h3>
                <ul class=\"list-group list-group-flush\">
                    {% for type in types %}
                    <li class=\"list-group-item\"><a href=\"#\">{{ type.libelle }}</a></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"col-8\">
            <div class=\"container\">
                    <p>
                        <h1 style=\"font-family:Goudy Old style;\">
                            <center style=\"font-family:Goudy; color:grey\"><i>Nos meilleurs produits partout dans le monde!</i></center>
                        </h1>
                    </p>
                    <div class=\"card-columns\" id=\"list\">
                        {% for bien in biens %}
                        <div class=\"card\">
                            <img class=\"card-img-top\" src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Card image cap\">
                            <div class=\"card-body bg-light\">
                                <h4 style=\"font-family:Goudy; color:grey\" class=\"card-title\"><center>{{ bien.nomBien }}</center></h4>
                                <p class=\"card-text\">
                                    <p><B>Prix: </B><span class=\"text-primary\">{{ bien.prixLocation }}</span></p>
                                    <p><B>Localité: </B>{{ bien.localite.libelle }}</p>
                                </p>
                                <a href=\"{{path('detail', {'id':bien.id})}}\" class=\"btn btn-primary col-12\">voir les details</a>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
        </div>
    </div>
</div>
<br>

{% endblock %}
{% block javascripts %}
<script src=\"{{asset('js/jquery.js')}}\"></script>
<script src=\"{{asset('js/scriptAccueil.js')}}\"></script>
{% endblock %}
", "SNTDarmankoBundle:reservation:list.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/list.html.twig");
    }
}
