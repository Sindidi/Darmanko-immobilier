<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_a70438d56028be33454b6599228066b9876ea08023a88c6ac2a9cfd7994266e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42a6c48057f21fb9114c875e4337940576a69f8ed6143690daa856beeb681569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42a6c48057f21fb9114c875e4337940576a69f8ed6143690daa856beeb681569->enter($__internal_42a6c48057f21fb9114c875e4337940576a69f8ed6143690daa856beeb681569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_3f0160b3a03fe3195b25725af1a3df9060b1846089f85b0b224d5919fdfd01f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f0160b3a03fe3195b25725af1a3df9060b1846089f85b0b224d5919fdfd01f7->enter($__internal_3f0160b3a03fe3195b25725af1a3df9060b1846089f85b0b224d5919fdfd01f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a6c48057f21fb9114c875e4337940576a69f8ed6143690daa856beeb681569->leave($__internal_42a6c48057f21fb9114c875e4337940576a69f8ed6143690daa856beeb681569_prof);

        
        $__internal_3f0160b3a03fe3195b25725af1a3df9060b1846089f85b0b224d5919fdfd01f7->leave($__internal_3f0160b3a03fe3195b25725af1a3df9060b1846089f85b0b224d5919fdfd01f7_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c75f47beeb8ad3fc9ed4edff13d3e1ef44abffb9f328d4758807c69121c32c42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75f47beeb8ad3fc9ed4edff13d3e1ef44abffb9f328d4758807c69121c32c42->enter($__internal_c75f47beeb8ad3fc9ed4edff13d3e1ef44abffb9f328d4758807c69121c32c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cb5b5ce4dcddeff9dc38f81032a5a877a2e466293417c8e13da6b6394a023172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5b5ce4dcddeff9dc38f81032a5a877a2e466293417c8e13da6b6394a023172->enter($__internal_cb5b5ce4dcddeff9dc38f81032a5a877a2e466293417c8e13da6b6394a023172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cb5b5ce4dcddeff9dc38f81032a5a877a2e466293417c8e13da6b6394a023172->leave($__internal_cb5b5ce4dcddeff9dc38f81032a5a877a2e466293417c8e13da6b6394a023172_prof);

        
        $__internal_c75f47beeb8ad3fc9ed4edff13d3e1ef44abffb9f328d4758807c69121c32c42->leave($__internal_c75f47beeb8ad3fc9ed4edff13d3e1ef44abffb9f328d4758807c69121c32c42_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae7695437e114b7544c6379f169744870d837d044d93b00fa4dc893a7a8a325d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7695437e114b7544c6379f169744870d837d044d93b00fa4dc893a7a8a325d->enter($__internal_ae7695437e114b7544c6379f169744870d837d044d93b00fa4dc893a7a8a325d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_15d39b80a395f30a3787d2b25da0772dc79a6ace8930c19dcd4e620ea6cbb026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d39b80a395f30a3787d2b25da0772dc79a6ace8930c19dcd4e620ea6cbb026->enter($__internal_15d39b80a395f30a3787d2b25da0772dc79a6ace8930c19dcd4e620ea6cbb026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_15d39b80a395f30a3787d2b25da0772dc79a6ace8930c19dcd4e620ea6cbb026->leave($__internal_15d39b80a395f30a3787d2b25da0772dc79a6ace8930c19dcd4e620ea6cbb026_prof);

        
        $__internal_ae7695437e114b7544c6379f169744870d837d044d93b00fa4dc893a7a8a325d->leave($__internal_ae7695437e114b7544c6379f169744870d837d044d93b00fa4dc893a7a8a325d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
