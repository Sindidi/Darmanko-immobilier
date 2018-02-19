<?php

/* ::base.html.twig */
class __TwigTemplate_2e55ceb3e3a8172ee2bdb98420a739c71281e5768b9082c463522045b60e4555 extends Twig_Template
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
        $__internal_a2b771a9e45be39fd6461c45070fee1a62116ccb611d60b8b94859ffd6802bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b771a9e45be39fd6461c45070fee1a62116ccb611d60b8b94859ffd6802bb8->enter($__internal_a2b771a9e45be39fd6461c45070fee1a62116ccb611d60b8b94859ffd6802bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6123798367d76c2c265c9de6078d74f335eb1e76b1546901b0f62d9d3b381c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6123798367d76c2c265c9de6078d74f335eb1e76b1546901b0f62d9d3b381c0e->enter($__internal_6123798367d76c2c265c9de6078d74f335eb1e76b1546901b0f62d9d3b381c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
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
        
        $__internal_a2b771a9e45be39fd6461c45070fee1a62116ccb611d60b8b94859ffd6802bb8->leave($__internal_a2b771a9e45be39fd6461c45070fee1a62116ccb611d60b8b94859ffd6802bb8_prof);

        
        $__internal_6123798367d76c2c265c9de6078d74f335eb1e76b1546901b0f62d9d3b381c0e->leave($__internal_6123798367d76c2c265c9de6078d74f335eb1e76b1546901b0f62d9d3b381c0e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f842503c427f742c3f34343ac248041c8146801a9ec4940e68978a7583adebc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f842503c427f742c3f34343ac248041c8146801a9ec4940e68978a7583adebc0->enter($__internal_f842503c427f742c3f34343ac248041c8146801a9ec4940e68978a7583adebc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e957e2df6854b42c4f6cfc44cc5c1c6386d1bd254d2d946313b91ee14996cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e957e2df6854b42c4f6cfc44cc5c1c6386d1bd254d2d946313b91ee14996cc1->enter($__internal_1e957e2df6854b42c4f6cfc44cc5c1c6386d1bd254d2d946313b91ee14996cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1e957e2df6854b42c4f6cfc44cc5c1c6386d1bd254d2d946313b91ee14996cc1->leave($__internal_1e957e2df6854b42c4f6cfc44cc5c1c6386d1bd254d2d946313b91ee14996cc1_prof);

        
        $__internal_f842503c427f742c3f34343ac248041c8146801a9ec4940e68978a7583adebc0->leave($__internal_f842503c427f742c3f34343ac248041c8146801a9ec4940e68978a7583adebc0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_170bb98b44858b12ef956dc43d5ae31e921917e178e04437f9fec9597385a3db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170bb98b44858b12ef956dc43d5ae31e921917e178e04437f9fec9597385a3db->enter($__internal_170bb98b44858b12ef956dc43d5ae31e921917e178e04437f9fec9597385a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_258a84000d621f4bb16fad8b7a0c38ea467277c6ed785cbbb0c7cefd0822fe06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258a84000d621f4bb16fad8b7a0c38ea467277c6ed785cbbb0c7cefd0822fe06->enter($__internal_258a84000d621f4bb16fad8b7a0c38ea467277c6ed785cbbb0c7cefd0822fe06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_258a84000d621f4bb16fad8b7a0c38ea467277c6ed785cbbb0c7cefd0822fe06->leave($__internal_258a84000d621f4bb16fad8b7a0c38ea467277c6ed785cbbb0c7cefd0822fe06_prof);

        
        $__internal_170bb98b44858b12ef956dc43d5ae31e921917e178e04437f9fec9597385a3db->leave($__internal_170bb98b44858b12ef956dc43d5ae31e921917e178e04437f9fec9597385a3db_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1beba4781e4d7bdff9bc9ffadeb3b3487dc2997080f79d4e22f4e96ede4a76f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1beba4781e4d7bdff9bc9ffadeb3b3487dc2997080f79d4e22f4e96ede4a76f3->enter($__internal_1beba4781e4d7bdff9bc9ffadeb3b3487dc2997080f79d4e22f4e96ede4a76f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_793aaf9f1876d3c57cfc38bdfdd9c39f4006cb74185dfc047591f9df49f4df74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793aaf9f1876d3c57cfc38bdfdd9c39f4006cb74185dfc047591f9df49f4df74->enter($__internal_793aaf9f1876d3c57cfc38bdfdd9c39f4006cb74185dfc047591f9df49f4df74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_793aaf9f1876d3c57cfc38bdfdd9c39f4006cb74185dfc047591f9df49f4df74->leave($__internal_793aaf9f1876d3c57cfc38bdfdd9c39f4006cb74185dfc047591f9df49f4df74_prof);

        
        $__internal_1beba4781e4d7bdff9bc9ffadeb3b3487dc2997080f79d4e22f4e96ede4a76f3->leave($__internal_1beba4781e4d7bdff9bc9ffadeb3b3487dc2997080f79d4e22f4e96ede4a76f3_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2be3bf3a4486ba13e6c91d482bee6b84a78117a6c947fc955ea6c2e794de309 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2be3bf3a4486ba13e6c91d482bee6b84a78117a6c947fc955ea6c2e794de309->enter($__internal_d2be3bf3a4486ba13e6c91d482bee6b84a78117a6c947fc955ea6c2e794de309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a55385085bf6ca35e050300d5f0ddd764d6c359fc5533792fc40f23ba90d81ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55385085bf6ca35e050300d5f0ddd764d6c359fc5533792fc40f23ba90d81ab->enter($__internal_a55385085bf6ca35e050300d5f0ddd764d6c359fc5533792fc40f23ba90d81ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a55385085bf6ca35e050300d5f0ddd764d6c359fc5533792fc40f23ba90d81ab->leave($__internal_a55385085bf6ca35e050300d5f0ddd764d6c359fc5533792fc40f23ba90d81ab_prof);

        
        $__internal_d2be3bf3a4486ba13e6c91d482bee6b84a78117a6c947fc955ea6c2e794de309->leave($__internal_d2be3bf3a4486ba13e6c91d482bee6b84a78117a6c947fc955ea6c2e794de309_prof);

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
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script src=\"{{asset('js/script.js')}}\"></script>
</html>
", "::base.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/app/Resources/views/base.html.twig");
    }
}
