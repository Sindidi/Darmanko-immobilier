<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_862df47451e3f5d7ecac24e44228d5d2597d13bc4ad337473731f856de1b828d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf37ccad0ffa0ae5bbcc4c30acc5339b51a00766c898a2798ffa59bea93763a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf37ccad0ffa0ae5bbcc4c30acc5339b51a00766c898a2798ffa59bea93763a1->enter($__internal_cf37ccad0ffa0ae5bbcc4c30acc5339b51a00766c898a2798ffa59bea93763a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_32b4cd63f3076fd5f553ecef64d4ca17bb07c913464fbc6b7a95775192f1ee31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b4cd63f3076fd5f553ecef64d4ca17bb07c913464fbc6b7a95775192f1ee31->enter($__internal_32b4cd63f3076fd5f553ecef64d4ca17bb07c913464fbc6b7a95775192f1ee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_cf37ccad0ffa0ae5bbcc4c30acc5339b51a00766c898a2798ffa59bea93763a1->leave($__internal_cf37ccad0ffa0ae5bbcc4c30acc5339b51a00766c898a2798ffa59bea93763a1_prof);

        
        $__internal_32b4cd63f3076fd5f553ecef64d4ca17bb07c913464fbc6b7a95775192f1ee31->leave($__internal_32b4cd63f3076fd5f553ecef64d4ca17bb07c913464fbc6b7a95775192f1ee31_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
