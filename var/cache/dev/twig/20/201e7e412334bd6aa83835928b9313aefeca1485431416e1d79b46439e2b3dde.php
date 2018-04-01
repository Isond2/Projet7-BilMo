<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fa593812f68d947bbc2a70226a115329ec1c568997cd08afdbb353c09ac9a808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42673755e9946df6740039853a2e105645af647b39532a8892baef6253101e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42673755e9946df6740039853a2e105645af647b39532a8892baef6253101e35->enter($__internal_42673755e9946df6740039853a2e105645af647b39532a8892baef6253101e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_861533aafedb52b07b3976a866d0a16c00e02645e4ccf15129f1e9071e710451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861533aafedb52b07b3976a866d0a16c00e02645e4ccf15129f1e9071e710451->enter($__internal_861533aafedb52b07b3976a866d0a16c00e02645e4ccf15129f1e9071e710451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42673755e9946df6740039853a2e105645af647b39532a8892baef6253101e35->leave($__internal_42673755e9946df6740039853a2e105645af647b39532a8892baef6253101e35_prof);

        
        $__internal_861533aafedb52b07b3976a866d0a16c00e02645e4ccf15129f1e9071e710451->leave($__internal_861533aafedb52b07b3976a866d0a16c00e02645e4ccf15129f1e9071e710451_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96f2e75627fe1460a4bb40cb5045d91f6d3cc14828df54d2de4856a68ecf697a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f2e75627fe1460a4bb40cb5045d91f6d3cc14828df54d2de4856a68ecf697a->enter($__internal_96f2e75627fe1460a4bb40cb5045d91f6d3cc14828df54d2de4856a68ecf697a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ad7b42376de582fb5cc3656673bc2a8717a7e751aa6ab3ca1eb80d87538450ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7b42376de582fb5cc3656673bc2a8717a7e751aa6ab3ca1eb80d87538450ad->enter($__internal_ad7b42376de582fb5cc3656673bc2a8717a7e751aa6ab3ca1eb80d87538450ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ad7b42376de582fb5cc3656673bc2a8717a7e751aa6ab3ca1eb80d87538450ad->leave($__internal_ad7b42376de582fb5cc3656673bc2a8717a7e751aa6ab3ca1eb80d87538450ad_prof);

        
        $__internal_96f2e75627fe1460a4bb40cb5045d91f6d3cc14828df54d2de4856a68ecf697a->leave($__internal_96f2e75627fe1460a4bb40cb5045d91f6d3cc14828df54d2de4856a68ecf697a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_40436aeca571a192889c25e65f9f4ae60600644d66fb0247e8219d534f53e7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40436aeca571a192889c25e65f9f4ae60600644d66fb0247e8219d534f53e7a4->enter($__internal_40436aeca571a192889c25e65f9f4ae60600644d66fb0247e8219d534f53e7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62787f8eb2f47819299407c99f45b62c217930718710d3162fa378ce8eac0e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62787f8eb2f47819299407c99f45b62c217930718710d3162fa378ce8eac0e19->enter($__internal_62787f8eb2f47819299407c99f45b62c217930718710d3162fa378ce8eac0e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_62787f8eb2f47819299407c99f45b62c217930718710d3162fa378ce8eac0e19->leave($__internal_62787f8eb2f47819299407c99f45b62c217930718710d3162fa378ce8eac0e19_prof);

        
        $__internal_40436aeca571a192889c25e65f9f4ae60600644d66fb0247e8219d534f53e7a4->leave($__internal_40436aeca571a192889c25e65f9f4ae60600644d66fb0247e8219d534f53e7a4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f5655d00ffad51e2eaed2e4fb821a990090c53ade888f14f584f5220428ff5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5655d00ffad51e2eaed2e4fb821a990090c53ade888f14f584f5220428ff5e->enter($__internal_6f5655d00ffad51e2eaed2e4fb821a990090c53ade888f14f584f5220428ff5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad9a665ecbaaccce44e4b735c3c30d6a881e60af392a86b00dc238df9f3802b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9a665ecbaaccce44e4b735c3c30d6a881e60af392a86b00dc238df9f3802b1->enter($__internal_ad9a665ecbaaccce44e4b735c3c30d6a881e60af392a86b00dc238df9f3802b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ad9a665ecbaaccce44e4b735c3c30d6a881e60af392a86b00dc238df9f3802b1->leave($__internal_ad9a665ecbaaccce44e4b735c3c30d6a881e60af392a86b00dc238df9f3802b1_prof);

        
        $__internal_6f5655d00ffad51e2eaed2e4fb821a990090c53ade888f14f584f5220428ff5e->leave($__internal_6f5655d00ffad51e2eaed2e4fb821a990090c53ade888f14f584f5220428ff5e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
