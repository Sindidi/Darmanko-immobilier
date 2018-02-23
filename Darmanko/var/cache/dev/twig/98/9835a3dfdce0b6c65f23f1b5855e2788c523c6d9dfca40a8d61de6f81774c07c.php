<?php

/* ::layout.html.twig */
class __TwigTemplate_87251dacfee3c49ac18c37d24fd308fdfa00680ccf46dbac9e9e14d66db2fad1 extends Twig_Template
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
        $__internal_2676db96366fee92dc3808805e6f79a3022c9e8f25052a648010e4e62940a6fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2676db96366fee92dc3808805e6f79a3022c9e8f25052a648010e4e62940a6fe->enter($__internal_2676db96366fee92dc3808805e6f79a3022c9e8f25052a648010e4e62940a6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_b4c193260180e27fd0ecc7aa38e59a6f9db82628d2cc77041edeeb8a1870255f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4c193260180e27fd0ecc7aa38e59a6f9db82628d2cc77041edeeb8a1870255f->enter($__internal_b4c193260180e27fd0ecc7aa38e59a6f9db82628d2cc77041edeeb8a1870255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
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
        <div class=\"header1\">
            <div class=\"\">
                <div class=\"card-header\">
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
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["localites"] ?? $this->getContext($context, "localites")));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 44
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["localite"], "libelle", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </select>

                    <select class=\"col-2 form-control mx-sm-1\" name=\"type\">
                        <option value=\"\">choisir type de bien</option>
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 51
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </select>
                    <input class=\"col-2 form-control mx-sm-1\" type=\"number\" name=\"max\" placeholder=\"Votre budget\">
                    <input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary col-2\">\t
                </form>
            </div>
        </div>
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        <h1 class=\"card-title\" style=\"font-family:Goudy Old style; color:grey;\">
            <center><i>Tous savoir sur Darmanko immobilier</i></center>
        </h1>
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>

