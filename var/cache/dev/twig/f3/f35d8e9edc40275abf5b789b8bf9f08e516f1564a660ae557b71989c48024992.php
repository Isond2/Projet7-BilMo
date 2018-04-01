<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_9259bdf26e1597fa1fa76e79cc0185855dcb8d5a4d8064080aeaa4052d204fb3 extends Twig_Template
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
        $__internal_a61e1576cfbde0e3e1036acbf8306bfaaddfbdb54783edf944b5b36ee76d8020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61e1576cfbde0e3e1036acbf8306bfaaddfbdb54783edf944b5b36ee76d8020->enter($__internal_a61e1576cfbde0e3e1036acbf8306bfaaddfbdb54783edf944b5b36ee76d8020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f8461f81eec4027225a73451fad001502aba4e389a50c43314ce4aebf98351c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8461f81eec4027225a73451fad001502aba4e389a50c43314ce4aebf98351c7->enter($__internal_f8461f81eec4027225a73451fad001502aba4e389a50c43314ce4aebf98351c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a61e1576cfbde0e3e1036acbf8306bfaaddfbdb54783edf944b5b36ee76d8020->leave($__internal_a61e1576cfbde0e3e1036acbf8306bfaaddfbdb54783edf944b5b36ee76d8020_prof);

        
        $__internal_f8461f81eec4027225a73451fad001502aba4e389a50c43314ce4aebf98351c7->leave($__internal_f8461f81eec4027225a73451fad001502aba4e389a50c43314ce4aebf98351c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
