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
        $__internal_266ee8cfc5819aefb24b0ca2f1e3aca6f051dd875ec193a825eb650ecf41f356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266ee8cfc5819aefb24b0ca2f1e3aca6f051dd875ec193a825eb650ecf41f356->enter($__internal_266ee8cfc5819aefb24b0ca2f1e3aca6f051dd875ec193a825eb650ecf41f356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_e21e17cae49e972ccac5c9a1d105aee4be9617b09a46430a736f94f50e29d129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21e17cae49e972ccac5c9a1d105aee4be9617b09a46430a736f94f50e29d129->enter($__internal_e21e17cae49e972ccac5c9a1d105aee4be9617b09a46430a736f94f50e29d129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_266ee8cfc5819aefb24b0ca2f1e3aca6f051dd875ec193a825eb650ecf41f356->leave($__internal_266ee8cfc5819aefb24b0ca2f1e3aca6f051dd875ec193a825eb650ecf41f356_prof);

        
        $__internal_e21e17cae49e972ccac5c9a1d105aee4be9617b09a46430a736f94f50e29d129->leave($__internal_e21e17cae49e972ccac5c9a1d105aee4be9617b09a46430a736f94f50e29d129_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_44c912a8d9200fa7e84900a898f1fa9e2453a6f6e09c95ce6e448efbf28f78d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c912a8d9200fa7e84900a898f1fa9e2453a6f6e09c95ce6e448efbf28f78d0->enter($__internal_44c912a8d9200fa7e84900a898f1fa9e2453a6f6e09c95ce6e448efbf28f78d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_ec142485779a8da63569c672f42c900af7f28b9eafb66bfa0a8b9b1c7646bb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec142485779a8da63569c672f42c900af7f28b9eafb66bfa0a8b9b1c7646bb15->enter($__internal_ec142485779a8da63569c672f42c900af7f28b9eafb66bfa0a8b9b1c7646bb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ec142485779a8da63569c672f42c900af7f28b9eafb66bfa0a8b9b1c7646bb15->leave($__internal_ec142485779a8da63569c672f42c900af7f28b9eafb66bfa0a8b9b1c7646bb15_prof);

        
        $__internal_44c912a8d9200fa7e84900a898f1fa9e2453a6f6e09c95ce6e448efbf28f78d0->leave($__internal_44c912a8d9200fa7e84900a898f1fa9e2453a6f6e09c95ce6e448efbf28f78d0_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2493e165b075fa5564385c4814cb8f8f1cb9df947638b63424a67580e80722d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2493e165b075fa5564385c4814cb8f8f1cb9df947638b63424a67580e80722d0->enter($__internal_2493e165b075fa5564385c4814cb8f8f1cb9df947638b63424a67580e80722d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_0c4143d721da1d17b81a96efe4b0b06a4d571062944e1e36d87ff58db7ee1a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4143d721da1d17b81a96efe4b0b06a4d571062944e1e36d87ff58db7ee1a52->enter($__internal_0c4143d721da1d17b81a96efe4b0b06a4d571062944e1e36d87ff58db7ee1a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_0c4143d721da1d17b81a96efe4b0b06a4d571062944e1e36d87ff58db7ee1a52->leave($__internal_0c4143d721da1d17b81a96efe4b0b06a4d571062944e1e36d87ff58db7ee1a52_prof);

        
        $__internal_2493e165b075fa5564385c4814cb8f8f1cb9df947638b63424a67580e80722d0->leave($__internal_2493e165b075fa5564385c4814cb8f8f1cb9df947638b63424a67580e80722d0_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_5606833be94c921352cbef5f360ac56718ca900054409dc17ffb52255b17ecfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5606833be94c921352cbef5f360ac56718ca900054409dc17ffb52255b17ecfe->enter($__internal_5606833be94c921352cbef5f360ac56718ca900054409dc17ffb52255b17ecfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_d1dd4a9e6291c3f531bab2196a7102302974b340817a0741335c50b8581905f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1dd4a9e6291c3f531bab2196a7102302974b340817a0741335c50b8581905f5->enter($__internal_d1dd4a9e6291c3f531bab2196a7102302974b340817a0741335c50b8581905f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_d1dd4a9e6291c3f531bab2196a7102302974b340817a0741335c50b8581905f5->leave($__internal_d1dd4a9e6291c3f531bab2196a7102302974b340817a0741335c50b8581905f5_prof);

        
        $__internal_5606833be94c921352cbef5f360ac56718ca900054409dc17ffb52255b17ecfe->leave($__internal_5606833be94c921352cbef5f360ac56718ca900054409dc17ffb52255b17ecfe_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6c1d92d75631427fb43cddcd4b093908c3457ef2f0073cde7207d5c730950535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1d92d75631427fb43cddcd4b093908c3457ef2f0073cde7207d5c730950535->enter($__internal_6c1d92d75631427fb43cddcd4b093908c3457ef2f0073cde7207d5c730950535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1ffdebf478d429a1d18ecfcde94000dd0ae3b62831c62946914ee4c119fd13f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffdebf478d429a1d18ecfcde94000dd0ae3b62831c62946914ee4c119fd13f2->enter($__internal_1ffdebf478d429a1d18ecfcde94000dd0ae3b62831c62946914ee4c119fd13f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_0bb4cdd2b0a8c39119b337aeb4a1bea68ee90fb2a2b901c6a702de34e9a0143d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_a0068bf3db9bd78540588732ab66613192a3d1cc0f607f8a7f62be8b2e5f7b7f = "{{") && ('' === $__internal_a0068bf3db9bd78540588732ab66613192a3d1cc0f607f8a7f62be8b2e5f7b7f || 0 === strpos($__internal_0bb4cdd2b0a8c39119b337aeb4a1bea68ee90fb2a2b901c6a702de34e9a0143d, $__internal_a0068bf3db9bd78540588732ab66613192a3d1cc0f607f8a7f62be8b2e5f7b7f)));
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
        
        $__internal_1ffdebf478d429a1d18ecfcde94000dd0ae3b62831c62946914ee4c119fd13f2->leave($__internal_1ffdebf478d429a1d18ecfcde94000dd0ae3b62831c62946914ee4c119fd13f2_prof);

        
        $__internal_6c1d92d75631427fb43cddcd4b093908c3457ef2f0073cde7207d5c730950535->leave($__internal_6c1d92d75631427fb43cddcd4b093908c3457ef2f0073cde7207d5c730950535_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3ef904b8d974c80f1599ea2ebd255858887bb9ac63cc87fa06a1e53a550b503f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef904b8d974c80f1599ea2ebd255858887bb9ac63cc87fa06a1e53a550b503f->enter($__internal_3ef904b8d974c80f1599ea2ebd255858887bb9ac63cc87fa06a1e53a550b503f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_eaed0ecb5ff8c7af4c7b334cf016067e2c3082eeeb7403911d20b9e90df0479e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaed0ecb5ff8c7af4c7b334cf016067e2c3082eeeb7403911d20b9e90df0479e->enter($__internal_eaed0ecb5ff8c7af4c7b334cf016067e2c3082eeeb7403911d20b9e90df0479e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_eaed0ecb5ff8c7af4c7b334cf016067e2c3082eeeb7403911d20b9e90df0479e->leave($__internal_eaed0ecb5ff8c7af4c7b334cf016067e2c3082eeeb7403911d20b9e90df0479e_prof);

        
        $__internal_3ef904b8d974c80f1599ea2ebd255858887bb9ac63cc87fa06a1e53a550b503f->leave($__internal_3ef904b8d974c80f1599ea2ebd255858887bb9ac63cc87fa06a1e53a550b503f_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_38e15eb0d063e077f69146958f8471efa02045e956ffdc3eb42f00fd0adcca50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e15eb0d063e077f69146958f8471efa02045e956ffdc3eb42f00fd0adcca50->enter($__internal_38e15eb0d063e077f69146958f8471efa02045e956ffdc3eb42f00fd0adcca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9c431a4eee066fdef2b0caed921402fd2861630edf4293a0561ce1ede3a3cab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c431a4eee066fdef2b0caed921402fd2861630edf4293a0561ce1ede3a3cab7->enter($__internal_9c431a4eee066fdef2b0caed921402fd2861630edf4293a0561ce1ede3a3cab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_9c431a4eee066fdef2b0caed921402fd2861630edf4293a0561ce1ede3a3cab7->leave($__internal_9c431a4eee066fdef2b0caed921402fd2861630edf4293a0561ce1ede3a3cab7_prof);

        
        $__internal_38e15eb0d063e077f69146958f8471efa02045e956ffdc3eb42f00fd0adcca50->leave($__internal_38e15eb0d063e077f69146958f8471efa02045e956ffdc3eb42f00fd0adcca50_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6270a31880e565b3b2511ba40fc2bfe3810dfa75b6d207f5d3193d48e56e4209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6270a31880e565b3b2511ba40fc2bfe3810dfa75b6d207f5d3193d48e56e4209->enter($__internal_6270a31880e565b3b2511ba40fc2bfe3810dfa75b6d207f5d3193d48e56e4209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d957d9b3653ab4d2b5c9b070c2efb1868bea897ce5eb85bad5d7e5da0c65c175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d957d9b3653ab4d2b5c9b070c2efb1868bea897ce5eb85bad5d7e5da0c65c175->enter($__internal_d957d9b3653ab4d2b5c9b070c2efb1868bea897ce5eb85bad5d7e5da0c65c175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_d957d9b3653ab4d2b5c9b070c2efb1868bea897ce5eb85bad5d7e5da0c65c175->leave($__internal_d957d9b3653ab4d2b5c9b070c2efb1868bea897ce5eb85bad5d7e5da0c65c175_prof);

        
        $__internal_6270a31880e565b3b2511ba40fc2bfe3810dfa75b6d207f5d3193d48e56e4209->leave($__internal_6270a31880e565b3b2511ba40fc2bfe3810dfa75b6d207f5d3193d48e56e4209_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_02f1968c97efbc25904efe0255c559b013859ee1154cf4464b54b5ee4eac494b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f1968c97efbc25904efe0255c559b013859ee1154cf4464b54b5ee4eac494b->enter($__internal_02f1968c97efbc25904efe0255c559b013859ee1154cf4464b54b5ee4eac494b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_f6a76f38740619609ee6021fecf6b883811778476c2719099241bdd7e53dbfb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a76f38740619609ee6021fecf6b883811778476c2719099241bdd7e53dbfb1->enter($__internal_f6a76f38740619609ee6021fecf6b883811778476c2719099241bdd7e53dbfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_f6a76f38740619609ee6021fecf6b883811778476c2719099241bdd7e53dbfb1->leave($__internal_f6a76f38740619609ee6021fecf6b883811778476c2719099241bdd7e53dbfb1_prof);

        
        $__internal_02f1968c97efbc25904efe0255c559b013859ee1154cf4464b54b5ee4eac494b->leave($__internal_02f1968c97efbc25904efe0255c559b013859ee1154cf4464b54b5ee4eac494b_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_a04185285a20df58a683d7b90e4a4cc2c840fe37a14cd603cbfaf4c499f201d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04185285a20df58a683d7b90e4a4cc2c840fe37a14cd603cbfaf4c499f201d0->enter($__internal_a04185285a20df58a683d7b90e4a4cc2c840fe37a14cd603cbfaf4c499f201d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_897cca800d60beb70eb7696047051a0924f7e3707c3e090877ec1cdae108b50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897cca800d60beb70eb7696047051a0924f7e3707c3e090877ec1cdae108b50f->enter($__internal_897cca800d60beb70eb7696047051a0924f7e3707c3e090877ec1cdae108b50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_897cca800d60beb70eb7696047051a0924f7e3707c3e090877ec1cdae108b50f->leave($__internal_897cca800d60beb70eb7696047051a0924f7e3707c3e090877ec1cdae108b50f_prof);

        
        $__internal_a04185285a20df58a683d7b90e4a4cc2c840fe37a14cd603cbfaf4c499f201d0->leave($__internal_a04185285a20df58a683d7b90e4a4cc2c840fe37a14cd603cbfaf4c499f201d0_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fa392f688fad04a023e8f4a85e34a054d1863d797a47192dd0c2bb5ac4243ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa392f688fad04a023e8f4a85e34a054d1863d797a47192dd0c2bb5ac4243ef2->enter($__internal_fa392f688fad04a023e8f4a85e34a054d1863d797a47192dd0c2bb5ac4243ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_204090a116963061bfe787cfb5ee1b76c8a1bf50f3f4812e914e975c0d456b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204090a116963061bfe787cfb5ee1b76c8a1bf50f3f4812e914e975c0d456b37->enter($__internal_204090a116963061bfe787cfb5ee1b76c8a1bf50f3f4812e914e975c0d456b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_204090a116963061bfe787cfb5ee1b76c8a1bf50f3f4812e914e975c0d456b37->leave($__internal_204090a116963061bfe787cfb5ee1b76c8a1bf50f3f4812e914e975c0d456b37_prof);

        
        $__internal_fa392f688fad04a023e8f4a85e34a054d1863d797a47192dd0c2bb5ac4243ef2->leave($__internal_fa392f688fad04a023e8f4a85e34a054d1863d797a47192dd0c2bb5ac4243ef2_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_a603a7acb4194bc11de944aa1a9b85e3a6a04b4ea3ab8079b26a31906369afee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a603a7acb4194bc11de944aa1a9b85e3a6a04b4ea3ab8079b26a31906369afee->enter($__internal_a603a7acb4194bc11de944aa1a9b85e3a6a04b4ea3ab8079b26a31906369afee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e42c99be5504d48ffa5cd851249338344cc5b5575936226002d2e3c2196ec642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42c99be5504d48ffa5cd851249338344cc5b5575936226002d2e3c2196ec642->enter($__internal_e42c99be5504d48ffa5cd851249338344cc5b5575936226002d2e3c2196ec642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_e42c99be5504d48ffa5cd851249338344cc5b5575936226002d2e3c2196ec642->leave($__internal_e42c99be5504d48ffa5cd851249338344cc5b5575936226002d2e3c2196ec642_prof);

        
        $__internal_a603a7acb4194bc11de944aa1a9b85e3a6a04b4ea3ab8079b26a31906369afee->leave($__internal_a603a7acb4194bc11de944aa1a9b85e3a6a04b4ea3ab8079b26a31906369afee_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_7057ba39f6b71c53b96af0914859bf8eab0d158aac45ad7aaf625ab53776ee3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7057ba39f6b71c53b96af0914859bf8eab0d158aac45ad7aaf625ab53776ee3c->enter($__internal_7057ba39f6b71c53b96af0914859bf8eab0d158aac45ad7aaf625ab53776ee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b3fd989331ddef8f4576f31b3968bc8a4311e540aef2343716f45ec6bbe508d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fd989331ddef8f4576f31b3968bc8a4311e540aef2343716f45ec6bbe508d5->enter($__internal_b3fd989331ddef8f4576f31b3968bc8a4311e540aef2343716f45ec6bbe508d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b3fd989331ddef8f4576f31b3968bc8a4311e540aef2343716f45ec6bbe508d5->leave($__internal_b3fd989331ddef8f4576f31b3968bc8a4311e540aef2343716f45ec6bbe508d5_prof);

        
        $__internal_7057ba39f6b71c53b96af0914859bf8eab0d158aac45ad7aaf625ab53776ee3c->leave($__internal_7057ba39f6b71c53b96af0914859bf8eab0d158aac45ad7aaf625ab53776ee3c_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_28cce9573faac663fe7de2b002e3154731e89f979c5affb70e421c385302fcf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28cce9573faac663fe7de2b002e3154731e89f979c5affb70e421c385302fcf1->enter($__internal_28cce9573faac663fe7de2b002e3154731e89f979c5affb70e421c385302fcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_58c331964c6f8ed9842a167686f91b79fd58f932722a6e847edfb5bf35cfecb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c331964c6f8ed9842a167686f91b79fd58f932722a6e847edfb5bf35cfecb7->enter($__internal_58c331964c6f8ed9842a167686f91b79fd58f932722a6e847edfb5bf35cfecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_58c331964c6f8ed9842a167686f91b79fd58f932722a6e847edfb5bf35cfecb7->leave($__internal_58c331964c6f8ed9842a167686f91b79fd58f932722a6e847edfb5bf35cfecb7_prof);

        
        $__internal_28cce9573faac663fe7de2b002e3154731e89f979c5affb70e421c385302fcf1->leave($__internal_28cce9573faac663fe7de2b002e3154731e89f979c5affb70e421c385302fcf1_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_cb992f405a5d5909fd812e26d41c463af354e1ddc8dd575da3f99e893eef89be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb992f405a5d5909fd812e26d41c463af354e1ddc8dd575da3f99e893eef89be->enter($__internal_cb992f405a5d5909fd812e26d41c463af354e1ddc8dd575da3f99e893eef89be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_97f3c0953daa9c364ac47c6ae28311b2f8d3af9a06cfb122e2877014838c80e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f3c0953daa9c364ac47c6ae28311b2f8d3af9a06cfb122e2877014838c80e2->enter($__internal_97f3c0953daa9c364ac47c6ae28311b2f8d3af9a06cfb122e2877014838c80e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_97f3c0953daa9c364ac47c6ae28311b2f8d3af9a06cfb122e2877014838c80e2->leave($__internal_97f3c0953daa9c364ac47c6ae28311b2f8d3af9a06cfb122e2877014838c80e2_prof);

        
        $__internal_cb992f405a5d5909fd812e26d41c463af354e1ddc8dd575da3f99e893eef89be->leave($__internal_cb992f405a5d5909fd812e26d41c463af354e1ddc8dd575da3f99e893eef89be_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_31f6878e0311a0421782817804f7554a270a5e0b57806a4381385ebd57b85a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f6878e0311a0421782817804f7554a270a5e0b57806a4381385ebd57b85a03->enter($__internal_31f6878e0311a0421782817804f7554a270a5e0b57806a4381385ebd57b85a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_31bc0b53dd2eb841728e9853357617543c9a0e77ddc05145732c69ab2f05d756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31bc0b53dd2eb841728e9853357617543c9a0e77ddc05145732c69ab2f05d756->enter($__internal_31bc0b53dd2eb841728e9853357617543c9a0e77ddc05145732c69ab2f05d756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_31bc0b53dd2eb841728e9853357617543c9a0e77ddc05145732c69ab2f05d756->leave($__internal_31bc0b53dd2eb841728e9853357617543c9a0e77ddc05145732c69ab2f05d756_prof);

        
        $__internal_31f6878e0311a0421782817804f7554a270a5e0b57806a4381385ebd57b85a03->leave($__internal_31f6878e0311a0421782817804f7554a270a5e0b57806a4381385ebd57b85a03_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_de0af691c65077ccb4686670e38949338c3d2372fc004ce106efe31bc85d70e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0af691c65077ccb4686670e38949338c3d2372fc004ce106efe31bc85d70e6->enter($__internal_de0af691c65077ccb4686670e38949338c3d2372fc004ce106efe31bc85d70e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_5cf5bb181beeffa27ad7a484b2ff63488d68ea60768414f247beee82cbbf7b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf5bb181beeffa27ad7a484b2ff63488d68ea60768414f247beee82cbbf7b8c->enter($__internal_5cf5bb181beeffa27ad7a484b2ff63488d68ea60768414f247beee82cbbf7b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5cf5bb181beeffa27ad7a484b2ff63488d68ea60768414f247beee82cbbf7b8c->leave($__internal_5cf5bb181beeffa27ad7a484b2ff63488d68ea60768414f247beee82cbbf7b8c_prof);

        
        $__internal_de0af691c65077ccb4686670e38949338c3d2372fc004ce106efe31bc85d70e6->leave($__internal_de0af691c65077ccb4686670e38949338c3d2372fc004ce106efe31bc85d70e6_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_23f1198cd357d867c02ef68c7598a588e9ba28c7296c9c096f4c9f4509c7faa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f1198cd357d867c02ef68c7598a588e9ba28c7296c9c096f4c9f4509c7faa5->enter($__internal_23f1198cd357d867c02ef68c7598a588e9ba28c7296c9c096f4c9f4509c7faa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_9a95d65853af2cf659656f16b0112018409443af8cd4b92955b5381b40dfdf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a95d65853af2cf659656f16b0112018409443af8cd4b92955b5381b40dfdf8a->enter($__internal_9a95d65853af2cf659656f16b0112018409443af8cd4b92955b5381b40dfdf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_9a95d65853af2cf659656f16b0112018409443af8cd4b92955b5381b40dfdf8a->leave($__internal_9a95d65853af2cf659656f16b0112018409443af8cd4b92955b5381b40dfdf8a_prof);

        
        $__internal_23f1198cd357d867c02ef68c7598a588e9ba28c7296c9c096f4c9f4509c7faa5->leave($__internal_23f1198cd357d867c02ef68c7598a588e9ba28c7296c9c096f4c9f4509c7faa5_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7977fb033e145ea42958ad1bc682b31609311b12e0dff9b2c18121ec13d52f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7977fb033e145ea42958ad1bc682b31609311b12e0dff9b2c18121ec13d52f3c->enter($__internal_7977fb033e145ea42958ad1bc682b31609311b12e0dff9b2c18121ec13d52f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_bc11f82155cf0e1cf9f12edda2785a90d4166de3c89754100bd03874e6ebeb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc11f82155cf0e1cf9f12edda2785a90d4166de3c89754100bd03874e6ebeb60->enter($__internal_bc11f82155cf0e1cf9f12edda2785a90d4166de3c89754100bd03874e6ebeb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_bc11f82155cf0e1cf9f12edda2785a90d4166de3c89754100bd03874e6ebeb60->leave($__internal_bc11f82155cf0e1cf9f12edda2785a90d4166de3c89754100bd03874e6ebeb60_prof);

        
        $__internal_7977fb033e145ea42958ad1bc682b31609311b12e0dff9b2c18121ec13d52f3c->leave($__internal_7977fb033e145ea42958ad1bc682b31609311b12e0dff9b2c18121ec13d52f3c_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a7ca424c86053007652f8216234360467d0335dc8c4c387ea4178d22fc30aff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ca424c86053007652f8216234360467d0335dc8c4c387ea4178d22fc30aff0->enter($__internal_a7ca424c86053007652f8216234360467d0335dc8c4c387ea4178d22fc30aff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8499fe3f62d1542b31469883ad5766570bcdce2dfc3f2f8478522eea6e03bc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8499fe3f62d1542b31469883ad5766570bcdce2dfc3f2f8478522eea6e03bc78->enter($__internal_8499fe3f62d1542b31469883ad5766570bcdce2dfc3f2f8478522eea6e03bc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_8499fe3f62d1542b31469883ad5766570bcdce2dfc3f2f8478522eea6e03bc78->leave($__internal_8499fe3f62d1542b31469883ad5766570bcdce2dfc3f2f8478522eea6e03bc78_prof);

        
        $__internal_a7ca424c86053007652f8216234360467d0335dc8c4c387ea4178d22fc30aff0->leave($__internal_a7ca424c86053007652f8216234360467d0335dc8c4c387ea4178d22fc30aff0_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_558bde3dd400e4fd2fc8a2cb204a409da373e54a402e72ca8996040b2ccc8e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558bde3dd400e4fd2fc8a2cb204a409da373e54a402e72ca8996040b2ccc8e49->enter($__internal_558bde3dd400e4fd2fc8a2cb204a409da373e54a402e72ca8996040b2ccc8e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_e1cae671ca20c39f7c9bf5b14df879e68b8593723697416223aa76879e3cf532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cae671ca20c39f7c9bf5b14df879e68b8593723697416223aa76879e3cf532->enter($__internal_e1cae671ca20c39f7c9bf5b14df879e68b8593723697416223aa76879e3cf532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_e1cae671ca20c39f7c9bf5b14df879e68b8593723697416223aa76879e3cf532->leave($__internal_e1cae671ca20c39f7c9bf5b14df879e68b8593723697416223aa76879e3cf532_prof);

        
        $__internal_558bde3dd400e4fd2fc8a2cb204a409da373e54a402e72ca8996040b2ccc8e49->leave($__internal_558bde3dd400e4fd2fc8a2cb204a409da373e54a402e72ca8996040b2ccc8e49_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_13465609c77dd7b771597c46e8e436bb3889a6a56e70b484947fbd34cd622005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13465609c77dd7b771597c46e8e436bb3889a6a56e70b484947fbd34cd622005->enter($__internal_13465609c77dd7b771597c46e8e436bb3889a6a56e70b484947fbd34cd622005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_79793f893f9d96691dfdd570fc78a2faf3b2010009aec717a373a2c7c76a5d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79793f893f9d96691dfdd570fc78a2faf3b2010009aec717a373a2c7c76a5d22->enter($__internal_79793f893f9d96691dfdd570fc78a2faf3b2010009aec717a373a2c7c76a5d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_79793f893f9d96691dfdd570fc78a2faf3b2010009aec717a373a2c7c76a5d22->leave($__internal_79793f893f9d96691dfdd570fc78a2faf3b2010009aec717a373a2c7c76a5d22_prof);

        
        $__internal_13465609c77dd7b771597c46e8e436bb3889a6a56e70b484947fbd34cd622005->leave($__internal_13465609c77dd7b771597c46e8e436bb3889a6a56e70b484947fbd34cd622005_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_3a8631a2a42dca545310e333fe84bc194486044c8b98bf164f3c0a26ae4f8987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8631a2a42dca545310e333fe84bc194486044c8b98bf164f3c0a26ae4f8987->enter($__internal_3a8631a2a42dca545310e333fe84bc194486044c8b98bf164f3c0a26ae4f8987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ef42dedfcd6c77fbc3e9618d6099bec9efb4e6f96343fc3448c5f51a10151b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef42dedfcd6c77fbc3e9618d6099bec9efb4e6f96343fc3448c5f51a10151b99->enter($__internal_ef42dedfcd6c77fbc3e9618d6099bec9efb4e6f96343fc3448c5f51a10151b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ef42dedfcd6c77fbc3e9618d6099bec9efb4e6f96343fc3448c5f51a10151b99->leave($__internal_ef42dedfcd6c77fbc3e9618d6099bec9efb4e6f96343fc3448c5f51a10151b99_prof);

        
        $__internal_3a8631a2a42dca545310e333fe84bc194486044c8b98bf164f3c0a26ae4f8987->leave($__internal_3a8631a2a42dca545310e333fe84bc194486044c8b98bf164f3c0a26ae4f8987_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1b3e6bb2a7dd89e4183152b6d769776a317528b55ca01cf83c38fe1abe8146a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3e6bb2a7dd89e4183152b6d769776a317528b55ca01cf83c38fe1abe8146a9->enter($__internal_1b3e6bb2a7dd89e4183152b6d769776a317528b55ca01cf83c38fe1abe8146a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_9ea36406ad165a5753487779864ef01faa26e0543b7502b39e6999027e5c78bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea36406ad165a5753487779864ef01faa26e0543b7502b39e6999027e5c78bc->enter($__internal_9ea36406ad165a5753487779864ef01faa26e0543b7502b39e6999027e5c78bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9ea36406ad165a5753487779864ef01faa26e0543b7502b39e6999027e5c78bc->leave($__internal_9ea36406ad165a5753487779864ef01faa26e0543b7502b39e6999027e5c78bc_prof);

        
        $__internal_1b3e6bb2a7dd89e4183152b6d769776a317528b55ca01cf83c38fe1abe8146a9->leave($__internal_1b3e6bb2a7dd89e4183152b6d769776a317528b55ca01cf83c38fe1abe8146a9_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ec10978458c8502fe4b12b30a6f71e12238da49d22b1a4da6467e0a61b51cbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec10978458c8502fe4b12b30a6f71e12238da49d22b1a4da6467e0a61b51cbd5->enter($__internal_ec10978458c8502fe4b12b30a6f71e12238da49d22b1a4da6467e0a61b51cbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_9b0e5d901ad5edde19077a1bfacdd24d59b8c1a76ed2dec3cad276f967b14ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0e5d901ad5edde19077a1bfacdd24d59b8c1a76ed2dec3cad276f967b14ded->enter($__internal_9b0e5d901ad5edde19077a1bfacdd24d59b8c1a76ed2dec3cad276f967b14ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_9b0e5d901ad5edde19077a1bfacdd24d59b8c1a76ed2dec3cad276f967b14ded->leave($__internal_9b0e5d901ad5edde19077a1bfacdd24d59b8c1a76ed2dec3cad276f967b14ded_prof);

        
        $__internal_ec10978458c8502fe4b12b30a6f71e12238da49d22b1a4da6467e0a61b51cbd5->leave($__internal_ec10978458c8502fe4b12b30a6f71e12238da49d22b1a4da6467e0a61b51cbd5_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_9f1045b804ff99506d41bc6d4bafa9cacf6e1fa40b9a8c92b727566a57957fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1045b804ff99506d41bc6d4bafa9cacf6e1fa40b9a8c92b727566a57957fa2->enter($__internal_9f1045b804ff99506d41bc6d4bafa9cacf6e1fa40b9a8c92b727566a57957fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3891ad0a1cabea9145c68c88015c245b335ee673367fec5b427e9ea663a0251c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3891ad0a1cabea9145c68c88015c245b335ee673367fec5b427e9ea663a0251c->enter($__internal_3891ad0a1cabea9145c68c88015c245b335ee673367fec5b427e9ea663a0251c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_3891ad0a1cabea9145c68c88015c245b335ee673367fec5b427e9ea663a0251c->leave($__internal_3891ad0a1cabea9145c68c88015c245b335ee673367fec5b427e9ea663a0251c_prof);

        
        $__internal_9f1045b804ff99506d41bc6d4bafa9cacf6e1fa40b9a8c92b727566a57957fa2->leave($__internal_9f1045b804ff99506d41bc6d4bafa9cacf6e1fa40b9a8c92b727566a57957fa2_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_74918e2bbeb5df55921c41b5e4e9881871f7528da8e97bab5ccdd7be6a6b359e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74918e2bbeb5df55921c41b5e4e9881871f7528da8e97bab5ccdd7be6a6b359e->enter($__internal_74918e2bbeb5df55921c41b5e4e9881871f7528da8e97bab5ccdd7be6a6b359e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_cc3e4af0e6a85d3f17bcf4532db84356259ac3d864b0d1f29d1e58efe36d8103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3e4af0e6a85d3f17bcf4532db84356259ac3d864b0d1f29d1e58efe36d8103->enter($__internal_cc3e4af0e6a85d3f17bcf4532db84356259ac3d864b0d1f29d1e58efe36d8103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_cc3e4af0e6a85d3f17bcf4532db84356259ac3d864b0d1f29d1e58efe36d8103->leave($__internal_cc3e4af0e6a85d3f17bcf4532db84356259ac3d864b0d1f29d1e58efe36d8103_prof);

        
        $__internal_74918e2bbeb5df55921c41b5e4e9881871f7528da8e97bab5ccdd7be6a6b359e->leave($__internal_74918e2bbeb5df55921c41b5e4e9881871f7528da8e97bab5ccdd7be6a6b359e_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_cf2ac743444e6a9ea892f1f2b07cb0781a0dba3d98db786d1b67ab1b6ce5fd65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2ac743444e6a9ea892f1f2b07cb0781a0dba3d98db786d1b67ab1b6ce5fd65->enter($__internal_cf2ac743444e6a9ea892f1f2b07cb0781a0dba3d98db786d1b67ab1b6ce5fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_63b0e01df969828a758c587995afee4c34b14c2ba7d834b3102a08c7a2a463e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b0e01df969828a758c587995afee4c34b14c2ba7d834b3102a08c7a2a463e8->enter($__internal_63b0e01df969828a758c587995afee4c34b14c2ba7d834b3102a08c7a2a463e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_63b0e01df969828a758c587995afee4c34b14c2ba7d834b3102a08c7a2a463e8->leave($__internal_63b0e01df969828a758c587995afee4c34b14c2ba7d834b3102a08c7a2a463e8_prof);

        
        $__internal_cf2ac743444e6a9ea892f1f2b07cb0781a0dba3d98db786d1b67ab1b6ce5fd65->leave($__internal_cf2ac743444e6a9ea892f1f2b07cb0781a0dba3d98db786d1b67ab1b6ce5fd65_prof);

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
