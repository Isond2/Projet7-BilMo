<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_234193b0ee1b6ad7b201923e84356f8a9490b3515a55114a1c1e5511742950f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_d0b71835a128472d97922e9441fea5c8c41103e9bd4b6c0c0a8441457e83fac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b71835a128472d97922e9441fea5c8c41103e9bd4b6c0c0a8441457e83fac0->enter($__internal_d0b71835a128472d97922e9441fea5c8c41103e9bd4b6c0c0a8441457e83fac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d9a16423633ca6fd329befaa1f1ea04bbbc2737394b6a9b2b36bd5bae46f9545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a16423633ca6fd329befaa1f1ea04bbbc2737394b6a9b2b36bd5bae46f9545->enter($__internal_d9a16423633ca6fd329befaa1f1ea04bbbc2737394b6a9b2b36bd5bae46f9545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0b71835a128472d97922e9441fea5c8c41103e9bd4b6c0c0a8441457e83fac0->leave($__internal_d0b71835a128472d97922e9441fea5c8c41103e9bd4b6c0c0a8441457e83fac0_prof);

        
        $__internal_d9a16423633ca6fd329befaa1f1ea04bbbc2737394b6a9b2b36bd5bae46f9545->leave($__internal_d9a16423633ca6fd329befaa1f1ea04bbbc2737394b6a9b2b36bd5bae46f9545_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d831240cb8f069efe4944e895b3cf3b32e433f5f923a92a340209a62588021a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d831240cb8f069efe4944e895b3cf3b32e433f5f923a92a340209a62588021a2->enter($__internal_d831240cb8f069efe4944e895b3cf3b32e433f5f923a92a340209a62588021a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f310fb03f2699d16f42bc1d7e1571c14742528a688ce5c9f08cb19f4b1453d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f310fb03f2699d16f42bc1d7e1571c14742528a688ce5c9f08cb19f4b1453d5f->enter($__internal_f310fb03f2699d16f42bc1d7e1571c14742528a688ce5c9f08cb19f4b1453d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f310fb03f2699d16f42bc1d7e1571c14742528a688ce5c9f08cb19f4b1453d5f->leave($__internal_f310fb03f2699d16f42bc1d7e1571c14742528a688ce5c9f08cb19f4b1453d5f_prof);

        
        $__internal_d831240cb8f069efe4944e895b3cf3b32e433f5f923a92a340209a62588021a2->leave($__internal_d831240cb8f069efe4944e895b3cf3b32e433f5f923a92a340209a62588021a2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3bf1ffe6865b11c3b670784981629e44e95660a8d4c2410a5ee84a16203661c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3bf1ffe6865b11c3b670784981629e44e95660a8d4c2410a5ee84a16203661c->enter($__internal_d3bf1ffe6865b11c3b670784981629e44e95660a8d4c2410a5ee84a16203661c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68f0e3371266af267aa3f3da6f04e9d1a94e736186828b7a4d2eac88e368ea46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f0e3371266af267aa3f3da6f04e9d1a94e736186828b7a4d2eac88e368ea46->enter($__internal_68f0e3371266af267aa3f3da6f04e9d1a94e736186828b7a4d2eac88e368ea46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_68f0e3371266af267aa3f3da6f04e9d1a94e736186828b7a4d2eac88e368ea46->leave($__internal_68f0e3371266af267aa3f3da6f04e9d1a94e736186828b7a4d2eac88e368ea46_prof);

        
        $__internal_d3bf1ffe6865b11c3b670784981629e44e95660a8d4c2410a5ee84a16203661c->leave($__internal_d3bf1ffe6865b11c3b670784981629e44e95660a8d4c2410a5ee84a16203661c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
