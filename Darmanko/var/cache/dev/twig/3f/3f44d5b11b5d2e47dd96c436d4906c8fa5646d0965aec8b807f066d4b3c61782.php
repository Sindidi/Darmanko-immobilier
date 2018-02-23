<?php

/* SNTDarmankoBundle:reservation:list.html.twig */
class __TwigTemplate_4a240848b7c46f1fab06500b23f214cb21044dd6cbe08293c68da7c8f3641303 extends Twig_Template
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
        $__internal_6522a6e8b70f9a01ed37f873656e6946f0dcf5f7201a6137396a74859491fb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6522a6e8b70f9a01ed37f873656e6946f0dcf5f7201a6137396a74859491fb7f->enter($__internal_6522a6e8b70f9a01ed37f873656e6946f0dcf5f7201a6137396a74859491fb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:list.html.twig"));

        $__internal_887f67476edd11f6a2ef666731383b2da82e4e03c6e644f24092b9bd3cfc7edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887f67476edd11f6a2ef666731383b2da82e4e03c6e644f24092b9bd3cfc7edb->enter($__internal_887f67476edd11f6a2ef666731383b2da82e4e03c6e644f24092b9bd3cfc7edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6522a6e8b70f9a01ed37f873656e6946f0dcf5f7201a6137396a74859491fb7f->leave($__internal_6522a6e8b70f9a01ed37f873656e6946f0dcf5f7201a6137396a74859491fb7f_prof);

        
        $__internal_887f67476edd11f6a2ef666731383b2da82e4e03c6e644f24092b9bd3cfc7edb->leave($__internal_887f67476edd11f6a2ef666731383b2da82e4e03c6e644f24092b9bd3cfc7edb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd2068ae883b3d76833aaff0e3e72e888309a3002a9f84e710d44f94eed6a97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2068ae883b3d76833aaff0e3e72e888309a3002a9f84e710d44f94eed6a97c->enter($__internal_bd2068ae883b3d76833aaff0e3e72e888309a3002a9f84e710d44f94eed6a97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_414de42b724d17536a6755e006b939c71fd813f61ab543d0e9b141ed23ec523e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414de42b724d17536a6755e006b939c71fd813f61ab543d0e9b141ed23ec523e->enter($__internal_414de42b724d17536a6755e006b939c71fd813f61ab543d0e9b141ed23ec523e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_414de42b724d17536a6755e006b939c71fd813f61ab543d0e9b141ed23ec523e->leave($__internal_414de42b724d17536a6755e006b939c71fd813f61ab543d0e9b141ed23ec523e_prof);

        
        $__internal_bd2068ae883b3d76833aaff0e3e72e888309a3002a9f84e710d44f94eed6a97c->leave($__internal_bd2068ae883b3d76833aaff0e3e72e888309a3002a9f84e710d44f94eed6a97c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_302082ec29a14bb536a58a2d6a47ddfc0cf167d889d0c2491322b6560624cfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_302082ec29a14bb536a58a2d6a47ddfc0cf167d889d0c2491322b6560624cfa4->enter($__internal_302082ec29a14bb536a58a2d6a47ddfc0cf167d889d0c2491322b6560624cfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b36fbb6f314c8a340a51e75482e0504b3bb3e7f96af9aad0d02ac12b5afe766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b36fbb6f314c8a340a51e75482e0504b3bb3e7f96af9aad0d02ac12b5afe766->enter($__internal_4b36fbb6f314c8a340a51e75482e0504b3bb3e7f96af9aad0d02ac12b5afe766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<br>

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-lg-4 bg-light\">
            <h4 class=\"titre\">Que rechercher vous?</h4>
            <div class=\"container\">
                <form class=\"form-inline\">
                    <div class=\"form-group mx-sm-1 mb-2\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Entrer juste un nom\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary mb-2\">Rechercher</button>
                </form><br>

                ";
        // line 22
        echo "
                <h3 class=\"titre\"><i>Nos meilleurs offres</i></h3>
                <div    class=\"carousel slide\" data-ride=\"carousel\" style=\"width: 80%;\">
                    <div class=\"carousel-inner\">
                        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 0, array(), "array"), "id", array()))), "html", null, true);
        echo "\" class=\"carousel-item active\">
                            <img class=\"d-block w-100\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 0, array(), "array"), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"First slide\">
                            <div class=\"carousel-caption d-none d-md-block\">
                                <h5 class=\"text-primary\"><B>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 0, array(), "array"), "nomBien", array()), "html", null, true);
        echo "</B></h5>
                                <p class=\"text-dark\"><B>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 0, array(), "array"), "prixLocation", array()), "html", null, true);
        echo "</B></p>
                            </div>
                        </a>
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 2, array(), "array"), "id", array()))), "html", null, true);
        echo "\" class=\"carousel-item\">
                            <img class=\"d-block w-100\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 2, array(), "array"), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" alt=\"First slide\">
                            <div class=\"carousel-caption d-none d-md-block\">
                                <h5 class=\"text-primary\"><B>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 2, array(), "array"), "nomBien", array()), "html", null, true);
        echo "</B></h5>
                                <p class=\"text-dark\"><B>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bienSlide"] ?? $this->getContext($context, "bienSlide")), 2, array(), "array"), "prixLocation", array()), "html", null, true);
        echo "</B></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-8\">
            <div class=\"container\">
                <p>
                    <h1 style=\"font-family:Goudy Old style;\">
                        <center class=\"titre\"><i>Nos meilleurs produits partout dans le monde!</i></center>
                    </h1>
                </p>
                <div class=\"card-columns\" id=\"list\">
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 53
            echo "                    <div class=\"card\">
                        <img class=\"card-img-top\" src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Card image cap\">
                        <div class=\"card-body bg-light\">
                            <h4 class=\"titre\" class=\"card-title\"><center>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomBien", array()), "html", null, true);
            echo "</center></h4>
                            <p class=\"card-text\">
                                <p><B>Prix: </B><span class=\"text-primary\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLocation", array()), "html", null, true);
            echo "</span></p>
                                <p><B>Localité: </B>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["bien"], "localite", array()), "libelle", array()), "html", null, true);
            echo "</p>
                            </p>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail", array("id" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary col-12\">voir les details</a>
                        </div>
                    </div>
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </div>
                <div class=\"center-block\">
                    ";
        // line 68
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["biens"] ?? $this->getContext($context, "biens")));
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
<br>