<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/map.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_2676db96366fee92dc3808805e6f79a3022c9e8f25052a648010e4e62940a6fe->leave($__internal_2676db96366fee92dc3808805e6f79a3022c9e8f25052a648010e4e62940a6fe_prof);

        
        $__internal_b4c193260180e27fd0ecc7aa38e59a6f9db82628d2cc77041edeeb8a1870255f->leave($__internal_b4c193260180e27fd0ecc7aa38e59a6f9db82628d2cc77041edeeb8a1870255f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6d62a6cb9d37947e05026978ad5a0ca5a91faaf312704416c73b0ae4c5563b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6d62a6cb9d37947e05026978ad5a0ca5a91faaf312704416c73b0ae4c5563b7->enter($__internal_f6d62a6cb9d37947e05026978ad5a0ca5a91faaf312704416c73b0ae4c5563b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90bed8295a24a428f939a363d5dbcdedf56b898cb8036a23d2e8ca19b271aea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bed8295a24a428f939a363d5dbcdedf56b898cb8036a23d2e8ca19b271aea7->enter($__internal_90bed8295a24a428f939a363d5dbcdedf56b898cb8036a23d2e8ca19b271aea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_90bed8295a24a428f939a363d5dbcdedf56b898cb8036a23d2e8ca19b271aea7->leave($__internal_90bed8295a24a428f939a363d5dbcdedf56b898cb8036a23d2e8ca19b271aea7_prof);

        
        $__internal_f6d62a6cb9d37947e05026978ad5a0ca5a91faaf312704416c73b0ae4c5563b7->leave($__internal_f6d62a6cb9d37947e05026978ad5a0ca5a91faaf312704416c73b0ae4c5563b7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e1a31916e5d65cc710750f6ac450d3d295dff2d356b15ab8defd297716ea8d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a31916e5d65cc710750f6ac450d3d295dff2d356b15ab8defd297716ea8d2a->enter($__internal_e1a31916e5d65cc710750f6ac450d3d295dff2d356b15ab8defd297716ea8d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e14ae79a971a6287d410a11787698e35665200230686b3b454959c6238ff9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e14ae79a971a6287d410a11787698e35665200230686b3b454959c6238ff9e3->enter($__internal_4e14ae79a971a6287d410a11787698e35665200230686b3b454959c6238ff9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4e14ae79a971a6287d410a11787698e35665200230686b3b454959c6238ff9e3->leave($__internal_4e14ae79a971a6287d410a11787698e35665200230686b3b454959c6238ff9e3_prof);

        
        $__internal_e1a31916e5d65cc710750f6ac450d3d295dff2d356b15ab8defd297716ea8d2a->leave($__internal_e1a31916e5d65cc710750f6ac450d3d295dff2d356b15ab8defd297716ea8d2a_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e8fa563362e22f223eacb01641a91208345a93bda81f57815660a6ef60fa431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8fa563362e22f223eacb01641a91208345a93bda81f57815660a6ef60fa431->enter($__internal_1e8fa563362e22f223eacb01641a91208345a93bda81f57815660a6ef60fa431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91670e96a670b30b663d19cc3e4f20648e3455636631ab36d6c71327e2079210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91670e96a670b30b663d19cc3e4f20648e3455636631ab36d6c71327e2079210->enter($__internal_91670e96a670b30b663d19cc3e4f20648e3455636631ab36d6c71327e2079210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91670e96a670b30b663d19cc3e4f20648e3455636631ab36d6c71327e2079210->leave($__internal_91670e96a670b30b663d19cc3e4f20648e3455636631ab36d6c71327e2079210_prof);

        
        $__internal_1e8fa563362e22f223eacb01641a91208345a93bda81f57815660a6ef60fa431->leave($__internal_1e8fa563362e22f223eacb01641a91208345a93bda81f57815660a6ef60fa431_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_287c2b8928c40af929ec8f7c6b54455b006a19b38ebf92473679332584edf2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287c2b8928c40af929ec8f7c6b54455b006a19b38ebf92473679332584edf2a6->enter($__internal_287c2b8928c40af929ec8f7c6b54455b006a19b38ebf92473679332584edf2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_952f72984e8d0fadd6a9cc1eb0765d07e3c8ad717d20c242086ee29db758a0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952f72984e8d0fadd6a9cc1eb0765d07e3c8ad717d20c242086ee29db758a0e8->enter($__internal_952f72984e8d0fadd6a9cc1eb0765d07e3c8ad717d20c242086ee29db758a0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_952f72984e8d0fadd6a9cc1eb0765d07e3c8ad717d20c242086ee29db758a0e8->leave($__internal_952f72984e8d0fadd6a9cc1eb0765d07e3c8ad717d20c242086ee29db758a0e8_prof);

        
        $__internal_287c2b8928c40af929ec8f7c6b54455b006a19b38ebf92473679332584edf2a6->leave($__internal_287c2b8928c40af929ec8f7c6b54455b006a19b38ebf92473679332584edf2a6_prof);

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
        return array (  211 => 63,  194 => 59,  177 => 6,  159 => 5,  147 => 69,  140 => 64,  138 => 63,  133 => 60,  131 => 59,  123 => 53,  112 => 51,  108 => 50,  102 => 46,  91 => 44,  87 => 43,  55 => 14,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
    \t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    \t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    </head>
    <body>
        <nav class=\"navbar bg-dark fixed-top\">
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
        <div class=\"header1\">
            <div class=\"\">
                <div class=\"card-header\">
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
                    <input class=\"col-2 form-control mx-sm-1\" type=\"number\" name=\"max\" placeholder=\"Votre budget\">
                    <input type=\"submit\" value=\"rechercher\" class=\"btn btn-primary col-2\">\t
                </form>
            </div>
        </div>
        {% block body %}{% endblock %}
        <h1 class=\"card-title\" style=\"font-family:Goudy Old style; color:grey;\">
            <center><i>Tous savoir sur Darmanko immobilier</i></center>
        </h1>
        {% block javascripts %}{% endblock %}
    </body>

<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>
<script src=\"{{asset('js/map.js')}}\"></script>
</html>", "::layout.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/app/Resources/views/layout.html.twig");
    }
}
