<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_513c0b06cd05342918183bb74a233a32ae421214a95a72b087b371f123b30ed4 extends Twig_Template
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
        $__internal_1db297359c9c14697818952461da0ecc15b6e95bde9b64415a12b78910a1e53c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db297359c9c14697818952461da0ecc15b6e95bde9b64415a12b78910a1e53c->enter($__internal_1db297359c9c14697818952461da0ecc15b6e95bde9b64415a12b78910a1e53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_744edb9bb9c60b0acfd67706c8037fda5af3b545021a4786e9fbfa9117ec0926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744edb9bb9c60b0acfd67706c8037fda5af3b545021a4786e9fbfa9117ec0926->enter($__internal_744edb9bb9c60b0acfd67706c8037fda5af3b545021a4786e9fbfa9117ec0926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1db297359c9c14697818952461da0ecc15b6e95bde9b64415a12b78910a1e53c->leave($__internal_1db297359c9c14697818952461da0ecc15b6e95bde9b64415a12b78910a1e53c_prof);

        
        $__internal_744edb9bb9c60b0acfd67706c8037fda5af3b545021a4786e9fbfa9117ec0926->leave($__internal_744edb9bb9c60b0acfd67706c8037fda5af3b545021a4786e9fbfa9117ec0926_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
