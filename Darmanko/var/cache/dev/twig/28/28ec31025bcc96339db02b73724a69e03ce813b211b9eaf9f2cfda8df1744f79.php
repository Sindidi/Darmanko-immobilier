<?php

/* SNTDarmankoBundle:Default:index.html.twig */
class __TwigTemplate_5000fb0a086c5db14707eded91016921f79af54e14acbdec37d82711f238614a extends Twig_Template
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
        $__internal_bceb89f8e8365ba985641059115fd86d130e010e1923ebafc93a7dac9e0b3211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bceb89f8e8365ba985641059115fd86d130e010e1923ebafc93a7dac9e0b3211->enter($__internal_bceb89f8e8365ba985641059115fd86d130e010e1923ebafc93a7dac9e0b3211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:Default:index.html.twig"));

        $__internal_8beb7686f0be3d523541df93d9d7ac8b4c89aab5091629f30988260df47190c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8beb7686f0be3d523541df93d9d7ac8b4c89aab5091629f30988260df47190c2->enter($__internal_8beb7686f0be3d523541df93d9d7ac8b4c89aab5091629f30988260df47190c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_bceb89f8e8365ba985641059115fd86d130e010e1923ebafc93a7dac9e0b3211->leave($__internal_bceb89f8e8365ba985641059115fd86d130e010e1923ebafc93a7dac9e0b3211_prof);

        
        $__internal_8beb7686f0be3d523541df93d9d7ac8b4c89aab5091629f30988260df47190c2->leave($__internal_8beb7686f0be3d523541df93d9d7ac8b4c89aab5091629f30988260df47190c2_prof);

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
