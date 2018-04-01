<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_92ab0d8b01ff17ca4788093644f610b690cf7b3724151fe2a62317dd3fc6bd18 extends Twig_Template
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
        $__internal_0ca7fa1ef5a170253a8813f69c04877dcff1439d273b022d4f92bfb875b7b3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca7fa1ef5a170253a8813f69c04877dcff1439d273b022d4f92bfb875b7b3cb->enter($__internal_0ca7fa1ef5a170253a8813f69c04877dcff1439d273b022d4f92bfb875b7b3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fafa568816615516f71dee82b1495820104f7781a158d6b704533caba26bd6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafa568816615516f71dee82b1495820104f7781a158d6b704533caba26bd6c2->enter($__internal_fafa568816615516f71dee82b1495820104f7781a158d6b704533caba26bd6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0ca7fa1ef5a170253a8813f69c04877dcff1439d273b022d4f92bfb875b7b3cb->leave($__internal_0ca7fa1ef5a170253a8813f69c04877dcff1439d273b022d4f92bfb875b7b3cb_prof);

        
        $__internal_fafa568816615516f71dee82b1495820104f7781a158d6b704533caba26bd6c2->leave($__internal_fafa568816615516f71dee82b1495820104f7781a158d6b704533caba26bd6c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
