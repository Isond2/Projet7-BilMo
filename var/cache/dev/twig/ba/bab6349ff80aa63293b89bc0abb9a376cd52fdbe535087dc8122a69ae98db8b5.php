<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fded96b53d635520c8ef600f2d2db7f5efb3e22c0d43a0fc3739dcaf297d85d8 extends Twig_Template
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
        $__internal_7729720f5dd69b97aaf017cb93f7f57656f2e347fdf52e3384df5e77a6e74532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7729720f5dd69b97aaf017cb93f7f57656f2e347fdf52e3384df5e77a6e74532->enter($__internal_7729720f5dd69b97aaf017cb93f7f57656f2e347fdf52e3384df5e77a6e74532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_c1b9c8e8300f64c263d2f0bdd0f49a5e73bfbe236d5c983a672fc26b0b1bd5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b9c8e8300f64c263d2f0bdd0f49a5e73bfbe236d5c983a672fc26b0b1bd5f7->enter($__internal_c1b9c8e8300f64c263d2f0bdd0f49a5e73bfbe236d5c983a672fc26b0b1bd5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7729720f5dd69b97aaf017cb93f7f57656f2e347fdf52e3384df5e77a6e74532->leave($__internal_7729720f5dd69b97aaf017cb93f7f57656f2e347fdf52e3384df5e77a6e74532_prof);

        
        $__internal_c1b9c8e8300f64c263d2f0bdd0f49a5e73bfbe236d5c983a672fc26b0b1bd5f7->leave($__internal_c1b9c8e8300f64c263d2f0bdd0f49a5e73bfbe236d5c983a672fc26b0b1bd5f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
