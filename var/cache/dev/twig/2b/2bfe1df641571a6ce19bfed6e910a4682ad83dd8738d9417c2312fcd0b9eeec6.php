<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_8296e5f73fea511e1bfa6391604a53da44f19eca1650f1079220c18cf1bc6daf extends Twig_Template
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
        $__internal_bd661a6ff4a3b8f46887bbed0a0a3d47b8ae3bf3149984395e25cd6f434a8ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd661a6ff4a3b8f46887bbed0a0a3d47b8ae3bf3149984395e25cd6f434a8ffe->enter($__internal_bd661a6ff4a3b8f46887bbed0a0a3d47b8ae3bf3149984395e25cd6f434a8ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d6aa7f351c3c6ea60c2a5d12a3dadfd8f363899c50a6d24b9db46f845a851bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6aa7f351c3c6ea60c2a5d12a3dadfd8f363899c50a6d24b9db46f845a851bb5->enter($__internal_d6aa7f351c3c6ea60c2a5d12a3dadfd8f363899c50a6d24b9db46f845a851bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bd661a6ff4a3b8f46887bbed0a0a3d47b8ae3bf3149984395e25cd6f434a8ffe->leave($__internal_bd661a6ff4a3b8f46887bbed0a0a3d47b8ae3bf3149984395e25cd6f434a8ffe_prof);

        
        $__internal_d6aa7f351c3c6ea60c2a5d12a3dadfd8f363899c50a6d24b9db46f845a851bb5->leave($__internal_d6aa7f351c3c6ea60c2a5d12a3dadfd8f363899c50a6d24b9db46f845a851bb5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
