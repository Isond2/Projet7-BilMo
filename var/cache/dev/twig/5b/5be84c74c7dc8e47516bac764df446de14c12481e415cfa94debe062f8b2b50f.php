<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0feb792923da02028817019606273113ce18932a7bdde85d429e6e09e14b1ae3 extends Twig_Template
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
        $__internal_fe2f20111d2f4418625626daea90b5ebcdc2512cc8ba1a3168bf941567350dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2f20111d2f4418625626daea90b5ebcdc2512cc8ba1a3168bf941567350dc0->enter($__internal_fe2f20111d2f4418625626daea90b5ebcdc2512cc8ba1a3168bf941567350dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_1feeb2321c0db8efecfd9d3736d53508dbca19b5e80272c7027e1d904603ea05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1feeb2321c0db8efecfd9d3736d53508dbca19b5e80272c7027e1d904603ea05->enter($__internal_1feeb2321c0db8efecfd9d3736d53508dbca19b5e80272c7027e1d904603ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fe2f20111d2f4418625626daea90b5ebcdc2512cc8ba1a3168bf941567350dc0->leave($__internal_fe2f20111d2f4418625626daea90b5ebcdc2512cc8ba1a3168bf941567350dc0_prof);

        
        $__internal_1feeb2321c0db8efecfd9d3736d53508dbca19b5e80272c7027e1d904603ea05->leave($__internal_1feeb2321c0db8efecfd9d3736d53508dbca19b5e80272c7027e1d904603ea05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
