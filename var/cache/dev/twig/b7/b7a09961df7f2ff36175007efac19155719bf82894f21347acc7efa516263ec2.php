<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_470acdf096b1ef1a8a29efcc3633c473c40cb853fc0efbcc9635af1a4e596834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_5f1c830c6695ba07a480995a37cae0255378301203864d84fe55e9b09cda866d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1c830c6695ba07a480995a37cae0255378301203864d84fe55e9b09cda866d->enter($__internal_5f1c830c6695ba07a480995a37cae0255378301203864d84fe55e9b09cda866d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9ad55eb06d87503ac488145f127d6d96a3d0b3e93c48a9903b31acce3a976fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ad55eb06d87503ac488145f127d6d96a3d0b3e93c48a9903b31acce3a976fce->enter($__internal_9ad55eb06d87503ac488145f127d6d96a3d0b3e93c48a9903b31acce3a976fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f1c830c6695ba07a480995a37cae0255378301203864d84fe55e9b09cda866d->leave($__internal_5f1c830c6695ba07a480995a37cae0255378301203864d84fe55e9b09cda866d_prof);

        
        $__internal_9ad55eb06d87503ac488145f127d6d96a3d0b3e93c48a9903b31acce3a976fce->leave($__internal_9ad55eb06d87503ac488145f127d6d96a3d0b3e93c48a9903b31acce3a976fce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2584fa5e569eb06e1a29d9079db59f613980154d2ff0fcee318fef286e1374f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2584fa5e569eb06e1a29d9079db59f613980154d2ff0fcee318fef286e1374f7->enter($__internal_2584fa5e569eb06e1a29d9079db59f613980154d2ff0fcee318fef286e1374f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_22775b026bf9e8be2a5b92a980a7c8671dc423edee35c04cda78b8be7ac5d459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22775b026bf9e8be2a5b92a980a7c8671dc423edee35c04cda78b8be7ac5d459->enter($__internal_22775b026bf9e8be2a5b92a980a7c8671dc423edee35c04cda78b8be7ac5d459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22775b026bf9e8be2a5b92a980a7c8671dc423edee35c04cda78b8be7ac5d459->leave($__internal_22775b026bf9e8be2a5b92a980a7c8671dc423edee35c04cda78b8be7ac5d459_prof);

        
        $__internal_2584fa5e569eb06e1a29d9079db59f613980154d2ff0fcee318fef286e1374f7->leave($__internal_2584fa5e569eb06e1a29d9079db59f613980154d2ff0fcee318fef286e1374f7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca2043b37524405673d33d1e7c389a1d76ce80582d25670fedc9f5b964d63383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2043b37524405673d33d1e7c389a1d76ce80582d25670fedc9f5b964d63383->enter($__internal_ca2043b37524405673d33d1e7c389a1d76ce80582d25670fedc9f5b964d63383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d3efd2977a5232c63f32637a82b77731eb5b30ac4e807420b28269fdb02da742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3efd2977a5232c63f32637a82b77731eb5b30ac4e807420b28269fdb02da742->enter($__internal_d3efd2977a5232c63f32637a82b77731eb5b30ac4e807420b28269fdb02da742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d3efd2977a5232c63f32637a82b77731eb5b30ac4e807420b28269fdb02da742->leave($__internal_d3efd2977a5232c63f32637a82b77731eb5b30ac4e807420b28269fdb02da742_prof);

        
        $__internal_ca2043b37524405673d33d1e7c389a1d76ce80582d25670fedc9f5b964d63383->leave($__internal_ca2043b37524405673d33d1e7c389a1d76ce80582d25670fedc9f5b964d63383_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84a79d137a34890826e23f45d563cebce20f1adf00bf7a4676bab6ff63116025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a79d137a34890826e23f45d563cebce20f1adf00bf7a4676bab6ff63116025->enter($__internal_84a79d137a34890826e23f45d563cebce20f1adf00bf7a4676bab6ff63116025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5952074f12227a6480f1eb7871b1c04aa2d013df27910d5335991061033ffbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5952074f12227a6480f1eb7871b1c04aa2d013df27910d5335991061033ffbad->enter($__internal_5952074f12227a6480f1eb7871b1c04aa2d013df27910d5335991061033ffbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5952074f12227a6480f1eb7871b1c04aa2d013df27910d5335991061033ffbad->leave($__internal_5952074f12227a6480f1eb7871b1c04aa2d013df27910d5335991061033ffbad_prof);

        
        $__internal_84a79d137a34890826e23f45d563cebce20f1adf00bf7a4676bab6ff63116025->leave($__internal_84a79d137a34890826e23f45d563cebce20f1adf00bf7a4676bab6ff63116025_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