";
        
        $__internal_4b36fbb6f314c8a340a51e75482e0504b3bb3e7f96af9aad0d02ac12b5afe766->leave($__internal_4b36fbb6f314c8a340a51e75482e0504b3bb3e7f96af9aad0d02ac12b5afe766_prof);

        
        $__internal_302082ec29a14bb536a58a2d6a47ddfc0cf167d889d0c2491322b6560624cfa4->leave($__internal_302082ec29a14bb536a58a2d6a47ddfc0cf167d889d0c2491322b6560624cfa4_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9c05b7587e501c9533084bacf76bdf71078eb93d83835fd79c5dd5a8f5b03b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c05b7587e501c9533084bacf76bdf71078eb93d83835fd79c5dd5a8f5b03b1->enter($__internal_a9c05b7587e501c9533084bacf76bdf71078eb93d83835fd79c5dd5a8f5b03b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e861637fe7b138891bfe07aa15ff72322837eb233d66ba6b14a2cbc4ccdeb76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e861637fe7b138891bfe07aa15ff72322837eb233d66ba6b14a2cbc4ccdeb76->enter($__internal_9e861637fe7b138891bfe07aa15ff72322837eb233d66ba6b14a2cbc4ccdeb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scriptAccueil.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9e861637fe7b138891bfe07aa15ff72322837eb233d66ba6b14a2cbc4ccdeb76->leave($__internal_9e861637fe7b138891bfe07aa15ff72322837eb233d66ba6b14a2cbc4ccdeb76_prof);

        
        $__internal_a9c05b7587e501c9533084bacf76bdf71078eb93d83835fd79c5dd5a8f5b03b1->leave($__internal_a9c05b7587e501c9533084bacf76bdf71078eb93d83835fd79c5dd5a8f5b03b1_prof);

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
        return array (  219 => 79,  214 => 78,  205 => 77,  186 => 68,  182 => 66,  171 => 61,  166 => 59,  162 => 58,  157 => 56,  151 => 54,  148 => 53,  144 => 52,  126 => 37,  122 => 36,  116 => 34,  112 => 33,  106 => 30,  102 => 29,  96 => 27,  92 => 26,  86 => 22,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
            <h4 class=\"titre\">Que rechercher vous?</h4>
            <div class=\"container\">
                <form class=\"form-inline\">
                    <div class=\"form-group mx-sm-1 mb-2\">
                        <input type=\"text\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Entrer juste un nom\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary mb-2\">Rechercher</button>
                </form><br>

                {# Affichage des biens à la une sous formes de slides #}

                <h3 class=\"titre\"><i>Nos meilleurs offres</i></h3>
                <div    class=\"carousel slide\" data-ride=\"carousel\" style=\"width: 80%;\">
                    <div class=\"carousel-inner\">
                        <a href=\"{{path('detail', {'id':bienSlide[0].id})}}\" class=\"carousel-item active\">
                            <img class=\"d-block w-100\" src=\"{{ asset('image/')}}{{ bienSlide[0].images[0].image }}\" alt=\"First slide\">
                            <div class=\"carousel-caption d-none d-md-block\">
                                <h5 class=\"text-primary\"><B>{{ bienSlide[0].nomBien }}</B></h5>
                                <p class=\"text-dark\"><B>{{ bienSlide[0].prixLocation }}</B></p>
                            </div>
                        </a>
                        <a href=\"{{path('detail', {'id':bienSlide[2].id})}}\" class=\"carousel-item\">
                            <img class=\"d-block w-100\" src=\"{{ asset('image/')}}{{ bienSlide[2].images[0].image }}\" alt=\"First slide\">
                            <div class=\"carousel-caption d-none d-md-block\">
                                <h5 class=\"text-primary\"><B>{{ bienSlide[2].nomBien }}</B></h5>
                                <p class=\"text-dark\"><B>{{ bienSlide[2].prixLocation }}</B></p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-8\">
            <div class=\"container\">
                <p>
                    <h1 style=\"font-family:Goudy Old style;\">
                        <center class=\"titre\"><i>Nos meilleurs produits partout dans le monde!</i></center>
                    </h1>
                </p>
                <div class=\"card-columns\" id=\"list\">
                    {% for bien in biens %}
                    <div class=\"card\">
                        <img class=\"card-img-top\" src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Card image cap\">
                        <div class=\"card-body bg-light\">
                            <h4 class=\"titre\" class=\"card-title\"><center>{{ bien.nomBien }}</center></h4>
                            <p class=\"card-text\">
                                <p><B>Prix: </B><span class=\"text-primary\">{{ bien.prixLocation }}</span></p>
                                <p><B>Localité: </B>{{ bien.localite.libelle }}</p>
                            </p>
                            <a href=\"{{path('detail', {'id':bien.id})}}\" class=\"btn btn-primary col-12\">voir les details</a>
                        </div>
                    </div>
                    
                    {% endfor %}
                </div>
                <div class=\"center-block\">
                    {{ knp_pagination_render(biens) }}
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
