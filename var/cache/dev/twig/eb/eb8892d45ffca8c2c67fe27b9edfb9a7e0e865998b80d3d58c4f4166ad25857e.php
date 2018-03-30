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
        $__internal_89b352612d3e6c8c89bb3a1715702a5473621ec1f975262f77f09fcd85395502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b352612d3e6c8c89bb3a1715702a5473621ec1f975262f77f09fcd85395502->enter($__internal_89b352612d3e6c8c89bb3a1715702a5473621ec1f975262f77f09fcd85395502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b41523d6cb6e856eb7b66718d01ac58f89bef23680c1385d309882c1d85b904f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b41523d6cb6e856eb7b66718d01ac58f89bef23680c1385d309882c1d85b904f->enter($__internal_b41523d6cb6e856eb7b66718d01ac58f89bef23680c1385d309882c1d85b904f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89b352612d3e6c8c89bb3a1715702a5473621ec1f975262f77f09fcd85395502->leave($__internal_89b352612d3e6c8c89bb3a1715702a5473621ec1f975262f77f09fcd85395502_prof);

        
        $__internal_b41523d6cb6e856eb7b66718d01ac58f89bef23680c1385d309882c1d85b904f->leave($__internal_b41523d6cb6e856eb7b66718d01ac58f89bef23680c1385d309882c1d85b904f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f498bb20e9589f1382ab14aaa43d6361f007087f880bddead3be6369ac84e291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f498bb20e9589f1382ab14aaa43d6361f007087f880bddead3be6369ac84e291->enter($__internal_f498bb20e9589f1382ab14aaa43d6361f007087f880bddead3be6369ac84e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_627994890ac9e1eef26e8a2dc6706abd576d008b21b3afcfe784f43873574c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627994890ac9e1eef26e8a2dc6706abd576d008b21b3afcfe784f43873574c42->enter($__internal_627994890ac9e1eef26e8a2dc6706abd576d008b21b3afcfe784f43873574c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_627994890ac9e1eef26e8a2dc6706abd576d008b21b3afcfe784f43873574c42->leave($__internal_627994890ac9e1eef26e8a2dc6706abd576d008b21b3afcfe784f43873574c42_prof);

        
        $__internal_f498bb20e9589f1382ab14aaa43d6361f007087f880bddead3be6369ac84e291->leave($__internal_f498bb20e9589f1382ab14aaa43d6361f007087f880bddead3be6369ac84e291_prof);

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
