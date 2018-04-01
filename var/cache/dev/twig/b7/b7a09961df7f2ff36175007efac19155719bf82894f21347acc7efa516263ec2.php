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
        $__internal_08e8933c2bac7ca48a7831f2ecffc6f46e6ee1e8e313d323f76bfbd7bb14c934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e8933c2bac7ca48a7831f2ecffc6f46e6ee1e8e313d323f76bfbd7bb14c934->enter($__internal_08e8933c2bac7ca48a7831f2ecffc6f46e6ee1e8e313d323f76bfbd7bb14c934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_19be2644460f48386b4ef2398848973b19028f258845cdc7080332f33b8a5710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19be2644460f48386b4ef2398848973b19028f258845cdc7080332f33b8a5710->enter($__internal_19be2644460f48386b4ef2398848973b19028f258845cdc7080332f33b8a5710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e8933c2bac7ca48a7831f2ecffc6f46e6ee1e8e313d323f76bfbd7bb14c934->leave($__internal_08e8933c2bac7ca48a7831f2ecffc6f46e6ee1e8e313d323f76bfbd7bb14c934_prof);

        
        $__internal_19be2644460f48386b4ef2398848973b19028f258845cdc7080332f33b8a5710->leave($__internal_19be2644460f48386b4ef2398848973b19028f258845cdc7080332f33b8a5710_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6f5af110d271af6f2b140d0c6d5b253d630ae44806838741f541a7f2a0cfe9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5af110d271af6f2b140d0c6d5b253d630ae44806838741f541a7f2a0cfe9a3->enter($__internal_6f5af110d271af6f2b140d0c6d5b253d630ae44806838741f541a7f2a0cfe9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2dd2d75def54559692ef2c23e0e40ee81adad4a842a465e013fb5ac90c846252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd2d75def54559692ef2c23e0e40ee81adad4a842a465e013fb5ac90c846252->enter($__internal_2dd2d75def54559692ef2c23e0e40ee81adad4a842a465e013fb5ac90c846252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2dd2d75def54559692ef2c23e0e40ee81adad4a842a465e013fb5ac90c846252->leave($__internal_2dd2d75def54559692ef2c23e0e40ee81adad4a842a465e013fb5ac90c846252_prof);

        
        $__internal_6f5af110d271af6f2b140d0c6d5b253d630ae44806838741f541a7f2a0cfe9a3->leave($__internal_6f5af110d271af6f2b140d0c6d5b253d630ae44806838741f541a7f2a0cfe9a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ef5847db20b8590056bca77c9321da3b1f75ef4994604e7e021fc2226411cd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5847db20b8590056bca77c9321da3b1f75ef4994604e7e021fc2226411cd2e->enter($__internal_ef5847db20b8590056bca77c9321da3b1f75ef4994604e7e021fc2226411cd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_418ae5245c8cc671848ab284f92d3ef4e151c54083b1ae6d1e026357d2f53083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418ae5245c8cc671848ab284f92d3ef4e151c54083b1ae6d1e026357d2f53083->enter($__internal_418ae5245c8cc671848ab284f92d3ef4e151c54083b1ae6d1e026357d2f53083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_418ae5245c8cc671848ab284f92d3ef4e151c54083b1ae6d1e026357d2f53083->leave($__internal_418ae5245c8cc671848ab284f92d3ef4e151c54083b1ae6d1e026357d2f53083_prof);

        
        $__internal_ef5847db20b8590056bca77c9321da3b1f75ef4994604e7e021fc2226411cd2e->leave($__internal_ef5847db20b8590056bca77c9321da3b1f75ef4994604e7e021fc2226411cd2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_29fad6094db5bc617dc835cacc0896e0798662abfd692d74e50a7ac0c53bfd03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29fad6094db5bc617dc835cacc0896e0798662abfd692d74e50a7ac0c53bfd03->enter($__internal_29fad6094db5bc617dc835cacc0896e0798662abfd692d74e50a7ac0c53bfd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4163916f4601c335b80080edcef0ee195d7e7a022ab7982f9f290760af643ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4163916f4601c335b80080edcef0ee195d7e7a022ab7982f9f290760af643ac0->enter($__internal_4163916f4601c335b80080edcef0ee195d7e7a022ab7982f9f290760af643ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4163916f4601c335b80080edcef0ee195d7e7a022ab7982f9f290760af643ac0->leave($__internal_4163916f4601c335b80080edcef0ee195d7e7a022ab7982f9f290760af643ac0_prof);

        
        $__internal_29fad6094db5bc617dc835cacc0896e0798662abfd692d74e50a7ac0c53bfd03->leave($__internal_29fad6094db5bc617dc835cacc0896e0798662abfd692d74e50a7ac0c53bfd03_prof);

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
