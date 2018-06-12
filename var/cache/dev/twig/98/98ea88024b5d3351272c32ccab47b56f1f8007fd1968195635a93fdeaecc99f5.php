<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_ccf0ac3a1b815b6e4d55ce26788d1bdebe295d3f4353d5c11fad5f35f8753bdb extends Twig_Template
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
        $__internal_439aa00970015ba75d2cfd5b98758f6d963c34b9abb3886899d10daecf98d0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439aa00970015ba75d2cfd5b98758f6d963c34b9abb3886899d10daecf98d0fc->enter($__internal_439aa00970015ba75d2cfd5b98758f6d963c34b9abb3886899d10daecf98d0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_2e498448db3fa747a9e34ea1f194790f713636b7c50b04c829e334c1f9f94a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e498448db3fa747a9e34ea1f194790f713636b7c50b04c829e334c1f9f94a71->enter($__internal_2e498448db3fa747a9e34ea1f194790f713636b7c50b04c829e334c1f9f94a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_439aa00970015ba75d2cfd5b98758f6d963c34b9abb3886899d10daecf98d0fc->leave($__internal_439aa00970015ba75d2cfd5b98758f6d963c34b9abb3886899d10daecf98d0fc_prof);

        
        $__internal_2e498448db3fa747a9e34ea1f194790f713636b7c50b04c829e334c1f9f94a71->leave($__internal_2e498448db3fa747a9e34ea1f194790f713636b7c50b04c829e334c1f9f94a71_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
