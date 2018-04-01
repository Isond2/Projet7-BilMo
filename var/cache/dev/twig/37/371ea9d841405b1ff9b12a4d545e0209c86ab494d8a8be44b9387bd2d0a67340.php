<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9562f58057d632606656f16b2a026d901ca0ff949a44c9a663f24bf2ee5fb38a extends Twig_Template
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
        $__internal_516b77731362be4068d3c707ab919023f918bcd47ecf4c47ddca1593b2d39046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516b77731362be4068d3c707ab919023f918bcd47ecf4c47ddca1593b2d39046->enter($__internal_516b77731362be4068d3c707ab919023f918bcd47ecf4c47ddca1593b2d39046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_42dd8a5fc762162bd456d3ed8810fc56df23a101a0387494f54aaf233b8150f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42dd8a5fc762162bd456d3ed8810fc56df23a101a0387494f54aaf233b8150f2->enter($__internal_42dd8a5fc762162bd456d3ed8810fc56df23a101a0387494f54aaf233b8150f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_516b77731362be4068d3c707ab919023f918bcd47ecf4c47ddca1593b2d39046->leave($__internal_516b77731362be4068d3c707ab919023f918bcd47ecf4c47ddca1593b2d39046_prof);

        
        $__internal_42dd8a5fc762162bd456d3ed8810fc56df23a101a0387494f54aaf233b8150f2->leave($__internal_42dd8a5fc762162bd456d3ed8810fc56df23a101a0387494f54aaf233b8150f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
