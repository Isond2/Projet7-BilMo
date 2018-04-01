<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_dca65b58c8bec37f465450fb1bf55b04d8c577f09986c8c7ecc0dd08366addcd extends Twig_Template
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
        $__internal_21610ea2d96403da082405963396dce3b6cb33621e1c1a3598a55a41a64efc6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21610ea2d96403da082405963396dce3b6cb33621e1c1a3598a55a41a64efc6d->enter($__internal_21610ea2d96403da082405963396dce3b6cb33621e1c1a3598a55a41a64efc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_4aea44719d25b54b7b4515606a2d4e998ce1d96f09e5573ff01b8c764607f2c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aea44719d25b54b7b4515606a2d4e998ce1d96f09e5573ff01b8c764607f2c8->enter($__internal_4aea44719d25b54b7b4515606a2d4e998ce1d96f09e5573ff01b8c764607f2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_21610ea2d96403da082405963396dce3b6cb33621e1c1a3598a55a41a64efc6d->leave($__internal_21610ea2d96403da082405963396dce3b6cb33621e1c1a3598a55a41a64efc6d_prof);

        
        $__internal_4aea44719d25b54b7b4515606a2d4e998ce1d96f09e5573ff01b8c764607f2c8->leave($__internal_4aea44719d25b54b7b4515606a2d4e998ce1d96f09e5573ff01b8c764607f2c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
