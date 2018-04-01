<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_044ae10a8c3d03d70ee4e43b1d74a82ab139380f7bd1a0614a2b872849e894dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_275a7776b147e8530da3645da780ad4f5a5189e521987907443d2fb34dadb369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275a7776b147e8530da3645da780ad4f5a5189e521987907443d2fb34dadb369->enter($__internal_275a7776b147e8530da3645da780ad4f5a5189e521987907443d2fb34dadb369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c481b87f0a0c805cd95307307f527d9e03d9abeb17a6c78caf135fbdfc430b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c481b87f0a0c805cd95307307f527d9e03d9abeb17a6c78caf135fbdfc430b63->enter($__internal_c481b87f0a0c805cd95307307f527d9e03d9abeb17a6c78caf135fbdfc430b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275a7776b147e8530da3645da780ad4f5a5189e521987907443d2fb34dadb369->leave($__internal_275a7776b147e8530da3645da780ad4f5a5189e521987907443d2fb34dadb369_prof);

        
        $__internal_c481b87f0a0c805cd95307307f527d9e03d9abeb17a6c78caf135fbdfc430b63->leave($__internal_c481b87f0a0c805cd95307307f527d9e03d9abeb17a6c78caf135fbdfc430b63_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_872e28f8e9f903e714a889ea478a10f0bb36d87372b530128078be596e21e5a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872e28f8e9f903e714a889ea478a10f0bb36d87372b530128078be596e21e5a8->enter($__internal_872e28f8e9f903e714a889ea478a10f0bb36d87372b530128078be596e21e5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f4b7b2552fe7e2cd5182482aff4b96d429a5785e7f9ce8e2ad6ccadbef21bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4b7b2552fe7e2cd5182482aff4b96d429a5785e7f9ce8e2ad6ccadbef21bf6->enter($__internal_3f4b7b2552fe7e2cd5182482aff4b96d429a5785e7f9ce8e2ad6ccadbef21bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3f4b7b2552fe7e2cd5182482aff4b96d429a5785e7f9ce8e2ad6ccadbef21bf6->leave($__internal_3f4b7b2552fe7e2cd5182482aff4b96d429a5785e7f9ce8e2ad6ccadbef21bf6_prof);

        
        $__internal_872e28f8e9f903e714a889ea478a10f0bb36d87372b530128078be596e21e5a8->leave($__internal_872e28f8e9f903e714a889ea478a10f0bb36d87372b530128078be596e21e5a8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
