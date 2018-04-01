<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0c43e53643a1d605408c1a8b44e5963252b52fe480b7691261586aaa21d7dc6e extends Twig_Template
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
        $__internal_5708ea700f70343e9fe83c2d25c711edc2a5118722e0ded894c5a485841641fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5708ea700f70343e9fe83c2d25c711edc2a5118722e0ded894c5a485841641fc->enter($__internal_5708ea700f70343e9fe83c2d25c711edc2a5118722e0ded894c5a485841641fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_26f53bd53671e58d58175cd4e4554ff31e68da4fa1c9d5e401ff8f097112ba36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f53bd53671e58d58175cd4e4554ff31e68da4fa1c9d5e401ff8f097112ba36->enter($__internal_26f53bd53671e58d58175cd4e4554ff31e68da4fa1c9d5e401ff8f097112ba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5708ea700f70343e9fe83c2d25c711edc2a5118722e0ded894c5a485841641fc->leave($__internal_5708ea700f70343e9fe83c2d25c711edc2a5118722e0ded894c5a485841641fc_prof);

        
        $__internal_26f53bd53671e58d58175cd4e4554ff31e68da4fa1c9d5e401ff8f097112ba36->leave($__internal_26f53bd53671e58d58175cd4e4554ff31e68da4fa1c9d5e401ff8f097112ba36_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
