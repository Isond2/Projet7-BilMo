<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_09fa0d14af8e4e9ae440fe1a9d943264bf968518b5847ae861c6a7217abb288a extends Twig_Template
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
        $__internal_4269658a2730936cb562724b348ba99e735ec397b803e57e132beacac4d12301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4269658a2730936cb562724b348ba99e735ec397b803e57e132beacac4d12301->enter($__internal_4269658a2730936cb562724b348ba99e735ec397b803e57e132beacac4d12301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_58e98f6d72697bf824d145c7f64d2e371810daca2b2b1fff3936320672f8d9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e98f6d72697bf824d145c7f64d2e371810daca2b2b1fff3936320672f8d9a7->enter($__internal_58e98f6d72697bf824d145c7f64d2e371810daca2b2b1fff3936320672f8d9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_4269658a2730936cb562724b348ba99e735ec397b803e57e132beacac4d12301->leave($__internal_4269658a2730936cb562724b348ba99e735ec397b803e57e132beacac4d12301_prof);

        
        $__internal_58e98f6d72697bf824d145c7f64d2e371810daca2b2b1fff3936320672f8d9a7->leave($__internal_58e98f6d72697bf824d145c7f64d2e371810daca2b2b1fff3936320672f8d9a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
