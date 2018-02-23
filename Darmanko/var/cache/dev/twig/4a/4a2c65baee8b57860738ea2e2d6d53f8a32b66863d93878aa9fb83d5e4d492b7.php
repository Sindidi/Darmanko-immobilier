<?php

/* ::reservation.html.twig */
class __TwigTemplate_789741df2101357197c1dd0d966ee8d99b5b239dc8de1f369d32b37c87aa5133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8f60c27200d6ff50b061b54803070753b487d3f371c0c5922936bfddd289b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f60c27200d6ff50b061b54803070753b487d3f371c0c5922936bfddd289b51->enter($__internal_d8f60c27200d6ff50b061b54803070753b487d3f371c0c5922936bfddd289b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

        $__internal_d58695f548c73dab156cf4fb21ef142350689bbea24bbfab0ecbe33b39a6e9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58695f548c73dab156cf4fb21ef142350689bbea24bbfab0ecbe33b39a6e9eb->enter($__internal_d58695f548c73dab156cf4fb21ef142350689bbea24bbfab0ecbe33b39a6e9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

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
        <nav class=\"navbar bg-secondary fixed-top\">
            <ul style=\"display:flex;margin-left:500px;\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("list");
        echo "\" class=\"txtNav\">Accueil</a></li>
                <ul>
                    <li><a href=\"#\" class=\"txtNav\">Contact</a></li>
                </ul>
            </ul>
            <ul class=\"nav justify-content-end\">
                <li class=\"nav-item\">
                    <a class=\"nav-link txtNav\" href=\"#\">Connexion</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link txtNav\" href=\"#\">S'inscrire</a>
                </li>   
            </ul>
        </nav>
        <h1><p><br><br></p></h1>
        <div class=\"row\">
            <div class=\"col-2\"></div>
            <h4 class=\"col-3\" style=\"font-family:Goudy; color:grey\"><i>Darmanko immobilier</i></h4>
            <form class=\"form row col-6\">
                <div class=\"form-group col-5  mb-2\">
                    <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Entrer juste un nom\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary mb-2 col-4\">Rechercher</button>
            </form>
        </div><br>
        ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_d8f60c27200d6ff50b061b54803070753b487d3f371c0c5922936bfddd289b51->leave($__internal_d8f60c27200d6ff50b061b54803070753b487d3f371c0c5922936bfddd289b51_prof);

        
        $__internal_d58695f548c73dab156cf4fb21ef142350689bbea24bbfab0ecbe33b39a6e9eb->leave($__internal_d58695f548c73dab156cf4fb21ef142350689bbea24bbfab0ecbe33b39a6e9eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7aa19cbbc4d8602381ce18850f5d6be8649cdbfee61e9285ed3d139a3d06480e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa19cbbc4d8602381ce18850f5d6be8649cdbfee61e9285ed3d139a3d06480e->enter($__internal_7aa19cbbc4d8602381ce18850f5d6be8649cdbfee61e9285ed3d139a3d06480e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2dfd9660fb046a7c7b8ca9ce59a5365e49496e3a95ae64a83d6835f806f3a85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dfd9660fb046a7c7b8ca9ce59a5365e49496e3a95ae64a83d6835f806f3a85c->enter($__internal_2dfd9660fb046a7c7b8ca9ce59a5365e49496e3a95ae64a83d6835f806f3a85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2dfd9660fb046a7c7b8ca9ce59a5365e49496e3a95ae64a83d6835f806f3a85c->leave($__internal_2dfd9660fb046a7c7b8ca9ce59a5365e49496e3a95ae64a83d6835f806f3a85c_prof);

        
        $__internal_7aa19cbbc4d8602381ce18850f5d6be8649cdbfee61e9285ed3d139a3d06480e->leave($__internal_7aa19cbbc4d8602381ce18850f5d6be8649cdbfee61e9285ed3d139a3d06480e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dccf645aee5c41e56ba5988a66986d98130a2b54598ab8cc301953a8ede40339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dccf645aee5c41e56ba5988a66986d98130a2b54598ab8cc301953a8ede40339->enter($__internal_dccf645aee5c41e56ba5988a66986d98130a2b54598ab8cc301953a8ede40339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44e40df01d387852a866cc584f822216742edbdab1edb5bad7eacc5d4a04327e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44e40df01d387852a866cc584f822216742edbdab1edb5bad7eacc5d4a04327e->enter($__internal_44e40df01d387852a866cc584f822216742edbdab1edb5bad7eacc5d4a04327e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_44e40df01d387852a866cc584f822216742edbdab1edb5bad7eacc5d4a04327e->leave($__internal_44e40df01d387852a866cc584f822216742edbdab1edb5bad7eacc5d4a04327e_prof);

        
        $__internal_dccf645aee5c41e56ba5988a66986d98130a2b54598ab8cc301953a8ede40339->leave($__internal_dccf645aee5c41e56ba5988a66986d98130a2b54598ab8cc301953a8ede40339_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_a2acb0ef9e9f8ff474d7dc85674cc4616f88a42b6bc2cc294b1b74a3f3b693ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2acb0ef9e9f8ff474d7dc85674cc4616f88a42b6bc2cc294b1b74a3f3b693ff->enter($__internal_a2acb0ef9e9f8ff474d7dc85674cc4616f88a42b6bc2cc294b1b74a3f3b693ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_87d5f1f8aca93e344a56b654bc5669c5198a2c2188d62f19f4a6c05ab59befdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d5f1f8aca93e344a56b654bc5669c5198a2c2188d62f19f4a6c05ab59befdf->enter($__internal_87d5f1f8aca93e344a56b654bc5669c5198a2c2188d62f19f4a6c05ab59befdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_87d5f1f8aca93e344a56b654bc5669c5198a2c2188d62f19f4a6c05ab59befdf->leave($__internal_87d5f1f8aca93e344a56b654bc5669c5198a2c2188d62f19f4a6c05ab59befdf_prof);

        
        $__internal_a2acb0ef9e9f8ff474d7dc85674cc4616f88a42b6bc2cc294b1b74a3f3b693ff->leave($__internal_a2acb0ef9e9f8ff474d7dc85674cc4616f88a42b6bc2cc294b1b74a3f3b693ff_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06c92c2faca9f73b75797cce7a521a319541292a27dbdfd792b13add589200bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c92c2faca9f73b75797cce7a521a319541292a27dbdfd792b13add589200bb->enter($__internal_06c92c2faca9f73b75797cce7a521a319541292a27dbdfd792b13add589200bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6bdd104ff6f9312871898dc7107fe0acf8ed2db97febe4329af9c11f98127f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bdd104ff6f9312871898dc7107fe0acf8ed2db97febe4329af9c11f98127f54->enter($__internal_6bdd104ff6f9312871898dc7107fe0acf8ed2db97febe4329af9c11f98127f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6bdd104ff6f9312871898dc7107fe0acf8ed2db97febe4329af9c11f98127f54->leave($__internal_6bdd104ff6f9312871898dc7107fe0acf8ed2db97febe4329af9c11f98127f54_prof);

        
        $__internal_06c92c2faca9f73b75797cce7a521a319541292a27dbdfd792b13add589200bb->leave($__internal_06c92c2faca9f73b75797cce7a521a319541292a27dbdfd792b13add589200bb_prof);

    }

    public function getTemplateName()
    {
        return "::reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 40,  142 => 39,  125 => 6,  107 => 5,  95 => 46,  88 => 41,  85 => 40,  83 => 39,  55 => 14,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <nav class=\"navbar bg-secondary fixed-top\">
            <ul style=\"display:flex;margin-left:500px;\">
                <li><a href=\"{{path('list')}}\" class=\"txtNav\">Accueil</a></li>
                <ul>
                    <li><a href=\"#\" class=\"txtNav\">Contact</a></li>
                </ul>
            </ul>
            <ul class=\"nav justify-content-end\">
                <li class=\"nav-item\">
                    <a class=\"nav-link txtNav\" href=\"#\">Connexion</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link txtNav\" href=\"#\">S'inscrire</a>
                </li>   
            </ul>
        </nav>
        <h1><p><br><br></p></h1>
        <div class=\"row\">
            <div class=\"col-2\"></div>
            <h4 class=\"col-3\" style=\"font-family:Goudy; color:grey\"><i>Darmanko immobilier</i></h4>
            <form class=\"form row col-6\">
                <div class=\"form-group col-5  mb-2\">
                    <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Entrer juste un nom\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary mb-2 col-4\">Rechercher</button>
            </form>
        </div><br>
        {% block content %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"{{asset('js/script.js')}}\"></script>
</html>", "::reservation.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/app/Resources/views/reservation.html.twig");
    }
}
