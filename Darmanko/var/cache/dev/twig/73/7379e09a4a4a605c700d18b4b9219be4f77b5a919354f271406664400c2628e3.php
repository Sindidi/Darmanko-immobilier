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
        $__internal_ec9868288daea52cf9f507374a166ca3e71a5ff76b19784f5356b79fad9ceb2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9868288daea52cf9f507374a166ca3e71a5ff76b19784f5356b79fad9ceb2e->enter($__internal_ec9868288daea52cf9f507374a166ca3e71a5ff76b19784f5356b79fad9ceb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:admin.html.twig"));

        $__internal_4d3f35e0bfd39611f31e149ffc096afebf9f1f8b05af8d712ce309946e470ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3f35e0bfd39611f31e149ffc096afebf9f1f8b05af8d712ce309946e470ce7->enter($__internal_4d3f35e0bfd39611f31e149ffc096afebf9f1f8b05af8d712ce309946e470ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:admin:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec9868288daea52cf9f507374a166ca3e71a5ff76b19784f5356b79fad9ceb2e->leave($__internal_ec9868288daea52cf9f507374a166ca3e71a5ff76b19784f5356b79fad9ceb2e_prof);

        
        $__internal_4d3f35e0bfd39611f31e149ffc096afebf9f1f8b05af8d712ce309946e470ce7->leave($__internal_4d3f35e0bfd39611f31e149ffc096afebf9f1f8b05af8d712ce309946e470ce7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9f04928e1752684405ef1910a3743aa6b63f89be7553846c7da05ec6772005f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f04928e1752684405ef1910a3743aa6b63f89be7553846c7da05ec6772005f->enter($__internal_b9f04928e1752684405ef1910a3743aa6b63f89be7553846c7da05ec6772005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0d7de40f113de7b699b084879020e43af71d01e069a21a9a795c5e4cffbe49b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d7de40f113de7b699b084879020e43af71d01e069a21a9a795c5e4cffbe49b->enter($__internal_f0d7de40f113de7b699b084879020e43af71d01e069a21a9a795c5e4cffbe49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Darmanko-Admin";
        
        $__internal_f0d7de40f113de7b699b084879020e43af71d01e069a21a9a795c5e4cffbe49b->leave($__internal_f0d7de40f113de7b699b084879020e43af71d01e069a21a9a795c5e4cffbe49b_prof);

        
        $__internal_b9f04928e1752684405ef1910a3743aa6b63f89be7553846c7da05ec6772005f->leave($__internal_b9f04928e1752684405ef1910a3743aa6b63f89be7553846c7da05ec6772005f_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_019c87f0715ed5da70277dfa80879ebf593198d2c10542e6098bb51901748fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019c87f0715ed5da70277dfa80879ebf593198d2c10542e6098bb51901748fa3->enter($__internal_019c87f0715ed5da70277dfa80879ebf593198d2c10542e6098bb51901748fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_da3291ca989c91530fae3eca862103821f321dd571b82587169509fb2fea6a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3291ca989c91530fae3eca862103821f321dd571b82587169509fb2fea6a5c->enter($__internal_da3291ca989c91530fae3eca862103821f321dd571b82587169509fb2fea6a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css\">
<script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js\"></script>

";
        
        $__internal_da3291ca989c91530fae3eca862103821f321dd571b82587169509fb2fea6a5c->leave($__internal_da3291ca989c91530fae3eca862103821f321dd571b82587169509fb2fea6a5c_prof);

        
        $__internal_019c87f0715ed5da70277dfa80879ebf593198d2c10542e6098bb51901748fa3->leave($__internal_019c87f0715ed5da70277dfa80879ebf593198d2c10542e6098bb51901748fa3_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_f659d27785d202c1683a6caa47d4fa2b6d64790ccf5ce439af44d9298f97e160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f659d27785d202c1683a6caa47d4fa2b6d64790ccf5ce439af44d9298f97e160->enter($__internal_f659d27785d202c1683a6caa47d4fa2b6d64790ccf5ce439af44d9298f97e160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_818d320a9d8f69f0de14c4f719436c191c8554a6f71520590eed74f8ab118182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818d320a9d8f69f0de14c4f719436c191c8554a6f71520590eed74f8ab118182->enter($__internal_818d320a9d8f69f0de14c4f719436c191c8554a6f71520590eed74f8ab118182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
";
        
        $__internal_818d320a9d8f69f0de14c4f719436c191c8554a6f71520590eed74f8ab118182->leave($__internal_818d320a9d8f69f0de14c4f719436c191c8554a6f71520590eed74f8ab118182_prof);

        
        $__internal_f659d27785d202c1683a6caa47d4fa2b6d64790ccf5ce439af44d9298f97e160->leave($__internal_f659d27785d202c1683a6caa47d4fa2b6d64790ccf5ce439af44d9298f97e160_prof);

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
        return array (  93 => 15,  84 => 14,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% endblock %}
", "SNTDarmankoBundle:admin:admin.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/admin/admin.html.twig");
    }
}
