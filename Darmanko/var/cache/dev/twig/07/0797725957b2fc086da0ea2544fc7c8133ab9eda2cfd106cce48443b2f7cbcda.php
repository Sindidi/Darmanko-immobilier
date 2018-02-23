<?php

/* ::base.html.twig */
class __TwigTemplate_75f6d1697f471eb5a2b4d2dc537280e809b722efdd7d18f8056fc34a2d24de35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc635b058069f5f47e437fc280f0a7db4add5499a34a924706f891806b00ffba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc635b058069f5f47e437fc280f0a7db4add5499a34a924706f891806b00ffba->enter($__internal_fc635b058069f5f47e437fc280f0a7db4add5499a34a924706f891806b00ffba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b845dfbf88fadcd6fceec505948f95ac8018736483593d7ec098cafb98c346f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b845dfbf88fadcd6fceec505948f95ac8018736483593d7ec098cafb98c346f7->enter($__internal_b845dfbf88fadcd6fceec505948f95ac8018736483593d7ec098cafb98c346f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
</html>
";
        
        $__internal_fc635b058069f5f47e437fc280f0a7db4add5499a34a924706f891806b00ffba->leave($__internal_fc635b058069f5f47e437fc280f0a7db4add5499a34a924706f891806b00ffba_prof);

        
        $__internal_b845dfbf88fadcd6fceec505948f95ac8018736483593d7ec098cafb98c346f7->leave($__internal_b845dfbf88fadcd6fceec505948f95ac8018736483593d7ec098cafb98c346f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_98dae1ca484e53c93f2aaf0bd057922c4b6b45621dd7b495155f56730eca358a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dae1ca484e53c93f2aaf0bd057922c4b6b45621dd7b495155f56730eca358a->enter($__internal_98dae1ca484e53c93f2aaf0bd057922c4b6b45621dd7b495155f56730eca358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88713882a0fc4401b4144bfdf14a861d65dafa639f70711860bbf92319d7d728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88713882a0fc4401b4144bfdf14a861d65dafa639f70711860bbf92319d7d728->enter($__internal_88713882a0fc4401b4144bfdf14a861d65dafa639f70711860bbf92319d7d728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_88713882a0fc4401b4144bfdf14a861d65dafa639f70711860bbf92319d7d728->leave($__internal_88713882a0fc4401b4144bfdf14a861d65dafa639f70711860bbf92319d7d728_prof);

        
        $__internal_98dae1ca484e53c93f2aaf0bd057922c4b6b45621dd7b495155f56730eca358a->leave($__internal_98dae1ca484e53c93f2aaf0bd057922c4b6b45621dd7b495155f56730eca358a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3bb5e011fb473eb9c933e8b5bcb34694d09af8ec10a390fb917b86588c4dd308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bb5e011fb473eb9c933e8b5bcb34694d09af8ec10a390fb917b86588c4dd308->enter($__internal_3bb5e011fb473eb9c933e8b5bcb34694d09af8ec10a390fb917b86588c4dd308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fff6b2af1d1c3e949e338c912634b99bcb43f9e234c331e44684a1ee815f4163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff6b2af1d1c3e949e338c912634b99bcb43f9e234c331e44684a1ee815f4163->enter($__internal_fff6b2af1d1c3e949e338c912634b99bcb43f9e234c331e44684a1ee815f4163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fff6b2af1d1c3e949e338c912634b99bcb43f9e234c331e44684a1ee815f4163->leave($__internal_fff6b2af1d1c3e949e338c912634b99bcb43f9e234c331e44684a1ee815f4163_prof);

        
        $__internal_3bb5e011fb473eb9c933e8b5bcb34694d09af8ec10a390fb917b86588c4dd308->leave($__internal_3bb5e011fb473eb9c933e8b5bcb34694d09af8ec10a390fb917b86588c4dd308_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db7094e0c88d5b8db674eee6a09613780b5fa7cd7c008cf91dd01a59de4e6533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db7094e0c88d5b8db674eee6a09613780b5fa7cd7c008cf91dd01a59de4e6533->enter($__internal_db7094e0c88d5b8db674eee6a09613780b5fa7cd7c008cf91dd01a59de4e6533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e72f6fc9038fc606626533ecbeafcb4aa3a9eb43db6f13da413ed8fdd992c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e72f6fc9038fc606626533ecbeafcb4aa3a9eb43db6f13da413ed8fdd992c2f->enter($__internal_5e72f6fc9038fc606626533ecbeafcb4aa3a9eb43db6f13da413ed8fdd992c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5e72f6fc9038fc606626533ecbeafcb4aa3a9eb43db6f13da413ed8fdd992c2f->leave($__internal_5e72f6fc9038fc606626533ecbeafcb4aa3a9eb43db6f13da413ed8fdd992c2f_prof);

        
        $__internal_db7094e0c88d5b8db674eee6a09613780b5fa7cd7c008cf91dd01a59de4e6533->leave($__internal_db7094e0c88d5b8db674eee6a09613780b5fa7cd7c008cf91dd01a59de4e6533_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_aacbaca6b9eae1011d56064e5474a76f3d7d59280036f55d51dfe5fbcc4fb045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacbaca6b9eae1011d56064e5474a76f3d7d59280036f55d51dfe5fbcc4fb045->enter($__internal_aacbaca6b9eae1011d56064e5474a76f3d7d59280036f55d51dfe5fbcc4fb045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90c76a5e0d12fb82e476ba2a11c191d0f83487f5d4d1604dad411c83973f7fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c76a5e0d12fb82e476ba2a11c191d0f83487f5d4d1604dad411c83973f7fd5->enter($__internal_90c76a5e0d12fb82e476ba2a11c191d0f83487f5d4d1604dad411c83973f7fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_90c76a5e0d12fb82e476ba2a11c191d0f83487f5d4d1604dad411c83973f7fd5->leave($__internal_90c76a5e0d12fb82e476ba2a11c191d0f83487f5d4d1604dad411c83973f7fd5_prof);

        
        $__internal_aacbaca6b9eae1011d56064e5474a76f3d7d59280036f55d51dfe5fbcc4fb045->leave($__internal_aacbaca6b9eae1011d56064e5474a76f3d7d59280036f55d51dfe5fbcc4fb045_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 13,  113 => 12,  96 => 6,  78 => 5,  65 => 19,  58 => 14,  55 => 13,  53 => 12,  47 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        {% block javascripts %}{% endblock %}
        {% block body %}{% endblock %}
    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"{{asset('js/script.js')}}\"></script>
</html>
", "::base.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/app/Resources/views/base.html.twig");
    }
}
