<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_bfe6c00f1ffca60bd737dafb23c3200718ab9d3e7244a61049ef6742e4b4fef2 extends Twig_Template
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
        $__internal_2f55fa2246661ea2263566ebf88a0010aa12901835ef930a57561f77f8a36c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f55fa2246661ea2263566ebf88a0010aa12901835ef930a57561f77f8a36c15->enter($__internal_2f55fa2246661ea2263566ebf88a0010aa12901835ef930a57561f77f8a36c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_82ebd7449e998b860a2ba0de2a1cee070414e11c15a9370a3f0f95e09465d19c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ebd7449e998b860a2ba0de2a1cee070414e11c15a9370a3f0f95e09465d19c->enter($__internal_82ebd7449e998b860a2ba0de2a1cee070414e11c15a9370a3f0f95e09465d19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_2f55fa2246661ea2263566ebf88a0010aa12901835ef930a57561f77f8a36c15->leave($__internal_2f55fa2246661ea2263566ebf88a0010aa12901835ef930a57561f77f8a36c15_prof);

        
        $__internal_82ebd7449e998b860a2ba0de2a1cee070414e11c15a9370a3f0f95e09465d19c->leave($__internal_82ebd7449e998b860a2ba0de2a1cee070414e11c15a9370a3f0f95e09465d19c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
