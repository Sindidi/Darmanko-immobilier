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
        $__internal_d3621c14101248b758591edd4650ab7c9edf4fc0594a9c5326ab5438d2278898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3621c14101248b758591edd4650ab7c9edf4fc0594a9c5326ab5438d2278898->enter($__internal_d3621c14101248b758591edd4650ab7c9edf4fc0594a9c5326ab5438d2278898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:detail.html.twig"));

        $__internal_19c6b843bbeb74d1127b92a98186be2fa886507470859ab6bb64623bf18557a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c6b843bbeb74d1127b92a98186be2fa886507470859ab6bb64623bf18557a9->enter($__internal_19c6b843bbeb74d1127b92a98186be2fa886507470859ab6bb64623bf18557a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SNTDarmankoBundle:reservation:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3621c14101248b758591edd4650ab7c9edf4fc0594a9c5326ab5438d2278898->leave($__internal_d3621c14101248b758591edd4650ab7c9edf4fc0594a9c5326ab5438d2278898_prof);

        
        $__internal_19c6b843bbeb74d1127b92a98186be2fa886507470859ab6bb64623bf18557a9->leave($__internal_19c6b843bbeb74d1127b92a98186be2fa886507470859ab6bb64623bf18557a9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_97fc7d6eb93a37ad06190834ff1e32e0453a8ec13246545c536ed7f5fb6f69bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97fc7d6eb93a37ad06190834ff1e32e0453a8ec13246545c536ed7f5fb6f69bd->enter($__internal_97fc7d6eb93a37ad06190834ff1e32e0453a8ec13246545c536ed7f5fb6f69bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04aed9d2df2e54f925a4a0557cf09f8734a882501698a4fb1ed417ce9bd98aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04aed9d2df2e54f925a4a0557cf09f8734a882501698a4fb1ed417ce9bd98aa8->enter($__internal_04aed9d2df2e54f925a4a0557cf09f8734a882501698a4fb1ed417ce9bd98aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Détail-produit";
        
        $__internal_04aed9d2df2e54f925a4a0557cf09f8734a882501698a4fb1ed417ce9bd98aa8->leave($__internal_04aed9d2df2e54f925a4a0557cf09f8734a882501698a4fb1ed417ce9bd98aa8_prof);

        
        $__internal_97fc7d6eb93a37ad06190834ff1e32e0453a8ec13246545c536ed7f5fb6f69bd->leave($__internal_97fc7d6eb93a37ad06190834ff1e32e0453a8ec13246545c536ed7f5fb6f69bd_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_4e685ab7511d67bf6985fd7d10590bb3dc59cf5cec616562f9713500025cf05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e685ab7511d67bf6985fd7d10590bb3dc59cf5cec616562f9713500025cf05a->enter($__internal_4e685ab7511d67bf6985fd7d10590bb3dc59cf5cec616562f9713500025cf05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6ab00cc183fd36b78cc64c7bb999d92960de654b4cf1632dc0078aeee18093cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab00cc183fd36b78cc64c7bb999d92960de654b4cf1632dc0078aeee18093cf->enter($__internal_6ab00cc183fd36b78cc64c7bb999d92960de654b4cf1632dc0078aeee18093cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-7 mx-sm-1\">
            <div class=\"container\">
                <div>
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
        echo "\" id=\"detImage\" style=\"width: 100%; height: 400px;\">
                </div><br>
                <div style=\"display: flex; justify-content: flex-start;\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["biens"] ?? $this->getContext($context, "biens")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 14
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
            echo "\"  class=\"mx-sm-1 descImage\" style=\"width: 30%;\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </div><br>
                <h2 style=\"font-family:Goudy; color:grey\">Description du bien</h2>
                <div class=\"bg-light\" style=\"font-family:Goudy; color:grey\">";
        // line 18
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
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"form-group col-12\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numpiece", array()), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numpiece", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomComplet", array()), 'label');
        echo "
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomComplet", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'label');
        echo "
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tel", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adress", array()), 'label');
        echo "
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adress", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group col-12\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motdepasse", array()), 'label');
        echo "
                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "motdepasse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <input type=\"submit\" value=\"Reserver\" class=\"form-control btn-primary\">
            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>        
    </div>
";
        
        $__internal_6ab00cc183fd36b78cc64c7bb999d92960de654b4cf1632dc0078aeee18093cf->leave($__internal_6ab00cc183fd36b78cc64c7bb999d92960de654b4cf1632dc0078aeee18093cf_prof);

        
        $__internal_4e685ab7511d67bf6985fd7d10590bb3dc59cf5cec616562f9713500025cf05a->leave($__internal_4e685ab7511d67bf6985fd7d10590bb3dc59cf5cec616562f9713500025cf05a_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4cd6d47d18ff88e9c0199b4d3871932b178e7cb5307cf71ef556732c721bb06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd6d47d18ff88e9c0199b4d3871932b178e7cb5307cf71ef556732c721bb06e->enter($__internal_4cd6d47d18ff88e9c0199b4d3871932b178e7cb5307cf71ef556732c721bb06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_153d5bedcac4e45a77325af912144be208963d372795ce3f3f7dca6c314946cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153d5bedcac4e45a77325af912144be208963d372795ce3f3f7dca6c314946cf->enter($__internal_153d5bedcac4e45a77325af912144be208963d372795ce3f3f7dca6c314946cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/scriptAccueil.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_153d5bedcac4e45a77325af912144be208963d372795ce3f3f7dca6c314946cf->leave($__internal_153d5bedcac4e45a77325af912144be208963d372795ce3f3f7dca6c314946cf_prof);

        
        $__internal_4cd6d47d18ff88e9c0199b4d3871932b178e7cb5307cf71ef556732c721bb06e->leave($__internal_4cd6d47d18ff88e9c0199b4d3871932b178e7cb5307cf71ef556732c721bb06e_prof);

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
        return array (  207 => 61,  202 => 60,  193 => 59,  179 => 55,  173 => 52,  169 => 51,  163 => 48,  159 => 47,  153 => 44,  149 => 43,  143 => 40,  139 => 39,  133 => 36,  129 => 35,  123 => 32,  119 => 31,  114 => 29,  100 => 18,  96 => 16,  86 => 14,  82 => 13,  75 => 10,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
