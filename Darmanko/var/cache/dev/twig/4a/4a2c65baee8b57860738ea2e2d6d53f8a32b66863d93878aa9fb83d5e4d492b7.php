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
        $__internal_4e8ae1570941a3c3991460642131a25f0623f227617e4aad367d86dcfb10e4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8ae1570941a3c3991460642131a25f0623f227617e4aad367d86dcfb10e4ff->enter($__internal_4e8ae1570941a3c3991460642131a25f0623f227617e4aad367d86dcfb10e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

        $__internal_c816b1af057cba7f39bc5df7c16049879e5f8469c04c085a730411156dc65abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c816b1af057cba7f39bc5df7c16049879e5f8469c04c085a730411156dc65abc->enter($__internal_c816b1af057cba7f39bc5df7c16049879e5f8469c04c085a730411156dc65abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

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
        
        $__internal_4e8ae1570941a3c3991460642131a25f0623f227617e4aad367d86dcfb10e4ff->leave($__internal_4e8ae1570941a3c3991460642131a25f0623f227617e4aad367d86dcfb10e4ff_prof);

        
        $__internal_c816b1af057cba7f39bc5df7c16049879e5f8469c04c085a730411156dc65abc->leave($__internal_c816b1af057cba7f39bc5df7c16049879e5f8469c04c085a730411156dc65abc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f71d8361676abc7143f48edef6f21c955e9d7382c2a554418fbda57c5d5880e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71d8361676abc7143f48edef6f21c955e9d7382c2a554418fbda57c5d5880e3->enter($__internal_f71d8361676abc7143f48edef6f21c955e9d7382c2a554418fbda57c5d5880e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_536d675ffe5cd4d1b28504dde36f6d06dd5abe98c975552c1ac893ebf2374f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536d675ffe5cd4d1b28504dde36f6d06dd5abe98c975552c1ac893ebf2374f51->enter($__internal_536d675ffe5cd4d1b28504dde36f6d06dd5abe98c975552c1ac893ebf2374f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_536d675ffe5cd4d1b28504dde36f6d06dd5abe98c975552c1ac893ebf2374f51->leave($__internal_536d675ffe5cd4d1b28504dde36f6d06dd5abe98c975552c1ac893ebf2374f51_prof);

        
        $__internal_f71d8361676abc7143f48edef6f21c955e9d7382c2a554418fbda57c5d5880e3->leave($__internal_f71d8361676abc7143f48edef6f21c955e9d7382c2a554418fbda57c5d5880e3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c115b0dc1f7c1605c01e80b75841a302e6c88ab88186579e23179f42722af47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c115b0dc1f7c1605c01e80b75841a302e6c88ab88186579e23179f42722af47c->enter($__internal_c115b0dc1f7c1605c01e80b75841a302e6c88ab88186579e23179f42722af47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_93f29644a690f74444c6bb420d8af7230711f68cf92024a77dd0213d5e98ef68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f29644a690f74444c6bb420d8af7230711f68cf92024a77dd0213d5e98ef68->enter($__internal_93f29644a690f74444c6bb420d8af7230711f68cf92024a77dd0213d5e98ef68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_93f29644a690f74444c6bb420d8af7230711f68cf92024a77dd0213d5e98ef68->leave($__internal_93f29644a690f74444c6bb420d8af7230711f68cf92024a77dd0213d5e98ef68_prof);

        
        $__internal_c115b0dc1f7c1605c01e80b75841a302e6c88ab88186579e23179f42722af47c->leave($__internal_c115b0dc1f7c1605c01e80b75841a302e6c88ab88186579e23179f42722af47c_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_0156a491946a28907b9ca5cda25e652377729f6a1d228c53a1d866d7a6ca3300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0156a491946a28907b9ca5cda25e652377729f6a1d228c53a1d866d7a6ca3300->enter($__internal_0156a491946a28907b9ca5cda25e652377729f6a1d228c53a1d866d7a6ca3300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d45327186440bff8ee5aa89943c5efe74bce14926dd90c57cc7fb78480cdce41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45327186440bff8ee5aa89943c5efe74bce14926dd90c57cc7fb78480cdce41->enter($__internal_d45327186440bff8ee5aa89943c5efe74bce14926dd90c57cc7fb78480cdce41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d45327186440bff8ee5aa89943c5efe74bce14926dd90c57cc7fb78480cdce41->leave($__internal_d45327186440bff8ee5aa89943c5efe74bce14926dd90c57cc7fb78480cdce41_prof);

        
        $__internal_0156a491946a28907b9ca5cda25e652377729f6a1d228c53a1d866d7a6ca3300->leave($__internal_0156a491946a28907b9ca5cda25e652377729f6a1d228c53a1d866d7a6ca3300_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5b777b3aed36a3276d022a75bd32c6b2e73708a5804f3fe80be8fc1c0d272c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b777b3aed36a3276d022a75bd32c6b2e73708a5804f3fe80be8fc1c0d272c9->enter($__internal_e5b777b3aed36a3276d022a75bd32c6b2e73708a5804f3fe80be8fc1c0d272c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f3b3bbc96c27c12bd495ac75de902bd2199416d7684f34750c73d4a4b96abb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b3bbc96c27c12bd495ac75de902bd2199416d7684f34750c73d4a4b96abb65->enter($__internal_f3b3bbc96c27c12bd495ac75de902bd2199416d7684f34750c73d4a4b96abb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f3b3bbc96c27c12bd495ac75de902bd2199416d7684f34750c73d4a4b96abb65->leave($__internal_f3b3bbc96c27c12bd495ac75de902bd2199416d7684f34750c73d4a4b96abb65_prof);

        
        $__internal_e5b777b3aed36a3276d022a75bd32c6b2e73708a5804f3fe80be8fc1c0d272c9->leave($__internal_e5b777b3aed36a3276d022a75bd32c6b2e73708a5804f3fe80be8fc1c0d272c9_prof);

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
