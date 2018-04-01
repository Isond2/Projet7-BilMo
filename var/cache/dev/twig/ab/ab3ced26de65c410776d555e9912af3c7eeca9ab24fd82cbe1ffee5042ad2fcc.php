<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_06434864a2ac8323aa98c3eeedd3c56ce3b258c596ba196dee0801f8e03665a1 extends Twig_Template
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
        $__internal_36b99fa05dbfed764bf04dfdcab0629d0b30e4797e9cb8e8e6572089d5cb8e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b99fa05dbfed764bf04dfdcab0629d0b30e4797e9cb8e8e6572089d5cb8e5d->enter($__internal_36b99fa05dbfed764bf04dfdcab0629d0b30e4797e9cb8e8e6572089d5cb8e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_ca0d1c8f8f41d402fae3045579e290359cd385d19229ed111c07704919393df2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0d1c8f8f41d402fae3045579e290359cd385d19229ed111c07704919393df2->enter($__internal_ca0d1c8f8f41d402fae3045579e290359cd385d19229ed111c07704919393df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_36b99fa05dbfed764bf04dfdcab0629d0b30e4797e9cb8e8e6572089d5cb8e5d->leave($__internal_36b99fa05dbfed764bf04dfdcab0629d0b30e4797e9cb8e8e6572089d5cb8e5d_prof);

        
        $__internal_ca0d1c8f8f41d402fae3045579e290359cd385d19229ed111c07704919393df2->leave($__internal_ca0d1c8f8f41d402fae3045579e290359cd385d19229ed111c07704919393df2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
