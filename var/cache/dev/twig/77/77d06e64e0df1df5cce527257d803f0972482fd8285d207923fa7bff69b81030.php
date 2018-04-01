<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e33118c977f19af3ba55dc5e502accae231d8b59cd12ae974f9ffb09a80c1a3b extends Twig_Template
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
        $__internal_e988b82340ae97209cb95fee628c3520fa06537d0a32c63eab88259725cbe238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e988b82340ae97209cb95fee628c3520fa06537d0a32c63eab88259725cbe238->enter($__internal_e988b82340ae97209cb95fee628c3520fa06537d0a32c63eab88259725cbe238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_44255238126a09d866de323b81ae65839ac9e569ed7fd87fbf12a754ec5046b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44255238126a09d866de323b81ae65839ac9e569ed7fd87fbf12a754ec5046b3->enter($__internal_44255238126a09d866de323b81ae65839ac9e569ed7fd87fbf12a754ec5046b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e988b82340ae97209cb95fee628c3520fa06537d0a32c63eab88259725cbe238->leave($__internal_e988b82340ae97209cb95fee628c3520fa06537d0a32c63eab88259725cbe238_prof);

        
        $__internal_44255238126a09d866de323b81ae65839ac9e569ed7fd87fbf12a754ec5046b3->leave($__internal_44255238126a09d866de323b81ae65839ac9e569ed7fd87fbf12a754ec5046b3_prof);

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
