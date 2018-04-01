<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_e3ebbe058bc1a092ab86e5cb0401ac14593222edb661eaf99e064043fccbb49b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d21d10c7beeb436e6c98cbcf1f4c55eed1e3b1d2cd5d15b79d0ed87cdb8bf65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d21d10c7beeb436e6c98cbcf1f4c55eed1e3b1d2cd5d15b79d0ed87cdb8bf65->enter($__internal_4d21d10c7beeb436e6c98cbcf1f4c55eed1e3b1d2cd5d15b79d0ed87cdb8bf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_96369c70cc912be18be05f1a77d5632aa9bfd245befc05108c97b0f5e0e89c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96369c70cc912be18be05f1a77d5632aa9bfd245befc05108c97b0f5e0e89c9f->enter($__internal_96369c70cc912be18be05f1a77d5632aa9bfd245befc05108c97b0f5e0e89c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d21d10c7beeb436e6c98cbcf1f4c55eed1e3b1d2cd5d15b79d0ed87cdb8bf65->leave($__internal_4d21d10c7beeb436e6c98cbcf1f4c55eed1e3b1d2cd5d15b79d0ed87cdb8bf65_prof);

        
        $__internal_96369c70cc912be18be05f1a77d5632aa9bfd245befc05108c97b0f5e0e89c9f->leave($__internal_96369c70cc912be18be05f1a77d5632aa9bfd245befc05108c97b0f5e0e89c9f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1f0e5adc383fe2b02dd63fcde58074b5a1fae9f666e2c5f251b2005c2a88250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f0e5adc383fe2b02dd63fcde58074b5a1fae9f666e2c5f251b2005c2a88250->enter($__internal_c1f0e5adc383fe2b02dd63fcde58074b5a1fae9f666e2c5f251b2005c2a88250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e901bc89bbd7c268939c09186aea50787b19962af47b396cd89ab8f27ed4f408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e901bc89bbd7c268939c09186aea50787b19962af47b396cd89ab8f27ed4f408->enter($__internal_e901bc89bbd7c268939c09186aea50787b19962af47b396cd89ab8f27ed4f408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e901bc89bbd7c268939c09186aea50787b19962af47b396cd89ab8f27ed4f408->leave($__internal_e901bc89bbd7c268939c09186aea50787b19962af47b396cd89ab8f27ed4f408_prof);

        
        $__internal_c1f0e5adc383fe2b02dd63fcde58074b5a1fae9f666e2c5f251b2005c2a88250->leave($__internal_c1f0e5adc383fe2b02dd63fcde58074b5a1fae9f666e2c5f251b2005c2a88250_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af7da8779e5b7aa946acec8497970f16b835449efb59069a137a430b555731ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7da8779e5b7aa946acec8497970f16b835449efb59069a137a430b555731ce->enter($__internal_af7da8779e5b7aa946acec8497970f16b835449efb59069a137a430b555731ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cefee831621f90889de2ba3c073f9f2433d363002d089fa7ff0b133a629c77d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefee831621f90889de2ba3c073f9f2433d363002d089fa7ff0b133a629c77d1->enter($__internal_cefee831621f90889de2ba3c073f9f2433d363002d089fa7ff0b133a629c77d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cefee831621f90889de2ba3c073f9f2433d363002d089fa7ff0b133a629c77d1->leave($__internal_cefee831621f90889de2ba3c073f9f2433d363002d089fa7ff0b133a629c77d1_prof);

        
        $__internal_af7da8779e5b7aa946acec8497970f16b835449efb59069a137a430b555731ce->leave($__internal_af7da8779e5b7aa946acec8497970f16b835449efb59069a137a430b555731ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
