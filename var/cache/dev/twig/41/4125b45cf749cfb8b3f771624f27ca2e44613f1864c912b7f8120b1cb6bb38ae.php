<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_91fd277a711c1102f3b7fd0022fccf9016e1862af877e1fba3b19c13201a416c extends Twig_Template
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
        $__internal_d3463575000b2639d6868517e538652c375aa0a7591ff28bd5e18d4c599f6e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3463575000b2639d6868517e538652c375aa0a7591ff28bd5e18d4c599f6e62->enter($__internal_d3463575000b2639d6868517e538652c375aa0a7591ff28bd5e18d4c599f6e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_8d96f520a987a636365d11cafb29364a2afbd8df161460c26bda6d3d501e0db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d96f520a987a636365d11cafb29364a2afbd8df161460c26bda6d3d501e0db7->enter($__internal_8d96f520a987a636365d11cafb29364a2afbd8df161460c26bda6d3d501e0db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d3463575000b2639d6868517e538652c375aa0a7591ff28bd5e18d4c599f6e62->leave($__internal_d3463575000b2639d6868517e538652c375aa0a7591ff28bd5e18d4c599f6e62_prof);

        
        $__internal_8d96f520a987a636365d11cafb29364a2afbd8df161460c26bda6d3d501e0db7->leave($__internal_8d96f520a987a636365d11cafb29364a2afbd8df161460c26bda6d3d501e0db7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
