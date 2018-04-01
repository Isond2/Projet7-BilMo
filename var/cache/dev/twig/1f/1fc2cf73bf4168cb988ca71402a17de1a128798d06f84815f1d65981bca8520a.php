<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_b7fb7310ae2b26efe73157ab89abc250eb701891c1d0308fc53f3b804b9bfda0 extends Twig_Template
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
        $__internal_c4d809a1dc1face4b3a29251424b3f1a21a47460c8d99e0d5ea89936dc6d9930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d809a1dc1face4b3a29251424b3f1a21a47460c8d99e0d5ea89936dc6d9930->enter($__internal_c4d809a1dc1face4b3a29251424b3f1a21a47460c8d99e0d5ea89936dc6d9930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_8f990715c7624ce59736667011ae27d28abc3fcb36bb993e835a7c43c8299940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f990715c7624ce59736667011ae27d28abc3fcb36bb993e835a7c43c8299940->enter($__internal_8f990715c7624ce59736667011ae27d28abc3fcb36bb993e835a7c43c8299940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_c4d809a1dc1face4b3a29251424b3f1a21a47460c8d99e0d5ea89936dc6d9930->leave($__internal_c4d809a1dc1face4b3a29251424b3f1a21a47460c8d99e0d5ea89936dc6d9930_prof);

        
        $__internal_8f990715c7624ce59736667011ae27d28abc3fcb36bb993e835a7c43c8299940->leave($__internal_8f990715c7624ce59736667011ae27d28abc3fcb36bb993e835a7c43c8299940_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
