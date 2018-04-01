<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_969584837af4cd378221e7d83a3ffecb26acdbad853b8998e592e0fdaad4fda4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb3f18cfe02fb07603ed6896859af243861492413bbb7aa4eca26bcdb80ff800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3f18cfe02fb07603ed6896859af243861492413bbb7aa4eca26bcdb80ff800->enter($__internal_eb3f18cfe02fb07603ed6896859af243861492413bbb7aa4eca26bcdb80ff800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_21fcc3d3d4094df22929afc4c85100386819c4dfbba257d761d814b872df2c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fcc3d3d4094df22929afc4c85100386819c4dfbba257d761d814b872df2c4b->enter($__internal_21fcc3d3d4094df22929afc4c85100386819c4dfbba257d761d814b872df2c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_eb3f18cfe02fb07603ed6896859af243861492413bbb7aa4eca26bcdb80ff800->leave($__internal_eb3f18cfe02fb07603ed6896859af243861492413bbb7aa4eca26bcdb80ff800_prof);

        
        $__internal_21fcc3d3d4094df22929afc4c85100386819c4dfbba257d761d814b872df2c4b->leave($__internal_21fcc3d3d4094df22929afc4c85100386819c4dfbba257d761d814b872df2c4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
