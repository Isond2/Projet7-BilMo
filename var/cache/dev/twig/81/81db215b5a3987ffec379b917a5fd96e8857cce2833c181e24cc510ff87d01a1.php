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
        $__internal_efdffca8a77564c3d566cfdf479d5d0e12388b7a1fb16a92c25d8b978263bc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdffca8a77564c3d566cfdf479d5d0e12388b7a1fb16a92c25d8b978263bc85->enter($__internal_efdffca8a77564c3d566cfdf479d5d0e12388b7a1fb16a92c25d8b978263bc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_45df843a2b4d911629cd87fdf7cc4004c056206086d526f94752d3f9d1dfc9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45df843a2b4d911629cd87fdf7cc4004c056206086d526f94752d3f9d1dfc9ac->enter($__internal_45df843a2b4d911629cd87fdf7cc4004c056206086d526f94752d3f9d1dfc9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efdffca8a77564c3d566cfdf479d5d0e12388b7a1fb16a92c25d8b978263bc85->leave($__internal_efdffca8a77564c3d566cfdf479d5d0e12388b7a1fb16a92c25d8b978263bc85_prof);

        
        $__internal_45df843a2b4d911629cd87fdf7cc4004c056206086d526f94752d3f9d1dfc9ac->leave($__internal_45df843a2b4d911629cd87fdf7cc4004c056206086d526f94752d3f9d1dfc9ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f12f42da30acbe9ece063eb0eeb6705a7b84b279423c6dfbfd1dfec5858365a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12f42da30acbe9ece063eb0eeb6705a7b84b279423c6dfbfd1dfec5858365a4->enter($__internal_f12f42da30acbe9ece063eb0eeb6705a7b84b279423c6dfbfd1dfec5858365a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b0f4d02e7d4ccd789a49a138d08d992b5bd05232dfa18130d4fca861144c6b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f4d02e7d4ccd789a49a138d08d992b5bd05232dfa18130d4fca861144c6b59->enter($__internal_b0f4d02e7d4ccd789a49a138d08d992b5bd05232dfa18130d4fca861144c6b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b0f4d02e7d4ccd789a49a138d08d992b5bd05232dfa18130d4fca861144c6b59->leave($__internal_b0f4d02e7d4ccd789a49a138d08d992b5bd05232dfa18130d4fca861144c6b59_prof);

        
        $__internal_f12f42da30acbe9ece063eb0eeb6705a7b84b279423c6dfbfd1dfec5858365a4->leave($__internal_f12f42da30acbe9ece063eb0eeb6705a7b84b279423c6dfbfd1dfec5858365a4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7460dc96ea024f0536e25e7311349ae20c6289b19f5954df9ef83d05b1858736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7460dc96ea024f0536e25e7311349ae20c6289b19f5954df9ef83d05b1858736->enter($__internal_7460dc96ea024f0536e25e7311349ae20c6289b19f5954df9ef83d05b1858736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_18b61402a44212555b17672e8d95ead4f7153dbad6bc9b7bee44234ac2355a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b61402a44212555b17672e8d95ead4f7153dbad6bc9b7bee44234ac2355a17->enter($__internal_18b61402a44212555b17672e8d95ead4f7153dbad6bc9b7bee44234ac2355a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_18b61402a44212555b17672e8d95ead4f7153dbad6bc9b7bee44234ac2355a17->leave($__internal_18b61402a44212555b17672e8d95ead4f7153dbad6bc9b7bee44234ac2355a17_prof);

        
        $__internal_7460dc96ea024f0536e25e7311349ae20c6289b19f5954df9ef83d05b1858736->leave($__internal_7460dc96ea024f0536e25e7311349ae20c6289b19f5954df9ef83d05b1858736_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5580d8761da7c512ab4143e425064a4fa1dc7a31bb29f561af709509347b7c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5580d8761da7c512ab4143e425064a4fa1dc7a31bb29f561af709509347b7c04->enter($__internal_5580d8761da7c512ab4143e425064a4fa1dc7a31bb29f561af709509347b7c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6497ea321376f05d786c3d7dd18eb91e78c0eec640c50fce2b5503d34fcfa6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6497ea321376f05d786c3d7dd18eb91e78c0eec640c50fce2b5503d34fcfa6b8->enter($__internal_6497ea321376f05d786c3d7dd18eb91e78c0eec640c50fce2b5503d34fcfa6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6497ea321376f05d786c3d7dd18eb91e78c0eec640c50fce2b5503d34fcfa6b8->leave($__internal_6497ea321376f05d786c3d7dd18eb91e78c0eec640c50fce2b5503d34fcfa6b8_prof);

        
        $__internal_5580d8761da7c512ab4143e425064a4fa1dc7a31bb29f561af709509347b7c04->leave($__internal_5580d8761da7c512ab4143e425064a4fa1dc7a31bb29f561af709509347b7c04_prof);

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
