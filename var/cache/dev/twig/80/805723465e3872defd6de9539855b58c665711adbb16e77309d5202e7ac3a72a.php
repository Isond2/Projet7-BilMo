<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_bf5672c841ed07ab6cc5030c684a494a4b528b202a678ae7a748c6010b8df024 extends Twig_Template
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
        $__internal_db2bdf69ad39bf69304b85a099d326e5e5d17a28864a25e03504fe081ef2cf71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2bdf69ad39bf69304b85a099d326e5e5d17a28864a25e03504fe081ef2cf71->enter($__internal_db2bdf69ad39bf69304b85a099d326e5e5d17a28864a25e03504fe081ef2cf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_c5d8561a4ec12e4927cc770f538702654693332b0e38695289970c7289379b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d8561a4ec12e4927cc770f538702654693332b0e38695289970c7289379b76->enter($__internal_c5d8561a4ec12e4927cc770f538702654693332b0e38695289970c7289379b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_db2bdf69ad39bf69304b85a099d326e5e5d17a28864a25e03504fe081ef2cf71->leave($__internal_db2bdf69ad39bf69304b85a099d326e5e5d17a28864a25e03504fe081ef2cf71_prof);

        
        $__internal_c5d8561a4ec12e4927cc770f538702654693332b0e38695289970c7289379b76->leave($__internal_c5d8561a4ec12e4927cc770f538702654693332b0e38695289970c7289379b76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
