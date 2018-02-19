<?php

/* SNTDarmankoBundle:Default:index.html.twig */
class __TwigTemplate_852170e3cb0759b2b450dd13b720eabcb7dff366ed1579f2f687c16abc88b46c extends Twig_Template
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
        $__internal_3fb979ec68c1275ed19ad777ba611e15d0fb3834ccfe214ae2186c6abffd8f0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb979ec68c1275ed19ad777ba611e15d0fb3834ccfe214ae2186c6abffd8f0a->enter($__internal_3fb979ec68c1275ed19ad777ba611e15d0fb3834ccfe214ae2186c6abffd8f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:Default:index.html.twig"));

        $__internal_97904a0770036368e18c8deeb2ce1e927857c91aca198cbe47d7d00f8e1ad65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97904a0770036368e18c8deeb2ce1e927857c91aca198cbe47d7d00f8e1ad65f->enter($__internal_97904a0770036368e18c8deeb2ce1e927857c91aca198cbe47d7d00f8e1ad65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_3fb979ec68c1275ed19ad777ba611e15d0fb3834ccfe214ae2186c6abffd8f0a->leave($__internal_3fb979ec68c1275ed19ad777ba611e15d0fb3834ccfe214ae2186c6abffd8f0a_prof);

        
        $__internal_97904a0770036368e18c8deeb2ce1e927857c91aca198cbe47d7d00f8e1ad65f->leave($__internal_97904a0770036368e18c8deeb2ce1e927857c91aca198cbe47d7d00f8e1ad65f_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "SNTDarmankoBundle:Default:index.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/Default/index.html.twig");
    }
}
