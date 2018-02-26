<?php

/* SNTDarmankoBundle:admin:admin.html.twig */
class __TwigTemplate_38d7c380b66f639c48f6e4f5fd3b73d45e83ed48ea662252298a72397f78d8c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SNTDarmankoBundle:admin:admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e8aa7bc9b8cfd5d9b09d1abdb514eeaec8cdffb02426c675b11bda80fb3bddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8aa7bc9b8cfd5d9b09d1abdb514eeaec8cdffb02426c675b11bda80fb3bddf->enter($__internal_8e8aa7bc9b8cfd5d9b09d1abdb514eeaec8cdffb02426c675b11bda80fb3bddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:admin.html.twig"));

        $__internal_c80dd279a0cb0c7452f04efcaa5e8dfe85477fe70442cdbd3003547fd589379a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80dd279a0cb0c7452f04efcaa5e8dfe85477fe70442cdbd3003547fd589379a->enter($__internal_c80dd279a0cb0c7452f04efcaa5e8dfe85477fe70442cdbd3003547fd589379a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8aa7bc9b8cfd5d9b09d1abdb514eeaec8cdffb02426c675b11bda80fb3bddf->leave($__internal_8e8aa7bc9b8cfd5d9b09d1abdb514eeaec8cdffb02426c675b11bda80fb3bddf_prof);

        
        $__internal_c80dd279a0cb0c7452f04efcaa5e8dfe85477fe70442cdbd3003547fd589379a->leave($__internal_c80dd279a0cb0c7452f04efcaa5e8dfe85477fe70442cdbd3003547fd589379a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f8f4229f94693110961444049a53a5b8a7ffcf41c9d24a25481b8b40f4dc348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8f4229f94693110961444049a53a5b8a7ffcf41c9d24a25481b8b40f4dc348->enter($__internal_7f8f4229f94693110961444049a53a5b8a7ffcf41c9d24a25481b8b40f4dc348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d638c78bf88d22d10d6f20c03f5af71423b49ef96e72f31cea7c8ae3f71f201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d638c78bf88d22d10d6f20c03f5af71423b49ef96e72f31cea7c8ae3f71f201->enter($__internal_1d638c78bf88d22d10d6f20c03f5af71423b49ef96e72f31cea7c8ae3f71f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_1d638c78bf88d22d10d6f20c03f5af71423b49ef96e72f31cea7c8ae3f71f201->leave($__internal_1d638c78bf88d22d10d6f20c03f5af71423b49ef96e72f31cea7c8ae3f71f201_prof);

        
        $__internal_7f8f4229f94693110961444049a53a5b8a7ffcf41c9d24a25481b8b40f4dc348->leave($__internal_7f8f4229f94693110961444049a53a5b8a7ffcf41c9d24a25481b8b40f4dc348_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0eecc0c7c0ea7926e4709d8f05a3ceef71f3541b9c00c642e272541d702bc912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eecc0c7c0ea7926e4709d8f05a3ceef71f3541b9c00c642e272541d702bc912->enter($__internal_0eecc0c7c0ea7926e4709d8f05a3ceef71f3541b9c00c642e272541d702bc912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_03a07dd35a7c7a67e39ae5176e253c250de4bbe3161fea17339c6a4539ff1474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a07dd35a7c7a67e39ae5176e253c250de4bbe3161fea17339c6a4539ff1474->enter($__internal_03a07dd35a7c7a67e39ae5176e253c250de4bbe3161fea17339c6a4539ff1474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

";
        
        $__internal_03a07dd35a7c7a67e39ae5176e253c250de4bbe3161fea17339c6a4539ff1474->leave($__internal_03a07dd35a7c7a67e39ae5176e253c250de4bbe3161fea17339c6a4539ff1474_prof);

        
        $__internal_0eecc0c7c0ea7926e4709d8f05a3ceef71f3541b9c00c642e272541d702bc912->leave($__internal_0eecc0c7c0ea7926e4709d8f05a3ceef71f3541b9c00c642e272541d702bc912_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_927cda85e8441272f744016c5006ae9d776c13be5652bfe3cbaaeee47dd9acc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927cda85e8441272f744016c5006ae9d776c13be5652bfe3cbaaeee47dd9acc6->enter($__internal_927cda85e8441272f744016c5006ae9d776c13be5652bfe3cbaaeee47dd9acc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac85d6127eff46ff76988236378fd5f9c37f8cf53adf210dca6c09606a09fa41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac85d6127eff46ff76988236378fd5f9c37f8cf53adf210dca6c09606a09fa41->enter($__internal_ac85d6127eff46ff76988236378fd5f9c37f8cf53adf210dca6c09606a09fa41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <br>
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                </li>
                </ul>
            </div>
        </nav>
        <br>
        <div class=\"row\">
            <div class=\"col-3\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item disabled\" id=\"bien\">Biens</li>
                    <li class=\"list-group-item\" id=\"reservation\">Réservation</li>
                </ul>
            </div>
            <div class=\"col-9\" id=\"content\"></div>
        </div>
    </div>
    <script>
        \$(function(){
            \$(\"#content\").load(\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biens");
        echo "\")

            \$(\"#bien\").on(\"click\", function(){
                \$(\"#content\").load(\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biens");
        echo "\");
            })
            \$(\"#reservation\").on(\"click\", function(){
                \$(\"#content\").load(\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("lister");
        echo "\");
            })

            
            
        })
    </script>
";
        
        $__internal_ac85d6127eff46ff76988236378fd5f9c37f8cf53adf210dca6c09606a09fa41->leave($__internal_ac85d6127eff46ff76988236378fd5f9c37f8cf53adf210dca6c09606a09fa41_prof);

        
        $__internal_927cda85e8441272f744016c5006ae9d776c13be5652bfe3cbaaeee47dd9acc6->leave($__internal_927cda85e8441272f744016c5006ae9d776c13be5652bfe3cbaaeee47dd9acc6_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 58,  138 => 55,  132 => 52,  93 => 15,  84 => 14,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Darmanko-Admin{% endblock %}

{% block javascripts %}

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

{% endblock %}


{% block body %}
    <br>
    <div class=\"container\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Navbar</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Features</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Pricing</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
                </li>
                </ul>
            </div>
        </nav>
        <br>
        <div class=\"row\">
            <div class=\"col-3\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item disabled\" id=\"bien\">Biens</li>
                    <li class=\"list-group-item\" id=\"reservation\">Réservation</li>
                </ul>
            </div>
            <div class=\"col-9\" id=\"content\"></div>
        </div>
    </div>
    <script>
        \$(function(){
            \$(\"#content\").load(\"{{path('biens')}}\")

            \$(\"#bien\").on(\"click\", function(){
                \$(\"#content\").load(\"{{path('biens')}}\");
            })
            \$(\"#reservation\").on(\"click\", function(){
                \$(\"#content\").load(\"{{path('lister')}}\");
            })

            
            
        })
    </script>
{% endblock %}
", "SNTDarmankoBundle:admin:admin.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/admin.html.twig");
    }
}
