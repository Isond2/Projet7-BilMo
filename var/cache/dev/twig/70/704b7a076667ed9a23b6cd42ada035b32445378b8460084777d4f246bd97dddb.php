<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_241f6292185e0b1629dd0d0c3dca4068ee778ce1a938c3ee8c5e7879014a643d extends Twig_Template
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
        $__internal_9587003bd579fa7c081438197967eb502997b9294503978b049813d86f1b3a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9587003bd579fa7c081438197967eb502997b9294503978b049813d86f1b3a98->enter($__internal_9587003bd579fa7c081438197967eb502997b9294503978b049813d86f1b3a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_80094be8a435de49307b174159b207cbaf5f091490ce95eb3be7ff9268fe1a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80094be8a435de49307b174159b207cbaf5f091490ce95eb3be7ff9268fe1a82->enter($__internal_80094be8a435de49307b174159b207cbaf5f091490ce95eb3be7ff9268fe1a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9587003bd579fa7c081438197967eb502997b9294503978b049813d86f1b3a98->leave($__internal_9587003bd579fa7c081438197967eb502997b9294503978b049813d86f1b3a98_prof);

        
        $__internal_80094be8a435de49307b174159b207cbaf5f091490ce95eb3be7ff9268fe1a82->leave($__internal_80094be8a435de49307b174159b207cbaf5f091490ce95eb3be7ff9268fe1a82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
