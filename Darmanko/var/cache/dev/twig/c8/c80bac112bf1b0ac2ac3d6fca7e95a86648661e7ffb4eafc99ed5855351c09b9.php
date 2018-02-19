<?php

/* ::reservation.html.twig */
class __TwigTemplate_921b30322c6c7b4435def893fe6deba24f32625784840578ba002f5e8fa565da extends Twig_Template
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
        $__internal_0429cc64f4ef5f69e35a950dfc7749af19c35e9331eea27fc451b2ed22fe30c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0429cc64f4ef5f69e35a950dfc7749af19c35e9331eea27fc451b2ed22fe30c0->enter($__internal_0429cc64f4ef5f69e35a950dfc7749af19c35e9331eea27fc451b2ed22fe30c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

        $__internal_30df7c8ad90f5938afd915b999586db45a8d02fe4494e918efde22cc50f312aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30df7c8ad90f5938afd915b999586db45a8d02fe4494e918efde22cc50f312aa->enter($__internal_30df7c8ad90f5938afd915b999586db45a8d02fe4494e918efde22cc50f312aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

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
        <h1><p><br><br></p></h1>
        <form class=\"form row\">
            <div class=\"col-1\"></div>
            <h4 class=\"col-4\" style=\"font-family:Goudy; color:grey\"><i>Darmanko immobilier</i></h4>
            <div class=\"form-group col-3  mb-2\">
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Entrer juste un nom\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary mb-2 col-2\">Rechercher</button>
        </form><br>
        ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</html>";
        
        $__internal_0429cc64f4ef5f69e35a950dfc7749af19c35e9331eea27fc451b2ed22fe30c0->leave($__internal_0429cc64f4ef5f69e35a950dfc7749af19c35e9331eea27fc451b2ed22fe30c0_prof);

        
        $__internal_30df7c8ad90f5938afd915b999586db45a8d02fe4494e918efde22cc50f312aa->leave($__internal_30df7c8ad90f5938afd915b999586db45a8d02fe4494e918efde22cc50f312aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce1c98501655d357fc192863fe15f0f640597d58bd497a26d33cb81f57f4a528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1c98501655d357fc192863fe15f0f640597d58bd497a26d33cb81f57f4a528->enter($__internal_ce1c98501655d357fc192863fe15f0f640597d58bd497a26d33cb81f57f4a528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22279005a390540a87baffce4512d141fe7cd88960ea5f9aae751754c3df9bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22279005a390540a87baffce4512d141fe7cd88960ea5f9aae751754c3df9bda->enter($__internal_22279005a390540a87baffce4512d141fe7cd88960ea5f9aae751754c3df9bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22279005a390540a87baffce4512d141fe7cd88960ea5f9aae751754c3df9bda->leave($__internal_22279005a390540a87baffce4512d141fe7cd88960ea5f9aae751754c3df9bda_prof);

        
        $__internal_ce1c98501655d357fc192863fe15f0f640597d58bd497a26d33cb81f57f4a528->leave($__internal_ce1c98501655d357fc192863fe15f0f640597d58bd497a26d33cb81f57f4a528_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecb99ab5fe24a5991e6855a8c0a756db473b84ec2bba4ff4c0aed3a15c7632f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb99ab5fe24a5991e6855a8c0a756db473b84ec2bba4ff4c0aed3a15c7632f4->enter($__internal_ecb99ab5fe24a5991e6855a8c0a756db473b84ec2bba4ff4c0aed3a15c7632f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d7a3fa8dc1bfaa38ecb7997e661c05924f6908dca16ad08b19b694511b55c971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a3fa8dc1bfaa38ecb7997e661c05924f6908dca16ad08b19b694511b55c971->enter($__internal_d7a3fa8dc1bfaa38ecb7997e661c05924f6908dca16ad08b19b694511b55c971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7a3fa8dc1bfaa38ecb7997e661c05924f6908dca16ad08b19b694511b55c971->leave($__internal_d7a3fa8dc1bfaa38ecb7997e661c05924f6908dca16ad08b19b694511b55c971_prof);

        
        $__internal_ecb99ab5fe24a5991e6855a8c0a756db473b84ec2bba4ff4c0aed3a15c7632f4->leave($__internal_ecb99ab5fe24a5991e6855a8c0a756db473b84ec2bba4ff4c0aed3a15c7632f4_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c992851fec44c7abe781037792d13419766f5966fe8b07e27631de574b54698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c992851fec44c7abe781037792d13419766f5966fe8b07e27631de574b54698->enter($__internal_2c992851fec44c7abe781037792d13419766f5966fe8b07e27631de574b54698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_226f50c80fb1493a7268501b8a6a35460b25614629eb710865efcfd91f40c10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226f50c80fb1493a7268501b8a6a35460b25614629eb710865efcfd91f40c10f->enter($__internal_226f50c80fb1493a7268501b8a6a35460b25614629eb710865efcfd91f40c10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_226f50c80fb1493a7268501b8a6a35460b25614629eb710865efcfd91f40c10f->leave($__internal_226f50c80fb1493a7268501b8a6a35460b25614629eb710865efcfd91f40c10f_prof);

        
        $__internal_2c992851fec44c7abe781037792d13419766f5966fe8b07e27631de574b54698->leave($__internal_2c992851fec44c7abe781037792d13419766f5966fe8b07e27631de574b54698_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c41cb7fd81922c52b7a8b461327685bec0d25680f32626cf6c08d4244f09c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c41cb7fd81922c52b7a8b461327685bec0d25680f32626cf6c08d4244f09c14->enter($__internal_0c41cb7fd81922c52b7a8b461327685bec0d25680f32626cf6c08d4244f09c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f46a49d133e984e2a3a3f1e7141342eb839d6065b43d32a1053f37ba13a8aab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46a49d133e984e2a3a3f1e7141342eb839d6065b43d32a1053f37ba13a8aab1->enter($__internal_f46a49d133e984e2a3a3f1e7141342eb839d6065b43d32a1053f37ba13a8aab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f46a49d133e984e2a3a3f1e7141342eb839d6065b43d32a1053f37ba13a8aab1->leave($__internal_f46a49d133e984e2a3a3f1e7141342eb839d6065b43d32a1053f37ba13a8aab1_prof);

        
        $__internal_0c41cb7fd81922c52b7a8b461327685bec0d25680f32626cf6c08d4244f09c14->leave($__internal_0c41cb7fd81922c52b7a8b461327685bec0d25680f32626cf6c08d4244f09c14_prof);

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
        return array (  157 => 38,  140 => 37,  123 => 6,  105 => 5,  93 => 44,  86 => 39,  83 => 38,  81 => 37,  55 => 14,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <h1><p><br><br></p></h1>
        <form class=\"form row\">
            <div class=\"col-1\"></div>
            <h4 class=\"col-4\" style=\"font-family:Goudy; color:grey\"><i>Darmanko immobilier</i></h4>
            <div class=\"form-group col-3  mb-2\">
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Entrer juste un nom\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary mb-2 col-2\">Rechercher</button>
        </form><br>
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
