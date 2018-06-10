<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_311c736b6dc5a760a2bdee84ab9210fea1017e6aafe80f6871471bb0f4675ff8 extends Twig_Template
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
        $__internal_d6baf3dabb1c549c0cbfab492943750e62a8160f5b224ee5e85b286f393175a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6baf3dabb1c549c0cbfab492943750e62a8160f5b224ee5e85b286f393175a2->enter($__internal_d6baf3dabb1c549c0cbfab492943750e62a8160f5b224ee5e85b286f393175a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_26d0f0a69f033505f4b71fa6b44295e4b12ecc86dfa5ce20b76e6fbf4e5fa36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d0f0a69f033505f4b71fa6b44295e4b12ecc86dfa5ce20b76e6fbf4e5fa36b->enter($__internal_26d0f0a69f033505f4b71fa6b44295e4b12ecc86dfa5ce20b76e6fbf4e5fa36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d6baf3dabb1c549c0cbfab492943750e62a8160f5b224ee5e85b286f393175a2->leave($__internal_d6baf3dabb1c549c0cbfab492943750e62a8160f5b224ee5e85b286f393175a2_prof);

        
        $__internal_26d0f0a69f033505f4b71fa6b44295e4b12ecc86dfa5ce20b76e6fbf4e5fa36b->leave($__internal_26d0f0a69f033505f4b71fa6b44295e4b12ecc86dfa5ce20b76e6fbf4e5fa36b_prof);

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
