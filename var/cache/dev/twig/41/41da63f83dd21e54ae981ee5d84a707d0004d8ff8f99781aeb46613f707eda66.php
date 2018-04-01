<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_10132686ddc5247c1642539e57d9500b0d91487c85cbe92ddebbd5e88600dffc extends Twig_Template
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
        $__internal_dfa1b7bd6c4099717243bf0dbcf9bb1a7e65316937bee994b38878dc3af2519c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa1b7bd6c4099717243bf0dbcf9bb1a7e65316937bee994b38878dc3af2519c->enter($__internal_dfa1b7bd6c4099717243bf0dbcf9bb1a7e65316937bee994b38878dc3af2519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_eef9e0a691e2aa85c1b92ee75c5fc12f650a381dcc0a8141be5b9f63fa3bc4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef9e0a691e2aa85c1b92ee75c5fc12f650a381dcc0a8141be5b9f63fa3bc4c6->enter($__internal_eef9e0a691e2aa85c1b92ee75c5fc12f650a381dcc0a8141be5b9f63fa3bc4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_dfa1b7bd6c4099717243bf0dbcf9bb1a7e65316937bee994b38878dc3af2519c->leave($__internal_dfa1b7bd6c4099717243bf0dbcf9bb1a7e65316937bee994b38878dc3af2519c_prof);

        
        $__internal_eef9e0a691e2aa85c1b92ee75c5fc12f650a381dcc0a8141be5b9f63fa3bc4c6->leave($__internal_eef9e0a691e2aa85c1b92ee75c5fc12f650a381dcc0a8141be5b9f63fa3bc4c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
