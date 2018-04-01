<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_72b20f3ab87a13d1e902f1c472aff9082db956eb7f76011500e688cc0a28c635 extends Twig_Template
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
        $__internal_eaa379f64ce0025b882f7a28e9453c25b28717a4cdbb638f2638ae9beb281b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa379f64ce0025b882f7a28e9453c25b28717a4cdbb638f2638ae9beb281b66->enter($__internal_eaa379f64ce0025b882f7a28e9453c25b28717a4cdbb638f2638ae9beb281b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_855e9e9dd604afd230f1920cbd9413ed008275146050d1861b0631a7c6071628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855e9e9dd604afd230f1920cbd9413ed008275146050d1861b0631a7c6071628->enter($__internal_855e9e9dd604afd230f1920cbd9413ed008275146050d1861b0631a7c6071628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_eaa379f64ce0025b882f7a28e9453c25b28717a4cdbb638f2638ae9beb281b66->leave($__internal_eaa379f64ce0025b882f7a28e9453c25b28717a4cdbb638f2638ae9beb281b66_prof);

        
        $__internal_855e9e9dd604afd230f1920cbd9413ed008275146050d1861b0631a7c6071628->leave($__internal_855e9e9dd604afd230f1920cbd9413ed008275146050d1861b0631a7c6071628_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
