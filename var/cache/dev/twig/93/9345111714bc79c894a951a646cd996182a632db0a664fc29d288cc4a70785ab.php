<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_519619dea29a99693f84af798af3a6a9f3aab9c52d3c95edb8608c55e4ff7d3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04e430f50a429cbba0c35dca1c913a0d0b88319d68cfa2deece11965f6eb2e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e430f50a429cbba0c35dca1c913a0d0b88319d68cfa2deece11965f6eb2e81->enter($__internal_04e430f50a429cbba0c35dca1c913a0d0b88319d68cfa2deece11965f6eb2e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b2dd24ee12a933e3324cefbdd72bf1276d7b1a649893ccceb92d00732f2dc7bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dd24ee12a933e3324cefbdd72bf1276d7b1a649893ccceb92d00732f2dc7bb->enter($__internal_b2dd24ee12a933e3324cefbdd72bf1276d7b1a649893ccceb92d00732f2dc7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_04e430f50a429cbba0c35dca1c913a0d0b88319d68cfa2deece11965f6eb2e81->leave($__internal_04e430f50a429cbba0c35dca1c913a0d0b88319d68cfa2deece11965f6eb2e81_prof);

        
        $__internal_b2dd24ee12a933e3324cefbdd72bf1276d7b1a649893ccceb92d00732f2dc7bb->leave($__internal_b2dd24ee12a933e3324cefbdd72bf1276d7b1a649893ccceb92d00732f2dc7bb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_80bc318a909c18b406b505c4e5609c9386bba4f82caa5b941f660c8d1aa60403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bc318a909c18b406b505c4e5609c9386bba4f82caa5b941f660c8d1aa60403->enter($__internal_80bc318a909c18b406b505c4e5609c9386bba4f82caa5b941f660c8d1aa60403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e96d5b420dca15895fe7e384965556b191c28325d914d0924f942ba068ab050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e96d5b420dca15895fe7e384965556b191c28325d914d0924f942ba068ab050->enter($__internal_0e96d5b420dca15895fe7e384965556b191c28325d914d0924f942ba068ab050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0e96d5b420dca15895fe7e384965556b191c28325d914d0924f942ba068ab050->leave($__internal_0e96d5b420dca15895fe7e384965556b191c28325d914d0924f942ba068ab050_prof);

        
        $__internal_80bc318a909c18b406b505c4e5609c9386bba4f82caa5b941f660c8d1aa60403->leave($__internal_80bc318a909c18b406b505c4e5609c9386bba4f82caa5b941f660c8d1aa60403_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
