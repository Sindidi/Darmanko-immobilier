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
        $__internal_9931b6eaeeb10ff1df94b02d1222011692b5112dfbb145b555f9f9801b50ed69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9931b6eaeeb10ff1df94b02d1222011692b5112dfbb145b555f9f9801b50ed69->enter($__internal_9931b6eaeeb10ff1df94b02d1222011692b5112dfbb145b555f9f9801b50ed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

        $__internal_2462daa6d1d6d2c154f2ae34981054936028b7f028297cc2e67a8ffea0bc1ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2462daa6d1d6d2c154f2ae34981054936028b7f028297cc2e67a8ffea0bc1ac7->enter($__internal_2462daa6d1d6d2c154f2ae34981054936028b7f028297cc2e67a8ffea0bc1ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

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
        
        ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_9931b6eaeeb10ff1df94b02d1222011692b5112dfbb145b555f9f9801b50ed69->leave($__internal_9931b6eaeeb10ff1df94b02d1222011692b5112dfbb145b555f9f9801b50ed69_prof);

        
        $__internal_2462daa6d1d6d2c154f2ae34981054936028b7f028297cc2e67a8ffea0bc1ac7->leave($__internal_2462daa6d1d6d2c154f2ae34981054936028b7f028297cc2e67a8ffea0bc1ac7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d12c718067b94537a5661fdbc6139a63b262ce5581f49bf1d48e08a3ded46dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12c718067b94537a5661fdbc6139a63b262ce5581f49bf1d48e08a3ded46dad->enter($__internal_d12c718067b94537a5661fdbc6139a63b262ce5581f49bf1d48e08a3ded46dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5c6a3577ad9d84cb424e8de986bac043bb80220fa99c21371834b03d60751a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c6a3577ad9d84cb424e8de986bac043bb80220fa99c21371834b03d60751a3->enter($__internal_c5c6a3577ad9d84cb424e8de986bac043bb80220fa99c21371834b03d60751a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c5c6a3577ad9d84cb424e8de986bac043bb80220fa99c21371834b03d60751a3->leave($__internal_c5c6a3577ad9d84cb424e8de986bac043bb80220fa99c21371834b03d60751a3_prof);

        
        $__internal_d12c718067b94537a5661fdbc6139a63b262ce5581f49bf1d48e08a3ded46dad->leave($__internal_d12c718067b94537a5661fdbc6139a63b262ce5581f49bf1d48e08a3ded46dad_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_af8b3072c9d46d13e6bb43d66bcfbb289b1b3ff8fa57307b6fddccd6461708f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8b3072c9d46d13e6bb43d66bcfbb289b1b3ff8fa57307b6fddccd6461708f6->enter($__internal_af8b3072c9d46d13e6bb43d66bcfbb289b1b3ff8fa57307b6fddccd6461708f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e72fc6fcc57f18f42271bf615150f250686d4107a809591eca4de54f2c79f005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72fc6fcc57f18f42271bf615150f250686d4107a809591eca4de54f2c79f005->enter($__internal_e72fc6fcc57f18f42271bf615150f250686d4107a809591eca4de54f2c79f005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e72fc6fcc57f18f42271bf615150f250686d4107a809591eca4de54f2c79f005->leave($__internal_e72fc6fcc57f18f42271bf615150f250686d4107a809591eca4de54f2c79f005_prof);

        
        $__internal_af8b3072c9d46d13e6bb43d66bcfbb289b1b3ff8fa57307b6fddccd6461708f6->leave($__internal_af8b3072c9d46d13e6bb43d66bcfbb289b1b3ff8fa57307b6fddccd6461708f6_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_7dff2c4e2ad33cc77dd029385d0d8a38d44be4400296f8915e93643c80a19008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dff2c4e2ad33cc77dd029385d0d8a38d44be4400296f8915e93643c80a19008->enter($__internal_7dff2c4e2ad33cc77dd029385d0d8a38d44be4400296f8915e93643c80a19008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9abcd10d274aa15242c639c35a9088b27c6f0f225a11759e34445360ca38e5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9abcd10d274aa15242c639c35a9088b27c6f0f225a11759e34445360ca38e5c7->enter($__internal_9abcd10d274aa15242c639c35a9088b27c6f0f225a11759e34445360ca38e5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9abcd10d274aa15242c639c35a9088b27c6f0f225a11759e34445360ca38e5c7->leave($__internal_9abcd10d274aa15242c639c35a9088b27c6f0f225a11759e34445360ca38e5c7_prof);

        
        $__internal_7dff2c4e2ad33cc77dd029385d0d8a38d44be4400296f8915e93643c80a19008->leave($__internal_7dff2c4e2ad33cc77dd029385d0d8a38d44be4400296f8915e93643c80a19008_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5898f1275c646c1d9eaa77763a2717cf1450e6cd0ff1b6e3f5c2a679d0a3aea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5898f1275c646c1d9eaa77763a2717cf1450e6cd0ff1b6e3f5c2a679d0a3aea1->enter($__internal_5898f1275c646c1d9eaa77763a2717cf1450e6cd0ff1b6e3f5c2a679d0a3aea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3af6e46f9b79d82d09a9019a00ce0cb5c810a633b334abd8bd6fa78050050e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af6e46f9b79d82d09a9019a00ce0cb5c810a633b334abd8bd6fa78050050e20->enter($__internal_3af6e46f9b79d82d09a9019a00ce0cb5c810a633b334abd8bd6fa78050050e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3af6e46f9b79d82d09a9019a00ce0cb5c810a633b334abd8bd6fa78050050e20->leave($__internal_3af6e46f9b79d82d09a9019a00ce0cb5c810a633b334abd8bd6fa78050050e20_prof);

        
        $__internal_5898f1275c646c1d9eaa77763a2717cf1450e6cd0ff1b6e3f5c2a679d0a3aea1->leave($__internal_5898f1275c646c1d9eaa77763a2717cf1450e6cd0ff1b6e3f5c2a679d0a3aea1_prof);

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
        return array (  150 => 31,  133 => 30,  116 => 6,  98 => 5,  86 => 37,  79 => 32,  76 => 31,  74 => 30,  55 => 14,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
