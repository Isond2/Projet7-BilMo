<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_ca776f4efa644e745693eb337d055a83026c4d98a7b4fcb17cdf5f6d8e2b80af extends Twig_Template
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
        $__internal_d3490c4f2e5283296b524bcfe9b3241a6b464e74e365ebb11401c45b8e60155c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3490c4f2e5283296b524bcfe9b3241a6b464e74e365ebb11401c45b8e60155c->enter($__internal_d3490c4f2e5283296b524bcfe9b3241a6b464e74e365ebb11401c45b8e60155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_445605b075b411af305f93769842bf9c0dd624220022e9daf0a227f3e01f8fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445605b075b411af305f93769842bf9c0dd624220022e9daf0a227f3e01f8fa6->enter($__internal_445605b075b411af305f93769842bf9c0dd624220022e9daf0a227f3e01f8fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d3490c4f2e5283296b524bcfe9b3241a6b464e74e365ebb11401c45b8e60155c->leave($__internal_d3490c4f2e5283296b524bcfe9b3241a6b464e74e365ebb11401c45b8e60155c_prof);

        
        $__internal_445605b075b411af305f93769842bf9c0dd624220022e9daf0a227f3e01f8fa6->leave($__internal_445605b075b411af305f93769842bf9c0dd624220022e9daf0a227f3e01f8fa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
