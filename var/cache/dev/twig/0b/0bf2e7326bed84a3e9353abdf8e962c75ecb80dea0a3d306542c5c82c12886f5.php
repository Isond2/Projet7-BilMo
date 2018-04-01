<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_426d4428cac2414b3f6ddcff36367e839f73e28aa8949f965d2ca46e3f177248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_75975c02c1e0ccf27d08a2a9edf631763cf0ae4f62cf2c477443cd00ebe5113a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75975c02c1e0ccf27d08a2a9edf631763cf0ae4f62cf2c477443cd00ebe5113a->enter($__internal_75975c02c1e0ccf27d08a2a9edf631763cf0ae4f62cf2c477443cd00ebe5113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b779a28ad49f4a8c97fe2f25d3a5330cccf36c53f506866515c660bdeaefa64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b779a28ad49f4a8c97fe2f25d3a5330cccf36c53f506866515c660bdeaefa64b->enter($__internal_b779a28ad49f4a8c97fe2f25d3a5330cccf36c53f506866515c660bdeaefa64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75975c02c1e0ccf27d08a2a9edf631763cf0ae4f62cf2c477443cd00ebe5113a->leave($__internal_75975c02c1e0ccf27d08a2a9edf631763cf0ae4f62cf2c477443cd00ebe5113a_prof);

        
        $__internal_b779a28ad49f4a8c97fe2f25d3a5330cccf36c53f506866515c660bdeaefa64b->leave($__internal_b779a28ad49f4a8c97fe2f25d3a5330cccf36c53f506866515c660bdeaefa64b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a1e478d993cdb85a59cc9e397d9a65e4b4d1b6e7faf95256868e0d0c92d18253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e478d993cdb85a59cc9e397d9a65e4b4d1b6e7faf95256868e0d0c92d18253->enter($__internal_a1e478d993cdb85a59cc9e397d9a65e4b4d1b6e7faf95256868e0d0c92d18253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_122f9d8429ca7d831fbcaddaab1d9ebb51da3c9de77f1de9fa7853da286c3971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122f9d8429ca7d831fbcaddaab1d9ebb51da3c9de77f1de9fa7853da286c3971->enter($__internal_122f9d8429ca7d831fbcaddaab1d9ebb51da3c9de77f1de9fa7853da286c3971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_122f9d8429ca7d831fbcaddaab1d9ebb51da3c9de77f1de9fa7853da286c3971->leave($__internal_122f9d8429ca7d831fbcaddaab1d9ebb51da3c9de77f1de9fa7853da286c3971_prof);

        
        $__internal_a1e478d993cdb85a59cc9e397d9a65e4b4d1b6e7faf95256868e0d0c92d18253->leave($__internal_a1e478d993cdb85a59cc9e397d9a65e4b4d1b6e7faf95256868e0d0c92d18253_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4a8d9957b339228d5686e369b57ea6cec912de3b850678a090f4449390efe4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a8d9957b339228d5686e369b57ea6cec912de3b850678a090f4449390efe4c->enter($__internal_c4a8d9957b339228d5686e369b57ea6cec912de3b850678a090f4449390efe4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3fca9b1689ee38fb8632f30b4c66668a1c76bd35142c56507cb99bcfafebd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fca9b1689ee38fb8632f30b4c66668a1c76bd35142c56507cb99bcfafebd9a->enter($__internal_c3fca9b1689ee38fb8632f30b4c66668a1c76bd35142c56507cb99bcfafebd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c3fca9b1689ee38fb8632f30b4c66668a1c76bd35142c56507cb99bcfafebd9a->leave($__internal_c3fca9b1689ee38fb8632f30b4c66668a1c76bd35142c56507cb99bcfafebd9a_prof);

        
        $__internal_c4a8d9957b339228d5686e369b57ea6cec912de3b850678a090f4449390efe4c->leave($__internal_c4a8d9957b339228d5686e369b57ea6cec912de3b850678a090f4449390efe4c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd360576d1ede67422b756e08429b86180b84ca82fdadabad13b5c2a5f7dbf89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd360576d1ede67422b756e08429b86180b84ca82fdadabad13b5c2a5f7dbf89->enter($__internal_fd360576d1ede67422b756e08429b86180b84ca82fdadabad13b5c2a5f7dbf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e684be4b55ecd60feb14e608ef1cf552d402ad5f93b77828b2bd0c2dc0ea0f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e684be4b55ecd60feb14e608ef1cf552d402ad5f93b77828b2bd0c2dc0ea0f0a->enter($__internal_e684be4b55ecd60feb14e608ef1cf552d402ad5f93b77828b2bd0c2dc0ea0f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e684be4b55ecd60feb14e608ef1cf552d402ad5f93b77828b2bd0c2dc0ea0f0a->leave($__internal_e684be4b55ecd60feb14e608ef1cf552d402ad5f93b77828b2bd0c2dc0ea0f0a_prof);

        
        $__internal_fd360576d1ede67422b756e08429b86180b84ca82fdadabad13b5c2a5f7dbf89->leave($__internal_fd360576d1ede67422b756e08429b86180b84ca82fdadabad13b5c2a5f7dbf89_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
