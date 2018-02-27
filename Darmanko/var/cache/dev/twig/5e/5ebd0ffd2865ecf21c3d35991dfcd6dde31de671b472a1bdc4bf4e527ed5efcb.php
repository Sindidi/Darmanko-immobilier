<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_83fb393ef15d18f63f88d841c13c382b8bcccb70da998eb81f9fe12aeb7da949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef767c8932888622e98bea610b37088b73d0b47a237049d877128fd3aff78143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef767c8932888622e98bea610b37088b73d0b47a237049d877128fd3aff78143->enter($__internal_ef767c8932888622e98bea610b37088b73d0b47a237049d877128fd3aff78143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_b6e25f0b5a5bb560fcd1bbbd25863bd00dd52998e25384f02c7d3983cb3b8028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e25f0b5a5bb560fcd1bbbd25863bd00dd52998e25384f02c7d3983cb3b8028->enter($__internal_b6e25f0b5a5bb560fcd1bbbd25863bd00dd52998e25384f02c7d3983cb3b8028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ef767c8932888622e98bea610b37088b73d0b47a237049d877128fd3aff78143->leave($__internal_ef767c8932888622e98bea610b37088b73d0b47a237049d877128fd3aff78143_prof);

        
        $__internal_b6e25f0b5a5bb560fcd1bbbd25863bd00dd52998e25384f02c7d3983cb3b8028->leave($__internal_b6e25f0b5a5bb560fcd1bbbd25863bd00dd52998e25384f02c7d3983cb3b8028_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4a007ffd415212d46f32842d2c624add74f3321b8121c31479221b16201cdf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a007ffd415212d46f32842d2c624add74f3321b8121c31479221b16201cdf73->enter($__internal_4a007ffd415212d46f32842d2c624add74f3321b8121c31479221b16201cdf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2dc6844b28a962270cb619223794a5950229297a506237d81532823deb375e69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc6844b28a962270cb619223794a5950229297a506237d81532823deb375e69->enter($__internal_2dc6844b28a962270cb619223794a5950229297a506237d81532823deb375e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2dc6844b28a962270cb619223794a5950229297a506237d81532823deb375e69->leave($__internal_2dc6844b28a962270cb619223794a5950229297a506237d81532823deb375e69_prof);

        
        $__internal_4a007ffd415212d46f32842d2c624add74f3321b8121c31479221b16201cdf73->leave($__internal_4a007ffd415212d46f32842d2c624add74f3321b8121c31479221b16201cdf73_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f76c807e4b07a22aa56e45379509bac94743956406980b93294b997f32ee3aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76c807e4b07a22aa56e45379509bac94743956406980b93294b997f32ee3aa6->enter($__internal_f76c807e4b07a22aa56e45379509bac94743956406980b93294b997f32ee3aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_947664b0b147bda0097231fa656241793ec21e66572b498e4cc9fd8bf8894b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947664b0b147bda0097231fa656241793ec21e66572b498e4cc9fd8bf8894b3b->enter($__internal_947664b0b147bda0097231fa656241793ec21e66572b498e4cc9fd8bf8894b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_947664b0b147bda0097231fa656241793ec21e66572b498e4cc9fd8bf8894b3b->leave($__internal_947664b0b147bda0097231fa656241793ec21e66572b498e4cc9fd8bf8894b3b_prof);

        
        $__internal_f76c807e4b07a22aa56e45379509bac94743956406980b93294b997f32ee3aa6->leave($__internal_f76c807e4b07a22aa56e45379509bac94743956406980b93294b997f32ee3aa6_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e20817836d567d6e6fa11eb60c9e52a0ba87e551c2d2aa668e056516ee505025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e20817836d567d6e6fa11eb60c9e52a0ba87e551c2d2aa668e056516ee505025->enter($__internal_e20817836d567d6e6fa11eb60c9e52a0ba87e551c2d2aa668e056516ee505025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1e52c0b3100877fb32abd71250b6b9a6d21877de2941048eb3d548a0d10215ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e52c0b3100877fb32abd71250b6b9a6d21877de2941048eb3d548a0d10215ab->enter($__internal_1e52c0b3100877fb32abd71250b6b9a6d21877de2941048eb3d548a0d10215ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1e52c0b3100877fb32abd71250b6b9a6d21877de2941048eb3d548a0d10215ab->leave($__internal_1e52c0b3100877fb32abd71250b6b9a6d21877de2941048eb3d548a0d10215ab_prof);

        
        $__internal_e20817836d567d6e6fa11eb60c9e52a0ba87e551c2d2aa668e056516ee505025->leave($__internal_e20817836d567d6e6fa11eb60c9e52a0ba87e551c2d2aa668e056516ee505025_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_189400a8d5a6ee85cfa34eb9090edda54392b5af609b8351591de43cab372c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_189400a8d5a6ee85cfa34eb9090edda54392b5af609b8351591de43cab372c2b->enter($__internal_189400a8d5a6ee85cfa34eb9090edda54392b5af609b8351591de43cab372c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_8dc6dfe2772d15da5dc578b82e7a6fcbeb5e2d25d998998526373a0951539956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc6dfe2772d15da5dc578b82e7a6fcbeb5e2d25d998998526373a0951539956->enter($__internal_8dc6dfe2772d15da5dc578b82e7a6fcbeb5e2d25d998998526373a0951539956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_9c3bbb08e355a228b27cece4c839ee484d77b5bf5f554a37e138970f5a783281 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_7bb008e97450e7b84e71c51d2da8dc6e657c77af7b71a4e2369cb4ef478c8558 = "{{") && ('' === $__internal_7bb008e97450e7b84e71c51d2da8dc6e657c77af7b71a4e2369cb4ef478c8558 || 0 === strpos($__internal_9c3bbb08e355a228b27cece4c839ee484d77b5bf5f554a37e138970f5a783281, $__internal_7bb008e97450e7b84e71c51d2da8dc6e657c77af7b71a4e2369cb4ef478c8558)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_8dc6dfe2772d15da5dc578b82e7a6fcbeb5e2d25d998998526373a0951539956->leave($__internal_8dc6dfe2772d15da5dc578b82e7a6fcbeb5e2d25d998998526373a0951539956_prof);

        
        $__internal_189400a8d5a6ee85cfa34eb9090edda54392b5af609b8351591de43cab372c2b->leave($__internal_189400a8d5a6ee85cfa34eb9090edda54392b5af609b8351591de43cab372c2b_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_22396781ea98ae408fb9de0f0dde126e195ffc7c28a4938158c82615cebd1954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22396781ea98ae408fb9de0f0dde126e195ffc7c28a4938158c82615cebd1954->enter($__internal_22396781ea98ae408fb9de0f0dde126e195ffc7c28a4938158c82615cebd1954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_285fee4b4c7ae869360ab8d3939601aa912a9df555f3b7de0f59646abde137ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285fee4b4c7ae869360ab8d3939601aa912a9df555f3b7de0f59646abde137ef->enter($__internal_285fee4b4c7ae869360ab8d3939601aa912a9df555f3b7de0f59646abde137ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_285fee4b4c7ae869360ab8d3939601aa912a9df555f3b7de0f59646abde137ef->leave($__internal_285fee4b4c7ae869360ab8d3939601aa912a9df555f3b7de0f59646abde137ef_prof);

        
        $__internal_22396781ea98ae408fb9de0f0dde126e195ffc7c28a4938158c82615cebd1954->leave($__internal_22396781ea98ae408fb9de0f0dde126e195ffc7c28a4938158c82615cebd1954_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_489535de38054d8ad38a1d80ef08b009ac41584263311ab86610d1e1f6849c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_489535de38054d8ad38a1d80ef08b009ac41584263311ab86610d1e1f6849c13->enter($__internal_489535de38054d8ad38a1d80ef08b009ac41584263311ab86610d1e1f6849c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_69db36d021729b82f3a41c68a18c7025623e61953305d7cba6a4cadd84288258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69db36d021729b82f3a41c68a18c7025623e61953305d7cba6a4cadd84288258->enter($__internal_69db36d021729b82f3a41c68a18c7025623e61953305d7cba6a4cadd84288258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_69db36d021729b82f3a41c68a18c7025623e61953305d7cba6a4cadd84288258->leave($__internal_69db36d021729b82f3a41c68a18c7025623e61953305d7cba6a4cadd84288258_prof);

        
        $__internal_489535de38054d8ad38a1d80ef08b009ac41584263311ab86610d1e1f6849c13->leave($__internal_489535de38054d8ad38a1d80ef08b009ac41584263311ab86610d1e1f6849c13_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5fa323180639f83ebb2d47bd49ea8783e215ff71a015685df5158ad41f781667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa323180639f83ebb2d47bd49ea8783e215ff71a015685df5158ad41f781667->enter($__internal_5fa323180639f83ebb2d47bd49ea8783e215ff71a015685df5158ad41f781667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9c19cf04e461b7f4fc327dc47c34d3e0af7e0f56cfcba9f9b2282b4bbd56d6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c19cf04e461b7f4fc327dc47c34d3e0af7e0f56cfcba9f9b2282b4bbd56d6c6->enter($__internal_9c19cf04e461b7f4fc327dc47c34d3e0af7e0f56cfcba9f9b2282b4bbd56d6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_9c19cf04e461b7f4fc327dc47c34d3e0af7e0f56cfcba9f9b2282b4bbd56d6c6->leave($__internal_9c19cf04e461b7f4fc327dc47c34d3e0af7e0f56cfcba9f9b2282b4bbd56d6c6_prof);

        
        $__internal_5fa323180639f83ebb2d47bd49ea8783e215ff71a015685df5158ad41f781667->leave($__internal_5fa323180639f83ebb2d47bd49ea8783e215ff71a015685df5158ad41f781667_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_037c348849c66c3201e1211f65b924aa1cb89f678c14c12cb61102d094c969d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_037c348849c66c3201e1211f65b924aa1cb89f678c14c12cb61102d094c969d0->enter($__internal_037c348849c66c3201e1211f65b924aa1cb89f678c14c12cb61102d094c969d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1d3869408b192c0fa7dc56b88e8b454f2535efddc207772ac0c4ada98b06c5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3869408b192c0fa7dc56b88e8b454f2535efddc207772ac0c4ada98b06c5ea->enter($__internal_1d3869408b192c0fa7dc56b88e8b454f2535efddc207772ac0c4ada98b06c5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_1d3869408b192c0fa7dc56b88e8b454f2535efddc207772ac0c4ada98b06c5ea->leave($__internal_1d3869408b192c0fa7dc56b88e8b454f2535efddc207772ac0c4ada98b06c5ea_prof);

        
        $__internal_037c348849c66c3201e1211f65b924aa1cb89f678c14c12cb61102d094c969d0->leave($__internal_037c348849c66c3201e1211f65b924aa1cb89f678c14c12cb61102d094c969d0_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_d187332b7293b1361c1c4911d283243ceae2c7a47b6fa45ee63453526523b258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d187332b7293b1361c1c4911d283243ceae2c7a47b6fa45ee63453526523b258->enter($__internal_d187332b7293b1361c1c4911d283243ceae2c7a47b6fa45ee63453526523b258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9d969059a2e88ff72d274ab678ca53ee5dd17f74d4b9ec6d7f26d7c9dc779118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d969059a2e88ff72d274ab678ca53ee5dd17f74d4b9ec6d7f26d7c9dc779118->enter($__internal_9d969059a2e88ff72d274ab678ca53ee5dd17f74d4b9ec6d7f26d7c9dc779118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_9d969059a2e88ff72d274ab678ca53ee5dd17f74d4b9ec6d7f26d7c9dc779118->leave($__internal_9d969059a2e88ff72d274ab678ca53ee5dd17f74d4b9ec6d7f26d7c9dc779118_prof);

        
        $__internal_d187332b7293b1361c1c4911d283243ceae2c7a47b6fa45ee63453526523b258->leave($__internal_d187332b7293b1361c1c4911d283243ceae2c7a47b6fa45ee63453526523b258_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_0bd64eb4e2ded4b3e4ac2f10b711ff3330559b555456740b3a4ac71bb91fd3e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd64eb4e2ded4b3e4ac2f10b711ff3330559b555456740b3a4ac71bb91fd3e0->enter($__internal_0bd64eb4e2ded4b3e4ac2f10b711ff3330559b555456740b3a4ac71bb91fd3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b9a0a72628c1dc486ea542e3429b45013c4e78c1c0b52b2d14a9d20b0ba7ebf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a0a72628c1dc486ea542e3429b45013c4e78c1c0b52b2d14a9d20b0ba7ebf7->enter($__internal_b9a0a72628c1dc486ea542e3429b45013c4e78c1c0b52b2d14a9d20b0ba7ebf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_b9a0a72628c1dc486ea542e3429b45013c4e78c1c0b52b2d14a9d20b0ba7ebf7->leave($__internal_b9a0a72628c1dc486ea542e3429b45013c4e78c1c0b52b2d14a9d20b0ba7ebf7_prof);

        
        $__internal_0bd64eb4e2ded4b3e4ac2f10b711ff3330559b555456740b3a4ac71bb91fd3e0->leave($__internal_0bd64eb4e2ded4b3e4ac2f10b711ff3330559b555456740b3a4ac71bb91fd3e0_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5dbf5d37e8bb480fb68519901dfcf113a62d8ab3570dc4637666499d815790ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbf5d37e8bb480fb68519901dfcf113a62d8ab3570dc4637666499d815790ad->enter($__internal_5dbf5d37e8bb480fb68519901dfcf113a62d8ab3570dc4637666499d815790ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_efc63c92e381f93c67912bdbc0c2f09a853b0faa5c1a5d8688227fae332f6513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc63c92e381f93c67912bdbc0c2f09a853b0faa5c1a5d8688227fae332f6513->enter($__internal_efc63c92e381f93c67912bdbc0c2f09a853b0faa5c1a5d8688227fae332f6513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_efc63c92e381f93c67912bdbc0c2f09a853b0faa5c1a5d8688227fae332f6513->leave($__internal_efc63c92e381f93c67912bdbc0c2f09a853b0faa5c1a5d8688227fae332f6513_prof);

        
        $__internal_5dbf5d37e8bb480fb68519901dfcf113a62d8ab3570dc4637666499d815790ad->leave($__internal_5dbf5d37e8bb480fb68519901dfcf113a62d8ab3570dc4637666499d815790ad_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0af8e1a08fca6ab0fbcfbc47589eca75e79b31a0f933b6d789af00840011156b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af8e1a08fca6ab0fbcfbc47589eca75e79b31a0f933b6d789af00840011156b->enter($__internal_0af8e1a08fca6ab0fbcfbc47589eca75e79b31a0f933b6d789af00840011156b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9100597cda661a312a9c559d33869f531a6a1e72a65f3585637c5fb2134fbe66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9100597cda661a312a9c559d33869f531a6a1e72a65f3585637c5fb2134fbe66->enter($__internal_9100597cda661a312a9c559d33869f531a6a1e72a65f3585637c5fb2134fbe66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_9100597cda661a312a9c559d33869f531a6a1e72a65f3585637c5fb2134fbe66->leave($__internal_9100597cda661a312a9c559d33869f531a6a1e72a65f3585637c5fb2134fbe66_prof);

        
        $__internal_0af8e1a08fca6ab0fbcfbc47589eca75e79b31a0f933b6d789af00840011156b->leave($__internal_0af8e1a08fca6ab0fbcfbc47589eca75e79b31a0f933b6d789af00840011156b_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_404633c4150be2cbdd4f1f3566f186d36f3629e0df2c9bd06ec5224af95fbdb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404633c4150be2cbdd4f1f3566f186d36f3629e0df2c9bd06ec5224af95fbdb2->enter($__internal_404633c4150be2cbdd4f1f3566f186d36f3629e0df2c9bd06ec5224af95fbdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_93e2c6762a4b3bd0ab1a453f70e214df97a73f9a66b25e2a79fbdcea8da079bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e2c6762a4b3bd0ab1a453f70e214df97a73f9a66b25e2a79fbdcea8da079bc->enter($__internal_93e2c6762a4b3bd0ab1a453f70e214df97a73f9a66b25e2a79fbdcea8da079bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_93e2c6762a4b3bd0ab1a453f70e214df97a73f9a66b25e2a79fbdcea8da079bc->leave($__internal_93e2c6762a4b3bd0ab1a453f70e214df97a73f9a66b25e2a79fbdcea8da079bc_prof);

        
        $__internal_404633c4150be2cbdd4f1f3566f186d36f3629e0df2c9bd06ec5224af95fbdb2->leave($__internal_404633c4150be2cbdd4f1f3566f186d36f3629e0df2c9bd06ec5224af95fbdb2_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6e9cca708411ef1d67b7f57b7bbd85ad2b6c56dde9cebec60db69acc85dced7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9cca708411ef1d67b7f57b7bbd85ad2b6c56dde9cebec60db69acc85dced7d->enter($__internal_6e9cca708411ef1d67b7f57b7bbd85ad2b6c56dde9cebec60db69acc85dced7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9b03e29a7aadd52bffeda1748590a2d67db3b7d2c321bfd6f16cf83278953e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b03e29a7aadd52bffeda1748590a2d67db3b7d2c321bfd6f16cf83278953e46->enter($__internal_9b03e29a7aadd52bffeda1748590a2d67db3b7d2c321bfd6f16cf83278953e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9b03e29a7aadd52bffeda1748590a2d67db3b7d2c321bfd6f16cf83278953e46->leave($__internal_9b03e29a7aadd52bffeda1748590a2d67db3b7d2c321bfd6f16cf83278953e46_prof);

        
        $__internal_6e9cca708411ef1d67b7f57b7bbd85ad2b6c56dde9cebec60db69acc85dced7d->leave($__internal_6e9cca708411ef1d67b7f57b7bbd85ad2b6c56dde9cebec60db69acc85dced7d_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_c722b2142b1758a2916a7d449c234a200cba8260684e3e205ff9c85ac4cf9f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c722b2142b1758a2916a7d449c234a200cba8260684e3e205ff9c85ac4cf9f62->enter($__internal_c722b2142b1758a2916a7d449c234a200cba8260684e3e205ff9c85ac4cf9f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_d01188f34868a57b039fd7904fb980027aa271d48fa39f833cb224b8e6d8088a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01188f34868a57b039fd7904fb980027aa271d48fa39f833cb224b8e6d8088a->enter($__internal_d01188f34868a57b039fd7904fb980027aa271d48fa39f833cb224b8e6d8088a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_d01188f34868a57b039fd7904fb980027aa271d48fa39f833cb224b8e6d8088a->leave($__internal_d01188f34868a57b039fd7904fb980027aa271d48fa39f833cb224b8e6d8088a_prof);

        
        $__internal_c722b2142b1758a2916a7d449c234a200cba8260684e3e205ff9c85ac4cf9f62->leave($__internal_c722b2142b1758a2916a7d449c234a200cba8260684e3e205ff9c85ac4cf9f62_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_682c76af9dc32eaf35dff2c62cd369f3d4699de3542398aa8470684900e03ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682c76af9dc32eaf35dff2c62cd369f3d4699de3542398aa8470684900e03ebe->enter($__internal_682c76af9dc32eaf35dff2c62cd369f3d4699de3542398aa8470684900e03ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_134b4f5c049f097f0ed79992f1f6a2d884bd539868de26505739fb83d74d9772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134b4f5c049f097f0ed79992f1f6a2d884bd539868de26505739fb83d74d9772->enter($__internal_134b4f5c049f097f0ed79992f1f6a2d884bd539868de26505739fb83d74d9772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_134b4f5c049f097f0ed79992f1f6a2d884bd539868de26505739fb83d74d9772->leave($__internal_134b4f5c049f097f0ed79992f1f6a2d884bd539868de26505739fb83d74d9772_prof);

        
        $__internal_682c76af9dc32eaf35dff2c62cd369f3d4699de3542398aa8470684900e03ebe->leave($__internal_682c76af9dc32eaf35dff2c62cd369f3d4699de3542398aa8470684900e03ebe_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e074e0a179917677f5393827ca337255cc5f5890831770d770f4fcf3bc7f667b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e074e0a179917677f5393827ca337255cc5f5890831770d770f4fcf3bc7f667b->enter($__internal_e074e0a179917677f5393827ca337255cc5f5890831770d770f4fcf3bc7f667b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_711b817c0d176db19b362920fefb92074ca0f046fe7fde3bdd64f9b89eba7c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711b817c0d176db19b362920fefb92074ca0f046fe7fde3bdd64f9b89eba7c40->enter($__internal_711b817c0d176db19b362920fefb92074ca0f046fe7fde3bdd64f9b89eba7c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_711b817c0d176db19b362920fefb92074ca0f046fe7fde3bdd64f9b89eba7c40->leave($__internal_711b817c0d176db19b362920fefb92074ca0f046fe7fde3bdd64f9b89eba7c40_prof);

        
        $__internal_e074e0a179917677f5393827ca337255cc5f5890831770d770f4fcf3bc7f667b->leave($__internal_e074e0a179917677f5393827ca337255cc5f5890831770d770f4fcf3bc7f667b_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1c8c2dd8354702991f5cc2e434d3378c22b021c3303c4f5a8977ae92494ea50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8c2dd8354702991f5cc2e434d3378c22b021c3303c4f5a8977ae92494ea50e->enter($__internal_1c8c2dd8354702991f5cc2e434d3378c22b021c3303c4f5a8977ae92494ea50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_090e1f9325c13e080ddd86e45bfc54555e97e602430d9acb0564a101daa606a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090e1f9325c13e080ddd86e45bfc54555e97e602430d9acb0564a101daa606a8->enter($__internal_090e1f9325c13e080ddd86e45bfc54555e97e602430d9acb0564a101daa606a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_090e1f9325c13e080ddd86e45bfc54555e97e602430d9acb0564a101daa606a8->leave($__internal_090e1f9325c13e080ddd86e45bfc54555e97e602430d9acb0564a101daa606a8_prof);

        
        $__internal_1c8c2dd8354702991f5cc2e434d3378c22b021c3303c4f5a8977ae92494ea50e->leave($__internal_1c8c2dd8354702991f5cc2e434d3378c22b021c3303c4f5a8977ae92494ea50e_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_79f476eb937c721464bcd77ad8dc49f99d9866aeeb779e7b392c163edb145df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f476eb937c721464bcd77ad8dc49f99d9866aeeb779e7b392c163edb145df0->enter($__internal_79f476eb937c721464bcd77ad8dc49f99d9866aeeb779e7b392c163edb145df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d2dced89bc945e6ed94e0ee7d7286c435b31e4b5c63284ddd4c7b03bf041a7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dced89bc945e6ed94e0ee7d7286c435b31e4b5c63284ddd4c7b03bf041a7d9->enter($__internal_d2dced89bc945e6ed94e0ee7d7286c435b31e4b5c63284ddd4c7b03bf041a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_d2dced89bc945e6ed94e0ee7d7286c435b31e4b5c63284ddd4c7b03bf041a7d9->leave($__internal_d2dced89bc945e6ed94e0ee7d7286c435b31e4b5c63284ddd4c7b03bf041a7d9_prof);

        
        $__internal_79f476eb937c721464bcd77ad8dc49f99d9866aeeb779e7b392c163edb145df0->leave($__internal_79f476eb937c721464bcd77ad8dc49f99d9866aeeb779e7b392c163edb145df0_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0671112715695c0ff287d0f50e8f1089cff3a5675d5d8d8eebb4852010e6343f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0671112715695c0ff287d0f50e8f1089cff3a5675d5d8d8eebb4852010e6343f->enter($__internal_0671112715695c0ff287d0f50e8f1089cff3a5675d5d8d8eebb4852010e6343f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_38b4c5224d78f783f58f75ec21f5cd320dfc458e89b210df39cb7847c55b6b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b4c5224d78f783f58f75ec21f5cd320dfc458e89b210df39cb7847c55b6b2d->enter($__internal_38b4c5224d78f783f58f75ec21f5cd320dfc458e89b210df39cb7847c55b6b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_38b4c5224d78f783f58f75ec21f5cd320dfc458e89b210df39cb7847c55b6b2d->leave($__internal_38b4c5224d78f783f58f75ec21f5cd320dfc458e89b210df39cb7847c55b6b2d_prof);

        
        $__internal_0671112715695c0ff287d0f50e8f1089cff3a5675d5d8d8eebb4852010e6343f->leave($__internal_0671112715695c0ff287d0f50e8f1089cff3a5675d5d8d8eebb4852010e6343f_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_9a5e41629c760b5a4ef27e5068ccd4f6d4a589d9028d05f1a3694f13b0538497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5e41629c760b5a4ef27e5068ccd4f6d4a589d9028d05f1a3694f13b0538497->enter($__internal_9a5e41629c760b5a4ef27e5068ccd4f6d4a589d9028d05f1a3694f13b0538497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_297fc5f91f6834b0574735ee76acfbd7b7e0ec311f0c1d0f80b65c6d1291aca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297fc5f91f6834b0574735ee76acfbd7b7e0ec311f0c1d0f80b65c6d1291aca2->enter($__internal_297fc5f91f6834b0574735ee76acfbd7b7e0ec311f0c1d0f80b65c6d1291aca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_297fc5f91f6834b0574735ee76acfbd7b7e0ec311f0c1d0f80b65c6d1291aca2->leave($__internal_297fc5f91f6834b0574735ee76acfbd7b7e0ec311f0c1d0f80b65c6d1291aca2_prof);

        
        $__internal_9a5e41629c760b5a4ef27e5068ccd4f6d4a589d9028d05f1a3694f13b0538497->leave($__internal_9a5e41629c760b5a4ef27e5068ccd4f6d4a589d9028d05f1a3694f13b0538497_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ae6f17f01a6ce8a7789cf0e8957f2d2517274e4265796da5bf616d5a7e073f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae6f17f01a6ce8a7789cf0e8957f2d2517274e4265796da5bf616d5a7e073f89->enter($__internal_ae6f17f01a6ce8a7789cf0e8957f2d2517274e4265796da5bf616d5a7e073f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_9dd59bccad2761d29724c42c0082ac341860d1c632f2aaf557eb6c8e4932c9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd59bccad2761d29724c42c0082ac341860d1c632f2aaf557eb6c8e4932c9be->enter($__internal_9dd59bccad2761d29724c42c0082ac341860d1c632f2aaf557eb6c8e4932c9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9dd59bccad2761d29724c42c0082ac341860d1c632f2aaf557eb6c8e4932c9be->leave($__internal_9dd59bccad2761d29724c42c0082ac341860d1c632f2aaf557eb6c8e4932c9be_prof);

        
        $__internal_ae6f17f01a6ce8a7789cf0e8957f2d2517274e4265796da5bf616d5a7e073f89->leave($__internal_ae6f17f01a6ce8a7789cf0e8957f2d2517274e4265796da5bf616d5a7e073f89_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ff5ba8484da7a9c87d5f489ea7c9a6574ddc356a7787bd05ecf70f25ecae5cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5ba8484da7a9c87d5f489ea7c9a6574ddc356a7787bd05ecf70f25ecae5cce->enter($__internal_ff5ba8484da7a9c87d5f489ea7c9a6574ddc356a7787bd05ecf70f25ecae5cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d97f40924f6206ca25dcb63810bb94a05415e662ecab271182757d15a76c7026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97f40924f6206ca25dcb63810bb94a05415e662ecab271182757d15a76c7026->enter($__internal_d97f40924f6206ca25dcb63810bb94a05415e662ecab271182757d15a76c7026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d97f40924f6206ca25dcb63810bb94a05415e662ecab271182757d15a76c7026->leave($__internal_d97f40924f6206ca25dcb63810bb94a05415e662ecab271182757d15a76c7026_prof);

        
        $__internal_ff5ba8484da7a9c87d5f489ea7c9a6574ddc356a7787bd05ecf70f25ecae5cce->leave($__internal_ff5ba8484da7a9c87d5f489ea7c9a6574ddc356a7787bd05ecf70f25ecae5cce_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_542c9fce3b477a7f17e86dea5994d5f83420e4153d3f1a03ebd862590fa1c7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_542c9fce3b477a7f17e86dea5994d5f83420e4153d3f1a03ebd862590fa1c7ad->enter($__internal_542c9fce3b477a7f17e86dea5994d5f83420e4153d3f1a03ebd862590fa1c7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5255b51ca505a8ed7561cf8e8671b080c211850aa93546a9837521ce8357c915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5255b51ca505a8ed7561cf8e8671b080c211850aa93546a9837521ce8357c915->enter($__internal_5255b51ca505a8ed7561cf8e8671b080c211850aa93546a9837521ce8357c915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5255b51ca505a8ed7561cf8e8671b080c211850aa93546a9837521ce8357c915->leave($__internal_5255b51ca505a8ed7561cf8e8671b080c211850aa93546a9837521ce8357c915_prof);

        
        $__internal_542c9fce3b477a7f17e86dea5994d5f83420e4153d3f1a03ebd862590fa1c7ad->leave($__internal_542c9fce3b477a7f17e86dea5994d5f83420e4153d3f1a03ebd862590fa1c7ad_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_46d53d230525731272b25c3d53593102011d9b567f8fa443b50a75bc81a9875a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d53d230525731272b25c3d53593102011d9b567f8fa443b50a75bc81a9875a->enter($__internal_46d53d230525731272b25c3d53593102011d9b567f8fa443b50a75bc81a9875a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_24944fdd9e6e15663fdcd98531bbb263713769d361e9a5fa0c852fee55c1d7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24944fdd9e6e15663fdcd98531bbb263713769d361e9a5fa0c852fee55c1d7f5->enter($__internal_24944fdd9e6e15663fdcd98531bbb263713769d361e9a5fa0c852fee55c1d7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_24944fdd9e6e15663fdcd98531bbb263713769d361e9a5fa0c852fee55c1d7f5->leave($__internal_24944fdd9e6e15663fdcd98531bbb263713769d361e9a5fa0c852fee55c1d7f5_prof);

        
        $__internal_46d53d230525731272b25c3d53593102011d9b567f8fa443b50a75bc81a9875a->leave($__internal_46d53d230525731272b25c3d53593102011d9b567f8fa443b50a75bc81a9875a_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7a8ad6473c939caedfd012c7ee4e11d64fe0b05112fa5ab25edd97a7b01ede03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8ad6473c939caedfd012c7ee4e11d64fe0b05112fa5ab25edd97a7b01ede03->enter($__internal_7a8ad6473c939caedfd012c7ee4e11d64fe0b05112fa5ab25edd97a7b01ede03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_53281a44d946dd68e92bc4a9282a094e83e9849fce10218eb9321a7b6b9b6085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53281a44d946dd68e92bc4a9282a094e83e9849fce10218eb9321a7b6b9b6085->enter($__internal_53281a44d946dd68e92bc4a9282a094e83e9849fce10218eb9321a7b6b9b6085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_53281a44d946dd68e92bc4a9282a094e83e9849fce10218eb9321a7b6b9b6085->leave($__internal_53281a44d946dd68e92bc4a9282a094e83e9849fce10218eb9321a7b6b9b6085_prof);

        
        $__internal_7a8ad6473c939caedfd012c7ee4e11d64fe0b05112fa5ab25edd97a7b01ede03->leave($__internal_7a8ad6473c939caedfd012c7ee4e11d64fe0b05112fa5ab25edd97a7b01ede03_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6954ab1a749e39145731999166b3c80d1e4d0aa1f4781f1bc7bd4e4b0adfdc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6954ab1a749e39145731999166b3c80d1e4d0aa1f4781f1bc7bd4e4b0adfdc2e->enter($__internal_6954ab1a749e39145731999166b3c80d1e4d0aa1f4781f1bc7bd4e4b0adfdc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_0782a4bbc1e3a28247bebee16b28ab492a0343d03f63282049f3dee115b10641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0782a4bbc1e3a28247bebee16b28ab492a0343d03f63282049f3dee115b10641->enter($__internal_0782a4bbc1e3a28247bebee16b28ab492a0343d03f63282049f3dee115b10641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_0782a4bbc1e3a28247bebee16b28ab492a0343d03f63282049f3dee115b10641->leave($__internal_0782a4bbc1e3a28247bebee16b28ab492a0343d03f63282049f3dee115b10641_prof);

        
        $__internal_6954ab1a749e39145731999166b3c80d1e4d0aa1f4781f1bc7bd4e4b0adfdc2e->leave($__internal_6954ab1a749e39145731999166b3c80d1e4d0aa1f4781f1bc7bd4e4b0adfdc2e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/Darmanko-immobilier/Darmanko/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
