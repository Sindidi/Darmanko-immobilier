<?php

/* ::layout.html.twig */
class __TwigTemplate_12653917b1c6b145bb3ef58218243f498660f07b891cfcaaaf97129726f179ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09d415855a9f1f7a9b0fe2f711d5f43423f7f576b38ba4418705a482a360c1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d415855a9f1f7a9b0fe2f711d5f43423f7f576b38ba4418705a482a360c1fc->enter($__internal_09d415855a9f1f7a9b0fe2f711d5f43423f7f576b38ba4418705a482a360c1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_174d91516f17b69425c3fb7f3ea038d09e0fed466586801bf6c32592098c7bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174d91516f17b69425c3fb7f3ea038d09e0fed466586801bf6c32592098c7bf7->enter($__internal_174d91516f17b69425c3fb7f3ea038d09e0fed466586801bf6c32592098c7bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    \t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        <nav class=\"navbar bg-dark fixed-top\">
            <ul style=\"display:flex;margin-left:500px;\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\" style=\"color:white;font-size:14px\">Accueil</a></li>
                <ul>
                    <li><a href=\"#\" style=\"color:white;font-size:14px\">Contact</a></li>
                </ul>
            </ul>
            <ul class=\"nav justify-content-end\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\" style=\"color:white;font-size:14px\">Connexion</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\" style=\"color:white;font-size:14px\">S'inscrire</a>
                </li>
            </ul>
            
        </nav>
        <div class=\"header1\">
            <div class=\"card-header \">
                <div class=\"col-lg-12\" style=\"margin-top:-310px;height:50px; opacity: 0.6;\">
                
                </div>
                <h2 style=\"font-family:Goudy Old style; color:white;margin-top:250px\">
                <center><i>Reservez vos biens</i></center>
                </h2>
            </div>
            <form method=\"POST\" class=\"row\" action=\"#list\">
                <div class=\"col-2\"></div>
                <select class=\"col-2 form-control mx-sm-1\" name=\"localite\">
                    <option value=\"\">choisir la localite</option>
                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 43
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </select>

                <select class=\"col-2 form-control mx-sm-1\" name=\"type\">
                    <option value=\"\">choisir type de bien</option>
                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 50
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </select>
                <input class=\"col-2 form-control mx-sm-1\" type=\"text\" name=\"max\" placeholder=\"Prix max\">
                <input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary col-2\">\t
            </form>
        </div>
        ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        <h1 class=\"card-title\" style=\"font-family:Goudy Old style; color:grey;\">
            <center><i>Tous savoir sur Darmanko immobilier</i></center>
        </h1>
        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_09d415855a9f1f7a9b0fe2f711d5f43423f7f576b38ba4418705a482a360c1fc->leave($__internal_09d415855a9f1f7a9b0fe2f711d5f43423f7f576b38ba4418705a482a360c1fc_prof);

        
        $__internal_174d91516f17b69425c3fb7f3ea038d09e0fed466586801bf6c32592098c7bf7->leave($__internal_174d91516f17b69425c3fb7f3ea038d09e0fed466586801bf6c32592098c7bf7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3d0457475fd2cb504ec4e0c553abcd814521680ce2212f9377d7049b9dead8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d0457475fd2cb504ec4e0c553abcd814521680ce2212f9377d7049b9dead8f->enter($__internal_c3d0457475fd2cb504ec4e0c553abcd814521680ce2212f9377d7049b9dead8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_051f7f2f024a31b411e062c1b2b295ab33e6862b918cf66e3b8298e10c77e78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051f7f2f024a31b411e062c1b2b295ab33e6862b918cf66e3b8298e10c77e78c->enter($__internal_051f7f2f024a31b411e062c1b2b295ab33e6862b918cf66e3b8298e10c77e78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_051f7f2f024a31b411e062c1b2b295ab33e6862b918cf66e3b8298e10c77e78c->leave($__internal_051f7f2f024a31b411e062c1b2b295ab33e6862b918cf66e3b8298e10c77e78c_prof);

        
        $__internal_c3d0457475fd2cb504ec4e0c553abcd814521680ce2212f9377d7049b9dead8f->leave($__internal_c3d0457475fd2cb504ec4e0c553abcd814521680ce2212f9377d7049b9dead8f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f29494e7f1dc871195fd36cca8a4e706831de7bddda91dc776bc8215d2efd424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29494e7f1dc871195fd36cca8a4e706831de7bddda91dc776bc8215d2efd424->enter($__internal_f29494e7f1dc871195fd36cca8a4e706831de7bddda91dc776bc8215d2efd424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a70c6f599793059159d97f5e834ea4ffcd1e5721bfef0b150d5bcb59cad776ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70c6f599793059159d97f5e834ea4ffcd1e5721bfef0b150d5bcb59cad776ea->enter($__internal_a70c6f599793059159d97f5e834ea4ffcd1e5721bfef0b150d5bcb59cad776ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a70c6f599793059159d97f5e834ea4ffcd1e5721bfef0b150d5bcb59cad776ea->leave($__internal_a70c6f599793059159d97f5e834ea4ffcd1e5721bfef0b150d5bcb59cad776ea_prof);

        
        $__internal_f29494e7f1dc871195fd36cca8a4e706831de7bddda91dc776bc8215d2efd424->leave($__internal_f29494e7f1dc871195fd36cca8a4e706831de7bddda91dc776bc8215d2efd424_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_6db1c70895339cb7e52262e6a297f5ca3b3cb73bda15014acfb7d6dc4f1d1654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db1c70895339cb7e52262e6a297f5ca3b3cb73bda15014acfb7d6dc4f1d1654->enter($__internal_6db1c70895339cb7e52262e6a297f5ca3b3cb73bda15014acfb7d6dc4f1d1654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_724222c78174d3040252c3edba1fb04391719e6a984ee1f547959f68d92b9eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724222c78174d3040252c3edba1fb04391719e6a984ee1f547959f68d92b9eab->enter($__internal_724222c78174d3040252c3edba1fb04391719e6a984ee1f547959f68d92b9eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_724222c78174d3040252c3edba1fb04391719e6a984ee1f547959f68d92b9eab->leave($__internal_724222c78174d3040252c3edba1fb04391719e6a984ee1f547959f68d92b9eab_prof);

        
        $__internal_6db1c70895339cb7e52262e6a297f5ca3b3cb73bda15014acfb7d6dc4f1d1654->leave($__internal_6db1c70895339cb7e52262e6a297f5ca3b3cb73bda15014acfb7d6dc4f1d1654_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_271c7063f0a3411ce972d2151db72c858f3d12183ede11b065416de3fe8ca418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271c7063f0a3411ce972d2151db72c858f3d12183ede11b065416de3fe8ca418->enter($__internal_271c7063f0a3411ce972d2151db72c858f3d12183ede11b065416de3fe8ca418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c39ecc40fec12500c99efdd361a30f529768b2ad9fd350025c319c5d84c3795f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39ecc40fec12500c99efdd361a30f529768b2ad9fd350025c319c5d84c3795f->enter($__internal_c39ecc40fec12500c99efdd361a30f529768b2ad9fd350025c319c5d84c3795f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c39ecc40fec12500c99efdd361a30f529768b2ad9fd350025c319c5d84c3795f->leave($__internal_c39ecc40fec12500c99efdd361a30f529768b2ad9fd350025c319c5d84c3795f_prof);

        
        $__internal_271c7063f0a3411ce972d2151db72c858f3d12183ede11b065416de3fe8ca418->leave($__internal_271c7063f0a3411ce972d2151db72c858f3d12183ede11b065416de3fe8ca418_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 61,  191 => 57,  174 => 6,  156 => 5,  144 => 66,  138 => 62,  136 => 61,  131 => 58,  129 => 57,  122 => 52,  111 => 50,  107 => 49,  101 => 45,  90 => 43,  86 => 42,  55 => 14,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\">
    \t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    </head>
    <body>
        <nav class=\"navbar bg-dark fixed-top\">
            <ul style=\"display:flex;margin-left:500px;\">
                <li><a href=\"{{path('list')}}\" style=\"color:white;font-size:14px\">Accueil</a></li>
                <ul>
                    <li><a href=\"#\" style=\"color:white;font-size:14px\">Contact</a></li>
                </ul>
            </ul>
            <ul class=\"nav justify-content-end\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\" style=\"color:white;font-size:14px\">Connexion</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\" style=\"color:white;font-size:14px\">S'inscrire</a>
                </li>
            </ul>
            
        </nav>
        <div class=\"header1\">
            <div class=\"card-header \">
                <div class=\"col-lg-12\" style=\"margin-top:-310px;height:50px; opacity: 0.6;\">
                
                </div>
                <h2 style=\"font-family:Goudy Old style; color:white;margin-top:250px\">
                <center><i>Reservez vos biens</i></center>
                </h2>
            </div>
            <form method=\"POST\" class=\"row\" action=\"#list\">
                <div class=\"col-2\"></div>
                <select class=\"col-2 form-control mx-sm-1\" name=\"localite\">
                    <option value=\"\">choisir la localite</option>
                    {% for localite in localites %}
                    <option value=\"{{ localite.id }}\">{{ localite.libelle }}</option>
                    {% endfor %}
                </select>

                <select class=\"col-2 form-control mx-sm-1\" name=\"type\">
                    <option value=\"\">choisir type de bien</option>
                            {% for type in types %}
                    <option value=\"{{ type.id }}\">{{ type.libelle }}</option>
                            {% endfor %}
                </select>
                <input class=\"col-2 form-control mx-sm-1\" type=\"text\" name=\"max\" placeholder=\"Prix max\">
                <input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary col-2\">\t
            </form>
        </div>
        {% block body %}{% endblock %}
        <h1 class=\"card-title\" style=\"font-family:Goudy Old style; color:grey;\">
            <center><i>Tous savoir sur Darmanko immobilier</i></center>
        </h1>
        {% block javascripts %}{% endblock %}
    </body>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"{{asset('js/map.js')}}\"></script>
</html>", "::layout.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/app/Resources/views/layout.html.twig");
    }
}
