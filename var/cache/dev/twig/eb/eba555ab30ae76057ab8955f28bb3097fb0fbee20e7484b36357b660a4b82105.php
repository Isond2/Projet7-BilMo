<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a6317a7d2b6336345a72f4d6c8baabf5e064924906f3d227fcc75faf098180d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_d7a4e6157a9483a9d7f395e7681e835a3059fb2077ffcd440651e575a85b979f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a4e6157a9483a9d7f395e7681e835a3059fb2077ffcd440651e575a85b979f->enter($__internal_d7a4e6157a9483a9d7f395e7681e835a3059fb2077ffcd440651e575a85b979f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_dec44c776f5110db2c292e47147efe6a399efab96b6ed097f2b7191ffb05eb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec44c776f5110db2c292e47147efe6a399efab96b6ed097f2b7191ffb05eb0d->enter($__internal_dec44c776f5110db2c292e47147efe6a399efab96b6ed097f2b7191ffb05eb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a4e6157a9483a9d7f395e7681e835a3059fb2077ffcd440651e575a85b979f->leave($__internal_d7a4e6157a9483a9d7f395e7681e835a3059fb2077ffcd440651e575a85b979f_prof);

        
        $__internal_dec44c776f5110db2c292e47147efe6a399efab96b6ed097f2b7191ffb05eb0d->leave($__internal_dec44c776f5110db2c292e47147efe6a399efab96b6ed097f2b7191ffb05eb0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2e3bfa3abe197ebda13eee8b86051c6144ec33de95b30b1dc19288c72af564f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e3bfa3abe197ebda13eee8b86051c6144ec33de95b30b1dc19288c72af564f->enter($__internal_a2e3bfa3abe197ebda13eee8b86051c6144ec33de95b30b1dc19288c72af564f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5ff0ded39ff201eaea42efc18bf63c9f1b3709a33f544a2a0d38def216e6de88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ff0ded39ff201eaea42efc18bf63c9f1b3709a33f544a2a0d38def216e6de88->enter($__internal_5ff0ded39ff201eaea42efc18bf63c9f1b3709a33f544a2a0d38def216e6de88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5ff0ded39ff201eaea42efc18bf63c9f1b3709a33f544a2a0d38def216e6de88->leave($__internal_5ff0ded39ff201eaea42efc18bf63c9f1b3709a33f544a2a0d38def216e6de88_prof);

        
        $__internal_a2e3bfa3abe197ebda13eee8b86051c6144ec33de95b30b1dc19288c72af564f->leave($__internal_a2e3bfa3abe197ebda13eee8b86051c6144ec33de95b30b1dc19288c72af564f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8014d1996bc100f0e5b4ee84cd78ee358fd31bc2972b53c456c8700320bec371 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8014d1996bc100f0e5b4ee84cd78ee358fd31bc2972b53c456c8700320bec371->enter($__internal_8014d1996bc100f0e5b4ee84cd78ee358fd31bc2972b53c456c8700320bec371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_69009283d253f991ffc8137e4bd102f8d5e15c412ec7441e705fd8ffae4ac83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69009283d253f991ffc8137e4bd102f8d5e15c412ec7441e705fd8ffae4ac83b->enter($__internal_69009283d253f991ffc8137e4bd102f8d5e15c412ec7441e705fd8ffae4ac83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_69009283d253f991ffc8137e4bd102f8d5e15c412ec7441e705fd8ffae4ac83b->leave($__internal_69009283d253f991ffc8137e4bd102f8d5e15c412ec7441e705fd8ffae4ac83b_prof);

        
        $__internal_8014d1996bc100f0e5b4ee84cd78ee358fd31bc2972b53c456c8700320bec371->leave($__internal_8014d1996bc100f0e5b4ee84cd78ee358fd31bc2972b53c456c8700320bec371_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9335e82bf9201b3e8e137f0253752278316831bbc76293fa1407e2eb49ec8a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9335e82bf9201b3e8e137f0253752278316831bbc76293fa1407e2eb49ec8a8->enter($__internal_c9335e82bf9201b3e8e137f0253752278316831bbc76293fa1407e2eb49ec8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_519c026d43a672d5e3f1b74800802b787693b5aa6a1c14c8cee0b6ac742e5660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519c026d43a672d5e3f1b74800802b787693b5aa6a1c14c8cee0b6ac742e5660->enter($__internal_519c026d43a672d5e3f1b74800802b787693b5aa6a1c14c8cee0b6ac742e5660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_519c026d43a672d5e3f1b74800802b787693b5aa6a1c14c8cee0b6ac742e5660->leave($__internal_519c026d43a672d5e3f1b74800802b787693b5aa6a1c14c8cee0b6ac742e5660_prof);

        
        $__internal_c9335e82bf9201b3e8e137f0253752278316831bbc76293fa1407e2eb49ec8a8->leave($__internal_c9335e82bf9201b3e8e137f0253752278316831bbc76293fa1407e2eb49ec8a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
