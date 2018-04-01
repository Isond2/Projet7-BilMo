<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_68f972b5c598d4e5dbf96c2cecec0ad368dba8ef0d5044ba3d6f60591ab15d26 extends Twig_Template
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
        $__internal_68e1f26369c2228f9d88a8b2bfc64c98e31070652d3823c8abd892fe3294d221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e1f26369c2228f9d88a8b2bfc64c98e31070652d3823c8abd892fe3294d221->enter($__internal_68e1f26369c2228f9d88a8b2bfc64c98e31070652d3823c8abd892fe3294d221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7c02f75f5caa6c82ec988598b155c6bb3fc268b9050de2538d9579bd75764770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c02f75f5caa6c82ec988598b155c6bb3fc268b9050de2538d9579bd75764770->enter($__internal_7c02f75f5caa6c82ec988598b155c6bb3fc268b9050de2538d9579bd75764770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_68e1f26369c2228f9d88a8b2bfc64c98e31070652d3823c8abd892fe3294d221->leave($__internal_68e1f26369c2228f9d88a8b2bfc64c98e31070652d3823c8abd892fe3294d221_prof);

        
        $__internal_7c02f75f5caa6c82ec988598b155c6bb3fc268b9050de2538d9579bd75764770->leave($__internal_7c02f75f5caa6c82ec988598b155c6bb3fc268b9050de2538d9579bd75764770_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
