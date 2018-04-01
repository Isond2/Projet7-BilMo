<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_58e12f4a1fdfbe6ec3bae0f7f478eed0f2e59fa7f69cae6300c8001b83a7d36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c3a8e9847604d369be498fbca5e9c745a1f8478767fa52570ecd830a4a83f316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3a8e9847604d369be498fbca5e9c745a1f8478767fa52570ecd830a4a83f316->enter($__internal_c3a8e9847604d369be498fbca5e9c745a1f8478767fa52570ecd830a4a83f316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_07ca393e395b681c86cae5744fc957437b03e17c89b4e42fc770b8e033e4b4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ca393e395b681c86cae5744fc957437b03e17c89b4e42fc770b8e033e4b4fd->enter($__internal_07ca393e395b681c86cae5744fc957437b03e17c89b4e42fc770b8e033e4b4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3a8e9847604d369be498fbca5e9c745a1f8478767fa52570ecd830a4a83f316->leave($__internal_c3a8e9847604d369be498fbca5e9c745a1f8478767fa52570ecd830a4a83f316_prof);

        
        $__internal_07ca393e395b681c86cae5744fc957437b03e17c89b4e42fc770b8e033e4b4fd->leave($__internal_07ca393e395b681c86cae5744fc957437b03e17c89b4e42fc770b8e033e4b4fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b816101ce9d10adb2f18d1f1d0df39a7593e5d7d9ab3b4f402b079fd7305118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b816101ce9d10adb2f18d1f1d0df39a7593e5d7d9ab3b4f402b079fd7305118->enter($__internal_0b816101ce9d10adb2f18d1f1d0df39a7593e5d7d9ab3b4f402b079fd7305118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5eb4e2ad647de2211bfc4be97eb27e2201f08313b356209df44ee18a0692ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5eb4e2ad647de2211bfc4be97eb27e2201f08313b356209df44ee18a0692ddb->enter($__internal_f5eb4e2ad647de2211bfc4be97eb27e2201f08313b356209df44ee18a0692ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f5eb4e2ad647de2211bfc4be97eb27e2201f08313b356209df44ee18a0692ddb->leave($__internal_f5eb4e2ad647de2211bfc4be97eb27e2201f08313b356209df44ee18a0692ddb_prof);

        
        $__internal_0b816101ce9d10adb2f18d1f1d0df39a7593e5d7d9ab3b4f402b079fd7305118->leave($__internal_0b816101ce9d10adb2f18d1f1d0df39a7593e5d7d9ab3b4f402b079fd7305118_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_01a3fe2e9546c942c009e14347e6ea4331fb0366cc3f266127a0360bf24e4987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a3fe2e9546c942c009e14347e6ea4331fb0366cc3f266127a0360bf24e4987->enter($__internal_01a3fe2e9546c942c009e14347e6ea4331fb0366cc3f266127a0360bf24e4987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9cc87baaf7f8b69165f0d00979ee1439b61d45cd6085681aca0f46a5a33d79c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc87baaf7f8b69165f0d00979ee1439b61d45cd6085681aca0f46a5a33d79c1->enter($__internal_9cc87baaf7f8b69165f0d00979ee1439b61d45cd6085681aca0f46a5a33d79c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9cc87baaf7f8b69165f0d00979ee1439b61d45cd6085681aca0f46a5a33d79c1->leave($__internal_9cc87baaf7f8b69165f0d00979ee1439b61d45cd6085681aca0f46a5a33d79c1_prof);

        
        $__internal_01a3fe2e9546c942c009e14347e6ea4331fb0366cc3f266127a0360bf24e4987->leave($__internal_01a3fe2e9546c942c009e14347e6ea4331fb0366cc3f266127a0360bf24e4987_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_962c3104d4a30465afa438821ff40d99565dc135be5e73bc2bb98f051dbda214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962c3104d4a30465afa438821ff40d99565dc135be5e73bc2bb98f051dbda214->enter($__internal_962c3104d4a30465afa438821ff40d99565dc135be5e73bc2bb98f051dbda214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e7662953d401d568b11364dba09f36e5987c0efdece73b3024eac33142c6ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7662953d401d568b11364dba09f36e5987c0efdece73b3024eac33142c6ce6->enter($__internal_5e7662953d401d568b11364dba09f36e5987c0efdece73b3024eac33142c6ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5e7662953d401d568b11364dba09f36e5987c0efdece73b3024eac33142c6ce6->leave($__internal_5e7662953d401d568b11364dba09f36e5987c0efdece73b3024eac33142c6ce6_prof);

        
        $__internal_962c3104d4a30465afa438821ff40d99565dc135be5e73bc2bb98f051dbda214->leave($__internal_962c3104d4a30465afa438821ff40d99565dc135be5e73bc2bb98f051dbda214_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
