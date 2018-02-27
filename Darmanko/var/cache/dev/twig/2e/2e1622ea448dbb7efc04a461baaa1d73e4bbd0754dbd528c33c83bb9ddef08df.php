<?php

/* SNTDarmankoBundle:reservation:detail.html.twig */
class __TwigTemplate_62580c885827530d1ae1bef926cf3eb895c13b14788b4d35fa1794d6f766dbb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::reservation.html.twig", "SNTDarmankoBundle:reservation:detail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::reservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_814bee2dcf4ca91026c7f9848e18c2859417218af92709f62ae76e53f184288b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814bee2dcf4ca91026c7f9848e18c2859417218af92709f62ae76e53f184288b->enter($__internal_814bee2dcf4ca91026c7f9848e18c2859417218af92709f62ae76e53f184288b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:detail.html.twig"));

        $__internal_8459e7d75175a7d62ab662cf2bf463c1dc80576f7486f90d5ecaaf62b3d13ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8459e7d75175a7d62ab662cf2bf463c1dc80576f7486f90d5ecaaf62b3d13ddb->enter($__internal_8459e7d75175a7d62ab662cf2bf463c1dc80576f7486f90d5ecaaf62b3d13ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814bee2dcf4ca91026c7f9848e18c2859417218af92709f62ae76e53f184288b->leave($__internal_814bee2dcf4ca91026c7f9848e18c2859417218af92709f62ae76e53f184288b_prof);

        
        $__internal_8459e7d75175a7d62ab662cf2bf463c1dc80576f7486f90d5ecaaf62b3d13ddb->leave($__internal_8459e7d75175a7d62ab662cf2bf463c1dc80576f7486f90d5ecaaf62b3d13ddb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9cf328c4f4872438f4272d3d4de08a3ebe76d1731261a3933b509a7caa44662 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9cf328c4f4872438f4272d3d4de08a3ebe76d1731261a3933b509a7caa44662->enter($__internal_d9cf328c4f4872438f4272d3d4de08a3ebe76d1731261a3933b509a7caa44662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d785c445420d929ee01b4d54e705adc3a49d23a7e612cfb722437571bd126493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d785c445420d929ee01b4d54e705adc3a49d23a7e612cfb722437571bd126493->enter($__internal_d785c445420d929ee01b4d54e705adc3a49d23a7e612cfb722437571bd126493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-produit";
        
        $__internal_d785c445420d929ee01b4d54e705adc3a49d23a7e612cfb722437571bd126493->leave($__internal_d785c445420d929ee01b4d54e705adc3a49d23a7e612cfb722437571bd126493_prof);

        
        $__internal_d9cf328c4f4872438f4272d3d4de08a3ebe76d1731261a3933b509a7caa44662->leave($__internal_d9cf328c4f4872438f4272d3d4de08a3ebe76d1731261a3933b509a7caa44662_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_66b2bb74fd06e092c6a23c609abaa995a8a7800799d8eb9e7118bf66975bd5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b2bb74fd06e092c6a23c609abaa995a8a7800799d8eb9e7118bf66975bd5c0->enter($__internal_66b2bb74fd06e092c6a23c609abaa995a8a7800799d8eb9e7118bf66975bd5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_448cc86de895b2ec05c34444315566183737b100d4762968003727b80210d380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_448cc86de895b2ec05c34444315566183737b100d4762968003727b80210d380->enter($__internal_448cc86de895b2ec05c34444315566183737b100d4762968003727b80210d380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-2\"></div>
        <h4 class=\"col-3\" style=\"font-family:Goudy; color:grey\"><i>Darmanko immobilier</i></h4>
        <form class=\"form row col-6\">
            <div class=\"form-group col-5  mb-2\">
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Entrer juste un nom\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary mb-2 col-4\">Rechercher</button>
        </form>
    </div><br>
    <div class=\"row\">
        <div class=\"col-7 mx-sm-1\">
            <div class=\"container\">
                <div>
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" id=\"detImage\" style=\"width: 100%; height: 400px;\">
                </div><br>
                <div style=\"display: flex; justify-content: flex-start;\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 24
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
            echo "\"  class=\"mx-sm-1 descImage\" style=\"width: 30%;\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </div><br>
                <h2 style=\"font-family:Goudy; color:grey\">Description du bien</h2>
                <div class=\"bg-light\" style=\"font-family:Goudy; color:grey\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "description", array()), "html", null, true);
        echo "</div>
            </div>
        </div>
        <div class=\"col-4 bg-light\"><br>
            <h3 style=\"font-family:Goudy; color:grey\"><center>Réserver le bien</center></h3>
            <form  method=\"POST\" class=\"form row\">
                <input type=\"text\" name=\"login\" class=\"form-control col-4 mx-sm-1\" required placeholder=\"Entrer votre email\">
                <input type=\"text\" name=\"password\" class=\"form-control col-4 mx-sm-1\" required placeholder=\"mot de passe\">
                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary col-3 mx-sm-1\">Réserver</button>
            </form><br>
            <h1 style=\"font-family:Goudy; color:grey\"><center>Créer un compte</center></h1>
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"form-group col-12\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numpiece", array()), 'label');
        echo "
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numpiece", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomComplet", array()), 'label');
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomComplet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'label');
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adress", array()), 'label');
        echo "
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adress", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motdepasse", array()), 'label');
        echo "
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motdepasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <input type=\"submit\" value=\"Reserver\" class=\"form-control btn-primary\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>        
    </div>
";
        
        $__internal_448cc86de895b2ec05c34444315566183737b100d4762968003727b80210d380->leave($__internal_448cc86de895b2ec05c34444315566183737b100d4762968003727b80210d380_prof);

        
        $__internal_66b2bb74fd06e092c6a23c609abaa995a8a7800799d8eb9e7118bf66975bd5c0->leave($__internal_66b2bb74fd06e092c6a23c609abaa995a8a7800799d8eb9e7118bf66975bd5c0_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_367e1db2029c2d3bacd76a56c2d8eb51b4a0eedd9d39f09fa3883ff5eff58010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367e1db2029c2d3bacd76a56c2d8eb51b4a0eedd9d39f09fa3883ff5eff58010->enter($__internal_367e1db2029c2d3bacd76a56c2d8eb51b4a0eedd9d39f09fa3883ff5eff58010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6915beb9a25037144603204993b844e15513b4047faa514ebb84fd16f1230664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6915beb9a25037144603204993b844e15513b4047faa514ebb84fd16f1230664->enter($__internal_6915beb9a25037144603204993b844e15513b4047faa514ebb84fd16f1230664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scriptAccueil.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6915beb9a25037144603204993b844e15513b4047faa514ebb84fd16f1230664->leave($__internal_6915beb9a25037144603204993b844e15513b4047faa514ebb84fd16f1230664_prof);

        
        $__internal_367e1db2029c2d3bacd76a56c2d8eb51b4a0eedd9d39f09fa3883ff5eff58010->leave($__internal_367e1db2029c2d3bacd76a56c2d8eb51b4a0eedd9d39f09fa3883ff5eff58010_prof);

    }

    public function getTemplateName()
    {
        return "SNTDarmankoBundle:reservation:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 71,  212 => 70,  203 => 69,  189 => 65,  183 => 62,  179 => 61,  173 => 58,  169 => 57,  163 => 54,  159 => 53,  153 => 50,  149 => 49,  143 => 46,  139 => 45,  133 => 42,  129 => 41,  124 => 39,  110 => 28,  106 => 26,  96 => 24,  92 => 23,  85 => 20,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::reservation.html.twig\" %}

{% block title %}Détail-produit{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-2\"></div>
        <h4 class=\"col-3\" style=\"font-family:Goudy; color:grey\"><i>Darmanko immobilier</i></h4>
        <form class=\"form row col-6\">
            <div class=\"form-group col-5  mb-2\">
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Entrer juste un nom\">
            </div>
            <button type=\"submit\" class=\"btn btn-primary mb-2 col-4\">Rechercher</button>
        </form>
    </div><br>
    <div class=\"row\">
        <div class=\"col-7 mx-sm-1\">
            <div class=\"container\">
                <div>
                    <img src=\"{{ asset('image/')}}{{ biens.images[0].image }}\" id=\"detImage\" style=\"width: 100%; height: 400px;\">
                </div><br>
                <div style=\"display: flex; justify-content: flex-start;\">
                {% for image in biens.images %}
                    <img src=\"{{ asset('image/')}}{{ image.image }}\"  class=\"mx-sm-1 descImage\" style=\"width: 30%;\">
                {% endfor %}
                </div><br>
                <h2 style=\"font-family:Goudy; color:grey\">Description du bien</h2>
                <div class=\"bg-light\" style=\"font-family:Goudy; color:grey\">{{ biens.description }}</div>
            </div>
        </div>
        <div class=\"col-4 bg-light\"><br>
            <h3 style=\"font-family:Goudy; color:grey\"><center>Réserver le bien</center></h3>
            <form  method=\"POST\" class=\"form row\">
                <input type=\"text\" name=\"login\" class=\"form-control col-4 mx-sm-1\" required placeholder=\"Entrer votre email\">
                <input type=\"text\" name=\"password\" class=\"form-control col-4 mx-sm-1\" required placeholder=\"mot de passe\">
                <button type=\"submit\" name=\"submit\" class=\"btn btn-primary col-3 mx-sm-1\">Réserver</button>
            </form><br>
            <h1 style=\"font-family:Goudy; color:grey\"><center>Créer un compte</center></h1>
            {{ form_start(form) }}
                <div class=\"form-group col-12\">
                    {{form_label(form.numpiece)}}
                    {{form_widget(form.numpiece, {\"attr\": {\"class\": \"form-control\"}})}}
                </div>
                <div class=\"form-group col-12\">
                    {{form_label(form.nomComplet)}}
                    {{form_widget(form.nomComplet, {\"attr\": {\"class\": \"form-control\"}})}}
                </div>
                <div class=\"form-group col-12\">
                    {{form_label(form.tel)}}
                    {{form_widget(form.tel, {\"attr\": {\"class\": \"form-control\"}})}}
                </div>
                <div class=\"form-group col-12\">
                    {{form_label(form.adress)}}
                    {{form_widget(form.adress, {\"attr\": {\"class\": \"form-control\"}})}}
                </div>
                <div class=\"form-group col-12\">
                    {{form_label(form.email)}}
                    {{form_widget(form.email, {\"attr\": {\"class\": \"form-control\"}})}}
                </div>
                <div class=\"form-group col-12\">
                    {{form_label(form.motdepasse)}}
                    {{form_widget(form.motdepasse, {\"attr\": {\"class\": \"form-control\"}})}}
                </div>
                <input type=\"submit\" value=\"Reserver\" class=\"form-control btn-primary\">
            {{form_end(form)}}
        </div>        
    </div>
{% endblock %}
{% block javascripts %}
<script src=\"{{asset('js/jquery.js')}}\"></script>
<script src=\"{{asset('js/scriptAccueil.js')}}\"></script>
{% endblock %}
", "SNTDarmankoBundle:reservation:detail.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/src/SNT/DarmankoBundle/Resources/views/reservation/detail.html.twig");
    }
}
