<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_fd45920a14f505f2047eca5e17a52579d02aad7d969c59e87f2b09e4ab9b3712 extends Twig_Template
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
        $__internal_3b8868e445c81a4d541d8a2e338bf22c441a9f704a2db56c7bec453db53b7172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8868e445c81a4d541d8a2e338bf22c441a9f704a2db56c7bec453db53b7172->enter($__internal_3b8868e445c81a4d541d8a2e338bf22c441a9f704a2db56c7bec453db53b7172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_18457b3955cb2897164818b63ed9f1614972a646bc26ad9e5bb595915ab68b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18457b3955cb2897164818b63ed9f1614972a646bc26ad9e5bb595915ab68b12->enter($__internal_18457b3955cb2897164818b63ed9f1614972a646bc26ad9e5bb595915ab68b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3b8868e445c81a4d541d8a2e338bf22c441a9f704a2db56c7bec453db53b7172->leave($__internal_3b8868e445c81a4d541d8a2e338bf22c441a9f704a2db56c7bec453db53b7172_prof);

        
        $__internal_18457b3955cb2897164818b63ed9f1614972a646bc26ad9e5bb595915ab68b12->leave($__internal_18457b3955cb2897164818b63ed9f1614972a646bc26ad9e5bb595915ab68b12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
