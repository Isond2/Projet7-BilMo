<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a2ee7a763937b5b3c638b8550a87869a804a631fc8d1de018a1ca54508f5d248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ef0c4c85663c25f21433a8add7cd669626f5331bb6c027f37dece1f5769d2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef0c4c85663c25f21433a8add7cd669626f5331bb6c027f37dece1f5769d2e9->enter($__internal_4ef0c4c85663c25f21433a8add7cd669626f5331bb6c027f37dece1f5769d2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_326280d41b75ecf7bd6923f302beaeab15e584167be30ac92d4843aae8450998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326280d41b75ecf7bd6923f302beaeab15e584167be30ac92d4843aae8450998->enter($__internal_326280d41b75ecf7bd6923f302beaeab15e584167be30ac92d4843aae8450998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ef0c4c85663c25f21433a8add7cd669626f5331bb6c027f37dece1f5769d2e9->leave($__internal_4ef0c4c85663c25f21433a8add7cd669626f5331bb6c027f37dece1f5769d2e9_prof);

        
        $__internal_326280d41b75ecf7bd6923f302beaeab15e584167be30ac92d4843aae8450998->leave($__internal_326280d41b75ecf7bd6923f302beaeab15e584167be30ac92d4843aae8450998_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d022bf02595cccce6f757b2feb85f0a2d2fcaa3a3ba5692bb0a96ea25e2eb625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d022bf02595cccce6f757b2feb85f0a2d2fcaa3a3ba5692bb0a96ea25e2eb625->enter($__internal_d022bf02595cccce6f757b2feb85f0a2d2fcaa3a3ba5692bb0a96ea25e2eb625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_56e8e9235b33edc36bcb572a059c57b66676582a72b437cb593a78d74ac54237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e8e9235b33edc36bcb572a059c57b66676582a72b437cb593a78d74ac54237->enter($__internal_56e8e9235b33edc36bcb572a059c57b66676582a72b437cb593a78d74ac54237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_56e8e9235b33edc36bcb572a059c57b66676582a72b437cb593a78d74ac54237->leave($__internal_56e8e9235b33edc36bcb572a059c57b66676582a72b437cb593a78d74ac54237_prof);

        
        $__internal_d022bf02595cccce6f757b2feb85f0a2d2fcaa3a3ba5692bb0a96ea25e2eb625->leave($__internal_d022bf02595cccce6f757b2feb85f0a2d2fcaa3a3ba5692bb0a96ea25e2eb625_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdb68dc8acef1306d7e835015c5f4564de830f631c51e6e1dadbf32f4c4f2fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb68dc8acef1306d7e835015c5f4564de830f631c51e6e1dadbf32f4c4f2fcd->enter($__internal_fdb68dc8acef1306d7e835015c5f4564de830f631c51e6e1dadbf32f4c4f2fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15d756e7756552055398febe78daeec3f26a07107548a17535ebe8921aea009f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d756e7756552055398febe78daeec3f26a07107548a17535ebe8921aea009f->enter($__internal_15d756e7756552055398febe78daeec3f26a07107548a17535ebe8921aea009f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_15d756e7756552055398febe78daeec3f26a07107548a17535ebe8921aea009f->leave($__internal_15d756e7756552055398febe78daeec3f26a07107548a17535ebe8921aea009f_prof);

        
        $__internal_fdb68dc8acef1306d7e835015c5f4564de830f631c51e6e1dadbf32f4c4f2fcd->leave($__internal_fdb68dc8acef1306d7e835015c5f4564de830f631c51e6e1dadbf32f4c4f2fcd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_75fcc64d0042bf6b6ff846efa9fdce3941f32a04f528dcd88bfa246101eb1adb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75fcc64d0042bf6b6ff846efa9fdce3941f32a04f528dcd88bfa246101eb1adb->enter($__internal_75fcc64d0042bf6b6ff846efa9fdce3941f32a04f528dcd88bfa246101eb1adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18b165a04621bc8454a4325a44b1ca63ac14f5050024ddf3ff4e43af72793d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b165a04621bc8454a4325a44b1ca63ac14f5050024ddf3ff4e43af72793d86->enter($__internal_18b165a04621bc8454a4325a44b1ca63ac14f5050024ddf3ff4e43af72793d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_18b165a04621bc8454a4325a44b1ca63ac14f5050024ddf3ff4e43af72793d86->leave($__internal_18b165a04621bc8454a4325a44b1ca63ac14f5050024ddf3ff4e43af72793d86_prof);

        
        $__internal_75fcc64d0042bf6b6ff846efa9fdce3941f32a04f528dcd88bfa246101eb1adb->leave($__internal_75fcc64d0042bf6b6ff846efa9fdce3941f32a04f528dcd88bfa246101eb1adb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
