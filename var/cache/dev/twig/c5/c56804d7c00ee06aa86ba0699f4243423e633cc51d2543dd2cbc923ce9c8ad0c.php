<?php

/* NelmioApiDocBundle::Components/motd.html.twig */
class __TwigTemplate_7dfab112e6ded670cbab10f21c35b543bc57fd6a2b372bfbe0f0bd02dc88c22d extends Twig_Template
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
        $__internal_e6fa96d37f7d6cbc2a31839f0a4f9fdafbafb3e99fc79a248ba446eeef74aac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6fa96d37f7d6cbc2a31839f0a4f9fdafbafb3e99fc79a248ba446eeef74aac1->enter($__internal_e6fa96d37f7d6cbc2a31839f0a4f9fdafbafb3e99fc79a248ba446eeef74aac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        $__internal_7ff148f0b2d9e950a226dce547a8183d37c8bb32f176ffc7dc5d17160fbf78d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff148f0b2d9e950a226dce547a8183d37c8bb32f176ffc7dc5d17160fbf78d2->enter($__internal_7ff148f0b2d9e950a226dce547a8183d37c8bb32f176ffc7dc5d17160fbf78d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::Components/motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_e6fa96d37f7d6cbc2a31839f0a4f9fdafbafb3e99fc79a248ba446eeef74aac1->leave($__internal_e6fa96d37f7d6cbc2a31839f0a4f9fdafbafb3e99fc79a248ba446eeef74aac1_prof);

        
        $__internal_7ff148f0b2d9e950a226dce547a8183d37c8bb32f176ffc7dc5d17160fbf78d2->leave($__internal_7ff148f0b2d9e950a226dce547a8183d37c8bb32f176ffc7dc5d17160fbf78d2_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::Components/motd.html.twig";
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
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle::Components/motd.html.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
